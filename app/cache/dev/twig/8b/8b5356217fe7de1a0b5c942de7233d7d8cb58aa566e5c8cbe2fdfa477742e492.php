<?php

/* wyshybackNavBundle:Nav:page1.html.twig */
class __TwigTemplate_54835e139b33e73fbdceacc0dce0c478f3f2c11e30ba15f7e0dc82569dbcddb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:page1.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'userInfo' => array($this, 'block_userInfo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "wyshybackNavBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "            <li class=\"\"> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_joueur");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Joueurs</span> </a> </li>
   
    
    
    
        <li class=\"\"> <a href=\"javascript:;\"> <i class=\"icon-custom-extra\"></i> <span class=\"title\">Stade</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li> <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("tft_addStade");
        echo "\">  Ajouter   </a> </li>
            <li> <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tft_findStade");
        echo "\"> Afficher </a> </li>
          </ul>
        </li>
     
         <li class=\"\"> <a href=\"javascript:;\"> <i class=\"fa fa-user\"></i> <span class=\"title\">Membres</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li> <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("tft_ListerMembres");
        echo "\"> Liste  </a> </li>
            
          </ul>
        </li>
        
         <li class=\"\"> <a href=\"javascript:;\"> <i class=\"fa fa-medkit\"></i> <span class=\"title\">Test de Dopage</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li> <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("tft_AddTestDopage");
        echo "\"> Nouveau Test de dopage  </a> </li>
             <li> <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("tft_ListeTestDopages");
        echo "\"> Liste des Tests de dopages  </a> </li>
          </ul>
        </li>
       
       
 <li class=\"\"> <a href=\"javascript:;\"> <i class=\"fa fa-file-text\"></i> <span class=\"title\">Dossier Medical</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("tft_addDossier");
        echo "\"> Ajouter </a> </li>
            <li > <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("tft_ListerDossier");
        echo "\"> Afficher </a> </li>
          </ul>
        </li>

        
        <li class=\"\"> <a href=\"javascript:;\"> <i class=\"fa fa-bar-chart-o\"></i> <span class=\"title\">Statistique</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
        ";
        // line 44
        echo "            <li> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_graphePie");
        echo "\">  Joueurs   </a> </li> 
           </ul>
        </li>
";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "    
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
        // line 68
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
 
    <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
              <h4>Condensed <span class=\"semi-bold\">Layout</span></h4>
              <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body no-border\">
\t\t\t<form novalidate=\"novalidate\" class=\"form-no-horizontal-spacing\" id=\"form-condensed\">\t
              <div class=\"row column-seperation\">
                <div class=\"col-md-6\">
                  <h4>Basic Information</h4>            
                    <div class=\"row form-row\">
                      <div class=\"col-md-5\">
                        <input name=\"form3FirstName\" id=\"form3FirstName\" class=\"form-control\" placeholder=\"First Name\" type=\"text\">
                      </div>
                      <div class=\"col-md-7\">
                        <input name=\"form3LastName\" id=\"form3LastName\" class=\"form-control\" placeholder=\"Last Name\" type=\"text\">
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-5\">
                        <select tabindex=\"-1\" name=\"form3Gender\" id=\"form3Gender\" class=\"select2 form-control select2-offscreen\">
                          <option value=\"1\">Male</option>
                          <option value=\"2\">Female</option>
                        </select>
                      </div>
                      <div class=\"col-md-7\">
                        <input placeholder=\"Date of Birth\" class=\"form-control\" id=\"form3DateOfBirth\" name=\"form3DateOfBirth\" type=\"text\">
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-12\">
                        <input name=\"form3Occupation\" id=\"form3Occupation\" class=\"form-control\" placeholder=\"Occupation\" type=\"text\">
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-8\">
                        <div class=\"radio\">
                          <input id=\"male\" name=\"gender\" value=\"male\" checked=\"checked\" type=\"radio\">
                          <label for=\"male\">Male</label>
                          <input id=\"female\" name=\"gender\" value=\"female\" type=\"radio\">
                          <label for=\"female\">Female</label>
                        </div>
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-12\">
                        <input name=\"form3Email\" id=\"form3Email\" class=\"form-control\" placeholder=\"email@address.com\" type=\"text\">
                      </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
