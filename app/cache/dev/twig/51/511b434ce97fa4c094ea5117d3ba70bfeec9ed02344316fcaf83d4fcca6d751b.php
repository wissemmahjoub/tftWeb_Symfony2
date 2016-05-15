<?php

/* wyshybackNavBundle:Nav:DetailsDossier.html.twig */
class __TwigTemplate_edac9cf17117dbdbb3865a0d01b82981312f1a0ed522cee647652e842e13c8fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:DetailsDossier.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
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

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo " <li class=\"\"> <a href=\"javascript:;\"> <i class=\"fa fa-file-text\"></i> <span class=\"title\">Dossier Medical</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("tft_addDossier");
        echo "\"> Ajouter </a> </li>
            <li > <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tft_ListerDossier");
        echo "\"> Afficher </a> </li>
          </ul>
        </li>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
    
<div class=\"content\">
\t <div class=\"row\">
             
      <div class=\"col-md-11\">
        <div class=\"grid simple\">
          <div class=\"grid-body no-border invoice-body\"> <br>
            <div class=\"pull-left\"> <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/invoicelogo.png"), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/invoicelogo.png"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/invoicelogo2x.png"), "html", null, true);
        echo "\" width=\"222\" height=\"31\" class=\"invoice-logo\" alt=\"\">
              <address>
              
           ";
        // line 23
        if ($this->getAttribute((isset($context["P"]) ? $context["P"] : $this->getContext($context, "P")), "avatar", array())) {
            // line 24
            echo "           <div class=\"user-profile\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("backEnd/assets/img/others/" . $this->getAttribute((isset($context["P"]) ? $context["P"] : $this->getContext($context, "P")), "avatar", array()))), "html", null, true);
            echo "\"   width=\"100\" height=\"100\"> </div>
           ";
        } elseif (($this->getAttribute(        // line 25
(isset($context["P"]) ? $context["P"] : $this->getContext($context, "P")), "sexe", array()) == "Homme")) {
            // line 26
            echo "           <div class=\"user-profile\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/others/men.jpg"), "html", null, true);
            echo "\"   width=\"100\" height=\"100\"> </div>
          ";
        } elseif (($this->getAttribute(        // line 27
(isset($context["P"]) ? $context["P"] : $this->getContext($context, "P")), "sexe", array()) == "Femme")) {
            // line 28
            echo "          <div class=\"user-profile\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/others/women.jpg"), "html", null, true);
            echo "\"   width=\"100\" height=\"100\"> </div>
          ";
        } else {
            // line 30
            echo "           ";
        }
        // line 31
        echo "
              </address>
            </div>
            <div class=\"pull-right\">
                
            
              <a href class=\"fa fa-print\" onclick=\"window.print();\">     Imprimer</a>
              
              <div class=\"tiles white text-center\">
                    <h2 class=\"semi-bold text-primary weather-widget-big-text no-margin p-t-35 p-b-10\">RF";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "iddossier", array()), "html", null, true);
        echo "</h2>
                    <div class=\"tiles-title blend p-b-25\">Reference</div>
                    <div class=\"clearfix\"></div>
                  </div>
            </div>
            <div class=\"clearfix\"></div>
            <br>
            <br>
            <br>
            <div class=\"row\">
              <div class=\"col-md-9\">
                  <h4>Nom du Joueur :  <span class=\"semi-bold\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["P"]) ? $context["P"] : $this->getContext($context, "P")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["P"]) ? $context["P"] : $this->getContext($context, "P")), "prenom", array()), "html", null, true);
        echo "</span></h4>
                <address>
                <strong>Informations </strong><br>
               
                </address>
                <div class=\"notification-messages success\">
                  <div class=\"message-wrapper\">
                    <div class=\"heading\"> E-mail :</div>
                    <div class=\"description\"> ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["P"]) ? $context["P"] : $this->getContext($context, "P")), "email", array()), "html", null, true);
        echo " </div>
                  </div>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"notification-messages success\">
                  <div class=\"message-wrapper\">
                    <div class=\"heading\"> Sexe :</div>
                    <div class=\"description\"> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["P"]) ? $context["P"] : $this->getContext($context, "P")), "sexe", array()), "html", null, true);
        echo "  </div>
                  </div>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"notification-messages info\">
                  <div class=\"message-wrapper\">
                    <div class=\"heading\"> Cin :</div>
                    <div class=\"description\"> ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["P"]) ? $context["P"] : $this->getContext($context, "P")), "cin", array()), "html", null, true);
        echo " </div>
                  </div>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"notification-messages info\">
                  <div class=\"message-wrapper\">
                    <div class=\"heading\"> Adresse :</div>
                    <div class=\"description\"> ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["P"]) ? $context["P"] : $this->getContext($context, "P")), "adresse", array()), "html", null, true);
        echo " </div>
                  </div>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"notification-messages info\">
                  <div class=\"message-wrapper\">
                    <div class=\"heading\"> Date de Naissance :</div>
                    <div class=\"description\"> ";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["P"]) ? $context["P"] : $this->getContext($context, "P")), "datenaissance", array()), "d-m-y"), "html", null, true);
        echo " </div>
                  </div>
                  <div class=\"clearfix\"></div>
                </div>
              </div>
              <div class=\"col-md-3\"> <br>
               
                <div>
                  <div class=\"pull-left\"> VU LE  :  </div>
                  <div class=\"pull-right\">  ";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d - m -Y"), "html", null, true);
        echo "</div>
                </div>
                <br>
                <div class=\"well well-small green\">
                  <div class=\"pull-left\"> Taille Joueur : </div>
                  <div class=\"pull-right\"> ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "taille", array()), "html", null, true);
        echo " cm </div>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"well well-small \">
                  <div class=\"pull-left\"> Poid Joueur : </div>
                  <div class=\"pull-right\"> ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "poid", array()), "html", null, true);
        echo " Kg </div>
                  <div class=\"clearfix\"></div>
                </div>
                  <div class=\"well well-small green\">
                  <div class=\"pull-left\"> Type de Sang : </div>
                  <div class=\"pull-right\"> ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "sang", array()), "html", null, true);
        echo "  </div>
                  <div class=\"clearfix\"></div>
                </div>
                  <div class=\"well well-small \">
                  <div class=\"pull-left\"> Fumeur : </div>
                  <div class=\"pull-right\"> ";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "fumeur", array()), "html", null, true);
        echo "  </div>
                  <div class=\"clearfix\"></div>
                </div>
              </div>
            </div>
            <table class=\"table\">
              <thead>
                <tr>
                  <th style=\"width:60px\" class=\"unseen text-center\">Situation familiale</th>
                  <th class=\"text-center\">Nombre d'enfant</th>
                  <th class=\"text-center\">Nom&Prenom pere</th>
                  <th class=\"text-right\">Nom&Prenom mere</th>

            
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class=\"unseen text-center\">";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "situation", array()), "html", null, true);
        echo "</td>
                  <td class=\"unseen text-center\">";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "nbenfant", array()), "html", null, true);
        echo "</td>
                  <td class=\"text-center\">";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "nomprenompere", array()), "html", null, true);
        echo "</td>
                  <td class=\"text-right\">";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "nomprenommere", array()), "html", null, true);
        echo "</td>
                </tr>
              
                <tr>
                    <td colspan=\"2\" rowspan=\"4\"><h4 class=\"semi-bold\">Date derniere visite</h4>";
        // line 141
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "datederniervisite", array()), "y-m-d"), "html", null, true);
        echo "
                        <h4>Raison de derniere visite</h4>
                    <h5 class=\"text-left text-black\">";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "raisonvisite", array()), "html", null, true);
        echo "</h5></td>
                </tr>
                <tr>
                    <td colspan=\"2\" rowspan=\"4\"><h4 class=\"semi-bold\">Libelle Test</h4>";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "Test", array()), "html", null, true);
        echo "
                        <h4>Maladie</h4>
                    <h5 class=\"text-left text-black\">";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "maladie", array()), "html", null, true);
        echo "</h5></td>
                </tr>
                 
              </tbody>
            </table>
