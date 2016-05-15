<?php

/* wyshybackNavBundle:Nav:AfficheActu.html.twig */
class __TwigTemplate_e5cd226866cbfbef94b4a3146001c996821da55b9d5079b8b5217dd78ed8992a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:AfficheActu.html.twig", 1);
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
<h1> Liste des Actualites </h1>

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
                     <th>Sujet</th>
                    <th>Contenu </th>
                    <th>Date </th>
                    <th>Image </th>
                    <th>Modifier </th>
                    <th>Supprimer</th>

                  </tr>
                </thead>
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actus"]) ? $context["actus"] : $this->getContext($context, "actus")));
        foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
            // line 36
            echo "                <tbody>
                    <tr class=\"odd gradeX\">
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["actu"], "sujet", array()), "html", null, true);
            echo "</td> 
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["actu"], "description", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actu"], "datepublication", array()), "Y/m/d"), "html", null, true);
            echo "</td>
                    <td> <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["actu"], "path", array()))), "html", null, true);
            echo "\" width=\"100\" height=\"100\" /> </td>
                   <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_modifactu", array("id" => $this->getAttribute($context["actu"], "idactualite", array()))), "html", null, true);
            echo "\" class='btn btn-info btn-small'
>Modifier</a></td>
                <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_deleteactu", array("id" => $this->getAttribute($context["actu"], "idactualite", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes-vous sur de supprimer cette actualité ?')\" class='btn btn-danger btn-small'>Supprimer</a></td>

                  </tr>
                </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        return "wyshybackNavBundle:Nav:AfficheActu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 48,  91 => 44,  86 => 42,  82 => 41,  78 => 40,  74 => 39,  70 => 38,  66 => 36,  62 => 35,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* */
/* */
/* {% block content %}*/
/* <center>*/
/* <h1> Liste des Actualites </h1>*/
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
/*                      <th>Sujet</th>*/
/*                     <th>Contenu </th>*/
/*                     <th>Date </th>*/
/*                     <th>Image </th>*/
/*                     <th>Modifier </th>*/
/*                     <th>Supprimer</th>*/
/* */
/*                   </tr>*/
/*                 </thead>*/
/*     {% for actu in actus %}*/
/*                 <tbody>*/
/*                     <tr class="odd gradeX">*/
/*                         <td>{{actu.sujet}}</td> */
/*                     <td>{{actu.description}} </td>*/
/*                     <td>{{actu.datepublication|date('Y/m/d')}}</td>*/
/*                     <td> <img src="{{asset('uploads/documents/'~actu.path) }}" width="100" height="100" /> </td>*/
/*                    <td><a href="{{path('tft_modifactu',{id:actu.idactualite})}}" class='btn btn-info btn-small'*/
/* >Modifier</a></td>*/
/*                 <td><a href="{{path('tft_deleteactu',{id:actu.idactualite})}}" onclick="return confirm('Etes-vous sur de supprimer cette actualité ?')" class='btn btn-danger btn-small'>Supprimer</a></td>*/
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
