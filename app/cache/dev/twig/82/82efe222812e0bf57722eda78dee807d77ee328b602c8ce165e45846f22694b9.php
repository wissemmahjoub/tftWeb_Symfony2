<?php

/* wyshybackNavBundle:Nav:ajoutActu.html.twig */
class __TwigTemplate_22d858326d86ead8865dcac911a7a696c43cefde5571595d2e71f23f601e95a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:ajoutActu.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "

 <fieldset  style=\"width:500px;\">
<legend ><h1>Ajout d'une Actualite</h1></legend>
        
<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("tft_ajoutActu");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "> 
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        

                <div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
</div>

<br>
    <input type=\"submit\" >
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


    </fieldset>
<br>

</center>
 ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:ajoutActu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  51 => 13,  44 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* {% block content %}*/
/* */
/* */
/*  <fieldset  style="width:500px;">*/
/* <legend ><h1>Ajout d'une Actualite</h1></legend>*/
/*         */
/* <form action="{{ path("tft_ajoutActu") }}" method="post" {{ form_enctype(form) }}> */
/*     {{ form_widget(form) }}*/
/*         */
/* */
/*                 <div>*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/* </div>*/
/* */
/* <br>*/
/*     <input type="submit" >*/
/*                     {{ form_rest(form) }}*/
/* */
/* */
/*     </fieldset>*/
/* <br>*/
/* */
/* </center>*/
/*  {% endblock %}*/
/* */
/* */
/* */
/* */
