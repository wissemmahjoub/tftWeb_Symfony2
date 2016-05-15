<?php

/* wyshybackNavBundle:Nav:AfficheTest.html.twig */
class __TwigTemplate_d799b64b3a961f2872d0b07b1bcc5efcb26e1493839a18d1cb4ef4c6e76846d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:AfficheTest.html.twig", 1);
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

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "         <li class=\"\"> <a href=\"javascript:;\"> <i class=\"fa fa-medkit\"></i> <span class=\"title\">Test de Dopage</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li> <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tft_AddTestDopage");
        echo "\"> Nouveau Test de dopage  </a> </li>
             <li> <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("tft_ListeTestDopages");
        echo "\"> Liste des Tests de dopages  </a> </li>
          </ul>
     
      
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<center>


<div class=\"grid simple\">
 <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assetspluginsjquery-notificationscsslocation-sel.css"), "html", null, true);
        echo "\" type=\"text/css\"></script> 
 <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assetspluginsjquery-notificationscsslocation-sel.min.css"), "html", null, true);
        echo "\" type=\"text/css\"></script> 
 <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assetspluginsjquery-notificationscssmessenger-spinner.css"), "html", null, true);
        echo "\" type=\"text/css\"></script> 
 <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assetspluginsjquery-notificationscssmessenger-spinner.min.css"), "html", null, true);
        echo "\" type=\"text/css\"></script> 
 <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assetspluginsjquery-notificationscssmessenger-theme-flat.css"), "html", null, true);
        echo "\" type=\"text/css\"></script> 
 <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assetspluginsjquery-notificationscssmessenger-theme-flat.css"), "html", null, true);
        echo "\" type=\"text/css\"></script> 

    
    
 <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    
 <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
 <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assetspluginsjquery-notificationscssmessenger-theme-flat.css"), "html", null, true);
        echo "\" type=\"text/css\"></script> 
 <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
<div class=\"grid-title no-border\">
    
              <h4>Liste <span class=\"semi-bold\"> des Tests de dopages</span></h4>
              <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
 
<div class=\"grid-body no-border\">
 
<div class=\"grid simple \">
   <table class=\"table table-striped\" id=\"example2\" >
                <thead>
                  <tr>
                    <th>Libelle</th>
                    <th>Date </th>
                    <th>Heure </th>
                    <th>Modifier</th>
                    <th>Supprimer </th> 
                    
                  </tr>
                </thead>
               
                
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tests"]) ? $context["Tests"] : $this->getContext($context, "Tests")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 55
            echo "                <tbody>
                    <tr class=\"odd gradeX\">
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "libelletest", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "datetest", array()), "Y/m/d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "heure", array()), "html", null, true);
            echo "</td> 
                    
                     <td><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_UpdateTestDopages", array("id" => $this->getAttribute($context["t"], "idtest", array()))), "html", null, true);
            echo "\" class='btn btn-info btn-small'>Modifier</a></td>
                     <td><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_deletTestDopages", array("id" => $this->getAttribute($context["t"], "idtest", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes-vous sur de supprimer ce test ?')\" class='btn btn-danger btn-small'>Supprimer</a></td>
                    </tr>
                </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo " 
    </table>

</div>    \t\t
</div>
</div>
 
</center>
    

 ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:AfficheTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 65,  149 => 62,  145 => 61,  140 => 59,  136 => 58,  132 => 57,  128 => 55,  124 => 54,  98 => 31,  94 => 30,  90 => 29,  85 => 27,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  52 => 14,  49 => 13,  40 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* {% block menu %}*/
/*          <li class=""> <a href="javascript:;"> <i class="fa fa-medkit"></i> <span class="title">Test de Dopage</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li> <a href="{{path('tft_AddTestDopage')}}"> Nouveau Test de dopage  </a> </li>*/
/*              <li> <a href="{{path('tft_ListeTestDopages')}}"> Liste des Tests de dopages  </a> </li>*/
/*           </ul>*/
/*      */
/*       */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <center>*/
/* */
/* */
/* <div class="grid simple">*/
/*  <script src="{{ asset('backEnd/assets\plugins\jquery-notifications\css\location-sel.css') }}" type="text/css"></script> */
/*  <script src="{{ asset('backEnd/assets\plugins\jquery-notifications\css\location-sel.min.css') }}" type="text/css"></script> */
/*  <script src="{{ asset('backEnd/assets\plugins\jquery-notifications\css\messenger-spinner.css') }}" type="text/css"></script> */
/*  <script src="{{ asset('backEnd/assets\plugins\jquery-notifications\css\messenger-spinner.min.css') }}" type="text/css"></script> */
/*  <script src="{{ asset('backEnd/assets\plugins\jquery-notifications\css\messenger-theme-flat.css') }}" type="text/css"></script> */
/*  <script src="{{ asset('backEnd/assets\plugins\jquery-notifications\css\messenger-theme-flat.css') }}" type="text/css"></script> */
/* */
/*     */
/*     */
/*  <script src="{{ asset('backEnd/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script> */
/*     */
/*  <script src="{{ asset('backEnd/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script> */
/*  <script src="{{ asset('backEnd/assets\plugins\jquery-notifications\css\messenger-theme-flat.css') }}" type="text/css"></script> */
/*  <script src="{{ asset('backEnd/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>    */
/* <div class="grid-title no-border">*/
/*     */
/*               <h4>Liste <span class="semi-bold"> des Tests de dopages</span></h4>*/
/*               <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*             </div>*/
/*  */
/* <div class="grid-body no-border">*/
/*  */
/* <div class="grid simple ">*/
/*    <table class="table table-striped" id="example2" >*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <th>Libelle</th>*/
/*                     <th>Date </th>*/
/*                     <th>Heure </th>*/
/*                     <th>Modifier</th>*/
/*                     <th>Supprimer </th> */
/*                     */
/*                   </tr>*/
/*                 </thead>*/
/*                */
/*                 */
/*     {% for t in Tests %}*/
/*                 <tbody>*/
/*                     <tr class="odd gradeX">*/
/*                     <td>{{t.libelletest}}</td>*/
/*                     <td>{{t.datetest|date('Y/m/d')}}</td>*/
/*                     <td>{{t.heure}}</td> */
/*                     */
/*                      <td><a href="{{path('tft_UpdateTestDopages',{id:t.idtest})}}" class='btn btn-info btn-small'>Modifier</a></td>*/
/*                      <td><a href="{{path('tft_deletTestDopages',{id:t.idtest})}}" onclick="return confirm('Etes-vous sur de supprimer ce test ?')" class='btn btn-danger btn-small'>Supprimer</a></td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*     {% endfor %} */
/*     </table>*/
/* */
/* </div>    		*/
/* </div>*/
/* </div>*/
/*  */
/* </center>*/
/*     */
/* */
/*  {% endblock %}*/
/*  */
