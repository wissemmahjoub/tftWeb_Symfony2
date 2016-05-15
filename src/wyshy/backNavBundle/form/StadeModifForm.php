<?php

namespace wyshy\backNavBundle\form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;



class StadeModifForm extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
         $builder  ->add('libellestade')
                   ->add('ville')
                   ->add('capacite')
                   ->add('surface')
                   ->add('datecreation', 'date',['widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => ['class' => ' datepicker','data-provide' => 'datepicker','data-date-format' => 'dd-mm-yyyy']])
                   ->add('Modifier','submit',array('attr' => array('class' => 'btn btn-success btn-cons')));
                
    }

    

    public function getName()
    {
        return 'Stade';   
    }


}
