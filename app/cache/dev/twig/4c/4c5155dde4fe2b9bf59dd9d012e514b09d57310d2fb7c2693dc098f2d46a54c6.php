<?php

/* wyshybackNavBundle:Graphe:pie.html.twig */
class __TwigTemplate_bfa4559938a05ae6606cd6a98dec0ec3f0b279099fad325056882c7eeff35cd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Graphe:pie.html.twig", 1);
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
              ";
        // line 7
        echo "            <li> <a href=\"";
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
        echo "              
<div id=\"div_texte1\" style=\"display:none;\">         
<div class=\"alert alert-info\" role=\"alert\">
  <strong>Critere Choisi :</strong> Par Nombre de Points.
</div>
</div>       
         
<div id=\"div_texte2\" style=\"display:none;\">
<div class=\"alert alert-warning\" role=\"alert\">
  <strong>Critere Choisi :</strong> Par Experience.
</div>
</div>       
         
<div id=\"div_texte3\" style=\"display:none;\">

     <div class=\"alert alert-success\" role=\"alert\">
  <strong>Critere Choisi :</strong> Par Age.
</div>
</div>
<script>
    var divPrecedent=document.getElementById('div_texte1');
    function visibilite(divId)
    {
        divPrecedent.style.display='none';
        divPrecedent=document.getElementById(divId);
        divPrecedent.style.display='';
    }
</script>

      <li > <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("_graphePie");
        echo "\" onclick=\"javascript:visibilite('div_texte1');\" class=\" btn btn-danger btn-small\"> Par Nombre de Points </a> </li>
      <li > <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("_graphePie2");
        echo "\"onclick=\"javascript:visibilite('div_texte2');\" class=\" btn btn-dark btn-small\"> Par Experience&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
       <li > <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("_graphePie3");
        echo "\" onclick=\"javascript:visibilite('div_texte3');\" class=\" btn btn-success btn-small\"> Par Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" 

type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>

<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>

<script type=\"text/javascript\">
 ";
        // line 53
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
</script>

<div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Graphe:pie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 53,  87 => 43,  83 => 42,  79 => 41,  48 => 12,  45 => 11,  36 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* {% block menu %}*/
/*   <li class=""> <a href="javascript:;"> <i class="fa fa-bar-chart-o"></i> <span class="title">Statistique</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*               {#    <li> <a href="{{path('_grapheChartLine')}}">  LineChart   </a> </li>*/
/*             <li> <a href="{{path('_grapheHistogramme')}}">  Histograme   </a> </li>#}*/
/*             <li> <a href="{{path('_graphePie')}}">  Pie   </a> </li>*/
/*            </ul>*/
/*   </li>*/
/* {% endblock %}*/
/* {% block content %}*/
/*               */
/* <div id="div_texte1" style="display:none;">         */
/* <div class="alert alert-info" role="alert">*/
/*   <strong>Critere Choisi :</strong> Par Nombre de Points.*/
/* </div>*/
/* </div>       */
/*          */
/* <div id="div_texte2" style="display:none;">*/
/* <div class="alert alert-warning" role="alert">*/
/*   <strong>Critere Choisi :</strong> Par Experience.*/
/* </div>*/
/* </div>       */
/*          */
/* <div id="div_texte3" style="display:none;">*/
/* */
/*      <div class="alert alert-success" role="alert">*/
/*   <strong>Critere Choisi :</strong> Par Age.*/
/* </div>*/
/* </div>*/
/* <script>*/
/*     var divPrecedent=document.getElementById('div_texte1');*/
/*     function visibilite(divId)*/
/*     {*/
/*         divPrecedent.style.display='none';*/
/*         divPrecedent=document.getElementById(divId);*/
/*         divPrecedent.style.display='';*/
/*     }*/
/* </script>*/
/* */
/*       <li > <a href="{{path('_graphePie')}}" onclick="javascript:visibilite('div_texte1');" class=" btn btn-danger btn-small"> Par Nombre de Points </a> </li>*/
/*       <li > <a href="{{path('_graphePie2')}}"onclick="javascript:visibilite('div_texte2');" class=" btn btn-dark btn-small"> Par Experience&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>*/
/*        <li > <a href="{{path('_graphePie3')}}" onclick="javascript:visibilite('div_texte3');" class=" btn btn-success btn-small"> Par Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" */
/* */
/* type="text/javascript"></script>*/
/* */
/* <script src="//code.highcharts.com/4.0.1/highcharts.js"></script>*/
/* */
/* <script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script>*/
/* */
/* <script type="text/javascript">*/
/*  {{ chart(chart) }}*/
/* </script>*/
/* */
/* <div id="piechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* {% endblock %}*/
