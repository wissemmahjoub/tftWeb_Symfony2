<?php

namespace wyshy\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('wyshyUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
