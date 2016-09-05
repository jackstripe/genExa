<?php

namespace IHM\genExamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeUserBundle:Default:index.html.twig');
    }
}
