<?php

/* wyshybackNavBundle:Nav:ModifActu.html.twig */
class __TwigTemplate_3f3009dfca7b1793e0c76fbfb7dc12d1442fe9074e69cee1c6297a8fcfd00a2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:ModifActu.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <center>
    <h1> Modifier Actualite</h1>
 <form method='POST' action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_modifactu", array("id" => $this->getAttribute((isset($context["actu"]) ? $context["actu"] : $this->getContext($context, "actu")), "idactualite", array()))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
        
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        
    </form>
    </center>
";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:ModifActu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  35 => 7,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* */
/* {% block content %}*/
/*     <center>*/
/*     <h1> Modifier Actualite</h1>*/
/*  <form method='POST' action="{{path('tft_modifactu',{id:actu.idactualite})}}" {{ form_enctype(form) }} >*/
/*         */
/*         {{ form_widget (form) }}*/
/*         */
/*     </form>*/
/*     </center>*/
/* {% endblock %}*/
/* */
