<?php

namespace QTU\MarkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('QTUMarkBundle:Default:index.html.twig');
    }
}
