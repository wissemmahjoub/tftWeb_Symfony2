<?php

namespace wyshy\backNavBundle\form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class MedecinModifForm extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
         $builder  ->add('nom')
                   ->add('prenom')
                   ->add('cin')
                   ->add('login')
                   ->add('specialite')
                   ->add('salaire')
                   ->add('datenaissance','birthday')
                   ->add('sexe')
                   ->add('email')
                   ->add('adresse')
                   ->add('Modifier','submit');
                
    }

    

    public function getName()
    {
        return 'Medecin';   
    }


}
