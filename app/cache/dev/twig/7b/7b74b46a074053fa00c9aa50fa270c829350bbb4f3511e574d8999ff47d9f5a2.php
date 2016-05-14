<?php

/* wyshybackNavBundle:Nav:Joueur.html.twig */
class __TwigTemplate_533204e9b7fa3564b2e78f91b2d6cf3f349af71157990c999e0cfe0b04925446 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:Joueur.html.twig", 2);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'userInfo' => array($this, 'block_userInfo'),
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
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "        <li class=\"\"> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_addjoueurtodb");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Ajouter un joueur</span> </a> </li>
      
       
        <li class=\"\"> <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_listerjoueurs");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Consulter les joueurs</span> </a> </li>
        <li class=\"\"> <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_joueur");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 5</span> </a> </li>
        <li class=\"\"> <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_joueur");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 6</span> <span class=\"label label-important pull-right \">HOT</span></a> </li>
        
                    ";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
                <h4>Ajouter un <span class=\"semi-bold\" > joueur</span></h4>
              <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body no-border\">
\t\t\t<form novalidate=\"novalidate\" class=\"form-no-horizontal-spacing\" id=\"form-condensed\">\t
              <div class=\"row column-seperation\">
                <div class=\"col-md-6\">
                  <h4>Formulaire</h4>            
                    <div class=\"row form-row\">
                      <div class=\"col-md-5\">
                        <input name=\"form3FirstName\" id=\"form3FirstName\" class=\"form-control\" placeholder=\"First Name\" type=\"text\">
                      </div>
                      <div class=\"col-md-7\">
                        <input name=\"form3LastName\" id=\"form3LastName\" class=\"form-control\" placeholder=\"Last Name\" type=\"text\">
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-5\">
                        <select tabindex=\"-1\" name=\"form3Gender\" id=\"form3Gender\" class=\"select2 form-control select2-offscreen\">
                          <option value=\"1\">Male</option>
                          <option value=\"2\">Female</option>
                        </select>
                      </div>
                      <div class=\"col-md-7\">
                        <input placeholder=\"Date of Birth\" class=\"form-control\" id=\"form3DateOfBirth\" name=\"form3DateOfBirth\" type=\"text\">
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-12\">
                        <input name=\"form3Occupation\" id=\"form3Occupation\" class=\"form-control\" placeholder=\"Occupation\" type=\"text\">
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-8\">
                        <div class=\"radio\">
                          <input id=\"male\" name=\"gender\" value=\"male\" checked=\"checked\" type=\"radio\">
                          <label for=\"male\">Male</label>
                          <input id=\"female\" name=\"gender\" value=\"female\" type=\"radio\">
                          <label for=\"female\">Female</label>
                        </div>
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-12\">
                        <input name=\"form3Email\" id=\"form3Email\" class=\"form-control\" placeholder=\"email@address.com\" type=\"text\">
                      </div>
                        
\t\t\t<div class=\"pull-right\">
\t\t\t <button class=\"btn btn-danger btn-cons\" type=\"submit\"><i class=\"icon-ok\"></i> Save</button>
\t\t\t <button class=\"btn btn-white btn-cons\" type=\"button\">Cancel</button>
\t\t\t</div>
                    </div>
                </div>
               
\t\t\t\t  </div>
\t\t\t</form>
            </div>
          
    </div>
    ";
    }

    // line 79
    public function block_userInfo($context, array $blocks = array())
    {
        // line 80
        echo "                Personne 1
                ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:Joueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 80,  123 => 79,  58 => 16,  55 => 15,  48 => 11,  44 => 10,  40 => 9,  33 => 6,  30 => 5,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/*     */
/*                 {% block menu %}*/
/*         <li class=""> <a href="{{ path('wyshyback_nav_addjoueurtodb') }}"> <i class="fa fa-th"></i> <span class="title">Ajouter un joueur</span> </a> </li>*/
/*       */
/*        */
/*         <li class=""> <a href="{{ path('wyshyback_nav_listerjoueurs') }}"> <i class="fa fa-th"></i> <span class="title">Consulter les joueurs</span> </a> </li>*/
/*         <li class=""> <a href="{{ path('wyshyback_nav_joueur') }}"> <i class="fa fa-th"></i> <span class="title">Menu 5</span> </a> </li>*/
/*         <li class=""> <a href="{{ path('wyshyback_nav_joueur') }}"> <i class="fa fa-th"></i> <span class="title">Menu 6</span> <span class="label label-important pull-right ">HOT</span></a> </li>*/
/*         */
/*                     {% endblock %}*/
/*                     */
/* {% block content %}*/
/*     <div class="grid simple">*/
/*             <div class="grid-title no-border">*/
/*                 <h4>Ajouter un <span class="semi-bold" > joueur</span></h4>*/
/*               <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*             </div>*/
/*             <div class="grid-body no-border">*/
/* 			<form novalidate="novalidate" class="form-no-horizontal-spacing" id="form-condensed">	*/
/*               <div class="row column-seperation">*/
/*                 <div class="col-md-6">*/
/*                   <h4>Formulaire</h4>            */
/*                     <div class="row form-row">*/
/*                       <div class="col-md-5">*/
/*                         <input name="form3FirstName" id="form3FirstName" class="form-control" placeholder="First Name" type="text">*/
/*                       </div>*/
/*                       <div class="col-md-7">*/
/*                         <input name="form3LastName" id="form3LastName" class="form-control" placeholder="Last Name" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-5">*/
/*                         <select tabindex="-1" name="form3Gender" id="form3Gender" class="select2 form-control select2-offscreen">*/
/*                           <option value="1">Male</option>*/
/*                           <option value="2">Female</option>*/
/*                         </select>*/
/*                       </div>*/
/*                       <div class="col-md-7">*/
/*                         <input placeholder="Date of Birth" class="form-control" id="form3DateOfBirth" name="form3DateOfBirth" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-12">*/
/*                         <input name="form3Occupation" id="form3Occupation" class="form-control" placeholder="Occupation" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-8">*/
/*                         <div class="radio">*/
/*                           <input id="male" name="gender" value="male" checked="checked" type="radio">*/
/*                           <label for="male">Male</label>*/
/*                           <input id="female" name="gender" value="female" type="radio">*/
/*                           <label for="female">Female</label>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-12">*/
/*                         <input name="form3Email" id="form3Email" class="form-control" placeholder="email@address.com" type="text">*/
/*                       </div>*/
/*                         */
/* 			<div class="pull-right">*/
/* 			 <button class="btn btn-danger btn-cons" type="submit"><i class="icon-ok"></i> Save</button>*/
/* 			 <button class="btn btn-white btn-cons" type="button">Cancel</button>*/
/* 			</div>*/
/*                     </div>*/
/*                 </div>*/
/*                */
/* 				  </div>*/
/* 			</form>*/
/*             </div>*/
/*           */
/*     </div>*/
/*     {% endblock %}*/
/*     */
/*             {% block userInfo %}*/
/*                 Personne 1*/
/*                 {% endblock %}*/
/*                 */
