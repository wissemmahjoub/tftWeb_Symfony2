<?php


namespace wyshy\backNavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use wyshy\backNavBundle\Entity\Personne;

use wyshy\backNavBundle\form\JoueurModifFrom;

class JoueurController extends Controller
{
  //###################### AJOUT JOUEUR #################################################################
     
  public function addjoueurAction()
 {
          $personne = new Personne();
          $form = $this->createFormBuilder($personne)
                  ->add('cin','text',array('attr' => array('placeholder' => ' CIN ')))
                  ->add('nom','text',array('attr' => array('placeholder' => ' Name ')))
                  ->add('prenom','text',array('attr' => array('placeholder' => ' Last Name ')))
                  ->add('email','email',array('attr' => array('placeholder' => ' Email@xyz.com ')))
                  ->add('sexe','choice',array( 'choices'  => array('Autre' => 'Autre','Homme' => 'Homme','Femme' => 'Femme')))
                  ->add('login','text',array('attr' => array('placeholder' => ' Login ')))
                  ->add('password','password',array('attr' => array('placeholder' => ' Password ')))
                  ->add('niveau','choice',array( 'choices'  => array('Amateur' => 'Amateur','Nationnal' => 'Nationnal','Internationnal' => 'Internationnal')))
                  ->add('datenaissance','birthday')
                  ->add('ajouter','submit')
                  ->getForm();
          
          $personne->setRole('Joueur');
          $request = $this->getRequest();
          if($form->handleRequest($request)->isValid())
          { 
              $em=$this->getDoctrine()->getManager();
              $em->persist($personne);
              $em->flush();
      echo "<center> <b>joueur Ajouté avec succés </b> </center>" ;
         
    }
     return $this->render('wyshybackNavBundle:Nav:ajouterjoueur.html.twig', array('form' => $form->createView()));

     }
   
    
     //###################### AFFICHAGE LSTE  JOUEURS #################################################################
    
    public function affichejoueursAction()
    {
        $role='Joueur';
       $em=$this->getDoctrine()->getManager();
       $personnes =$em->getRepository("wyshybackNavBundle:Personne")->findByRole($role);
       
       return $this->render('wyshybackNavBundle:Nav:listerjoueur.html.twig',array('personnes'=>$personnes));
    }
    
    
    
    //###################### MODIFIER JOUEUR #################################################################
 
  public function modifierjoueurAction($idpersonne)
    {  
     $em=$this->getDoctrine()->getManager();
     $personne=$em->getRepository('wyshybackNavBundle:Personne')->findOneBy(array('idpersonne' =>$idpersonne)); //pour avoir l'objet Stade qui a l'id $idstade(passé en paramétre)
     $form=$this->createForm(new JoueurModifFrom(),$personne); //pour remplire le formulaire de modification automatiquement
     $requete=$this->get('request');
           if($requete->getMethod()=='POST'){
              $form->bind($requete);
                  if($form->isValid()){
                      $em->persist($personne);
                      $em->flush();
       return $this->redirect($this->generateUrl("wyshyback_nav_listerjoueurs"));
            
            }
        }
         return $this->render('wyshybackNavBundle:Nav:modifierjoueur.html.twig',array('form'=>$form->createView(),'personne'=>$personne));
         
     }
    
    
       
    //###################### SUPPRIMER JOUEUR #################################################################
 
     
     public function supprimerjoueurAction($idpersonne)
    {  
     $em = $this->getDoctrine()->getManager();
        $Personne = $em->getRepository("wyshybackNavBundle:Personne")->findOneBy(array('idpersonne' =>$idpersonne));
        $em->remove($Personne);
        $em->flush();
        return $this->redirect($this->generateUrl("wyshyback_nav_listerjoueurs"));
     }
     
     
    
}


