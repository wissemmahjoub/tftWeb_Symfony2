<?php

/* wyshybackNavBundle:Nav:LocaliserStade.html.twig */
class __TwigTemplate_99db0727ca4fadc0a83092a3533922faed450059625be24345f8ab134795a664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'cont' => array($this, 'block_cont'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<!DOCTYPE html>
<html>
  <head>
    <title>Geocoding service</title>
    <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
    <meta charset=\"utf-8\">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }


    </style>
  </head>
  <body>
    <div id=\"floating-panel\">
        <input id=\"address\" type=\"hidden\" value=\"localiser moi\">
      <input id=\"submit\" type=\"hidden\" value=\"Geocode\">
    </div>
   ";
        // line 27
        $this->displayBlock('cont', $context, $blocks);
        // line 29
        echo " 
    <script>
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: {lat: -34.397, lng: 150.644}
  });
  var geocoder = new google.maps.Geocoder();
 setTimeout(function(){ document.getElementById('submit').click(); },2); //aprés 2 m.sec l'automatisation de click
  document.getElementById('submit').addEventListener('click', function() {
    geocodeAddress(geocoder, map);
   
  });
}

function geocodeAddress(geocoder, resultsMap) {
  var address = document.getElementById('ville').value;
  geocoder.geocode({'address': address}, function(results, status) {
   
    
      resultsMap.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
        map: resultsMap,
        position: results[0].geometry.location
      });
     
    
  });
  
}

    
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBjYNOQrDsSKLNFSyAtfg1w-4Wiwg4Uvrg&signed_in=true&callback=initMap\"
         async defer></script>
         
  </body>
</html>


";
    }

    // line 27
    public function block_cont($context, array $blocks = array())
    {
        // line 28
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:LocaliserStade.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 28,  94 => 27,  50 => 29,  48 => 27,  20 => 1,);
    }
}
/* */
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <title>Geocoding service</title>*/
/*     <meta name="viewport" content="initial-scale=1.0, user-scalable=no">*/
/*     <meta charset="utf-8">*/
/*     <style>*/
/*       html, body {*/
/*         height: 100%;*/
/*         margin: 0;*/
/*         padding: 0;*/
/*       }*/
/*       #map {*/
/*         height: 100%;*/
/*       }*/
/* */
/* */
/*     </style>*/
/*   </head>*/
/*   <body>*/
/*     <div id="floating-panel">*/
/*         <input id="address" type="hidden" value="localiser moi">*/
/*       <input id="submit" type="hidden" value="Geocode">*/
/*     </div>*/
/*    {% block cont %}*/
/* */
/*   {% endblock %} */
/*     <script>*/
/* function initMap() {*/
/*   var map = new google.maps.Map(document.getElementById('map'), {*/
/*     zoom: 15,*/
/*     center: {lat: -34.397, lng: 150.644}*/
/*   });*/
/*   var geocoder = new google.maps.Geocoder();*/
/*  setTimeout(function(){ document.getElementById('submit').click(); },2); //aprés 2 m.sec l'automatisation de click*/
/*   document.getElementById('submit').addEventListener('click', function() {*/
/*     geocodeAddress(geocoder, map);*/
/*    */
/*   });*/
/* }*/
/* */
/* function geocodeAddress(geocoder, resultsMap) {*/
/*   var address = document.getElementById('ville').value;*/
/*   geocoder.geocode({'address': address}, function(results, status) {*/
/*    */
/*     */
/*       resultsMap.setCenter(results[0].geometry.location);*/
/*       var marker = new google.maps.Marker({*/
/*         map: resultsMap,*/
/*         position: results[0].geometry.location*/
/*       });*/
/*      */
/*     */
/*   });*/
/*   */
/* }*/
/* */
/*     */
/*     </script>*/
/*     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjYNOQrDsSKLNFSyAtfg1w-4Wiwg4Uvrg&signed_in=true&callback=initMap"*/
/*          async defer></script>*/
/*          */
/*   </body>*/
/* </html>*/
/* */
/* */
/* */
