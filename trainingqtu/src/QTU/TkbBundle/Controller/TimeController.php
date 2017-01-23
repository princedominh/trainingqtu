<?php
namespace QTU\TkbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TimeController extends Controller
{
    public function indexAction()
    {
        return $this->render('QTUTkbBundle:Time:index.html.twig');
    }
}
