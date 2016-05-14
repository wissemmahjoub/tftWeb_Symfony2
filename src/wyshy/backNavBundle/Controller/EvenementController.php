<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace wyshy\backNavBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of EvenementController
 *
 * @author ASUS
 */
class EvenementController extends Controller {
    
    
     public function ajoutEventAction()
      {
        
       
          $event = new \wyshy\backNavBundle\Entity\Evenement();
          
    //  $Medecin ->setPassword("cccccc");
          $form = $this->createFormBuilder($event)
                   ->add('libelle','text',array('attr' => array('placeholder' => ' libelle ')))

                   
                   ->add('lieu','text',array('attr' => array('placeholder' => ' lieu ')))
                  ->add('datedebut', 'date',['widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => ['class' => ' datepicker','data-provide' => 'datepicker','data-date-format' => 'dd-mm-yyyy']])

                  ->add('datefin', 'date',['widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => ['class' => ' datepicker','data-provide' => 'datepicker','data-date-format' => 'dd-mm-yyyy']])

                   ->add('ajouter','submit',array('attr' => array('class' => 'btn btn-success btn-cons')))
                  ->getForm();
                $request = $this->getRequest();
          if($form->handleRequest($request)->isValid())
          { try {
              $em=  $this->getDoctrine()->getManager();
              $em->persist($event);
              $em->flush();
              return $this->redirect($this->generateUrl("tft_affEvent"));
          }
        catch (\Doctrine\DBAL\DBALException $e)
        {}
    }
    
    return $this->render('wyshybackNavBundle:Nav:ajoutEvent.html.twig',array('form'=> $form->createView()));
    
    }
    
    
        public function afficheEventAction()
    {
       $em=$this->getDoctrine()->getManager();
      $events =$em->getRepository("wyshybackNavBundle:Evenement")->findAll();
       return $this->render('wyshybackNavBundle:Nav:AfficheEvent.html.twig',array('events'=>$events));
    }

    public function ModifierEventAction($id)
    {  
    $em=$this->getDoctrine()->getManager();
     $event=$em->getRepository('wyshybackNavBundle:Evenement')->findOneBy(array('idevenement' =>$id)); //pour avoir l'objet Medecin qui a l'id $idstade(passé en paramétre)
     $form=$this->createForm(new \wyshy\backNavBundle\form\EventModifForm(),$event); //pour remplire le formulaire de modification automatiquement
     $requete=$this->get('request');
           if($requete->getMethod()=='POST'){
              $form->bind($requete);
                  if($form->isValid()){
                      $em->persist($event);
                      $em->flush();
       return $this->redirect($this->generateUrl("tft_affEvent"));
            
            }
        }
         return $this->render('wyshybackNavBundle:Nav:ModifEvent.html.twig',array('form'=>$form->createView(),'event'=>$event));
 
    }
    
    
     public function deleteEventAction($id) 
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository("wyshybackNavBundle:Evenement")->findOneBy(array('idevenement' =>$id));
        $em->remove($event);
        $em->flush();
        return $this->redirect($this->generateUrl("tft_affEvent"));
    }
 
    
    
    
    
    
    
}
