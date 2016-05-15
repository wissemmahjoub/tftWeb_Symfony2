<?php

/* wyshybackNavBundle:Nav:AddTest.html.twig */
class __TwigTemplate_dd7fc6a840de2f9aa3b84ffdcdd5ef64e6f34e3068beefd217cf47a6d0c0e4e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:AddTest.html.twig", 1);
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




    
<h1 class=\"light\">Formulaire d'ajout <span class=\"semi-bold\">Test</span></h1>
        



 <div class=\"center col-lg-17\">
              <div class=\"grid simple\">
                <div class=\"grid-title no-border\">
                     <h4>Ajout <span class=\"semi-bold\">Test</span></h4>
                  <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
                </div>
                <div class=\"grid-body no-border\"> <br>
                  
\t\t<form method=\"POST\">
                      <div class=\"form-group\">
                        <label class=\"form-label\">Libelle Test</label>
                        <span class=\"help\">PS: Libelle Unique</span>
\t\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t\t<i class=\"\"></i>
                                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelletest", array()), 'widget');
        echo "
\t\t\t\t</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"form-label\">Date Test</label>
\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t<i class=\"\"></i>
\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datetest", array()), 'widget');
        echo "                              
\t\t\t</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"form-label\">Heure</label>
\t\t\t\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t\t\t\t\t<i class=\"\"></i>
                                                       ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heure", array()), 'widget');
        echo "
                                                </div>
                      </div>

\t\t\t\t  <div class=\"form-actions\">  
\t\t\t\t\t<div class=\"center\">
                                             ";
        // line 58
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
        return "wyshybackNavBundle:Nav:AddTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 58,  98 => 52,  88 => 45,  78 => 38,  51 => 13,  48 => 12,  40 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
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
/* */
/* */
/*     */
/* <h1 class="light">Formulaire d'ajout <span class="semi-bold">Test</span></h1>*/
/*         */
/* */
/* */
/* */
/*  <div class="center col-lg-17">*/
/*               <div class="grid simple">*/
/*                 <div class="grid-title no-border">*/
/*                      <h4>Ajout <span class="semi-bold">Test</span></h4>*/
/*                   <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*                 </div>*/
/*                 <div class="grid-body no-border"> <br>*/
/*                   */
/* 		<form method="POST">*/
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
/*                                          */
/*                                             */
/*                                           */
/*             </html>*/
/*  {% endblock %}*/
/* */
