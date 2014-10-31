<?php

namespace Cms\AdminBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');

        $menu->addChild('Dashboard', ['route' => 'cms_admin_homepage']);
        
        $menu->addChild('Użytkownicy', ['uri' => '#'])
            ->setAttribute('class', 'dropdown')
            ->setLinkAttribute('class', 'dropdown-toggle')
            ->setLinkAttribute('data-toggle', 'dropdown')
            ->setChildrenAttribute('class', 'dropdown-menu');
        
        $menu['Użytkownicy']->addChild('Lista', array('route' => 'user'));
        $menu['Użytkownicy']->addChild('Dodaj nowego', array('route' => 'user_new'));
        
        $menu->addChild('Strony', ['uri' => '#'])
            ->setAttribute('class', 'dropdown')
            ->setLinkAttribute('class', 'dropdown-toggle')
            ->setLinkAttribute('data-toggle', 'dropdown')
            ->setChildrenAttribute('class', 'dropdown-menu');
        
        $menu['Strony']->addChild('Lista', array('route' => 'page'));
        $menu['Strony']->addChild('Dodaj nową', array('route' => 'page_new'));
        
        return $menu;
    }
    
    public function userMenuAuthenticated(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav pull-right');
    
        $menu->addChild('User', ['uri' => '#'])
            ->setAttribute('class', 'dropdown')
            ->setLinkAttribute('class', 'dropdown-toggle')
            ->setLinkAttribute('data-toggle', 'dropdown')
            ->setChildrenAttribute('class', 'dropdown-menu');
        
        $menu['User']->addChild('Wyloguj', array('route' => 'fos_user_security_logout'));
    
        return $menu;
    }
    
}