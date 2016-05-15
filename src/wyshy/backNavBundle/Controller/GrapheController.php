<?php

namespace wyshy\backNavBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use wyshy\backNavBundle\Entity\Personne;
use Zend\Json\Expr;


class GrapheController extends Controller {
    
    public function chartLineAction(){
 // Chart
 $series = array(
 array("name" => "Score des Joueurs", "data" => array(1,2,4,5,6,3,8))
 );

 $ob = new Highchart();
 $ob->chart->renderTo('linechart'); // #id du div où afficher le graphe
 $ob->title->text('TFT');
 $ob->xAxis->title(array('text' => "Joueurs"));
 $ob->yAxis->title(array('text' => "Score des joueurs"));
 $ob->series($series);

 return $this->render('wyshybackNavBundle:Graphe:LineChart.html.twig', array('chart' => $ob));

 }

 public function chartHistogrammeAction(){
 $em=$this->getDoctrine()->getManager();
       $users =$em->getRepository("wyshybackNavBundle:Personne")->SelectRandom();
       
        $form = $this->createFormBuilder($users)
                   
                  ->add('INVITER','submit',array('attr' => array('class' => 'btn btn-success btn-cons')))
                  ->getForm();
       //return $this->render('wyshybackNavBundle:Nav:ListeJoueurPourInvitation.html.twig',array('Personnes'=>$users,'form'=> $form->createView()));
   
     $series = array( 
         array(
            'name' => 'Rainfall',
            'type' => 'column',
            'color' => '#4572A7',
            'yAxis' => 1,
            'data' => array(49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4),
),

         array(
            'name' => 'Temperature',
            'type' => 'spline',
            'color' => '#AA4643',
            'data' => array(7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6),
),
);

$yData = array(
        array(
            'labels' => array(
            'formatter' => new Expr('function () { return this.value + " degrees C" }'),
            'style' => array('color' => '#AA4643')),
            'title' => array(
                'text' => 'Temperature',
                'style' => array('color' => '#AA4643')),
                'opposite' => true,),
                        array(
                'labels' => array(
                'formatter' => new Expr('function () { return this.value + " mm" }'),
                'style' => array('color' => '#4572A7')),
                'gridLineWidth' => 0,
                'title' => array(
                'text' => 'Rainfall',
                'style' => array('color' => '#4572A7') ),
    ),
);
$categories = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$ob = new Highchart();
$ob->chart->renderTo('container'); // The #id of the div where to render the chart
$ob->chart->type('column');
$ob->title->text('ceci est statistique');
$ob->xAxis->categories($categories);
$ob->yAxis($yData);
$ob->legend->enabled(false);

$formatter = new Expr('function () {
                        var unit = {
                                "Rainfall": "mm",
                                "Temperature": "degrees C"
                                }
                            [this.series.name];
                            return this.x + ": <b>" + this.y + "</b> " + unit;
                                    }'
                    );

$ob->tooltip->formatter($formatter);
$ob->series($series);

return $this->render('wyshybackNavBundle:Graphe:histogramme.html.twig', 
        array('chart' => $ob)); 
}

public function chartPieAction(){

$ob = new Highchart();
$ob->chart->renderTo('piechart');
$ob->title->text('TFT: Statistiques des Joueurs/Par Point');
$ob->plotOptions->pie(array(
                        'allowPointSelect' => true,
                        'cursor' => 'pointer',
                        'dataLabels' => array('enabled' => true),
                                               'showInLegend' => true)
                      );

 //recuperation d'une liste a partir de la base de données
     $joueur = new Personne();
     $em=$this->getDoctrine()->getManager();
     $query=$em->createQuery("SELECT u.nom as nom , u.credit  as credit FROM  wyshybackNavBundle:personne u WHERE u.role like 'Joueur' ");
     $resultat=$query->getResult();
//affectation de resultat obtenue a partir de la base a l'array $Data 
     $data=array();
    foreach ($resultat as  $values) {
 
    $a = array($values['nom'],intval($values['credit']));
    array_push($data, $a); }

$ob->series(array(array('type' => 'pie','name' => 'Nombre Points', 'data' => $data)));

return $this->render('wyshybackNavBundle:Graphe:pie.html.twig',
                         array('chart' => $ob));

}



public function chartPie2Action(){

$ob = new Highchart();
$ob->chart->renderTo('piechart');
$ob->title->text('TFT: Statistiques des Joueurs/Experience');
$ob->plotOptions->pie(array(
                        'allowPointSelect' => true,
                        'cursor' => 'pointer',
                        'dataLabels' => array('enabled' => true),
                                               'showInLegend' => true)
                      );

 //recuperation d'une liste a partir de la base de données
     $joueur = new Personne();
     $em=$this->getDoctrine()->getManager();
     $query=$em->createQuery("SELECT u.nom as nom , u.experience  as experience FROM  wyshybackNavBundle:personne u WHERE u.role like 'Joueur' ");
     $resultat=$query->getResult();
//affectation de resultat obtenue a partir de la base a l'array $Data 
     $data=array();
    foreach ($resultat as  $values) {
 
    $a = array($values['nom'],intval($values['experience']));
    array_push($data, $a); }

$ob->series(array(array('type' => 'pie','name' => 'Nombre annees', 'data' => $data)));

return $this->render('wyshybackNavBundle:Graphe:pie.html.twig',
                         array('chart' => $ob));

}



public function chartPie3Action(){

$ob = new Highchart();
$ob->chart->renderTo('piechart');
$ob->title->text('TFT: Statistiques des Joueurs/Age');
$ob->plotOptions->pie(array(
                        'allowPointSelect' => true,
                        'cursor' => 'pointer',
                        'dataLabels' => array('enabled' => true),
                                               'showInLegend' => true)
                      );

 //recuperation d'une liste a partir de la base de données
     $joueur = new Personne();
     $em=$this->getDoctrine()->getManager();
     $query=$em->createQuery("SELECT u.nom as nom , (DATE_DIFF(CURRENT_DATE(),u.datenaissance)/365)  as datenaissance FROM  wyshybackNavBundle:personne u WHERE u.role like 'Joueur' ");
     $resultat=$query->getResult();
//affectation de resultat obtenue a partir de la base a l'array $Data 
     $data=array();
    foreach ($resultat as  $values) {
 
    $a = array($values['nom'],intval($values['datenaissance']));
    array_push($data, $a); }

$ob->series(array(array('type' => 'pie','name' => 'Age', 'data' => $data)));

return $this->render('wyshybackNavBundle:Graphe:pie.html.twig',
                         array('chart' => $ob));

}



}