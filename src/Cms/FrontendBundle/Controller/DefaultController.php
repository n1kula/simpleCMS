<?php

namespace Cms\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CmsFrontendBundle:Default:index.html.twig', array('name' => $name));
    }
}
