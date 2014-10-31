<?php

namespace Cms\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CmsAdminBundle:Default:index.html.twig');
    }
}
