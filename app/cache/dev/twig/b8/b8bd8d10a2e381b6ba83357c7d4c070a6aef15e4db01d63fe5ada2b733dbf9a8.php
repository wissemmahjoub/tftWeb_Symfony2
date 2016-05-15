<?php

/* wyshybackNavBundle:Nav:ModifDossier.html.twig */
class __TwigTemplate_5caf5525351c87c596bc95db98b7e52139465e8933f7799cfd2362561379b6a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:ModifDossier.html.twig", 1);
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
 <li class=\"\"> <a href=\"javascript:;\"> <i class=\"fa fa-file-text\"></i> <span class=\"title\">Dossier Medical</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tft_addDossier");
        echo "\"> Ajouter </a> </li>
            <li > <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("tft_ListerDossier");
        echo "\"> Afficher </a> </li>
          </ul>
        </li>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    
<center>


     
 <fieldset  style=\"width:800px;\">
<h1 class=\"light\">Modification Dossier <span class=\"semi-bold\"> Medical</span></h1>
        

</fieldset>
<br>
  <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
              <h4>Modification<span class=\"semi-bold\">Dossier</span></h4>
              <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body no-border\">
\t\t <form method='POST' action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_UpdateDossier", array("iddossier" => $this->getAttribute((isset($context["Dossier"]) ? $context["Dossier"] : $this->getContext($context, "Dossier")), "iddossier", array()))), "html", null, true);
        echo "\" >\t\t
              <div class=\"row column-seperation\">
                <div class=\"col-md-6\">
                    <h4>Information Generale</h4> <br><br> 
                    <div class=\"row form-row\">
                      <div class=\"col-md-5\">
                       <h5>Joueur <span class=\"semi-bold\"> Nom</span></h5> ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Personne", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                      <div class=\"col-md-7\">
                  <h5>Taille <span class=\"semi-bold\"> Joueur</span></h5> ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taille", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-5\">
                     <h5>Situation  <span class=\"semi-bold\"></span></h5> ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                      <div class=\"col-md-7\">
                       <h5>Poid <span class=\"semi-bold\"> Joeuur</span></h5> ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poid", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-12\">
                  <h5>Nombre <span class=\"semi-bold\"> d'enfant</span></h5> ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbenfant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-12\">
                         <span class=\"semi-bold\"> Nom et Prenom de pere</span>   ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomprenompere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                     
                       </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-12\">
                    <span class=\"semi-bold\">Nom et Prenom de la mere</span>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomprenommere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    
                      </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
\t\t\t\t
                  <h4> Informations Medicaux</h4>
                  <br>
                    <div class=\"row form-row\">
                      <div class=\"col-md-12\">
                    <h5>Date  <span class=\"semi-bold\"> derniere visite</span></h5>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datederniervisite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-6\">
                     <h5>Libelle <span class=\"semi-bold\"> Test</span></h5>";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Test", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                       </div>
                      <div class=\"col-md-6\">
                      <h5>Maladie <span class=\"semi-bold\"> </span></h5>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maladie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-8\">
                         <h5>Raison  <span class=\"semi-bold\"> de derniere visite</span></h5>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "raisonvisite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                      <div class=\"col-md-4\">
                      <h5>Type de  <span class=\"semi-bold\">Sang</span></h5> ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sang", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-4\">
                        <h5>Rediger <span class=\"semi-bold\">un commentaire</span></h5>";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                      </div>
                      <div class=\"col-md-8\">
                       <h5>Fumeur <span class=\"semi-bold\"> -</span></h5>";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fumeur", array()), 'widget');
        echo "   
                      </div>
                    </div>
                    <div class=\"row small-text\">
                         ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " 
\t\t\t\t\t<p class=\"col-md-12\">
\t\t\t\t\tPS : Il faut que chaque dossier medical soit affecte a un seul joueur  
                                        </p>
                    </div>
                      
             
                </div>
              </div>
\t\t\t\t
                      
                       
\t\t\t</form>
                
            </div>

    </div>
</center>
  <center>

 </center>
 ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:ModifDossier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 103,  183 => 99,  177 => 96,  169 => 91,  163 => 88,  155 => 83,  149 => 80,  140 => 74,  126 => 63,  117 => 57,  109 => 52,  101 => 47,  95 => 44,  86 => 38,  80 => 35,  71 => 29,  52 => 12,  49 => 11,  41 => 7,  37 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* {% block menu %}*/