<h4 class=\"semi-bold\">Commentaire</h4>
 <div class=\"notification-messages info\">
                  <div class=\"message-wrapper\">
                    <div class=\"heading\"><h4>";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "commentaire", array()), "html", null, true);
        echo "</h4></div>
                    
                  </div>
                  <div class=\"clearfix\"></div>
                </div>


                    <br>
            <br>
            <h5 class=\"text-right text-black\">Signature</h5>
            <h5 class=\"text-right semi-bold text-black\">Medecin</h5>
            <br>
            <br>
          </div>
        </div>
      </div>
      
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:DetailsDossier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 156,  274 => 148,  269 => 146,  263 => 143,  258 => 141,  251 => 137,  247 => 136,  243 => 135,  239 => 134,  218 => 116,  210 => 111,  202 => 106,  194 => 101,  186 => 96,  174 => 87,  164 => 80,  154 => 73,  144 => 66,  134 => 59,  121 => 51,  107 => 40,  96 => 31,  93 => 30,  87 => 28,  85 => 27,  80 => 26,  78 => 25,  73 => 24,  71 => 23,  61 => 20,  51 => 12,  48 => 11,  40 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* {% block menu %}*/
/*  <li class=""> <a href="javascript:;"> <i class="fa fa-file-text"></i> <span class="title">Dossier Medical</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li > <a href="{{path('tft_addDossier')}}"> Ajouter </a> </li>*/
/*             <li > <a href="{{path('tft_ListerDossier')}}"> Afficher </a> </li>*/
/*           </ul>*/
/*         </li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     */
/* <div class="content">*/
/* 	 <div class="row">*/
/*              */
/*       <div class="col-md-11">*/
/*         <div class="grid simple">*/
/*           <div class="grid-body no-border invoice-body"> <br>*/
/*             <div class="pull-left"> <img src="{{ asset('backEnd/assets/img/invoicelogo.png') }}" data-src="{{ asset('backEnd/assets/img/invoicelogo.png') }}" data-src-retina="{{ asset('assets/img/invoicelogo2x.png') }}" width="222" height="31" class="invoice-logo" alt="">*/
/*               <address>*/
/*               */
/*            {% if  P.avatar  %}*/
/*            <div class="user-profile"> <img src="{{asset('backEnd/assets/img/others/'~P.avatar)}}"   width="100" height="100"> </div>*/
/*            {% elseif P.sexe == "Homme" %}*/
/*            <div class="user-profile"> <img src="{{asset('backEnd/assets/img/others/men.jpg')}}"   width="100" height="100"> </div>*/
/*           {% elseif P.sexe == "Femme" %}*/
/*           <div class="user-profile"> <img src="{{asset('backEnd/assets/img/others/women.jpg')}}"   width="100" height="100"> </div>*/
/*           {% else%}*/
/*            {% endif %}*/
/* */
/*               </address>*/
/*             </div>*/
/*             <div class="pull-right">*/
/*                 */
/*             */
/*               <a href class="fa fa-print" onclick="window.print();">     Imprimer</a>*/
/*               */
/*               <div class="tiles white text-center">*/
/*                     <h2 class="semi-bold text-primary weather-widget-big-text no-margin p-t-35 p-b-10">RF{{D.iddossier}}</h2>*/
/*                     <div class="tiles-title blend p-b-25">Reference</div>*/
/*                     <div class="clearfix"></div>*/
/*                   </div>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/*             <br>*/
/*             <br>*/
/*             <br>*/
/*             <div class="row">*/
/*               <div class="col-md-9">*/
/*                   <h4>Nom du Joueur :  <span class="semi-bold">{{P.nom}} {{P.prenom}}</span></h4>*/
/*                 <address>*/
/*                 <strong>Informations </strong><br>*/
/*                */
/*                 </address>*/
/*                 <div class="notification-messages success">*/
/*                   <div class="message-wrapper">*/
/*                     <div class="heading"> E-mail :</div>*/
/*                     <div class="description"> {{P.email}} </div>*/
/*                   </div>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="notification-messages success">*/
/*                   <div class="message-wrapper">*/
/*                     <div class="heading"> Sexe :</div>*/
/*                     <div class="description"> {{P.sexe}}  </div>*/
/*                   </div>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="notification-messages info">*/
/*                   <div class="message-wrapper">*/
/*                     <div class="heading"> Cin :</div>*/
/*                     <div class="description"> {{P.cin}} </div>*/
/*                   </div>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="notification-messages info">*/
/*                   <div class="message-wrapper">*/
/*                     <div class="heading"> Adresse :</div>*/
/*                     <div class="description"> {{P. adresse}} </div>*/
/*                   </div>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="notification-messages info">*/
/*                   <div class="message-wrapper">*/
/*                     <div class="heading"> Date de Naissance :</div>*/
/*                     <div class="description"> {{P.datenaissance|date('d-m-y')}} </div>*/
/*                   </div>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="col-md-3"> <br>*/
/*                */
/*                 <div>*/
/*                   <div class="pull-left"> VU LE  :  </div>*/
/*                   <div class="pull-right">  {{ 'now'|date('d - m -Y') }}</div>*/
/*                 </div>*/
/*                 <br>*/
/*                 <div class="well well-small green">*/
/*                   <div class="pull-left"> Taille Joueur : </div>*/
/*                   <div class="pull-right"> {{D.taille}} cm </div>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="well well-small ">*/
/*                   <div class="pull-left"> Poid Joueur : </div>*/
/*                   <div class="pull-right"> {{D.poid}} Kg </div>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                   <div class="well well-small green">*/
/*                   <div class="pull-left"> Type de Sang : </div>*/
/*                   <div class="pull-right"> {{D.sang}}  </div>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                   <div class="well well-small ">*/
/*                   <div class="pull-left"> Fumeur : </div>*/
/*                   <div class="pull-right"> {{D.fumeur}}  </div>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <table class="table">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th style="width:60px" class="unseen text-center">Situation familiale</th>*/
/*                   <th class="text-center">Nombre d'enfant</th>*/
/*                   <th class="text-center">Nom&Prenom pere</th>*/
/*                   <th class="text-right">Nom&Prenom mere</th>*/
/* */
/*             */
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 <tr>*/
/*                   <td class="unseen text-center">{{D.situation}}</td>*/
/*                   <td class="unseen text-center">{{D.nbenfant}}</td>*/
/*                   <td class="text-center">{{D.nomprenompere}}</td>*/
/*                   <td class="text-right">{{D.nomprenommere}}</td>*/
/*                 </tr>*/
/*               */
/*                 <tr>*/
/*                     <td colspan="2" rowspan="4"><h4 class="semi-bold">Date derniere visite</h4>{{D.datederniervisite|date('y-m-d')}}*/
/*                         <h4>Raison de derniere visite</h4>*/
/*                     <h5 class="text-left text-black">{{D.raisonvisite}}</h5></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="2" rowspan="4"><h4 class="semi-bold">Libelle Test</h4>{{D.Test}}*/
/*                         <h4>Maladie</h4>*/
/*                     <h5 class="text-left text-black">{{D.maladie}}</h5></td>*/
/*                 </tr>*/
/*                  */
/*               </tbody>*/
/*             </table>*/
/* <h4 class="semi-bold">Commentaire</h4>*/
/*  <div class="notification-messages info">*/
/*                   <div class="message-wrapper">*/
/*                     <div class="heading"><h4>{{D.commentaire}}</h4></div>*/
/*                     */
/*                   </div>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/* */
/* */
/*                     <br>*/
/*             <br>*/
/*             <h5 class="text-right text-black">Signature</h5>*/
/*             <h5 class="text-right semi-bold text-black">Medecin</h5>*/
/*             <br>*/
/*             <br>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       */
/*       </div>*/
/*     </div>*/
/* {% endblock%}*/
