<?php

/* wyshybackNavBundle:Nav:AfficheMedecin.html.twig */
class __TwigTemplate_d12d8e54140e3e08784b9c9d865d566d42448ff2adbe6bd96973570e93b59f4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:AfficheMedecin.html.twig", 1);
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
      
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<center>
<h1> Liste des Medecins </h1>

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
                     <th>Nom</th>
                    <th>Prenom </th>
                    <th>Cin </th>
                    <th>Login </th> 
                    <th> Datenaissance</th>
                    <th>Salaire</th>
                    <th>Specialite</th>
                    <th>sexe </th>
                    <th>email</th>
                 
                    <th>Modifier </th>
                    <th>Supprimer</th>
                   
                  </tr>
                </thead>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Medecins"]) ? $context["Medecins"] : $this->getContext($context, "Medecins")));
        foreach ($context['_seq'] as $context["_key"] => $context["Medecin"]) {
            // line 49
            echo "                <tbody>
                    <tr class=\"odd gradeX\">
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medecin"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medecin"], "prenom", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medecin"], "cin", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medecin"], "login", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Medecin"], "datenaissance", array()), "Y/m/d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medecin"], "salaire", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medecin"], "specialite", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medecin"], "sexe", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["Medecin"], "email", array()), "html", null, true);
            echo "</td>
                  
                  <td><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_updateMedecin", array("cin" => $this->getAttribute($context["Medecin"], "cin", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                    <td><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_deleteMedecin", array("cin" => $this->getAttribute($context["Medecin"], "cin", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
                 

                  </tr>
                </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Medecin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        return "wyshybackNavBundle:Nav:AfficheMedecin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 67,  134 => 62,  130 => 61,  125 => 59,  121 => 58,  117 => 57,  113 => 56,  109 => 55,  105 => 54,  101 => 53,  97 => 52,  93 => 51,  89 => 49,  85 => 48,  48 => 13,  45 => 12,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
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
/*       */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <center>*/
/* <h1> Liste des Medecins </h1>*/
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
/*                      <th>Nom</th>*/
/*                     <th>Prenom </th>*/
/*                     <th>Cin </th>*/
/*                     <th>Login </th> */
/*                     <th> Datenaissance</th>*/
/*                     <th>Salaire</th>*/
/*                     <th>Specialite</th>*/
/*                     <th>sexe </th>*/
/*                     <th>email</th>*/
/*                  */
/*                     <th>Modifier </th>*/
/*                     <th>Supprimer</th>*/
/*                    */
/*                   </tr>*/
/*                 </thead>*/
/*     {% for Medecin in Medecins %}*/
/*                 <tbody>*/
/*                     <tr class="odd gradeX">*/
/*                     <td>{{Medecin.nom}}</td>*/
/*                     <td>{{Medecin.prenom}} </td>*/
/*                     <td>{{Medecin.cin}}</td>*/
/*                     <td>{{Medecin.login}}</td>*/
/*                     <td>{{Medecin.datenaissance|date('Y/m/d')}}</td>*/
/*                     <td>{{Medecin.salaire}}</td>*/
/*                     <td>{{Medecin.specialite}}</td>*/
/*                     <td>{{Medecin.sexe}}</td>*/
/*                     <td>{{Medecin.email}}</td>*/
/*                   */
/*                   <td><a href="{{path('tft_updateMedecin',{cin:Medecin.cin})}}">Modifier</a></td>*/
/*                     <td><a href="{{path('tft_deleteMedecin',{cin:Medecin.cin})}}">Supprimer</a></td>*/
/*                  */
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
