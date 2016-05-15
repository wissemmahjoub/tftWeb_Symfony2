<?php

namespace wyshy\backNavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;


class ContactController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('wyshybackNavBundle::Layout.html.twig', array('name' => $name));
    }
     public function tftmapAction()
    {
        return $this->render('wyshybackNavBundle:Default:index.html.twig');
    }
    
    //********************************
    //************ MAIL **************
    //********************************
    
    public function mailAction(){
        $request = $this->getRequest();

        if ( $request->getMethod()=="POST"){
            $Email = $request->get("Email");
            $Subject = $request->get("Sujet");
            $message = $request->get("message");
            
            $mailer = $this->container->get('mailer');
            $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com',465,'ssl');
            $mailer = Swift_Mailer::newInstance($transport);
            $nom=$request->get('nom');
            $prenom=$request->get('prenom');
            $email=$request->get('email');
            $message = Swift_Message::newInstance('Test')
                    ->setSubject($Subject)
                    ->setFrom('tftmywishy@gmail.com')
                    ->setTo('tftmywishy@gmail.com')
                    ->setBody('Vous avez réçu un message -- Nom : '.$nom.' -- Prenom ='.$prenom.'  -- Mail = '.$email.'  -- Message : '.$message);
            
            $this->get('mailer')->send($message);
       
        }
        return $this->render("wyshybackNavBundle:Nav:page1.html.twig");
    }
}
