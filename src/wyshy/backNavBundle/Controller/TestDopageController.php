<?php

namespace wyshy\backNavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use wyshy\backNavBundle\Entity\Test;
use wyshy\backNavBundle\form\TestModifForm;

use wyshy\backNavBundle\Entity\Personne;


class TestDopageController extends Controller
{
 

//######################## Nouveau Test ###############################################################
    public function addTestDopageAction()
      {
          $Test = new Test();
          $form = $this->createFormBuilder($Test)
                  ->add('libelletest')
                  ->add('datetest','date',['widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => ['class' => ' datepicker','data-provide' => 'datepicker','data-date-format' => 'dd-mm-yyyy']])
                  ->add('heure')
                  ->add('ajouter','submit',array('attr' => array('class' => 'btn btn-success btn-cons')))
                  ->getForm();
          $request = $this->getRequest();
          if($form->handleRequest($request)->isValid())
          { try {
              $em=  $this->getDoctrine()->getManager();
              $em->persist($Test);
              $em->flush();
    
            echo "<center> <b>TestDopage Ajout� avec succés </b> </center>" ;
          
             return $this->redirect($this->generateUrl("tft_ListePlayersTest"));
          }
        catch (\Doctrine\DBAL\DBALException $e)
        {echo "<center> <b> libelletest Existe Deja , veuillez verifier vos données</b> </center>" ;}
    }
    return $this->render('wyshybackNavBundle:Nav:AddTest.html.twig',array('form'=> $form->createView()));
    }
    
     //###################### AFFICHAGE LSTE  Joueurs A inviter #################################################################
    
    public function affichePlayersAction()
            
    {       

       $em=$this->getDoctrine()->getManager();
       $users =$em->getRepository("wyshybackNavBundle:Personne")->SelectRandom();
       
        $form = $this->createFormBuilder($users)
                   
                  ->add('INVITER','submit',array('attr' => array('class' => 'btn btn-success btn-cons')))
                  ->getForm();
       return $this->render('wyshybackNavBundle:Nav:ListeJoueurPourInvitation.html.twig',array('Personnes'=>$users,'form'=> $form->createView()));
   
    }
    
     //###################### AFFICHAGE LSTE  TEST #################################################################
    
    public function afficheTestDopageAction()
    {
       $em=$this->getDoctrine()->getManager();
       $Tests =$em->getRepository("wyshybackNavBundle:Test")->findAll();
       
       return $this->render('wyshybackNavBundle:Nav:AfficheTest.html.twig',array('Tests'=>$Tests));
    }
    //###################### Supprimer Test #################################################################
  public function deleteTestDopageAction($id) 
    {
        $em = $this->getDoctrine()->getManager();
        $Test = $em->getRepository("wyshybackNavBundle:Test")->findOneBy(array('idtest' =>$id));
        $em->remove($Test);
        $em->flush();
        return $this->redirect($this->generateUrl("tft_ListeTestDopages"));
    }
    //###################### Modifier Test #################################################################
 
  public function ModifierTestAction($id)
    {  
     $em=$this->getDoctrine()->getManager();
     $Test=$em->getRepository('wyshybackNavBundle:Test')->findOneBy(array('idtest' =>$id)); 
     $form=$this->createForm(new TestModifForm(),$Test); //pour remplire le formulaire de modification automatiquement
     $requete=$this->get('request');
           if($requete->getMethod()=='POST'){
              $form->bind($requete);
                  if($form->isValid()){
                      $em->persist($Test);
                      $em->flush();
      return $this->redirect($this->generateUrl("tft_ListeTestDopages"));
            
            }
        }
         return $this->render('wyshybackNavBundle:Nav:ModifTest.html.twig',array('form'=>$form->createView(),'Test'=>$Test));
         
     }
//###################### Invitation des joueurs #################################################################
     public function inviterJoueursAction(Request $request)
    {
         //pour verifier le contenue de mesids
         //var_dump($request->get('mesids')); die; 
         
        $ids=$request->request->get('mesids');
        $joueur = new Personne();
        $em=$this->getDoctrine()->getManager();
 
        $players=$this->get('Doctrine')->getRepository('wyshybackNavBundle:Personne')
            ->createQueryBuilder('e')
            ->where('e.idpersonne  IN (:idd)')
            ->setParameter('idd', $ids)
            ->getQuery()
            ->getResult();
 
        foreach($players as $joueur)
        {
            $joueur->setEtatInvit(1);
            $em->persist($joueur);
            $em->flush();
            
        //**********************************************************************
        // Send Mail  ----------------------------------------------------------
        //**********************************************************************
       $messag=  \Swift_Message::newInstance()
                 ->setSubject('Test de Dopage')
                 ->setFrom(array('tftmywishy@gmail.com' =>'Medecin TFT'))
                 ->setTo($joueur->getEmail())
                 ->setCharset('utf-8')
                 ->setContentType('text/html')
                 ->setBody($this->render('wyshybackNavBundle:Nav:Mail_invit_players.html.twig',array('utilisateur' => $joueur)));
         $this->get('mailer')->send($messag);
 
       //***********************************************************************
       //***********************************************************************  
            
        }
        return $this->redirect($this->generateUrl("tft_ListePlayersTest"));
 
    }
     
     
 }