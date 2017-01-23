<?php

namespace QTU\TkbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TemplateController extends Controller
{
    public function indexAction($name1, $name2)
    {
        if($name2!='') {
            $name1 .= '/' . $name2;
        }
        return $this->render('QTUTkbBundle:Template:'.$name1.'.twig');        
    }

}
