<?php

/* wyshybackNavBundle:Nav:RechercheStade.html.twig */
class __TwigTemplate_4cac95029275741d964b92b8c75a21bb4a7386602052dc450ce768b3601cecb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:RechercheStade.html.twig", 1);
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
        echo "        <li class=\"\"> <a href=\"javascript:;\"> <i class=\"icon-custom-extra\"></i> <span class=\"title\">Stade</span> <span class=\"arrow \"></span> </a>
          <ul class=\"sub-menu\">
            <li > <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tft_addStade");
        echo "\"> Ajouter </a> </li>
            <li> <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("tft_findStade");
        echo "\"> Afficher </a> </li>
          </ul>
        </li>
      
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<center>
     
  <h1 class=\"light\">Liste des <span class=\"semi-bold\">Stade</span></h1>
 <form method=\"post\" action =\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("tft_findStade");
        echo "\">
     <!--  zone de texte pour la recherche --->
   
    
         <center>
     <div class=\"input-group\">
\t<span class=\"input-group-addon primary\">\t\t\t\t  
\t<span class=\"arrow\"></span>
\t<i class=\"fa fa-align-justify\"></i>
\t </span>
         <input type=\"text\" class=\"form-control\"  name=\"libellestade\" id=\"libellestade\" placeholder=\"   L  i  b  e  l  l  e\"  >
     </div>
         </center>
     <p class=\"col-md-12\">
\tVous Pouvez effectuer la recherche on utilisant le LIBELLE du stade 
    </p>
  
     <br> <br>
     
     
    <input type=\"submit\" value=\"Recherche\" class=\"btn btn-success btn-cons\"><br><br>
 </form>


<div class=\"grid simple\">
    
<div class=\"grid-title no-border\">
   <!-- ce div contient 2 bouton (cacher et reduire)
   <div class=\"tools\"> 
        <a href=\"javascript:;\" class=\"collapse\"></a>  
        <a href=\"javascript:;\" class=\"remove\"></a>
    </div> 
   -->
</div>
 
<div class=\"grid-body no-border\">
 
