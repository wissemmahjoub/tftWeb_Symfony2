<?php

/* wyshybackNavBundle:Graphe:LineChart.html.twig */
class __TwigTemplate_3e5320e5c1f1eacbdb319874e16a8a66f565f1bfa6cea04c79eff611d5e55dfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Graphe:LineChart.html.twig", 1);
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
        echo "  <li class=\"\"> <a href=\"javascript:;\"> <i class=\"fa fa-bar-chart-o\"></i> <span class=\"title\">Statistique</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li> <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_grapheChartLine");
        echo "\">  LineChart   </a> </li>
            <li> <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_grapheHistogramme");
        echo "\">  Histograme   </a> </li>
            <li> <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("_graphePie");
        echo "\">  Pie   </a> </li>
           </ul>
  </li>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"
type=\"text/javascript\"></script>
<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>

<script type=\"text/javascript\">

 ";
        // line 21
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "

</script>

<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Graphe:LineChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  55 => 14,  52 => 13,  44 => 8,  40 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* {% block menu %}*/
/*   <li class=""> <a href="javascript:;"> <i class="fa fa-bar-chart-o"></i> <span class="title">Statistique</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li> <a href="{{path('_grapheChartLine')}}">  LineChart   </a> </li>*/
/*             <li> <a href="{{path('_grapheHistogramme')}}">  Histograme   </a> </li>*/
/*             <li> <a href="{{path('_graphePie')}}">  Pie   </a> </li>*/
/*            </ul>*/
/*   </li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"*/
/* type="text/javascript"></script>*/
/* <script src="//code.highcharts.com/4.0.1/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script>*/
/* */
/* <script type="text/javascript">*/
/* */
/*  {{ chart(chart) }}*/
/* */
/* </script>*/
/* */
/* <div id="linechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* {% endblock %}*/
