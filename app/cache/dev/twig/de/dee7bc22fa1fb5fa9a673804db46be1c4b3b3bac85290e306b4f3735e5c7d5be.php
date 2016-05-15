<?php

/* wyshybackNavBundle:Nav:competitionInfo.html.twig */
class __TwigTemplate_dfef060c2cd6db197f6cd17c04b45527e5323051fef372cf665a822cafb3b67c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:competitionInfo.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
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

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        // line 3
        echo "    <title>Information de la competition</title>
";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "    <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Competitions</span> <span class=\"arrow \"></span></a> 
        <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AfficherComp");
        echo "\"> Lise des competitions </a> </li>
            <li > <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AjouterComp");
        echo "\">Ajouter une nouvelle</a> </li>
        </ul>

    </li>
    <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Competitions</span> <span class=\"arrow \"></span></a> 
        <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AfficherComp");
        echo "\"> Lise des competitions </a> </li>
            <li > <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AjouterComp");
        echo "\">Ajouter une nouvelle</a> </li>
        </ul>

    </li>
    <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Competitions</span> <span class=\"arrow \"></span></a> 
        <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AfficherComp");
        echo "\"> Lise des competitions </a> </li>
            <li > <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AjouterComp");
        echo "\">Ajouter une nouvelle</a> </li>
        </ul>

    </li>

