<?php

namespace Cms\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\View\TwitterBootstrapView;

use Cms\AdminBundle\Entity\User;
use Cms\AdminBundle\Form\UserType;
use Cms\AdminBundle\Form\UserFilterType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
            
        return $this->render('CmsAdminBundle:Default:index.html.twig', array(
                'user' => $user,        		
        	));   
        }
        
  
    
}
