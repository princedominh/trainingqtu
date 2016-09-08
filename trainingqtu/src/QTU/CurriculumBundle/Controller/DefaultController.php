<?php

namespace QTU\CurriculumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('QTUCurriculumBundle:Default:index.html.twig');
    }
}
