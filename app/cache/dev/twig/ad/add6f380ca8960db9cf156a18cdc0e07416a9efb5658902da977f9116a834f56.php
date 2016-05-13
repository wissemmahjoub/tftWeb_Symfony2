<?php

/* wyshybackNavBundle:Nav:ajouterjoueur.html.twig */
class __TwigTemplate_5ca00a4e23a2251ef32175cb60d68b4236e948ec72dde864fe8338c9b8abf608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:ajouterjoueur.html.twig", 2);
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
        // line 8
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_listerjoueurs");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Consulter les joueurs</span> </a> </li>   <li class=\"\"> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_joueur");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 5</span> </a> </li>
        <li class=\"\"> <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_joueur");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 6</span> <span class=\"label label-important pull-right \">HOT</span></a> </li>
        
                    ";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "

    <form method=\"POST\">      
 
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
   
    </form>
    
       
     
    
    <div class=\"grid simple\">
        
         
                  
                   
                  
                    <div class=\"row form-row\">
                      <div class=\"col-md-8\">
                     ";
        // line 39
        echo "                      </div>
                    </div>
                    <div class=\"row form-row\">
                                            
\t\t\t<div class=\"pull-right\">
                           <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_addjoueurtodb");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Ajouter un joueur putin</span> </a> 
                            <button class=\"btn btn-danger btn-cons\" type=\"submit\" onclick=\"location.href = ";
        // line 45
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_addjoueurtodb");
        echo "\" ><i class=\"icon-ok\"></i> Save</button>
\t\t\t <button class=\"btn btn-white btn-cons\" type=\"button\">Cancel</button>
\t\t\t</div>
                    </div>
                </div>
       
    ";
    }

    // line 53
    public function block_userInfo($context, array $blocks = array())
    {
        // line 54
        echo "                Personne 1
                ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:ajouterjoueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 54,  101 => 53,  90 => 45,  86 => 44,  79 => 39,  61 => 18,  55 => 14,  52 => 13,  45 => 9,  39 => 8,  33 => 6,  30 => 5,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/*     */
/*                 {% block menu %}*/
/*         <li class=""> <a href="{{ path('wyshyback_nav_addjoueurtodb') }}"> <i class="fa fa-th"></i> <span class="title">Ajouter un joueur</span> </a> </li>*/
/* */
/*        <li class=""> <a href="{{ path('wyshyback_nav_listerjoueurs') }}"> <i class="fa fa-th"></i> <span class="title">Consulter les joueurs</span> </a> </li>   <li class=""> <a href="{{ path('wyshyback_nav_joueur') }}"> <i class="fa fa-th"></i> <span class="title">Menu 5</span> </a> </li>*/
/*         <li class=""> <a href="{{ path('wyshyback_nav_joueur') }}"> <i class="fa fa-th"></i> <span class="title">Menu 6</span> <span class="label label-important pull-right ">HOT</span></a> </li>*/
/*         */
/*                     {% endblock %}*/
/*                     */
/* {% block content %}*/
/* */
/* */
/*     <form method="POST">      */
/*  */
/*     {{form_widget(form)}}*/
/*    */
/*     </form>*/
/*     */
/*        */
/*      */
/*     */
/*     <div class="grid simple">*/
/*         */
/*          */
/*                   */
/*                    */
/*                   */
/*                     <div class="row form-row">*/
/*                       <div class="col-md-8">*/
/*                      {#   <div class="radio">*/
/*                           <input id="male" name="gender" value="male" checked="checked" type="radio">*/
/*                           <label for="male">Male</label>*/
/*                           <input id="female" name="gender" value="female" type="radio">*/
/*                           <label for="female">Female</label>*/
/*                         </div>#}*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                                             */
/* 			<div class="pull-right">*/
/*                            <a href="{{ path('wyshyback_nav_addjoueurtodb') }}"> <i class="fa fa-th"></i> <span class="title">Ajouter un joueur putin</span> </a> */
/*                             <button class="btn btn-danger btn-cons" type="submit" onclick="location.href = {{ path('wyshyback_nav_addjoueurtodb') }}" ><i class="icon-ok"></i> Save</button>*/
/* 			 <button class="btn btn-white btn-cons" type="button">Cancel</button>*/
/* 			</div>*/
/*                     </div>*/
/*                 </div>*/
/*        */
/*     {% endblock %}*/
/*     */
/*             {% block userInfo %}*/
/*                 Personne 1*/
/*                 {% endblock %}*/
/*                 */