";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"col-md-12\">
        <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
                <h4>Information sur la competition <span class=\"semi-bold\"> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "libelle", array()), "html", null, true);
        echo "</span></h4>
              ";
        // line 35
        $context["warning"] = 0;
        // line 36
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 37
            echo "                ";
            if ((((twig_date_format_filter($this->env, $this->getAttribute($context["match"], "datematch", array()), "Y/m/d") < twig_date_format_filter($this->env, "now", "Y/m/d")) && ($this->getAttribute($context["match"], "getIdScore", array(), "method") == null)) && ($this->getAttribute($this->getAttribute($context["match"], "idjoueur1", array()), "getNom", array(), "method") != "aux"))) {
                // line 38
                echo "                    ";
                $context["warning"] = 1;
                // line 39
                echo "                 
                ";
            }
            // line 41
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                  
                  
                  ";
        // line 44
        if (((isset($context["warning"]) ? $context["warning"] : $this->getContext($context, "warning")) == 1)) {
            // line 45
            echo "                    <div class=\"alert alert-error\">
                  <button class=\"close\" data-dismiss=\"alert\"></button>
                   Cette competition comporte des matchs <a href=\"#\" class=\"link\"> deja passe </a> et ne sont pas mises a jour.
                </div>
                     ";
        }
        // line 50
        echo "                  </div>
            <div class=\"grid-body no-border\">
                <table class=\"table table-bordered no-more-tables\">
                    <thead>
                        <tr class=\"\">

                            <th class=\"text-center\" style=\"width:10%\">Categorie</th>
                            <th class=\"text-center\" style=\"width:6%\">Niveau</th>
                            <th class=\"text-center\" style=\"width:6%\">type</th>
                            <th class=\"text-center\" style=\"width:6%\">Nombre de match</th>
                            <th class=\"text-center\" style=\"width:10%\">Date debut</th>
                            <th class=\"text-center\" style=\"width:10%\">Date Fin</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr class=\"\">

                            <td class=\"text-center\"> ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "categorie", array()), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"> ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "niveau", array()), "html", null, true);
        echo "</td>
                            <td class=\"text-center\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "type", array()), "html", null, true);
        echo "</td>
                            <td class=\"text-center\">";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["nbrMatchs"]) ? $context["nbrMatchs"] : $this->getContext($context, "nbrMatchs")), "html", null, true);
        echo "</td>
                            <td class=\"text-center\">";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "datedebut", array()), "Y/m/d"), "html", null, true);
        echo "</td>

                            <td class=\"text-center\">";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "datefin", array()), "Y/m/d"), "html", null, true);
        echo "</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
                        
                        ";
        // line 84
        $context["number"] = array(0 => "A", 1 => "B", 2 => "C", 3 => "D", 4 => "E", 5 => "F", 6 => "G", 7 => "H", 8 => "I", 9 => "J", 10 => "K", 11 => "L", 12 => "M", 13 => "N", 14 => "O", 15 => "P", 16 => "Q", 17 => "R", 18 => "S", 19 => "T", 20 => "U", 21 => "B", 22 => "W", 23 => "X", 24 => "Y", 25 => "Z");
        // line 85
        echo "                       ";
        $context["i"] = 0;
        // line 86
        echo "                       ";
        $context["j"] = 0;
        // line 87
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 88
            echo "                        ";
            $context["aux"] = 0;
            // line 89
            echo "    <div class=\"col-md-6\">
        <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
                <h4> Match <span class=\"semi-bold\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
            echo "</span></h4>
                ";
            // line 93
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 94
            echo "                  </div>
            <div class=\"grid-body no-border\">
                

                                        <div class=\"col-md-4\">
                                            ";
            // line 99
            if ((($this->getAttribute($this->getAttribute($context["match"], "idjoueur1", array()), "getNom", array(), "method") == "aux") || ($this->getAttribute($this->getAttribute($context["match"], "idjoueur2", array()), "getNom", array(), "method") == "aux"))) {
                // line 100
                echo "                                                ";
                $context["aux"] = 1;
                // line 101
                echo "                                                    <label class=\"form-label\"> Gagnant du match ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), array(), "array"), "html", null, true);
                echo "</label>
                                                    ";
                // line 102
                $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
                // line 103
                echo "                                                    ";
            } else {
                // line 104
                echo "                                                     <label class=\"form-label\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idjoueur1", array()), "getNom", array(), "method"), "html", null, true);
                echo "
                                                     ";
                // line 105
                if (($this->getAttribute($context["match"], "idscore", array()) != null)) {
                    // line 106
                    echo "                                                        ";
                    if (($this->getAttribute($this->getAttribute($context["match"], "getIdscore", array(), "method"), "nbrsetj1", array()) > $this->getAttribute($this->getAttribute($context["match"], "getIdscore", array(), "method"), "nbrsetj2", array()))) {
                        echo " 
                                                            : <span class=\"semi-bold\" style=\"color:green;margin:0;padding:0;\">Gagnant </span>
                                                        ";
                    }
                    // line 109
                    echo "                                                      ";
                }
                // line 110
                echo "                                                     </label>
                                                      
                                                ";
            }
            // line 113
            echo "                                           
                                            
                                            
                                                <img id=\"avatar1\" style=\"height:150px\"src=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["match"], "Idjoueur1", array()), "getAvatar", array(), "method")), "html", null, true);
            echo "\" data-img=\"assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg\" alt=\"\" class=\"superbox-img\">
                                                </br><center>
                                                </center>
                                        </div>

                                        <div class=\"col-md-4\">

                                            <span class=\"semi-bold\"><center><img id=\"\" src=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/profiles/vs.jpg"), "html", null, true);
            echo "\" data-img=\"assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg\" alt=\"\" class=\"superbox-img\">
                                                    ";
            // line 124
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["match"], "datematch", array()), "Y/m/d"), "html", null, true);
            echo "</br></br>
                                                      ";
            // line 125
            if ((((twig_date_format_filter($this->env, $this->getAttribute($context["match"], "datematch", array()), "Y/m/d") < twig_date_format_filter($this->env, "now", "Y/m/d")) && ($this->getAttribute($context["match"], "idscore", array()) == null)) && ((isset($context["aux"]) ? $context["aux"] : $this->getContext($context, "aux")) == 0))) {
                // line 126
                echo "                                                          <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wyshyback_nav_score", array("idmatch" => $this->getAttribute($context["match"], "idmatch", array()))), "html", null, true);
                echo "\"> <button  type=\"button\" class=\"btn btn-danger btn-sm btn-small\">Affecter le score</button></a>
                                                       
                                                      ";
            }
            // line 129
            echo "                                                     
                                                        
                                                </center>
                                                </span>
                                        </div>

                                        <div class=\"col-md-4\">
                                                  ";
            // line 136
            if ((($this->getAttribute($this->getAttribute($context["match"], "idjoueur1", array()), "getNom", array(), "method") == "aux") || ($this->getAttribute($this->getAttribute($context["match"], "idjoueur2", array()), "getNom", array(), "method") == "aux"))) {
                // line 137
                echo "                                                 <label class=\"form-label\"> Gagnant du match ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), array(), "array"), "html", null, true);
                echo "</label>
                                               ";
                // line 138
                $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
                // line 139
                echo "                                                  ";
            } else {
                // line 140
                echo "                                                      <label class=\"form-label\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idjoueur2", array()), "getNom", array(), "method"), "html", null, true);
                echo "
                                                      
                                                      ";
                // line 142
                if (($this->getAttribute($context["match"], "idscore", array()) != null)) {
                    // line 143
                    echo "                                                        ";
                    if (($this->getAttribute($this->getAttribute($context["match"], "getIdscore", array(), "method"), "nbrsetj1", array()) < $this->getAttribute($this->getAttribute($context["match"], "getIdscore", array(), "method"), "nbrsetj2", array()))) {
                        echo " 
                                                            : <span class=\"semi-bold\" style=\"color:green;margin:0;padding:0;\">Gagnant </span>
                                                            ";
                    }
                    // line 146
                    echo "                                                            ";
                }
                // line 147
                echo "                                                      </label>
                                                      
                                                ";
            }
            // line 150
            echo "                                          
                                                <img id=\"avatar2\" style=\"height:150px\" src=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["match"], "Idjoueur2", array()), "getAvatar", array(), "method")), "html", null, true);
            echo "\" data-img=\"assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg\" alt=\"\" class=\"superbox-img\">
                                            
                                        </div>
                                    </div>
                
            
        </div>
    </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                                            
                                            ";
        // line 161
        $context["winner"] = 0;
        // line 162
        echo "                                       
                                            ";
        // line 163
        if (((isset($context["nbrMatchsFinals"]) ? $context["nbrMatchsFinals"] : $this->getContext($context, "nbrMatchsFinals")) == 0)) {
            // line 164
            echo "                                                
                                            <div class=\"col-md-12\" >
                                            <div class=\"grid simple\">
                                                 <div class=\"grid-title no-border\">
                                                        <h4> Classement de la competition <span class=\"semi-bold\"></span></h4>
                                                        
                                                          </div>
                                                <div class=\"grid-body no-border\">
                                            <table class=\"table table-hover no-more-tables\">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nom</th>
                                                        <th>Prenom</th>
                                                        <th>Score</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
            // line 182
            $context["rang"] = 1;
            // line 183
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classement"]) ? $context["classement"] : $this->getContext($context, "classement")));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 184
                echo "                                                        <tr>
                                                        <td>";
                // line 185
                echo twig_escape_filter($this->env, (isset($context["rang"]) ? $context["rang"] : $this->getContext($context, "rang")), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "getIdjoueur", array(), "method"), "getNom", array(), "method"), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "getIdjoueur", array(), "method"), "getPrenom", array(), "method"), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "getRang", array(), "method"), "html", null, true);
                echo "</td>
                                                    </tr>
                                                    ";
                // line 190
                $context["rang"] = ((isset($context["rang"]) ? $context["rang"] : $this->getContext($context, "rang")) + 1);
                // line 191
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "                                                    
                                                </tbody>
                                            </table>
                                                </div>
                                            </div>
                                            </div>
                                            ";
        }
        // line 199
        echo "            ";
    }

    // line 200
    public function block_js($context, array $blocks = array())
    {
        // line 201
        echo "                <script> 
                    </script>
               ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:competitionInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 201,  431 => 200,  427 => 199,  418 => 192,  412 => 191,  410 => 190,  405 => 188,  401 => 187,  397 => 186,  393 => 185,  390 => 184,  385 => 183,  383 => 182,  363 => 164,  361 => 163,  358 => 162,  356 => 161,  353 => 160,  338 => 151,  335 => 150,  330 => 147,  327 => 146,  320 => 143,  318 => 142,  312 => 140,  309 => 139,  307 => 138,  302 => 137,  300 => 136,  291 => 129,  284 => 126,  282 => 125,  278 => 124,  274 => 123,  264 => 116,  259 => 113,  254 => 110,  251 => 109,  244 => 106,  242 => 105,  237 => 104,  234 => 103,  232 => 102,  227 => 101,  224 => 100,  222 => 99,  215 => 94,  213 => 93,  209 => 92,  204 => 89,  201 => 88,  196 => 87,  193 => 86,  190 => 85,  188 => 84,  176 => 75,  171 => 73,  167 => 72,  163 => 71,  159 => 70,  155 => 69,  134 => 50,  127 => 45,  125 => 44,  121 => 42,  115 => 41,  111 => 39,  108 => 38,  105 => 37,  100 => 36,  98 => 35,  94 => 34,  89 => 31,  86 => 30,  76 => 23,  72 => 22,  63 => 16,  59 => 15,  50 => 9,  46 => 8,  42 => 6,  39 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* {% block titre %}*/
/*     <title>Information de la competition</title>*/
/* {% endblock %}*/
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
/*         <div class="grid simple">*/
/*             <div class="grid-title no-border">*/
/*                 <h4>Information sur la competition <span class="semi-bold"> {{ competition.libelle }}</span></h4>*/
/*               {% set warning = 0 %}*/
/*                 {% for match in matchs %}*/
/*                 {% if match.datematch|date('Y/m/d') < "now"|date('Y/m/d')  and match.getIdScore() == null and match.idjoueur1.getNom() != "aux" %}*/
/*                     {% set warning = 1 %}*/
/*                  */
/*                 {% endif %}*/
/*                   {% endfor %}*/
/*                   */
/*                   */
/*                   {% if warning == 1%}*/
/*                     <div class="alert alert-error">*/
/*                   <button class="close" data-dismiss="alert"></button>*/
/*                    Cette competition comporte des matchs <a href="#" class="link"> deja passe </a> et ne sont pas mises a jour.*/
/*                 </div>*/
/*                      {% endif %}*/
/*                   </div>*/
/*             <div class="grid-body no-border">*/
/*                 <table class="table table-bordered no-more-tables">*/
/*                     <thead>*/
/*                         <tr class="">*/
/* */
/*                             <th class="text-center" style="width:10%">Categorie</th>*/
/*                             <th class="text-center" style="width:6%">Niveau</th>*/
/*                             <th class="text-center" style="width:6%">type</th>*/
/*                             <th class="text-center" style="width:6%">Nombre de match</th>*/
/*                             <th class="text-center" style="width:10%">Date debut</th>*/
/*                             <th class="text-center" style="width:10%">Date Fin</th>*/
/* */
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/* */
/*                         <tr class="">*/
/* */
/*                             <td class="text-center"> {{ competition.categorie }}</td>*/
/*                             <td class="text-center"> {{ competition.niveau }}</td>*/
/*                             <td class="text-center">{{competition.type}}</td>*/
/*                             <td class="text-center">{{nbrMatchs}}</td>*/
/*                             <td class="text-center">{{competition.datedebut|date('Y/m/d')}}</td>*/
/* */
/*                             <td class="text-center">{{competition.datefin|date('Y/m/d')}}</td>*/
/*                         </tr>*/
/* */
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*                         */
/*                         {% set number = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','B','W','X','Y','Z'] %}*/
/*                        {% set i = 0 %}*/
/*                        {% set j = 0 %}*/
/*                         {% for match in matchs %}*/
/*                         {% set aux = 0 %}*/
/*     <div class="col-md-6">*/
/*         <div class="grid simple">*/
/*             <div class="grid-title no-border">*/
/*                 <h4> Match <span class="semi-bold">{{ number[i] }}</span></h4>*/
/*                 {% set i = i + 1 %}*/
/*                   </div>*/
/*             <div class="grid-body no-border">*/
/*                 */
/* */
/*                                         <div class="col-md-4">*/
/*                                             {%  if match.idjoueur1.getNom() == "aux"  or  match.idjoueur2.getNom() == "aux"%}*/
/*                                                 {% set aux = 1 %}*/
/*                                                     <label class="form-label"> Gagnant du match {{number[j]}}</label>*/
/*                                                     {% set j = j + 1 %}*/
/*                                                     {% else %}*/
/*                                                      <label class="form-label">{{ match.idjoueur1.getNom() }}*/
/*                                                      {% if match.idscore != null %}*/
/*                                                         {% if match.getIdscore().nbrsetj1 > match.getIdscore().nbrsetj2 %} */
/*                                                             : <span class="semi-bold" style="color:green;margin:0;padding:0;">Gagnant </span>*/
/*                                                         {% endif %}*/
/*                                                       {% endif %}*/
/*                                                      </label>*/
/*                                                       */
/*                                                 {% endif %}*/
/*                                            */
/*                                             */
/*                                             */
/*                                                 <img id="avatar1" style="height:150px"src="{{ asset(match.Idjoueur1.getAvatar()) }}" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg" alt="" class="superbox-img">*/
/*                                                 </br><center>*/
/*                                                 </center>*/
/*                                         </div>*/
/* */
/*                                         <div class="col-md-4">*/
/* */
/*                                             <span class="semi-bold"><center><img id="" src="{{ asset('backEnd/assets/img/profiles/vs.jpg') }}" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg" alt="" class="superbox-img">*/
/*                                                     {{match.datematch|date('Y/m/d')}}</br></br>*/
/*                                                       {% if match.datematch|date('Y/m/d') < "now"|date('Y/m/d')  and match.idscore == null  and aux == 0 %}*/
/*                                                           <a href="{{ path('wyshyback_nav_score', {'idmatch': match.idmatch}) }}"> <button  type="button" class="btn btn-danger btn-sm btn-small">Affecter le score</button></a>*/
/*                                                        */
/*                                                       {% endif %}*/
/*                                                      */
/*                                                         */
/*                                                 </center>*/
/*                                                 </span>*/
/*                                         </div>*/
/* */
/*                                         <div class="col-md-4">*/
/*                                                   {%  if match.idjoueur1.getNom() == "aux" or match.idjoueur2.getNom() == "aux"%}*/
/*                                                  <label class="form-label"> Gagnant du match {{number[j]}}</label>*/
/*                                                {% set j = j + 1 %}*/
/*                                                   {% else %}*/
/*                                                       <label class="form-label">{{ match.idjoueur2.getNom() }}*/
/*                                                       */
/*                                                       {% if match.idscore != null %}*/
/*                                                         {% if match.getIdscore().nbrsetj1 < match.getIdscore().nbrsetj2 %} */
/*                                                             : <span class="semi-bold" style="color:green;margin:0;padding:0;">Gagnant </span>*/
/*                                                             {% endif %}*/
/*                                                             {% endif %}*/
/*                                                       </label>*/
/*                                                       */
/*                                                 {% endif %}*/
/*                                           */
/*                                                 <img id="avatar2" style="height:150px" src="{{ asset(match.Idjoueur2.getAvatar()) }}" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg" alt="" class="superbox-img">*/
/*                                             */
/*                                         </div>*/
/*                                     </div>*/
/*                 */
/*             */
/*         </div>*/
/*     </div>*/
/*                                             {% endfor %}*/
/*                                             */
/*                                             {% set winner = 0 %}*/
/*                                        */
/*                                             {% if nbrMatchsFinals == 0 %}*/
/*                                                 */
/*                                             <div class="col-md-12" >*/
/*                                             <div class="grid simple">*/
/*                                                  <div class="grid-title no-border">*/
/*                                                         <h4> Classement de la competition <span class="semi-bold"></span></h4>*/
/*                                                         */
/*                                                           </div>*/
/*                                                 <div class="grid-body no-border">*/
/*                                             <table class="table table-hover no-more-tables">*/
/*                                                 <thead>*/
/*                                                     <tr>*/
/*                                                         <th>#</th>*/
/*                                                         <th>Nom</th>*/
/*                                                         <th>Prenom</th>*/
/*                                                         <th>Score</th>*/
/*                                                     </tr>*/
/*                                                 </thead>*/
/*                                                 <tbody>*/
/*                                                     {% set rang = 1 %}*/
/*                                                     {% for c in classement %}*/
/*                                                         <tr>*/
/*                                                         <td>{{rang}}</td>*/
/*                                                         <td>{{c.getIdjoueur().getNom()}}</td>*/
/*                                                         <td>{{c.getIdjoueur().getPrenom()}}</td>*/
/*                                                         <td>{{c.getRang()}}</td>*/
/*                                                     </tr>*/
/*                                                     {% set rang = rang + 1 %}*/
/*                                                         {% endfor %}*/
/*                                                     */
/*                                                 </tbody>*/
/*                                             </table>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             </div>*/
/*                                             {% endif %}*/
/*             {% endblock %}*/
/*             {% block js %}*/
/*                 <script> */
/*                     </script>*/
/*                {% endblock %}*/
