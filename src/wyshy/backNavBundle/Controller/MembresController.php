<?php

namespace wyshy\backNavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
    

class MembresController extends Controller
{

    
   //###################### AFFICHAGE LSTE  MEMBRES #################################################################
    
    public function afficheMembresAction()
    {
       $em=$this->getDoctrine()->getManager();
       $users =$em->getRepository("wyshybackNavBundle:Personne")->findBy(array('role'=>'user'  ));
       
       return $this->render('wyshybackNavBundle:Nav:AfficheMembres.html.twig',array('Personnes'=>$users));
    }
 
    
    public function BloquerMembresAction($id) 
  {     
         $query=$this->get('request');
         $em=$this->getDoctrine()->getManager();
         $Membre=$em->getRepository('wyshybackNavBundle:Personne')->find($id);         
    
        $query=$this->getDoctrine()->getManager()->createQuery('UPDATE wyshybackNavBundle:Personne c SET  c.credit = 1 where c.idpersonne=:id');
        $query->setParameter('id',$id);
        $query->execute();
        
      //Send Mail
     
       $messag=  \Swift_Message::newInstance()
                 ->setSubject('Bloquage de votre compte')
                 ->setFrom(array('mohamedali.boughanmi@esprit.tn' =>'Service Admin TFT'))
                 ->setTo($Membre->getEmail())
                 ->setCharset('utf-8')
                 ->setContentType('text/html')
                 ->setBody($this->render('wyshybackNavBundle:Nav:Mail_bloque_membre.html.twig',array('utilisateur' => $Membre)));
         $this->get('mailer')->send($messag);

         
        return $this->redirect($this->generateUrl("tft_ListerMembres"));
         }
         
    public function DeBloquerMembresAction($id) 
  {     
         $query=$this->get('request');
         $em=$this->getDoctrine()->getManager();
         $Membre=$em->getRepository('wyshybackNavBundle:Personne')->find($id);         

        $query=$this->getDoctrine()->getManager()->createQuery('UPDATE wyshybackNavBundle:Personne c SET  c.credit = 0 where c.idpersonne=:id');
        $query->setParameter('id',$id);
        $query->execute();
        
        //**********************************************************************
        // Send Mail  ----------------------------------------------------------
        //**********************************************************************
       $messag=  \Swift_Message::newInstance()
                 ->setSubject('Bloquage de votre compte')
                 ->setFrom(array('tftmywishy@gmail.com' =>'Administrateur TFT'))
                 ->setTo($Membre->getEmail())
                 ->setCharset('utf-8')
                 ->setContentType('text/html')
                 ->setBody($this->render('wyshybackNavBundle:Nav:Mail_debloque_membre.html.twig',array('utilisateur' => $Membre)));
         $this->get('mailer')->send($messag);
 
        return $this->redirect($this->generateUrl("tft_ListerMembres"));
  }   
    
    
 }