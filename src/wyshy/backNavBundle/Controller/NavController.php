<?php

namespace wyshy\backNavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavController extends Controller
{
    public function indexAction()
    {
        return $this->render('wyshybackNavBundle:Nav:page1.html.twig');
    }
}
