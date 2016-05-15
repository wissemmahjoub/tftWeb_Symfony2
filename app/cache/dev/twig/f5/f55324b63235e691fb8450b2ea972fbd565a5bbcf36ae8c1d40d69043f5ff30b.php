<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b6b4931ffd4f2e75ec13ca3036a5c3f62af56f628ebb5147f2639cfcf06ef49b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::index.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <div class=\"form-group\">
            
             <!-- Login field -->
             
                        <label for=\"username\" class=\"cols-sm-2 control-label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nom de compte", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t<div class=\"cols-sm-10\">
\t\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-users fa\" aria-hidden=\"true\"></i></span>
\t\t
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Enter your Username\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t</div>
    
    ";
        // line 29
        echo "
     <!-- Password field  -->
    
    <div class=\"form-group\">
\t\t<label for=\"password\" class=\"cols-sm-2 control-label\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"cols-sm-10\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
\t\t\t <input type=\"password\"class=\"form-control\"  id=\"password\" name=\"_password\" required=\"required\" placeholder=\"***********\" />
                                </div>
\t\t\t\t</div>
\t\t\t</div>

    
    
    
    
   ";
        // line 49
        echo "   
    <!-- Remember me action -->
    
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se souvenir de moi", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    
    
     <!-- Login action -->
     
\t<div class=\"form-group \">
\t  <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block login-button cols-sm-10\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connexion", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
        
        <!-- Registration redirection -->
                                        <div class=\"login-register btn btn-primary  btn-block login-button\">
                                            <a href=\"index.php\">Inscription</a>
\t\t\t\t         </div>
    
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 59,  99 => 53,  93 => 49,  77 => 33,  71 => 29,  63 => 22,  55 => 17,  46 => 11,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::index.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*         <div class="form-group">*/
/*             */
/*              <!-- Login field -->*/
/*              */
/*                         <label for="username" class="cols-sm-2 control-label">{{ 'Nom de compte'|trans }}</label>*/
/* 		<div class="cols-sm-10">*/
/* 			<div class="input-group">*/
/* 			<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>*/
/* 		*/
/*                 <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="Enter your Username"/>*/
/* 					</div>*/
/* 				</div>*/
/* 						</div>*/
/*     */
/*     {#<label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />#}*/
/* */
/*      <!-- Password field  -->*/
/*     */
/*     <div class="form-group">*/
/* 		<label for="password" class="cols-sm-2 control-label">{{ 'Mot de passe'|trans }}</label>*/
/* 			<div class="cols-sm-10">*/
/* 				<div class="input-group">*/
/* 				<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>*/
/* 			 <input type="password"class="form-control"  id="password" name="_password" required="required" placeholder="***********" />*/
/*                                 </div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/*     */
/*     */
/*     */
/*     */
/*    {# <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* #}*/
/*    */
/*     <!-- Remember me action -->*/
/*     */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'Se souvenir de moi'|trans }}</label>*/
/*     */
/*     */
/*      <!-- Login action -->*/
/*      */
/* 	<div class="form-group ">*/
/* 	  <input type="submit" class="btn btn-primary btn-lg btn-block login-button cols-sm-10" id="_submit" name="_submit" value="{{ 'Connexion'|trans }}" />*/
/*         </div>*/
/*         */
/*         <!-- Registration redirection -->*/
/*                                         <div class="login-register btn btn-primary  btn-block login-button">*/
/*                                             <a href="index.php">Inscription</a>*/
/* 				         </div>*/
/*     */
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