\t\t\t\t
                  <h4>Postal Information</h4>
                  
                    <div class=\"row form-row\">
                      <div class=\"col-md-12\">
                        <input name=\"form3Address\" id=\"form3Address\" class=\"form-control\" placeholder=\"Address\" type=\"text\">
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-6\">
                        <input name=\"form3City\" id=\"form3City\" class=\"form-control\" placeholder=\"City\" type=\"text\">
                      </div>
                      <div class=\"col-md-6\">
                        <input name=\"form3State\" id=\"form3State\" class=\"form-control\" placeholder=\"State\" type=\"text\">
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-8\">
                        <input name=\"form3Country\" id=\"form3Country\" class=\"form-control\" placeholder=\"Country\" type=\"text\">
                      </div>
                      <div class=\"col-md-4\">
                        <input name=\"form3PostalCode\" id=\"form3PostalCode\" class=\"form-control\" placeholder=\"Postal Code\" type=\"text\">
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-4\">
                        <input name=\"form3TeleCode\" id=\"form3TeleCode\" class=\"form-control\" placeholder=\"+94\" type=\"text\">
                      </div>
                      <div class=\"col-md-8\">
                        <input name=\"form3TeleNo\" id=\"form3TeleNo\" class=\"form-control\" placeholder=\"Phone Number\" type=\"text\">
                      </div>
                    </div>
                    <div class=\"row small-text\">
\t\t\t\t\t<p class=\"col-md-12\">
\t\t\t\t\tNOTE - Facts to be considered, Simply remove or edit this as for what you desire. Disabled font Color and size
\t\t\t\t\t</p>
\t\t\t\t\t</div>
             
                </div>
              </div>
\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t  <div class=\"checkbox checkbox check-success \t\">
\t\t\t\t\t\t<input value=\"1\" id=\"chkTerms\" type=\"checkbox\">
\t\t\t\t\t\t<label for=\"chkTerms\">I Here by agree on the Term and condition. </label>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t  <button class=\"btn btn-danger btn-cons\" type=\"submit\"><i class=\"icon-ok\"></i> Save</button>
\t\t\t\t\t  <button class=\"btn btn-white btn-cons\" type=\"button\">Cancel</button>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t</form>
                
            </div> </div>
   


    <div class=\"col-md-12 m-b-10\">
        
\t\t\t\t  <div class=\"widget-item \">
\t\t\t\t  <div class=\"controller overlay right\"> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
                  <div class=\"tiles purple \" style=\"max-height:345px\">
                    <div class=\"tiles-body\">

                         <h1>CONTACT</h1>TFT 
                            <span class=\"semi-bold\">Federation Tunisienne de Tennis </span> 
                       
                      <div class=\"overlayer bottom-right fullwidth\">
                        <div class=\"overlayer-wrapper\">
                          <div class=\" p-l-20 p-r-20 p-b-20 p-t-20\">
                            <div class=\"pull-right\"> <a href=\"#\" class=\"hashtags transparent\"> #Tennis  </a><a href=\"#\" class=\"hashtags transparent\"> #MyWishy  </a><a href=\"#\" class=\"hashtags transparent\"> #TFT  </a> </div>
                            <div class=\"clearfix\"></div>
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>
                  <div class=\"tiles white \">
                    <div class=\"tiles-body\">
                      <div class=\"row\">
                        <div class=\"user-comment-wrapper pull-left\">
                          <div class=\"profile-wrapper\"> 
\t\t\t\t\t\t  <img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/others/LOGO2.jpg"), "html", null, true);
        echo "\" alt=\"\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/others/LOGO2.jpg"), "html", null, true);
        echo "\" data-src-retina=\"assets/img/profiles/d2x.jpg\" width=\"35\" height=\"35\">
