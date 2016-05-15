<?php

/* wyshybackNavBundle:Nav:competitonAjout.html.twig */
class __TwigTemplate_cde1c9eea50b9653d3d98a6cb2dba680bd2ca70d185cec540fe1ce49bb7992b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:competitonAjout.html.twig", 2);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'userInfo' => array($this, 'block_userInfo'),
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
    <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Matchs</span> <span class=\"arrow \"></span></a> 
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
    <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 2</span> <span class=\"arrow \"></span></a> 
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

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "

    <div class=\"col-md-12\">
        <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
                <h4>Gestion de<span class=\"semi-bold\"> Competitions</span></h4>
                <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body no-border\">
                <form method=\"POST\">

                    <div class=\"form-group\">
                        <label class=\"form-label\">Libelle</label>
                        <span class=\"help\">e.g. \"Rolland Garros\"</span>
                        <div class=\"input-with-icon  right\">                                       
                            <i class=\"\"></i>
                            <!-- <input type=\"text\" name=\"form1Amount\" id=\"form1Amount\" class=\"form-control\">  -->
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">Nombre de points</label>
                        <span class=\"help\">e.g. \"63\"</span>
                        <div class=\"input-with-icon  right\">                                       
                            <i class=\"\"></i>
                            <!-- <input type=\"text\" name=\"form1CardHolderName\" id=\"form1CardHolderName\" class=\"form-control\">  -->
                            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbrpoints", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">Date Debut</label>z
                        <span class=\"help\">e.g. \"01/01/2000\"</span>

                        <!-- <input style=\"\" type=\"text\" class=\"form-control\" id=\"sandbox-advance\"> -->
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datedebut", array()), 'widget');
        echo "

                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">Date Fin</label>
                        <span class=\"help\">e.g. \"02/02/2000\"</span>

                        <!-- <input style=\"\" type=\"text\" class=\"form-control\" id=\"sandbox-advance\"> -->
                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datefin", array()), 'widget');
        echo "


                    </div>
                    </br>
                    <div class=\"form-group\">



                        <div class=\"row form-row\">
                            <div class=\"col-md-4\">

                                <label class=\"form-label\">Niveau</label>
                                <i class=\"\"></i>
                                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'widget');
        echo "
                            </div>
                            <div class=\"col-md-4\">

                                <label class=\"form-label\">Categorie</label>
                                <i class=\"\"></i>
                                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget');
        echo "

                                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "joueurs", array()), 'widget');
        echo "
                            </div>


                            <div class=\"col-md-4\">      



                                <label class=\"form-label\">Type</label>
                                <i class=\"\"></i>

                                ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
                            </div>

                        </div>
                        
                    </div> 
                    </br>
                        </br></br></br>
                        <div class=\"form-group\">
                    <label class=\"form-label\">Liste des Joueurs</label>
                    <i class=\"\"></i>
                    
                    <table class=\"table table-bordered no-more-tables\">
                        <thead>
                            <tr class=\"\">
                                <th style=\"width:1%\">
                        <div class=\"checkbox check-default\">
                            <input id=\"checkbox20\" value=\"1\" class=\"checkall\" type=\"checkbox\">
                            <label for=\"checkbox20\"></label>
                        </div>
                        </th>
                        <th class=\"text-center\" style=\"width:12%\">Nom et prenom</th>
                        <th class=\"text-center\" style=\"width:6%\">Age</th>
                        <th class=\"text-center\" style=\"width:6%\">Experience</th>
                        <th class=\"text-center\" style=\"width:10%\">Avatar</th>
                        <th class=\"text-center\" style=\"width:6%\">Niveau</th>

                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 136
            echo "                                    ";
            if (($this->getAttribute($context["joueur"], "nom", array()) != "aux")) {
                // line 137
                echo "                                <tr class=\"\">
                                    <td>
                                        <div class=\"checkbox check-default\">
                                            <input onclick=\"tito('checkbox";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "idpersonne", array()), "html", null, true);
                echo "')\" id=\"checkbox";
                echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "idpersonne", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "idpersonne", array()), "html", null, true);
                echo "\" type=\"checkbox\">


                                            <label for=\"checkbox";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "idpersonne", array()), "html", null, true);
                echo "\"></label>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "prenom", array()), "html", null, true);
                echo "</td>
                                    <td class=\"text-center\">29</td>
                                    <td class=\"text-center\">";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "experience", array()), "html", null, true);
                echo "</td>
                                    <td class=\"text-center\">\t
                                        <img src=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["joueur"], "avatar", array())), "html", null, true);
                echo "\"  alt=\"\" data-src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["joueur"], "avatar", array())), "html", null, true);
                echo "\" data-src-retina=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["joueur"], "avatar", array())), "html", null, true);
                echo "\" width=\"69\" height=\"69\" /> 

                                    </td>
                                    <td class=\"text-center\">
                                        ";
                // line 154
                if (($this->getAttribute($context["joueur"], "niveau", array()) == "International")) {
                    // line 155
                    echo "                                            <span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "niveau", array()), "html", null, true);
                    echo "</span>
                                        ";
                } else {
                    // line 157
                    echo "                                            <span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "niveau", array()), "html", null, true);
                    echo "</span>
                                        ";
                }
                // line 159
                echo "
                                    </td>
                                </tr>



                                ";
            }
            // line 166
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                        </tbody>
                    </table>

                        </div>
                    <div class=\"form-actions\"> 
                        ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                    </div>
                </form>
            </div>
        </div>
    </div>  
                        <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                        <script type=\"text/javascript\">
                     
             jQuery(document).ready(function(){
                 
                        \$(\"#form_datedebut_year\").change(function(){
                              var select = document.getElementById(\"form_datedebut_year\");
                            var select2 = document.getElementById(\"form_datefin_year\");
                            var select3 = document.getElementById(\"form_datedebut_month\");
                            var select4 = document.getElementById(\"form_datefin_month\");
                            if ( select.options[select.selectedIndex].value > select2.options[select2.selectedIndex].value && select3.options[select3.selectedIndex].value > select4.options[select4.selectedIndex].value ) 
                             {
                                \$(\"#form_Suivant\").prop('disabled', true);
                                 alert(\"Date invalide !\");
                            }else
                            {
                                \$(\"#form_Suivant\").prop('disabled', false);
                            }
                          
                           
                        });
                           \$(\"#form_datefin_year\").change(function(){
                            
                            var select = document.getElementById(\"form_datedebut_year\");
                            var select2 = document.getElementById(\"form_datefin_year\");
                            var select3 = document.getElementById(\"form_datedebut_month\");
                            var select4 = document.getElementById(\"form_datefin_month\");
                            if ( select.options[select.selectedIndex].value > select2.options[select2.selectedIndex].value && select3.options[select3.selectedIndex].value > select4.options[select4.selectedIndex].value) 
                            {
                                \$(\"#form_Suivant\").prop('disabled', true);
                                 alert(\"Date invalide !\");
                            }else
                            {
                                \$(\"#form_Suivant\").prop('disabled', false);
                            }
                          
                           
                        });
                             \$(\"#form_datedebut_month\").change(function(){
                              var select = document.getElementById(\"form_datedebut_year\");
                            var select2 = document.getElementById(\"form_datefin_year\");
                            var select3 = document.getElementById(\"form_datedebut_month\");
                            var select4 = document.getElementById(\"form_datefin_month\");
                            if ( select.options[select.selectedIndex].value > select2.options[select2.selectedIndex].value && select3.options[select3.selectedIndex].value > select4.options[select4.selectedIndex].value) 
                             {
                                \$(\"#form_Suivant\").prop('disabled', true);
                                 alert(\"Date invalide !\");
                            }else
                            {
                                \$(\"#form_Suivant\").prop('disabled', false);
                            }
                          
                           
                        });


                         \$(\"#form_datefin_month\").change(function(){
                             var select = document.getElementById(\"form_datedebut_year\");
                            var select2 = document.getElementById(\"form_datefin_year\");
                            var select3 = document.getElementById(\"form_datedebut_month\");
                            var select4 = document.getElementById(\"form_datefin_month\");
                            if ( select.options[select.selectedIndex].value > select2.options[select2.selectedIndex].value && select3.options[select3.selectedIndex].value > select4.options[select4.selectedIndex].value) 
                              {
                                \$(\"#form_Suivant\").prop('disabled', true);
                                alert(\"Date invalide !\");
                            }else
                            {
                                \$(\"#form_Suivant\").prop('disabled', false);
                            }
                          
                           
                        });
       });
                  
               
                
                            </script>

";
    }

    // line 259
    public function block_userInfo($context, array $blocks = array())
    {
        // line 260
        echo "    Personne 1
";
    }

    // line 263
    public function block_js($context, array $blocks = array())
    {
        // line 264
        echo "    
    <script>
        
                
        function tito(test)
        {
            
            
            var ts = test.substring(8,test.length);
           if (document.getElementById(test).checked)
           {
               \$(\"#form_joueurs_\"+ts).attr('checked',true);
               
           }else
           {
               \$(\"#form_joueurs_\"+ts).attr('checked',false);
           }

            

        }
   

    </script>
";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:competitonAjout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 264,  399 => 263,  394 => 260,  391 => 259,  308 => 179,  298 => 172,  285 => 166,  276 => 159,  270 => 157,  264 => 155,  262 => 154,  251 => 150,  246 => 148,  239 => 146,  233 => 143,  223 => 140,  218 => 137,  215 => 136,  211 => 135,  178 => 105,  164 => 94,  159 => 92,  150 => 86,  133 => 72,  122 => 64,  111 => 56,  99 => 47,  80 => 30,  77 => 29,  68 => 23,  64 => 22,  55 => 16,  51 => 15,  42 => 9,  38 => 8,  34 => 6,  31 => 5,  11 => 2,);
    }
}
/* */
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
/* */
/*     <div class="col-md-12">*/
/*         <div class="grid simple">*/
/*             <div class="grid-title no-border">*/
/*                 <h4>Gestion de<span class="semi-bold"> Competitions</span></h4>*/
/*                 <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*             </div>*/
/*             <div class="grid-body no-border">*/
/*                 <form method="POST">*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="form-label">Libelle</label>*/
/*                         <span class="help">e.g. "Rolland Garros"</span>*/
/*                         <div class="input-with-icon  right">                                       */
/*                             <i class=""></i>*/
/*                             <!-- <input type="text" name="form1Amount" id="form1Amount" class="form-control">  -->*/
/*                             {{ form_widget(form.libelle) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="form-label">Nombre de points</label>*/
/*                         <span class="help">e.g. "63"</span>*/
/*                         <div class="input-with-icon  right">                                       */
/*                             <i class=""></i>*/
/*                             <!-- <input type="text" name="form1CardHolderName" id="form1CardHolderName" class="form-control">  -->*/
/*                             {{ form_widget(form.nbrpoints) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="form-label">Date Debut</label>z*/
/*                         <span class="help">e.g. "01/01/2000"</span>*/
/* */
/*                         <!-- <input style="" type="text" class="form-control" id="sandbox-advance"> -->*/
/*                         {{ form_widget(form.datedebut) }}*/
/* */
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="form-label">Date Fin</label>*/
/*                         <span class="help">e.g. "02/02/2000"</span>*/
/* */
/*                         <!-- <input style="" type="text" class="form-control" id="sandbox-advance"> -->*/
/*                         {{ form_widget(form.datefin) }}*/
/* */
/* */
/*                     </div>*/
/*                     </br>*/
/*                     <div class="form-group">*/
/* */
/* */
/* */
/*                         <div class="row form-row">*/
/*                             <div class="col-md-4">*/
/* */
/*                                 <label class="form-label">Niveau</label>*/
/*                                 <i class=""></i>*/
/*                                 {{ form_widget(form.niveau) }}*/
/*                             </div>*/
/*                             <div class="col-md-4">*/
/* */
/*                                 <label class="form-label">Categorie</label>*/
/*                                 <i class=""></i>*/
/*                                 {{ form_widget(form.categorie) }}*/
/* */
/*                                 {{ form_widget(form.joueurs) }}*/
/*                             </div>*/
/* */
/* */
/*                             <div class="col-md-4">      */
/* */
/* */
/* */
/*                                 <label class="form-label">Type</label>*/
/*                                 <i class=""></i>*/
/* */
/*                                 {{ form_widget(form.type) }}*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         */
/*                     </div> */
/*                     </br>*/
/*                         </br></br></br>*/
/*                         <div class="form-group">*/
/*                     <label class="form-label">Liste des Joueurs</label>*/
/*                     <i class=""></i>*/
/*                     */
/*                     <table class="table table-bordered no-more-tables">*/
/*                         <thead>*/
/*                             <tr class="">*/
/*                                 <th style="width:1%">*/
/*                         <div class="checkbox check-default">*/
/*                             <input id="checkbox20" value="1" class="checkall" type="checkbox">*/
/*                             <label for="checkbox20"></label>*/
/*                         </div>*/
/*                         </th>*/
/*                         <th class="text-center" style="width:12%">Nom et prenom</th>*/
/*                         <th class="text-center" style="width:6%">Age</th>*/
/*                         <th class="text-center" style="width:6%">Experience</th>*/
/*                         <th class="text-center" style="width:10%">Avatar</th>*/
/*                         <th class="text-center" style="width:6%">Niveau</th>*/
/* */
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for joueur in joueurs %}*/
/*                                     {% if joueur.nom != "aux" %}*/
/*                                 <tr class="">*/
/*                                     <td>*/
/*                                         <div class="checkbox check-default">*/
/*                                             <input onclick="tito('checkbox{{joueur.idpersonne}}')" id="checkbox{{joueur.idpersonne}}" value="{{joueur.idpersonne}}" type="checkbox">*/
/* */
/* */
/*                                             <label for="checkbox{{joueur.idpersonne}}"></label>*/
/*                                         </div>*/
/*                                     </td>*/
/*                                     <td class="text-center">{{joueur.nom}} {{joueur.prenom}}</td>*/
/*                                     <td class="text-center">29</td>*/
/*                                     <td class="text-center">{{joueur.experience}}</td>*/
/*                                     <td class="text-center">	*/
/*                                         <img src="{{ asset(joueur.avatar) }}"  alt="" data-src="{{ asset(joueur.avatar) }}" data-src-retina="{{ asset(joueur.avatar) }}" width="69" height="69" /> */
/* */
/*                                     </td>*/
/*                                     <td class="text-center">*/
/*                                         {% if joueur.niveau == 'International' %}*/
/*                                             <span class="label label-success">{{joueur.niveau}}</span>*/
/*                                         {% else %}*/
/*                                             <span class="label label-important">{{joueur.niveau}}</span>*/
/*                                         {% endif %}*/
/* */
/*                                     </td>*/
/*                                 </tr>*/
/* */
/* */
/* */
/*                                 {% endif %}*/
/*                             {% endfor %} */
/*                         </tbody>*/
/*                     </table>*/
/* */
/*                         </div>*/
/*                     <div class="form-actions"> */
/*                         {{ form_rest(form) }}*/
/* */
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>  */
/*                         <script src="{{ asset('backEnd/assets/plugins/jquery-1.8.3.min.js') }}" type="text/javascript"></script>*/
/*                         <script type="text/javascript">*/
/*                      */
/*              jQuery(document).ready(function(){*/
/*                  */
/*                         $("#form_datedebut_year").change(function(){*/
/*                               var select = document.getElementById("form_datedebut_year");*/
/*                             var select2 = document.getElementById("form_datefin_year");*/
/*                             var select3 = document.getElementById("form_datedebut_month");*/
/*                             var select4 = document.getElementById("form_datefin_month");*/
/*                             if ( select.options[select.selectedIndex].value > select2.options[select2.selectedIndex].value && select3.options[select3.selectedIndex].value > select4.options[select4.selectedIndex].value ) */
/*                              {*/
/*                                 $("#form_Suivant").prop('disabled', true);*/
/*                                  alert("Date invalide !");*/
/*                             }else*/
/*                             {*/
/*                                 $("#form_Suivant").prop('disabled', false);*/
/*                             }*/
/*                           */
/*                            */
/*                         });*/
/*                            $("#form_datefin_year").change(function(){*/
/*                             */
/*                             var select = document.getElementById("form_datedebut_year");*/
/*                             var select2 = document.getElementById("form_datefin_year");*/
/*                             var select3 = document.getElementById("form_datedebut_month");*/
/*                             var select4 = document.getElementById("form_datefin_month");*/
/*                             if ( select.options[select.selectedIndex].value > select2.options[select2.selectedIndex].value && select3.options[select3.selectedIndex].value > select4.options[select4.selectedIndex].value) */
/*                             {*/
/*                                 $("#form_Suivant").prop('disabled', true);*/
/*                                  alert("Date invalide !");*/
/*                             }else*/
/*                             {*/
/*                                 $("#form_Suivant").prop('disabled', false);*/
/*                             }*/
/*                           */
/*                            */
/*                         });*/
/*                              $("#form_datedebut_month").change(function(){*/
/*                               var select = document.getElementById("form_datedebut_year");*/
/*                             var select2 = document.getElementById("form_datefin_year");*/
/*                             var select3 = document.getElementById("form_datedebut_month");*/
/*                             var select4 = document.getElementById("form_datefin_month");*/
/*                             if ( select.options[select.selectedIndex].value > select2.options[select2.selectedIndex].value && select3.options[select3.selectedIndex].value > select4.options[select4.selectedIndex].value) */
/*                              {*/
/*                                 $("#form_Suivant").prop('disabled', true);*/
/*                                  alert("Date invalide !");*/
/*                             }else*/
/*                             {*/
/*                                 $("#form_Suivant").prop('disabled', false);*/
/*                             }*/
/*                           */
/*                            */
/*                         });*/
/* */
/* */
/*                          $("#form_datefin_month").change(function(){*/
/*                              var select = document.getElementById("form_datedebut_year");*/
/*                             var select2 = document.getElementById("form_datefin_year");*/
/*                             var select3 = document.getElementById("form_datedebut_month");*/
/*                             var select4 = document.getElementById("form_datefin_month");*/
/*                             if ( select.options[select.selectedIndex].value > select2.options[select2.selectedIndex].value && select3.options[select3.selectedIndex].value > select4.options[select4.selectedIndex].value) */
/*                               {*/
/*                                 $("#form_Suivant").prop('disabled', true);*/
/*                                 alert("Date invalide !");*/
/*                             }else*/
/*                             {*/
/*                                 $("#form_Suivant").prop('disabled', false);*/
/*                             }*/
/*                           */
/*                            */
/*                         });*/
/*        });*/
/*                   */
/*                */
/*                 */
/*                             </script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block userInfo %}*/
/*     Personne 1*/
/* {% endblock %}*/
/* */
/* {% block js %}*/
/*     */
/*     <script>*/
/*         */
/*                 */
/*         function tito(test)*/
/*         {*/
/*             */
/*             */
/*             var ts = test.substring(8,test.length);*/
/*            if (document.getElementById(test).checked)*/
/*            {*/
/*                $("#form_joueurs_"+ts).attr('checked',true);*/
/*                */
/*            }else*/
/*            {*/
/*                $("#form_joueurs_"+ts).attr('checked',false);*/
/*            }*/
/* */
/*             */
/* */
/*         }*/
/*    */
/* */
/*     </script>*/
/* {% endblock %}*/
