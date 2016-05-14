<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace wyshy\backNavBundle\form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/**
 * Description of actuType
 *
 * @author ASUS
 */
class actuType extends AbstractType {
  
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('sujet','text')
           ->add('description', 'textarea', array('attr' => array('rows' => '20','cols' => '80')) )
           ->add('file')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'wyshy\backNavBundle\Entity\Actualite'
        ));
    }
    
    /**
     * @param OptionsResolverInterface $options
     */
    public function getDefaultOptions(array $options)
{
    return array(
        'csrf_protection' => false,
        // Rest of options omitted
    );
}

    /**
     * @return string
     */
    public function getName()
    {
        return 'actu';
    }}
