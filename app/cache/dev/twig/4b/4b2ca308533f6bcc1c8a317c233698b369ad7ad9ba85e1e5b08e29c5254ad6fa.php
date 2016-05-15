<?php

/* wyshybackNavBundle:Nav:competitionDetail.html.twig */
class __TwigTemplate_463064dcb7f1cd44e26debbb0b25c626ae5b778131e3df790f7a0fa1da5db992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:competitionDetail.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
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
    public function block_titre($context, array $blocks = array())
    {
        // line 3
        echo "    <title>Detail</title>
    ";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "        <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Competitions</span> <span class=\"arrow \"></span></a> 
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
        echo "  

";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:competitionDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  85 => 30,  75 => 23,  71 => 22,  62 => 16,  58 => 15,  49 => 9,  45 => 8,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* {% block titre %}*/
/*     <title>Detail</title>*/
/*     {% endblock %}*/
/* {% block menu %}*/
/*         <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Competitions</span> <span class="arrow "></span></a> */
/*                          <ul class="sub-menu">*/
/*                             <li > <a href="{{path('wyshyback_nav_AfficherComp')}}"> Lise des competitions </a> </li>*/
/*                             <li > <a href="{{path('wyshyback_nav_AjouterComp')}}">Ajouter une nouvelle</a> </li>*/
/*                           </ul>*/
/*                      */
/*                      </li>*/
/*         <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Competitions</span> <span class="arrow "></span></a> */
/*                          <ul class="sub-menu">*/
/*                             <li > <a href="{{path('wyshyback_nav_AfficherComp')}}"> Lise des competitions </a> </li>*/
/*                             <li > <a href="{{path('wyshyback_nav_AjouterComp')}}">Ajouter une nouvelle</a> </li>*/
/*                           </ul>*/
/*                      */
/*                      </li>*/
/*                      <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Competitions</span> <span class="arrow "></span></a> */
/*                          <ul class="sub-menu">*/
/*                             <li > <a href="{{path('wyshyback_nav_AfficherComp')}}"> Lise des competitions </a> </li>*/
/*                             <li > <a href="{{path('wyshyback_nav_AjouterComp')}}">Ajouter une nouvelle</a> </li>*/
/*                           </ul>*/
/*                      */
/*                      </li>*/
/*       */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*   */
/* */
/* {% endblock %}*/
