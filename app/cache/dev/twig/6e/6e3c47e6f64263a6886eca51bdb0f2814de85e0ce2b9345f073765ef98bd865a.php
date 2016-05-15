<?php

/* wyshybackNavBundle:Nav:AjoutStade.html.twig */
class __TwigTemplate_ebc8e1eb4e0e280453b3b70029146bcfda5fb4ff4be190e39df90c014c2db592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:AjoutStade.html.twig", 1);
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
        echo "    <html>
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\" />
            


        </head>    
 <li class=\"\"> <a href=\"javascript:;\"> <i class=\"icon-custom-extra\"></i> <span class=\"title\">Stade</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("tft_addStade");
        echo "\"> Ajouter </a> </li>
            <li > <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tft_findStade");
        echo "\"> Afficher </a> </li>
          </ul>
        </li>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "<center>


<h1 class=\"light\">Formulaire d'ajout <span class=\"semi-bold\">Stade</span></h1>
        

 </center>

 <div class=\"col-md-10\">
              <div class=\"grid simple\">
                <div class=\"grid-title no-border\">
                     <h4>Ajout <span class=\"semi-bold\">Stade</span></h4>
                  <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
                </div>
                <div class=\"grid-body no-border\"> <br>
                  
\t\t<form method=\"POST\" >
                      <div class=\"form-group\">
                        <label class=\"form-label\">Libelle Stade</label>
                        <span class=\"help\">PS: Libelle Unique</span>
\t\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t\t<i class=\"\"></i>
                                 ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libellestade", array()), 'widget');
        echo "
\t\t\t\t</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"form-label\">Ville</label>
\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t<i class=\"\"></i>
\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget');
        echo "                               
\t\t\t</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"form-label\">Capacite</label>
\t\t\t\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t\t\t\t\t<i class=\"\"></i>
                                                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'widget');
        echo "
                                                </div>
                      </div>
                      
                      <div class=\"form-group\">
                        <label class=\"form-label\">Surface</label>
\t\t\t<div class=\"input-with-icon  right\">                                       
\t\t\t\t\t\t\t<i class=\"\"></i>
                                 ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surface", array()), 'widget');
        echo "
                        </div>
                      </div>
                     <div class=\"form-group\">
                        <label class=\"form-label\">Date de Creation</label>
                        <div class=\"input-with-icon  right\">                                       
\t\t\t\t\t\t\t<i class=\"col-md-4\"></i>
                                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datecreation", array()), 'widget');
        echo "
                        </div>
                      </div>
                                     
\t\t\t\t  <div class=\"form-actions\">  
\t\t\t\t\t<div class=\"pull-right\">
                                             ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                            <button type=\"cancel\" class=\"btn btn-white btn-cons\">Cancel</button>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
                </div>
              </div>
            </div>
                                           
            </html>
 ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:AjoutStade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 75,  123 => 69,  113 => 62,  102 => 54,  92 => 47,  82 => 40,  58 => 18,  55 => 17,  47 => 13,  43 => 12,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* {% block menu %}*/
/*     <html>*/
/*         <head>*/
/*             <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />*/
/*             */
/* */
/* */
/*         </head>    */
/*  <li class=""> <a href="javascript:;"> <i class="icon-custom-extra"></i> <span class="title">Stade</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li > <a href="{{path('tft_addStade')}}"> Ajouter </a> </li>*/
/*             <li > <a href="{{path('tft_findStade')}}"> Afficher </a> </li>*/
/*           </ul>*/
/*         </li>*/
/* {% endblock %}*/
/* {% block content %}*/
/* <center>*/
/* */
/* */
/* <h1 class="light">Formulaire d'ajout <span class="semi-bold">Stade</span></h1>*/
/*         */
/* */
/*  </center>*/
/* */
/*  <div class="col-md-10">*/
/*               <div class="grid simple">*/
/*                 <div class="grid-title no-border">*/
/*                      <h4>Ajout <span class="semi-bold">Stade</span></h4>*/
/*                   <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*                 </div>*/
/*                 <div class="grid-body no-border"> <br>*/
/*                   */
/* 		<form method="POST" >*/
/*                       <div class="form-group">*/
/*                         <label class="form-label">Libelle Stade</label>*/
/*                         <span class="help">PS: Libelle Unique</span>*/
/* 				<div class="input-with-icon  right">                                       */
/* 				<i class=""></i>*/
/*                                  {{form_widget(form.libellestade)}}*/
/* 				</div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="form-label">Ville</label>*/
/* 			<div class="input-with-icon  right">                                       */
/* 			<i class=""></i>*/
/* 				{{form_widget(form.ville)}}                               */
/* 			</div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="form-label">Capacite</label>*/
/* 						<div class="input-with-icon  right">                                       */
/* 							<i class=""></i>*/
/*                                                         {{form_widget(form.capacite)}}*/
/*                                                 </div>*/
/*                       </div>*/
/*                       */
/*                       <div class="form-group">*/
/*                         <label class="form-label">Surface</label>*/
/* 			<div class="input-with-icon  right">                                       */
/* 							<i class=""></i>*/
/*                                  {{form_widget(form.surface)}}*/
/*                         </div>*/
/*                       </div>*/
/*                      <div class="form-group">*/
/*                         <label class="form-label">Date de Creation</label>*/
/*                         <div class="input-with-icon  right">                                       */
/* 							<i class="col-md-4"></i>*/
/*                                 {{form_widget(form.datecreation)}}*/
/*                         </div>*/
/*                       </div>*/
/*                                      */
/* 				  <div class="form-actions">  */
/* 					<div class="pull-right">*/
/*                                              {{form_rest(form)}}*/
/*                                             <button type="cancel" class="btn btn-white btn-cons">Cancel</button>*/
/* 					</div>*/
/* 					</div>*/
/* 				</form>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*                                            */
/*             </html>*/
/*  {% endblock %}*/
/* */