\t\t\t\t\t\t  </div>
                          <div class=\"comment\">
                            <div class=\"user-name text-black bold\"> Federation <span class=\"semi-bold\">Tunisienne de Tennis</span> </div>
                            <div class=\"preview-wrapper\">tftmywishy@gmail.com</div>
                          </div>
                          <div class=\"clearfix\"></div>
                        </div>
                     
                        <div class=\"clearfix\"></div>
                        <div class=\"p-l-15 p-t-10 p-r-20\">
                            <p>Pour nous Contacter : </p>
                            <p> FAX :77568452 , 71362856 </p>
                            <p> Email :tftmywishy@gmail.com </p>
                           
                          <div class=\"post p-t-10 p-b-10\">
                           
<!-- modal popup mail*************************************** ---> 
 <div class=\"col-md-4\">
                  
            <ul class=\"action-bar no-margin p-b-20 \">
           
             <li><a href=\"https://www.facebook.com/TFTesprit/\" class=\"text-justify bold\"><i class=\"fa fa-facebook-square\"></i>  Facebook</a> </li>
             <li><a href=\"";
        // line 254
        echo $this->env->getExtension('routing')->getPath("wyshyback_maptft");
        echo " \" class=\"text-error bold\"><i class=\"fa fa-map-marker\"></i>  Map</a> </li>
             <li><a href class=\"text-purple bold\"  data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-google-plus\"></i> Nous Contacter </a> </li>
           </ul>
                  <!-- Modal -->
                  <div class=\"modal fade\" id=\"myModal\" tabindex=\"200\" role=\"dialog\" aria-labelledby=\"myModalLabel\" >
                    <div class=\"modal-dialog\">
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
                          <br>
                          <i class=\"fa fa-group fa-7x\"></i>
                          <h4 id=\"myModalLabel\" class=\"semi-bold\">Contactez nous.</h4>
                        
                          <br>
                        </div>
                        <div class=\"modal-body\">
                     <form action=\"";
        // line 270
        echo $this->env->getExtension('routing')->getPath("tft_Mail");
        echo "\" method=\"POST\">
                           <div class=\"form-group\">
                            <input  type='text' name=\"nom\" class=\"form-control \" placeholder=\"Nom\">
                           </div>
                           <div class=\"form-group\">
                            <input  type='text' name=\"prenom\" class=\"form-control \" placeholder=\"Prenom\">
                           </div>
                           <div class=\"form-group\">
                            <input  type='text' name=\"email\" class=\"form-control \" placeholder=\"Votre e-mail\">
                           </div>
                                            
                           <div class=\"form-group\">
                                <input type=\"text\" name=\"Sujet\" class=\"form-control\" placeholder=\"Subject\">
                           </div>
                           <div class=\"form-group\">
                                  <textarea class=\"wysihtml5 form-control\" name =\"message\" placeholder=\"Message body\" style=\"height: 200px\"></textarea>
                           </div>
                           <div> 
                                <center>
                                <button class=\"btn btn-purple waves-effect waves-light\" type=\"submit\" value=\"Envoyer\"> <span>Envoyer</span> <i class=\"fa fa-send m-l-10\"></i> </button>
                                </center>                   
                           </div>
                    </form>
                    
                        </div>
                        <div class=\"modal-footer\">
                       
                          
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                </div>
    
    <!DOCTYPE html>
  

  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
  
