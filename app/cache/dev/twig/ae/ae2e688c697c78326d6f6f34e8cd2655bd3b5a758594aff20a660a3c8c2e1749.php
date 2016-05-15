<?php

/* wyshybackNavBundle:Nav:Affichecompte.html.twig */
class __TwigTemplate_bb2972f11b4e9797b11d3224478f81fc2414faad6e6c7da5f5d810e36590b326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:Affichecompte.html.twig", 1);
        $this->blocks = array(
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<center>
<h1> Liste des Comptes Rendus </h1>

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
                     <th>Test</th>
                    <th>Libelle </th>
                    <th>Date Création</th>
                    <th>Contenu </th>
                           <th>Supprimer</th>


                  </tr>
                </thead>
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["c"]);
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 36
            echo "                <tbody>
                    <tr class=\"odd gradeX\">
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "test", array()), "html", null, true);
            echo "</td> 
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "libelle", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "datecreation", array()), "Y/m/d"), "html", null, true);
            echo "</td>
                     <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "contenu", array()), "html", null, true);
            echo " </td>
                <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_suppcompte", array("id" => $this->getAttribute($context["c"], "idtestCompterendu", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes-vous sur de supprimer ce Compte Rendu ?')\" class='btn btn-danger btn-small'>Supprimer</a></td>

                  </tr>
                </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        return "wyshybackNavBundle:Nav:Affichecompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 46,  86 => 42,  82 => 41,  78 => 40,  74 => 39,  70 => 38,  66 => 36,  62 => 35,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* */
/* */
/* {% block content %}*/
/* <center>*/
/* <h1> Liste des Comptes Rendus </h1>*/
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
/*                      <th>Test</th>*/
/*                     <th>Libelle </th>*/
/*                     <th>Date Création</th>*/
/*                     <th>Contenu </th>*/
/*                            <th>Supprimer</th>*/
/* */
/* */
/*                   </tr>*/
/*                 </thead>*/
/*     {% for c in c %}*/
/*                 <tbody>*/
/*                     <tr class="odd gradeX">*/
/*                         <td>{{c.test}}</td> */
/*                     <td>{{c.libelle}} </td>*/
/*                     <td>{{c.datecreation|date('Y/m/d')}}</td>*/
/*                      <td>{{c.contenu}} </td>*/
/*                 <td><a href="{{path('tft_suppcompte',{id:c.idtestCompterendu})}}" onclick="return confirm('Etes-vous sur de supprimer ce Compte Rendu ?')" class='btn btn-danger btn-small'>Supprimer</a></td>*/
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
