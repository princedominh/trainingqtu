<?php

namespace QTU\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('QTUFrontBundle:Default:index.html.twig');
    }
}
