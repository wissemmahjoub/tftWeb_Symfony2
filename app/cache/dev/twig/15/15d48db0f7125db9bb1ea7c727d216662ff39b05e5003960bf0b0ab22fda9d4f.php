<?php

/* wyshynavFrontBundle:Default:layout.html.twig */
class __TwigTemplate_1699b65933738214d7d2c32975d072110a61b60218df80fb314693211d54d736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("wyshynavFrontBundle::index.html.twig", "wyshynavFrontBundle:Default:layout.html.twig", 2);
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
        return "wyshynavFrontBundle:Default:layout.html.twig";
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
/* {# empty Twig template #}*/
/* {% extends "wyshynavFrontBundle::index.html.twig" %}*/
/* */
/* */
/* */
/* */
/* */
/* */
