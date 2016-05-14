<?php

/* wyshybackNavBundle:Nav:ajoutMedecin.html.twig */
class __TwigTemplate_a839b4544ff1067bbb163d909c5180f5604f8e866690d946b082020bbb6f21ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:ajoutMedecin.html.twig", 1);
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
        echo " 
         <li class=\"\"> <a href=\"javascript:;\"> <i class=\"icon-custom-extra\"></i> <span class=\"title\">Medecin</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tft_addMedecin");
        echo "\"> Ajouter </a> </li>
            <li > <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("tft_listMedecin");
        echo "\"> Afficher </a> </li>

          </ul>
        </li>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<br><br><center>

<br>
     
 <fieldset  style=\"width:500px;\">
<legend ><h1>Ajout Medecin </h1></legend>
        
<form method=\"POST\">
     <table>
<tr>
        <td>Nom </td>
        <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "</td>
</tr> 
<tr>
        <td>Prenom  </td>
        <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "</td>
</tr>        
<tr>
        <td>Cin   </td>
        <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", array()), 'widget');
        echo "</td>
</tr>

 <tr>
        <td>Login  </td>
        <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget');
        echo "</td>
 </tr>
 
  <tr>
        <td>Password  </td>
        <td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "</td>
 </tr>
 
 <tr>
        <td>Specialite </td>
        <td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialite", array()), 'widget');
        echo "</td>
 </tr>
 
 
   <tr>
        <td>Salaire </td>
        <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salaire", array()), 'widget');
        echo "</td>
 </tr>

  <tr>
        <td>Date de Naissance </td>
        <td>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'widget');
        echo "</td>
 </tr>
 
  <tr>
        <td>Sexe </td>
        <td>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget');
        echo "</td>
 </tr>
 
  <tr>
        <td>Email </td>
        <td>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>
 </tr>
 
  <tr>
        <td>Adresse </td>
        <td>";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "</td>
 </tr>
  
    </table>
 ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " 

</form>
    </fieldset>
<br>
  
</center>
 ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:ajoutMedecin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 77,  145 => 73,  137 => 68,  129 => 63,  121 => 58,  113 => 53,  104 => 47,  96 => 42,  88 => 37,  80 => 32,  73 => 28,  66 => 24,  53 => 13,  50 => 12,  41 => 7,  37 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* {% block menu %}*/
/*  */
/*          <li class=""> <a href="javascript:;"> <i class="icon-custom-extra"></i> <span class="title">Medecin</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li > <a href="{{path('tft_addMedecin')}}"> Ajouter </a> </li>*/
/*             <li > <a href="{{path('tft_listMedecin')}}"> Afficher </a> </li>*/
/* */
/*           </ul>*/
/*         </li>*/
/* {% endblock %}*/
/* {% block content %}*/
/* <br><br><center>*/
/* */
/* <br>*/
/*      */
/*  <fieldset  style="width:500px;">*/
/* <legend ><h1>Ajout Medecin </h1></legend>*/
/*         */
/* <form method="POST">*/
/*      <table>*/
/* <tr>*/
/*         <td>Nom </td>*/
/*         <td>{{form_widget(form.nom)}}</td>*/
/* </tr> */
/* <tr>*/
/*         <td>Prenom  </td>*/
/*         <td>{{form_widget(form.prenom)}}</td>*/
/* </tr>        */
/* <tr>*/
/*         <td>Cin   </td>*/
/*         <td>{{form_widget(form.cin)}}</td>*/
/* </tr>*/
/* */
/*  <tr>*/
/*         <td>Login  </td>*/
/*         <td>{{form_widget(form.login)}}</td>*/
/*  </tr>*/
/*  */
/*   <tr>*/
/*         <td>Password  </td>*/
/*         <td>{{form_widget(form.password)}}</td>*/
/*  </tr>*/
/*  */
/*  <tr>*/
/*         <td>Specialite </td>*/
/*         <td>{{form_widget(form.specialite)}}</td>*/
/*  </tr>*/
/*  */
/*  */
/*    <tr>*/
/*         <td>Salaire </td>*/
/*         <td>{{form_widget(form.salaire)}}</td>*/
/*  </tr>*/
/* */
/*   <tr>*/
/*         <td>Date de Naissance </td>*/
/*         <td>{{form_widget(form.datenaissance)}}</td>*/
/*  </tr>*/
/*  */
/*   <tr>*/
/*         <td>Sexe </td>*/
/*         <td>{{form_widget(form.sexe)}}</td>*/
/*  </tr>*/
/*  */
/*   <tr>*/
/*         <td>Email </td>*/
/*         <td>{{form_widget(form.email)}}</td>*/
/*  </tr>*/
/*  */
/*   <tr>*/
/*         <td>Adresse </td>*/
/*         <td>{{form_widget(form.adresse)}}</td>*/
/*  </tr>*/
/*   */
/*     </table>*/
/*  {{form_rest(form)}} */
/* */
/* </form>*/
/*     </fieldset>*/
/* <br>*/
/*   */
/* </center>*/
/*  {% endblock %}*/
/* */
