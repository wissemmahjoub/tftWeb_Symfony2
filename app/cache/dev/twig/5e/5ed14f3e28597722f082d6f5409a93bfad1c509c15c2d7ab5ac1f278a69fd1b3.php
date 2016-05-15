<?php

/* wyshybackNavBundle:Nav:ListeJoueurPourInvitation.html.twig */
class __TwigTemplate_50dae65581c289df957f4f182f7f6897f3b16830f2990cc4cc527b745a6a1bdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:ListeJoueurPourInvitation.html.twig", 1);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<center>
<h1> Liste des joueurs a inviter </h1>

<div class=\"grid simple\">
    
<div class=\"grid-title no-border\">
  
   <div class=\"tools\"> 
        <a href=\"javascript:;\" class=\"collapse\"></a>  
        <!-- <a href=\"javascript:;\" class=\"remove\"></a> -->
    </div> 
   
</div>
 
<div class=\"grid-body no-border\">
 
<div class=\"grid simple \">
    <form method=\"POST\" action=";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tft_InviterPlayerTest");
        echo ">
   <table class=\"table table-striped\" id=\"example2\" >
                <thead>
                    <tr><th></th>
                     <th>Nom</th>
                    <th>Prenom </th>
                    <th>E-mail </th>
                    <th>Sexe </th> 
                    <th>Date de naissance</th>
          
                
                  </tr>
                </thead>
               
                
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Personnes"]) ? $context["Personnes"] : $this->getContext($context, "Personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 38
            echo "                <tbody>
                    <tr class=\"odd gradeX\">
   
                    <td> <input type=\"checkbox\" checked=\"true\" hidden=\"true\" name=\"mesids[]\" value=";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "idpersonne", array()), "html", null, true);
            echo " /> </td> 
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prenom", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "sexe", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "datenaissance", array()), "Y/m/d"), "html", null, true);
            echo "</td>
               

                  </tr>
                </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo " 
    </table>
 ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " 
    </form>
</div>    \t\t
</div>
</div>
    
   
</center>
    

 ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:ListeJoueurPourInvitation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 53,  109 => 51,  97 => 46,  93 => 45,  89 => 44,  85 => 43,  81 => 42,  77 => 41,  72 => 38,  68 => 37,  50 => 22,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* */
/* {% block content %}*/
/* <center>*/
/* <h1> Liste des joueurs a inviter </h1>*/
/* */
/* <div class="grid simple">*/
/*     */
/* <div class="grid-title no-border">*/
/*   */
/*    <div class="tools"> */
/*         <a href="javascript:;" class="collapse"></a>  */
/*         <!-- <a href="javascript:;" class="remove"></a> -->*/
/*     </div> */
/*    */
/* </div>*/
/*  */
/* <div class="grid-body no-border">*/
/*  */
/* <div class="grid simple ">*/
/*     <form method="POST" action={{ path('tft_InviterPlayerTest') }}>*/
/*    <table class="table table-striped" id="example2" >*/
/*                 <thead>*/
/*                     <tr><th></th>*/
/*                      <th>Nom</th>*/
/*                     <th>Prenom </th>*/
/*                     <th>E-mail </th>*/
/*                     <th>Sexe </th> */
/*                     <th>Date de naissance</th>*/
/*           */
/*                 */
/*                   </tr>*/
/*                 </thead>*/
/*                */
/*                 */
/*     {% for p in Personnes %}*/
/*                 <tbody>*/
/*                     <tr class="odd gradeX">*/
/*    */
/*                     <td> <input type="checkbox" checked="true" hidden="true" name="mesids[]" value={{p.idpersonne}} /> </td> */
/*                     <td>{{p.nom}} </td>*/
/*                     <td>{{p.prenom}} </td>*/
/*                     <td>{{p.email}}</td>*/
/*                     <td>{{p.sexe}}</td>*/
/*                     <td>{{p.datenaissance|date('Y/m/d')}}</td>*/
/*                */
/* */
/*                   </tr>*/
/*                 </tbody>*/
/*     {% endfor %} */
/*     </table>*/
/*  {{form_rest(form)}} */
/*     </form>*/
/* </div>    		*/
/* </div>*/
/* </div>*/
/*     */
/*    */
/* </center>*/
/*     */
/* */
/*  {% endblock %}*/
/*  */
