<?php

/* FOSUserBundle::index.html.twig */
class __TwigTemplate_65024ebf43f9d4d473a447d7a84a8691e7b79d450abccd73ff5a21506e5c4f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenthead' => array($this, 'block_contenthead'),
            'contentconnexion' => array($this, 'block_contentconnexion'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'contentmenu' => array($this, 'block_contentmenu'),
            'content1' => array($this, 'block_content1'),
            'content2' => array($this, 'block_content2'),
            'content3' => array($this, 'block_content3'),
            'content4' => array($this, 'block_content4'),
            'content5' => array($this, 'block_content5'),
            'content6' => array($this, 'block_content6'),
            'contentstatistique' => array($this, 'block_contentstatistique'),
            'contetsubscription' => array($this, 'block_contetsubscription'),
            'contentclients' => array($this, 'block_contentclients'),
            'contentpicclient' => array($this, 'block_contentpicclient'),
            'contentfoter' => array($this, 'block_contentfoter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    ";
        // line 2
        $this->displayBlock('contenthead', $context, $blocks);
        // line 38
        echo "    <body>
        <!--SECTION TOP LOGIN-->


        ";
        // line 42
        $this->displayBlock('contentconnexion', $context, $blocks);
        // line 183
        echo "        <!--SECTION MENU -->
        ";
        // line 184
        $this->displayBlock('contentmenu', $context, $blocks);
        // line 231
        echo "

        <!--SECTION CONTAINER SLIDER-->
        ";
        // line 234
        $this->displayBlock('content1', $context, $blocks);
        // line 249
        echo "  


        <!-- SECTION NEWS SLIDER -->
        ";
        // line 253
        $this->displayBlock('content2', $context, $blocks);
        // line 307
        echo "
        ";
        // line 308
        $this->displayBlock('content3', $context, $blocks);
        // line 323
        echo "

        <!--SECTION Match TOP SCORE-->
        ";
        // line 326
        $this->displayBlock('content4', $context, $blocks);
        // line 421
        echo "
        ";
        // line 422
        $this->displayBlock('content5', $context, $blocks);
        // line 489
        echo "
        <!-- PARALLAX BLACK TENNIS-->
        ";
        // line 491
        $this->displayBlock('content6', $context, $blocks);
        // line 502
        echo "

        <!--SECTION STATISTIC RESULTS-->
        ";
        // line 505
        $this->displayBlock('contentstatistique', $context, $blocks);
        // line 557
        echo "

        <!-- SECTION SUBSCRIPTIONS-->
        ";
        // line 560
        $this->displayBlock('contetsubscription', $context, $blocks);
        // line 569
        echo "

        <!--SECTION CLIENTS-->
        ";
        // line 572
        $this->displayBlock('contentclients', $context, $blocks);
        // line 579
        echo "

        <!--SECTION TOP PRODUCTS-->
        <!--SECTION SPONSOR-->
        ";
        // line 583
        $this->displayBlock('contentpicclient', $context, $blocks);
        // line 586
        echo "

        <!--SECTION FOOTER--> 
        ";
        // line 589
        $this->displayBlock('contentfoter', $context, $blocks);
        // line 659
        echo "

        <script src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery.transit.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!--MENU-->
        <script src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/menu/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 667
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/menu/cbpHorizontalMenu.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!--END MENU-->

        <!--Mini Flexslide-->
        <script src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/minislide/jquery.flexslider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- Percentace circolar -->
        <script src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/circle/jquery-asPieProgress.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/circle/rainbow.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!--Gallery-->
        <script src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/gallery/jquery.prettyPhoto.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/gallery/isotope.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- Button Anchor Top-->
        <script src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery.ui.totop.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery.bxslider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!--Carousel News-->
        <script src=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery.mousewheel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!--Carousel Clients-->
        <script src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/own/owl.carousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!--Count down-->
        <script src=\"";
        // line 694
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery.countdown.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script src=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/custom_ini.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 

    </body>

</html>
";
    }

    // line 2
    public function block_contenthead($context, array $blocks = array())
    {
        // line 3
        echo "        <head>
            <title>WT TENNIS</title>
            <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />

            <meta name=\"author\" content=\"Corsini Alessio\" />
            <meta name=\"keywords\" content=\"Tennis, club, events, football, golf, non-profit, betting assistant, football,fitness, tennis, sport, soccer, goal, sports, volleyball, basketball,\tcharity, club, cricket, football, hockey, magazine, non profit, rugby, soccer, sport, sports, tennis\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!--<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />-->

            <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>
            <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'/>
            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/css/fonts/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!--Clients-->
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/css/own/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/css/own/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />


            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/css/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/css/jquery.jscrollpane.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/css/minislide/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/css/style_dir.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link rel=\"shortcut icon\" type=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/image/png"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/img/favicon.ico"), "html", null, true);
        echo "\" />
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        </head>
    ";
    }

    // line 42
    public function block_contentconnexion($context, array $blocks = array())
    {
        // line 43
        echo "            
            
            <section class=\"content-top-login\">
                <div class=\"container\">
                    
                       <div class=\"box-login\">
                    
                            <div class=\"box-login\"> 
                                  <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\">
                                                      <i class=\"fa fa-facebook\">acebook</i>
                                                    </a>
                                                    <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_service_redirect", array("service" => "google"));
        echo "\">
                                                        <i>Google</i>
                                                    </a>
                         </div>  
                           
                           
                           <div class=\"box-support\"> </div>
                          ";
        // line 62
        echo "                             <div class=\"box-login\"> 
                                    <a href class=\"text-purple bold\"  data-toggle=\"modal\" data-target=\"#myModal\"> Login </a> 
                                    <a href='";
        // line 64
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "' class=\"text-purple bold\"  >Sign Up</a>
                                    </div>
                                    
                                    
                                    
                         ";
        // line 69
        echo "   
                         
                                                        
                                                        
                                                        
                        </div>
                      


                            <!-- modal popup Login*************************************** ---> 




                          

                              

                                  
                                
                                <!-- Modal login -->
                                <div class=\"modal fade\" id=\"myModal\" tabindex=\"100\" role=\"dialog\" aria-labelledby=\"myModalLabel\" >
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header \">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
                                                <br>
                                                <i class=\"fa fa-group fa-7x\"></i>
                                                <h4 id=\"myModalLabel\" class=\"semi-bold\">Login</h4>

                                                <br>
                                            </div>
                                            
                                            <div class=\"modal-body\">
                                                <div>



                                                    ";
        // line 107
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 108
            echo "                                                       ";
            // line 109
            echo "                                                        </br>
                                                      ";
            // line 113
            echo "                                                    ";
        } else {
            // line 114
            echo "                                                        ";
            // line 117
            echo "                                                    ";
        }
        // line 118
        echo "                                                </div>

                                                ";
        // line 120
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 121
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 122
                echo "                                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 123
                    echo "                                                            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                                                ";
                    // line 124
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                                            </div>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                                                ";
        }
        // line 129
        echo "
                                                <div>
                                                    ";
        // line 131
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 133
        echo "                                                </div>
                                                  
                                            </div>
                                                 
                                        </div>
                                    </div>
                                </div>

                                                
                                         


                                                   
                                                </div>
                                               
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
                

                <!----------- fin popup ------------------------------------------------------>











            </section>
        ";
    }

    // line 131
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 132
        echo "                                                    ";
    }

    // line 184
    public function block_contentmenu($context, array $blocks = array())
    {
        // line 185
        echo "            <section class=\"container box-logo\">
                <header>
                    <div class=\"content-logo col-md-12\">
                        <div class=\"logo\"> 
                            <img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/img/logo2.png"), "html", null, true);
        echo "\" alt=\"\" />
                        </div>

                        <div class=\"bt-menu\"><a href=\"#\" class=\"menu\"><span>&equiv;</span> Menu</a></div>

                        <div class=\"box-menu\">

                            <nav id=\"cbp-hrmenu\" class=\"cbp-hrmenu\">
                                <ul id=\"menu\">    
                                    <li><a class=\"lnk-menu active\" href=\"index.html\">Home</a></li>
                                    <li>
                                        <a class=\"lnk-menu\" href=\"#\">Pages</a>
                                        <div class=\"cbp-hrsub sub-little\">
                                            <div class=\"cbp-hrsub-inner\"> 
                                                <div class=\"content-sub-menu\">
                                                    <ul class=\"menu-pages\">
                                                        <li><a href=\"tournaments.html\"><span>Tournaments</span></a></li>
                                                        <li><a href=\"login.html\"><span>Login</span></a></li>
                                                        <li><a href=\"news.html\"><span>News</span></a></li>
                                                        <li><a href=\"single_news.html\"><span>Single News</span></a></li>
                                                        <li><a href=\"results.html\"><span>Results</span></a></li>
                                                        <li><a href=\"players.html\"><span>Players</span></a></li>
                                                        <li><a href=\"single_player.html\"><span>Single Player</span></a></li>
                                                        <li><a href=\"matches.html\"><span>Matches</span></a></li>
                                                        <li><a href=\"match.html\"><span>Single Match</span></a></li>
                                                            ";
        // line 215
        echo "                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a class=\"lnk-menu\" href=\"players.html\">Players</a></li>
                                    <li><a class=\"lnk-menu\" href=\"results.html\">Results</a></li>
                                    <li><a class=\"lnk-menu\" href=\"news.html\">News</a></li>
                                    <li><a class=\"lnk-menu\" href=\"contact.html\">Contact</a></li>

                                </ul></nav>
                        </div>
                    </div>
                </header>
            </section>
        ";
    }

    // line 234
    public function block_content1($context, array $blocks = array())
    {
        // line 235
        echo "            <section id=\"summary-slider\">
                <div class=\"general\">
                    <div class=\"content-result content-result-news col-md-12\">
                        <div id=\"textslide\" class=\"effect-backcolor\">
                            <div class=\"container\">
                                <div class=\"col-md-12 slide-txt\">
                                    </div>
                            </div>
                        </div>
                    </div>
                  
                    </div>
                </div>
            </section>
        ";
    }

    // line 253
    public function block_content2($context, array $blocks = array())
    {
        // line 254
        echo "            <section class=\"news_slide-over-color\">
                <div class=\"news_slide-over\"></div>
                <div class=\"container\">
                    <div class=\"col-xs-12 col-md-12 top-first-info\">
                        <div class=\"col-md-4\">
                            <section class=\"slider\">
                                <div id=\"slider\" class=\"flexslider flexslider-attachments\">
                                    <ul class=\"slides\">
                                        <li data-thumb=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/slider/mini-slider/thumb1.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/minislider/1.jpg"), "html", null, true);
        echo "\" alt=\"\"/></li>
                                        <li data-thumb=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/slider/mini-slider/thumb2.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/minislider/4.jpg"), "html", null, true);
        echo "\" alt=\"\"/></li>
                                        <li data-thumb=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/slider/mini-slider/thumb3.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/minislider/3.jpg"), "html", null, true);
        echo "\" alt=\"\"/></li>
                                    </ul>
                                </div>
                                <div class=\"slide-news-bottom\"><a href=\"#\">Slide News</a><a class=\"i-ico\" href=\"#\"><i class=\"fa fa-angle-double-right\"></i></a></div>
                            </section>
                        </div>
                        <div class=\"col-md-4\">
                            <img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/minislider/2.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                            <div class=\"slide-news-bottom\"><a href=\"#\">Atp Europe Tour</a><a class=\"i-ico\" href=\"#\"><i class=\"fa fa-angle-double-right\"></i></a></div>
                        </div>
                        <div class=\"col-md-4\">
                            <img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/minislider/3.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                            <div class=\"slide-news-bottom\"><a href=\"#\">Wtp Tokyo Stadium</a><a class=\"i-ico\" href=\"#\"><i class=\"fa fa-angle-double-right\"></i></a></div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-md-12 top-slide-info\">
                        <div class=\"col-xs-6 col-md-6\">
                            <div class=\"col-md-4 slide-cont-img\"><a href=\"single_news.html\"><img class=\"scale_image\" src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/video/1.jpg"), "html", null, true);
        echo "\" alt=\"\"/><i class=\"fa fa-video-camera\"></i></a></div>
                            <div class=\"event_date dd-date\">May 01, 2014 5:50 am <div class=\"post_theme\">Exlusive</div></div><h4> Stay Ahead of the curve</h4>
                            <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>
                        </div>
                        <div class=\"col-xs-6 col-md-6\">
                            <div class=\"col-md-4 slide-cont-img\"><a href=\"single_news.html\"><img class=\"scale_image\" src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/video/2.jpg"), "html", null, true);
        echo "\" alt=\"\"/><i class=\"fa fa-picture-o\"></i></a></div>
                            <div class=\"event_date dd-date\">May 01, 2014 5:50 am <div class=\"post_theme\">Interview</div></div><h4> Stay Ahead of the curve</h4>
                            <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>

                        </div>
                        <div class=\"col-xs-6 col-md-6 box-top-txt\">
                            <div class=\"col-md-4 slide-cont-img\"><a href=\"single_news.html\"><img class=\"scale_image\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/video/3.jpg"), "html", null, true);
        echo "\" alt=\"\"/><i class=\"fa fa-picture-o\"></i></a></div>
                            <div class=\"event_date dd-date\">May 01, 2014 5:50 am</div><h4> Stay Ahead of the curve</h4>
                            <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>

                        </div>
                        <div class=\"col-xs-6 col-md-6 box-top-txt\">
                            <div class=\"col-md-4 slide-cont-img\"><a href=\"single_news.html\"><img class=\"scale_image\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/video/4.jpg"), "html", null, true);
        echo "\" alt=\"\"/><i class=\"fa fa-video-camera\"></i></a></div>
                            <div class=\"event_date dd-date\">May 01, 2014 5:50 am</div><h4> Stay Ahead of the curve</h4>
                            <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>

                        </div>
                    </div>
                </div>
            </section>
        ";
    }

    // line 308
    public function block_content3($context, array $blocks = array())
    {
        // line 309
        echo "            <section id=\"parallaxTraining\">
                <div class=\"black-shad\">
                    <div class=\"container\">
                        <div class=\"col-md-12\">
                            <div class=\"txt-training\">
                                <p>start your</p>
                                <h2>TRAINING TODAY</h2>
                                <a href=\"#\">Basic</a><a href=\"#\">Medium</a><a href=\"#\">Expert</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        ";
    }

    // line 326
    public function block_content4($context, array $blocks = array())
    {
        // line 327
        echo "            <section id=\"atp-match\">
                <div class=\"container\">
                    <div id=\"people-top\" class=\"top-match col-xs-12 col-md-12\">
                        <h3 class=\"news-title n-match\">Last <span>Match</span><span class=\"point-little\">.</span></h3>
                        <p class=\"subtitle\">A small creative team, trying to enrich the lives of others and build brands 
                            that a normal humans can understand.</p>
                        <!--SECTION ATP MATCH-->
                        <div class=\"next-match-co col-xs-8 col-md-8\">
                            <div id=\"nextmatch-content\" class=\"experience\">
                                <div class=\"col-xs-12 atphead\"><div class=\"match-sing-title\"><img src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/sub-ball.png"), "html", null, true);
        echo "\" alt=\"\" />ATP.HEAD2</div></div>
                                <div class=\"col-xs-4 pht-1 pht-left\">
                                    <div class=\"img-face-home\">
                                        <img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/player/djokovic.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                        <p class=\"name-mc\">Nikol Brian</p>
                                    </div>                      
                                </div>
                                <div class=\"col-xs-4 pl-point \">
                                    <p class=\"col-xs-12 name-mc-title\">BEIJING - FIRST ROUND</p>
                                    <div class=\"col-xs-4 nm-result\">
                                        <p class=\"nr1 ris1\"> 0 </p>
                                        <p class=\"nr2\"> 0% </p>
                                    </div>
                                    <div class=\"col-xs-4 nm-result-vs\">
                                        <p class=\"nrvs\"> - VS - </p>
                                    </div>
                                    <div class=\"col-xs-4 nm-result\">
                                        <p class=\"nr1 ris2\"> 1 </p>
                                        <p class=\"nr2\"> 100% </p>
                                    </div>

                                </div>
                                <div class=\"col-xs-4 pht-1 pht-right\">
                                    <div class=\"img-face-home\">
                                        <img src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/player/nadal.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                        <p class=\"name-mc\">Roial Mink</p>
                                    </div>

                                </div>
                                <div class=\"col-xs-12 atphead\"><div class=\"match-sing-title inf-bottom\">
                                        <p><i class=\"fa fa-calendar-o\"></i>May 16, 2012 14:30 - 16:00 <i class=\"fa fa-map-marker\"></i> London Brion Stadium</p>
                                    </div></div>
                            </div>
                        </div>
                        <div class=\"col-md-4 home-page\">
                            <div class=\"main\">
                                <div class=\"tabs animated-slide-2\">
                                    <div class=\"result-filter\">
                                        <ul class=\"tab-links\">
                                            <li class=\"active\"><a href=\"#tab1111\">ATP</a></li>
                                            <li><a href=\"#tab2222\">WTA</a></li>
                                            <li><a href=\"#tab3333\">DBL</a></li>
                                        </ul>
                                    </div>
                                    <div class=\"tab-content-point\">
                                        <div id=\"tab1111\" class=\"tab active\">
                                            <table class=\"tab-score\">
                                                <tr class=\"top-scrore-table\"><td class=\"score-position\">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>
                                                <tr><td class=\"score-position\">1.</td><td><a href=\"single_player.html\">Nicol Dorian</a></td><td><img src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/serbia.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>12770</td></tr>
                                                <tr><td class=\"score-position\">2.</td><td><a href=\"single_player.html\">Rafael Milk</a></td><td><img src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/argentina.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>10670</td></tr>
                                                <tr><td class=\"score-position\">3.</td><td><a href=\"single_player.html\">Roger Figo</a></td><td><img src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/uk.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>7490</td></tr>
                                                <tr><td class=\"score-position\">4.</td><td><a href=\"single_player.html\">St. Waiker</a></td><td><img src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/brazil.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>5985</td></tr>
                                                <tr><td class=\"score-position\">5.</td><td><a href=\"single_player.html\">David Ruby</a></td><td><img src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/japan.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>4765</td></tr>

                                            </table>
                                        </div>
                                        <div id=\"tab2222\" class=\"tab\">
                                            <table class=\"tab-score\">
                                                <tr class=\"top-scrore-table\"><td class=\"score-position\">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>
                                                <tr><td class=\"score-position\">1.</td><td><a href=\"single_player.html\">Serena Brain</a></td><td><img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/usa.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>1234</td></tr>
                                                <tr><td class=\"score-position\">2.</td><td><a href=\"single_player.html\">Simona Figo</a></td><td><img src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/uk.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>1234</td></tr>
                                                <tr><td class=\"score-position\">3.</td><td><a href=\"single_player.html\">Nio Red</a></td><td><img src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/italy.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>1234</td></tr>
                                                <tr><td class=\"score-position\">4.</td><td><a href=\"single_player.html\">Petra Curt</a></td><td><img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/denmark.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>1234</td></tr>
                                                <tr><td class=\"score-position\">5.</td><td><a href=\"single_player.html\">Ag. Rader</a></td><td><img src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/uk.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>1234</td></tr>
                                            </table>
                                        </div>
                                        <div id=\"tab3333\" class=\"tab\">
                                            <table class=\"tab-score\">
                                                <tr class=\"top-scrore-table\"><td class=\"score-position\">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>
                                                <tr><td class=\"score-position\">1.</td><td><a href=\"single_player.html\">name1</a></td><td>-</td><td>1234</td></tr>
                                                <tr><td class=\"score-position\">2.</td><td><a href=\"single_player.html\">name2</a></td><td>-</td><td>1234</td></tr>
                                                <tr><td class=\"score-position\">3.</td><td><a href=\"single_player.html\">name3</a></td><td>-</td><td>1234</td></tr>
                                                <tr><td class=\"score-position\">4.</td><td><a href=\"single_player.html\">name4</a></td><td>-</td><td>1234</td></tr>
                                                <tr><td class=\"score-position\">5.</td><td><a href=\"single_player.html\">name5</a></td><td>-</td><td>1234</td></tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class=\"score-view-all\"><a class=\"pl-point-button\" href=\"results.html\">View All</a></div>
                                </div>
                            </div>
                        </div>
                    </div><!--Close Top Match-->
                </div>
            </section>
        ";
    }

    // line 422
    public function block_content5($context, array $blocks = array())
    {
        // line 423
        echo "            <!--SECTION NEXT MATCH-->
            <section id=\"next-match\">
                <div  class=\"container\">
                    <div class=\"next-match-news top-match col-xs-12 col-md-12\">
                        <h3 class=\"news-title n-match\">Next <span>Match</span><span class=\"point-little\">.</span></h3>
                        <p class=\"subtitle\">A small creative team, trying to enrich the lives of others and build brands 
                            that a normal humans can understand.</p>
                        <div class=\"other-match col-md-4\">
                            <div class=\"score-next-time\">
                                <div class=\"circle-ico\"><p>ATP</p></div>
                            </div>
                            <div id=\"getting-started\"></div>
                            <div class=\"col-xs-5 col-md-5 match-team\">
                                <img class=\"\" src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/team1.png"), "html", null, true);
        echo "\" alt=\"\"/>
                                <p>Fernand</p>
                            </div>
                            <div class=\"col-xs-2 col-md-2 match-team-vs\">
                                <span class=\"txt-vs\"> - vs - </span>
                            </div>
                            <div class=\"col-xs-5 col-md-5 match-team\">
                                <img class=\"\" src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/team2.png"), "html", null, true);
        echo "\" alt=\"\"/>
                                <p>Brain</p>
                            </div>
                            <div class=\"next-match-place\">
                                <p class='sub-result'>Qatar ExonMobil</p>
                                <p class=\"dd-news-date\">April 22, 2016 ~ 2:30pm Canada Stadium</p>
                            </div>

                        </div>
                        <div class=\"other-match col-md-4\">
                            <div class=\"match-team-list\">
                                <img class=\"t-img1\" src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                                <span>Fernand</span>
                                <span class=\"txt-vs\"> - vs - </span>
                                <span>Brain</span>
                                <img class=\"t-img2\" src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                                <p>22/06/2015 14:30 - 16:00</p>
                            </div>
                            <div class=\"match-team-list\">
                                <img class=\"t-img1\" src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                                <span>Fernand</span>
                                <span class=\"txt-vs\"> - vs - </span>
                                <span>Brain</span>
                                <img class=\"t-img2\" src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                                <p>22/06/2015 14:30 - 16:00</p>
                            </div>
                            <div class=\"match-team-list\">
                                <img class=\"t-img1\" src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                                <span>Fernand</span>
                                <span class=\"txt-vs\"> - vs - </span>
                                <span>Brain</span>
                                <img class=\"t-img2\" src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                                <p>22/06/2015 14:30 - 16:00</p>
                            </div>
                            <div class=\"team-view-all\">
                                <p>View all</p>
                            </div>
                        </div>
                        <div class=\"other-match col-md-4 other-last\">
                            <img src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/adwertise.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        </div>

                    </div>
                </div>
            </section>
        ";
    }

    // line 491
    public function block_content6($context, array $blocks = array())
    {
        // line 492
        echo "            <section class=\"bbtxt-content\">

                <div class=\"container\">
                    <div class=\"col-xs-12 bbtxt-box\">
                   
                    </div>
                </div>

            </section>
        ";
    }

    // line 505
    public function block_contentstatistique($context, array $blocks = array())
    {
        // line 506
        echo "            <section id=\"resultsPoint\">
                <div class=\"container\">
                    <div class=\"top-match col-xs-12 col-md-12\">
                        <div class=\"top-score-title\">
                            <h3>Statistics<span class=\"point-little\">.</span></h3>
                            <p class=\"subtitle\">A small creative team, trying to enrich the lives of others and build brands 
                                that a normal humans can understand.</p>
                            <div class=\"col-xs-12 circle-percentage\">
                                <div class=\"col-xs-3\">
                                    <div class=\"pie_progress\" role=\"progressbar\" data-goal=\"83\" data-barcolor=\"#f59123\" data-barsize=\"10\">
                                        <div class=\"pie_content\">
                                            <div class=\"pie_progress__number\">0%</div>
                                            <div class=\"pie_progress__content\">Super-Senior</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-3\">
                                    <div class=\"pie_progress\" role=\"progressbar\" data-goal=\"65\" data-barcolor=\"#2c333b\" data-barsize=\"10\">
                                        <div class=\"pie_content\">
                                            <div class=\"pie_progress__number\">0%</div>
                                            <div class=\"pie_progress__content\">Senior</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-3\">
                                    <div class=\"pie_progress\" role=\"progressbar\" data-goal=\"32\" data-barcolor=\"#f59123\" data-barsize=\"10\">
                                        <div class=\"pie_content\">
                                            <div class=\"pie_progress__number\">0%</div>
                                            <div class=\"pie_progress__content\">Pro</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-3\">
                                    <div class=\"pie_progress\" role=\"progressbar\" data-goal=\"73\" data-barcolor=\"#2c333b\" data-barsize=\"10\">
                                        <div class=\"pie_content\">
                                            <div class=\"pie_progress__number\">0%</div>
                                            <div class=\"pie_progress__content\">Junior</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"clear\"></div>

                        </div>
                    </div>
                </div>
            </section>


            
        ";
    }

    // line 560
    public function block_contetsubscription($context, array $blocks = array())
    {
        // line 561
        echo "            <section class=\"bbtxt-content-subscription\">
                <div class=\"container\">
                    <div class=\"col-xs-12 bbtxt-box\">
                      
                    </div>
                </div>
            </section>
        ";
    }

    // line 572
    public function block_contentclients($context, array $blocks = array())
    {
        // line 573
        echo "            <section class=\"container\">
                <div class=\"top-video col-xs-12 col-md-12\">
                 
                </div>
            </section>
        ";
    }

    // line 583
    public function block_contentpicclient($context, array $blocks = array())
    {
        // line 584
        echo "           
        ";
    }

    // line 589
    public function block_contentfoter($context, array $blocks = array())
    {
        // line 590
        echo "            <section id=\"footer-tag\">
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
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/1/1.jpg"), "html", null, true);
        echo "\" alt=\"\" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
                                <li><img src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/1/2.jpg"), "html", null, true);
        echo "\" alt=\"\" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
                                <li><img src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/1/3.jpg"), "html", null, true);
        echo "\" alt=\"\" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
                            </ul>
                        </div>
                        <div class=\"col-md-3 footer-newsletters\">
                            <h3>Newsletters</h3>
                            <form method=\"post\">     
                                <div class=\"name\">
                                    <label for=\"name\">* Name:</label><div class=\"clear\"></div>
                                    <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"e.g. Mr. John Doe\" required=\"\"/>
                                </div>
                                <div class=\"email\">
                                    <label for=\"email\">* Email:</label><div class=\"clear\"></div>
                                    <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"example@domain.com\" required=\"\"/>
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


            <footer>
                <div class=\"col-md-12 content-footer\">
                    <p>© 2015 - 2016 Developped By Team Mywhyshy. </p>
                </div>
            </footer>
        ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1081 => 617,  1077 => 616,  1073 => 615,  1046 => 590,  1043 => 589,  1038 => 584,  1035 => 583,  1026 => 573,  1023 => 572,  1012 => 561,  1009 => 560,  955 => 506,  952 => 505,  939 => 492,  936 => 491,  925 => 482,  914 => 474,  907 => 470,  900 => 466,  893 => 462,  886 => 458,  879 => 454,  865 => 443,  855 => 436,  840 => 423,  837 => 422,  811 => 399,  807 => 398,  803 => 397,  799 => 396,  795 => 395,  785 => 388,  781 => 387,  777 => 386,  773 => 385,  769 => 384,  742 => 360,  718 => 339,  712 => 336,  701 => 327,  698 => 326,  681 => 309,  678 => 308,  665 => 298,  656 => 292,  647 => 286,  639 => 281,  630 => 275,  623 => 271,  611 => 264,  605 => 263,  599 => 262,  589 => 254,  586 => 253,  568 => 235,  565 => 234,  546 => 215,  518 => 189,  512 => 185,  509 => 184,  505 => 132,  502 => 131,  449 => 133,  447 => 131,  443 => 129,  440 => 128,  434 => 127,  425 => 124,  420 => 123,  415 => 122,  410 => 121,  408 => 120,  404 => 118,  401 => 117,  399 => 114,  396 => 113,  393 => 109,  391 => 108,  389 => 107,  349 => 69,  341 => 64,  337 => 62,  327 => 54,  321 => 51,  311 => 43,  308 => 42,  300 => 34,  296 => 33,  290 => 32,  286 => 31,  282 => 30,  278 => 29,  274 => 28,  269 => 26,  265 => 25,  259 => 22,  255 => 21,  250 => 19,  239 => 11,  229 => 3,  226 => 2,  216 => 696,  211 => 694,  205 => 691,  199 => 688,  195 => 687,  189 => 684,  185 => 683,  181 => 682,  175 => 679,  171 => 678,  165 => 675,  161 => 674,  155 => 671,  148 => 667,  144 => 666,  138 => 663,  134 => 662,  130 => 661,  126 => 659,  124 => 589,  119 => 586,  117 => 583,  111 => 579,  109 => 572,  104 => 569,  102 => 560,  97 => 557,  95 => 505,  90 => 502,  88 => 491,  84 => 489,  82 => 422,  79 => 421,  77 => 326,  72 => 323,  70 => 308,  67 => 307,  65 => 253,  59 => 249,  57 => 234,  52 => 231,  50 => 184,  47 => 183,  45 => 42,  39 => 38,  37 => 2,  34 => 1,);
    }
}
/* <html>*/
/*     {% block contenthead %}*/
/*         <head>*/
/*             <title>WT TENNIS</title>*/
/*             <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />*/
/* */
/*             <meta name="author" content="Corsini Alessio" />*/
/*             <meta name="keywords" content="Tennis, club, events, football, golf, non-profit, betting assistant, football,fitness, tennis, sport, soccer, goal, sports, volleyball, basketball,	charity, club, cricket, football, hockey, magazine, non profit, rugby, soccer, sport, sports, tennis" />*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/* */
/*             <link href="{{ asset('frontEnd/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />*/
/*             <!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->*/
/* */
/*             <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>*/
/*             <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'/>*/
/*             <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>*/
/*             <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>*/
/* */
/*             <link href="{{ asset('frontEnd/css/fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/*             <!--Clients-->*/
/*             <link href="{{ asset('frontEnd/css/own/owl.carousel.css') }}" rel="stylesheet" type="text/css" />*/
/*             <link href="{{ asset('frontEnd/css/own/owl.theme.css') }}" rel="stylesheet" type="text/css" />*/
/* */
/* */
/*             <link href="{{ asset('frontEnd/css/jquery.bxslider.css') }}" rel="stylesheet" type="text/css" />*/
/*             <link href="{{ asset('frontEnd/css/jquery.jscrollpane.css') }}" rel="stylesheet" type="text/css" />*/
/* */
/*             <link href="{{ asset('frontEnd/css/minislide/flexslider.css') }}" rel="stylesheet" type="text/css" />*/
/*             <link href="{{ asset('frontEnd/css/component.css') }}" rel="stylesheet" type="text/css" />*/
/*             <link href="{{ asset('frontEnd/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />*/
/*             <link href="{{ asset('frontEnd/css/style_dir.css') }}" rel="stylesheet" type="text/css" />*/
/*             <link rel="shortcut icon" type="{{ asset('frontEnd/image/png') }}" href="{{ asset('frontEnd/img/favicon.ico') }}" />*/
/*             <link href="{{ asset('frontEnd/css/responsive.css') }}" rel="stylesheet" type="text/css" />*/
/*             <link href="{{ asset('frontEnd/css/animate.css') }}" rel="stylesheet" type="text/css" />*/
/* */
/*         </head>*/
/*     {% endblock %}*/
/*     <body>*/
/*         <!--SECTION TOP LOGIN-->*/
/* */
/* */
/*         {% block contentconnexion %}*/
/*             */
/*             */
/*             <section class="content-top-login">*/
/*                 <div class="container">*/
/*                     */
/*                        <div class="box-login">*/
/*                     */
/*                             <div class="box-login"> */
/*                                   <a href="{{ path('hwi_oauth_service_redirect', {'service': 'facebook' }) }}">*/
/*                                                       <i class="fa fa-facebook">acebook</i>*/
/*                                                     </a>*/
/*                                                     <a href="{{ path('hwi_oauth_service_redirect', {'service': 'google' }) }}">*/
/*                                                         <i>Google</i>*/
/*                                                     </a>*/
/*                          </div>  */
/*                            */
/*                            */
/*                            <div class="box-support"> </div>*/
/*                           {#  <p class="support-info"><i class="fa fa-envelope-o"></i> info@wttennis.com</p>#}*/
/*                              <div class="box-login"> */
/*                                     <a href class="text-purple bold"  data-toggle="modal" data-target="#myModal"> Login </a> */
/*                                     <a href='{{ path('fos_user_registration_register') }}' class="text-purple bold"  >Sign Up</a>*/
/*                                     </div>*/
/*                                     */
/*                                     */
/*                                     */
/*                          {#Connexion GMAIL et FACEBOOK#}   */
/*                          */
/*                                                         */
/*                                                         */
/*                                                         */
/*                         </div>*/
/*                       */
/* */
/* */
/*                             <!-- modal popup Login*************************************** ---> */
/* */
/* */
/* */
/* */
/*                           */
/* */
/*                               */
/* */
/*                                   */
/*                                 */
/*                                 <!-- Modal login -->*/
/*                                 <div class="modal fade" id="myModal" tabindex="100" role="dialog" aria-labelledby="myModalLabel" >*/
/*                                     <div class="modal-dialog">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header ">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>*/
/*                                                 <br>*/
/*                                                 <i class="fa fa-group fa-7x"></i>*/
/*                                                 <h4 id="myModalLabel" class="semi-bold">Login</h4>*/
/* */
/*                                                 <br>*/
/*                                             </div>*/
/*                                             */
/*                                             <div class="modal-body">*/
/*                                                 <div>*/
/* */
/* */
/* */
/*                                                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                                        {# {{ 'Loged in as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |#}*/
/*                                                         </br>*/
/*                                                       {#  <a href="{{ path('fos_user_security_logout') }}" >*/
/*                                                             {{ 'Logout '|trans({}, 'FOSUserBundle') }}*/
/*                                                         </a>#}*/
/*                                                     {% else %}*/
/*                                                         {#<div class="btn btn-primary btn-lg btn-block login-button cols-sm-10">*/
/*                                                         <a href="{{ path('fos_user_security_login') }}" >{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                                                         </div>#}*/
/*                                                     {% endif %}*/
/*                                                 </div>*/
/* */
/*                                                 {% if app.request.hasPreviousSession %}*/
/*                                                     {% for type, messages in app.session.flashbag.all() %}*/
/*                                                         {% for message in messages %}*/
/*                                                             <div class="flash-{{ type }}">*/
/*                                                                 {{ message }}*/
/*                                                             </div>*/
/*                                                         {% endfor %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/* */
/*                                                 <div>*/
/*                                                     {% block fos_user_content %}*/
/*                                                     {% endblock fos_user_content %}*/
/*                                                 </div>*/
/*                                                   */
/*                                             </div>*/
/*                                                  */
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                                 */
/*                                          */
/* */
/* */
/*                                                    */
/*                                                 </div>*/
/*                                                */
/*                                             </div>*/
/*                                                  */
/*                                         </div>*/
/*                                */
/* */
/*                                */
/*                             */
/*                             <!-- /.modal-content -->*/
/*                         </div>*/
/*                         <!-- /.modal-dialog -->*/
/*                     </div>*/
/*                     <!-- /.modal -->*/
/*                 </div>*/
/* */
/*                 <!DOCTYPE html>*/
/* */
/* */
/*                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*                 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*                 */
/* */
/*                 <!----------- fin popup ------------------------------------------------------>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*             </section>*/
/*         {% endblock %}*/
/*         <!--SECTION MENU -->*/
/*         {% block contentmenu %}*/
/*             <section class="container box-logo">*/
/*                 <header>*/
/*                     <div class="content-logo col-md-12">*/
/*                         <div class="logo"> */
/*                             <img src="{{ asset('frontEnd/img/logo2.png') }}" alt="" />*/
/*                         </div>*/
/* */
/*                         <div class="bt-menu"><a href="#" class="menu"><span>&equiv;</span> Menu</a></div>*/
/* */
/*                         <div class="box-menu">*/
/* */
/*                             <nav id="cbp-hrmenu" class="cbp-hrmenu">*/
/*                                 <ul id="menu">    */
/*                                     <li><a class="lnk-menu active" href="index.html">Home</a></li>*/
/*                                     <li>*/
/*                                         <a class="lnk-menu" href="#">Pages</a>*/
/*                                         <div class="cbp-hrsub sub-little">*/
/*                                             <div class="cbp-hrsub-inner"> */
/*                                                 <div class="content-sub-menu">*/
/*                                                     <ul class="menu-pages">*/
/*                                                         <li><a href="tournaments.html"><span>Tournaments</span></a></li>*/
/*                                                         <li><a href="login.html"><span>Login</span></a></li>*/
/*                                                         <li><a href="news.html"><span>News</span></a></li>*/
/*                                                         <li><a href="single_news.html"><span>Single News</span></a></li>*/
/*                                                         <li><a href="results.html"><span>Results</span></a></li>*/
/*                                                         <li><a href="players.html"><span>Players</span></a></li>*/
/*                                                         <li><a href="single_player.html"><span>Single Player</span></a></li>*/
/*                                                         <li><a href="matches.html"><span>Matches</span></a></li>*/
/*                                                         <li><a href="match.html"><span>Single Match</span></a></li>*/
/*                                                             {#     <li><a href="{{path('')}}"><span> Reclammations</span></a></li>#}*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li><a class="lnk-menu" href="players.html">Players</a></li>*/
/*                                     <li><a class="lnk-menu" href="results.html">Results</a></li>*/
/*                                     <li><a class="lnk-menu" href="news.html">News</a></li>*/
/*                                     <li><a class="lnk-menu" href="contact.html">Contact</a></li>*/
/* */
/*                                 </ul></nav>*/
/*                         </div>*/
/*                     </div>*/
/*                 </header>*/
/*             </section>*/
/*         {% endblock %}*/
/* */
/* */
/*         <!--SECTION CONTAINER SLIDER-->*/
/*         {% block content1 %}*/
/*             <section id="summary-slider">*/
/*                 <div class="general">*/
/*                     <div class="content-result content-result-news col-md-12">*/
/*                         <div id="textslide" class="effect-backcolor">*/
/*                             <div class="container">*/
/*                                 <div class="col-md-12 slide-txt">*/
/*                                     </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                   */
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*         {% endblock %}  */
/* */
/* */
/*         <!-- SECTION NEWS SLIDER -->*/
/*         {% block content2 %}*/
/*             <section class="news_slide-over-color">*/
/*                 <div class="news_slide-over"></div>*/
/*                 <div class="container">*/
/*                     <div class="col-xs-12 col-md-12 top-first-info">*/
/*                         <div class="col-md-4">*/
/*                             <section class="slider">*/
/*                                 <div id="slider" class="flexslider flexslider-attachments">*/
/*                                     <ul class="slides">*/
/*                                         <li data-thumb="{{ asset('frontEnd/images/slider/mini-slider/thumb1.html') }}"><img src="{{ asset('frontEnd/images/minislider/1.jpg') }}" alt=""/></li>*/
/*                                         <li data-thumb="{{ asset('frontEnd/images/slider/mini-slider/thumb2.html') }}"><img src="{{ asset('frontEnd/images/minislider/4.jpg') }}" alt=""/></li>*/
/*                                         <li data-thumb="{{ asset('frontEnd/images/slider/mini-slider/thumb3.html') }}"><img src="{{ asset('frontEnd/images/minislider/3.jpg') }}" alt=""/></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="slide-news-bottom"><a href="#">Slide News</a><a class="i-ico" href="#"><i class="fa fa-angle-double-right"></i></a></div>*/
/*                             </section>*/
/*                         </div>*/
/*                         <div class="col-md-4">*/
/*                             <img src="{{ asset('frontEnd/images/minislider/2.jpg') }}" alt=""/>*/
/*                             <div class="slide-news-bottom"><a href="#">Atp Europe Tour</a><a class="i-ico" href="#"><i class="fa fa-angle-double-right"></i></a></div>*/
/*                         </div>*/
/*                         <div class="col-md-4">*/
/*                             <img src="{{ asset('frontEnd/images/minislider/3.jpg') }}" alt=""/>*/
/*                             <div class="slide-news-bottom"><a href="#">Wtp Tokyo Stadium</a><a class="i-ico" href="#"><i class="fa fa-angle-double-right"></i></a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xs-12 col-md-12 top-slide-info">*/
/*                         <div class="col-xs-6 col-md-6">*/
/*                             <div class="col-md-4 slide-cont-img"><a href="single_news.html"><img class="scale_image" src="{{ asset('frontEnd/images/video/1.jpg') }}" alt=""/><i class="fa fa-video-camera"></i></a></div>*/
/*                             <div class="event_date dd-date">May 01, 2014 5:50 am <div class="post_theme">Exlusive</div></div><h4> Stay Ahead of the curve</h4>*/
/*                             <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>*/
/*                         </div>*/
/*                         <div class="col-xs-6 col-md-6">*/
/*                             <div class="col-md-4 slide-cont-img"><a href="single_news.html"><img class="scale_image" src="{{ asset('frontEnd/images/video/2.jpg') }}" alt=""/><i class="fa fa-picture-o"></i></a></div>*/
/*                             <div class="event_date dd-date">May 01, 2014 5:50 am <div class="post_theme">Interview</div></div><h4> Stay Ahead of the curve</h4>*/
/*                             <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>*/
/* */
/*                         </div>*/
/*                         <div class="col-xs-6 col-md-6 box-top-txt">*/
/*                             <div class="col-md-4 slide-cont-img"><a href="single_news.html"><img class="scale_image" src="{{ asset('frontEnd/images/video/3.jpg') }}" alt=""/><i class="fa fa-picture-o"></i></a></div>*/
/*                             <div class="event_date dd-date">May 01, 2014 5:50 am</div><h4> Stay Ahead of the curve</h4>*/
/*                             <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>*/
/* */
/*                         </div>*/
/*                         <div class="col-xs-6 col-md-6 box-top-txt">*/
/*                             <div class="col-md-4 slide-cont-img"><a href="single_news.html"><img class="scale_image" src="{{ asset('frontEnd/images/video/4.jpg') }}" alt=""/><i class="fa fa-video-camera"></i></a></div>*/
/*                             <div class="event_date dd-date">May 01, 2014 5:50 am</div><h4> Stay Ahead of the curve</h4>*/
/*                             <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*         {% endblock %}*/
/* */
/*         {% block content3 %}*/
/*             <section id="parallaxTraining">*/
/*                 <div class="black-shad">*/
/*                     <div class="container">*/
/*                         <div class="col-md-12">*/
/*                             <div class="txt-training">*/
/*                                 <p>start your</p>*/
/*                                 <h2>TRAINING TODAY</h2>*/
/*                                 <a href="#">Basic</a><a href="#">Medium</a><a href="#">Expert</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*         {% endblock %}*/
/* */
/* */
/*         <!--SECTION Match TOP SCORE-->*/
/*         {% block content4 %}*/
/*             <section id="atp-match">*/
/*                 <div class="container">*/
/*                     <div id="people-top" class="top-match col-xs-12 col-md-12">*/
/*                         <h3 class="news-title n-match">Last <span>Match</span><span class="point-little">.</span></h3>*/
/*                         <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands */
/*                             that a normal humans can understand.</p>*/
/*                         <!--SECTION ATP MATCH-->*/
/*                         <div class="next-match-co col-xs-8 col-md-8">*/
/*                             <div id="nextmatch-content" class="experience">*/
/*                                 <div class="col-xs-12 atphead"><div class="match-sing-title"><img src="{{ asset('frontEnd/images/sub-ball.png') }}" alt="" />ATP.HEAD2</div></div>*/
/*                                 <div class="col-xs-4 pht-1 pht-left">*/
/*                                     <div class="img-face-home">*/
/*                                         <img src="{{ asset('frontEnd/images/player/djokovic.jpg') }}" alt="" />*/
/*                                         <p class="name-mc">Nikol Brian</p>*/
/*                                     </div>                      */
/*                                 </div>*/
/*                                 <div class="col-xs-4 pl-point ">*/
/*                                     <p class="col-xs-12 name-mc-title">BEIJING - FIRST ROUND</p>*/
/*                                     <div class="col-xs-4 nm-result">*/
/*                                         <p class="nr1 ris1"> 0 </p>*/
/*                                         <p class="nr2"> 0% </p>*/
/*                                     </div>*/
/*                                     <div class="col-xs-4 nm-result-vs">*/
/*                                         <p class="nrvs"> - VS - </p>*/
/*                                     </div>*/
/*                                     <div class="col-xs-4 nm-result">*/
/*                                         <p class="nr1 ris2"> 1 </p>*/
/*                                         <p class="nr2"> 100% </p>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                                 <div class="col-xs-4 pht-1 pht-right">*/
/*                                     <div class="img-face-home">*/
/*                                         <img src="{{ asset('frontEnd/images/player/nadal.jpg') }}" alt="" />*/
/*                                         <p class="name-mc">Roial Mink</p>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                                 <div class="col-xs-12 atphead"><div class="match-sing-title inf-bottom">*/
/*                                         <p><i class="fa fa-calendar-o"></i>May 16, 2012 14:30 - 16:00 <i class="fa fa-map-marker"></i> London Brion Stadium</p>*/
/*                                     </div></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-4 home-page">*/
/*                             <div class="main">*/
/*                                 <div class="tabs animated-slide-2">*/
/*                                     <div class="result-filter">*/
/*                                         <ul class="tab-links">*/
/*                                             <li class="active"><a href="#tab1111">ATP</a></li>*/
/*                                             <li><a href="#tab2222">WTA</a></li>*/
/*                                             <li><a href="#tab3333">DBL</a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                     <div class="tab-content-point">*/
/*                                         <div id="tab1111" class="tab active">*/
/*                                             <table class="tab-score">*/
/*                                                 <tr class="top-scrore-table"><td class="score-position">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>*/
/*                                                 <tr><td class="score-position">1.</td><td><a href="single_player.html">Nicol Dorian</a></td><td><img src="{{ asset('frontEnd/images/flags/serbia.png') }}" alt="" /></td><td>12770</td></tr>*/
/*                                                 <tr><td class="score-position">2.</td><td><a href="single_player.html">Rafael Milk</a></td><td><img src="{{ asset('frontEnd/images/flags/argentina.png') }}" alt="" /></td><td>10670</td></tr>*/
/*                                                 <tr><td class="score-position">3.</td><td><a href="single_player.html">Roger Figo</a></td><td><img src="{{ asset('frontEnd/images/flags/uk.png') }}" alt="" /></td><td>7490</td></tr>*/
/*                                                 <tr><td class="score-position">4.</td><td><a href="single_player.html">St. Waiker</a></td><td><img src="{{ asset('frontEnd/images/flags/brazil.png') }}" alt="" /></td><td>5985</td></tr>*/
/*                                                 <tr><td class="score-position">5.</td><td><a href="single_player.html">David Ruby</a></td><td><img src="{{ asset('frontEnd/images/flags/japan.png') }}" alt="" /></td><td>4765</td></tr>*/
/* */
/*                                             </table>*/
/*                                         </div>*/
/*                                         <div id="tab2222" class="tab">*/
/*                                             <table class="tab-score">*/
/*                                                 <tr class="top-scrore-table"><td class="score-position">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>*/
/*                                                 <tr><td class="score-position">1.</td><td><a href="single_player.html">Serena Brain</a></td><td><img src="{{ asset('frontEnd/images/flags/usa.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                                 <tr><td class="score-position">2.</td><td><a href="single_player.html">Simona Figo</a></td><td><img src="{{ asset('frontEnd/images/flags/uk.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                                 <tr><td class="score-position">3.</td><td><a href="single_player.html">Nio Red</a></td><td><img src="{{ asset('frontEnd/images/flags/italy.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                                 <tr><td class="score-position">4.</td><td><a href="single_player.html">Petra Curt</a></td><td><img src="{{ asset('frontEnd/images/flags/denmark.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                                 <tr><td class="score-position">5.</td><td><a href="single_player.html">Ag. Rader</a></td><td><img src="{{ asset('frontEnd/images/flags/uk.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                             </table>*/
/*                                         </div>*/
/*                                         <div id="tab3333" class="tab">*/
/*                                             <table class="tab-score">*/
/*                                                 <tr class="top-scrore-table"><td class="score-position">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>*/
/*                                                 <tr><td class="score-position">1.</td><td><a href="single_player.html">name1</a></td><td>-</td><td>1234</td></tr>*/
/*                                                 <tr><td class="score-position">2.</td><td><a href="single_player.html">name2</a></td><td>-</td><td>1234</td></tr>*/
/*                                                 <tr><td class="score-position">3.</td><td><a href="single_player.html">name3</a></td><td>-</td><td>1234</td></tr>*/
/*                                                 <tr><td class="score-position">4.</td><td><a href="single_player.html">name4</a></td><td>-</td><td>1234</td></tr>*/
/*                                                 <tr><td class="score-position">5.</td><td><a href="single_player.html">name5</a></td><td>-</td><td>1234</td></tr>*/
/*                                             </table>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="score-view-all"><a class="pl-point-button" href="results.html">View All</a></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!--Close Top Match-->*/
/*                 </div>*/
/*             </section>*/
/*         {% endblock %}*/
/* */
/*         {% block content5 %}*/
/*             <!--SECTION NEXT MATCH-->*/
/*             <section id="next-match">*/
/*                 <div  class="container">*/
/*                     <div class="next-match-news top-match col-xs-12 col-md-12">*/
/*                         <h3 class="news-title n-match">Next <span>Match</span><span class="point-little">.</span></h3>*/
/*                         <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands */
/*                             that a normal humans can understand.</p>*/
/*                         <div class="other-match col-md-4">*/
/*                             <div class="score-next-time">*/
/*                                 <div class="circle-ico"><p>ATP</p></div>*/
/*                             </div>*/
/*                             <div id="getting-started"></div>*/
/*                             <div class="col-xs-5 col-md-5 match-team">*/
/*                                 <img class="" src="{{ asset('frontEnd/images/team1.png') }}" alt=""/>*/
/*                                 <p>Fernand</p>*/
/*                             </div>*/
/*                             <div class="col-xs-2 col-md-2 match-team-vs">*/
/*                                 <span class="txt-vs"> - vs - </span>*/
/*                             </div>*/
/*                             <div class="col-xs-5 col-md-5 match-team">*/
/*                                 <img class="" src="{{ asset('frontEnd/images/team2.png') }}" alt=""/>*/
/*                                 <p>Brain</p>*/
/*                             </div>*/
/*                             <div class="next-match-place">*/
/*                                 <p class='sub-result'>Qatar ExonMobil</p>*/
/*                                 <p class="dd-news-date">April 22, 2016 ~ 2:30pm Canada Stadium</p>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="other-match col-md-4">*/
/*                             <div class="match-team-list">*/
/*                                 <img class="t-img1" src="{{ asset('frontEnd/images/team1_small.png') }}" alt=""/>*/
/*                                 <span>Fernand</span>*/
/*                                 <span class="txt-vs"> - vs - </span>*/
/*                                 <span>Brain</span>*/
/*                                 <img class="t-img2" src="{{ asset('frontEnd/images/team1_small.png') }}" alt=""/>*/
/*                                 <p>22/06/2015 14:30 - 16:00</p>*/
/*                             </div>*/
/*                             <div class="match-team-list">*/
/*                                 <img class="t-img1" src="{{ asset('frontEnd/images/team1_small.png') }}" alt=""/>*/
/*                                 <span>Fernand</span>*/
/*                                 <span class="txt-vs"> - vs - </span>*/
/*                                 <span>Brain</span>*/
/*                                 <img class="t-img2" src="{{ asset('frontEnd/images/team1_small.png') }}" alt=""/>*/
/*                                 <p>22/06/2015 14:30 - 16:00</p>*/
/*                             </div>*/
/*                             <div class="match-team-list">*/
/*                                 <img class="t-img1" src="{{ asset('frontEnd/images/team1_small.png') }}" alt=""/>*/
/*                                 <span>Fernand</span>*/
/*                                 <span class="txt-vs"> - vs - </span>*/
/*                                 <span>Brain</span>*/
/*                                 <img class="t-img2" src="{{ asset('frontEnd/images/team1_small.png') }}" alt=""/>*/
/*                                 <p>22/06/2015 14:30 - 16:00</p>*/
/*                             </div>*/
/*                             <div class="team-view-all">*/
/*                                 <p>View all</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="other-match col-md-4 other-last">*/
/*                             <img src="{{ asset('frontEnd/images/adwertise.jpg') }}" alt="" />*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*         {% endblock %}*/
/* */
/*         <!-- PARALLAX BLACK TENNIS-->*/
/*         {% block content6 %}*/
/*             <section class="bbtxt-content">*/
/* */
/*                 <div class="container">*/
/*                     <div class="col-xs-12 bbtxt-box">*/
/*                    */
/*                     </div>*/
/*                 </div>*/
/* */
/*             </section>*/
/*         {% endblock %}*/
/* */
/* */
/*         <!--SECTION STATISTIC RESULTS-->*/
/*         {% block contentstatistique %}*/
/*             <section id="resultsPoint">*/
/*                 <div class="container">*/
/*                     <div class="top-match col-xs-12 col-md-12">*/
/*                         <div class="top-score-title">*/
/*                             <h3>Statistics<span class="point-little">.</span></h3>*/
/*                             <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands */
/*                                 that a normal humans can understand.</p>*/
/*                             <div class="col-xs-12 circle-percentage">*/
/*                                 <div class="col-xs-3">*/
/*                                     <div class="pie_progress" role="progressbar" data-goal="83" data-barcolor="#f59123" data-barsize="10">*/
/*                                         <div class="pie_content">*/
/*                                             <div class="pie_progress__number">0%</div>*/
/*                                             <div class="pie_progress__content">Super-Senior</div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-xs-3">*/
/*                                     <div class="pie_progress" role="progressbar" data-goal="65" data-barcolor="#2c333b" data-barsize="10">*/
/*                                         <div class="pie_content">*/
/*                                             <div class="pie_progress__number">0%</div>*/
/*                                             <div class="pie_progress__content">Senior</div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-xs-3">*/
/*                                     <div class="pie_progress" role="progressbar" data-goal="32" data-barcolor="#f59123" data-barsize="10">*/
/*                                         <div class="pie_content">*/
/*                                             <div class="pie_progress__number">0%</div>*/
/*                                             <div class="pie_progress__content">Pro</div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-xs-3">*/
/*                                     <div class="pie_progress" role="progressbar" data-goal="73" data-barcolor="#2c333b" data-barsize="10">*/
/*                                         <div class="pie_content">*/
/*                                             <div class="pie_progress__number">0%</div>*/
/*                                             <div class="pie_progress__content">Junior</div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="clear"></div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/* */
/* */
/*             */
/*         {% endblock %}*/
/* */
/* */
/*         <!-- SECTION SUBSCRIPTIONS-->*/
/*         {% block contetsubscription %}*/
/*             <section class="bbtxt-content-subscription">*/
/*                 <div class="container">*/
/*                     <div class="col-xs-12 bbtxt-box">*/
/*                       */
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*         {% endblock %}*/
/* */
/* */
/*         <!--SECTION CLIENTS-->*/
/*         {% block contentclients %}*/
/*             <section class="container">*/
/*                 <div class="top-video col-xs-12 col-md-12">*/
/*                  */
/*                 </div>*/
/*             </section>*/
/*         {% endblock %}*/
/* */
/* */
/*         <!--SECTION TOP PRODUCTS-->*/
/*         <!--SECTION SPONSOR-->*/
/*         {% block contentpicclient %}*/
/*            */
/*         {% endblock%}*/
/* */
/* */
/*         <!--SECTION FOOTER--> */
/*         {% block contentfoter %}*/
/*             <section id="footer-tag">*/
/*                 <div class="container">*/
/*                     <div class="col-md-12">*/
/*                         <div class="col-md-3">*/
/*                             <h3>About Us</h3>*/
/*                             <p>Thank you for visiting tennisclub.com. Our mission is to */
/*                                 provide unrivalled and unbiased informative and resources to help any sports fan who enjoys a flutter make informed and value led decisions.</p>*/
/*                             <p>Our mission is to */
/*                                 provide unrivalled and unbiased informative, resources to help any sports fan who enjoys a flutter make.</p>*/
/*                         </div>*/
/*                         <div class="col-md-3 cat-footer">*/
/*                             <div class="footer-map"></div>*/
/*                             <h3 class='last-cat'>Categories</h3>*/
/*                             <ul class="last-tips">*/
/*                                 <li><a href="tournaments.html">Tournaments</a></li>*/
/*                                 <li><a href="results.html">All Results</a></li>*/
/*                                 <li><a href="matches.html">Matches London ATP</a></li>*/
/*                                 <li><a href="matches.html">Double ATP</a></li>*/
/*                                 <li><a href="matches.html">Double WTP</a></li>*/
/*                                 <li><a href="shops.html">Shop Best Price</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-md-3">*/
/*                             <h3>Last News</h3>*/
/*                             <ul class="footer-last-news">*/
/*                                 <li><img src="{{ asset('frontEnd/images/1/1.jpg') }}" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>*/
/*                                 <li><img src="{{ asset('frontEnd/images/1/2.jpg') }}" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>*/
/*                                 <li><img src="{{ asset('frontEnd/images/1/3.jpg') }}" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-md-3 footer-newsletters">*/
/*                             <h3>Newsletters</h3>*/
/*                             <form method="post">     */
/*                                 <div class="name">*/
/*                                     <label for="name">* Name:</label><div class="clear"></div>*/
/*                                     <input id="name" name="name" type="text" placeholder="e.g. Mr. John Doe" required=""/>*/
/*                                 </div>*/
/*                                 <div class="email">*/
/*                                     <label for="email">* Email:</label><div class="clear"></div>*/
/*                                     <input id="email" name="email" type="text" placeholder="example@domain.com" required=""/>*/
/*                                 </div>*/
/*                                 <div id="loader">*/
/*                                     <input type="submit" value="Submit"/>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                         <div class="col-xs-12">*/
/*                             <ul class="social">*/
/*                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>*/
/*                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/*                                 <li><a href="#"><i class="fa fa-linkedin"></i></a></li>*/
/*                                 <li><a href="#"><i class="fa fa-digg"></i></a></li>*/
/*                                 <li><a href="#"><i class="fa fa-rss"></i></a></li>*/
/*                                 <li><a href="#"><i class="fa fa-youtube"></i></a></li>*/
/*                                 <li><a href="#"><i class="fa fa-tumblr"></i></a></li>*/
/* */
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/* */
/* */
/*             <footer>*/
/*                 <div class="col-md-12 content-footer">*/
/*                     <p>© 2015 - 2016 Developped By Team Mywhyshy. </p>*/
/*                 </div>*/
/*             </footer>*/
/*         {% endblock %}*/
/* */
/* */
/*         <script src="{{ asset('frontEnd/js/jquery-1.10.2.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('frontEnd/js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('frontEnd/js/jquery.transit.min.js') }}" type="text/javascript"></script>*/
/* */
/*         <!--MENU-->*/
/*         <script src="{{ asset('frontEnd/js/menu/modernizr.custom.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('frontEnd/js/menu/cbpHorizontalMenu.js') }}" type="text/javascript"></script>*/
/*         <!--END MENU-->*/
/* */
/*         <!--Mini Flexslide-->*/
/*         <script src="{{ asset('frontEnd/js/minislide/jquery.flexslider.js') }}" type="text/javascript"></script>*/
/* */
/*         <!-- Percentace circolar -->*/
/*         <script src="{{ asset('frontEnd/js/circle/jquery-asPieProgress.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('frontEnd/js/circle/rainbow.min.js') }}" type="text/javascript"></script>*/
/* */
/*         <!--Gallery-->*/
/*         <script src="{{ asset('frontEnd/js/gallery/jquery.prettyPhoto.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('frontEnd/js/gallery/isotope.js') }}" type="text/javascript"></script>*/
/* */
/*         <!-- Button Anchor Top-->*/
/*         <script src="{{ asset('frontEnd/js/jquery.ui.totop.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('frontEnd/js/custom.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('frontEnd/js/jquery.bxslider.js') }}" type="text/javascript"></script>*/
/* */
/*         <!--Carousel News-->*/
/*         <script src="{{ asset('frontEnd/js/jquery.easing.1.3.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('frontEnd/js/jquery.mousewheel.js') }}" type="text/javascript"></script>*/
/* */
/*         <!--Carousel Clients-->*/
/*         <script src="{{ asset('frontEnd/js/own/owl.carousel.js') }}" type="text/javascript"></script>*/
/* */
/*         <!--Count down-->*/
/*         <script src="{{ asset('frontEnd/js/jquery.countdown.js') }}" type="text/javascript"></script>*/
/* */
/*         <script src="{{ asset('frontEnd/js/custom_ini.js') }}" type="text/javascript"></script> */
/* */
/*     </body>*/
/* */
/* </html>*/
/* */
