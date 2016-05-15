<?php

/* wyshybackNavBundle:Nav:ModifEvent.html.twig */
class __TwigTemplate_7c42d077cb34adc55c03f9f0fab4a87e7cedf16a9f99bfbec3266ae0e463a500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:ModifEvent.html.twig", 1);
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
        echo "        <li class=\"\"> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("tft_addMedecin");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Ajouter Medecin</span> </a> </li>
        <li class=\"\">  <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("tft_listMedecin");
        echo "\"><i class=\"fa fa-th\"></i> <span class=\"title\">Liste Les Medecins</span> </a> </li> 
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <center>
    <h1> Modifier Evenement</h1>
 <form method='POST' action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_modifEvent", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "idevenement", array()))), "html", null, true);
        echo "\" >
        
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        
    </form>
    </center>
";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:ModifEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  50 => 11,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* {% block menu %}*/
/*         <li class=""> <a href="{{path('tft_addMedecin')}}"> <i class="fa fa-th"></i> <span class="title">Ajouter Medecin</span> </a> </li>*/
/*         <li class="">  <a href="{{path('tft_listMedecin')}}"><i class="fa fa-th"></i> <span class="title">Liste Les Medecins</span> </a> </li> */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <center>*/
/*     <h1> Modifier Evenement</h1>*/
/*  <form method='POST' action="{{path('tft_modifEvent',{id:event.idevenement})}}" >*/
/*         */
/*         {{ form_widget (form) }}*/
/*         */
/*     </form>*/
/*     </center>*/
/* {% endblock %}*/
/* */
