<?php

/* wyshybackNavBundle:Default:base.html.twig */
class __TwigTemplate_0ab2cd14a9b199075d65ff5fab3804eb3ca116e84bbd1bbcf7eb1547df2bb466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
    <meta charset=\"utf-8\">
    <title>TFT map</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
          width: 100%;
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id=\"map\"></div>   
    <script>
//code java script
function initMap() {
    var lat_TFT=36.843699;
    var lng_TFT=10.183563;
  var myLatLng = {lat:lat_TFT , lng:lng_TFT };

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 18,
    center: myLatLng
  });

var contentString = '<div id=\"content\">'+
      '<div id=\"siteNotice\">'+
      '</div>'+
      '<h1 id=\"firstHeading\" class=\"firstHeading\"><center>TFT</center></h1>'+
      '<div id=\"bodyContent\">'+'<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/others/aatft.jpg"), "html", null, true);
        echo "\"/>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
  map: map,
  position: myLatLng,
  content:contentString
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    animation:google.maps.Animation.BOUNCE,
    title: 'je suis un marqueur'
  });
  

    marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
  
}

    </script>
    <script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBjYNOQrDsSKLNFSyAtfg1w-4Wiwg4Uvrg&signed_in=true&callback=initMap\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 37,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta name="viewport" content="initial-scale=1.0, user-scalable=no">*/
/*     <meta charset="utf-8">*/
/*     <title>TFT map</title>*/
/*     <style>*/
/*       html, body {*/
/*         height: 100%;*/
/*         margin: 0;*/
/*         padding: 0;*/
/*       }*/
/*       #map {*/
/*           width: 100%;*/
/*         height: 100%;*/
/*       }*/
/*     </style>*/
/*   </head>*/
/*   <body>*/
/*     <div id="map"></div>   */
/*     <script>*/
/* //code java script*/
/* function initMap() {*/
/*     var lat_TFT=36.843699;*/
/*     var lng_TFT=10.183563;*/
/*   var myLatLng = {lat:lat_TFT , lng:lng_TFT };*/
/* */
/*   var map = new google.maps.Map(document.getElementById('map'), {*/
/*     zoom: 18,*/
/*     center: myLatLng*/
/*   });*/
/* */
/* var contentString = '<div id="content">'+*/
/*       '<div id="siteNotice">'+*/
/*       '</div>'+*/
/*       '<h1 id="firstHeading" class="firstHeading"><center>TFT</center></h1>'+*/
/*       '<div id="bodyContent">'+'<img src="{{asset('backEnd/assets/img/others/aatft.jpg')}}"/>'+*/
/*       '</div>'+*/
/*       '</div>';*/
/* */
/*   var infowindow = new google.maps.InfoWindow({*/
/*   map: map,*/
/*   position: myLatLng,*/
/*   content:contentString*/
/*   });*/
/* */
/*   var marker = new google.maps.Marker({*/
/*     position: myLatLng,*/
/*     map: map,*/
/*     animation:google.maps.Animation.BOUNCE,*/
/*     title: 'je suis un marqueur'*/
/*   });*/
/*   */
/* */
/*     marker.addListener('click', function() {*/
/*     infowindow.open(map, marker);*/
/*   });*/
/*   */
/* }*/
/* */
/*     </script>*/
/*     <script async defer*/
/*         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjYNOQrDsSKLNFSyAtfg1w-4Wiwg4Uvrg&signed_in=true&callback=initMap"></script>*/
/*   </body>*/
/* </html>*/
