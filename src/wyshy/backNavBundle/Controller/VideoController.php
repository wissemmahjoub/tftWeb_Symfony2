<?php


namespace wyshy\backNavBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class VideoController extends Controller {
    
    
     public function ajoutVideoAction()
      {
        
       
          $video = new \wyshy\backNavBundle\Entity\Video();
          
          $form = $this->createFormBuilder($video)
                   ->add('titre','text',array('attr' => array('placeholder' => ' titre ')))

                   
                   ->add('url','text',array('attr' => array('placeholder' => ' URL ')))

                   ->add('ajouter','submit',array('attr' => array('class' => 'btn btn-success btn-cons')))
                  ->getForm();
                $request = $this->getRequest();
          if($form->handleRequest($request)->isValid())
          { try {
               $ch= $video->getUrl();
         $l=  strlen($ch);
         $ch2= substr($ch, 32, $l-32);
         $ch3= "https://www.youtube.com/embed/".$ch2;
         $video->setUrl("$ch3");
              $em=  $this->getDoctrine()->getManager();
             $video->setDate(new \DateTime()) ;

              $em->persist($video);
              $em->flush();
             return $this->redirect($this->generateUrl("tft_affVideo"));

           //   return $this->redirect($this->generateUrl("tft_affEvent"));
          }
        catch (\Doctrine\DBAL\DBALException $e)
        {}
    }
    
    return $this->render('wyshybackNavBundle:Nav:ajoutvid.html.twig',array('form'=> $form->createView()));
    
    }
    
    
    public function afficherVideoAction()
    {
       $em=$this->getDoctrine()->getManager();
      $vids =$em->getRepository("wyshybackNavBundle:Video")->findAll();
       return $this->render('wyshybackNavBundle:Nav:affvid.html.twig',array('vids'=>$vids));
    }
   
     public function ModifierVideoAction($id)
    {  
    $em=$this->getDoctrine()->getManager();
     $video=$em->getRepository('wyshybackNavBundle:Video')->findOneBy(array('id' =>$id)); //pour avoir l'objet Medecin qui a l'id $idstade(passé en paramétre)
     $form=$this->createForm(new \wyshy\backNavBundle\form\VideoModifForm(),$video); //pour remplire le formulaire de modification automatiquement
     $requete=$this->get('request');
           if($requete->getMethod()=='POST'){
              $form->bind($requete);
                  if($form->isValid()){
                      $em->persist($video);
                      $em->flush();
       return $this->redirect($this->generateUrl("tft_affVideo"));
            
            }
        }
         return $this->render('wyshybackNavBundle:Nav:ModifVideo.html.twig',array('form'=>$form->createView(),'video'=>$video));
 
    }
    
    
    
      public function deleteVideoAction($id) 
    {
        $em = $this->getDoctrine()->getManager();
        $video = $em->getRepository("wyshybackNavBundle:Video")->findOneBy(array('id' =>$id));
        $em->remove($video);
        $em->flush();
        return $this->redirect($this->generateUrl("tft_affVideo"));
    }
    
     public function afficherVideoFrontAction()
    {
       $em=$this->getDoctrine()->getManager();
      $vids =$em->getRepository("wyshybackNavBundle:Video")->findAll();
       return $this->render('wyshynavFrontBundle:Default:vidFront.html.twig',array('vids'=>$vids));
       
    }
 
    
    
    
}
