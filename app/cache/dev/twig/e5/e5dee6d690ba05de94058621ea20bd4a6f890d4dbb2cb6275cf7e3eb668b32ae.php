<?php

/* wyshybackNavBundle:Nav:modifierjoueur.html.twig */
class __TwigTemplate_47dda687d703b2eb3874e1c2a3c4d18f9e39fd35964bb276d90b7283c0fb8fda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:modifierjoueur.html.twig", 1);
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

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "  <li class=\"\"> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_addjoueurtodb");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Ajouter un joueur</span> </a> </li>
   
       ";
        // line 7
        echo "     <li class=\"\"> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_listerjoueurs");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Consulter les joueurs</span> </a> </li>
        <li class=\"\"> <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_joueur");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 5</span> </a> </li>
        <li class=\"\"> <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_joueur");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 6</span> <span class=\"label label-important pull-right \">HOT</span></a> </li>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <h1> Modifier Joueur</h1>
 <form method='POST' action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wyshyback_nav_modifierjoueur", array("idpersonne" => $this->getAttribute((isset($context["personne"]) ? $context["personne"] : $this->getContext($context, "personne")), "idpersonne", array()))), "html", null, true);
        echo "\" >
        
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        
    </form>
";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:modifierjoueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  59 => 14,  56 => 13,  53 => 12,  47 => 9,  43 => 8,  38 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* {% block menu %}*/
/*   <li class=""> <a href="{{ path('wyshyback_nav_addjoueurtodb') }}"> <i class="fa fa-th"></i> <span class="title">Ajouter un joueur</span> </a> </li>*/
/*    */
/*        {# <li class=""> <a href="{{ path('wyshyback_nav_supprimerjoueur') }}"> <i class="fa fa-th"></i> <span class="title">Supprimer un joueur</span> </a> </li>*/
/*    #}     <li class=""> <a href="{{ path('wyshyback_nav_listerjoueurs') }}"> <i class="fa fa-th"></i> <span class="title">Consulter les joueurs</span> </a> </li>*/
/*         <li class=""> <a href="{{ path('wyshyback_nav_joueur') }}"> <i class="fa fa-th"></i> <span class="title">Menu 5</span> </a> </li>*/
/*         <li class=""> <a href="{{ path('wyshyback_nav_joueur') }}"> <i class="fa fa-th"></i> <span class="title">Menu 6</span> <span class="label label-important pull-right ">HOT</span></a> </li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <h1> Modifier Joueur</h1>*/
/*  <form method='POST' action="{{path('wyshyback_nav_modifierjoueur',{idpersonne:personne.idpersonne})}}" >*/
/*         */
/*         {{ form_widget (form) }}*/
/*         */
/*     </form>*/
/* {% endblock %}*/
