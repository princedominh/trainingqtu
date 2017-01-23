<?php

namespace QTU\TkbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ReportController extends Controller
{
    public function indexAction()
    {
        return $this->render('QTUTkbBundle:Report:index.html.twig', array(
        ));
    }
    
    public function findCoincidenceRoomAction() {
        $em = $this->getDoctrine()->getManager();
        //get terms data
        $terms = $em->getRepository('QTUTkbBundle:Term')->findBy(array(),array('year' => 'ASC'));
        $currentTerm = $em->getRepository('QTUTkbBundle:Term')->findOneBy(array('id'=>$this->container->getParameter('current_term_id')));
        //get Rooms
        $rooms = $em->getRepository('QTUTkbBundle:Room')->findBy(array(),array('name'=>'ASC'));

        return $this->render('QTUTkbBundle:Report:coincidence_room.html.twig', array(
            'rooms' => $rooms,
        ));        
    }
    public function findCoincidenceRoomDetailAction(Request $request) {
        if ($request->isXMLHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $rooms = $em->getRepository('QTUTkbBundle:Room')->findBy(array(),array('name'=>'ASC'));
            $coincidencesRooms = array();
            foreach($rooms as $room){
                //get scheduleDetails by room
                $scheduleDetails = $em->getRepository('QTUTkbBundle:ScheduleDetail')->findInRoom($request->query->get('dateBegin',''),$request->query->get('dateEnd',''),$room->getName());
                $scheduleArray = array();
                var_dump($scheduleDetails);
                foreach($scheduleDetails as $scheduleDetail){
                    $scheduleArray[] = array(
                        'id'=>$scheduleDetails->getId(),
                        'dateOccur'=>$scheduleDetails->getDateOccur(),
                        'period'=>$scheduleDetails->getPeriod(),
                        'classes'=>$scheduleDetails->getCourse()->getClasses(),                        
                    );
                }
                $coincidences = $this->checkCoincidence($scheduleArray);
                $coincidencesRooms[] = array(
                    "room_id"=>$room->getId(),
                    "coincidences"=>$coincidences,
                );
            }
            $response = new JsonResponse($coincidencesRooms);
            $response->headers->set('Content-Type', 'application/json');
            return $response;
//            return $this->render('QTUTkbBundle:Report:coincidence_room_detail.html.twig', array(
//                'coincidencesRooms' => ($coincidencesRooms),
//            ));
        } else {
            throw new NotFoundHttpException("Page not found");
        }   
    }
    
    public function findCoincidenceClassAction() {
        $em = $this->getDoctrine()->getManager();
        //get terms data
        $terms = $em->getRepository('QTUTkbBundle:Term')->findBy(array(),array('year' => 'ASC'));
        $currentTerm = $em->getRepository('QTUTkbBundle:Term')->findOneBy(array('id'=>$this->container->getParameter('current_term_id')));
        //get Classes
        $classes = $em->getRepository('QTUTkbBundle:ClassP')->findBy(array('stillStudy'=>true),array('faculty'=>'ASC'));

        return $this->render('QTUTkbBundle:Report:coincidence_class.html.twig', array(
            'CurrentTerm' => $currentTerm,
            'terms' => $terms,
            'classes' => $classes,
        ));        
    }
    public function findCoincidenceClassDetailAction(Request $request) {
        if ($request->isXMLHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            //get terms data
            $currentTerm = $em->getRepository('QTUTkbBundle:Term')->findOneBy(array('id'=>$request->query->get('termid',$this->container->getParameter('current_term_id'))));
            //get ClassP
            $classP = $em->getRepository('QTUTkbBundle:ClassP')->findOneBy(array('id'=>$request->query->get('clsid','')));
            
            if($classP) {
                $courses = $em->getRepository('QTUTkbBundle:Course')->findCourseByClass($classP->getName(), $currentTerm->getId());
                $scheduledetails = array();
                foreach($courses as $course) {
                    $scheduledetails = array_merge($scheduledetails, $course->getScheduleDetailsArray());
                }
                $coincidences = $this->checkCoincidence($scheduledetails);
                return $this->render('QTUTkbBundle:Report:coincidence_class_detail.html.twig', array(
                    'coincidences' => ($coincidences),
                ));}
            else {
                throw new NotFoundHttpException("Instructor not found");
            }
        } else {
            throw new NotFoundHttpException("Page not found");
        }
    }

    public function findCoincidenceInstructorAction() {
        $em = $this->getDoctrine()->getManager();
        //get terms data
        $terms = $em->getRepository('QTUTkbBundle:Term')->findBy(array(),array('year' => 'ASC'));
        $currentTerm = $em->getRepository('QTUTkbBundle:Term')->findOneBy(array('id'=>$this->container->getParameter('current_term_id')));
        //get Users
        $instructors = $em->getRepository('ApplicationSonataUserBundle:User')->findBy(array('enabled'=>true,'qtuType'=>0),array('faculty'=>'ASC'));

        return $this->render('QTUTkbBundle:Report:coincidence_instructor.html.twig', array(
            'CurrentTerm' => $currentTerm,
            'terms' => $terms,
            'instructors' => $instructors,
        ));        
    }
    public function findCoincidenceInstructorDetailAction(Request $request) {
        if ($request->isXMLHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            //get terms data
            $currentTerm = $em->getRepository('QTUTkbBundle:Term')->findOneBy(array('id'=>$request->query->get('termid',$this->container->getParameter('current_term_id'))));
            //get User
            $instructor = $em->getRepository('ApplicationSonataUserBundle:User')->findOneBy(array('id'=>$request->query->get('insid','')));
            
            if($instructor) {
                $courses = $em->getRepository('QTUTkbBundle:Course')->findCourseByInstructor($instructor->getId(), $currentTerm->getId());
                $scheduledetails = array();
                foreach($courses as $course) {
                    $scheduledetails = array_merge($scheduledetails, $course->getScheduleDetailsArray());
                }
                $coincidences = $this->checkCoincidence($scheduledetails);
                return $this->render('QTUTkbBundle:Report:coincidence_instructor_detail.html.twig', array(
                    'coincidences' => ($coincidences),
                ));}
            else {
                throw new NotFoundHttpException("Instructor not found");
            }
        } else {
            throw new NotFoundHttpException("Page not found");
        }
    }
    
