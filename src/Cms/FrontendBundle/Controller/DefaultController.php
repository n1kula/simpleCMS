<?php

namespace Cms\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$pages = $this->getDoctrine()
    		->getRepository('CmsAdminBundle:Page')
    		->findAll();
    	
        return $this->render('CmsFrontendBundle:Default:index.html.twig', array(
        	'pages'	=> $pages
        ));
    }
    
    public function showAction($slug)
    {
    	$page = $this->getDoctrine()
    		->getRepository('CmsAdminBundle:Page')
    		->findOneBySlug($slug);
    	
    	if (!$page) {
    		throw $this->createNotFoundException("Strona o podanym adresie nie istnieje");
    	}
    	
    	return $this->render('CmsFrontendBundle:Default:show.html.twig', array(
    		'page'	=> $page
    	));
    }
}