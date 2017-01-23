<?php

namespace QTU\TkbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use QTU\CommonBundle\Entity\Contact;
use QTU\CommonBundle\Form\Type\ContactType;

class AboutUsController extends Controller
{
    public function indexAction()
    {
        return $this->render('QTUTkbBundle:AboutUs:index.html.twig');        
    }

}
