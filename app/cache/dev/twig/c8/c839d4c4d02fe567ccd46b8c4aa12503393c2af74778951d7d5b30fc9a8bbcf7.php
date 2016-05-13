<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6d6ae891c8a53d60b2018ae19be3a35b162d0baadc85fde56e184ad23c6e80b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::index.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'contentconnexion' => array($this, 'block_contentconnexion'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'contentmenu' => array($this, 'block_contentmenu'),
            'content1' => array($this, 'block_content1'),
            'content2' => array($this, 'block_content2'),
            'content3' => array($this, 'block_content3'),
            'content4' => array($this, 'block_content4'),
            'content5' => array($this, 'block_content5'),
            'content6' => array($this, 'block_content6'),
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

    // line 3
    public function block_contentconnexion($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 7
        echo " ";
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 5)->display($context);
    }

    // line 9
    public function block_contentmenu($context, array $blocks = array())
    {
        // line 10
        echo "     ";
    }

    // line 12
    public function block_content1($context, array $blocks = array())
    {
        // line 13
        echo "         ";
    }

    // line 15
    public function block_content2($context, array $blocks = array())
    {
        // line 16
        echo "        ";
    }

    // line 17
    public function block_content3($context, array $blocks = array())
    {
        // line 18
        echo "                      ";
    }

    // line 19
    public function block_content4($context, array $blocks = array())
    {
        // line 20
        echo "                                ";
    }

    // line 21
    public function block_content5($context, array $blocks = array())
    {
        // line 22
        echo "                                          ";
    }

    // line 23
    public function block_content6($context, array $blocks = array())
    {
        // line 24
        echo "                                                    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  94 => 23,  90 => 22,  87 => 21,  83 => 20,  80 => 19,  76 => 18,  73 => 17,  69 => 16,  66 => 15,  62 => 13,  59 => 12,  55 => 10,  52 => 9,  48 => 5,  45 => 4,  41 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::index.html.twig" %}*/
/* */
/*  {% block contentconnexion %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/*  {% endblock contentconnexion %}*/
/*  */
/*  {% block contentmenu %}*/
/*      {% endblock contentmenu %}*/
/*      */
/*      {% block content1 %}*/
/*          {% endblock content1 %}*/
/*          */
/*        {% block content2 %}*/
/*         {% endblock content2 %}*/
/*          {% block content3 %}*/
/*                       {% endblock content3 %}*/
/*                            {% block content4 %}*/
/*                                 {% endblock content4 %}*/
/*                                      {% block content5 %}*/
/*                                           {% endblock content5 %}*/
/*                                                {% block content6 %}*/
/*                                                     {% endblock content6 %}*/