<!----------- fin popup ------------------------------------------------------>
                              
                             
                            <div class=\"clearfix\"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
    ";
    }

    // line 326
    public function block_userInfo($context, array $blocks = array())
    {
        // line 327
        echo "                Personne 1 
     ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:page1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 327,  399 => 326,  340 => 270,  321 => 254,  293 => 231,  127 => 68,  107 => 50,  104 => 49,  95 => 44,  85 => 35,  81 => 34,  71 => 27,  67 => 26,  57 => 19,  48 => 13,  44 => 12,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/*     */
/* {% block menu %}*/
/*             <li class=""> <a href="{{ path('wyshyback_nav_joueur') }}"> <i class="fa fa-th"></i> <span class="title">Joueurs</span> </a> </li>*/
/*    */
/*     */
/*     */
/*     */
/*         <li class=""> <a href="javascript:;"> <i class="icon-custom-extra"></i> <span class="title">Stade</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li> <a href="{{path('tft_addStade')}}">  Ajouter   </a> </li>*/
/*             <li> <a href="{{path('tft_findStade')}}"> Afficher </a> </li>*/
/*           </ul>*/
/*         </li>*/
/*      */
/*          <li class=""> <a href="javascript:;"> <i class="fa fa-user"></i> <span class="title">Membres</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li> <a href="{{path('tft_ListerMembres')}}"> Liste  </a> </li>*/
/*             */
/*           </ul>*/
/*         </li>*/
/*         */
/*          <li class=""> <a href="javascript:;"> <i class="fa fa-medkit"></i> <span class="title">Test de Dopage</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li> <a href="{{path('tft_AddTestDopage')}}"> Nouveau Test de dopage  </a> </li>*/
/*              <li> <a href="{{path('tft_ListeTestDopages')}}"> Liste des Tests de dopages  </a> </li>*/
/*           </ul>*/
/*         </li>*/
/*        */
/*        */
/*  <li class=""> <a href="javascript:;"> <i class="fa fa-file-text"></i> <span class="title">Dossier Medical</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li > <a href="{{path('tft_addDossier')}}"> Ajouter </a> </li>*/
/*             <li > <a href="{{path('tft_ListerDossier')}}"> Afficher </a> </li>*/
/*           </ul>*/
/*         </li>*/
/* */
/*         */
/*         <li class=""> <a href="javascript:;"> <i class="fa fa-bar-chart-o"></i> <span class="title">Statistique</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*         {#    <li> <a href="{{path('_grapheChartLine')}}">  LineChart   </a> </li>*/
/*             <li> <a href="{{path('_grapheHistogramme')}}">  Histograme   </a> </li>#}*/
/*             <li> <a href="{{path('_graphePie')}}">  Joueurs   </a> </li> */
/*            </ul>*/
/*         </li>*/
/* {% endblock %}*/
/*                     */
/* {% block content %}*/
/*     */
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
/*  */
/*     <div class="grid simple">*/
/*             <div class="grid-title no-border">*/
/*               <h4>Condensed <span class="semi-bold">Layout</span></h4>*/
/*               <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*             </div>*/
/*             <div class="grid-body no-border">*/
/* 			<form novalidate="novalidate" class="form-no-horizontal-spacing" id="form-condensed">	*/
/*               <div class="row column-seperation">*/
/*                 <div class="col-md-6">*/
/*                   <h4>Basic Information</h4>            */
/*                     <div class="row form-row">*/
/*                       <div class="col-md-5">*/
/*                         <input name="form3FirstName" id="form3FirstName" class="form-control" placeholder="First Name" type="text">*/
/*                       </div>*/
/*                       <div class="col-md-7">*/
/*                         <input name="form3LastName" id="form3LastName" class="form-control" placeholder="Last Name" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-5">*/
/*                         <select tabindex="-1" name="form3Gender" id="form3Gender" class="select2 form-control select2-offscreen">*/
/*                           <option value="1">Male</option>*/
/*                           <option value="2">Female</option>*/
/*                         </select>*/
/*                       </div>*/
/*                       <div class="col-md-7">*/
/*                         <input placeholder="Date of Birth" class="form-control" id="form3DateOfBirth" name="form3DateOfBirth" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-12">*/
/*                         <input name="form3Occupation" id="form3Occupation" class="form-control" placeholder="Occupation" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-8">*/
/*                         <div class="radio">*/
/*                           <input id="male" name="gender" value="male" checked="checked" type="radio">*/
/*                           <label for="male">Male</label>*/
/*                           <input id="female" name="gender" value="female" type="radio">*/
/*                           <label for="female">Female</label>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-12">*/
/*                         <input name="form3Email" id="form3Email" class="form-control" placeholder="email@address.com" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/* 				*/
/*                   <h4>Postal Information</h4>*/
/*                   */
/*                     <div class="row form-row">*/
/*                       <div class="col-md-12">*/
/*                         <input name="form3Address" id="form3Address" class="form-control" placeholder="Address" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-6">*/
/*                         <input name="form3City" id="form3City" class="form-control" placeholder="City" type="text">*/
/*                       </div>*/
/*                       <div class="col-md-6">*/
/*                         <input name="form3State" id="form3State" class="form-control" placeholder="State" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-8">*/
/*                         <input name="form3Country" id="form3Country" class="form-control" placeholder="Country" type="text">*/
/*                       </div>*/
/*                       <div class="col-md-4">*/
/*                         <input name="form3PostalCode" id="form3PostalCode" class="form-control" placeholder="Postal Code" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-4">*/
/*                         <input name="form3TeleCode" id="form3TeleCode" class="form-control" placeholder="+94" type="text">*/
/*                       </div>*/
/*                       <div class="col-md-8">*/
/*                         <input name="form3TeleNo" id="form3TeleNo" class="form-control" placeholder="Phone Number" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row small-text">*/
/* 					<p class="col-md-12">*/
/* 					NOTE - Facts to be considered, Simply remove or edit this as for what you desire. Disabled font Color and size*/
/* 					</p>*/
/* 					</div>*/
/*              */
/*                 </div>*/
/*               </div>*/
/* 				<div class="form-actions">*/
/* 					<div class="pull-left">*/
/* 					  <div class="checkbox checkbox check-success 	">*/
/* 						<input value="1" id="chkTerms" type="checkbox">*/
/* 						<label for="chkTerms">I Here by agree on the Term and condition. </label>*/
/* 					  </div>*/
/* 					</div>*/
/* 					<div class="pull-right">*/
/* 					  <button class="btn btn-danger btn-cons" type="submit"><i class="icon-ok"></i> Save</button>*/
/* 					  <button class="btn btn-white btn-cons" type="button">Cancel</button>*/
/* 					</div>*/
/* 				  </div>*/
/* 			</form>*/
/*                 */
/*             </div> </div>*/
/*    */
/* */
/* */
/*     <div class="col-md-12 m-b-10">*/
/*         */
/* 				  <div class="widget-item ">*/
/* 				  <div class="controller overlay right"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*                   <div class="tiles purple " style="max-height:345px">*/
/*                     <div class="tiles-body">*/
/* */
/*                          <h1>CONTACT</h1>TFT */
/*                             <span class="semi-bold">Federation Tunisienne de Tennis </span> */
/*                        */
/*                       <div class="overlayer bottom-right fullwidth">*/
/*                         <div class="overlayer-wrapper">*/
/*                           <div class=" p-l-20 p-r-20 p-b-20 p-t-20">*/
/*                             <div class="pull-right"> <a href="#" class="hashtags transparent"> #Tennis  </a><a href="#" class="hashtags transparent"> #MyWishy  </a><a href="#" class="hashtags transparent"> #TFT  </a> </div>*/
/*                             <div class="clearfix"></div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                       <br>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="tiles white ">*/
/*                     <div class="tiles-body">*/
/*                       <div class="row">*/
/*                         <div class="user-comment-wrapper pull-left">*/
/*                           <div class="profile-wrapper"> */
/* 						  <img src="{{ asset('backEnd/assets/img/others/LOGO2.jpg') }}" alt="" data-src="{{ asset('backEnd/assets/img/others/LOGO2.jpg') }}" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">*/
/* 						  </div>*/
/*                           <div class="comment">*/
/*                             <div class="user-name text-black bold"> Federation <span class="semi-bold">Tunisienne de Tennis</span> </div>*/
/*                             <div class="preview-wrapper">tftmywishy@gmail.com</div>*/
/*                           </div>*/
/*                           <div class="clearfix"></div>*/
/*                         </div>*/
/*                      */
/*                         <div class="clearfix"></div>*/
/*                         <div class="p-l-15 p-t-10 p-r-20">*/
/*                             <p>Pour nous Contacter : </p>*/
/*                             <p> FAX :77568452 , 71362856 </p>*/
/*                             <p> Email :tftmywishy@gmail.com </p>*/
/*                            */
/*                           <div class="post p-t-10 p-b-10">*/
/*                            */
/* <!-- modal popup mail*************************************** ---> */
/*  <div class="col-md-4">*/
/*                   */
/*             <ul class="action-bar no-margin p-b-20 ">*/
/*            */
/*              <li><a href="https://www.facebook.com/TFTesprit/" class="text-justify bold"><i class="fa fa-facebook-square"></i>  Facebook</a> </li>*/
/*              <li><a href="{{path('wyshyback_maptft')}} " class="text-error bold"><i class="fa fa-map-marker"></i>  Map</a> </li>*/
/*              <li><a href class="text-purple bold"  data-toggle="modal" data-target="#myModal"><i class="fa fa-google-plus"></i> Nous Contacter </a> </li>*/
/*            </ul>*/
/*                   <!-- Modal -->*/
/*                   <div class="modal fade" id="myModal" tabindex="200" role="dialog" aria-labelledby="myModalLabel" >*/
/*                     <div class="modal-dialog">*/
/*                       <div class="modal-content">*/
/*                         <div class="modal-header">*/
/*                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>*/
/*                           <br>*/
/*                           <i class="fa fa-group fa-7x"></i>*/
/*                           <h4 id="myModalLabel" class="semi-bold">Contactez nous.</h4>*/
/*                         */
/*                           <br>*/
/*                         </div>*/
/*                         <div class="modal-body">*/
/*                      <form action="{{path('tft_Mail')}}" method="POST">*/
/*                            <div class="form-group">*/
/*                             <input  type='text' name="nom" class="form-control " placeholder="Nom">*/
/*                            </div>*/
/*                            <div class="form-group">*/
/*                             <input  type='text' name="prenom" class="form-control " placeholder="Prenom">*/
/*                            </div>*/
/*                            <div class="form-group">*/
/*                             <input  type='text' name="email" class="form-control " placeholder="Votre e-mail">*/
/*                            </div>*/
/*                                             */
/*                            <div class="form-group">*/
/*                                 <input type="text" name="Sujet" class="form-control" placeholder="Subject">*/
/*                            </div>*/
/*                            <div class="form-group">*/
/*                                   <textarea class="wysihtml5 form-control" name ="message" placeholder="Message body" style="height: 200px"></textarea>*/
/*                            </div>*/
/*                            <div> */
/*                                 <center>*/
/*                                 <button class="btn btn-purple waves-effect waves-light" type="submit" value="Envoyer"> <span>Envoyer</span> <i class="fa fa-send m-l-10"></i> </button>*/
/*                                 </center>                   */
/*                            </div>*/
/*                     </form>*/
/*                     */
/*                         </div>*/
/*                         <div class="modal-footer">*/
/*                        */
/*                           */
/*                         </div>*/
/*                       </div>*/
/*                       <!-- /.modal-content -->*/
/*                     </div>*/
/*                     <!-- /.modal-dialog -->*/
/*                   </div>*/
/*                   <!-- /.modal -->*/
/*                 </div>*/
/*     */
/*     <!DOCTYPE html>*/
/*   */
/* */
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*   */
/* <!----------- fin popup ------------------------------------------------------>*/
/*                               */
/*                              */
/*                             <div class="clearfix"></div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 </div>*/
/*     {% endblock %}*/
/*     */
/*      {% block userInfo %}*/
/*                 Personne 1 */
/*      {% endblock %}*/
/*        */
