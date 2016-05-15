<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_bda44db91f04c80287a8433407ecc316fa33086a94c6e2f3613371283cd23129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

 
           
             
                <div class=\"col-md-12 login-page\">
                  <form method=\"post\" class=\"login-form\">            
                      
                     </form>
                </div>
                
          
           <!-- REGISTER BOX -->
           <div class=\"top-score-title right-score col-md-12\">
            <h3>Register <span>Now</span><span class=\"point-int\"> !</span></h3>
                <div class=\"col-md-12 login-page\">
                    <form method=\"post\" class=\"register-form\">         
                       
                        <div class=\"name\">
                            <label for=\"name\">* First Name:</label><div class=\"clear\"></div>
                            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
                        </div>
                        <div class=\"name\">
                            <label for=\"lastname\">* Last Name:</label><div class=\"clear\"></div>
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
                        </div>
                        
                        <div class=\"email\">
                            <label for=\"email\">* Email:</label><div class=\"clear\"></div>
                           ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                            </br>       
                        </br>     
                        </br>                   
                        </br>
                        </br>
                        </div>
                       
                       

                        <div class=\"name\">
                            <label for=\"username\"></label><div class=\"clear\"></div>
                            <label for=\"username\">* Nom de compte:</label><div class=\"clear\"></div>
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                        </div>
                        <div class=\"password\">
                          
                            <div class=\"name col-md-4\">
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'widget');
        echo "
                        </div>
                          
                        </div>
                        </br>    </br>    </br>    </br>    </br> </br>    </br>    </br>    </br>    </br> </br>    </br>   
                        <div id=\"register-submit btn btn-primary  btn-block login-button\" >
                           ";
        // line 57
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        </div>
                      </form>
                        <div class=\"ctn-img\">
                            <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/federer.png"), "html", null, true);
        echo "\" />
                       </div><!--Close Images-->
                       <div class=\"clear\"></div>
                </div>
                
           </div><!--Close REgistration-->
         
        <section id=\"sponsor\" class=\"container\">
            <!--SECTION SPONSOR-->
           <div class=\"client-sport client-sport-nomargin\">
               <div class=\"content-banner\">
                  ";
        // line 80
        echo "                </div>
          </div>
          </section>
       
       <section id=\"footer-tag\">
           <div class=\"container\">
             <div class=\"col-md-12\">
              <div class=\"col-md-3\">
                 <h3>About Us</h3>
                 <p>Thank you for visiting tennisclub.com. Our mission is to 
                 provide unrivalled and unbiased informative and resources to help any sports fan who enjoys a flutter make informed and value led decisions.</p>
                 <p>Our mission is to 
                 provide unrivalled and unbiased informative, resources to help any sports fan who enjoys a flutter make.</p>
              </div>
              <div class=\"col-md-3 cat-footer\">
                <div class=\"footer-map\"></div>
                <h3 class='last-cat'>Categories</h3>
                <ul class=\"last-tips\">
                  <li><a href=\"tournaments.html\">Tournaments</a></li>
                  <li><a href=\"results.html\">All Results</a></li>
                  <li><a href=\"matches.html\">Matches London ATP</a></li>
                  <li><a href=\"matches.html\">Double ATP</a></li>
                  <li><a href=\"matches.html\">Double WTP</a></li>
                  <li><a href=\"shops.html\">Shop Best Price</a></li>
                </ul>
              </div>
              <div class=\"col-md-3\">
                 <h3>Last News</h3>
                 <ul class=\"footer-last-news\">
                    <li><img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/1/1.jpg"), "html", null, true);
        echo "\" alt=\"\" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
                    <li><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/1/2.jpg"), "html", null, true);
        echo "\" alt=\"\" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
                    <li><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/1/3.jpg"), "html", null, true);
        echo "\" alt=\"\" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
                 </ul>
              </div>
              <div class=\"col-md-3 footer-newsletters\">
                <h3>Newsletters</h3>
                <form method=\"post\">     
                    <div class=\"name\">
                        <label for=\"name\">* Name:</label><div class=\"clear\"></div>
                        <input id=\"Text1\" name=\"name\" type=\"text\" placeholder=\"e.g. Mr. John Doe\" required=\"\"/>
                    </div>
                    <div class=\"email\">
                        <label for=\"email\">* Email:</label><div class=\"clear\"></div>
                        <input id=\"Text2\" name=\"email\" type=\"text\" placeholder=\"example@domain.com\" required=\"\"/>
                    </div>
                    <div id=\"loader\">
                                <input type=\"submit\" value=\"Submit\"/>
                        </div>
                </form>
              </div>
              <div class=\"col-xs-12\">
                <ul class=\"social\">
                      <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                      <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                      <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                      <li><a href=\"#\"><i class=\"fa fa-digg\"></i></a></li>
                      <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
                      <li><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                      <li><a href=\"#\"><i class=\"fa fa-tumblr\"></i></a></li>

                    </ul>
              </div>
             </div>
           </div>
    </section>



    <div>
       
    </div>
                    </form>
                </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 111,  150 => 110,  146 => 109,  115 => 80,  101 => 61,  93 => 57,  84 => 50,  76 => 45,  60 => 32,  52 => 27,  45 => 23,  22 => 3,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/*  */
