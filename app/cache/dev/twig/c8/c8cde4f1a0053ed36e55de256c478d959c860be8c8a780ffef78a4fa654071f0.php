<?php

/* wyshybackNavBundle:Nav:matchs.html.twig */
class __TwigTemplate_f7bc02433e00684407558cc44288068b3b2f71c168e0f3177da3fd1ccefe5cdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:matchs.html.twig", 1);
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




                        <div id=\"notifVrai\"class=\"alert alert-success\" style=\"display:none\">
                            <button class=\"close\" data-dismiss=\"alert\"></button>
                            Le Match a ete:&nbsp; <a href=\"#\" class=\"link\">ajoute</a> avec succes. </div>



                    </div>
                    
                                <div class=\"grid-body no-border\">
                        <form class=\"form-no-horizontal-spacing\" id=\"form-condensed\">\t
                            <div class=\"row column-seperation\">
                                <div class=\"col-md-12\">
                                    <h4>Information</h4>            
                                    <div class=\"row form-row\">

                                        <div class=\"col-md-5\">
                                            <label class=\"form-label\">Joueur 1</label>

                                            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idjoueur1", array()), 'widget');
        echo "
                                            <center>
                                                <img style=\"height:150px; \"id=\"avatar1\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-superbox/img/superbox/superbox-thumb-3.jpg"), "html", null, true);
        echo "\" data-img=\"assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg\" alt=\"\" class=\"superbox-img\">
                                            </center>
                                        </div>

                                        <div class=\"col-md-2\">

                                            <span class=\"semi-bold\"><center><img id=\"\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/profiles/vs.jpg"), "html", null, true);
        echo "\" data-img=\"assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg\" alt=\"\" class=\"superbox-img\">
                                                </center></span>
                                        </div>

                                        <div class=\"col-md-5\">
                                            <label class=\"form-label\">Joueur 2</label>

                                            ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idjoueur2", array()), 'widget');
        echo "
                                            <center>
                                                <img style=\"height:150px;\" id=\"avatar2\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-superbox/img/superbox/superbox-thumb-3.jpg"), "html", null, true);
        echo "\" data-img=\"assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg\" alt=\"\" class=\"superbox-img\">
                                            </center>
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class=\"row form-row\">
                                        <div class=\"col-md-5\">
                                            <label class=\"form-label\">Arbitre</label>
                                            ";
        // line 112
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
        // line 121
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
        // line 130
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
        // line 145
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

    // line 155
    public function block_js($context, array $blocks = array())
    {
        // line 156
        echo "
    <script>
        var j1Eliminated = \"\"
        var j2Eliminated = \"\";

        ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["nbrMatch"]) ? $context["nbrMatch"] : $this->getContext($context, "nbrMatch"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 162
            echo "             if (\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "libelle", array()), "html", null, true);
            echo "\" == sessionStorage.getItem('competition'))
            {

                var arya = JSON.parse(sessionStorage.getItem('joueur1";
            // line 165
            echo twig_escape_filter($this->env, (((isset($context["nbrMatch"]) ? $context["nbrMatch"] : $this->getContext($context, "nbrMatch")) - $context["i"]) . $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "libelle", array())), "html", null, true);
            echo "'));
                var arya2 = JSON.parse(sessionStorage.getItem('joueur2";
            // line 166
            echo twig_escape_filter($this->env, (((isset($context["nbrMatch"]) ? $context["nbrMatch"] : $this->getContext($context, "nbrMatch")) - $context["i"]) . $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "libelle", array())), "html", null, true);
            echo "'));
                if (arya != undefined && arya2 != undefined) {
                    
                    var test = \$(\"#form_idjoueur1 option[value=\" + arya.value + \"]\");
                    var test1 = \$(\"#form_idjoueur2 option[value=\" + arya.value + \"]\");
                    var test2 = \$(\"#form_idjoueur2 option[value=\" + arya2.value + \"]\");
                    var test22 = \$(\"#form_idjoueur1 option[value=\" + arya2.value + \"]\");
                    test.remove();
                    test22.remove();
                    test1.remove();
                    test2.remove();
                }
            }
           
           
           
           
           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                  


            \$(document).ready(function () {

                \$(\"#form_Continuer\").click(function () {
                    alert(\"lazke\");
                    sessionStorage.setItem(\"competition\", \"";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "libelle", array()), "html", null, true);
        echo "\");
                    var select = document.getElementById(\"form_idjoueur1\");
                    var optionSelected = select.options[select.selectedIndex];

                    var vala = {
                        'value': optionSelected.value,
                        'text': optionSelected.text
                    }

                    sessionStorage.setItem(\"joueur1";
        // line 201
        echo twig_escape_filter($this->env, ((isset($context["nbrMatch"]) ? $context["nbrMatch"] : $this->getContext($context, "nbrMatch")) . $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "libelle", array())), "html", null, true);
        echo "\", JSON.stringify(vala));


                    select = document.getElementById(\"form_idjoueur2\");
                    optionSelected = select.options[select.selectedIndex];
                    sessionStorage.setItem(\"joueur2";
        // line 206
        echo twig_escape_filter($this->env, ((isset($context["nbrMatch"]) ? $context["nbrMatch"] : $this->getContext($context, "nbrMatch")) . $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "libelle", array())), "html", null, true);
        echo "\", JSON.stringify({
                        'value': optionSelected.value,
                        'text': optionSelected.text
                    }));


                });





                if (\$('#notif').length != 0)
                {
                    \$('#notifVrai').slideDown();
                }




                \$('#form_idjoueur1').change(function () {

                    if (j2Eliminated !== \"\")
                    {
                        \$(\"#form_idjoueur2\").append(\"<option value=\" + j2Eliminated.value + \">\" + j2Eliminated.text + \"</option>\");

                    }

                    var select = document.getElementById(\"form_idjoueur1\");
                    var optionSelected = select.options[select.selectedIndex];

                    var test = \$(\"#form_idjoueur2 option[value=\" + optionSelected.value + \"]\");
                    test.remove();
                    j2Eliminated = optionSelected;
                    \$('#notifVrai').slideUp();
        ";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 242
            echo "

                    var valeur = select.options[select.selectedIndex].text;

                    if (valeur == '";
            // line 246
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nom", array()), "html", null, true);
            echo "')
                    {
                        \$('#avatar1').attr('src', '";
            // line 248
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["joueur"], "avatar", array())), "html", null, true);
            echo "');
                    }
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "
                });






                \$('#form_idjoueur2').change(function () {


                    if (j1Eliminated !== \"\")
                    {
                        \$(\"#form_idjoueur1\").append(\"<option value=\" + j1Eliminated.value + \">\" + j1Eliminated.text + \"</option>\");

                    }
                    var select = document.getElementById(\"form_idjoueur2\");
                    var optionSelected = select.options[select.selectedIndex];

                    var test = \$(\"#form_idjoueur1 option[value=\" + optionSelected.value + \"]\");
                    test.remove();
                    j1Eliminated = optionSelected;

        ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 275
            echo "

                    var valeur = select.options[select.selectedIndex].text;

                    if (valeur == '";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nom", array()), "html", null, true);
            echo "')
                    {
                        \$('#avatar2').attr('src', '";
            // line 281
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["joueur"], "avatar", array())), "html", null, true);
            echo "');
                    }
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "
                });

            });
    </script>
";
    }

    // line 290
    public function block_userInfo($context, array $blocks = array())
    {
        // line 291
        echo "    Personne 1
";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:matchs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 291,  456 => 290,  447 => 284,  438 => 281,  433 => 279,  427 => 275,  423 => 274,  398 => 251,  389 => 248,  384 => 246,  378 => 242,  374 => 241,  336 => 206,  328 => 201,  316 => 192,  307 => 185,  282 => 166,  278 => 165,  271 => 162,  267 => 161,  260 => 156,  257 => 155,  243 => 145,  225 => 130,  213 => 121,  201 => 112,  189 => 103,  184 => 101,  174 => 94,  165 => 88,  160 => 86,  130 => 59,  125 => 57,  121 => 56,  117 => 55,  113 => 54,  109 => 53,  88 => 35,  80 => 29,  77 => 28,  68 => 22,  64 => 21,  55 => 15,  51 => 14,  42 => 8,  38 => 7,  34 => 5,  31 => 4,  11 => 1,);
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
/* */
/* */
/*                         <div id="notifVrai"class="alert alert-success" style="display:none">*/
/*                             <button class="close" data-dismiss="alert"></button>*/
/*                             Le Match a ete:&nbsp; <a href="#" class="link">ajoute</a> avec succes. </div>*/
/* */
/* */
/* */
/*                     </div>*/
/*                     */
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
/*                                             {{ form_widget(form.idjoueur1) }}*/
/*                                             <center>*/
/*                                                 <img style="height:150px; "id="avatar1" src="{{ asset('backEnd/assets/plugins/jquery-superbox/img/superbox/superbox-thumb-3.jpg') }}" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg" alt="" class="superbox-img">*/
/*                                             </center>*/
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
/* */
/*                                             {{ form_widget(form.idjoueur2) }}*/
/*                                             <center>*/
/*                                                 <img style="height:150px;" id="avatar2" src="{{ asset('backEnd/assets/plugins/jquery-superbox/img/superbox/superbox-thumb-3.jpg') }}" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg" alt="" class="superbox-img">*/
/*                                             </center>*/
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
/*         </div>*/
/*     </form>*/
/* */
/* {% endblock %}*/
/* {% block js %}*/
/* */
/*     <script>*/
/*         var j1Eliminated = ""*/
/*         var j2Eliminated = "";*/
/* */
/*         {% for i in 0..nbrMatch %}*/
/*              if ("{{ competition.libelle }}" == sessionStorage.getItem('competition'))*/
/*             {*/
/* */
/*                 var arya = JSON.parse(sessionStorage.getItem('joueur1{{ (nbrMatch-i) ~ competition.libelle }}'));*/
/*                 var arya2 = JSON.parse(sessionStorage.getItem('joueur2{{ (nbrMatch-i) ~ competition.libelle }}'));*/
/*                 if (arya != undefined && arya2 != undefined) {*/
/*                     */
/*                     var test = $("#form_idjoueur1 option[value=" + arya.value + "]");*/
/*                     var test1 = $("#form_idjoueur2 option[value=" + arya.value + "]");*/
/*                     var test2 = $("#form_idjoueur2 option[value=" + arya2.value + "]");*/
/*                     var test22 = $("#form_idjoueur1 option[value=" + arya2.value + "]");*/
/*                     test.remove();*/
/*                     test22.remove();*/
/*                     test1.remove();*/
/*                     test2.remove();*/
/*                 }*/
/*             }*/
/*            */
/*            */
/*            */
/*            */
/*            */
/*         {% endfor %}*/
/*                   */
/* */
/* */
/*             $(document).ready(function () {*/
/* */
/*                 $("#form_Continuer").click(function () {*/
/*                     alert("lazke");*/
/*                     sessionStorage.setItem("competition", "{{ competition.libelle }}");*/
/*                     var select = document.getElementById("form_idjoueur1");*/
/*                     var optionSelected = select.options[select.selectedIndex];*/
/* */
/*                     var vala = {*/
/*                         'value': optionSelected.value,*/
/*                         'text': optionSelected.text*/
/*                     }*/
/* */
/*                     sessionStorage.setItem("joueur1{{ nbrMatch ~ competition.libelle }}", JSON.stringify(vala));*/
/* */
/* */
/*                     select = document.getElementById("form_idjoueur2");*/
/*                     optionSelected = select.options[select.selectedIndex];*/
/*                     sessionStorage.setItem("joueur2{{ nbrMatch ~ competition.libelle }}", JSON.stringify({*/
/*                         'value': optionSelected.value,*/
/*                         'text': optionSelected.text*/
/*                     }));*/
/* */
/* */
/*                 });*/
/* */
/* */
/* */
/* */
/* */
/*                 if ($('#notif').length != 0)*/
/*                 {*/
/*                     $('#notifVrai').slideDown();*/
/*                 }*/
/* */
/* */
/* */
/* */
/*                 $('#form_idjoueur1').change(function () {*/
/* */
/*                     if (j2Eliminated !== "")*/
/*                     {*/
/*                         $("#form_idjoueur2").append("<option value=" + j2Eliminated.value + ">" + j2Eliminated.text + "</option>");*/
/* */
/*                     }*/
/* */
/*                     var select = document.getElementById("form_idjoueur1");*/
/*                     var optionSelected = select.options[select.selectedIndex];*/
/* */
/*                     var test = $("#form_idjoueur2 option[value=" + optionSelected.value + "]");*/
/*                     test.remove();*/
/*                     j2Eliminated = optionSelected;*/
/*                     $('#notifVrai').slideUp();*/
/*         {% for joueur in joueurs %}*/
/* */
/* */
/*                     var valeur = select.options[select.selectedIndex].text;*/
/* */
/*                     if (valeur == '{{joueur.nom}}')*/
/*                     {*/
/*                         $('#avatar1').attr('src', '{{ asset(joueur.avatar) }}');*/
/*                     }*/
/*         {% endfor %}*/
/* */
/*                 });*/
/* */
/* */
/* */
/* */
/* */
/* */
/*                 $('#form_idjoueur2').change(function () {*/
/* */
/* */
/*                     if (j1Eliminated !== "")*/
/*                     {*/
/*                         $("#form_idjoueur1").append("<option value=" + j1Eliminated.value + ">" + j1Eliminated.text + "</option>");*/
/* */
/*                     }*/
/*                     var select = document.getElementById("form_idjoueur2");*/
/*                     var optionSelected = select.options[select.selectedIndex];*/
/* */
/*                     var test = $("#form_idjoueur1 option[value=" + optionSelected.value + "]");*/
/*                     test.remove();*/
/*                     j1Eliminated = optionSelected;*/
/* */
/*         {% for joueur in joueurs %}*/
/* */
/* */
/*                     var valeur = select.options[select.selectedIndex].text;*/
/* */
/*                     if (valeur == '{{joueur.nom}}')*/
/*                     {*/
/*                         $('#avatar2').attr('src', '{{ asset(joueur.avatar) }}');*/
/*                     }*/
/*         {% endfor %}*/
/* */
/*                 });*/
/* */
/*             });*/
/*     </script>*/
/* {% endblock %}*/
/* {% block userInfo %}*/
/*     Personne 1*/
/* {% endblock %}*/
/* */
