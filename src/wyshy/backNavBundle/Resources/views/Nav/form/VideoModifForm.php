<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace wyshy\backNavBundle\form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of VideoModifForm
 *
 * @author ASUS
 */
class VideoModifForm extends AbstractType{
    //put your code here
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
         $builder  ->add('titre')
                   ->add('url')
                
                   ->add('Modifier','submit',array('attr' => array('class' => 'btn btn-success btn-cons')));
  
    }

    

    public function getName()
    {
        return 'video';   
    }
    
    
    
}
