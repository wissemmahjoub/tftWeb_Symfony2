<?php

namespace wyshy\backNavBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use \Doctrine\ORM\Query;
use wyshy\backNavBundle\Entity\Competition;
use wyshy\backNavBundle\Entity\Classement;
use wyshy\backNavBundle\Entity\Personne;
use wyshy\backNavBundle\Entity\Matchs;
use wyshy\backNavBundle\Entity\Score;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityRepository;

class MatchController extends Controller {

    private $idcompetition;
    private $nbrjoueur;
    private $Scoredmatch;
    private $matchAdded = "false";

    public function ajouterMatchComAction($idcompetition) {


        $this->idcompetition = $idcompetition;
        $em = $this->getDoctrine()->getManager();
        $competition = $em->getRepository('wyshybackNavBundle:Competition')->findOneByIdcompetition($idcompetition); //pour avoir l'objet Stade qui a l'id $idstade(passÈ en paramÈtre)


        $joueurs = $em->getRepository('wyshybackNavBundle:Personne')->findAll();
        $nbrjoueur = $em->getRepository('wyshybackNavBundle:Classement')->findByIdcompetition($idcompetition); //pour avoir l'objet Stade qui a l'id $idstade(passÈ en paramÈtre)

        $nbrjoueur = Count($nbrjoueur);
        $this->nbrjoueur = $nbrjoueur;
        $competition->setNbrmatch($nbrjoueur - 1);

        $match = new Matchs();
        $int = (int) $idcompetition;
        $compArray = array('data' => $int);
        //  $nbrmatchsAtester = $em->getRepository('wyshybackNavBundle:Matchs')->findByIdcompetition($idcompetition); //pour avoir l'objet Stade qui a l'id $idstade(passÈ en paramÈtre)








        $form = $this->createFormBuilder($match)
                ->add('datematch', 'date')
                ->add('idarbitre', 'entity', array('attr' => array('style' => 'display:block', 'class' => 'form-control'),
                    'class' => 'wyshybackNavBundle:Personne',
                    'property' => 'nom',
                    'required' => true,
                    'empty_value' => 'Choix',
                    'query_builder' => function(EntityRepository $er ) {
                return $er->createQueryBuilder('w')
                        ->where('w.role = ?1')
                        ->setParameter(1, 'arbitre');
            }))
                ->add('idjoueur1', 'entity', array('attr' => array('style' => 'display:block', 'class' => 'form-control'),
                    'class' => 'wyshybackNavBundle:Personne',
                    'property' => 'nom',
                    'empty_value' => 'Choix',
                    'required' => true,
                    'query_builder' => function(EntityRepository $er ) use ($idcompetition, $nbrjoueur) {
                return $er->createQueryBuilder('w')
                        ->leftjoin('wyshybackNavBundle:Classement', 'c', 'WITH', 'c.idjoueur = w.idpersonne')
                        ->Where('c.idcompetition= :com')
                        ->setParameter('com', $idcompetition);
            }))
                ->add('idjoueur2', 'entity', array('attr' => array('style' => 'display:block', 'class' => 'form-control'),
                    'class' => 'wyshybackNavBundle:Personne',
                    'property' => 'nom',
                    'empty_value' => 'Choix',
                    'required' => true,
                    'query_builder' => function(EntityRepository $er ) use ($idcompetition, $nbrjoueur) {
                return $er->createQueryBuilder('w')
                        ->leftjoin('wyshybackNavBundle:Classement', 'c', 'WITH', 'c.idjoueur = w.idpersonne')
                        ->Where('c.idcompetition= :com')
                        ->setParameter('com', $idcompetition);
            }))
                ->add('idstade', 'entity', array('attr' => array('style' => 'display:block', 'class' => 'select2-container select2-container-active'),
                    'class' => 'wyshybackNavBundle:Stade',
                    'empty_value' => 'Choix',
                    'required' => true,
                    'property' => 'libellestade'
                ))
                ->add('Continuer', 'submit', array('attr' => array('class' => 'btn btn-danger btn-cons pull-right')))
                ->getForm();


        $request = $this->getRequest();
        if ($form->handleRequest($request)->isValid()) {
            try {

                $em2 = $this->getDoctrine()->getManager();
                $match->setIdcompetition($competition);
                $match->setNiveau($competition->getNiveau());
                $match->setType($competition->getType());
                $match->setCategorie($competition->getCategorie());

                $em2->persist($match);
                $em2->flush();

                $nbrmatchs = $em2->getRepository('wyshybackNavBundle:Matchs')->findByIdcompetition($idcompetition); //pour avoir l'objet Stade qui a l'id $idstade(passÈ en paramÈtre)

                /*
                 * 
                 * 
                 *  Si un match est ajoutÈ , les deux joueurs y affectÈs sont eliminÈs de la nouvelle liste.
                 * 
                 */

                /*
                 * Si le nombre de matchs max est atteint , on redirige vers l'affichage .
                 */
                echo $this->matchAdded . " and " . count($nbrmatchs);
                if ($competition->getNbrmatch() / 2 <= Count($nbrmatchs)) {
                    return $this->redirect($this->generateUrl("wyshyback_nav_finals", array('idcompetition' => $idcompetition)));
                }
                echo '<center id="notif"> <b style="color:green;display:none">Match Ajout√© avec succ√©s </b> </center>';
            } catch (\Doctrine\DBAL\DBALException $e) {
                echo '<center> <b> LibelleStade Existe Deja , veuillez verifier vos donn√©es</b> </center>' . $e->getMessage();
            }
        }// END IF
        $em3 = $this->getDoctrine()->getManager();

        $nbrmatchs = $em3->getRepository('wyshybackNavBundle:Matchs')->findByIdcompetition($idcompetition); //pour avoir l'objet Stade qui a l'id $idstade(passÈ en paramÈtre)

        return $this->render('wyshybackNavBundle:Nav:matchs.html.twig', array('form' => $form->createView(), 'joueurs' => $joueurs, 'competition' => $competition, 'nbrMatch' => Count($nbrmatchs)));
    }

