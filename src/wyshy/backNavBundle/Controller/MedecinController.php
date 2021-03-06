<?php

namespace wyshy\backNavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use wyshy\backNavBundle\Entity\Personne;
 use wyshy\backNavBundle\form\MedecinModifForm;
 use mysqli;

class MedecinController extends Controller
{
//######################## AJOUT M�decin ###############################################################
    public function addMedecinAction()
      {
        
       
          $Medecin = new Personne();
          $Medecin ->setAvatar("gfff");
          $Medecin ->setRole("Medecin");
    //  $Medecin ->setPassword("cccccc");
          $form = $this->createFormBuilder($Medecin)
                   ->add('nom','text',array('attr' => array('placeholder' => ' Nom ')))
                 ->add('password','password',array('attr' => array('placeholder' => ' password ')))

                 ->add('prenom','text',array('attr' => array('placeholder' => ' prenom ')))
                 // ->add('prenom','file')
                   ->add('cin','text',array('attr' => array('placeholder' => ' cin ')))
                  ->add('sexe','choice',array( 'choices' => array('Homme' => 'Homme','Femme' => 'Femme')))
                   ->add('login','text',array('attr' => array('placeholder' => ' login ')))
                   ->add('specialite','text',array('attr' => array('placeholder' => ' specialite ')))
                   ->add('salaire','text',array('attr' => array('placeholder' => ' salaire ')))
                   //->add('datenaissance','birthday')
             ->add('datenaissance', 'date',['widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => ['class' => ' datepicker','data-provide' => 'datepicker','data-date-format' => 'dd-mm-yyyy']])

                //   ->add('sexe','text',array('attr' => array('placeholder' => ' sexe ')))
                   ->add('email','text',array('attr' => array('placeholder' => ' email ')))
                   ->add('adresse','text',array('attr' => array('placeholder' => ' adresse ')))
     ->add('ajouter','submit')

                  ->getForm();
                $request = $this->getRequest();
          if($form->handleRequest($request)->isValid())
          { try {
              
              $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "tft";
// Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            $salt = "abcd";
            $r = '{i:0;s:12:"ROLE_MEDECIN";}';
            $salted = $Medecin->getPassword() . '{' . $salt . '}';
            $digest = hash('sha512', $salted, true);

            for ($i = 1; $i < 5000; $i++) {
                $digest = hash('sha512', $digest . $salted, true);
            }

            $encodedPassword = base64_encode($digest);

              $prenom = $Medecin->getPrenom();
            
            $nom = $Medecin->getPrenom();
            $login = $Medecin->getLogin();
            $email = $Medecin->getEmail();
           
            $sql2 = "INSERT INTO fos_user (prenom,nom,email,username,password,salt,roles,username_canonical,email_canonical,enabled)
            VALUES ('$prenom','$nom','$email','$login','$encodedPassword','abcd','$r','$login','$email',1)";

            if (mysqli_query($conn, $sql2)) {

            } else {
            }
              
              
              $em=  $this->getDoctrine()->getManager();
              $em->persist($Medecin);
              $em->flush();
              return $this->redirect($this->generateUrl("tft_listMedecin"));
      echo "<center> <b>Medecin Ajouté avec succés </b> </center>" ;
          }
        catch (\Doctrine\DBAL\DBALException $e)
        {echo "<center> <b> LibelleStade Existe Deja , veuillez verifier vos données</b> </center>" ;}
    }
    
    return $this->render('wyshybackNavBundle:Nav:ajoutMedecin.html.twig',array('form'=> $form->createView()));
    
    }
    
   //###################### AFFICHAGE LSTE  STADE #################################################################
    
    public function afficheMedecinAction()
    {
       $em=$this->getDoctrine()->getManager();
   //    $Medecins =$em->getRepository("wyshybackNavBundle:Personne")->findAll();
       $Medecins =$em->getRepository("wyshybackNavBundle:Personne")->findBy(array('role'=>'Medecin'));
       return $this->render('wyshybackNavBundle:Nav:AfficheMedecin.html.twig',array('Medecins'=>$Medecins));
    }
 //###################### Modifier M�decin #################################################################
 public function ModifierMedecinAction($cin)
    {  
    $em=$this->getDoctrine()->getManager();
     $Medecin=$em->getRepository('wyshybackNavBundle:Personne')->findOneBy(array('cin' =>$cin)); //pour avoir l'objet Medecin qui a l'id $idstade(pass� en param�tre)
     $form=$this->createForm(new MedecinModifForm(),$Medecin); //pour remplire le formulaire de modification automatiquement
     $requete=$this->get('request');
           if($requete->getMethod()=='POST'){
              $form->bind($requete);
                  if($form->isValid()){
                      $em->persist($Medecin);
                      $em->flush();
       return $this->redirect($this->generateUrl("tft_listMedecin"));
            
            }
        }
         return $this->render('wyshybackNavBundle:Nav:ModifMedecin.html.twig',array('form'=>$form->createView(),'Medecin'=>$Medecin));
 
    }
     
  //###################### Supprimer Medecin #################################################################
    
     public function deleteMedecinAction($cin) 
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository("wyshybackNavBundle:Personne")->findOneBy(array('cin' =>$cin));
        $em->remove($event);
        $em->flush();
        return $this->redirect($this->generateUrl("tft_listMedecin"));
    }
 
    

 }