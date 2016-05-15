<?php

namespace wyshy\backNavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
     public function tftmapAction()
    {
        return $this->render('wyshybackNavBundle:Default:index.html.twig');
    }
    
    
    public function indexAction($name)
    {
        return $this->render('wyshybackNavBundle::Layout.html.twig', array('name' => $name));
    }
    
   
}
