<?php

/* wyshybackNavBundle:Nav:ajoutEvent.html.twig */
class __TwigTemplate_5e717562368b0b43ea8b2bf606dc3e90724babbffb4b7c3ec7f1666a004e6c10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:ajoutEvent.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<center>


<h1 class=\"light\">Formulaire d'ajout <span class=\"semi-bold\">Evenement</span></h1>
        



 <div class=\"center col-lg-17\">
              <div class=\"grid simple\">
                <div class=\"grid-title no-border\">
                  <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
                </div>
                <div class=\"grid-body no-border\"> <br>
                  
\t\t<form method=\"POST\" >
                      <div class=\"form-group\">
                        <label class=\"form-label\">Libelle </label>
\t\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t\t<i class=\"\"></i>
                                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo "
\t\t\t\t</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"form-label\">Lieu</label>
\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t<i class=\"\"></i>
\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'widget');
        echo "                              
\t\t\t</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"form-label\">Date de debut</label>
\t\t\t\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t\t\t\t\t<i class=\"\"></i>
                                                       ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datedebut", array()), 'widget');
        echo "
                                                </div>
                      </div>
                                                
                                                 <div class=\"form-group\">
                        <label class=\"form-label\">Date de Fin</label>
\t\t\t\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t\t\t\t\t<i class=\"\"></i>
                                                       ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datefin", array()), 'widget');
        echo "
                                                </div>
                      </div>

\t\t\t\t  <div class=\"form-actions\">  
\t\t\t\t\t<div class=\"center\">
                                             ";
        // line 52
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
        return "wyshybackNavBundle:Nav:ajoutEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 52,  84 => 46,  73 => 38,  63 => 31,  53 => 24,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* <center>*/
/* */
/* */
/* <h1 class="light">Formulaire d'ajout <span class="semi-bold">Evenement</span></h1>*/
/*         */
/* */
/* */
/* */
/*  <div class="center col-lg-17">*/
/*               <div class="grid simple">*/
/*                 <div class="grid-title no-border">*/
/*                   <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*                 </div>*/
/*                 <div class="grid-body no-border"> <br>*/
/*                   */
/* 		<form method="POST" >*/
/*                       <div class="form-group">*/
/*                         <label class="form-label">Libelle </label>*/
/* 				<div class="input-with-icon  right">                                       */
/* 				<i class=""></i>*/
/*                                 {{form_widget(form.libelle)}}*/
/* 				</div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="form-label">Lieu</label>*/
/* 			<div class="input-with-icon  right">                                       */
/* 			<i class=""></i>*/
/* 				{{form_widget(form.lieu)}}                              */
/* 			</div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="form-label">Date de debut</label>*/
/* 						<div class="input-with-icon  right">                                       */
/* 							<i class=""></i>*/
/*                                                        {{form_widget(form.datedebut)}}*/
/*                                                 </div>*/
/*                       </div>*/
/*                                                 */
/*                                                  <div class="form-group">*/
/*                         <label class="form-label">Date de Fin</label>*/
/* 						<div class="input-with-icon  right">                                       */
/* 							<i class=""></i>*/
/*                                                        {{form_widget(form.datefin)}}*/
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