    private function checkCoincidence($scheduledetails) {
        $coincidences = array();
        $s_length = count($scheduledetails);
        for($i=0; $i<$s_length-1; $i++) {
            for($j=$i+1; $j<$s_length; $j++) {
                if($scheduledetails[$i]["dateOccur"] == $scheduledetails[$j]["dateOccur"]){
                    if($this->isCoincidencePeriod($scheduledetails[$i]["period"],$scheduledetails[$j]["period"])){
                        $coincidences[] = array("d1"=>$scheduledetails[$i], "d2"=>$scheduledetails[$j]);
                    }
                }
            }
        }
        return $coincidences;
    }
    private function isCoincidencePeriod($per1, $per2){
        switch ($per1) {
            case "1" : return (($per2=="1")||($per2=="1-2")||($per2=="1-3")||($per2=="1-4")); //break;
            case "3" : return (($per2=="3")||($per2=="1-3")||($per2=="1-4")||($per2=="2-4")); //break;
            case "5" : return (($per2=="5")||($per2=="5-6")||($per2=="5-7")||($per2=="5-8")); //break;
            case "7" : return (($per2=="7")||($per2=="5-7")||($per2=="5-8")||($per2=="6-8")); //break;
            case "1-3" : return (($per2=="1")||($per2=="3")||($per2=="1-3")||($per2=="1-2")||($per2=="3-4")||($per2=="2-4")||($per2=="1-4")); //break;
            case "1-2" : return (($per2=="1")||($per2=="1-3")||($per2=="1-2")||($per2=="2-4")||($per2=="1-4")); //break;
            case "3-4" : return (($per2=="3")||($per2=="1-3")||($per2=="3-4")||($per2=="2-4")||($per2=="1-4")); //break;
            case "2-4" : return (($per2=="3")||($per2=="1-3")||($per2=="1-2")||($per2=="3-4")||($per2=="2-4")||($per2=="1-4")); //break;
            case "1-4" : return (($per2=="1")||($per2=="3")||($per2=="1-3")||($per2=="1-2")||($per2=="3-4")||($per2=="2-4")||($per2=="1-4")); //break;
            case "5-7" : return (($per2=="5")||($per2=="7")||($per2=="5-7")||($per2=="5-6")||($per2=="7-8")||($per2=="6-8")||($per2=="5-8")); //break;
            case "5-6" : return (($per2=="5")||($per2=="5-7")||($per2=="5-6")||($per2=="6-8")||($per2=="5-8")); //break;
            case "7-8" : return (($per2=="7")||($per2=="5-7")||($per2=="7-8")||($per2=="6-8")||($per2=="5-8")); //break;
            case "5-8" : return (($per2=="5")||($per2=="7")||($per2=="5-7")||($per2=="5-6")||($per2=="7-8")||($per2=="6-8")||($per2=="5-8")); //break;
            case "6-8" : return (($per2=="5")||($per2=="7")||($per2=="5-7")||($per2=="5-6")||($per2=="7-8")||($per2=="6-8")||($per2=="5-8")); //break;
            case "9-11" : return (($per2=="9-11")||($per2=="9-10")||($per2=="10-11")); //break;
            case "9-10" : return (($per2=="9-11")||($per2=="9-10")||($per2=="10-11")); //break;
            case "10-11" : return (($per2=="9-11")||($per2=="9-10")||($per2=="10-11")); //break;
        }
    }



    public function combineClassAction(Request $request)
    {
        $time_start = $this->container->getParameter('current_time_start');
        $time_end = $this->container->getParameter('current_time_end');
        $className = $request->query->get('class','');
        $faculty = $request->query->get('faculty','');
        $courseName = $request->query->get('course','');
        $instructorName = $request->query->get('instructor','');
        $projector = $request->query->get('projector','');

        $em = $this->getDoctrine()->getManager();
        $courses = $em->getRepository('QTUTkbBundle:Course')->findCourseBy($faculty, $className, $courseName, $instructorName, $projector, $time_start, $time_end);
        $filtered_courses = array();
        foreach($courses as $course){
            if(count($course->getClasses())>1){
                $filtered_courses[] = array('obj'=>$course, 'classname'=>  $this->getClassesName($course->getClasses()));
            }
        }
        return $this->render('QTUTkbBundle:Report:combineClass.html.twig', array( 'courses'=>$filtered_courses
        ));
    }
    
    private function getClassesName($classes) {
        $name = "";
        $c_cls = count($classes);
        $i = 0;
        foreach($classes as $class) {
            $name .= $class->getName();
            if(++$i!=$c_cls) {
                $name .= ", ";
            }
        }
        return $name;
    }
}
