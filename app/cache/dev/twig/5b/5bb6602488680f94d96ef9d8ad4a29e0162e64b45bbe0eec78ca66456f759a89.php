<?php

/* wyshybackNavBundle:Nav:gumble.html.twig */
class __TwigTemplate_49fab283ac180d0f46f9cbc03bbcb5977eee8b93599c00429a72dcd5b44468a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:gumble.html.twig", 1);
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

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "    <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Pari en ligne</span> <span class=\"arrow \"></span></a> 
        <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AfficherComp");
        echo "\"> Parier </a> </li>
            <li > <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AjouterComp");
        echo "\"> Historique </a> </li>
        </ul>

    </li>
    
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<center>
<h1> Liste des matchs disponible </h1>

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
                     <th>Joueur 1</th>
                    <th>Joueur 2</th>
                    <th>Date du match</th>
                  </tr>
                </thead>
                ";
        // line 40
        $context["i"] = 0;
        // line 41
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Matchs"]) ? $context["Matchs"] : $this->getContext($context, "Matchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["Match"]) {
            // line 42
            echo "                <tbody>
                    <tr class=\"odd gradeX\">
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["joueurs1"]) ? $context["joueurs1"] : $this->getContext($context, "joueurs1")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["joueurs2"]) ? $context["joueurs2"] : $this->getContext($context, "joueurs2")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Match"], "datematch", array()), "Y/m/d"), "html", null, true);
            echo " </td>
                    
                      
                    </td>
                      </tr>
                </tbody>
                ";
            // line 52
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 53
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
    </table>
</div>    \t\t
</div>
</div>
  
</center>
 ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:gumble.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 53,  108 => 52,  99 => 46,  95 => 45,  91 => 44,  87 => 42,  82 => 41,  80 => 40,  53 => 15,  50 => 14,  40 => 8,  36 => 7,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* */
/* {% block menu %}*/
/*     <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Pari en ligne</span> <span class="arrow "></span></a> */
/*         <ul class="sub-menu">*/
/*             <li > <a href="{{path('wyshyback_nav_AfficherComp')}}"> Parier </a> </li>*/
/*             <li > <a href="{{path('wyshyback_nav_AjouterComp')}}"> Historique </a> </li>*/
/*         </ul>*/
/* */
/*     </li>*/
/*     */
/* {% endblock %}*/
/* {% block content %}*/
/* <center>*/
/* <h1> Liste des matchs disponible </h1>*/
/* */
/* <div class="grid simple">*/
/*     */
/* <div class="grid-title no-border">*/
/*    <!-- ce div contient 2 bouton (cacher et reduire)*/
/*    <div class="tools"> */
/*         <a href="javascript:;" class="collapse"></a>  */
/*         <a href="javascript:;" class="remove"></a>*/
/*     </div> */
/*    -->*/
/* </div>*/
/*  */
/* <div class="grid-body no-border">*/
/*  */
/* <div class="grid simple ">*/
/*    <table class="table table-striped" id="example2" >*/
/*                 <thead>*/
/*                   <tr>*/
/*                      <th>Joueur 1</th>*/
/*                     <th>Joueur 2</th>*/
/*                     <th>Date du match</th>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 {% set i = 0 %}*/
/*     {% for Match in Matchs %}*/
/*                 <tbody>*/
/*                     <tr class="odd gradeX">*/
/*                     <td>{{joueurs1[i].nom}}</td>*/
/*                     <td>{{joueurs2[i].nom}}</td>*/
/*                     <td>{{Match.datematch|date('Y/m/d')}} </td>*/
/*                     */
/*                       */
/*                     </td>*/
/*                       </tr>*/
/*                 </tbody>*/
/*                 {% set i = i + 1 %}*/
/*     {% endfor %} */
/*     </table>*/
/* </div>    		*/
/* </div>*/
/* </div>*/
/*   */
/* </center>*/
/*  {% endblock %}*/
/* */
