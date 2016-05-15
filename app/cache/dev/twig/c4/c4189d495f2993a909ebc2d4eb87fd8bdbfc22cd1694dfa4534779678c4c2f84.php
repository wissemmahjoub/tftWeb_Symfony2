<?php

/* wyshybackNavBundle:Nav:AjouterDossier.html.twig */
class __TwigTemplate_6a66a8da5be0661efdef9f1d45dd1f3c461b752a4fd03818c8142a455c74a71a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:AjouterDossier.html.twig", 3);
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

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "


  
 <li class=\"\"> <a href=\"javascript:;\"> <i class=\"fa fa-file-text\"></i> <span class=\"title\">Dossier Medical</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("tft_addDossier");
        echo "\"> Ajouter </a> </li>
            <li > <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("tft_ListerDossier");
        echo "\"> Afficher </a> </li>
          </ul>
        </li>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    
<center>


     
 <fieldset  style=\"width:800px;\">
<h1 class=\"light\">Dossier <span class=\"semi-bold\"> Medical</span></h1>
        

</fieldset>
<br>
  <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
              <h4>Formulaire <span class=\"semi-bold\"> d'ajout</span></h4>
              <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body no-border\">
\t\t<form method=\"POST\">\t\t
              <div class=\"row column-seperation\">
                <div class=\"col-md-6\">
                    <h4>Information Generale</h4> <br><br> 
                    <div class=\"row form-row\">
                      <div class=\"col-md-5\">
                       <h5>Joueur <span class=\"semi-bold\"> Nom</span></h5> ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Personne", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                      <div class=\"col-md-7\">
                  <h5>Taille <span class=\"semi-bold\"> Joueur</span></h5> ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taille", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-5\">
                     <h5>Situation familiale  <span class=\"semi-bold\"></span></h5> ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                      <div class=\"col-md-7\">
                       <h5>Poid <span class=\"semi-bold\"> Joeuur</span></h5> ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poid", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-12\">
                  <h5>Nombre <span class=\"semi-bold\"> d'enfant</span></h5> ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbenfant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-12\">
                         <span class=\"semi-bold\"> Nom et Prenom de pere</span>   ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomprenompere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                     
                       </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-12\">
                    <span class=\"semi-bold\">Nom et Prenom de la mere</span>";
        // line 68
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
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datederniervisite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-6\">
                     <h5>Libelle <span class=\"semi-bold\"> Test</span></h5>";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Test", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                       </div>
                      <div class=\"col-md-6\">
                      <h5>Maladie <span class=\"semi-bold\"> </span></h5>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maladie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-8\">
                         <h5>Raison  <span class=\"semi-bold\"> de derniere visite</span></h5>";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "raisonvisite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                      <div class=\"col-md-4\">
                      <h5>Type de  <span class=\"semi-bold\">Sang</span></h5> ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sang", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-4\">
                        <h5>Rediger <span class=\"semi-bold\">un commentaire</span></h5>";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                      </div>
                      <div class=\"col-md-8\">
                       <h5>Fumeur <span class=\"semi-bold\"> -</span></h5>";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fumeur", array()), 'widget');
        echo "   
                      </div>
                    </div>
                    <div class=\"row small-text\">
                         ";
        // line 108
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
        return "wyshybackNavBundle:Nav:AjouterDossier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 108,  183 => 104,  177 => 101,  169 => 96,  163 => 93,  155 => 88,  149 => 85,  140 => 79,  126 => 68,  117 => 62,  109 => 57,  101 => 52,  95 => 49,  86 => 43,  80 => 40,  55 => 17,  52 => 16,  44 => 12,  40 => 11,  32 => 5,  29 => 4,  11 => 3,);
    }
}
/* */
/*      */
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}  */
/* {% block menu %}*/
/* */
/* */
/* */
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
/* <h1 class="light">Dossier <span class="semi-bold"> Medical</span></h1>*/
/*         */
/* */
/* </fieldset>*/
/* <br>*/
/*   <div class="grid simple">*/
/*             <div class="grid-title no-border">*/
/*               <h4>Formulaire <span class="semi-bold"> d'ajout</span></h4>*/
/*               <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*             </div>*/
/*             <div class="grid-body no-border">*/
/* 		<form method="POST">		*/
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
/*                      <h5>Situation familiale  <span class="semi-bold"></span></h5> {{form_widget(form.situation,{'attr':{'class':'form-control'}})}}*/
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
