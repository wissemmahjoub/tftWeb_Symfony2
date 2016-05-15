<?php

/* wyshynavFrontBundle:Default:layout.html.twig */
class __TwigTemplate_f43a28df03de2d8251dd047649fab22ee96222bb02c92d72711aa10f803abdcf extends Twig_Template
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
