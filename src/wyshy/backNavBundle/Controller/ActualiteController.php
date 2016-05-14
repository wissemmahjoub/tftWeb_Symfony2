<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace wyshy\backNavBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of ActualiteController
 *
 * @author ASUS
 */
class ActualiteController extends Controller {
    
    
    
    public function ajoutActuAction()
      {
          //    $conn = $this->get('database_connection');
       
          $actu=new \wyshy\backNavBundle\Entity\Actualite();
          
          
          $form = $this->createFormBuilder($actu)
                   ->add('sujet','text')
                  ->add('description', 'textarea', array('attr' => array('rows' => '20','cols' => '80')) )
                  ->add('image',new \wyshy\backNavBundle\form\ImageType())

                   
                   ->add('ajouter','submit',array('attr' => array('class' => 'btn btn-success btn-cons')))
                  ->getForm();
                $request = $this->getRequest();
          if($form->handleRequest($request)->isValid())
          { try {
              $em=  $this->getDoctrine()->getManager();
                  $actu->setDatepublication(new \DateTime()) ;
            //     $em->persist($actu->getImage());
                  $actu->getImage->upload();
              $em->persist($actu);
              $em->flush();
              // return $this->redirect($this->generateUrl("tft_ajoutEvent"));
          }
        catch (\Doctrine\DBAL\DBALException $e)
        {}
    }
    
    return $this->render('wyshybackNavBundle:Nav:ajoutActu.html.twig',array('form'=> $form->createView()));
    
    }
    
    
    
        public function ajouterAction(){
        $em=$this->getDoctrine()->getEntityManager();
        /*
        $a=new Test();
        $a->setTitre("test1")
        ->setDescription("ceci est un titre 1")
        ->setUrl("http://www.infonetworkmarketing.org/wp-content/uploads/2013/08/test.jpg")
                ->setDate(new \DateTime());
        $em->persist($a);
        $em->flush();*/
       
        $a= new \wyshy\backNavBundle\Entity\Actualite();
                          $a->setDatepublication(new \DateTime()) ;
        $form= $this->createForm(new \wyshy\backNavBundle\form\actuType(),$a);
        
        $request = $this->getRequest();
        

                if($request->isMethod('POST')){
                    $form->bind($request);
                    if($form->isValid()){
                        $a->upload();
                        
                        $a = $form->getData();
                    $em->persist($a);
                    $em->flush();//ajout dans la bd
                   return $this->redirect($this->generateUrl("tft_affActu"));

                    }
                    
                    /* (debug) var_dump($form);
                    exit();*/
                }
        return $this->render('wyshybackNavBundle:Nav:ajoutActu.html.twig',array(
            'form' =>$form->createView(),
            'action'=>'Ajouter'
        ));
    }


        public function afficheActualiteAction()
    {
       $em=$this->getDoctrine()->getManager();
      $actus =$em->getRepository("wyshybackNavBundle:Actualite")->findAll();
       return $this->render('wyshybackNavBundle:Nav:AfficheActu.html.twig',array('actus'=>$actus));
    }

        public function ModifierActuAction($id)
    {  
    $em=$this->getDoctrine()->getManager();
     $actu=$em->getRepository('wyshybackNavBundle:Actualite')->findOneBy(array('idactualite' =>$id)); //pour avoir l'objet Medecin qui a l'id $idstade(passé en paramétre)
     $form=$this->createForm(new \wyshy\backNavBundle\form\actuType(),$actu); //pour remplire le formulaire de modification automatiquement
           $form->add('Modifier','submit',array('attr' => array('class' => 'btn btn-success btn-cons')));
     $requete=$this->get('request');
           if($requete->getMethod()=='POST'){
              $form->bind($requete);
                  if($form->isValid()){
                      $actu->upload();
                      $actu = $form->getData();
                      $em->persist($actu);
                      $em->flush();
       return $this->redirect($this->generateUrl("tft_affActu"));
            
            }
        }
         return $this->render('wyshybackNavBundle:Nav:ModifActu.html.twig',array('form'=>$form->createView(),'actu'=>$actu));
 
    }
    
    
     public function deleteActuAction($id) 
    {
        $em = $this->getDoctrine()->getManager();
        $actu = $em->getRepository("wyshybackNavBundle:Actualite")->findOneBy(array('idactualite' =>$id));
        $em->remove($actu);
        $em->flush();
        return $this->redirect($this->generateUrl("tft_affActu"));
    }
 
            public function afficheactufrontAction()
            {
                       $em=$this->getDoctrine()->getManager();
      $actus =$em->getRepository("wyshybackNavBundle:Actualite")->findAll();

             return $this->render('wyshynavFrontBundle:Default:news.html.twig',array('actus'=>$actus));

            }
            
             public function detailActuAction($idactualite) 
    {
        $em = $this->getDoctrine()->getManager();
        $actu = $em->getRepository("wyshybackNavBundle:Actualite")->findOneBy(array('idactualite' =>$idactualite));
        
       return $this->render('wyshynavFrontBundle:Default:newsdetail.html.twig',array('a'=>$actu ));
    
    
    }
    
}
