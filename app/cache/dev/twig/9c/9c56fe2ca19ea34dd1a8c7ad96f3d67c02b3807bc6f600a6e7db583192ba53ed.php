<?php

/* wyshybackNavBundle:Nav:competitionAffichage.html.twig */
class __TwigTemplate_c50f8c9923063dc262afe73275cd9b2111904d37b15b1950f92868e0235d2ff2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:competitionAffichage.html.twig", 2);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
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
        echo "    <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Competitions</span> <span class=\"arrow \"></span></a> 
        <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AfficherComp");
        echo "\"> Lise des competitions </a> </li>
            <li > <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AjouterComp");
        echo "\">Ajouter une nouvelle</a> </li>
        </ul>

    </li>
    <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Competitions</span> <span class=\"arrow \"></span></a> 
        <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AfficherComp");
        echo "\"> Lise des competitions </a> </li>
            <li > <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AjouterComp");
        echo "\">Ajouter une nouvelle</a> </li>
        </ul>

    </li>
    <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Competitions</span> <span class=\"arrow \"></span></a> 
        <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AfficherComp");
        echo "\"> Lise des competitions </a> </li>
            <li > <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AjouterComp");
        echo "\">Ajouter une nouvelle</a> </li>
        </ul>

    </li>

";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "    <div class=\"col-md-12\">
        <div class=\"tabbable tabs-left\">
            <ul class=\"nav nav-tabs\" id=\"tab-2\">
                <li class=\"\"><a href=\"#tab2hellowWorld\">En cours</a></li>
                <li class=\"\"><a href=\"#tab2FollowUs\">En attente</a></li>
                <li class=\"active\"><a href=\"#tab2Inspire\">Finie</a></li>
            </ul>
            <div class=\"tab-content\">


                <div class=\"tab-pane\" id=\"tab2hellowWorld\" name=\"EN COURS\">

                    <center>
                        <h1> Liste des Competitions </h1>

                        <div class=\"grid simple\">

                            <div class=\"grid-title no-border\">
                                <!-- ce div contient 2 bouton (cacher et reduire)
                                <div class=\"tools\"> 
                                     <a href=\"javascript:;\" class=\"collapse\"></a>  
                                     <a href=\"javascript:;\" class=\"remove\"></a>
                                 </div> 
                                -->
                            </div>

                            <div class=\"grid-body no-border\">

                                <div class=\"grid simple \">
                                    <table class=\"table table-striped\" id=\"example2\" >
                                        <thead>
                                            <tr>
                                                <th>Libelle</th>
                                                <th>Date Denut</th>
                                                <th>Date Fin </th>
                                                <th>Niveau </th> 
                                                <th>Categorie </th>
                                                <th>Type</th>
                                                <th>Nombre de points</th>
                                                <th>Etat </th>
                                                <th>Modifier </th>
                                                <th>Supprimer</th>
                                            </tr>
                                        </thead>
                                       


                                            ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Competitions"]) ? $context["Competitions"] : $this->getContext($context, "Competitions")));
        foreach ($context['_seq'] as $context["_key"] => $context["Competition"]) {
            // line 78
            echo "                                                 ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["Competition"], "datedebut", array()), "Y/m/d") < twig_date_format_filter($this->env, "now", "Y/m/d")) && (twig_date_format_filter($this->env, $this->getAttribute($context["Competition"], "datefin", array()), "Y/m/d") > twig_date_format_filter($this->env, "now", "Y/m/d")))) {
                // line 79
                echo "
                                                <tbody>
                                                    <tr class=\"odd gradeX\">
                                                        <td id=\"toInfo\" ><a style=\"text-decoration:none\" href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wyshyback_nav_infoCompetition", array("idcompetition" => $this->getAttribute($context["Competition"], "idcompetition", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "libelle", array()), "html", null, true);
                echo "</a></td>
                                                        <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Competition"], "datedebut", array()), "Y/m/d"), "html", null, true);
                echo " </td>
                                                        <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Competition"], "datefin", array()), "Y/m/d"), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "niveau", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "categorie", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "type", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "nbrpoints", array()), "html", null, true);
                echo "</td>
                                                        <td><span class=\"label label-warning\"> En cours</span></td>. 
                                                        <td></td>




                                                        <td><a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wyshyback_nav_DeleteComp", array("idcompetition" => $this->getAttribute($context["Competition"], "idcompetition", array()))), "html", null, true);
                echo "\">Supprimer</a></td>
                                                    </tr>
                                                </tbody>
                                           
                                             ";
            }
            // line 100
            echo "                                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                                        </table>
                                    </div>    \t\t
                                </div>
                            </div>

                        </center>
                    </div>


                    <div class=\"tab-pane\" id=\"tab2FollowUs\" name=\"EN ATTENTE\">

                        <center>
                            <h1> Liste des Competitions </h1>

                            <div class=\"grid simple\">

                                <div class=\"grid-title no-border\">
                                    <!-- ce div contient 2 bouton (cacher et reduire)
                                    <div class=\"tools\"> 
                                         <a href=\"javascript:;\" class=\"collapse\"></a>  
                                         <a href=\"javascript:;\" class=\"remove\"></a>
                                     </div> 
                                    -->
                                </div>

                                <div class=\"grid-body no-border\">

                                    <div class=\"grid simple \">
                                        <table class=\"table table-striped\" id=\"example2\" >
                                            <thead>
                                                <tr>
                                                    <th>Libelle</th>
                                                    <th>Date Denut</th>
                                                    <th>Date Fin </th>
                                                    <th>Niveau </th> 
                                                    <th>Categorie </th>
                                                    <th>Type</th>
                                                    <th>Nombre de points</th>
                                                    <th>Etat </th>
                                                    <th>Modifier </th>
                                                    <th>Supprimer</th>
                                                </tr>
                                            </thead>
                                            ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Competitions"]) ? $context["Competitions"] : $this->getContext($context, "Competitions")));
        foreach ($context['_seq'] as $context["_key"] => $context["Competition"]) {
            // line 145
            echo "                                                 ";
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["Competition"], "datedebut", array()), "Y/m/d") > twig_date_format_filter($this->env, "now", "Y/m/d"))) {
                // line 146
                echo "                                                <tbody>
                                                    <tr class=\"odd gradeX\">
                                                          <td ><a style=\"text-decoration:none\" href=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wyshyback_nav_infoCompetition", array("idcompetition" => $this->getAttribute($context["Competition"], "idcompetition", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "libelle", array()), "html", null, true);
                echo "</a></td>
                                                     
                                                        <td>";
                // line 150
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Competition"], "datedebut", array()), "Y/m/d"), "html", null, true);
                echo " </td>
                                                        <td>";
                // line 151
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Competition"], "datefin", array()), "Y/m/d"), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "niveau", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "categorie", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "type", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "nbrpoints", array()), "html", null, true);
                echo "</td>
                                                       
                                                           
                                                            <td> <span class=\"label label-success\"> Bientot</span> </td>
                                                            <td><a href=\"   ";
                // line 159
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wyshyback_nav_updateCompeitition", array("idcompetition" => $this->getAttribute($context["Competition"], "idcompetition", array()))), "html", null, true);
                echo "\">Modifier</a></td>

                                                        



                                                        <td><a href=\"";
                // line 165
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wyshyback_nav_DeleteComp", array("idcompetition" => $this->getAttribute($context["Competition"], "idcompetition", array()))), "html", null, true);
                echo "\">Supprimer</a></td>
                                                    </tr>
                                                </tbody>
                                                ";
            }
            // line 169
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                                        </table>
                                    </div>    \t\t
                                </div>
                            </div>

                        </center>
                    </div>


                    <div class=\"tab-pane active\" id=\"tab2Inspire\" name=\"FINIE\">
                         <center>
                            <h1> Liste des Competitions </h1>

                            <div class=\"grid simple\">

                                <div class=\"grid-title no-border\">
                                    <!-- ce div contient 2 bouton (cacher et reduire)
                                    <div class=\"tools\"> 
                                         <a href=\"javascript:;\" class=\"collapse\"></a>  
                                         <a href=\"javascript:;\" class=\"remove\"></a>
                                     </div> 
                                    -->
                                </div>

                                <div class=\"grid-body no-border\">

                                    <div class=\"grid simple \">
                                        <table class=\"table table-striped\" id=\"example2\" >
                                            <thead>
                                                <tr>
                                                    <th>Libelle</th>
                                                    <th>Date Denut</th>
                                                    <th>Date Fin </th>
                                                    <th>Niveau </th> 
                                                    <th>Categorie </th>
                                                    <th>Type</th>
                                                    <th>Nombre de points</th>
                                                    <th>Etat </th>
                                                    <th>Modifier </th>
                                                    <th>Supprimer</th>
                                                </tr>
                                            </thead>
                                            ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Competitions"]) ? $context["Competitions"] : $this->getContext($context, "Competitions")));
        foreach ($context['_seq'] as $context["_key"] => $context["Competition"]) {
            // line 213
            echo "                                                 ";
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["Competition"], "datefin", array()), "Y/m/d") < twig_date_format_filter($this->env, "now", "Y/m/d"))) {
                // line 214
                echo "                                                <tbody>
                                                    <tr class=\"odd gradeX\">
                                                            <td ><a style=\"text-decoration:none\" href=\"";
                // line 216
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wyshyback_nav_infoCompetition", array("idcompetition" => $this->getAttribute($context["Competition"], "idcompetition", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "libelle", array()), "html", null, true);
                echo "</a></td>
                                                     
                                                        <td>";
                // line 218
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Competition"], "datedebut", array()), "Y/m/d"), "html", null, true);
                echo " </td>
                                                        <td>";
                // line 219
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Competition"], "datefin", array()), "Y/m/d"), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "niveau", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "categorie", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "type", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute($context["Competition"], "nbrpoints", array()), "html", null, true);
                echo "</td>
                                                       
                                                           
                                                             <td><span class=\"label label-important\"> Finie</span></td>
                                                            <td></td>
                                                        



                                                        <td><a href=\"";
                // line 232
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wyshyback_nav_DeleteComp", array("idcompetition" => $this->getAttribute($context["Competition"], "idcompetition", array()))), "html", null, true);
                echo "\">Supprimer</a></td>
                                                    </tr>
                                                </tbody>
                                                ";
            }
            // line 236
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                                        </table>
                                    </div>    \t\t
                                </div>
                            </div>

                        </center>
                    </div>






                </div>
            </div>
        </div>

        ";
    }

    // line 255
    public function block_js($context, array $blocks = array())
    {
        // line 256
        echo "                <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/js/tabs_accordian.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
               
            ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:competitionAffichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 256,  431 => 255,  404 => 236,  397 => 232,  385 => 223,  381 => 222,  377 => 221,  373 => 220,  369 => 219,  365 => 218,  358 => 216,  354 => 214,  351 => 213,  347 => 212,  297 => 169,  290 => 165,  281 => 159,  274 => 155,  270 => 154,  266 => 153,  262 => 152,  258 => 151,  254 => 150,  247 => 148,  243 => 146,  240 => 145,  236 => 144,  191 => 101,  185 => 100,  177 => 95,  167 => 88,  163 => 87,  159 => 86,  155 => 85,  151 => 84,  147 => 83,  141 => 82,  136 => 79,  133 => 78,  129 => 77,  80 => 30,  77 => 29,  67 => 22,  63 => 21,  54 => 15,  50 => 14,  41 => 8,  37 => 7,  33 => 5,  30 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Competitions</span> <span class="arrow "></span></a> */
/*         <ul class="sub-menu">*/
/*             <li > <a href="{{path('wyshyback_nav_AfficherComp')}}"> Lise des competitions </a> </li>*/
/*             <li > <a href="{{path('wyshyback_nav_AjouterComp')}}">Ajouter une nouvelle</a> </li>*/
/*         </ul>*/
/* */
/*     </li>*/
/*     <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Competitions</span> <span class="arrow "></span></a> */
/*         <ul class="sub-menu">*/
/*             <li > <a href="{{path('wyshyback_nav_AfficherComp')}}"> Lise des competitions </a> </li>*/
/*             <li > <a href="{{path('wyshyback_nav_AjouterComp')}}">Ajouter une nouvelle</a> </li>*/
/*         </ul>*/
/* */
/*     </li>*/
/*     <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Competitions</span> <span class="arrow "></span></a> */
/*         <ul class="sub-menu">*/
/*             <li > <a href="{{path('wyshyback_nav_AfficherComp')}}"> Lise des competitions </a> </li>*/
/*             <li > <a href="{{path('wyshyback_nav_AjouterComp')}}">Ajouter une nouvelle</a> </li>*/
/*         </ul>*/
/* */
/*     </li>*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="col-md-12">*/
/*         <div class="tabbable tabs-left">*/
/*             <ul class="nav nav-tabs" id="tab-2">*/
/*                 <li class=""><a href="#tab2hellowWorld">En cours</a></li>*/
/*                 <li class=""><a href="#tab2FollowUs">En attente</a></li>*/
/*                 <li class="active"><a href="#tab2Inspire">Finie</a></li>*/
/*             </ul>*/
/*             <div class="tab-content">*/
/* */
/* */
/*                 <div class="tab-pane" id="tab2hellowWorld" name="EN COURS">*/
/* */
/*                     <center>*/
/*                         <h1> Liste des Competitions </h1>*/
/* */
/*                         <div class="grid simple">*/
/* */
/*                             <div class="grid-title no-border">*/
/*                                 <!-- ce div contient 2 bouton (cacher et reduire)*/
/*                                 <div class="tools"> */
/*                                      <a href="javascript:;" class="collapse"></a>  */
/*                                      <a href="javascript:;" class="remove"></a>*/
/*                                  </div> */
/*                                 -->*/
/*                             </div>*/
/* */
/*                             <div class="grid-body no-border">*/
/* */
/*                                 <div class="grid simple ">*/
/*                                     <table class="table table-striped" id="example2" >*/
/*                                         <thead>*/
/*                                             <tr>*/
/*                                                 <th>Libelle</th>*/
/*                                                 <th>Date Denut</th>*/
/*                                                 <th>Date Fin </th>*/
/*                                                 <th>Niveau </th> */
/*                                                 <th>Categorie </th>*/
/*                                                 <th>Type</th>*/
/*                                                 <th>Nombre de points</th>*/
/*                                                 <th>Etat </th>*/
/*                                                 <th>Modifier </th>*/
/*                                                 <th>Supprimer</th>*/
/*                                             </tr>*/
/*                                         </thead>*/
/*                                        */
/* */
/* */
/*                                             {% for Competition in Competitions %}*/
/*                                                  {% if Competition.datedebut|date('Y/m/d') < "now"|date('Y/m/d')  and Competition.datefin|date('Y/m/d') > "now"|date('Y/m/d')%}*/
/* */
/*                                                 <tbody>*/
/*                                                     <tr class="odd gradeX">*/
/*                                                         <td id="toInfo" ><a style="text-decoration:none" href="{{path('wyshyback_nav_infoCompetition',{idcompetition:Competition.idcompetition})}}">{{Competition.libelle}}</a></td>*/
/*                                                         <td>{{Competition.datedebut|date('Y/m/d')}} </td>*/
/*                                                         <td>{{Competition.datefin|date('Y/m/d')}}</td>*/
/*                                                         <td>{{Competition.niveau}}</td>*/
/*                                                         <td>{{Competition.categorie}}</td>*/
/*                                                         <td>{{Competition.type}}</td>*/
/*                                                         <td>{{Competition.nbrpoints}}</td>*/
/*                                                         <td><span class="label label-warning"> En cours</span></td>. */
/*                                                         <td></td>*/
/* */
/* */
/* */
/* */
/*                                                         <td><a href="{{path('wyshyback_nav_DeleteComp',{idcompetition:Competition.idcompetition})}}">Supprimer</a></td>*/
/*                                                     </tr>*/
/*                                                 </tbody>*/
/*                                            */
/*                                              {% endif %}*/
/*                                                {% endfor %}*/
/*                                         </table>*/
/*                                     </div>    		*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </center>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="tab-pane" id="tab2FollowUs" name="EN ATTENTE">*/
/* */
/*                         <center>*/
/*                             <h1> Liste des Competitions </h1>*/
/* */
/*                             <div class="grid simple">*/
/* */
/*                                 <div class="grid-title no-border">*/
/*                                     <!-- ce div contient 2 bouton (cacher et reduire)*/
/*                                     <div class="tools"> */
/*                                          <a href="javascript:;" class="collapse"></a>  */
/*                                          <a href="javascript:;" class="remove"></a>*/
/*                                      </div> */
/*                                     -->*/
/*                                 </div>*/
/* */
/*                                 <div class="grid-body no-border">*/
/* */
/*                                     <div class="grid simple ">*/
/*                                         <table class="table table-striped" id="example2" >*/
/*                                             <thead>*/
/*                                                 <tr>*/
/*                                                     <th>Libelle</th>*/
/*                                                     <th>Date Denut</th>*/
/*                                                     <th>Date Fin </th>*/
/*                                                     <th>Niveau </th> */
/*                                                     <th>Categorie </th>*/
/*                                                     <th>Type</th>*/
/*                                                     <th>Nombre de points</th>*/
/*                                                     <th>Etat </th>*/
/*                                                     <th>Modifier </th>*/
/*                                                     <th>Supprimer</th>*/
/*                                                 </tr>*/
/*                                             </thead>*/
/*                                             {% for Competition in Competitions %}*/
/*                                                  {% if Competition.datedebut|date('Y/m/d') > "now"|date('Y/m/d') %}*/
/*                                                 <tbody>*/
/*                                                     <tr class="odd gradeX">*/
/*                                                           <td ><a style="text-decoration:none" href="{{path('wyshyback_nav_infoCompetition',{idcompetition:Competition.idcompetition})}}">{{Competition.libelle}}</a></td>*/
/*                                                      */
/*                                                         <td>{{Competition.datedebut|date('Y/m/d')}} </td>*/
/*                                                         <td>{{Competition.datefin|date('Y/m/d')}}</td>*/
/*                                                         <td>{{Competition.niveau}}</td>*/
/*                                                         <td>{{Competition.categorie}}</td>*/
/*                                                         <td>{{Competition.type}}</td>*/
/*                                                         <td>{{Competition.nbrpoints}}</td>*/
/*                                                        */
/*                                                            */
/*                                                             <td> <span class="label label-success"> Bientot</span> </td>*/
/*                                                             <td><a href="   {{path('wyshyback_nav_updateCompeitition',{idcompetition:Competition.idcompetition})}}">Modifier</a></td>*/
/* */
/*                                                         */
/* */
/* */
/* */
/*                                                         <td><a href="{{path('wyshyback_nav_DeleteComp',{idcompetition:Competition.idcompetition})}}">Supprimer</a></td>*/
/*                                                     </tr>*/
/*                                                 </tbody>*/
/*                                                 {% endif %}*/
/*                                             {% endfor %} */
/*                                         </table>*/
/*                                     </div>    		*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </center>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="tab-pane active" id="tab2Inspire" name="FINIE">*/
/*                          <center>*/
/*                             <h1> Liste des Competitions </h1>*/
/* */
/*                             <div class="grid simple">*/
/* */
/*                                 <div class="grid-title no-border">*/
/*                                     <!-- ce div contient 2 bouton (cacher et reduire)*/
/*                                     <div class="tools"> */
/*                                          <a href="javascript:;" class="collapse"></a>  */
/*                                          <a href="javascript:;" class="remove"></a>*/
/*                                      </div> */
/*                                     -->*/
/*                                 </div>*/
/* */
/*                                 <div class="grid-body no-border">*/
/* */
/*                                     <div class="grid simple ">*/
/*                                         <table class="table table-striped" id="example2" >*/
/*                                             <thead>*/
/*                                                 <tr>*/
/*                                                     <th>Libelle</th>*/
/*                                                     <th>Date Denut</th>*/
/*                                                     <th>Date Fin </th>*/
/*                                                     <th>Niveau </th> */
/*                                                     <th>Categorie </th>*/
/*                                                     <th>Type</th>*/
/*                                                     <th>Nombre de points</th>*/
/*                                                     <th>Etat </th>*/
/*                                                     <th>Modifier </th>*/
/*                                                     <th>Supprimer</th>*/
/*                                                 </tr>*/
/*                                             </thead>*/
/*                                             {% for Competition in Competitions %}*/
/*                                                  {% if Competition.datefin|date('Y/m/d') < "now"|date('Y/m/d') %}*/
/*                                                 <tbody>*/
/*                                                     <tr class="odd gradeX">*/
/*                                                             <td ><a style="text-decoration:none" href="{{path('wyshyback_nav_infoCompetition',{idcompetition:Competition.idcompetition})}}">{{Competition.libelle}}</a></td>*/
/*                                                      */
/*                                                         <td>{{Competition.datedebut|date('Y/m/d')}} </td>*/
/*                                                         <td>{{Competition.datefin|date('Y/m/d')}}</td>*/
/*                                                         <td>{{Competition.niveau}}</td>*/
/*                                                         <td>{{Competition.categorie}}</td>*/
/*                                                         <td>{{Competition.type}}</td>*/
/*                                                         <td>{{Competition.nbrpoints}}</td>*/
/*                                                        */
/*                                                            */
/*                                                              <td><span class="label label-important"> Finie</span></td>*/
/*                                                             <td></td>*/
/*                                                         */
/* */
/* */
/* */
/*                                                         <td><a href="{{path('wyshyback_nav_DeleteComp',{idcompetition:Competition.idcompetition})}}">Supprimer</a></td>*/
/*                                                     </tr>*/
/*                                                 </tbody>*/
/*                                                 {% endif %}*/
/*                                             {% endfor %} */
/*                                         </table>*/
/*                                     </div>    		*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </center>*/
/*                     </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% endblock %}*/
/*             {% block js %}*/
/*                 <script src="{{ asset('backEnd/assets/js/tabs_accordian.js') }}" type="text/javascript"></script>*/
/*                */
/*             {% endblock %}*/