/*            */
/*              */
/*                 <div class="col-md-12 login-page">*/
/*                   <form method="post" class="login-form">            */
/*                       */
/*                      </form>*/
/*                 </div>*/
/*                 */
/*           */
/*            <!-- REGISTER BOX -->*/
/*            <div class="top-score-title right-score col-md-12">*/
/*             <h3>Register <span>Now</span><span class="point-int"> !</span></h3>*/
/*                 <div class="col-md-12 login-page">*/
/*                     <form method="post" class="register-form">         */
/*                        */
/*                         <div class="name">*/
/*                             <label for="name">* First Name:</label><div class="clear"></div>*/
/*                             {{ form_widget(form.nom) }}*/
/*                         </div>*/
/*                         <div class="name">*/
/*                             <label for="lastname">* Last Name:</label><div class="clear"></div>*/
/*                             {{ form_widget(form.prenom) }}*/
/*                         </div>*/
/*                         */
/*                         <div class="email">*/
/*                             <label for="email">* Email:</label><div class="clear"></div>*/
/*                            {{ form_widget(form.email) }}*/
/*                             </br>       */
/*                         </br>     */
/*                         </br>                   */
/*                         </br>*/
/*                         </br>*/
/*                         </div>*/
/*                        */
/*                        */
/* */
/*                         <div class="name">*/
/*                             <label for="username"></label><div class="clear"></div>*/
/*                             <label for="username">* Nom de compte:</label><div class="clear"></div>*/
/*                             {{ form_widget(form.username) }}*/
/*                         </div>*/
/*                         <div class="password">*/
/*                           */
/*                             <div class="name col-md-4">*/
/*                             {{ form_widget(form.plainPassword) }}*/
/*                         </div>*/
/*                           */
/*                         </div>*/
/*                         </br>    </br>    </br>    </br>    </br> </br>    </br>    </br>    </br>    </br> </br>    </br>   */
/*                         <div id="register-submit btn btn-primary  btn-block login-button" >*/
/*                            {# <input type="submit" value="{{ 'Register'|trans }}" />#}*/
/*                             {{ form_rest(form) }}*/
/*                         </div>*/
/*                       </form>*/
/*                         <div class="ctn-img">*/
/*                             <img src="{{ asset('frontEnd/images/federer.png') }}" />*/
/*                        </div><!--Close Images-->*/
/*                        <div class="clear"></div>*/
/*                 </div>*/
/*                 */
/*            </div><!--Close REgistration-->*/
/*          */
/*         <section id="sponsor" class="container">*/
/*             <!--SECTION SPONSOR-->*/
/*            <div class="client-sport client-sport-nomargin">*/
/*                <div class="content-banner">*/
/*                   {#   <ul class="sponsor second">*/
/*                         <li><img src="images/sponsor/2/1.jpg" alt="" /></li>*/
/*                         <li><img src="images/sponsor/2/2.jpg" alt="" /></li>*/
/*                         <li><img src="images/sponsor/2/3.jpg" alt="" /></li>*/
/*                         <li><img src="images/sponsor/2/4.jpg" alt="" /></li>*/
/*                         <li><img src="images/sponsor/2/5.jpg" alt="" /></li>*/
/*                         <li><img src="images/sponsor/2/2.jpg" alt="" /></li>*/
/*                     </ul>#}*/
/*                 </div>*/
/*           </div>*/
/*           </section>*/
/*        */
/*        <section id="footer-tag">*/
/*            <div class="container">*/
/*              <div class="col-md-12">*/
/*               <div class="col-md-3">*/
/*                  <h3>About Us</h3>*/
/*                  <p>Thank you for visiting tennisclub.com. Our mission is to */
/*                  provide unrivalled and unbiased informative and resources to help any sports fan who enjoys a flutter make informed and value led decisions.</p>*/
/*                  <p>Our mission is to */
/*                  provide unrivalled and unbiased informative, resources to help any sports fan who enjoys a flutter make.</p>*/
/*               </div>*/
/*               <div class="col-md-3 cat-footer">*/
/*                 <div class="footer-map"></div>*/
/*                 <h3 class='last-cat'>Categories</h3>*/
/*                 <ul class="last-tips">*/
/*                   <li><a href="tournaments.html">Tournaments</a></li>*/
/*                   <li><a href="results.html">All Results</a></li>*/
/*                   <li><a href="matches.html">Matches London ATP</a></li>*/
/*                   <li><a href="matches.html">Double ATP</a></li>*/
/*                   <li><a href="matches.html">Double WTP</a></li>*/
/*                   <li><a href="shops.html">Shop Best Price</a></li>*/
/*                 </ul>*/
/*               </div>*/
/*               <div class="col-md-3">*/
/*                  <h3>Last News</h3>*/
/*                  <ul class="footer-last-news">*/
/*                     <li><img src="{{ asset('frontEnd/images/1/1.jpg') }}" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>*/
/*                     <li><img src="{{ asset('frontEnd/images/1/2.jpg') }}" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>*/
/*                     <li><img src="{{ asset('frontEnd/images/1/3.jpg') }}" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>*/
/*                  </ul>*/
/*               </div>*/
/*               <div class="col-md-3 footer-newsletters">*/
/*                 <h3>Newsletters</h3>*/
/*                 <form method="post">     */
/*                     <div class="name">*/
/*                         <label for="name">* Name:</label><div class="clear"></div>*/
/*                         <input id="Text1" name="name" type="text" placeholder="e.g. Mr. John Doe" required=""/>*/
/*                     </div>*/
/*                     <div class="email">*/
/*                         <label for="email">* Email:</label><div class="clear"></div>*/
/*                         <input id="Text2" name="email" type="text" placeholder="example@domain.com" required=""/>*/
/*                     </div>*/
/*                     <div id="loader">*/
/*                                 <input type="submit" value="Submit"/>*/
/*                         </div>*/
/*                 </form>*/
/*               </div>*/
/*               <div class="col-xs-12">*/
/*                 <ul class="social">*/
/*                       <li><a href="#"><i class="fa fa-facebook"></i></a></li>*/
/*                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/*                       <li><a href="#"><i class="fa fa-linkedin"></i></a></li>*/
/*                       <li><a href="#"><i class="fa fa-digg"></i></a></li>*/
/*                       <li><a href="#"><i class="fa fa-rss"></i></a></li>*/
/*                       <li><a href="#"><i class="fa fa-youtube"></i></a></li>*/
/*                       <li><a href="#"><i class="fa fa-tumblr"></i></a></li>*/
/* */
/*                     </ul>*/
/*               </div>*/
/*              </div>*/
/*            </div>*/
/*     </section>*/
/* */
/* */
/* */
/*     <div>*/
/*        */
/*     </div>*/
/*                     </form>*/
/*                 </div>*/
/* */
/* */