    public function finalsAction($idcompetition) {

        $em = $this->getDoctrine()->getManager();
        $Competition = $em->getRepository('wyshybackNavBundle:Competition')->findOneByIdcompetition($idcompetition);
        $joueurs = $em->getRepository('wyshybackNavBundle:Classement')->findByIdcompetition($idcompetition);
         $query2 = $em->createQuery(
                                'SELECT m
                                    FROM wyshybackNavBundle:Matchs m
                                    WHERE m.idcompetition = :comp
                                    AND m.idjoueur1 <> 999'
                        )->setParameter('comp', $idcompetition);

                $matchs = $query2->getResult();       
        
        
        
                $query = $em->createQuery(
                                'SELECT m
                                    FROM wyshybackNavBundle:Matchs m
                                    WHERE m.idcompetition = :comp
                                    AND m.idjoueur2 = 999'
                        )->setParameter('comp', $idcompetition);
           
                
                
                
                $classementList  = $em->getRepository('wyshybackNavBundle:Classement')->findByIdcompetition($idcompetition);
       
                
                
                
                
                $matchFinals = $query->getResult();
        $nbrMatchs = Count($matchs);
        $nbrMatchsFinals = Count($matchFinals);

        $this->idcompetition = $idcompetition;
        $em = $this->getDoctrine()->getManager();
        $competition = $em->getRepository('wyshybackNavBundle:Competition')->findOneByIdcompetition($idcompetition); //pour avoir l'objet Stade qui a l'id $idstade(passÈ en paramÈtre)


        $joueurs = $em->getRepository('wyshybackNavBundle:Personne')->findAll();
        $nbrjoueur = $em->getRepository('wyshybackNavBundle:Classement')->findByIdcompetition($idcompetition); //pour avoir l'objet Stade qui a l'id $idstade(passÈ en paramÈtre)
        $nbrjoueur = Count($nbrjoueur);

        $joueurAux = $em->getRepository('wyshybackNavBundle:Personne')->findOneByIdpersonne(999); //pour avoir l'objet Stade qui a l'id $idstade(passÈ en paramÈtre)

        $this->nbrjoueur = $nbrjoueur;
        $competition->setNbrmatch($nbrjoueur - 1);

        $match = new Matchs();
        $int = (int) $idcompetition;
        $compArray = array('data' => $int);
        //  $nbrmatchsAtester = $em->getRepository('wyshybackNavBundle:Matchs')->findByIdcompetition($idcompetition); //pour avoir l'objet Stade qui a l'id $idstade(passÈ en paramÈtre)


        $form = $this->createFormBuilder($match)
                ->add('datematch', 'date')
                ->add('idarbitre', 'entity', array('attr' => array('style' => 'display:block', 'class' => 'form-control'),
                    'class' => 'wyshybackNavBundle:Personne',
                    'property' => 'nom',
                    'required' => true,
                    'empty_value' => 'Choix',
                    'query_builder' => function(EntityRepository $er ) {
                return $er->createQueryBuilder('w')
                        ->where('w.role = ?1')
                        ->setParameter(1, 'arbitre');
            }))
                ->add('idstade', 'entity', array('attr' => array('style' => 'display:block', 'class' => 'select2-container select2-container-active'),
                    'class' => 'wyshybackNavBundle:Stade',
                    'empty_value' => 'Choix',
                    'required' => true,
                    'property' => 'libellestade'
                ))
                ->add('Continuer', 'submit', array('attr' => array('class' => 'btn btn-danger btn-cons pull-right')))
                ->getForm();


        $request = $this->getRequest();
        if ($form->handleRequest($request)->isValid()) {
            try {

                $em2 = $this->getDoctrine()->getManager();
                $match->setIdcompetition($competition);
                $match->setNiveau($competition->getNiveau());
                $match->setType($competition->getType());
                $match->setCategorie($competition->getCategorie());
                $match->setIdjoueur1($joueurAux);
                $match->setIdjoueur2($joueurAux);
                $em2->persist($match);
                $em2->flush();

             
                 $query2 = $em2->createQuery(
                                'SELECT m
                                    FROM wyshybackNavBundle:Matchs m
                                    WHERE m.idcompetition = :comp
                                    AND m.idjoueur1 <> 999'
                        )->setParameter('comp', $idcompetition);

                $nbrmatchs = $query2->getResult();
                

                
                
                $query = $em2->createQuery(
                                'SELECT m
                                    FROM wyshybackNavBundle:Matchs m
                                    WHERE m.idcompetition = :comp
                                    AND m.idjoueur2 = 999'
                        )->setParameter('comp', $idcompetition);

                $matchFinals = $query->getResult();
                

                if (Count($matchFinals) >= Count($nbrmatchs) - 1) {
                    return $this->redirect($this->generateUrl("wyshyback_nav_AfficherComp"));
                }
                echo '<center id="notif"> <b style="color:green;display:none">Match Ajout√© avec succ√©s </b> </center>';
            } catch (\Doctrine\DBAL\DBALException $e) {
                echo '<center> <b> LibelleStade Existe Deja , veuillez verifier vos donn√©es</b> </center>' . $e->getMessage();
            }
        }// END IF

        return $this->render('wyshybackNavBundle:Nav:matchsFinals.html.twig', array('form' => $form->createView(), 'competition' => $Competition, 'joueurs' => $joueurs, 'matchs' => $matchs, 'nbrMatchs' => $nbrMatchs,'nbrMatchsFinals'=>$nbrMatchsFinals,'classement'=>$classementList));
    }

