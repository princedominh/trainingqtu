<?php

namespace QTU\StudentLecturerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('QTUStudentLecturerBundle:Default:index.html.twig');
    }
}
