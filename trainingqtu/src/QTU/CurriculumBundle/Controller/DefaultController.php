<?php

namespace QTU\CurriculumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
//        $department = $this->getDoctrine()->getRepository('QTUCurriculumBundle:CurriculumForClassManagement')->findByDates($from_date, $to_date);
        return $this->render('QTUCurriculumBundle:Default:index.html.twig');
    }
}
