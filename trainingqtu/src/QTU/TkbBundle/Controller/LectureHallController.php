<?php
namespace QTU\TkbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class LectureHallController extends Controller {
    
    public function dayAction(){
        $em = $this->getDoctrine()->getManager();
        //get Rooms
        $rooms = $em->getRepository('QTUTkbBundle:Room')->findBy(array(),array('name' => 'ASC'));
        return $this->render('QTUTkbBundle:Room:use_byday.html.twig', array(
            'rooms' => $rooms,
            'date'=> new \DateTime(),
        ));        
    }
    public function weekAction(){
        $em = $this->getDoctrine()->getManager();
        //get Rooms
        $rooms = $em->getRepository('QTUTkbBundle:Room')->findBy(array(),array('name' => 'ASC'));
        return $this->render('QTUTkbBundle:Room:use_byweek.html.twig', array(
            'rooms' => $rooms,
        ));
    }
    
    public function eachWeekAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $startDay = $request->query->get('start','');
        $endDay = $request->query->get('end','');
        
        
        if($startDay=='' || $endDay=='') {
            $response = new JsonResponse(array(
                'success' => 'fail',
            ));
        } else {
            $sheduleDetails = $em->getRepository('QTUTkbBundle:ScheduleDetail')->findIn($startDay,$endDay);
            $data = array();
            if($sheduleDetails){
                foreach ($sheduleDetails as $detail) {
                    $data[] = array(
                        'N'=> date('N', date_timestamp_get($detail->getDateOccur())), //day of the week
                        'period' =>$detail->getPeriod(),
                        'room' =>$detail->getRoom()->getId(),
                        'hasdone' =>$detail->getHasDone(),
                        'is_late' =>$detail->getInLate(),
                        'description' =>$detail->getDescription(),
                        'course' => array(
                            'id'=> $detail->getCourse()->getId(),
                            'classes' => $this->getClassesName($detail->getCourse()->getClasses()),
                            'name'=>$detail->getCourse()->getName(),
                            'instructors'=>$this->getInstrutorsName($detail->getCourse()->getInstructors()),
//                            'date' => $detail->getDateOccur(),
                            'detail_id'=> $detail->getId(),
//                            'classes' => $this->getClassesName($detail->getCourse()->getClasses()),
//                            'instructors' =>  $this->getInstrutorsName($detail->getCourse()->getInstructors()) ,
                        ),
                    );
                }
            }
            $response = new JsonResponse(array(
                'success' => 'success',
                'submit_disabled' => (date("d/m/Y")==$detail->getDateOccur()->format('d/m/Y')) ? "": "disabled",
//                'server_date' => $detail->getDateOccur()->format('d/m/Y'),
                'data' => $data,
            ));
        }
        
        $response->headers->set('Content-Type', 'application/json');
        return $response;            
    }
    
    public function filterAction() {
        $em = $this->getDoctrine()->getManager();
        //get Rooms
        $rooms = $em->getRepository('QTUTkbBundle:Room')->findBy(array(),array('name' => 'ASC'));
        return $this->render('QTUTkbBundle:Room:use_filter.html.twig', array(
            'rooms' => $rooms,
        ));
    }
    
    public function filterRoomAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $startDay = $request->query->get('start','');
        $endDay = $request->query->get('end','');
        
        if($startDay=='' || $endDay=='') {
            $response = new JsonResponse(array(
                'success' => 'fail',
            ));
        } else {
            $sheduleDetails = $em->getRepository('QTUTkbBundle:ScheduleDetail')->findIn($startDay,$endDay);
        }        
    }
    
    public function saveDetailAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $detail_id = $request->request->get('detail_id','');
        if($schedule_detail = $em->getRepository('QTUTkbBundle:ScheduleDetail')->findOneBy(array('id'=>$detail_id))) {
            if($this->inRightPeriod($schedule_detail->getPeriod())) {
                $schedule_detail->setHasDone($request->request->get('hasdone',''));
                $schedule_detail->setInLate($request->request->get('late',''));
                $schedule_detail->setDescription($request->request->get('description',''));
                $em->flush();
                $response = new JsonResponse(array(
                    'success' => 'success',
                ));
                
                if(empty($request->request->get('hasdone',''))||!empty($request->request->get('description',''))) {
                    //$this->mailReport($schedule_detail);
                }
                //email to: lecturer, inspection, faculty
                
            } else {
                $response = new JsonResponse(array(
                    'success' => 'not right',
                ));
            }
        } else {
            $response = new JsonResponse(array(
                    'success' => 'error',
                ));
        }

        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    private function mailReport($schedule_detail){
        $instructor = $schedule_detail->getInstructor();
        $faculty = $instructor->getFaculty();
        $course = $schedule_detail->getCourse();
        $message = \Swift_Message::newInstance()
            ->setSubject('[TKB] THÔNG BÁO GHI NHẬN CỦA QUẢN LÝ GIẢNG ĐƯỜNG ' . $schedule_detail->getDateOccur()->format("Y-m-d"))
            ->setFrom('tkb@quangtrung.edu.vn')
            ->setTo($instructor->getEmail())
            ->setCc(array_merge($this->container->getParameter('mailer_inspection'),array($faculty->getEmail())))
            ->setBody($this->renderView('QTUTkbBundle:SwiftMailer:report_attendance.html.twig', 
                    array('user'=>$instructor,
                        'course'=>$course,
                        'classes'=>  $this->getClassesName($course->getClasses()),
                        'schedule_detail'=>$schedule_detail,
//                        'details'=>$instructor_data['detail']
                    )))
        ;
        $message->setContentType("text/html");
        $this->get('mailer')->send($message);
        
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
    
    private function getInstrutorsName($instuctors){
        $inst = "";
        $c_cls = count($instuctors);
        $i = 0;
        foreach($instuctors as $instuctor) {
            $inst .= $instuctor->getLastName() . " ".$instuctor->getFirstName();
            if(++$i!=$c_cls) {
                $inst .= ", ";
            }
        }
        return $inst;
    }
    
    private function inRightPeriod($period) {
        $thisdatetime = new \DateTime();
        $limit_m_begin = \DateTime::createFromFormat("Y-m-d H:i:s", $thisdatetime->format("Y-m-d") . " 00:00:10");
        $limit_m_end = \DateTime::createFromFormat("Y-m-d H:i:s", $thisdatetime->format("Y-m-d") . " 11:40:00");
        
        $limit_a_begin = \DateTime::createFromFormat("Y-m-d H:i:s", $thisdatetime->format("Y-m-d") . " 13:10:00");
        $limit_a_end = \DateTime::createFromFormat("Y-m-d H:i:s", $thisdatetime->format("Y-m-d") . " 17:10:00");

        $limit_e_begin = \DateTime::createFromFormat("Y-m-d H:i:s", $thisdatetime->format("Y-m-d") . " 18:10:00");
        $limit_e_end = \DateTime::createFromFormat("Y-m-d H:i:s", $thisdatetime->format("Y-m-d") . " 21:20:00");

        if(in_array($period, array("1-4","1-3","2-4","1-2","3-4","1","3"))) {
            return(($thisdatetime > $limit_m_begin)&&($thisdatetime <= $limit_m_end));
        } else if (in_array($period, array("5-8","5-7","6-8","5-6","7-8","5","7"))){
            return(($thisdatetime > $limit_a_begin)&&($thisdatetime <= $limit_a_end));
        } else if (in_array($period, array("9-11","9-10","10-11"))) {
            return(($thisdatetime > $limit_e_begin)&&($thisdatetime <= $limit_e_end));
        }
        return false;
    }
}
