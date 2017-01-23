<?php
namespace QTU\TkbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SwiftMailerController extends Controller
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
        //get Week data
        return $this->render('QTUTkbBundle:SwiftMailer:index.html.twig', array(
            'classes' => $classes,
        ));
    }

    public function sendMailAction()
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('SwiftMailer Test')
            ->setFrom('tkb@quangtrung.edu.vn')
            ->setTo('phvilien@gmail.com')
            ->setBody($this->renderView('QTUTkbBundle:SwiftMailer:index.html.twig'))
        ;
        $this->get('mailer')->send($message);

        return $this->render('QTUTkbBundle:SwiftMailer:index.html.twig');
    }
}
