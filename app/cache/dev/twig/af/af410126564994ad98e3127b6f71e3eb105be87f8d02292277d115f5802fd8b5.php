<?php

/* wyshybackNavBundle:Nav:affvid.html.twig */
class __TwigTemplate_7a753890cbef0b79a993aafb6483b1b9e273323ccdf63f4942bba95a9491cbf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:affvid.html.twig", 1);
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
<h1> Liste des Videos </h1>

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
                    <th>Titre</th>
                    <th>Lieu </th>
                    <th>Date de Mise En Ligne </th>
                  
                    <th>Modifier </th>
                    <th>Supprimer </th>

                  </tr>
                </thead>
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vids"]) ? $context["vids"] : $this->getContext($context, "vids")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 48
            echo "                <tbody>
                    <tr class=\"odd gradeX\">
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "titre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "url", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "date", array()), "Y/m/d"), "html", null, true);
            echo "</td>
              
                    <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_modifVideo", array("id" => $this->getAttribute($context["v"], "id", array()))), "html", null, true);
            echo " \" class='btn btn-info btn-small'>Modifier</a></td>
                <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_suppVideo", array("id" => $this->getAttribute($context["v"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes-vous sur de supprimer cette Video ?')\" class='btn btn-danger btn-small'>Supprimer</a></td>



                  </tr>
                </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
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
        return "wyshybackNavBundle:Nav:affvid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 61,  112 => 55,  108 => 54,  103 => 52,  99 => 51,  95 => 50,  91 => 48,  87 => 47,  56 => 18,  53 => 17,  44 => 11,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
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
/* <h1> Liste des Videos </h1>*/
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
/*                     <th>Titre</th>*/
/*                     <th>Lieu </th>*/
/*                     <th>Date de Mise En Ligne </th>*/
/*                   */
/*                     <th>Modifier </th>*/
/*                     <th>Supprimer </th>*/
/* */
/*                   </tr>*/
/*                 </thead>*/
/*     {% for v in vids %}*/
/*                 <tbody>*/
/*                     <tr class="odd gradeX">*/
/*                     <td>{{v.titre}}</td>*/
/*                     <td>{{v.url}} </td>*/
/*                     <td>{{v.date|date('Y/m/d')}}</td>*/
/*               */
/*                     <td><a href="{{path('tft_modifVideo',{id:v.id})}} " class='btn btn-info btn-small'>Modifier</a></td>*/
/*                 <td><a href="{{path('tft_suppVideo',{id:v.id})}}" onclick="return confirm('Etes-vous sur de supprimer cette Video ?')" class='btn btn-danger btn-small'>Supprimer</a></td>*/
/* */
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
