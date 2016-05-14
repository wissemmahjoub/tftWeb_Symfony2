<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace wyshy\backNavBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of CompteRenduController
 *
 * @author ASUS
 */
class CompteRenduMatchController extends Controller {
    
    
     public function ajoutAction()
      {
        
       
          $compte=new \wyshy\backNavBundle\Entity\CompteMatch();
          
          
          $form = $this->createFormBuilder($compte)
                   ->add('libelle','text')
                  ->add('contenu', 'textarea', array('attr' => array('rows' => '20','cols' => '80')) )
                  // ->add('datedebut','date')

                   

                   ->add('ajouter','submit',array('attr' => array('class' => 'btn btn-success btn-cons')))
                  ->getForm();
                $request = $this->getRequest();
          if($form->handleRequest($request)->isValid())
          { try {
              $em=  $this->getDoctrine()->getManager();
                  $compte->setDatecreation(new \DateTime()) ;
              $em->persist($compte);
              $em->flush();
              // return $this->redirect($this->generateUrl("tft_ajoutEvent"));
          }
        catch (\Doctrine\DBAL\DBALException $e)
        {}
    }
    
    return $this->render('wyshybackNavBundle:Nav:ajoutCompteMatch.html.twig',array('form'=> $form->createView()));
    
    }
    
    
    
    
}
