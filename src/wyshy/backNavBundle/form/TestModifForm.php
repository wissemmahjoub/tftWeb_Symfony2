<?php

namespace wyshy\backNavBundle\form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;



class TestModifForm extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder  ->add('libelletest')
                   ->add('datetest', 'date',['widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => ['class' => ' datepicker','data-provide' => 'datepicker','data-date-format' => 'dd-mm-yyyy']])
                   ->add('heure')
                   ->add('Modifier','submit',array('attr' => array('class' => 'btn btn-success btn-cons')));
                
    }

    

    public function getName()
    {
        return 'Test';   
    }


}
