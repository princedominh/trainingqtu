<?php
namespace QTU\TkbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use QTU\CommonBundle\Entity\Contact;
//use QTU\CommonBundle\Form\Type\ContactType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $today = new \DateTime();
        //get Departments
        $departments = $em->getRepository('QTUDepartmentMajorBundle:Department')->findBy(array('is_student_management'=>true));
        //get ClassManagements
        $query = $em->createQuery(''
                . 'SELECT c '
                . 'FROM QTUStudentBundle:ClassManagement c '
                . 'WHERE (c.admissionYear < :thisyear) '
                . 'and c.graduationYear >= :thisyear ')
                ->setParameter("thisyear",$today->format("Y"));
        $class_managements = $query->getResult();
        //get Users
        $users = $em->getRepository('ApplicationSonataUserBundle:User')->findBy(array('enabled'=>true));
        //get term data
        $terms = $em->getRepository('QTUMarkBundle:Term')->findAll();
        $currentTerm = $em->getRepository('QTUMarkBundle:Term')->findOneBy(array('id'=>$this->container->getParameter('current_term_id')));
        //get Notice data
//        $notices = $em->getRepository('QTUCommonBundle:Notice')->findBy(array(), array('createdAt' => 'DESC'),5);

        return $this->render('QTUTkbBundle:Default:index_angular.html.twig', array(
            'classes'       => $class_managements,
//            'notices'       => $notices,
            'terms'         => $terms,
            'current_term'  => $currentTerm,
        ));
    }
    
    public function timetableAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        //get Faculties
        $faculties = $em->getRepository('QTUTkbBundle:Faculty')->findBy(array('isStudentManagement'=>true));
        //get Classes
        $classes = $em->getRepository('QTUTkbBundle:ClassP')->findBy(array('stillStudy'=>true));
        //get Users
        $users = $em->getRepository('ApplicationSonataUserBundle:User')->findBy(array('enabled'=>true));
        //get Week data
        
        //get Notice data
        $notices = $em->getRepository('QTUCommonBundle:Notice')->findBy(array(), array('createdAt' => 'DESC'),5);

        return $this->render('QTUTkbBundle:Default:timetable.html.twig', array(
            'classes' => $classes,
            'notices' => $notices,
        ));
    }
    
    public function classFilterAction(Request $request) {
        $time_start = $this->container->getParameter('current_time_start');
        $time_end = $this->container->getParameter('current_time_end');
//        var_dump($time_start);die;
        if ($request->isXMLHttpRequest()) {
            $className = $request->query->get('class','');
            $em = $this->getDoctrine()->getManager();
            if($className!='') {
                $classP = $em->getRepository('QTUTkbBundle:ClassP')->findOneBy(array('stillStudy'=>true,'name'=>$className));
                if($classP){
                    //get all course of this class
                    $courses = $em->getRepository('QTUTkbBundle:Course')->findCourseByClass($className,$time_start,$time_end);
                    return $this->render('QTUTkbBundle:Default:timetable_class_filter.html.twig', array('courses'=>$courses));
                }
            }
            return $this->render('QTUTkbBundle:Default:timetable_class_empty.html.twig');
        } else {
            throw new NotFoundHttpException("Page not found");
        }
    }
    
    public function classFilterJsonAction(Request $request) {
        $data = json_decode($request->getContent(), true);
        $request->request->replace($data);
        
        $className = $request->request->get('classname','');
        $em = $this->getDoctrine()->getManager();
        if($className!='') {
            $classP = $em->getRepository('QTUTkbBundle:ClassP')->findOneBy(array('stillStudy'=>true,'name'=>$className));
            if($classP){
                $termId = $request->request->get('termid',$classP->getCurrentTerm()->getId());
                //get all course of this class
                $courses = $em->getRepository('QTUTkbBundle:Course')->findCourseByClass($className, $termId);
                $dataOutput = array();
                foreach ($courses as $course) {
                    $temp= array(
                        'id'=>$course->getId(),
                        'name'=>$course->getName(),
                        'classHours'=>$course->getClassHours(),
                        'lapHours'=>$course->getLabHours(),
                        'proHours'=>$course->getProjectHours(),
                    );
                    $temp2 = array(); //instructors
                    foreach($course->getInstructors() as $instructor) {
                        $temp2[] = array(
                            'id'=>$instructor->getId(),
                            'firstname'=>$instructor->getFirstName(),
                            'lastname'=>$instructor->getLastName(),
                        );
                    }
                    $temp['instructors'] = $temp2;
                    $temp2 = array(); //scheduleDetails
                    foreach($course->getScheduleDetails() as $detail) {
                        $temp2[] = array(
                            'id'=>$detail->getId(),
                            'dateOccur'=>$detail->getDateOccur(),
                            'period'=>$detail->getPeriod(),
                            'description'=>$detail->getDescription(),
                            'room'=>$detail->getRoom()->getName(),
                            'instructor'=>(($detail->getInstructor()) ? array('id'=>$detail->getInstructor()->getId(),
                                'firstname'=>$detail->getInstructor()->getFirstName(),
                                'lastname'=>$detail->getInstructor()->getLastName(),
                            ): null),
                        );
                    }
                    $temp['details'] = $temp2;
                    $dataOutput[] = $temp;
                }
                $response = new JsonResponse($dataOutput);
            }
        }else {
            $response = new JsonResponse(
                    array(
                        'success' => 'false'
                    )
                );
        }
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
