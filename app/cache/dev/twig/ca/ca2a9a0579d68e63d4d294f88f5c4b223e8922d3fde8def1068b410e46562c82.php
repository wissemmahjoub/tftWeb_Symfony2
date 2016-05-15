<?php

/* wyshybackNavBundle:Nav:score.html.twig */
class __TwigTemplate_5dc6c0ce6d6ddd42f9943e6f14f0499bdc31323fb607752111bcd962d0230246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:score.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'userInfo' => array($this, 'block_userInfo'),
            'js' => array($this, 'block_js'),
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
        echo "    <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Competitions</span> <span class=\"arrow \"></span></a> 
        <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AfficherComp");
        echo "\"> Lise des competitions </a> </li>
            <li > <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AjouterComp");
        echo "\">Ajouter une nouvelle</a> </li>
        </ul>

    </li>
    <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Matchs</span> <span class=\"arrow \"></span></a> 
        <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AfficherComp");
        echo "\"> Lise des competitions </a> </li>
            <li > <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AjouterComp");
        echo "\">Ajouter une nouvelle</a> </li>
        </ul>

    </li>
    <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 2</span> <span class=\"arrow \"></span></a> 
        <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AfficherComp");
        echo "\"> Lise des competitions </a> </li>
            <li > <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_AjouterComp");
        echo "\">Ajouter une nouvelle</a> </li>
        </ul>

    </li>
";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "    <div class=\"col-md-12\">
        <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
                <h4>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "getIdjoueur1", array(), "method"), "getNom", array(), "method"), "html", null, true);
        echo "<span class=\"semi-bold\"> Vs</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "getIdjoueur2", array(), "method"), "getNom", array(), "method"), "html", null, true);
        echo "</h4>
                <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body no-border\">
";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 42
    public function block_userInfo($context, array $blocks = array())
    {
        // line 43
        echo "    Personne 1
";
    }

    // line 46
    public function block_js($context, array $blocks = array())
    {
        // line 47
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/js/datatables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
    </script>
";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:score.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 47,  111 => 46,  106 => 43,  103 => 42,  94 => 36,  85 => 32,  80 => 29,  77 => 28,  68 => 22,  64 => 21,  55 => 15,  51 => 14,  42 => 8,  38 => 7,  34 => 5,  31 => 4,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* */
/* {% block menu %}*/
/*     <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Competitions</span> <span class="arrow "></span></a> */
/*         <ul class="sub-menu">*/
/*             <li > <a href="{{path('wyshyback_nav_AfficherComp')}}"> Lise des competitions </a> </li>*/
/*             <li > <a href="{{path('wyshyback_nav_AjouterComp')}}">Ajouter une nouvelle</a> </li>*/
/*         </ul>*/
/* */
/*     </li>*/
/*     <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Matchs</span> <span class="arrow "></span></a> */
/*         <ul class="sub-menu">*/
/*             <li > <a href="{{path('wyshyback_nav_AfficherComp')}}"> Lise des competitions </a> </li>*/
/*             <li > <a href="{{path('wyshyback_nav_AjouterComp')}}">Ajouter une nouvelle</a> </li>*/
/*         </ul>*/
/* */
/*     </li>*/
/*     <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Menu 2</span> <span class="arrow "></span></a> */
/*         <ul class="sub-menu">*/
/*             <li > <a href="{{path('wyshyback_nav_AfficherComp')}}"> Lise des competitions </a> </li>*/
/*             <li > <a href="{{path('wyshyback_nav_AjouterComp')}}">Ajouter une nouvelle</a> </li>*/
/*         </ul>*/
/* */
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="col-md-12">*/
/*         <div class="grid simple">*/
/*             <div class="grid-title no-border">*/
/*                 <h4>{{match.getIdjoueur1().getNom()}}<span class="semi-bold"> Vs</span> {{match.getIdjoueur2().getNom()}}</h4>*/
/*                 <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*             </div>*/
/*             <div class="grid-body no-border">*/
/* {{ form(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block userInfo %}*/
/*     Personne 1*/
/* {% endblock %}*/
/* */
/* {% block js %}*/
/*     <script src="{{ asset('backEnd/assets/js/datatables.js') }}" type="text/javascript"></script>*/
/*     <script>*/
/*     </script>*/
/* {% endblock %}*/
