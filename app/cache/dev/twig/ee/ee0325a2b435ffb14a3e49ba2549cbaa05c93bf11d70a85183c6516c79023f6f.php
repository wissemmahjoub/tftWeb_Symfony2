<?php

/* wyshybackNavBundle:Nav:AfficheEvent.html.twig */
class __TwigTemplate_9a287722f7d7286eadef8e16b25ed345d61082a496b692e6ef2d37f63c773e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:AfficheEvent.html.twig", 1);
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
        echo "        <li class=\"\"> <a href=\"javascript:;\"> <i class=\"icon-custom-extra\"></i> <span class=\"title\">Medecin</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tft_addMedecin");
        echo "\"> Ajouter </a> </li>
          </ul>
        </li>
        <li class=\"\"> <a href=\"javascript:;\"> <i class=\"icon-custom-extra\"></i> <span class=\"title\">Evenement</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("tft_addMedecin");
        echo "\"> Ajouter </a> </li>
          </ul>
        </li>
      
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "<center>
<h1> Liste des Evenements </h1>

<div class=\"grid simple\">
    
<div class=\"grid-title no-border\">
   <!-- ce div contient 2 bouton (cacher et reduire)
   <div class=\"tools\"> 
        <a href=\"javascript:;\" class=\"collapse\"></a>  
        <a href=\"javascript:;\" class=\"remove\"></a>
    </div> 
   -->
</div>
 
<div class=\"grid-body no-border\">
 
<div class=\"grid simple \">
   <table class=\"table table-striped\" id=\"example2\" >
                <thead>
                  <tr>
                    <th>Libelle</th>
                    <th>Lieu </th>
                    <th>Date de Debut </th>
                    <th>Date de Fin </th> 
                  
                    <th>Modifier </th>
                    <th>Supprimer</th>
                   
                  </tr>
                </thead>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 49
            echo "                <tbody>
                    <tr class=\"odd gradeX\">
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "libelle", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "lieu", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "datedebut", array()), "Y/m/d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "datefin", array()), "Y/m/d"), "html", null, true);
            echo "</td>
              
                    <td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_modifEvent", array("id" => $this->getAttribute($context["event"], "idevenement", array()))), "html", null, true);
            echo " \" class='btn btn-info btn-small'>Modifier</a></td>

                <td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_deleteEvent", array("id" => $this->getAttribute($context["event"], "idevenement", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes-vous sur de supprimer cet Evenement ?')\" class='btn btn-danger btn-small'>Supprimer</a></td>


                  </tr>
                </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
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
        return "wyshybackNavBundle:Nav:AfficheEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 63,  118 => 58,  113 => 56,  108 => 54,  104 => 53,  100 => 52,  96 => 51,  92 => 49,  88 => 48,  56 => 18,  53 => 17,  44 => 11,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* {% block menu %}*/
/*         <li class=""> <a href="javascript:;"> <i class="icon-custom-extra"></i> <span class="title">Medecin</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li > <a href="{{path('tft_addMedecin')}}"> Ajouter </a> </li>*/
/*           </ul>*/
/*         </li>*/
/*         <li class=""> <a href="javascript:;"> <i class="icon-custom-extra"></i> <span class="title">Evenement</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li > <a href="{{path('tft_addMedecin')}}"> Ajouter </a> </li>*/
/*           </ul>*/
/*         </li>*/
/*       */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <center>*/
/* <h1> Liste des Evenements </h1>*/
/* */
/* <div class="grid simple">*/
/*     */
/* <div class="grid-title no-border">*/
/*    <!-- ce div contient 2 bouton (cacher et reduire)*/
/*    <div class="tools"> */
/*         <a href="javascript:;" class="collapse"></a>  */
/*         <a href="javascript:;" class="remove"></a>*/
/*     </div> */
/*    -->*/
/* </div>*/
/*  */
/* <div class="grid-body no-border">*/
/*  */
/* <div class="grid simple ">*/
/*    <table class="table table-striped" id="example2" >*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <th>Libelle</th>*/
/*                     <th>Lieu </th>*/
/*                     <th>Date de Debut </th>*/
/*                     <th>Date de Fin </th> */
/*                   */
/*                     <th>Modifier </th>*/
/*                     <th>Supprimer</th>*/
/*                    */
/*                   </tr>*/
/*                 </thead>*/
/*     {% for event in events %}*/
/*                 <tbody>*/
/*                     <tr class="odd gradeX">*/
/*                     <td>{{event.libelle}}</td>*/
/*                     <td>{{event.lieu}} </td>*/
/*                     <td>{{event.datedebut|date('Y/m/d')}}</td>*/
/*                     <td>{{event.datefin|date('Y/m/d')}}</td>*/
/*               */
/*                     <td><a href="{{path('tft_modifEvent',{id:event.idevenement})}} " class='btn btn-info btn-small'>Modifier</a></td>*/
/* */
/*                 <td><a href="{{path('tft_deleteEvent',{id:event.idevenement})}}" onclick="return confirm('Etes-vous sur de supprimer cet Evenement ?')" class='btn btn-danger btn-small'>Supprimer</a></td>*/
/* */
/* */
/*                   </tr>*/
/*                 </tbody>*/
/*     {% endfor %} */
/*     </table>*/
/* </div>    		*/
/* </div>*/
/* </div>*/
/*   */
/* </center>*/
/*  {% endblock %}*/
