<?php

namespace wyshy\backNavBundle\form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;



class ModifierCompetition extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
         $builder  ->add('libelle')
                   ->add('datedebut')
                   ->add('datefin')
                   ->add('niveau')
                   ->add('categorie')
                   ->add('type')
                   ->add('nbrpoints')
                   ->add('Modifier','submit');
                
    }

    

    public function getName()
    {
        return 'Competition';   
    }


}
