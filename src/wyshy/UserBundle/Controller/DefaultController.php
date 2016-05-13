<?php

namespace wyshy\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('wyshyUserBundle:Default:index.html.twig', array());
    }
    
    public function facebookRedirectionAction(){ 
        
        
         
         return $this->render('wyshyUserBundle:Default:index.html.twig', array('name' => $this->getUser().getFacebookID()));
    }
}
