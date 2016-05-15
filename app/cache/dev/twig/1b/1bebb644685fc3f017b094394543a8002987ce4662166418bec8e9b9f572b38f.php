<?php

/* wyshybackNavBundle:Nav:AfficheMembres.html.twig */
class __TwigTemplate_edd28f93b0d0b0b19c06c708eacd3c1da5088ffb7fbdf6620b045e3529ec966c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:AfficheMembres.html.twig", 2);
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

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "        <li class=\"\"> <a href=\"javascript:;\"> <i class=\"fa fa-user\"></i> <span class=\"title\">Membres</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("tft_ListerMembres");
        echo "\"> Lister </a> </li>
 
          </ul>
        </li>
      
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<center>

<div class=\"grid simple\">
    
<div class=\"grid-title no-border\">
              <h4>Liste <span class=\"semi-bold\"> des Membres</span></h4>
              <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
 
<div class=\"grid-body no-border\">
 
<div class=\"grid simple \">
   <table class=\"table table-striped\" id=\"example2\" >
                <thead>
                  <tr>
                     <th>Nom</th>
                    <th>Prenom </th>
                    <th>E-mail </th>
                    <th>Sexe </th> 
                    <th>Date de naissance</th>
                    <th>Tel </th>
                    <th>Verouillage </th>
                    <th>Bloquage</th>
                  </tr>
                </thead>
               
                
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Personnes"]) ? $context["Personnes"] : $this->getContext($context, "Personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 43
            echo "                <tbody>
                    <tr class=\"odd gradeX\">
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prenom", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "sexe", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "datenaissance", array()), "Y/m/d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "tel", array()), "html", null, true);
            echo "</td>
                   
                    ";
            // line 52
            if (($this->getAttribute($context["p"], "credit", array()) == 0)) {
                // line 53
                echo "                    <td>Non</td>
                    <td><a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_BloquerMembres", array("id" => $this->getAttribute($context["p"], "idpersonne", array()))), "html", null, true);
                echo "\" class=\" btn btn-danger btn-small\" onclick=\"return confirm('Etes-vous sur de Bloquer ce Membre ?' ) \">&nbsp; Bloquer&nbsp; &nbsp; </a> </td>
                    ";
            }
            // line 56
            echo "                    
                    ";
            // line 57
            if (($this->getAttribute($context["p"], "credit", array()) == 1)) {
                // line 58
                echo "                    <td>Oui</td>    
                    <td><a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_DeBloquerMembres", array("id" => $this->getAttribute($context["p"], "idpersonne", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-small\" onclick=\"return confirm('Etes-vous sur de Debloquer ce Membre ?')  \">Debloquer</a> </td>
                    ";
            }
            // line 61
            echo "                  </tr>
                </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
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
        return "wyshybackNavBundle:Nav:AfficheMembres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 63,  134 => 61,  129 => 59,  126 => 58,  124 => 57,  121 => 56,  116 => 54,  113 => 53,  111 => 52,  106 => 50,  102 => 49,  98 => 48,  94 => 47,  90 => 46,  86 => 45,  82 => 43,  78 => 42,  49 => 15,  46 => 14,  36 => 7,  32 => 5,  29 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* {% block menu %}*/
/*         <li class=""> <a href="javascript:;"> <i class="fa fa-user"></i> <span class="title">Membres</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li > <a href="{{path('tft_ListerMembres')}}"> Lister </a> </li>*/
/*  */
/*           </ul>*/
/*         </li>*/
/*       */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <center>*/
/* */
/* <div class="grid simple">*/
/*     */
/* <div class="grid-title no-border">*/
/*               <h4>Liste <span class="semi-bold"> des Membres</span></h4>*/
/*               <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*             </div>*/
/*  */
/* <div class="grid-body no-border">*/
/*  */
/* <div class="grid simple ">*/
/*    <table class="table table-striped" id="example2" >*/
/*                 <thead>*/
/*                   <tr>*/
/*                      <th>Nom</th>*/
/*                     <th>Prenom </th>*/
/*                     <th>E-mail </th>*/
/*                     <th>Sexe </th> */
/*                     <th>Date de naissance</th>*/
/*                     <th>Tel </th>*/
/*                     <th>Verouillage </th>*/
/*                     <th>Bloquage</th>*/
/*                   </tr>*/
/*                 </thead>*/
/*                */
/*                 */
/*     {% for p in Personnes %}*/
/*                 <tbody>*/
/*                     <tr class="odd gradeX">*/
/*                     <td>{{p.nom}}</td>*/
/*                     <td>{{p.prenom}} </td>*/
/*                     <td>{{p.email}}</td>*/
/*                     <td>{{p.sexe}}</td>*/
/*                     <td>{{p.datenaissance|date('Y/m/d')}}</td>*/
/*                     <td>{{p.tel}}</td>*/
/*                    */
/*                     {% if p.credit == 0 %}*/
/*                     <td>Non</td>*/
/*                     <td><a href="{{path('tft_BloquerMembres',{id :p.idpersonne})}}" class=" btn btn-danger btn-small" onclick="return confirm('Etes-vous sur de Bloquer ce Membre ?' ) ">&nbsp; Bloquer&nbsp; &nbsp; </a> </td>*/
/*                     {% endif %}*/
/*                     */
/*                     {% if p.credit == 1 %}*/
/*                     <td>Oui</td>    */
/*                     <td><a href="{{path('tft_DeBloquerMembres',{id :p.idpersonne})}}" class="btn btn-primary btn-small" onclick="return confirm('Etes-vous sur de Debloquer ce Membre ?')  ">Debloquer</a> </td>*/
/*                     {% endif %}*/
/*                   </tr>*/
/*                 </tbody>*/
/*     {% endfor %} */
/*     </table>*/
/* */
/* </div>    		*/
/* </div>*/
/* </div>*/
/*   */
/* </center>*/
/*     */
/*   */
/*  {% endblock %}*/
/*  */
