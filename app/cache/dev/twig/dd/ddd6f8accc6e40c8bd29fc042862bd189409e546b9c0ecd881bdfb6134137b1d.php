<?php

/* wyshybackNavBundle:Nav:AfficheDossier.html.twig */
class __TwigTemplate_4632bf1dc70b92f719d063de3b2c66d3825ea5cd881c31c3a5a25289e829eda1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:AfficheDossier.html.twig", 1);
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
        echo " <li class=\"\"> <a href=\"javascript:;\"> <i class=\"fa fa-file-text\"></i> <span class=\"title\">Dossier Medical</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("tft_addDossier");
        echo "\"> Ajouter </a> </li>
            <li > <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tft_ListerDossier");
        echo "\"> Afficher </a> </li>
          </ul>
        </li>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "<center>
<div class=\"grid simple\">
    
<div class=\"grid-title no-border\">
              <h4>Liste des Dossiers <span class=\"semi-bold\">  medicaux</span></h4>
              <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
 
<div class=\"grid-body no-border\">
 
<div class=\"grid simple \">
   <table class=\"table table-hover no-more-tables\" id=\"example2\" >
                <thead>
                  <tr>
                    <th>Reference</th>
                    <th>Joueur </th>
                    <th>Fumeur </th>
                    <th>Poid </th>               
                    <th>Situation </th>
                    <th>Nombre d'enfants </th>
                    <th>Maladie</th>
                    <th>Date derniere visite</th>
                    <th>sang</th>
                    <th>Details</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                  </tr>
                </thead>
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Dossiers"]) ? $context["Dossiers"] : $this->getContext($context, "Dossiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["D"]) {
            // line 41
            echo "                <tbody>
                    <tr class=\"odd gradeX\">
                    <td>RF";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["D"], "iddossier", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["D"], "Personne", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["D"], "fumeur", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["D"], "poid", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["D"], "situation", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["D"], "nbenfant", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["D"], "maladie", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["D"], "datederniervisite", array()), "y/m/d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["D"], "sang", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_DetailsDossier", array("iddossier" => $this->getAttribute($context["D"], "iddossier", array()))), "html", null, true);
            echo "\" class=\"fa fa-file-text\" ></a></td>
                    <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_UpdateDossier", array("iddossier" => $this->getAttribute($context["D"], "iddossier", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-small\">Modifier</a></td>
                    <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_DeleteDossier", array("iddossier" => $this->getAttribute($context["D"], "iddossier", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-small\" onclick=\"return confirm('Etes-vous sur de supprimer ce Dossier ?')  \">Supprimer</a></td>
                    </tr>
                </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['D'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo " 
    </table>
</div>    \t\t
</div>
</div>
  
</center>
    
  
 ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:AfficheDossier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 57,  133 => 54,  129 => 53,  125 => 52,  121 => 51,  117 => 50,  113 => 49,  109 => 48,  105 => 47,  101 => 46,  97 => 45,  93 => 44,  89 => 43,  85 => 41,  81 => 40,  51 => 12,  48 => 11,  40 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* {% block menu %}*/
/*  <li class=""> <a href="javascript:;"> <i class="fa fa-file-text"></i> <span class="title">Dossier Medical</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li > <a href="{{path('tft_addDossier')}}"> Ajouter </a> </li>*/
/*             <li > <a href="{{path('tft_ListerDossier')}}"> Afficher </a> </li>*/
/*           </ul>*/
/*         </li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <center>*/
/* <div class="grid simple">*/
/*     */
/* <div class="grid-title no-border">*/
/*               <h4>Liste des Dossiers <span class="semi-bold">  medicaux</span></h4>*/
/*               <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*             </div>*/
/*  */
/* <div class="grid-body no-border">*/
/*  */
/* <div class="grid simple ">*/
/*    <table class="table table-hover no-more-tables" id="example2" >*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <th>Reference</th>*/
/*                     <th>Joueur </th>*/
/*                     <th>Fumeur </th>*/
/*                     <th>Poid </th>               */
/*                     <th>Situation </th>*/
/*                     <th>Nombre d'enfants </th>*/
/*                     <th>Maladie</th>*/
/*                     <th>Date derniere visite</th>*/
/*                     <th>sang</th>*/
/*                     <th>Details</th>*/
/*                     <th>Modifier</th>*/
/*                     <th>Supprimer</th>*/
/*                   </tr>*/
/*                 </thead>*/
/*     {% for D in Dossiers %}*/
/*                 <tbody>*/
/*                     <tr class="odd gradeX">*/
/*                     <td>RF{{D.iddossier}}</td>*/
/*                     <td>{{D.Personne}}</td>*/
/*                     <td>{{D.fumeur}}</td>*/
/*                     <td>{{D.poid}}</td>*/
/*                     <td>{{D.situation}} </td>*/
/*                     <td>{{D.nbenfant}}</td>*/
/*                     <td>{{D.maladie}}</td>*/
/*                     <td>{{D.datederniervisite|date('y/m/d')}}</td>*/
/*                     <td>{{D.sang}}</td>*/
/*                     <td><a href="{{path('tft_DetailsDossier',{iddossier:D.iddossier})}}" class="fa fa-file-text" ></a></td>*/
/*                     <td><a href="{{path('tft_UpdateDossier',{iddossier:D.iddossier})}}" class="btn btn-primary btn-small">Modifier</a></td>*/
/*                     <td><a href="{{path('tft_DeleteDossier',{iddossier:D.iddossier})}}" class="btn btn-danger btn-small" onclick="return confirm('Etes-vous sur de supprimer ce Dossier ?')  ">Supprimer</a></td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*     {% endfor %} */
/*     </table>*/
/* </div>    		*/
/* </div>*/
/* </div>*/
/*   */
/* </center>*/
/*     */
/*   */
/*  {% endblock %}*/
