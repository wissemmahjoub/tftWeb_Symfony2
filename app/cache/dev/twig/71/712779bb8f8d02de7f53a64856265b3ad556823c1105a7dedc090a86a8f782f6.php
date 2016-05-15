<?php

/* wyshynavFrontBundle:Default:login.html.twig */
class __TwigTemplate_9f6d26f6efd53136253eb1cbc4a01459adcfeee79a7bc4e6e8f3b0ff1ad38e46 extends Twig_Template
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
