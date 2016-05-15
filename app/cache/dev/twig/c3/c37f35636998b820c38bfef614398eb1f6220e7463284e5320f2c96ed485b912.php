<?php

/* wyshybackNavBundle:Nav:ModifTest.html.twig */
class __TwigTemplate_e68b0603de6dcc6df02265c1336973a522a5dd4c5bd2c6b009b8b86b5c305d4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:ModifTest.html.twig", 1);
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
        echo " <li class=\"\"> <a href=\"javascript:;\"> <i class=\"icon-custom-extra\"></i> <span class=\"title\">Test de dopage</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("tft_AddTestDopage");
        echo "\"> Nouveau Test </a> </li>
            <li > <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tft_ListeTestDopages");
        echo "\"> Liste des Tests </a> </li>
          </ul>
 </li>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<center>


<h1 class=\"light\">Formulaire de Modification <span class=\"semi-bold\">Test</span></h1>
        



 <div class=\"center col-lg-17\">
              <div class=\"grid simple\">
                <div class=\"grid-title no-border\">
                     <h4>Modification  <span class=\"semi-bold\">Test</span></h4>
                  <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
                </div>
                <div class=\"grid-body no-border\"> <br>
\t\t <form method='POST' action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_UpdateTestDopages", array("id" => $this->getAttribute((isset($context["Test"]) ? $context["Test"] : $this->getContext($context, "Test")), "idtest", array()))), "html", null, true);
        echo "\" >
                      <div class=\"form-group\">
                        <label class=\"form-label\">Libelle Test</label>
                        <span class=\"help\">PS: Libelle Unique</span>
\t\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t\t<i class=\"\"></i>
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelletest", array()), 'widget');
        echo "
\t\t\t\t</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"form-label\">Date Test</label>
\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t<i class=\"\"></i>
\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datetest", array()), 'widget');
        echo "                              
\t\t\t</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"form-label\">Heure</label>
\t\t\t\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t\t\t\t\t<i class=\"\"></i>
                                                       ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heure", array()), 'widget');
        echo "
                                                </div>
                      </div>

\t\t\t\t  <div class=\"form-actions\">  
\t\t\t\t\t<div class=\"center\">
                                             ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                            <button type=\"cancel\" class=\"btn btn-white btn-cons\">Cancel</button>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
                </div>
              </div>
            </div>
            </center>
            </html>
 ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:ModifTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 54,  97 => 48,  87 => 41,  77 => 34,  68 => 28,  51 => 13,  48 => 12,  40 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* {% block menu %}*/
/*  <li class=""> <a href="javascript:;"> <i class="icon-custom-extra"></i> <span class="title">Test de dopage</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li > <a href="{{path('tft_AddTestDopage')}}"> Nouveau Test </a> </li>*/
/*             <li > <a href="{{path('tft_ListeTestDopages')}}"> Liste des Tests </a> </li>*/
/*           </ul>*/
/*  </li>*/
/* {% endblock %}*/
/* */
/*  */
/*  {% block content %}*/
/* <center>*/
/* */
/* */
/* <h1 class="light">Formulaire de Modification <span class="semi-bold">Test</span></h1>*/
/*         */
/* */
/* */
/* */
/*  <div class="center col-lg-17">*/
/*               <div class="grid simple">*/
/*                 <div class="grid-title no-border">*/
/*                      <h4>Modification  <span class="semi-bold">Test</span></h4>*/
/*                   <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*                 </div>*/
/*                 <div class="grid-body no-border"> <br>*/
/* 		 <form method='POST' action="{{path('tft_UpdateTestDopages',{id:Test.idtest})}}" >*/
/*                       <div class="form-group">*/
/*                         <label class="form-label">Libelle Test</label>*/
/*                         <span class="help">PS: Libelle Unique</span>*/
/* 				<div class="input-with-icon  right">                                       */
/* 				<i class=""></i>*/
/*                                 {{form_widget(form.libelletest)}}*/
/* 				</div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="form-label">Date Test</label>*/
/* 			<div class="input-with-icon  right">                                       */
/* 			<i class=""></i>*/
/* 				{{form_widget(form.datetest)}}                              */
/* 			</div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="form-label">Heure</label>*/
/* 						<div class="input-with-icon  right">                                       */
/* 							<i class=""></i>*/
/*                                                        {{form_widget(form.heure)}}*/
/*                                                 </div>*/
/*                       </div>*/
/* */
/* 				  <div class="form-actions">  */
/* 					<div class="center">*/
/*                                              {{form_rest(form)}}*/
/*                                             <button type="cancel" class="btn btn-white btn-cons">Cancel</button>*/
/* 					</div>*/
/* 					</div>*/
/* 				</form>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             </center>*/
/*             </html>*/
/*  {% endblock %}*/
/* */
