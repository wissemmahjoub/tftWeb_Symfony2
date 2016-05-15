<?php

namespace wyshy\backNavBundle\form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;



class DossierMedicalModifForm extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
         $builder  ->add('Personne', 'entity', array('class' => 'wyshybackNavBundle:Personne',
                       'query_builder' => function($repository) { return $repository->createQueryBuilder('p')
                                             ->orderBy('p.idpersonne', 'ASC')
                                             ->where('p.role like :r')
                                             ->setParameter('r', "joueur"); },'property' => 'prenom',
                       ))
                   ->add('Test','entity', array( 'class' => 'wyshybackNavBundle:Test', 'property'=>'libelletest'))
                   ->add('taille','integer', array('attr' => array('size' => '50')))
                   ->add('poid')
                   ->add('nbenfant')                                 
                   ->add('datederniervisite', 'date',['widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => ['class' => ' datepicker','data-provide' => 'datepicker','data-date-format' => 'dd-mm-yyyy']])
                   ->add('situation', 'choice', array(
                        'choices' => array('Marie' => 'Marie',
                                            'Divorce' => 'Divorce',
                                            'En couple' => 'En couple',
                                             'Celibataire' => 'Celibataire'),
                        'required'=> false,
                        'empty_value' => '',
                        'empty_data'  => null ))
                   ->add('nomprenompere','text', array('attr' => array('size' => '50')))
                   ->add('nomprenommere','text', array('attr' => array('size' => '50')))
                   ->add('maladie','text', array('attr' => array('size' => '50')))->add('raisonvisite','textarea', array('attr' => array('rows' => '2','cols' => '50')) )
                   ->add('sang', 'choice', array(
                        'choices' => array('A-' => 'A',
                                            'A+' => 'A+',
                                            'B-' => 'B-',
                                            'AB+' => 'AB+',
                                            'AB-' => 'AB-',
                                            'O+' => 'O+',
                                            'O-' => 'O-'),
                        'required'=> false,
                        'empty_value' => '',
                        'empty_data'  => null ))
                   ->add('commentaire','textarea', array('attr' => array('rows' => '2','cols' => '50')) )
                   ->add('fumeur', 'choice', array(
                        'choices' => array('oui' => 'Oui','non' => 'Non'),
                        'required'=> false,
                        'empty_value' => 'Etes-vous fumeur?',
                        'empty_data'  => null ))
                 
                 
                 
                 ->add('Modifier','submit',array('attr' => array('class' => 'btn btn-success btn-cons')));
    }

    

    public function getName()
    {
        return 'Stade';   
    }


}
