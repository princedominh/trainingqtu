<?php
namespace QTU\TkbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MyTimeTableController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $currentTerm = $em->getRepository('QTUTkbBundle:Term')->findOneBy(array('id'=>$this->container->getParameter('current_term_id')));
        $terms = $em->getRepository('QTUTkbBundle:Term')->findAll();

        //get Notice data
        $notices = $em->getRepository('QTUCommonBundle:Notice')->findBy(array(), array('createdAt' => 'DESC'),5);

        $instructor = $this->getUser();

        return $this->render('QTUTkbBundle:MyTimeTable:index.html.twig', array( 
                'instructor'=>$instructor,
                'current_term'=>$currentTerm,
                'terms'=>$terms,
                'notices'=>$notices,
                ));
    }
    
    public function instructorAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        
        $term_id = $request->query->get('term_id','');

        if ($request->isXMLHttpRequest()) {
            $instructorId = $request->query->get('id','');
            
            $courses = $em->getRepository('QTUTkbBundle:Course')->findCourseByInstructor($instructorId, $term_id);

            return $this->render('QTUTkbBundle:MyTimeTable:timetable_instructor.html.twig', array(
                'courses'=>$courses,
                ));
        } else {
            throw new NotFoundHttpException("Page not found");
        }
    }
    
    public function termFilterJsonAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        
        $term_id = $request->query->get('term_id','');
        $dataOutput = array();
        
        if ($request->isXMLHttpRequest()) {
            $instructorId = $request->query->get('id','');
            
            $courses = $em->getRepository('QTUTkbBundle:Course')->findCourseByInstructor($instructorId, $term_id);

            foreach ($course as $courses) {
                
            }
        } else {
            throw new NotFoundHttpException("Page not found");
        }
        $response = new JsonResponse($dataOutput);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
