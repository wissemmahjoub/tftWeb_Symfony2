<?php

/* wyshybackNavBundle:Nav:ajoutCompteMatch.html.twig */
class __TwigTemplate_922c9971a258696cb37249b1f390a8cf127268dcc3ec6a7fc5378bce2e9f5836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:ajoutCompteMatch.html.twig", 2);
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


<h1 class=\"light\">Formulaire d'ajout <span class=\"semi-bold\">Compte Rendu</span></h1>
        



 <div class=\"center col-lg-17\">
              <div class=\"grid simple\">
                <div class=\"grid-title no-border\">
                  <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
                </div>
                <div class=\"grid-body no-border\"> <br>
                  
\t\t<form method=\"POST\" >
                      <div class=\"form-group\">
                        <label class=\"form-label\">Sujet </label>
\t\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t\t<i class=\"\"></i>
                                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo "
\t\t\t\t</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"form-label\">Contenu</label>
\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t<i class=\"\"></i>
\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget');
        echo "                              
\t\t\t</div>
                      </div>
                     
                                                
                                               
                      </div>

\t\t\t\t  <div class=\"form-actions\">  
\t\t\t\t\t<div class=\"center\">
                                             ";
        // line 42
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
        return "wyshybackNavBundle:Nav:ajoutCompteMatch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 42,  63 => 32,  53 => 25,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* <center>*/
/* */
/* */
/* <h1 class="light">Formulaire d'ajout <span class="semi-bold">Compte Rendu</span></h1>*/
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
/*                         <label class="form-label">Sujet </label>*/
/* 				<div class="input-with-icon  right">                                       */
/* 				<i class=""></i>*/
/*                                 {{form_widget(form.libelle)}}*/
/* 				</div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="form-label">Contenu</label>*/
/* 			<div class="input-with-icon  right">                                       */
/* 			<i class=""></i>*/
/* 				{{form_widget(form.contenu)}}                              */
/* 			</div>*/
/*                       </div>*/
/*                      */
/*                                                 */
/*                                                */
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
/* */
/* */
