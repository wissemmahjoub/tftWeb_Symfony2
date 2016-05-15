<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace wyshy\backNavBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use wyshy\backNavBundle\Entity\Competition;
use wyshy\backNavBundle\Entity\Classement;

use wyshy\backNavBundle\Entity\Matchs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of GumbleController
 *
 * @author Mustapha
 */
class GumbleController extends Controller{
    
    public function parierAction()
    {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery("SELECT m FROM wyshybackNavBundle:Matchs m  WHERE m.datematch > CURRENT_DATE()");
            $matchs = $query->getResult();
            $joueurs1 = array();
            $joueurs2 = array();
            $i = 0;
            foreach ($matchs as $match)
            {
                 
                $joueurs1[$i] = $em->getRepository('wyshybackNavBundle:Personne')->findOneByIdpersonne($match->getIdjoueur1());
                $joueurs2[$i] = $em->getRepository('wyshybackNavBundle:Personne')->findOneByIdpersonne($match->getIdjoueur2());
                
                $i++;
               }
           
            return $this->render('wyshybackNavBundle:Nav:gumble.html.twig', array('Matchs' => $matchs,'joueurs1'=>$joueurs1,'joueurs2'=>$joueurs2));
      
    }
}
