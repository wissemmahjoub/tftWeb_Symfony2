<?php

/* wyshybackNavBundle:Default:index.html.twig */
class __TwigTemplate_0e5f96a8dd00555d3f80fa9ffbde2e6c52c8838276633851350ed93a5d5b58c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle:Default:base.html.twig", "wyshybackNavBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'c' => array($this, 'block_c'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "wyshybackNavBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_c($context, array $blocks = array())
    {
        // line 4
        echo "      
   <div id=\"map\"></div>

  ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle:Default:base.html.twig" %}*/
/* */
/*   {% block c %}*/
/*       */
/*    <div id="map"></div>*/
/* */
/*   {% endblock %}    */
/* */
/*     */
/*     */
/* */
