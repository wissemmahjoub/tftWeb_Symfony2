<?php

namespace wyshy\backNavBundle\Controller;
use wyshy\backNavBundle\form\DossierMedicalModifForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use wyshy\backNavBundle\Entity\Dossiermedical;

class DossierMedicalController extends Controller
{
    
//######################## AJOUT DossierMedical ###############################################################
    public function addDossierAction()
      {

          $Dossier = new Dossiermedical();
          
          $form = $this->createFormBuilder($Dossier)
                   ->add('Personne', 'entity', array('class' => 'wyshybackNavBundle:Personne',
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
                   ->add('ajouter','submit',array('attr' => array('class' => 'btn btn-success btn-cons')))
                   ->getForm();
          $request = $this->getRequest();
          if($form->handleRequest($request)->isValid())
          { try {
              $em=  $this->getDoctrine()->getManager();
              $em->persist($Dossier);
              $em->flush();
  return $this->redirect($this->generateUrl("tft_ListerDossier"));
            echo "<center> <b>Dossier Ajouté avec succés </b> </center>" ;
          }
        catch (\Doctrine\DBAL\DBALException $e)
        {echo "<center> <b> Attention , le joueur a deja un dossier</b> </center>" ;}
    }
    return $this->render('wyshybackNavBundle:Nav:AjouterDossier.html.twig',array('form'=> $form->createView()));
    }
  
  //###############################################################################
  //###################### Affichage de Dossier Medical ###########################
 // ###############################################################################
    public function afficheDossierMedicalAction()
            
    {       
       $em=$this->getDoctrine()->getManager();
       $Dossiers =$em->getRepository("wyshybackNavBundle:Dossiermedical")->findAll();
       return $this->render('wyshybackNavBundle:Nav:AfficheDossier.html.twig',array('Dossiers'=>$Dossiers));
    }
     
 //###############################################################################
 //###################### Supprimer Dossier Medical ###########################
 // ###############################################################################
 public function supprimerDossierAction($iddossier) 
    {
        $em = $this->getDoctrine()->getManager();
        $dossier = $em->getRepository("wyshybackNavBundle:Dossiermedical")->findOneBy(array('iddossier' =>$iddossier));
        $em->remove($dossier);
        $em->flush();
        return $this->redirect($this->generateUrl("tft_ListerDossier"));
    
    
    }
 //###############################################################################
 //###################### Modifier Dossier Medical ###########################
 // ###############################################################################
    
    
     public function ModifierDossierAction($iddossier)
    {  
     $em=$this->getDoctrine()->getManager();
     $dossier=$em->getRepository('wyshybackNavBundle:Dossiermedical')->findOneBy(array('iddossier' =>$iddossier)); 
     $form=$this->createForm(new DossierMedicalModifForm(),$dossier); 
     $requete=$this->get('request');
           if($requete->getMethod()=='POST'){
              $form->bind($requete);
                  if($form->isValid())
                      {
                      $em->persist($dossier);
                      $em->flush();
            return $this->redirect($this->generateUrl("tft_ListerDossier"));
            
                }
        }
         return $this->render('wyshybackNavBundle:Nav:ModifDossier.html.twig',array('form'=>$form->createView(),'Dossier'=>$dossier));
         
     }
     //###############################################################################
 //###################### Details Dossier Medical ###########################
 // ###############################################################################
     public function DetailsDossierAction($iddossier) 
    {
        $em = $this->getDoctrine()->getManager();
        $dossier = $em->getRepository("wyshybackNavBundle:Dossiermedical")->findOneBy(array('iddossier' =>$iddossier));
        $joueur = $dossier->getPersonne();
    
       return $this->render('wyshybackNavBundle:Nav:DetailsDossier.html.twig',array('D'=>$dossier , 'P'=>$joueur ));
    
    
    }
    
    
 }