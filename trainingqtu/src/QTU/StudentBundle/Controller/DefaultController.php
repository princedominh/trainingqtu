<?php

namespace QTU\StudentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('QTUStudentBundle:Default:index.html.twig');
    }
}
