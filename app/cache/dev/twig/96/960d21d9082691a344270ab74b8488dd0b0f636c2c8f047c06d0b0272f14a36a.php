<?php

/* wyshybackNavBundle:Graphe:histogramme.html.twig */
class __TwigTemplate_9e6686e1c2c613a3f75847caad24639e67719748df349743b6d7bdd1954b2652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Graphe:histogramme.html.twig", 1);
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

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "  <li class=\"\"> <a href=\"javascript:;\"> <i class=\"fa fa-bar-chart-o\"></i> <span class=\"title\">Statistique</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li> <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("_grapheChartLine");
        echo "\">  LineChart   </a> </li>
            <li> <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_grapheHistogramme");
        echo "\">  Histograme   </a> </li>
            <li> <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_graphePie");
        echo "\">  Pie   </a> </li>
           </ul>
  </li>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>

<script type=\"text/javascript\">

 ";
        // line 18
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "

</script>

<div id=\"container\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Graphe:histogramme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  55 => 12,  52 => 11,  44 => 7,  40 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* {% block menu %}*/
/*   <li class=""> <a href="javascript:;"> <i class="fa fa-bar-chart-o"></i> <span class="title">Statistique</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li> <a href="{{path('_grapheChartLine')}}">  LineChart   </a> </li>*/
/*             <li> <a href="{{path('_grapheHistogramme')}}">  Histograme   </a> </li>*/
/*             <li> <a href="{{path('_graphePie')}}">  Pie   </a> </li>*/
/*            </ul>*/
/*   </li>*/
/* {% endblock %}*/
/* {% block content %}*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/* <script src="//code.highcharts.com/4.0.1/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script>*/
/* */
/* <script type="text/javascript">*/
/* */
/*  {{ chart(chart) }}*/
/* */
/* </script>*/
/* */
/* <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* {% endblock %}*/
