<?php

namespace wyshy\backNavBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use wyshy\backNavBundle\Entity\Competition;
use wyshy\backNavBundle\Entity\Classement;
use wyshy\backNavBundle\Entity\Personne;
use wyshy\backNavBundle\form\ModifierCompetition;
use wyshy\backNavBundle\Entity\Matchs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompetitionController extends Controller {

    public function detailComAction($idcompetition)
    {
        
     $em=$this->getDoctrine()->getManager();
     $Competition=$em->getRepository('wyshybackNavBundle:Competition')->findOneByIdcompetition($idcompetition); 
     $form=$this->createForm(new ModifierCompetition(),$Competition); 
     $requete=$this->get('request');
           if($requete->getMethod()=='POST'){
              $form->bind($requete);
                  if($form->isValid()){
                      $em->persist($Competition);
                      $em->flush();
        return $this->redirect($this->generateUrl("wyshyback_nav_AfficherComp"));
            
            }
        }
         return $this->render('wyshybackNavBundle:Nav:competitionDetail.html.twig',array('form'=>$form->createView(),'competition'=>$Competition));
         
     
    }
    
    
    
    public function infoComAction($idcompetition)
    {
        
     $em=$this->getDoctrine()->getManager();
     $Competition=$em->getRepository('wyshybackNavBundle:Competition')->findOneByIdcompetition($idcompetition); 
     $joueurs = $em->getRepository('wyshybackNavBundle:Classement')->findByIdcompetition($idcompetition); 
      $matchs  = $em->getRepository('wyshybackNavBundle:Matchs')->findByIdcompetition($idcompetition); 
     $nbrMatchs = Count($matchs);
     
       $query = $em->createQuery(
                                'SELECT m
                                    FROM wyshybackNavBundle:Matchs m
                                    WHERE m.idcompetition = :comp
                                    AND m.idscore IS null'
                        )->setParameter('comp', $idcompetition);
       $query2 = $em->createQuery(
                                'SELECT m
                                    FROM wyshybackNavBundle:Classement m
                                    WHERE m.idcompetition = :comp
                                    ORDER BY m.rang DESC'
                        )->setParameter('comp', $idcompetition);
           $matchFinals = $query->getResult();
           $classement = $query2->getResult();
           
           
           $nbrMatchsFinals = Count($matchFinals);
           
     return $this->render('wyshybackNavBundle:Nav:competitionInfo.html.twig',array('competition'=>$Competition,'joueurs'=>$joueurs,'matchs'=>$matchs,'nbrMatchs'=>$nbrMatchs,'classement'=>$classement,'nbrMatchsFinals'=>$nbrMatchsFinals));
         
     
    }
    
    
    
    
    public function indexAction() {
        $competition = new Competition;

        $form = $this->createFormBuilder($competition)
                ->add('libelle', 'text', array('attr' => array('class' => ' form-control ')))
                ->add('datedebut', 'date', array('attr' => array('class' => '  ')))
                ->add('datefin', 'date', array('attr' => array('class' => '   ')))
                //->add('niveau','text',array('attr' => array('class' => '  form-control ')))
                ->add('niveau', 'choice', array(
                    'choices' => array(
                        'National' => 'National',
                        'International' => 'International'
                    ),
                    'data' => 1,
                    'attr' => array('class' => ' select2-input ')
                ))
                // ->add('categorie','text',array('attr' => array('class' => ' form-control ')))
                ->add('categorie', 'choice', array(
                    'choices' => array(
                        'Homme' => 'homme',
                        'Femme' => 'femme',
                        'Mixte' => 'mixte'
                    ),
                    'data' => 1,
                    'attr' => array('class' => ' select2-input ')
                ))
                //->add('type','text',array('attr' => array('placeholder' => ' Surface ')))
                ->add('type', 'choice', array(
                    'choices' => array(
                        'Veteran' => 'Veteran',
                        'Junior' => 'Junior',
                        'Senior' => 'Senior'
                    ),
                    'data' => 1,
                    'attr' => array('class' => ' select2-input ')
                ))
                ->add('nbrpoints', 'text', array('attr' => array('class' => ' form-control ')))
                ->add('joueurs', 'entity', array('attr' => array('style'=> 'display:none'),
                    'class' => 'wyshybackNavBundle:Personne',
                    'expanded' => true,
                    'multiple' => true,
                    'empty_value' => 'CHOOSE ONE',
                    'required' => true,
                    'property' => 'nom'
                ))
                
                ->add('Suivant', 'submit', array('attr' => array('class' => 'btn btn-primary btn-cons-md pull-right')))
                ->add('Cancel', 'button', array('attr' => array('class' => 'btn btn-white btn-cons-md')))
                ->getForm();
        $request = $this->getRequest();
        if ($form->handleRequest($request)->isValid()) {
            try {

                

                $em = $this->getDoctrine()->getManager();

                //A modifier pour prendre que les joueurs disponibles
                $joueurs = $em->getRepository("wyshybackNavBundle:Personne")->findAll();
                
                
                foreach ($competition->joueurs as $joueur) {
                $classement = new Classement;
                $classement->setIdjoueur($joueur);
                $classement->setIdcompetition($competition);
                try {
                    
                $em->persist($classement);
                } catch (Exception $ex) {
                    echo $ex->getMessage();
                }
                }
                $em->persist($competition);

                $em->flush();
         //          return $this->render('wyshybackNavBundle:Nav:matchs.html.twig',array('form'=> $form->createView()));
           return $this->redirect($this->generateUrl("wyshyback_nav_matchs",array('idcompetition' => $competition->getIdcompetition())));
                   } catch (\Doctrine\DBAL\DBALException $e) {
                echo $e->getMessage();
            }
        }
        $em2 = $this->getDoctrine()->getManager();
        $joueurs = $em2->getRepository("wyshybackNavBundle:Personne")->findByRole('joueur');
        return $this->render('wyshybackNavBundle:Nav:competitonAjout.html.twig', array('form' => $form->createView(), 'joueurs' => $joueurs));
    }

    
    
    
    public function afficheCompetitionAction() {
        $competition = new Competition;

        $form = $this->createFormBuilder($competition)
                ->add('libelle', 'text', array('attr' => array('class' => ' form-control ')))
                ->add('datedebut', 'date', array('attr' => array('class' => '  ')))
                ->add('datefin', 'date', array('attr' => array('class' => '   ')))
                //->add('niveau','text',array('attr' => array('class' => '  form-control ')))
                ->add('niveau', 'choice', array(
                    'choices' => array(
                        'National' => 'National',
                        'International' => 'International'
                    ),
                    'data' => 1,
                    'attr' => array('class' => ' select2-input ')
                ))
                // ->add('categorie','text',array('attr' => array('class' => ' form-control ')))
                ->add('categorie', 'choice', array(
                    'choices' => array(
                        'Homme' => 'homme',
                        'Femme' => 'femme',
                        'Mixte' => 'mixte'
                    ),
                    'data' => 1,
                    'attr' => array('class' => ' select2-input ')
                ))
                //->add('type','text',array('attr' => array('placeholder' => ' Surface ')))
                ->add('type', 'choice', array(
                    'choices' => array(
                        'Veteran' => 'Veteran',
                        'Junior' => 'Junior',
                        'Senior' => 'Senior'
                    ),
                    'data' => 1,
                    'attr' => array('class' => ' select2-input ')
                ))
                ->add('nbrpoints', 'text', array('attr' => array('class' => ' form-control ')))
                ->add('ajouter', 'submit', array('attr' => array('class' => 'btn btn-success btn-cons')))
                ->getForm();
        $request = $this->getRequest();
        if ($form->handleRequest($request)->isValid()) {
            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($competition);
                $em->flush();
                echo "<center> <b style='color:green'><p>Ajoute avec succes<p> </b> </center>";
            } catch (\Doctrine\DBAL\DBALException $e) {
                echo "<center> <b> LibelleStade Existe Deja , veuillez verifier vos donn√©es</b> </center>";
            }



            $em = $this->getDoctrine()->getManager();
            $Competitions = $em->getRepository("wyshybackNavBundle:Competition")->findAll();
            return $this->render('wyshybackNavBundle:Nav:competitionAffichage.html.twig', array('Competitions' => $Competitions, 'form' => $form->createView()));
        }
        $em = $this->getDoctrine()->getManager();
        $Competitions = $em->getRepository("wyshybackNavBundle:Competition")->findAll();
        return $this->render('wyshybackNavBundle:Nav:competitionAffichage.html.twig', array('Competitions' => $Competitions, 'form' => $form->createView()));
    }

    
    
    public function deleteCompetitionAction($idcompetition) {
        $em = $this->getDoctrine()->getManager();
        $Stade = $em->getRepository("wyshybackNavBundle:Competition")->findOneBy(array('idcompetition' => $idcompetition));
        $em->remove($Stade);
        $em->flush();
        return $this->redirect($this->generateUrl("wyshyback_nav_AfficherComp"));
    }

    public function modifierCompetitionAction($libellecompetition) {
        $em = $this->getDoctrine()->getManager();
        $Stade = $em->getRepository('wyshybackNavBundle:Stade')->findOneBy(array('libellecompetition' => $libellecompetition)); //pour avoir l'objet Stade qui a l'id $idstade(passÈ en paramÈtre)
        $form = $this->createForm(new StadeModifForm(), $Competition); //pour remplire le formulaire de modification automatiquement
        $requete = $this->get('request');
        if ($requete->getMethod() == 'POST') {
            $form->bind($requete);
            if ($form->isValid()) {
                $em->persist($Competition);
                $em->flush();
                return $this->redirect($this->generateUrl("tft_listStade"));
            }
        }
        return $this->render('wyshybackNavBundle:Nav:ModifStade.html.twig', array('form' => $form->createView(), 'Stade' => $Stade));
    }

    public function nbJoueurAction() {
        $em = $this->getDoctrine()->getManager();
        $nombre = $em->getRepository('wyshybackNavBundle:Personne')
                ->getNbJoueur();
        return $this->render('wyshybackNavBundle:Nav:trash.html.twig', array('nombre' => $nombre));
    }

}
