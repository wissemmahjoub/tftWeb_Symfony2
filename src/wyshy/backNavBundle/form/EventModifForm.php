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
 * Description of EventModifForm
 *
 * @author ASUS
 */
class EventModifForm extends AbstractType {
    //put your code here
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
         $builder  ->add('libelle')
                   ->add('lieu')
                  ->add('datedebut', 'date',['widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => ['class' => ' datepicker','data-provide' => 'datepicker','data-date-format' => 'dd-mm-yyyy']])
                  ->add('datefin', 'date',['widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => ['class' => ' datepicker','data-provide' => 'datepicker','data-date-format' => 'dd-mm-yyyy']])
                   ->add('Modifier','submit',array('attr' => array('class' => 'btn btn-success btn-cons')));
  
    }

    

    public function getName()
    {
        return 'event';   
    }

}
