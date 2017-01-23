<?php
namespace QTU\TkbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FacultyController extends Controller
{
    public function indexAction()
    {
        //get user's faculty
        return $this->render('QTUTkbBundle:Faculty:viewall.html.twig');
    }
    
    public function instructorAction(Request $request) {
        $time_start = $this->container->getParameter('current_time_start');
        $time_end = $this->container->getParameter('current_time_end');

        if ($request->isXMLHttpRequest()) {
            $instructorId = $request->query->get('id','');

            $em = $this->getDoctrine()->getManager();
            $instructor = $em->getRepository('ApplicationSonataUserBundle:User')->findOneBy(array('id'=>$instructorId));
            $courses = $em->getRepository('QTUTkbBundle:Course')->findCourseByInstructor($instructorId, $time_start, $time_end);

            return $this->render('QTUTkbBundle:MyTimeTable:timetable_instructor.html.twig', array('courses'=>$courses, 'instructor'=>$instructor));
        } else {
            throw new NotFoundHttpException("Page not found");
        }
    }
}
