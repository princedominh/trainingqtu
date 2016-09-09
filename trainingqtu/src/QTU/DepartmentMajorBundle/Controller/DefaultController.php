<?php

namespace QTU\DepartmentMajorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('QTUDepartmentMajorBundle:Default:index.html.twig');
    }
}