/*   */
/*  <li class=""> <a href="javascript:;"> <i class="fa fa-file-text"></i> <span class="title">Dossier Medical</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li > <a href="{{path('tft_addDossier')}}"> Ajouter </a> </li>*/
/*             <li > <a href="{{path('tft_ListerDossier')}}"> Afficher </a> </li>*/
/*           </ul>*/
/*         </li>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     */
/* <center>*/
/* */
/* */
/*      */
/*  <fieldset  style="width:800px;">*/
/* <h1 class="light">Modification Dossier <span class="semi-bold"> Medical</span></h1>*/
/*         */
/* */
/* </fieldset>*/
/* <br>*/
/*   <div class="grid simple">*/
/*             <div class="grid-title no-border">*/
/*               <h4>Modification<span class="semi-bold">Dossier</span></h4>*/
/*               <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*             </div>*/
/*             <div class="grid-body no-border">*/
/* 		 <form method='POST' action="{{path('tft_UpdateDossier',{iddossier:Dossier.iddossier})}}" >		*/
/*               <div class="row column-seperation">*/
/*                 <div class="col-md-6">*/
/*                     <h4>Information Generale</h4> <br><br> */
/*                     <div class="row form-row">*/
/*                       <div class="col-md-5">*/
/*                        <h5>Joueur <span class="semi-bold"> Nom</span></h5> {{form_widget(form.Personne,{'attr':{'class':'form-control'}})}}*/
/*                       </div>*/
/*                       <div class="col-md-7">*/
/*                   <h5>Taille <span class="semi-bold"> Joueur</span></h5> {{form_widget(form.taille,{'attr':{'class':'form-control'}})}}*/
/*                         */
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-5">*/
/*                      <h5>Situation  <span class="semi-bold"></span></h5> {{form_widget(form.situation,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                       <div class="col-md-7">*/
/*                        <h5>Poid <span class="semi-bold"> Joeuur</span></h5> {{form_widget(form.poid,{'attr':{'class':'form-control'}})}}*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-12">*/
/*                   <h5>Nombre <span class="semi-bold"> d'enfant</span></h5> {{form_widget(form.nbenfant,{'attr':{'class':'form-control'}})}}*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-12">*/
/*                          <span class="semi-bold"> Nom et Prenom de pere</span>   {{form_widget(form.nomprenompere,{'attr':{'class':'form-control'}})}}*/
/*                      */
/*                        </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-12">*/
/*                     <span class="semi-bold">Nom et Prenom de la mere</span>{{form_widget(form.nomprenommere,{'attr':{'class':'form-control'}})}}*/
/*                     */
/*                       </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/* 				*/
/*                   <h4> Informations Medicaux</h4>*/
/*                   <br>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-12">*/
/*                     <h5>Date  <span class="semi-bold"> derniere visite</span></h5>{{form_widget(form.datederniervisite,{'attr':{'class':'form-control'}})}}*/
/*                       */
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-6">*/
/*                      <h5>Libelle <span class="semi-bold"> Test</span></h5>{{form_widget(form.Test,{'attr':{'class':'form-control'}})}}*/
/*                        </div>*/
/*                       <div class="col-md-6">*/
/*                       <h5>Maladie <span class="semi-bold"> </span></h5>{{form_widget(form.maladie,{'attr':{'class':'form-control'}})}}*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-8">*/
/*                          <h5>Raison  <span class="semi-bold"> de derniere visite</span></h5>{{form_widget(form.raisonvisite,{'attr':{'class':'form-control'}})}}*/
/*                       </div>*/
/*                       <div class="col-md-4">*/
/*                       <h5>Type de  <span class="semi-bold">Sang</span></h5> {{form_widget(form.sang,{'attr':{'class':'form-control'}})}} */
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-4">*/
/*                         <h5>Rediger <span class="semi-bold">un commentaire</span></h5>{{form_widget(form.commentaire,{'attr':{'class':'form-control'}})}} */
/*                       </div>*/
/*                       <div class="col-md-8">*/
/*                        <h5>Fumeur <span class="semi-bold"> -</span></h5>{{form_widget(form.fumeur)}}   */
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row small-text">*/
/*                          {{form_rest(form)}} */
/* 					<p class="col-md-12">*/
/* 					PS : Il faut que chaque dossier medical soit affecte a un seul joueur  */
/*                                         </p>*/
/*                     </div>*/
/*                       */
/*              */
/*                 </div>*/
/*               </div>*/
/* 				*/
/*                       */
/*                        */
/* 			</form>*/
/*                 */
/*             </div>*/
/* */
/*     </div>*/
/* </center>*/
/*   <center>*/
/* */
/*  </center>*/
/*  {% endblock %}*/
/* */
