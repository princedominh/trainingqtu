<?php

namespace QTU\TkbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WhatsNewController extends Controller
{
    public function indexAction()
    {
        return $this->render('QTUTkbBundle:WhatsNew:index.html.twig');
    }
}
