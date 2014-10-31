<?php

namespace Cms\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('username', 'text')
        	->add('email', 'email')
        	->add('roles', 'choice', array(
        		'choices'	=> array(
        			'ROLE_USER'	 => 'Użytkownik',
        			'ROLE_ADMIN' => 'Administrator',
        			'ROLE_SUPER_ADMIN'	=> 'Super administrator'
        		),
        		'multiple' => true
        	))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cms\AdminBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'cms_adminbundle_user';
    }
}
