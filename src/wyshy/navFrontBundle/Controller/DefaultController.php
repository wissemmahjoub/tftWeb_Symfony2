<?php

namespace wyshy\navFrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('wyshynavFrontBundle:Default:index.html.twig', array('name' => $name));
    }
}