<div class=\"grid simple \">
   <table class=\"table table-striped\" id=\"example2\" >
                <thead>
                  <tr>
                    <th>Libelle</th>
                    <th>Addresse </th>
                    <th>Capacite </th>
                    <th>Surface </th> 
                    <th>Date de Creation </th>
                    <th>Modifier </th>
                    <th>Supprimer</th>
                    <th>Localisation</th>
                  </tr>
                </thead>
    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Stade"]) ? $context["Stade"] : $this->getContext($context, "Stade")));
        foreach ($context['_seq'] as $context["_key"] => $context["S"]) {
            // line 69
            echo "                <tbody>
                    <tr class=\"odd gradeX\">
                    <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["S"], "libellestade", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["S"], "ville", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["S"], "capacite", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["S"], "surface", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["S"], "datecreation", array()), "Y/m/d"), "html", null, true);
            echo "</td>

                     <td><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_updateStade", array("libellestade" => $this->getAttribute($context["S"], "libellestade", array()))), "html", null, true);
            echo " \" class='btn btn-info btn-small'>Modifier</a></td>
                    <td><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_deleteStade", array("idstade" => $this->getAttribute($context["S"], "idstade", array()))), "html", null, true);
            echo "\" class=\" btn btn-danger btn-small\" onclick=\"return confirm('Etes-vous sur de supprimer ce Stade ?')\">Supprimer</a></td>
                    <td><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_LocaliserStade", array("idstade" => $this->getAttribute($context["S"], "idstade", array()))), "html", null, true);
            echo "\" class=\" btn btn-success btn-small\">Localisation</a></td>
                 
                    </tr>
                </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['S'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo " 
    </table>
</div>    \t\t
</div>
</div>
  
</center>
    
 <div class=\"col-md-4\">
                  
                  <br>
                  <button class=\"btn btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\"> Launch demo modal </button>
                  <!-- Modal -->
                  <div class=\"modal fade\" id=\"myModal\" tabindex=\"200\" role=\"dialog\" aria-labelledby=\"myModalLabel\" >
                    <div class=\"modal-dialog\">
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
                          <br>
                          <i class=\"fa fa-credit-card fa-7x\"></i>
                          <h4 id=\"myModalLabel\" class=\"semi-bold\">GOOGLE MAP API.</h4>
                          <p class=\"no-margin\">cliquer juste sur la ville correspondante  </p>
                          <br>
                        </div>
                        <div class=\"modal-body\">
                      ytghhhjhh
                      <img src=\"'backEnd/assets/logo-b2x.png\">
                        </div>
                        <div class=\"modal-footer\">
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                          
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                </div>
    
    <!DOCTYPE html>
  


 
 
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>




    
 
    ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:RechercheStade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 83,  148 => 79,  144 => 78,  140 => 77,  135 => 75,  131 => 74,  127 => 73,  123 => 72,  119 => 71,  115 => 69,  111 => 68,  57 => 17,  52 => 14,  49 => 13,  40 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/* {% block menu %}*/
/*         <li class=""> <a href="javascript:;"> <i class="icon-custom-extra"></i> <span class="title">Stade</span> <span class="arrow "></span> </a>*/
/*           <ul class="sub-menu">*/
/*             <li > <a href="{{path('tft_addStade')}}"> Ajouter </a> </li>*/
/*             <li> <a href="{{path('tft_findStade')}}"> Afficher </a> </li>*/
/*           </ul>*/
/*         </li>*/
/*       */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <center>*/
/*      */
/*   <h1 class="light">Liste des <span class="semi-bold">Stade</span></h1>*/
/*  <form method="post" action ="{{path('tft_findStade')}}">*/
/*      <!--  zone de texte pour la recherche --->*/
/*    */
/*     */
/*          <center>*/
/*      <div class="input-group">*/
/* 	<span class="input-group-addon primary">				  */
/* 	<span class="arrow"></span>*/
/* 	<i class="fa fa-align-justify"></i>*/
/* 	 </span>*/
/*          <input type="text" class="form-control"  name="libellestade" id="libellestade" placeholder="   L  i  b  e  l  l  e"  >*/
/*      </div>*/
/*          </center>*/
/*      <p class="col-md-12">*/
/* 	Vous Pouvez effectuer la recherche on utilisant le LIBELLE du stade */
/*     </p>*/
/*   */
/*      <br> <br>*/
/*      */
/*      */
/*     <input type="submit" value="Recherche" class="btn btn-success btn-cons"><br><br>*/
/*  </form>*/
/* */
/* */
/* <div class="grid simple">*/
/*     */
/* <div class="grid-title no-border">*/
/*    <!-- ce div contient 2 bouton (cacher et reduire)*/
/*    <div class="tools"> */
/*         <a href="javascript:;" class="collapse"></a>  */
/*         <a href="javascript:;" class="remove"></a>*/
/*     </div> */
/*    -->*/
/* </div>*/
/*  */
/* <div class="grid-body no-border">*/
/*  */
/* <div class="grid simple ">*/
/*    <table class="table table-striped" id="example2" >*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <th>Libelle</th>*/
/*                     <th>Addresse </th>*/
/*                     <th>Capacite </th>*/
/*                     <th>Surface </th> */
/*                     <th>Date de Creation </th>*/
/*                     <th>Modifier </th>*/
/*                     <th>Supprimer</th>*/
/*                     <th>Localisation</th>*/
/*                   </tr>*/
/*                 </thead>*/
/*     {% for S in Stade %}*/
/*                 <tbody>*/
/*                     <tr class="odd gradeX">*/
/*                     <td>{{S.libellestade}}</td>*/
/*                     <td>{{S.ville}} </td>*/
/*                     <td>{{S.capacite}}</td>*/
/*                     <td>{{S.surface}}</td>*/
/*                     <td>{{S.datecreation|date('Y/m/d')}}</td>*/
/* */
/*                      <td><a href="{{path('tft_updateStade',{libellestade:S.libellestade})}} " class='btn btn-info btn-small'>Modifier</a></td>*/
/*                     <td><a href="{{path('tft_deleteStade',{idstade:S.idstade})}}" class=" btn btn-danger btn-small" onclick="return confirm('Etes-vous sur de supprimer ce Stade ?')">Supprimer</a></td>*/
/*                     <td><a href="{{path('tft_LocaliserStade',{idstade:S.idstade})}}" class=" btn btn-success btn-small">Localisation</a></td>*/
/*                  */
/*                     </tr>*/
/*                 </tbody>*/
/*     {% endfor %} */
/*     </table>*/
/* </div>    		*/
/* </div>*/
/* </div>*/
/*   */
/* </center>*/
/*     */
/*  <div class="col-md-4">*/
/*                   */
/*                   <br>*/
/*                   <button class="btn btn-lg" data-toggle="modal" data-target="#myModal"> Launch demo modal </button>*/
/*                   <!-- Modal -->*/
/*                   <div class="modal fade" id="myModal" tabindex="200" role="dialog" aria-labelledby="myModalLabel" >*/
/*                     <div class="modal-dialog">*/
/*                       <div class="modal-content">*/
/*                         <div class="modal-header">*/
/*                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>*/
/*                           <br>*/
/*                           <i class="fa fa-credit-card fa-7x"></i>*/
/*                           <h4 id="myModalLabel" class="semi-bold">GOOGLE MAP API.</h4>*/
/*                           <p class="no-margin">cliquer juste sur la ville correspondante  </p>*/
/*                           <br>*/
/*                         </div>*/
/*                         <div class="modal-body">*/
/*                       ytghhhjhh*/
/*                       <img src="'backEnd/assets/logo-b2x.png">*/
/*                         </div>*/
/*                         <div class="modal-footer">*/
/*                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                           */
/*                         </div>*/
/*                       </div>*/
/*                       <!-- /.modal-content -->*/
/*                     </div>*/
/*                     <!-- /.modal-dialog -->*/
/*                   </div>*/
/*                   <!-- /.modal -->*/
/*                 </div>*/
/*     */
/*     <!DOCTYPE html>*/
/*   */
/* */
/* */
/*  */
/*  */
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* */
/* */
/* */
/* */
/*     */
/*  */
/*     {% endblock %}*/
