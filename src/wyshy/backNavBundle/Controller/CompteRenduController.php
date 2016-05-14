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
class CompteRenduController extends Controller {
    
    
     public function ajoutCompteAction()
      {
        
       
          $compte=new \wyshy\backNavBundle\Entity\CompterenduTest();
          
          
          $form = $this->createFormBuilder($compte)
                   ->add('libelle','text')
                  ->add('contenu', 'textarea', array('attr' => array('rows' => '20','cols' => '80')) )
                  // ->add('datedebut','date')
                 ->add('test','entity', array( 'class' => 'wyshybackNavBundle:Test', 'property'=>'libelletest'))

                   

                   ->add('ajouter','submit',array('attr' => array('class' => 'btn btn-success btn-cons')))
                  ->getForm();
                $request = $this->getRequest();
          if($form->handleRequest($request)->isValid())
          { try {
              $em=  $this->getDoctrine()->getManager();
                  $compte->setDatecreation(new \DateTime()) ;
              $em->persist($compte);
              $em->flush();
                      return $this->redirect($this->generateUrl("tft_affcompte"));

          }
        catch (\Doctrine\DBAL\DBALException $e)
        {}
    }
    
    return $this->render('wyshybackNavBundle:Nav:ajoutCompte.html.twig',array('form'=> $form->createView()));
    
    }
    
      public function afficheAction()
    {
       $em=$this->getDoctrine()->getManager();
      $actus =$em->getRepository("wyshybackNavBundle:CompterenduTest")->findAll();
       return $this->render('wyshybackNavBundle:Nav:Affichecompte.html.twig',array('c'=>$actus));
    }
 public function deleteAction($id) 
    {
        $em = $this->getDoctrine()->getManager();
        $actu = $em->getRepository("wyshybackNavBundle:CompterenduTest")->findOneBy(array('idtestCompterendu' =>$id));
        $em->remove($actu);
        $em->flush();
        return $this->redirect($this->generateUrl("tft_affcompte"));
    }
 
    
    
}
