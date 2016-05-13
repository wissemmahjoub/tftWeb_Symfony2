<?php

/* wyshynavFrontBundle:Default:layout.html.twig */
class __TwigTemplate_ed138e849346c1d1ff42a65c0bd34690284cc5cc8754140284be6423876a0efa extends Twig_Template
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
