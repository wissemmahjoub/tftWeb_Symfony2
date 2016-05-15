<?php

namespace wyshy\backNavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavController extends Controller
{
    public function indexAction()
    {//test commit
        return $this->render('wyshybackNavBundle:Nav:page1.html.twig');
    }
        
      public function joueurAction()
    {
        return $this->render('wyshybackNavBundle:Nav:Joueur.html.twig');
    }
    
      public function ajouterjoueurAction()
    {
        return $this->render('wyshybackNavBundle:Nav:ajouterjoueur.html.twig');
    }
    
      public function modifierjoueurAction()
    {
        return $this->render('wyshybackNavBundle:Nav:modifierjoueur.html.twig');
    }
    
      public function supprimerjoueurAction()
    {
        return $this->render('wyshybackNavBundle:Nav:supprimerjoueur.html.twig');
    }
    
        public function listerjoueurAction()
    {
        return $this->render('wyshybackNavBundle:Nav:listerjoueur.html.twig');
    }
}
