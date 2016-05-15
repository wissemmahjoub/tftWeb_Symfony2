<?php

namespace wyshy\backNavBundle\Controller;

use Doctrine\DBAL\DBALException;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use wyshy\backNavBundle\Entity\Stade;
use wyshy\backNavBundle\form\StadeModifForm;
    

class StadeController extends Controller
{
//######################## AJOUT STADE ###############################################################
    public function addStadeAction()
      {
        
       
          $Stade = new Stade();
          
          $form = $this->createFormBuilder($Stade)
                   ->add('libellestade','text',array('attr' => array('class' => ' form-control ')))
                   ->add('ville','text',array('attr' => array('class' => ' form-control ')))
                   ->add('capacite','text',array('attr' => array('class' => ' form-control ')))
                   ->add('surface','text',array('attr' => array('class' => ' form-control ')))
                  ->add('datecreation','date',['widget' => 'single_text','format' => 'dd-MM-yyyy','attr' => ['class' => ' datepicker','data-provide' => 'datepicker','data-date-format' => 'dd-mm-yyyy']])
                  
                  ->add('ajouter','submit',array('attr' => array('class' => 'btn btn-success btn-cons')))
                  ->getForm();
          $request = $this->getRequest();
          if($form->handleRequest($request)->isValid())
          { try {
              $em=  $this->getDoctrine()->getManager();
              $em->persist($Stade);
              $em->flush();
    return $this->redirect($this->generateUrl("tft_findStade"));
            echo "<center> <b>Stade Ajout√© avec succ√©s </b> </center>" ;
          }
        catch (DBALException $e)
        {echo "<center> <b> LibelleStade Existe Deja , veuillez verifier vos donn√©es</b> </center>" ;}
    }
    return $this->render('wyshybackNavBundle:Nav:AjoutStade.html.twig',array('form'=> $form->createView()));
    }
    

 //###################### Modifier STADE #################################################################
 
  public function ModifierStadeAction($libellestade)
    {  
     $em=$this->getDoctrine()->getManager();
     $Stade=$em->getRepository('wyshybackNavBundle:Stade')->findOneBy(array('libellestade' =>$libellestade)); //pour avoir l'objet Stade qui a l'id $idstade(passÈ en paramÈtre)
     $form=$this->createForm(new StadeModifForm(),$Stade); //pour remplire le formulaire de modification automatiquement
     $requete=$this->get('request');
           if($requete->getMethod()=='POST'){
              $form->bind($requete);
                  if($form->isValid()){
                      $em->persist($Stade);
                      $em->flush();
       return $this->redirect($this->generateUrl("tft_findStade"));
            
            }
        }
         return $this->render('wyshybackNavBundle:Nav:ModifStade.html.twig',array('form'=>$form->createView(),'Stade'=>$Stade));
         
     }
     
     
//###################### Supprimer STADE #################################################################
  public function deleteStadeAction($idstade) 
    {
        $em = $this->getDoctrine()->getManager();
        $Stade = $em->getRepository("wyshybackNavBundle:Stade")->findOneBy(array('idstade' =>$idstade));
        $em->remove($Stade);
        $em->flush();
        return $this->redirect($this->generateUrl("tft_findStade"));
    }
//###################### affiche STADE #################################################################
public function rechercherStadeAction() 
{
  $em=$this->getDoctrine()->getManager();
  $req=$this->get('request');
  $Stade=$em->getRepository('wyshybackNavBundle:Stade')->findAll();
   if ($req->getMethod()=='POST') 
      {
        $libelle=$req->get('libellestade');//name de l'input ‡ partir du formulaire
        $Stade=$em->getRepository('wyshybackNavBundle:Stade')->findByNom($libelle);
      }
     return $this->render('wyshybackNavBundle:Nav:RechercheStade.html.twig',array('Stade'=>$Stade));
}





 //*******************************************************************************************************    
 //#################### Localisation Stade ###############################################################   
 //*******************************************************************************************************    
  
public function LocaliserStadeAction($idstade) 
    {
        $em = $this->getDoctrine()->getManager();
        $Stade = $em->getRepository("wyshybackNavBundle:Stade")->findOneBy(array('idstade' =>$idstade));
        return $this->render('wyshybackNavBundle:Nav:index2.html.twig',array('Stade'=>$Stade));
    }

    
 }