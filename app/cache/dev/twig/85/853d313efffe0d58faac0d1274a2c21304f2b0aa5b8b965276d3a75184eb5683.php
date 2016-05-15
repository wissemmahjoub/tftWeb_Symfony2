<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_0b8614f640950d058b423a1de45f400ff3dc1bce30646517e01c07e02d661566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            
            ";
        // line 9
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 11
        echo "        </div>
    </body>
</html>
";
    }

    // line 9
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        // line 10
        echo "            ";
    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  39 => 9,  32 => 11,  30 => 9,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             */
/*             {% block hwi_oauth_content %}*/
/*             {% endblock hwi_oauth_content %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
