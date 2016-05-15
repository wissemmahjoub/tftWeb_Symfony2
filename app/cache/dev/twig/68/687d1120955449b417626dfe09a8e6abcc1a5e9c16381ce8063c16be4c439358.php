<?php

/* wyshybackNavBundle:Nav:listerjoueur.html.twig */
class __TwigTemplate_922c3bade00ff86419a604db84942b6e75fb5b2f63e1e47924a15af911d779f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:listerjoueur.html.twig", 1);
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
        echo "       <li class=\"\"> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_addjoueurtodb");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Ajouter un joueur</span> </a> </li>
       <li class=\"\"> <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_listerjoueurs");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Consulter les joueurs</span> </a> </li>
        <li class=\"\"> <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_joueur");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 5</span> </a> </li>
        <li class=\"\"> <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_joueur");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 6</span> <span class=\"label label-important pull-right \">HOT</span></a> </li>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<center>
    <h1> Liste des joueurs </h1>

   

<div class=\"grid simple\">
    
<div class=\"grid-title no-border\">
<div class=\"tools\"> 
    <a href=\"javascript:;\" class=\"collapse\"></a>  
    <a href=\"javascript:;\" class=\"remove\"></a></div>
</div>
 
<div class=\"grid-body no-border\">
 
<div class=\"grid simple \">
    <table class=\"table table-striped\" id=\"example2\" >
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email </th>
                    <th>Sexe </th>
                    <th>Niveau </th> 
                    <th>Modifier </th>
                    <th>Supprimer</th>
                  </tr>
                </thead>
   ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["Personne"]) {
            // line 40
            echo "                <tbody>
                    <tr class=\"odd gradeX\">
                    <td> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["Personne"], "nom", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["Personne"], "prenom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["Personne"], "email", array()), "html", null, true);
            echo " </td>
                    <td class=\"center\"> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["Personne"], "sexe", array()), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["Personne"], "niveau", array()), "html", null, true);
            echo "</td>
                   
                  <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wyshyback_nav_modifierjoueur", array("idpersonne" => $this->getAttribute($context["Personne"], "idpersonne", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                  <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wyshyback_nav_supprimerjoueur", array("idpersonne" => $this->getAttribute($context["Personne"], "idpersonne", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
                 </tr>
                </tbody>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo " 
     </table>
</div>    
     
      

             
\t\t
\t\t\t
 </div>
</div>

         
    

</center>
 ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:listerjoueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 52,  117 => 49,  113 => 48,  108 => 46,  104 => 45,  100 => 44,  96 => 43,  92 => 42,  88 => 40,  84 => 39,  54 => 11,  51 => 10,  45 => 7,  41 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* {% block menu %}*/
/*        <li class=""> <a href="{{ path('wyshyback_nav_addjoueurtodb') }}"> <i class="fa fa-th"></i> <span class="title">Ajouter un joueur</span> </a> </li>*/
/*        <li class=""> <a href="{{ path('wyshyback_nav_listerjoueurs') }}"> <i class="fa fa-th"></i> <span class="title">Consulter les joueurs</span> </a> </li>*/
/*         <li class=""> <a href="{{ path('wyshyback_nav_joueur') }}"> <i class="fa fa-th"></i> <span class="title">Menu 5</span> </a> </li>*/
/*         <li class=""> <a href="{{ path('wyshyback_nav_joueur') }}"> <i class="fa fa-th"></i> <span class="title">Menu 6</span> <span class="label label-important pull-right ">HOT</span></a> </li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <center>*/
/*     <h1> Liste des joueurs </h1>*/
/* */
/*    */
/* */
/* <div class="grid simple">*/
/*     */
/* <div class="grid-title no-border">*/
/* <div class="tools"> */
/*     <a href="javascript:;" class="collapse"></a>  */
/*     <a href="javascript:;" class="remove"></a></div>*/
/* </div>*/
/*  */
/* <div class="grid-body no-border">*/
/*  */
/* <div class="grid simple ">*/
/*     <table class="table table-striped" id="example2" >*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <th>Nom</th>*/
/*                     <th>Prenom</th>*/
/*                     <th>Email </th>*/
/*                     <th>Sexe </th>*/
/*                     <th>Niveau </th> */
/*                     <th>Modifier </th>*/
/*                     <th>Supprimer</th>*/
/*                   </tr>*/
/*                 </thead>*/
/*    {% for Personne in personnes %}*/
/*                 <tbody>*/
/*                     <tr class="odd gradeX">*/
/*                     <td> {{Personne.nom}}</td>*/
/*                     <td> {{Personne.prenom}}</td>*/
/*                     <td>{{Personne.email}} </td>*/
/*                     <td class="center"> {{Personne.sexe}}</td>*/
/*                     <td class="center">{{Personne.niveau}}</td>*/
/*                    */
/*                   <td><a href="{{path('wyshyback_nav_modifierjoueur',{idpersonne:Personne.idpersonne})}}">Modifier</a></td>*/
/*                   <td><a href="{{path('wyshyback_nav_supprimerjoueur',{idpersonne:Personne.idpersonne})}}">Supprimer</a></td>*/
/*                  </tr>*/
/*                 </tbody>*/
/*                    {% endfor %} */
/*      </table>*/
/* </div>    */
/*      */
/*       */
/* */
/*              */
/* 		*/
/* 			*/
/*  </div>*/
/* </div>*/
/* */
/*          */
/*     */
/* */
/* </center>*/
/*  {% endblock %}*/
