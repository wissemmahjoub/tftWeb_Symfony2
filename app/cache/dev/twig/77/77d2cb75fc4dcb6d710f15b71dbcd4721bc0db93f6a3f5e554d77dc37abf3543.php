<?php

/* wyshybackNavBundle:Nav:formMail.html.twig */
class __TwigTemplate_0377eccf7119e44d2d2e64a4c91cdeea90b219aa5e8a9b1712de608c44110f95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:formMail.html.twig", 2);
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("tft_Mail");
        echo "\" method=\"POST\">
<div class=\"form-group\">
                                                <input type=\"email\" name=\"Email\" class=\"form-control \" placeholder=\"email@address.com\">
                                            </div>
                                            
                                            <div class=\"form-group\">
                                                <input type=\"text\" name=\"Sujet\" class=\"form-control\" placeholder=\"Sujet\">
                                                
                                            </div>
                                            <div class=\"form-group\">
                                                
                                                <textarea class=\"wysihtml5 form-control\" placeholder=\"Message body\" ></textarea>
 </div>
    <div> <button class=\"btn btn-purple waves-effect waves-light\" type=\"submit\" value=\"Envoyer\"> <span>Envoyer</span> <i class=\"fa fa-send m-l-10\"></i> </button>
                                            </div>
</form>

 ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:formMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/*  {% extends "wyshybackNavBundle::Layout.html.twig" %}  */
/*   {% block content %}*/
/* <form action="{{path('tft_Mail')}}" method="POST">*/
/* <div class="form-group">*/
/*                                                 <input type="email" name="Email" class="form-control " placeholder="email@address.com">*/
/*                                             </div>*/
/*                                             */
/*                                             <div class="form-group">*/
/*                                                 <input type="text" name="Sujet" class="form-control" placeholder="Sujet">*/
/*                                                 */
/*                                             </div>*/
/*                                             <div class="form-group">*/
/*                                                 */
/*                                                 <textarea class="wysihtml5 form-control" placeholder="Message body" ></textarea>*/
/*  </div>*/
/*     <div> <button class="btn btn-purple waves-effect waves-light" type="submit" value="Envoyer"> <span>Envoyer</span> <i class="fa fa-send m-l-10"></i> </button>*/
/*                                             </div>*/
/* </form>*/
/* */
/*  {% endblock  %}*/
