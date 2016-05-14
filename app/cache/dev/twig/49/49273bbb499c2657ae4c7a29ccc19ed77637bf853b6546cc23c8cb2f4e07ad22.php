<?php

/* wyshybackNavBundle:Nav:page1.html.twig */
class __TwigTemplate_454acdf5f0034aad5392f920eca0dbe19bd6fb15986365ae9e07720c1b11055c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("wyshybackNavBundle::Layout.html.twig", "wyshybackNavBundle:Nav:page1.html.twig", 2);
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
        echo "                     <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 1</span> </a> </li>
        <li class=\"\"> <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_joueur");
        echo "\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Joueurs</span> </a> </li>
        <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 3</span> </a> </li>
        <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 4</span> </a> </li>
        <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 5</span> </a> </li>
        <li class=\"\"> <a href=\"widgets.html\"> <i class=\"fa fa-th\"></i> <span class=\"title\">Menu 6</span> <span class=\"label label-important pull-right \">HOT</span></a> </li>
        
                    ";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
              <h4>Condensed <span class=\"semi-bold\">Layout</span></h4>
              <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body no-border\">
\t\t\t<form novalidate=\"novalidate\" class=\"form-no-horizontal-spacing\" id=\"form-condensed\">\t
              <div class=\"row column-seperation\">
                <div class=\"col-md-6\">
                  <h4>Basic Information</h4>            
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
                    </div>
                </div>
                <div class=\"col-md-6\">
\t\t\t\t
                  <h4>Postal Information</h4>
                  
                    <div class=\"row form-row\">
                      <div class=\"col-md-12\">
                        <input name=\"form3Address\" id=\"form3Address\" class=\"form-control\" placeholder=\"Address\" type=\"text\">
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-6\">
                        <input name=\"form3City\" id=\"form3City\" class=\"form-control\" placeholder=\"City\" type=\"text\">
                      </div>
                      <div class=\"col-md-6\">
                        <input name=\"form3State\" id=\"form3State\" class=\"form-control\" placeholder=\"State\" type=\"text\">
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-8\">
                        <input name=\"form3Country\" id=\"form3Country\" class=\"form-control\" placeholder=\"Country\" type=\"text\">
                      </div>
                      <div class=\"col-md-4\">
                        <input name=\"form3PostalCode\" id=\"form3PostalCode\" class=\"form-control\" placeholder=\"Postal Code\" type=\"text\">
                      </div>
                    </div>
                    <div class=\"row form-row\">
                      <div class=\"col-md-4\">
                        <input name=\"form3TeleCode\" id=\"form3TeleCode\" class=\"form-control\" placeholder=\"+94\" type=\"text\">
                      </div>
                      <div class=\"col-md-8\">
                        <input name=\"form3TeleNo\" id=\"form3TeleNo\" class=\"form-control\" placeholder=\"Phone Number\" type=\"text\">
                      </div>
                    </div>
                    <div class=\"row small-text\">
\t\t\t\t\t<p class=\"col-md-12\">
\t\t\t\t\tNOTE - Facts to be considered, Simply remove or edit this as for what you desire. Disabled font Color and size
\t\t\t\t\t</p>
\t\t\t\t\t</div>
             
                </div>
              </div>
\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t  <div class=\"checkbox checkbox check-success \t\">
\t\t\t\t\t\t<input value=\"1\" id=\"chkTerms\" type=\"checkbox\">
\t\t\t\t\t\t<label for=\"chkTerms\">I Here by agree on the Term and condition. </label>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t  <button class=\"btn btn-danger btn-cons\" type=\"submit\"><i class=\"icon-ok\"></i> Save</button>
\t\t\t\t\t  <button class=\"btn btn-white btn-cons\" type=\"button\">Cancel</button>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t</form>
            </div>
          
    </div>
    ";
    }

    // line 125
    public function block_userInfo($context, array $blocks = array())
    {
        // line 126
        echo "                Personne 1
                ";
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle:Nav:page1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 126,  161 => 125,  50 => 16,  47 => 15,  36 => 7,  33 => 6,  30 => 5,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "wyshybackNavBundle::Layout.html.twig" %}*/
/* */
/*     */
/*                 {% block menu %}*/
/*                      <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Menu 1</span> </a> </li>*/
/*         <li class=""> <a href="{{ path('wyshyback_nav_joueur') }}"> <i class="fa fa-th"></i> <span class="title">Joueurs</span> </a> </li>*/
/*         <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Menu 3</span> </a> </li>*/
/*         <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Menu 4</span> </a> </li>*/
/*         <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Menu 5</span> </a> </li>*/
/*         <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Menu 6</span> <span class="label label-important pull-right ">HOT</span></a> </li>*/
/*         */
/*                     {% endblock %}*/
/*                     */
/* {% block content %}*/
/*     <div class="grid simple">*/
/*             <div class="grid-title no-border">*/
/*               <h4>Condensed <span class="semi-bold">Layout</span></h4>*/
/*               <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>*/
/*             </div>*/
/*             <div class="grid-body no-border">*/
/* 			<form novalidate="novalidate" class="form-no-horizontal-spacing" id="form-condensed">	*/
/*               <div class="row column-seperation">*/
/*                 <div class="col-md-6">*/
/*                   <h4>Basic Information</h4>            */
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
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/* 				*/
/*                   <h4>Postal Information</h4>*/
/*                   */
/*                     <div class="row form-row">*/
/*                       <div class="col-md-12">*/
/*                         <input name="form3Address" id="form3Address" class="form-control" placeholder="Address" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-6">*/
/*                         <input name="form3City" id="form3City" class="form-control" placeholder="City" type="text">*/
/*                       </div>*/
/*                       <div class="col-md-6">*/
/*                         <input name="form3State" id="form3State" class="form-control" placeholder="State" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-8">*/
/*                         <input name="form3Country" id="form3Country" class="form-control" placeholder="Country" type="text">*/
/*                       </div>*/
/*                       <div class="col-md-4">*/
/*                         <input name="form3PostalCode" id="form3PostalCode" class="form-control" placeholder="Postal Code" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row form-row">*/
/*                       <div class="col-md-4">*/
/*                         <input name="form3TeleCode" id="form3TeleCode" class="form-control" placeholder="+94" type="text">*/
/*                       </div>*/
/*                       <div class="col-md-8">*/
/*                         <input name="form3TeleNo" id="form3TeleNo" class="form-control" placeholder="Phone Number" type="text">*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="row small-text">*/
/* 					<p class="col-md-12">*/
/* 					NOTE - Facts to be considered, Simply remove or edit this as for what you desire. Disabled font Color and size*/
/* 					</p>*/
/* 					</div>*/
/*              */
/*                 </div>*/
/*               </div>*/
/* 				<div class="form-actions">*/
/* 					<div class="pull-left">*/
/* 					  <div class="checkbox checkbox check-success 	">*/
/* 						<input value="1" id="chkTerms" type="checkbox">*/
/* 						<label for="chkTerms">I Here by agree on the Term and condition. </label>*/
/* 					  </div>*/
/* 					</div>*/
/* 					<div class="pull-right">*/
/* 					  <button class="btn btn-danger btn-cons" type="submit"><i class="icon-ok"></i> Save</button>*/
/* 					  <button class="btn btn-white btn-cons" type="button">Cancel</button>*/
/* 					</div>*/
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
