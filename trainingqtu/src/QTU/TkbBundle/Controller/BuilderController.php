<?php
namespace QTU\TkbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use QTU\TkbBundle\Entity\ScheduleDetail;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BuilderController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        //get Faculties
        $faculties = $em->getRepository('QTUTkbBundle:Faculty')->findBy(array('isStudentManagement'=>true));
        //get Classes
        $classes = $em->getRepository('QTUTkbBundle:ClassP')->findBy(array('stillStudy'=>true));
        //get Users
        $users = $em->getRepository('ApplicationSonataUserBundle:User')->findBy(array('enabled'=>true));
        //get rooms data
        $rooms = $em->getRepository('QTUTkbBundle:Room')->findBy(array(),array('name' => 'ASC'));
        //get terms data
        $terms = $em->getRepository('QTUTkbBundle:Term')->findBy(array(),array('year' => 'ASC'));
        
        //
//        var_dump($faculties);
        return $this->render('QTUTkbBundle:Builder:builder1.2.html.twig', array(
            'faculties' => $faculties,
            'classes' => $classes,
            'users' => $users,
            'rooms' => $rooms,
            'terms' => $terms,
        ));
    }
    
    public function filterAction(Request $request) {
        if ($request->isXMLHttpRequest()) {
            $className = $request->query->get('class','');
            $faculty = $request->query->get('faculty','');
            $courseName = $request->query->get('course','');
            $instructorName = $request->query->get('instructor','');
            $term = $request->query->get('term','');            
            $time_start = $request->query->get('time_start',$this->container->getParameter('current_time_start'));
            $time_end = $request->query->get('time_end',$this->container->getParameter('current_time_end'));
            
            $em = $this->getDoctrine()->getManager();
            $courses = $em->getRepository('QTUTkbBundle:Course')->findCourseBy($faculty, $className, $courseName, $instructorName, $term, $time_start, $time_end);

            return $this->render('QTUTkbBundle:Builder:buildertimetable_all_filter.html.twig', array('courses'=>$courses));
        } else {
            throw new NotFoundHttpException("Page not found");
        }

    }
    
    public function instructorAction(Request $request) {
        if ($request->isXMLHttpRequest()) {
            $instructorId = $request->query->get('id','');
            $termId = $request->query->get('term',$this->container->getParameter('current_term_id'));

            $em = $this->getDoctrine()->getManager();
            $instructor = $em->getRepository('ApplicationSonataUserBundle:User')->findOneBy(array('id'=>$instructorId));
            $courses = $em->getRepository('QTUTkbBundle:Course')->findCourseByInstructor($instructorId, $termId);

            return $this->render('QTUTkbBundle:Builder:buildertimetable_instructor_admin.html.twig', array('courses'=>$courses, 'instructor'=>$instructor));
        } else {
            throw new NotFoundHttpException("Page not found");
        }
    }
    
    public function saveAction(Request $request) {
        if ($request->isXMLHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            
            $newData = json_decode($request->get('newdata',''));
            $delData = json_decode($request->get('deldata',''));
            $noticeInstructor_id = array();
            $noticeInstructors = array();
            $noticeClass_id = array();
            $noticeClasses = array();
            //add new data
            foreach($newData as $new){
                foreach($new->detail as $detail_data) {
                    $detail = new ScheduleDetail();
                    $course = $em->getRepository('QTUTkbBundle:Course')->find(intval($new->id));
                    $instructor = $em->getRepository('ApplicationSonataUserBundle:User')->find(intval($detail_data->instructor_id));
                    $room = $em->getRepository('QTUTkbBundle:Room')->find(intval($detail_data->room));
                    $ok = true;
                    if($course != null){
                        $detail->setCourse($course);
                    } else { $ok = false;}
                    if($room != null) {
                        $detail->setRoom($room);
                    } else { $ok = false; }
                    if($instructor != null) {
                        $detail->setInstructor($instructor);
                    }
                    if ($ok){
                        $detail->setDateOccur(\DateTime::createFromFormat('d/m/Y', $detail_data->dateOccur));
                        $detail->setPeriod($detail_data->period);
                        $detail->setTypeDetail($detail_data->type);
                        $em->persist($detail);
                        
                        //get instructors list to mail
                        if(!in_array($instructor->getId(), $noticeInstructor_id)) {
                            $noticeInstructor_id[] = $instructor->getId();
                            $noticeInstructors[] = array('instructor'=>$instructor,
                                'detail'=>array('Bổ sung ngày: '.$detail_data->dateOccur.', tiết '.$detail_data->period . ', phòng '.$room->getName().' - Môn '.$course->getName())
                                );
                        } else {
                            $noticeInstructors[array_search($instructor->getId(),$noticeInstructor_id)]['detail'][] = 'Bổ sung ngày: '.$detail_data->dateOccur.', tiết '.$detail_data->period . ', phòng '.$room->getName().' - môn '.$course->getName();
                        }
                        //get classes list to mail
                        foreach($course->getClasses() as $class) {
                            if(!in_array($class->getId(), $noticeClass_id)) {
                                $noticeClass_id[] = $class->getId();
                                $noticeClasses[] = array('class'=>$class,
                                    'detail'=>array('Bổ sung ngày: '.$detail_data->dateOccur.', tiết '.$detail_data->period . ', phòng '.$room->getName().' - Môn '.$course->getName())
                                    );
                            } else {
                                $noticeClasses[array_search($class->getId(),$noticeClass_id)]['detail'][] = 'Bổ sung ngày: '.$detail_data->dateOccur.', tiết '.$detail_data->period . ', phòng '.$room->getName().' - môn '.$course->getName();
                            }
                        }
                    }
                }
            }
            //deldata
            foreach($delData as $idData){
                $detail = $em->getRepository('QTUTkbBundle:ScheduleDetail')->find($idData);
                if($detail != null) {
                    $em->remove($detail);
                    
                    //get instructors list to mail
                    $instructor = $detail->getInstructor();
                    if($instructor!=null) {
                        if(!in_array($instructor->getId(), $noticeInstructor_id)) {
                            $noticeInstructor_id[] = $instructor->getId();
                            $noticeInstructors[] = array('instructor'=>$instructor,
                                'detail'=>array('Xóa tiết '.$detail->getPeriod(). ' ngày '.$detail->getDateOccur()->format('d/m/Y').', môn "'.$detail->getCourse()->getName().'"')
                                );
                        } else {
                            $noticeInstructors[array_search($instructor->getId(),$noticeInstructor_id)]['detail'][] = 'Xóa tiết '.$detail->getPeriod(). ' ngày '.$detail->getDateOccur()->format('d/m/Y').', môn "'.$detail->getCourse()->getName().'"';
                        }
                    }
                    //get classes list to mail
                    $classes = $detail->getCourse()->getClasses();
                    foreach($classes as $class) {
                        if(!in_array($class->getId(), $noticeClass_id)) {
                            $noticeClass_id[] = $class->getId();
                            $noticeClasses[] = array('class'=>$class,
                                'detail'=>array('Xóa tiết '.$detail->getPeriod(). ' ngày '.$detail->getDateOccur()->format('d/m/Y').', môn "'.$detail->getCourse()->getName().'"')
                                );
                        } else {
                            $noticeClasses[array_search($class->getId(),$noticeClass_id)]['detail'][] = 'Xóa tiết '.$detail->getPeriod(). ' ngày '.$detail->getDateOccur()->format('d/m/Y').', môn "'.$detail->getCourse()->getName().'"';
                        }
                    }
                }
            }
            $em->flush();

//            $logger = $this->get('monolog.logger.tkb');

            //mail to Instructors
            foreach($noticeInstructors as $instructor_data) {
                $instructor = $instructor_data['instructor'];
                if ($instructor->getEmail()!='') {
                    $message = \Swift_Message::newInstance()
                        ->setSubject('[TKB] THÔNG BÁO THAY ĐỔI LỊCH GIẢNG')
                        ->setFrom('tkb@quangtrung.edu.vn')
                        ->setTo($instructor->getEmail())
                        ->setBody($this->renderView('QTUTkbBundle:SwiftMailer:changetimetable.html.twig', array('user'=>$instructor,'details'=>$instructor_data['detail'])))
                    ;
                    $message->setContentType("text/html");
                    $this->get('mailer')->send($message);
                }
//                $logger->alert("User ".$this->getUser()->getUsername() . " email: " . $this->renderView('QTUTkbBundle:SwiftMailer:changetimetable.html.twig', array('user'=>$instructor,'details'=>$instructor_data['detail'])));
            }
            //mail to class
            foreach($noticeClasses as $class_data) {
                $class = $class_data['class'];
                $emails = array_filter(explode(',',str_replace(' ','',$class->getEmail())));
                if (count($emails) > 0) {
                    $message = \Swift_Message::newInstance()
                        ->setSubject('[TKB] THÔNG BÁO THAY ĐỔI LỊCH GIẢNG')
                        ->setFrom('tkb@quangtrung.edu.vn')
                        ->setTo($emails)
                        ->setBody($this->renderView('QTUTkbBundle:SwiftMailer:changetimetable_class.html.twig', array('classP'=>$class, 'details'=>$class_data['detail'])))
                    ;
                    $message->setContentType("text/html");
                    $this->get('mailer')->send($message);
                }
            }
            
            $response = new JsonResponse(array(
                'success' => 'success',
            ));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }
    }
    
}