    public function scoreAction($idmatch) {
        $this->Scoredmatch = $idmatch;
        $em = $this->getDoctrine()->getManager();
         $match = $em->getRepository('wyshybackNavBundle:Matchs')->findOneByIdmatch($idmatch);
        $score = new Score();

        $form = $this->createFormBuilder($score)
                ->add('nbrsetj1', 'text', array('attr' => array('style' => 'display:block', 'class' => 'form-control'),'label'=>"Joueur 1"))
                ->add('nbrsetj2', 'text', array('attr' => array('style' => 'display:block', 'class' => 'form-control'),'label'=>"Joueur 2"))
                ->add('nbracej1', 'text', array('attr' => array('style' => 'display:block', 'class' => 'form-control'),'label'=>"Ace joueur 1"))
                ->add('nbracej2', 'text', array('attr' => array('style' => 'display:block', 'class' => 'form-control'),'label'=>"Ace joueur 2"))
                ->add('dblfautej1', 'text', array('attr' => array('style' => 'display:block', 'class' => 'form-control'),'label'=>"Fautes joueur 2"))
                ->add('dblfautej2', 'text', array('attr' => array('style' => 'display:block', 'class' => 'form-control'),'label'=>"Fautes joueur 2"))
                ->add('Affecter', 'submit', array('attr' => array('class' => 'btn btn-danger btn-cons pull-right')))
                ->getForm();


        $request = $this->getRequest();
        if ($form->handleRequest($request)->isValid()) {
            try {
                $em2 = $this->getDoctrine()->getManager();
                $match = $em2->getRepository('wyshybackNavBundle:Matchs')->findOneByIdmatch($idmatch);
                $query = $em2->createQuery(
                                'SELECT m
                                    FROM wyshybackNavBundle:Matchs m
                                    WHERE m.idcompetition = :comp
                                    AND m.idjoueur2 = 999
                                    ORDER BY m.idmatch ASC'
                        )->setParameter('comp', $match->getIdcompetition());

                $matchsToAffect = $query->getResult();
                
               
                        
                    
                if ( $score->getNbrsetj1() > $score->getNbrsetj2())
                {
                    
                    $query4 = $em2->createQuery(
                                'SELECT c
                                    FROM wyshybackNavBundle:Classement c
                                    WHERE c.idcompetition = :comp
                                    AND c.idjoueur = :joueur'
                        )->setParameter('joueur', $match->getIdjoueur1()->getIdpersonne() )
                        ->setParameter('comp' , $match->getIdcompetition())
                        ;

                $classement = $query4->getResult();
                       
                         $classement[0]->setRang( $classement[0]->getRang() + (3*$score->getNbrsetj1()));
                         $em2->persist($classement[0]);
                         $em2->flush();
                    
                     if (Count($matchsToAffect)>0)
                    {
                    if ($matchsToAffect[0]->getIdjoueur1()->getIdpersonne() == 999)
                    {
                        
                        $matchsToAffect[0]->setIdjoueur1($match->getIdjoueur1());
                         
                
                         }else
                    {
                        $matchsToAffect[0]->setIdjoueur2($match->getIdjoueur1());
                    }
                    }
                    
                }else
                {
                    
                     $query5 = $em2->createQuery(
                                'SELECT c
                                    FROM wyshybackNavBundle:Classement c
                                    WHERE c.idcompetition = :comp
                                    AND c.idjoueur = :joueur'
                        )->setParameter('joueur', $match->getIdjoueur2()->getIdpersonne() )
                        ->setParameter('comp' , $match->getIdcompetition())
                        ;
                $classement = $query5->getResult();
                       
                         $classement[0]->setRang( $classement[0]->getRang() + (3*$score->getNbrsetj2()));
                         $em2->persist($classement[0]);
                         $em2->flush();
                    
                  if (Count($matchsToAffect)>0)
                    {
                    if ($matchsToAffect[0]->getIdjoueur1()->getIdpersonne() == 999)
                    {
                            $matchsToAffect[0]->setIdjoueur1($match->getIdjoueur2());
                    }else
                    {
                            $matchsToAffect[0]->setIdjoueur2($match->getIdjoueur2());
                    }
                    }
                }
                
              
               
                  if (Count($matchsToAffect)>0)
                    {
                $em2->persist($matchsToAffect[0]);
                    $em2->flush();
                    
                    }
                
                $em2->persist($score);
                  $em2->flush();
                  
                 $match->setIdScore($score);
                
                $em2->persist($match);
                  $em2->flush();
                return $this->redirect($this->generateUrl("wyshyback_nav_AfficherComp"));
            } catch (\Doctrine\DBAL\DBALException $e) {
                echo '<center> <b> LibelleStade Existe Deja , veuillez verifier vos donn√©es</b> </center>' . $e->getMessage();
            }
        }// END IF

        return $this->render('wyshybackNavBundle:Nav:score.html.twig', array('form' => $form->createView(),'match'=>$match));
    }

}
