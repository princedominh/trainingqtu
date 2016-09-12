<?php

namespace QTU\LecturerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('QTULecturerBundle:Default:index.html.twig');
    }
}
