<?php

namespace Cms\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('page')
            ->add('metaTitle')
            ->add('metaKeywords')
            ->add('metaDescription')
            ->add('title')
            ->add('lead')
            ->add('content')
            
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cms\AdminBundle\Entity\Page'
        ));
    }

    public function getName()
    {
        return 'cms_adminbundle_page';
    }
}
