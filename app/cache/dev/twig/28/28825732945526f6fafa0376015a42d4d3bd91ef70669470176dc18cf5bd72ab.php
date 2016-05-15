<?php

/* wyshybackNavBundle:Nav:index2.html.twig */
class __TwigTemplate_ad7039fad996b09b31653d472c76aba530243bb5469e813cc190fec5e66aa1e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle:Nav:LocaliserStade.html.twig", "wyshybackNavBundle:Nav:index2.html.twig", 1);
        $this->blocks = array(
            'cont' => array($this, 'block_cont'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "wyshybackNavBundle:Nav:LocaliserStade.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cont($context, array $blocks = array())
    {
        // line 4
        echo "      <input id=\"ville\"  value= \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Stade"]) ? $context["Stade"] : $this->getContext($context, "Stade")), "ville", array()), "html", null, true);
        echo "\" >
   <input id=\"latt\"   value= \"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Stade"]) ? $context["Stade"] : $this->getContext($context, "Stade")), "latitude", array()), "html", null, true);
        echo "\" >
     <input id=\"longg\"  value= \"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Stade"]) ? $context["Stade"] : $this->getContext($context, "Stade")), "longitude", array()), "html", null, true);
        echo "\" >
     <input id=\"libelle\"  value= \"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Stade"]) ? $context["Stade"] : $this->getContext($context, "Stade")), "libellestade", array()), "html", null, true);
        echo "\" >
   
   <div id=\"map\"></div>

  ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  40 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle:Nav:LocaliserStade.html.twig" %}*/
/* */
/*   {% block cont %}*/
/*       <input id="ville"  value= "{{ Stade.ville }}" >*/
/*    <input id="latt"   value= "{{ Stade.latitude }}" >*/
/*      <input id="longg"  value= "{{ Stade.longitude }}" >*/
/*      <input id="libelle"  value= "{{ Stade.libellestade }}" >*/
/*    */
/*    <div id="map"></div>*/
/* */
/*   {% endblock %}    */
/* */
/*     */
/*     */
/* */
