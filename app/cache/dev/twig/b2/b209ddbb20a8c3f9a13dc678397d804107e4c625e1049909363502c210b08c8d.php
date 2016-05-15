<?php

/* wyshybackNavBundle:Nav:matchsFinals.html.twig */
class __TwigTemplate_7ab50d83c58fb06ff13155e6cf2d3c6a6f107d8189297927778a663b28f7b448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:matchsFinals.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
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
    <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Matchs</span> <span class=\"arrow \"></span></a> 
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
    <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 2</span> <span class=\"arrow \"></span></a> 
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

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "
    <form method=\"POST\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"grid simple\">
                    <div class=\"grid-title no-border\">
                        <h4>Ajouter les premiers matchs a la competition : <span class=\"semi-bold\"> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "libelle", array()), "html", null, true);
        echo "</span></h4>
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
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "categorie", array()), "html", null, true);
        echo "</td>
                                    <td class=\"text-center\"> ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "niveau", array()), "html", null, true);
        echo "</td>
                                    <td class=\"text-center\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "type", array()), "html", null, true);
        echo "</td>
                                    <td class=\"text-center\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "nbrmatch", array()), "html", null, true);
        echo "</td>
                                    <td class=\"text-center\">";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "datedebut", array()), "Y/m/d"), "html", null, true);
        echo "</td>

                                    <td class=\"text-center\">";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "datefin", array()), "Y/m/d"), "html", null, true);
        echo "</td>
                                </tr>

                            </tbody>
                        </table>


                    </div>

                        <div id=\"notifVrai\"class=\"alert alert-success\" style=\"display:none\">
                            <button class=\"close\" data-dismiss=\"alert\"></button>
                            Le Match a ete:&nbsp; <a href=\"#\" class=\"link\">ajoute</a> avec succes. </div>



                    </div>
                    
                                
                                
                                 ";
        // line 78
        $context["number"] = array(0 => "A", 1 => "B", 2 => "C", 3 => "D", 4 => "E", 5 => "F", 6 => "G", 7 => "H", 8 => "I", 9 => "J", 10 => "K", 11 => "L", 12 => "M", 13 => "N", 14 => "O", 15 => "P", 16 => "Q", 17 => "R", 18 => "S", 19 => "T", 20 => "U", 21 => "B", 22 => "W", 23 => "X", 24 => "Y", 25 => "Z");
        // line 79
        echo "                       ";
        $context["i"] = 0;
        // line 80
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) ? $context["matchs"] : $this->getContext($context, "matchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 81
            echo "    <div class=\"col-md-6\">
        <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
                <h4> Match <span class=\"semi-bold\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
            echo "</span></h4>
                ";
            // line 85
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 86
            echo "                  </div>
            <div class=\"grid-body no-border\">
                

                                        <div class=\"col-md-4\">
                                            
                                            <label class=\"form-label\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "idjoueur1", array()), "getNom", array(), "method"), "html", null, true);
            echo "</label>
                                            
                                            
                                                <img id=\"avatar1\" style=\"height:150px\"src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["match"], "Idjoueur1", array()), "getAvatar", array(), "method")), "html", null, true);
            echo "\" data-img=\"assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg\" alt=\"\" class=\"superbox-img\">
                                            
                                        </div>

                                        <div class=\"col-md-4\">

                                            <span class=\"semi-bold\"><img id=\"\" src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/profiles/vs.jpg"), "html", null, true);
            echo "\" data-img=\"assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg\" alt=\"\" class=\"superbox-img\">
                                                <center>";
            // line 102
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["match"], "datematch", array()), "Y/m/d"), "html", null, true);
            echo "</center>
                                                </span>
                                        </div>

                                        <div class=\"col-md-4\">
                                              
                                            <label class=\"form-label\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "Idjoueur2", array()), "getNom", array(), "method"), "html", null, true);
            echo "</label>
                                            
                                          
                                                <img id=\"avatar2\" style=\"height:150px\" src=\"";
            // line 111
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
        // line 120
        echo "                            
                            
                    </div>
              
                </div>
            
        
                                                  <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"grid simple\">
                                <div class=\"grid-body no-border\">
                        <form class=\"form-no-horizontal-spacing\" id=\"form-condensed\">\t
                            <div class=\"row column-seperation\">
                                <div class=\"col-md-12\">
                                    <h4>Information</h4>            
                                    <div class=\"row form-row\">

                                        <div class=\"col-md-5\">
                                            <label class=\"form-label\">Joueur 1</label>

                                            <select >
                                            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["nbrMatchs"]) ? $context["nbrMatchs"] : $this->getContext($context, "nbrMatchs")) + (isset($context["nbrMatchsFinals"]) ? $context["nbrMatchsFinals"] : $this->getContext($context, "nbrMatchsFinals")))));
        foreach ($context['_seq'] as $context["_key"] => $context["alpha"]) {
            // line 142
            echo "                                                <option>Gagant du match ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), $context["alpha"], array(), "array"), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alpha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                                            
                                            </select>
                                        </div>

                                        <div class=\"col-md-2\">

                                            <span class=\"semi-bold\"><center><img id=\"\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/profiles/vs.jpg"), "html", null, true);
        echo "\" data-img=\"assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg\" alt=\"\" class=\"superbox-img\">
                                                </center></span>
                                        </div>

                                        <div class=\"col-md-5\">
                                            <label class=\"form-label\">Joueur 2</label>
                                            <select >
                                            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["nbrMatchs"]) ? $context["nbrMatchs"] : $this->getContext($context, "nbrMatchs")) + (isset($context["nbrMatchsFinals"]) ? $context["nbrMatchsFinals"] : $this->getContext($context, "nbrMatchsFinals")))));
        foreach ($context['_seq'] as $context["_key"] => $context["alpha"]) {
            // line 158
            echo "                                                <option> Gagant du match ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), $context["alpha"], array(), "array"), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alpha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                                            
                                            </select>
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class=\"row form-row\">
                                        <div class=\"col-md-5\">
                                            <label class=\"form-label\">Arbitre</label>
                                            ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idarbitre", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                    </br>

                                    </br>
                                    <div class=\"row form-row\">
                                        <div class=\"col-md-8\">
                                            <label class=\"form-label\">Date du match</label>
                                            ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datematch", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                    </br>

                                    </br>
                                    <div class=\"row form-row\">
                                        <div class=\"col-md-8\">
                                            <label class=\"form-label\">Choix des Stades </label>
                                            ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idstade", array()), 'widget');
        echo "

                                        </div>
                                    </div>
                                    <div class=\"row form-row\">

                                    </div>
                                </div>

                            </div>
                            <div class=\"form-actions\">




                                ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                    </div>
                                            
                                            
                                            
    </form>

";
    }

    // line 215
    public function block_js($context, array $blocks = array())
    {
        // line 216
        echo "
    <script>
        
    </script>
";
    }

    // line 221
    public function block_userInfo($context, array $blocks = array())
    {
        // line 222
        echo "    Personne 1
";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:matchsFinals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 222,  378 => 221,  370 => 216,  367 => 215,  350 => 202,  332 => 187,  320 => 178,  308 => 169,  297 => 160,  288 => 158,  284 => 157,  274 => 150,  266 => 144,  257 => 142,  253 => 141,  230 => 120,  215 => 111,  209 => 108,  200 => 102,  196 => 101,  187 => 95,  181 => 92,  173 => 86,  171 => 85,  167 => 84,  162 => 81,  157 => 80,  154 => 79,  152 => 78,  130 => 59,  125 => 57,  121 => 56,  117 => 55,  113 => 54,  109 => 53,  88 => 35,  80 => 29,  77 => 28,  68 => 22,  64 => 21,  55 => 15,  51 => 14,  42 => 8,  38 => 7,  34 => 5,  31 => 4,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* */
/* {% block menu %}*/
/*     <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Competitions</span> <span class="arrow "></span></a> */
/*         <ul class="sub-menu">*/
/*             <li > <a href="{{path('wyshyback_nav_AfficherComp')}}"> Lise des competitions </a> </li>*/
/*             <li > <a href="{{path('wyshyback_nav_AjouterComp')}}">Ajouter une nouvelle</a> </li>*/
/*         </ul>*/
/* */
/*     </li>*/
/*     <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Matchs</span> <span class="arrow "></span></a> */
/*         <ul class="sub-menu">*/
/*             <li > <a href="{{path('wyshyback_nav_AfficherComp')}}"> Lise des competitions </a> </li>*/
/*             <li > <a href="{{path('wyshyback_nav_AjouterComp')}}">Ajouter une nouvelle</a> </li>*/
/*         </ul>*/
/* */
/*     </li>*/
/*     <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Menu 2</span> <span class="arrow "></span></a> */
/*         <ul class="sub-menu">*/
/*             <li > <a href="{{path('wyshyback_nav_AfficherComp')}}"> Lise des competitions </a> </li>*/
/*             <li > <a href="{{path('wyshyback_nav_AjouterComp')}}">Ajouter une nouvelle</a> </li>*/
/*         </ul>*/
/* */
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <form method="POST">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="grid simple">*/
/*                     <div class="grid-title no-border">*/
/*                         <h4>Ajouter les premiers matchs a la competition : <span class="semi-bold"> {{ competition.libelle }}</span></h4>*/
/*                         <table class="table table-bordered no-more-tables">*/
/*                             <thead>*/
/*                                 <tr class="">*/
/* */
/*                                     <th class="text-center" style="width:10%">Categorie</th>*/
/*                                     <th class="text-center" style="width:6%">Niveau</th>*/
/*                                     <th class="text-center" style="width:6%">type</th>*/
/*                                     <th class="text-center" style="width:6%">Nombre de match</th>*/
/*                                     <th class="text-center" style="width:10%">Date debut</th>*/
/*                                     <th class="text-center" style="width:10%">Date Fin</th>*/
/* */
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/* */
/*                                 <tr class="">*/
/* */
/*                                     <td class="text-center"> {{ competition.categorie }}</td>*/
/*                                     <td class="text-center"> {{ competition.niveau }}</td>*/
/*                                     <td class="text-center">{{competition.type}}</td>*/
/*                                     <td class="text-center">{{competition.nbrmatch}}</td>*/
/*                                     <td class="text-center">{{competition.datedebut|date('Y/m/d')}}</td>*/
/* */
/*                                     <td class="text-center">{{competition.datefin|date('Y/m/d')}}</td>*/
/*                                 </tr>*/
/* */
/*                             </tbody>*/
/*                         </table>*/
/* */
/* */
/*                     </div>*/
/* */
/*                         <div id="notifVrai"class="alert alert-success" style="display:none">*/
/*                             <button class="close" data-dismiss="alert"></button>*/
/*                             Le Match a ete:&nbsp; <a href="#" class="link">ajoute</a> avec succes. </div>*/
/* */
/* */
/* */
/*                     </div>*/
/*                     */
/*                                 */
/*                                 */
/*                                  {% set number = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','B','W','X','Y','Z'] %}*/
/*                        {% set i = 0 %}*/
/*                         {% for match in matchs %}*/
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
/*                                             */
/*                                             <label class="form-label">{{ match.idjoueur1.getNom() }}</label>*/
/*                                             */
/*                                             */
/*                                                 <img id="avatar1" style="height:150px"src="{{ asset(match.Idjoueur1.getAvatar()) }}" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg" alt="" class="superbox-img">*/
/*                                             */
/*                                         </div>*/
/* */
/*                                         <div class="col-md-4">*/
/* */
/*                                             <span class="semi-bold"><img id="" src="{{ asset('backEnd/assets/img/profiles/vs.jpg') }}" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg" alt="" class="superbox-img">*/
/*                                                 <center>{{match.datematch|date('Y/m/d')}}</center>*/
/*                                                 </span>*/
/*                                         </div>*/
/* */
/*                                         <div class="col-md-4">*/
/*                                               */
/*                                             <label class="form-label">{{ match.Idjoueur2.getNom() }}</label>*/
/*                                             */
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
/*                             */
/*                             */
/*                     </div>*/
/*               */
/*                 </div>*/
/*             */
/*         */
/*                                                   <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="grid simple">*/
/*                                 <div class="grid-body no-border">*/
/*                         <form class="form-no-horizontal-spacing" id="form-condensed">	*/
/*                             <div class="row column-seperation">*/
/*                                 <div class="col-md-12">*/
/*                                     <h4>Information</h4>            */
/*                                     <div class="row form-row">*/
/* */
/*                                         <div class="col-md-5">*/
/*                                             <label class="form-label">Joueur 1</label>*/
/* */
/*                                             <select >*/
/*                                             {% for alpha in 0..nbrMatchs + nbrMatchsFinals %}*/
/*                                                 <option>Gagant du match {{ number[alpha] }}</option>*/
/*                                                 {% endfor %}*/
/*                                             */
/*                                             </select>*/
/*                                         </div>*/
/* */
/*                                         <div class="col-md-2">*/
/* */
/*                                             <span class="semi-bold"><center><img id="" src="{{ asset('backEnd/assets/img/profiles/vs.jpg') }}" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg" alt="" class="superbox-img">*/
/*                                                 </center></span>*/
/*                                         </div>*/
/* */
/*                                         <div class="col-md-5">*/
/*                                             <label class="form-label">Joueur 2</label>*/
/*                                             <select >*/
/*                                             {% for alpha in 0..nbrMatchs + nbrMatchsFinals  %}*/
/*                                                 <option> Gagant du match {{ number[alpha] }}</option>*/
/*                                                 {% endfor %}*/
/*                                             */
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     </br>*/
/*                                     </br>*/
/*                                     <div class="row form-row">*/
/*                                         <div class="col-md-5">*/
/*                                             <label class="form-label">Arbitre</label>*/
/*                                             {{ form_widget(form.idarbitre) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     </br>*/
/* */
/*                                     </br>*/
/*                                     <div class="row form-row">*/
/*                                         <div class="col-md-8">*/
/*                                             <label class="form-label">Date du match</label>*/
/*                                             {{ form_widget(form.datematch) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     </br>*/
/* */
/*                                     </br>*/
/*                                     <div class="row form-row">*/
/*                                         <div class="col-md-8">*/
/*                                             <label class="form-label">Choix des Stades </label>*/
/*                                             {{ form_widget(form.idstade) }}*/
/* */
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="row form-row">*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                             <div class="form-actions">*/
/* */
/* */
/* */
/* */
/*                                 {{ form_rest(form) }}*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*                     </div>*/
/*                                             */
/*                                             */
/*                                             */
/*     </form>*/
/* */
/* {% endblock %}*/
/* {% block js %}*/
/* */
/*     <script>*/
/*         */
/*     </script>*/
/* {% endblock %}*/
/* {% block userInfo %}*/
/*     Personne 1*/
/* {% endblock %}*/
/* */
