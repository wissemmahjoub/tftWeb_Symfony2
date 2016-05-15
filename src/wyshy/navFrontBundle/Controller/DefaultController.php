<?php

namespace wyshy\navFrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('wyshynavFrontBundle:Default:layout.html.twig');
    }
      public function loginAction()
    {
        return $this->render('wyshynavFrontBundle:Default:login.html.twig');
    }
    
      public function ContactAction()
    {
        return $this->render('wyshynavFrontBundle:Default:Contact.html.twig');
    }
    
}
