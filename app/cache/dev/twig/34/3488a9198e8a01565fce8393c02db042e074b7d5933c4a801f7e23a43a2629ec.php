<?php

/* wyshynavFrontBundle:Default:login.html.twig */
class __TwigTemplate_9ecf36941e63dec91af0c8fb0940f89930b144c068560968a79d08fb97a3dc9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("wyshynavFrontBundle::index.html.twig", "wyshynavFrontBundle:Default:login.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "wyshynavFrontBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "wyshynavFrontBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }
}
/* */
/* {% extends "wyshynavFrontBundle::index.html.twig" %}*/
/* */
