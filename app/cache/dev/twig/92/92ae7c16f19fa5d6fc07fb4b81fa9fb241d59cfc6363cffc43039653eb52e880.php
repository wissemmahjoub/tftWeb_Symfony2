<?php

/* wyshynavFrontBundle::index.html.twig */
class __TwigTemplate_b6b19157645fb12d348a101ad4c410f3e282795966565a1a35f066038b391816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenthead' => array($this, 'block_contenthead'),
            'contentconnexion' => array($this, 'block_contentconnexion'),
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
        echo "<body>
<!--SECTION TOP LOGIN-->
";
        // line 40
        $this->displayBlock('contentconnexion', $context, $blocks);
        // line 56
        echo "      <!--SECTION MENU -->
      ";
        // line 57
        $this->displayBlock('contentmenu', $context, $blocks);
        // line 104
        echo "          
          
          <!--SECTION CONTAINER SLIDER-->
    ";
        // line 107
        $this->displayBlock('content1', $context, $blocks);
        // line 133
        echo "  
      
      
          <!-- SECTION NEWS SLIDER -->
        ";
        // line 137
        $this->displayBlock('content2', $context, $blocks);
        // line 191
        echo "          
     ";
        // line 192
        $this->displayBlock('content3', $context, $blocks);
        // line 207
        echo "     
     
          <!--SECTION Match TOP SCORE-->
          ";
        // line 210
        $this->displayBlock('content4', $context, $blocks);
        // line 305
        echo "     
     ";
        // line 306
        $this->displayBlock('content5', $context, $blocks);
        // line 373
        echo "     
          <!-- PARALLAX BLACK TENNIS-->
          ";
        // line 375
        $this->displayBlock('content6', $context, $blocks);
        // line 462
        echo "     
     
          <!--SECTION STATISTIC RESULTS-->
          ";
        // line 465
        $this->displayBlock('contentstatistique', $context, $blocks);
        // line 532
        echo "      
      
          <!-- SECTION SUBSCRIPTIONS-->
          ";
        // line 535
        $this->displayBlock('contetsubscription', $context, $blocks);
        // line 574
        echo "           
           
     <!--SECTION CLIENTS-->
     ";
        // line 577
        $this->displayBlock('contentclients', $context, $blocks);
        // line 616
        echo "     
     
            <!--SECTION TOP PRODUCTS-->
       <!--SECTION SPONSOR-->
       ";
        // line 620
        $this->displayBlock('contentpicclient', $context, $blocks);
        // line 636
        echo "     
     
            <!--SECTION FOOTER--> 
            ";
        // line 639
        $this->displayBlock('contentfoter', $context, $blocks);
        // line 709
        echo "

<script src=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 712
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery.transit.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--MENU-->
<script src=\"";
        // line 716
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/menu/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 717
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/menu/cbpHorizontalMenu.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--END MENU-->

<!--Mini Flexslide-->
<script src=\"";
        // line 721
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/minislide/jquery.flexslider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!-- Percentace circolar -->
<script src=\"";
        // line 724
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/circle/jquery-asPieProgress.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 725
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/circle/rainbow.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--Gallery-->
<script src=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/gallery/jquery.prettyPhoto.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/gallery/isotope.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!-- Button Anchor Top-->
<script src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery.ui.totop.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery.bxslider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--Carousel News-->
<script src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery.mousewheel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--Carousel Clients-->
<script src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/own/owl.carousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--Count down-->
<script src=\"";
        // line 744
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/js/jquery.countdown.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 746
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
        echo "<head>
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

    // line 40
    public function block_contentconnexion($context, array $blocks = array())
    {
        // line 41
        echo "     <section class=\"content-top-login\">
           <div class=\"container\">
      <div class=\"col-md-12\">
           <div class=\"box-support\"> 
             <p class=\"support-info\"><i class=\"fa fa-envelope-o\"></i> info@wttennis.com</p>
          </div>
           <div class=\"box-login\"> 
             
             
             <a href='";
        // line 50
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "'>Logout</a>
          </div>
          </div>
      </div>
     </section>
          ";
    }

    // line 57
    public function block_contentmenu($context, array $blocks = array())
    {
        // line 58
        echo "     <section class=\"container box-logo\">
        <header>
           <div class=\"content-logo col-md-12\">
          <div class=\"logo\"> 
            <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/img/logo2.png"), "html", null, true);
        echo "\" alt=\"\" />
          </div>
          
          <div class=\"bt-menu\"><a href=\"#\" class=\"menu\"><span>&equiv;</span> Menu</a></div>

         <div class=\"box-menu\">
            
            <nav id=\"cbp-hrmenu\" class=\"cbp-hrmenu\">
\t\t\t\t\t    <ul id=\"menu\">    
                            <li><a class=\"lnk-menu active\" href=\"index.html\">Home</a></li>
                            <li>
\t\t\t\t\t\t\t\t<a class=\"lnk-menu\" href=\"#\">Pages</a>
                                <div class=\"cbp-hrsub sub-little\">
                                  <div class=\"cbp-hrsub-inner\"> 
                                      <div class=\"content-sub-menu\">
\t\t\t\t\t\t\t\t        <ul class=\"menu-pages\">
\t\t\t\t\t\t\t\t\t        <li><a href=\"tournaments.html\"><span>Tournaments</span></a></li>
\t\t\t\t\t\t\t\t\t        <li><a href=\"login.html\"><span>Login</span></a></li>
\t\t\t\t\t\t\t\t\t        <li><a href=\"news.html\"><span>News</span></a></li>
                                            <li><a href=\"single_news.html\"><span>Single News</span></a></li>
\t\t\t\t\t\t\t\t\t        <li><a href=\"results.html\"><span>Results</span></a></li>
                                            <li><a href=\"players.html\"><span>Players</span></a></li>
                                            <li><a href=\"single_player.html\"><span>Single Player</span></a></li>
                                            <li><a href=\"matches.html\"><span>Matches</span></a></li>
                                            <li><a href=\"match.html\"><span>Single Match</span></a></li>
                                       ";
        // line 88
        echo "                                            </ul>
                                        </div>
                                    </div>
                                </div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a class=\"lnk-menu\" href=\"players.html\">Players</a></li>
                        <li><a class=\"lnk-menu\" href=\"results.html\">Results</a></li>
\t\t\t\t\t\t<li><a class=\"lnk-menu\" href=\"news.html\">News</a></li>
                        <li><a class=\"lnk-menu\" href=\"contact.html\">Contact</a></li>
                        
\t\t\t\t\t</ul></nav>
              </div>
\t\t\t</div>
\t    </header>
     </section>
          ";
    }

    // line 107
    public function block_content1($context, array $blocks = array())
    {
        // line 108
        echo "    <section id=\"summary-slider\">
           <div class=\"general\">
           <div class=\"content-result content-result-news col-md-12\">
             <div id=\"textslide\" class=\"effect-backcolor\">
                <div class=\"container\">
                    <div class=\"col-md-12 slide-txt\">
                        <p class='sub-result aft-little welcome linetheme-left'>Yasmine</p>
                        <p class='sub-result aft-little linetheme-right'>Web Design<span class=\"point-big\">.</span></p>
                    </div>
                </div>
             </div>
           </div>
           <div id=\"slidematch\" class=\"col-xs-12 col-md-12\">
                  <div class=\"content-match-team-wrapper\">
                     <span class=\"gdlr-left\">Real Tennis</span>
                     <span class=\"gdlr-upcoming-match-versus\">VS</span>
                     <span class=\"gdlr-right\">Wednesday Club</span>
                  </div>
                  <div class=\"content-match-team-time\">
                     <span class=\"gdlr-left\">23 Sep 2016 - 14:00</span>
                     <span class=\"gdlr-right\">Real Stadium</span>
                  </div>
               </div>
         </div>
    </section>
      ";
    }

    // line 137
    public function block_content2($context, array $blocks = array())
    {
        // line 138
        echo "     <section class=\"news_slide-over-color\">
          <div class=\"news_slide-over\"></div>
           <div class=\"container\">
             <div class=\"col-xs-12 col-md-12 top-first-info\">
               <div class=\"col-md-4\">
                     <section class=\"slider\">
                            <div id=\"slider\" class=\"flexslider flexslider-attachments\">
                                <ul class=\"slides\">
                                    <li data-thumb=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/slider/mini-slider/thumb1.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/minislider/1.jpg"), "html", null, true);
        echo "\" alt=\"\"/></li>
  \t    \t                        <li data-thumb=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/slider/mini-slider/thumb2.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/minislider/4.jpg"), "html", null, true);
        echo "\" alt=\"\"/></li>
  \t    \t                        <li data-thumb=\"";
        // line 148
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
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/minislider/2.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                     <div class=\"slide-news-bottom\"><a href=\"#\">Atp Europe Tour</a><a class=\"i-ico\" href=\"#\"><i class=\"fa fa-angle-double-right\"></i></a></div>
                </div>
                <div class=\"col-md-4\">
                     <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/minislider/3.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                     <div class=\"slide-news-bottom\"><a href=\"#\">Wtp Tokyo Stadium</a><a class=\"i-ico\" href=\"#\"><i class=\"fa fa-angle-double-right\"></i></a></div>
                </div>
             </div>
             <div class=\"col-xs-12 col-md-12 top-slide-info\">
              <div class=\"col-xs-6 col-md-6\">
                <div class=\"col-md-4 slide-cont-img\"><a href=\"single_news.html\"><img class=\"scale_image\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/video/1.jpg"), "html", null, true);
        echo "\" alt=\"\"/><i class=\"fa fa-video-camera\"></i></a></div>
                <div class=\"event_date dd-date\">May 01, 2014 5:50 am <div class=\"post_theme\">Exlusive</div></div><h4> Stay Ahead of the curve</h4>
                <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>
              </div>
              <div class=\"col-xs-6 col-md-6\">
                <div class=\"col-md-4 slide-cont-img\"><a href=\"single_news.html\"><img class=\"scale_image\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/video/2.jpg"), "html", null, true);
        echo "\" alt=\"\"/><i class=\"fa fa-picture-o\"></i></a></div>
                <div class=\"event_date dd-date\">May 01, 2014 5:50 am <div class=\"post_theme\">Interview</div></div><h4> Stay Ahead of the curve</h4>
                <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>
                
              </div>
              <div class=\"col-xs-6 col-md-6 box-top-txt\">
                <div class=\"col-md-4 slide-cont-img\"><a href=\"single_news.html\"><img class=\"scale_image\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/video/3.jpg"), "html", null, true);
        echo "\" alt=\"\"/><i class=\"fa fa-picture-o\"></i></a></div>
                <div class=\"event_date dd-date\">May 01, 2014 5:50 am</div><h4> Stay Ahead of the curve</h4>
                <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>
                
              </div>
              <div class=\"col-xs-6 col-md-6 box-top-txt\">
                <div class=\"col-md-4 slide-cont-img\"><a href=\"single_news.html\"><img class=\"scale_image\" src=\"";
        // line 182
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

    // line 192
    public function block_content3($context, array $blocks = array())
    {
        // line 193
        echo "     <section id=\"parallaxTraining\">
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

    // line 210
    public function block_content4($context, array $blocks = array())
    {
        // line 211
        echo "     <section id=\"atp-match\">
           <div class=\"container\">
           <div id=\"people-top\" class=\"top-match col-xs-12 col-md-12\">
              <h3 class=\"news-title n-match\">Last <span>Match</span><span class=\"point-little\">.</span></h3>
              <p class=\"subtitle\">A small creative team, trying to enrich the lives of others and build brands 
                                    that a normal humans can understand.</p>
            <!--SECTION ATP MATCH-->
              <div class=\"next-match-co col-xs-8 col-md-8\">
                 <div id=\"nextmatch-content\" class=\"experience\">
                   <div class=\"col-xs-12 atphead\"><div class=\"match-sing-title\"><img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/sub-ball.png"), "html", null, true);
        echo "\" alt=\"\" />ATP.HEAD2</div></div>
                   <div class=\"col-xs-4 pht-1 pht-left\">
                         <div class=\"img-face-home\">
                            <img src=\"";
        // line 223
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
        // line 244
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
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/serbia.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>12770</td></tr>
                                          <tr><td class=\"score-position\">2.</td><td><a href=\"single_player.html\">Rafael Milk</a></td><td><img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/argentina.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>10670</td></tr>
                                          <tr><td class=\"score-position\">3.</td><td><a href=\"single_player.html\">Roger Figo</a></td><td><img src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/uk.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>7490</td></tr>
                                          <tr><td class=\"score-position\">4.</td><td><a href=\"single_player.html\">St. Waiker</a></td><td><img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/brazil.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>5985</td></tr>
                                          <tr><td class=\"score-position\">5.</td><td><a href=\"single_player.html\">David Ruby</a></td><td><img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/japan.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>4765</td></tr>
                                          
                                         </table>
                                        </div>
                                        <div id=\"tab2222\" class=\"tab\">
                                        <table class=\"tab-score\">
                                        <tr class=\"top-scrore-table\"><td class=\"score-position\">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>
                                          <tr><td class=\"score-position\">1.</td><td><a href=\"single_player.html\">Serena Brain</a></td><td><img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/usa.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>1234</td></tr>
                                          <tr><td class=\"score-position\">2.</td><td><a href=\"single_player.html\">Simona Figo</a></td><td><img src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/uk.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>1234</td></tr>
                                          <tr><td class=\"score-position\">3.</td><td><a href=\"single_player.html\">Nio Red</a></td><td><img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/italy.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>1234</td></tr>
                                          <tr><td class=\"score-position\">4.</td><td><a href=\"single_player.html\">Petra Curt</a></td><td><img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/flags/denmark.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>1234</td></tr>
                                          <tr><td class=\"score-position\">5.</td><td><a href=\"single_player.html\">Ag. Rader</a></td><td><img src=\"";
        // line 283
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

    // line 306
    public function block_content5($context, array $blocks = array())
    {
        // line 307
        echo "           <!--SECTION NEXT MATCH-->
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
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/team1.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        <p>Fernand</p>
                    </div>
                    <div class=\"col-xs-2 col-md-2 match-team-vs\">
                        <span class=\"txt-vs\"> - vs - </span>
                    </div>
                    <div class=\"col-xs-5 col-md-5 match-team\">
                        <img class=\"\" src=\"";
        // line 327
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
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/team1_small.png.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        <span>Fernand</span>
                        <span class=\"txt-vs\"> - vs - </span>
                        <span>Brain</span>
                        <img class=\"t-img2\" src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        <p>22/06/2015 14:30 - 16:00</p>
                    </div>
                    <div class=\"match-team-list\">
                        <img class=\"t-img1\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        <span>Fernand</span>
                        <span class=\"txt-vs\"> - vs - </span>
                        <span>Brain</span>
                        <img class=\"t-img2\" src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        <p>22/06/2015 14:30 - 16:00</p>
                    </div>
                    <div class=\"match-team-list\">
                        <img class=\"t-img1\" src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        <span>Fernand</span>
                        <span class=\"txt-vs\"> - vs - </span>
                        <span>Brain</span>
                        <img class=\"t-img2\" src=\"";
        // line 358
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
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontEnd/images/adwertise.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                </div>
                
            </div>
           </div>
     </section>
    ";
    }

    // line 375
    public function block_content6($context, array $blocks = array())
    {
        // line 376
        echo "     <section class=\"bbtxt-content\">

           <div class=\"container\">
                    <div class=\"col-xs-12 bbtxt-box\">
                        <h4><i class=\"fa fa-quote-left\"></i>Tennis<span class=\"point-big\">.</span> <span class=\"middle-txt\">is the new black<span class=\"point-little\">.</span></span><i class=\"fa fa-quote-right\"></i></h4>
                        <p class=\"subin\">The best tennis tour around the europe step by step.</p>
                        <div class=\"col-md-6 homevideo-top\">
                             <h3 class=\"home-video-title\">Amazing Video</h3>
                            <div class=\"col-md-12 homevideo\">
                               
                                <div class=\"col-md-5 it-video\">
                                  <a href=\"video.html\"><img class=\"scale_image\" src=\"images/video/1.jpg\" alt=\"\"/>
                                  <i class=\"fa fa-video-camera\"></i></a>
                                </div>
                                <div class=\"video-txt\">
                                   <div class=\"event_date_video\">July 01, 2014 5:50 am</div>
                                   <div class=\"post_theme video-post\">Interview</div><h3>Neque porro quisquam</h3>
                                   <p>Aliquam erat volutpat. So your content will always look good on any screen size like<br>
                                        Tablet, Phones, Imac, Macbook &amp; all sort of devices. </p>
                                </div>
                            </div>
                            <div class=\"col-md-12 homevideo\">
                                <div class=\"col-md-5 it-video\">
                                  <a href=\"video.html\"><img class=\"scale_image\" src=\"images/video/2.jpg\" alt=\"\"/>
                                  <i class=\"fa fa-video-camera\"></i></a>
                                </div>
                                <div class=\"video-txt\">
                                    <div class=\"event_date_video\">July 01, 2014 5:50 am</div>
                                    <h3>Ante ipsum primis</h3>
                                   <p>Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi.</p>
                                </div>
                            </div>
                            <div class=\"col-md-12 homevideo\">
                                <div class=\"col-md-5 it-video\">
                                  <a href=\"video.html\"><img class=\"scale_image\" src=\"images/video/3.jpg\" alt=\"\"/>
                                  <i class=\"fa fa-video-camera\"></i></a>
                                </div>
                                <div class=\"video-txt\">
                                    <div class=\"event_date_video\">July 01, 2014 5:50 am</div>
                                    <h3>Neque porro quisquam</h3>
                                   <p>Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 homevideo-top\">
                            <h3 class=\"home-video-title\">Amazing Video</h3>
                            <div class=\"col-md-12 homevideo\"> 
                                <div class=\"col-md-5 it-video\">
                                  <a href=\"video.html\"><img class=\"scale_image\" src=\"images/video/1.jpg\" alt=\"\"/>
                                  <i class=\"fa fa-video-camera\"></i></a>
                                </div>
                                <div class=\"video-txt\">
                                   <div class=\"event_date_video\">July 01, 2014 5:50 am</div>
                                   <div class=\"post_theme video-post\">Interview</div><h3>Neque porro quisquam</h3>
                                   <p>Aliquam erat volutpat. So your content will always look good on any screen size like<br>
                                        Tablet, Phones, Imac, Macbook &amp; all sort of devices. </p>
                                </div>
                            </div>
                            <div class=\"col-md-12 homevideo\">
                                <div class=\"col-md-5 it-video\">
                                  <a href=\"video.html\"><img class=\"scale_image\" src=\"images/video/2.jpg\" alt=\"\"/>
                                  <i class=\"fa fa-video-camera\"></i></a>
                                </div>
                                <div class=\"video-txt\">
                                    <div class=\"event_date_video\">July 01, 2014 5:50 am</div>
                                    <h3>Ante ipsum primis</h3>
                                   <p>Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi.</p>
                                </div>
                            </div>
                            <div class=\"col-md-12 homevideo\">
                                <div class=\"col-md-5 it-video\">
                                  <a href=\"video.html\"><img class=\"scale_image\" src=\"images/video/3.jpg\" alt=\"\"/>
                                  <i class=\"fa fa-video-camera\"></i></a>
                                </div>
                                <div class=\"video-txt\">
                                    <div class=\"event_date_video\">July 01, 2014 5:50 am</div>
                                    <h3>Neque porro quisquam</h3>
                                   <p>Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
             
     </section>
     ";
    }

    // line 465
    public function block_contentstatistique($context, array $blocks = array())
    {
        // line 466
        echo "     <section id=\"resultsPoint\">
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
    
     
     <section id=\"parallax-info\">
        <div class=\"clearfix\">
\t\t\t    <div class=\"col-md-6 yoga-desc title\">
                    <h1>Robert Doe</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. 
                    Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus. Suspendisse consectetur consectetur bibendum.</p>

                    <p class=\"txt-break\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. 
                    Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus. Suspendisse consectetur consectetur bibendum.</p>
                    <img class=\"signature\" src=\"images/signature.png\" alt=\"\"/>
               </div>
               <div class=\"col-md-6 cup-img\" style=\"padding:0;\">
                     <img src=\"images/people.jpg\" alt=\"\"/>
               </div>\t\t
\t        </div>
    </section>
      ";
    }

    // line 535
    public function block_contetsubscription($context, array $blocks = array())
    {
        // line 536
        echo "     <section class=\"bbtxt-content-subscription\">
           <div class=\"container\">
                    <div class=\"col-xs-12 bbtxt-box\">
                        <h4><i class=\"fa fa-quote-left\"></i><span class=\"middle-txt\">Enter in</span> <span class=\"point-big\">WT</span> Tennis<i class=\"fa fa-quote-right\"></i></h4>
                        <p class=\"subin\">The best tennis tour around the europe step by step.</p>
                        <div class=\"subscription-content\">
                            <div class=\"col-md-4\">
                                <div class=\"subscription-tennis\">
                                     
                                     <h3>subscription<span> Free</span></h3>
                                     
                                     <p class=\"desc-subscription\">A Responsive Online Shopping website can attract its more is buyers as the user.</p>
                                     <a class=\"pl-point-button\" href=\"#\">Read more</a>
                                 </div>
                             </div>
                             <div class=\"col-md-4\">
                                <div class=\"subscription-tennis\">
                                   
                                  <h3>subscription<span> Gold</span></h3>
                                  
                                  <p class=\"desc-subscription\">A Responsive Online Shopping website can attract its more is buyers as the user.</p>
                                  <a class=\"pl-point-button\" href=\"#\">Read more</a>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"subscription-tennis\">
                                  
                                  <h3>subscription<span> Premium</span></h3>
                                  
                                  <p class=\"desc-subscription\">A Responsive Online Shopping website can attract its more is buyers as the user.</p>
                                  <a class=\"pl-point-button\" href=\"#\">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
     </section>
           ";
    }

    // line 577
    public function block_contentclients($context, array $blocks = array())
    {
        // line 578
        echo "     <section class=\"container\">
           <div class=\"top-video col-xs-12 col-md-12\">
             <h3>OUR <span>CLIENT</span><span class=\"point-little\">.</span></h3>
             <p class=\"subtitle\">A small creative team, trying to enrich the lives of others and build brands 
                                    that a normal humans can understand.</p>

                 <div id=\"testimonials\">
                   
                          <div id=\"owl-demo\" class=\"owl-carousel\">
                            <div class=\"item\">
                                 <img src=\"images/player/djokovic.jpg\" alt=\"\" />
                                 <div class=\"testimon-desc\">
                                      <p>Fusce risus metus, placerat in <span>consectetur</span> eu, porttitor a est sed sed dolor lorem cras adipiscing</p>
                                      <p>A small <span>creative</span> team, trying to enrich the lives of others</p>
                                      <p class=\"nm-name\">- Brian Rood</p>
                                </div>
                            </div>
                            <div class=\"item\">
                                 <img src=\"images/player/nadal.jpg\" alt=\"\" />
                                 <div class=\"testimon-desc\">
                                      <p>Fusce risus metus, placerat in <span>consectetur</span> eu, porttitor a est sed sed dolor lorem cras adipiscing</p>
                                      <p>A small <span>creative</span> team, trying to enrich the lives of others</p>
                                      <p class=\"nm-name\">- Miki Rood</p>
                                 </div>
                           </div>
                            <div class=\"item\">
                                <img src=\"images/player/djokovic.jpg\" alt=\"\" />
                                <div class=\"testimon-desc\">
                                    <p>Fusce risus metus, placerat in <span>consectetur</span> eu, porttitor a est sed sed dolor lorem cras adipiscing</p>
                                      <p>A small <span>creative</span> team, trying to enrich the lives of others</p>
                                      <p class=\"nm-name\">- Robert Rood</p>
                                </div>
                            </div>
                          </div>
                    </div>
            </div>
     </section>
     ";
    }

    // line 620
    public function block_contentpicclient($context, array $blocks = array())
    {
        // line 621
        echo "     <section class=\"container\">
           <div class=\"client-sport client-sport-nomargin home-pg\">
               <div class=\"content-banner\">
                     <ul class=\"sponsor second\">
                      <li><img src=\"images/sponsor/2/1.jpg\" alt=\"\" /></li>
                      <li><img src=\"images/sponsor/2/2.jpg\" alt=\"\" /></li>
                      <li><img src=\"images/sponsor/2/3.jpg\" alt=\"\" /></li>
                      <li><img src=\"images/sponsor/2/4.jpg\" alt=\"\" /></li>
                      <li><img src=\"images/sponsor/2/5.jpg\" alt=\"\" /></li>
                      <li><img src=\"images/sponsor/2/2.jpg\" alt=\"\" /></li>
                    </ul>
                </div>
          </div>
     </section>
     ";
    }

    // line 639
    public function block_contentfoter($context, array $blocks = array())
    {
        // line 640
        echo "    <section id=\"footer-tag\">
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
                    <li><img src=\"images/1/1.jpg\" alt=\"\" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
                    <li><img src=\"images/1/2.jpg\" alt=\"\" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
                    <li><img src=\"images/1/3.jpg\" alt=\"\" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
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
\t\t<p>© 2015 - 2016 Developped By Team Mywhyshy. </p>
      </div>
\t</footer>
";
    }

    public function getTemplateName()
    {
        return "wyshynavFrontBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1043 => 640,  1040 => 639,  1022 => 621,  1019 => 620,  978 => 578,  975 => 577,  934 => 536,  931 => 535,  862 => 466,  859 => 465,  770 => 376,  767 => 375,  756 => 366,  745 => 358,  738 => 354,  731 => 350,  724 => 346,  717 => 342,  710 => 338,  696 => 327,  686 => 320,  671 => 307,  668 => 306,  642 => 283,  638 => 282,  634 => 281,  630 => 280,  626 => 279,  616 => 272,  612 => 271,  608 => 270,  604 => 269,  600 => 268,  573 => 244,  549 => 223,  543 => 220,  532 => 211,  529 => 210,  512 => 193,  509 => 192,  496 => 182,  487 => 176,  478 => 170,  470 => 165,  461 => 159,  454 => 155,  442 => 148,  436 => 147,  430 => 146,  420 => 138,  417 => 137,  388 => 108,  385 => 107,  366 => 88,  338 => 62,  332 => 58,  329 => 57,  319 => 50,  308 => 41,  305 => 40,  297 => 34,  293 => 33,  287 => 32,  283 => 31,  279 => 30,  275 => 29,  271 => 28,  266 => 26,  262 => 25,  256 => 22,  252 => 21,  247 => 19,  236 => 11,  226 => 3,  223 => 2,  213 => 746,  208 => 744,  202 => 741,  196 => 738,  192 => 737,  186 => 734,  182 => 733,  178 => 732,  172 => 729,  168 => 728,  162 => 725,  158 => 724,  152 => 721,  145 => 717,  141 => 716,  135 => 713,  131 => 712,  127 => 711,  123 => 709,  121 => 639,  116 => 636,  114 => 620,  108 => 616,  106 => 577,  101 => 574,  99 => 535,  94 => 532,  92 => 465,  87 => 462,  85 => 375,  81 => 373,  79 => 306,  76 => 305,  74 => 210,  69 => 207,  67 => 192,  64 => 191,  62 => 137,  56 => 133,  54 => 107,  49 => 104,  47 => 57,  44 => 56,  42 => 40,  38 => 38,  36 => 2,  33 => 1,);
    }
}
/* <html>*/
/* {% block contenthead %}*/
/* <head>*/
/*     <title>WT TENNIS</title>*/
/* <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />*/
/* */
/* <meta name="author" content="Corsini Alessio" />*/
/* <meta name="keywords" content="Tennis, club, events, football, golf, non-profit, betting assistant, football,fitness, tennis, sport, soccer, goal, sports, volleyball, basketball,	charity, club, cricket, football, hockey, magazine, non profit, rugby, soccer, sport, sports, tennis" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*     */
/*     <link href="{{ asset('frontEnd/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />*/
/*     <!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->*/
/*     */
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>*/
/*     <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'/>*/
/*     <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>*/
/* */
/*     <link href="{{ asset('frontEnd/css/fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <!--Clients-->*/
/*     <link href="{{ asset('frontEnd/css/own/owl.carousel.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('frontEnd/css/own/owl.theme.css') }}" rel="stylesheet" type="text/css" />*/
/* */
/* */
/*     <link href="{{ asset('frontEnd/css/jquery.bxslider.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('frontEnd/css/jquery.jscrollpane.css') }}" rel="stylesheet" type="text/css" />*/
/*     */
/*     <link href="{{ asset('frontEnd/css/minislide/flexslider.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('frontEnd/css/component.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('frontEnd/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('frontEnd/css/style_dir.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link rel="shortcut icon" type="{{ asset('frontEnd/image/png') }}" href="{{ asset('frontEnd/img/favicon.ico') }}" />*/
/*     <link href="{{ asset('frontEnd/css/responsive.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('frontEnd/css/animate.css') }}" rel="stylesheet" type="text/css" />*/
/* */
/* </head>*/
/* {% endblock %}*/
/* <body>*/
/* <!--SECTION TOP LOGIN-->*/
/* {% block contentconnexion %}*/
/*      <section class="content-top-login">*/
/*            <div class="container">*/
/*       <div class="col-md-12">*/
/*            <div class="box-support"> */
/*              <p class="support-info"><i class="fa fa-envelope-o"></i> info@wttennis.com</p>*/
/*           </div>*/
/*            <div class="box-login"> */
/*              */
/*              */
/*              <a href='{{ path('fos_user_security_logout') }}'>Logout</a>*/
/*           </div>*/
/*           </div>*/
/*       </div>*/
/*      </section>*/
/*           {% endblock %}*/
/*       <!--SECTION MENU -->*/
/*       {% block contentmenu %}*/
/*      <section class="container box-logo">*/
/*         <header>*/
/*            <div class="content-logo col-md-12">*/
/*           <div class="logo"> */
/*             <img src="{{ asset('frontEnd/img/logo2.png') }}" alt="" />*/
/*           </div>*/
/*           */
/*           <div class="bt-menu"><a href="#" class="menu"><span>&equiv;</span> Menu</a></div>*/
/* */
/*          <div class="box-menu">*/
/*             */
/*             <nav id="cbp-hrmenu" class="cbp-hrmenu">*/
/* 					    <ul id="menu">    */
/*                             <li><a class="lnk-menu active" href="index.html">Home</a></li>*/
/*                             <li>*/
/* 								<a class="lnk-menu" href="#">Pages</a>*/
/*                                 <div class="cbp-hrsub sub-little">*/
/*                                   <div class="cbp-hrsub-inner"> */
/*                                       <div class="content-sub-menu">*/
/* 								        <ul class="menu-pages">*/
/* 									        <li><a href="tournaments.html"><span>Tournaments</span></a></li>*/
/* 									        <li><a href="login.html"><span>Login</span></a></li>*/
/* 									        <li><a href="news.html"><span>News</span></a></li>*/
/*                                             <li><a href="single_news.html"><span>Single News</span></a></li>*/
/* 									        <li><a href="results.html"><span>Results</span></a></li>*/
/*                                             <li><a href="players.html"><span>Players</span></a></li>*/
/*                                             <li><a href="single_player.html"><span>Single Player</span></a></li>*/
/*                                             <li><a href="matches.html"><span>Matches</span></a></li>*/
/*                                             <li><a href="match.html"><span>Single Match</span></a></li>*/
/*                                        {#     <li><a href="{{path('')}}"><span> Reclammations</span></a></li>#}*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/* 							</li>*/
/* 						<li><a class="lnk-menu" href="players.html">Players</a></li>*/
/*                         <li><a class="lnk-menu" href="results.html">Results</a></li>*/
/* 						<li><a class="lnk-menu" href="news.html">News</a></li>*/
/*                         <li><a class="lnk-menu" href="contact.html">Contact</a></li>*/
/*                         */
/* 					</ul></nav>*/
/*               </div>*/
/* 			</div>*/
/* 	    </header>*/
/*      </section>*/
/*           {% endblock %}*/
/*           */
/*           */
/*           <!--SECTION CONTAINER SLIDER-->*/
/*     {% block content1 %}*/
/*     <section id="summary-slider">*/
/*            <div class="general">*/
/*            <div class="content-result content-result-news col-md-12">*/
/*              <div id="textslide" class="effect-backcolor">*/
/*                 <div class="container">*/
/*                     <div class="col-md-12 slide-txt">*/
/*                         <p class='sub-result aft-little welcome linetheme-left'>Yasmine</p>*/
/*                         <p class='sub-result aft-little linetheme-right'>Web Design<span class="point-big">.</span></p>*/
/*                     </div>*/
/*                 </div>*/
/*              </div>*/
/*            </div>*/
/*            <div id="slidematch" class="col-xs-12 col-md-12">*/
/*                   <div class="content-match-team-wrapper">*/
/*                      <span class="gdlr-left">Real Tennis</span>*/
/*                      <span class="gdlr-upcoming-match-versus">VS</span>*/
/*                      <span class="gdlr-right">Wednesday Club</span>*/
/*                   </div>*/
/*                   <div class="content-match-team-time">*/
/*                      <span class="gdlr-left">23 Sep 2016 - 14:00</span>*/
/*                      <span class="gdlr-right">Real Stadium</span>*/
/*                   </div>*/
/*                </div>*/
/*          </div>*/
/*     </section>*/
/*       {% endblock %}  */
/*       */
/*       */
/*           <!-- SECTION NEWS SLIDER -->*/
/*         {% block content2 %}*/
/*      <section class="news_slide-over-color">*/
/*           <div class="news_slide-over"></div>*/
/*            <div class="container">*/
/*              <div class="col-xs-12 col-md-12 top-first-info">*/
/*                <div class="col-md-4">*/
/*                      <section class="slider">*/
/*                             <div id="slider" class="flexslider flexslider-attachments">*/
/*                                 <ul class="slides">*/
/*                                     <li data-thumb="{{ asset('frontEnd/images/slider/mini-slider/thumb1.html') }}"><img src="{{ asset('frontEnd/images/minislider/1.jpg') }}" alt=""/></li>*/
/*   	    	                        <li data-thumb="{{ asset('frontEnd/images/slider/mini-slider/thumb2.html') }}"><img src="{{ asset('frontEnd/images/minislider/4.jpg') }}" alt=""/></li>*/
/*   	    	                        <li data-thumb="{{ asset('frontEnd/images/slider/mini-slider/thumb3.html') }}"><img src="{{ asset('frontEnd/images/minislider/3.jpg') }}" alt=""/></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="slide-news-bottom"><a href="#">Slide News</a><a class="i-ico" href="#"><i class="fa fa-angle-double-right"></i></a></div>*/
/*                      </section>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                      <img src="{{ asset('frontEnd/images/minislider/2.jpg') }}" alt=""/>*/
/*                      <div class="slide-news-bottom"><a href="#">Atp Europe Tour</a><a class="i-ico" href="#"><i class="fa fa-angle-double-right"></i></a></div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                      <img src="{{ asset('frontEnd/images/minislider/3.jpg') }}" alt=""/>*/
/*                      <div class="slide-news-bottom"><a href="#">Wtp Tokyo Stadium</a><a class="i-ico" href="#"><i class="fa fa-angle-double-right"></i></a></div>*/
/*                 </div>*/
/*              </div>*/
/*              <div class="col-xs-12 col-md-12 top-slide-info">*/
/*               <div class="col-xs-6 col-md-6">*/
/*                 <div class="col-md-4 slide-cont-img"><a href="single_news.html"><img class="scale_image" src="{{ asset('frontEnd/images/video/1.jpg') }}" alt=""/><i class="fa fa-video-camera"></i></a></div>*/
/*                 <div class="event_date dd-date">May 01, 2014 5:50 am <div class="post_theme">Exlusive</div></div><h4> Stay Ahead of the curve</h4>*/
/*                 <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>*/
/*               </div>*/
/*               <div class="col-xs-6 col-md-6">*/
/*                 <div class="col-md-4 slide-cont-img"><a href="single_news.html"><img class="scale_image" src="{{ asset('frontEnd/images/video/2.jpg') }}" alt=""/><i class="fa fa-picture-o"></i></a></div>*/
/*                 <div class="event_date dd-date">May 01, 2014 5:50 am <div class="post_theme">Interview</div></div><h4> Stay Ahead of the curve</h4>*/
/*                 <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>*/
/*                 */
/*               </div>*/
/*               <div class="col-xs-6 col-md-6 box-top-txt">*/
/*                 <div class="col-md-4 slide-cont-img"><a href="single_news.html"><img class="scale_image" src="{{ asset('frontEnd/images/video/3.jpg') }}" alt=""/><i class="fa fa-picture-o"></i></a></div>*/
/*                 <div class="event_date dd-date">May 01, 2014 5:50 am</div><h4> Stay Ahead of the curve</h4>*/
/*                 <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>*/
/*                 */
/*               </div>*/
/*               <div class="col-xs-6 col-md-6 box-top-txt">*/
/*                 <div class="col-md-4 slide-cont-img"><a href="single_news.html"><img class="scale_image" src="{{ asset('frontEnd/images/video/4.jpg') }}" alt=""/><i class="fa fa-video-camera"></i></a></div>*/
/*                 <div class="event_date dd-date">May 01, 2014 5:50 am</div><h4> Stay Ahead of the curve</h4>*/
/*                 <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>*/
/*                 */
/*               </div>*/
/*              </div>*/
/*            </div>*/
/*      </section>*/
/*      {% endblock %}*/
/*           */
/*      {% block content3 %}*/
/*      <section id="parallaxTraining">*/
/*         <div class="black-shad">*/
/*         <div class="container">*/
/*             <div class="col-md-12">*/
/*                 <div class="txt-training">*/
/*                   <p>start your</p>*/
/*                   <h2>TRAINING TODAY</h2>*/
/*                   <a href="#">Basic</a><a href="#">Medium</a><a href="#">Expert</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*       </div>*/
/*      </section>*/
/*      {% endblock %}*/
/*      */
/*      */
/*           <!--SECTION Match TOP SCORE-->*/
/*           {% block content4 %}*/
/*      <section id="atp-match">*/
/*            <div class="container">*/
/*            <div id="people-top" class="top-match col-xs-12 col-md-12">*/
/*               <h3 class="news-title n-match">Last <span>Match</span><span class="point-little">.</span></h3>*/
/*               <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands */
/*                                     that a normal humans can understand.</p>*/
/*             <!--SECTION ATP MATCH-->*/
/*               <div class="next-match-co col-xs-8 col-md-8">*/
/*                  <div id="nextmatch-content" class="experience">*/
/*                    <div class="col-xs-12 atphead"><div class="match-sing-title"><img src="{{ asset('frontEnd/images/sub-ball.png') }}" alt="" />ATP.HEAD2</div></div>*/
/*                    <div class="col-xs-4 pht-1 pht-left">*/
/*                          <div class="img-face-home">*/
/*                             <img src="{{ asset('frontEnd/images/player/djokovic.jpg') }}" alt="" />*/
/*                             <p class="name-mc">Nikol Brian</p>*/
/*                          </div>                      */
/*                   </div>*/
/*                   <div class="col-xs-4 pl-point ">*/
/*                       <p class="col-xs-12 name-mc-title">BEIJING - FIRST ROUND</p>*/
/*                       <div class="col-xs-4 nm-result">*/
/*                             <p class="nr1 ris1"> 0 </p>*/
/*                             <p class="nr2"> 0% </p>*/
/*                       </div>*/
/*                       <div class="col-xs-4 nm-result-vs">*/
/*                             <p class="nrvs"> - VS - </p>*/
/*                       </div>*/
/*                       <div class="col-xs-4 nm-result">*/
/*                             <p class="nr1 ris2"> 1 </p>*/
/*                             <p class="nr2"> 100% </p>*/
/*                       </div>*/
/* */
/*                   </div>*/
/*                    <div class="col-xs-4 pht-1 pht-right">*/
/*                         <div class="img-face-home">*/
/*                             <img src="{{ asset('frontEnd/images/player/nadal.jpg') }}" alt="" />*/
/*                             <p class="name-mc">Roial Mink</p>*/
/*                         </div>*/
/* */
/*                   </div>*/
/*                   <div class="col-xs-12 atphead"><div class="match-sing-title inf-bottom">*/
/*                         <p><i class="fa fa-calendar-o"></i>May 16, 2012 14:30 - 16:00 <i class="fa fa-map-marker"></i> London Brion Stadium</p>*/
/*                    </div></div>*/
/*                  </div>*/
/*               </div>*/
/*               <div class="col-md-4 home-page">*/
/*                    <div class="main">*/
/*                                 <div class="tabs animated-slide-2">*/
/*                                  <div class="result-filter">*/
/*                                     <ul class="tab-links">*/
/*                                         <li class="active"><a href="#tab1111">ATP</a></li>*/
/*                                         <li><a href="#tab2222">WTA</a></li>*/
/*                                         <li><a href="#tab3333">DBL</a></li>*/
/*                                     </ul>*/
/*                                     </div>*/
/*                                     <div class="tab-content-point">*/
/*                                         <div id="tab1111" class="tab active">*/
/*                                         <table class="tab-score">*/
/*                                           <tr class="top-scrore-table"><td class="score-position">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>*/
/*                                           <tr><td class="score-position">1.</td><td><a href="single_player.html">Nicol Dorian</a></td><td><img src="{{ asset('frontEnd/images/flags/serbia.png') }}" alt="" /></td><td>12770</td></tr>*/
/*                                           <tr><td class="score-position">2.</td><td><a href="single_player.html">Rafael Milk</a></td><td><img src="{{ asset('frontEnd/images/flags/argentina.png') }}" alt="" /></td><td>10670</td></tr>*/
/*                                           <tr><td class="score-position">3.</td><td><a href="single_player.html">Roger Figo</a></td><td><img src="{{ asset('frontEnd/images/flags/uk.png') }}" alt="" /></td><td>7490</td></tr>*/
/*                                           <tr><td class="score-position">4.</td><td><a href="single_player.html">St. Waiker</a></td><td><img src="{{ asset('frontEnd/images/flags/brazil.png') }}" alt="" /></td><td>5985</td></tr>*/
/*                                           <tr><td class="score-position">5.</td><td><a href="single_player.html">David Ruby</a></td><td><img src="{{ asset('frontEnd/images/flags/japan.png') }}" alt="" /></td><td>4765</td></tr>*/
/*                                           */
/*                                          </table>*/
/*                                         </div>*/
/*                                         <div id="tab2222" class="tab">*/
/*                                         <table class="tab-score">*/
/*                                         <tr class="top-scrore-table"><td class="score-position">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>*/
/*                                           <tr><td class="score-position">1.</td><td><a href="single_player.html">Serena Brain</a></td><td><img src="{{ asset('frontEnd/images/flags/usa.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                           <tr><td class="score-position">2.</td><td><a href="single_player.html">Simona Figo</a></td><td><img src="{{ asset('frontEnd/images/flags/uk.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                           <tr><td class="score-position">3.</td><td><a href="single_player.html">Nio Red</a></td><td><img src="{{ asset('frontEnd/images/flags/italy.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                           <tr><td class="score-position">4.</td><td><a href="single_player.html">Petra Curt</a></td><td><img src="{{ asset('frontEnd/images/flags/denmark.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                           <tr><td class="score-position">5.</td><td><a href="single_player.html">Ag. Rader</a></td><td><img src="{{ asset('frontEnd/images/flags/uk.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                          </table>*/
/*                                         </div>*/
/*                                         <div id="tab3333" class="tab">*/
/*                                         <table class="tab-score">*/
/*                                         <tr class="top-scrore-table"><td class="score-position">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>*/
/*                                           <tr><td class="score-position">1.</td><td><a href="single_player.html">name1</a></td><td>-</td><td>1234</td></tr>*/
/*                                           <tr><td class="score-position">2.</td><td><a href="single_player.html">name2</a></td><td>-</td><td>1234</td></tr>*/
/*                                           <tr><td class="score-position">3.</td><td><a href="single_player.html">name3</a></td><td>-</td><td>1234</td></tr>*/
/*                                           <tr><td class="score-position">4.</td><td><a href="single_player.html">name4</a></td><td>-</td><td>1234</td></tr>*/
/*                                           <tr><td class="score-position">5.</td><td><a href="single_player.html">name5</a></td><td>-</td><td>1234</td></tr>*/
/*                                          </table>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="score-view-all"><a class="pl-point-button" href="results.html">View All</a></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                 </div>*/
/*              </div><!--Close Top Match-->*/
/*            </div>*/
/*      </section>*/
/*      {% endblock %}*/
/*      */
/*      {% block content5 %}*/
/*            <!--SECTION NEXT MATCH-->*/
/*      <section id="next-match">*/
/*            <div  class="container">*/
/*               <div class="next-match-news top-match col-xs-12 col-md-12">*/
/*               <h3 class="news-title n-match">Next <span>Match</span><span class="point-little">.</span></h3>*/
/*               <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands */
/*                                     that a normal humans can understand.</p>*/
/*                 <div class="other-match col-md-4">*/
/*                     <div class="score-next-time">*/
/*                         <div class="circle-ico"><p>ATP</p></div>*/
/*                     </div>*/
/*                     <div id="getting-started"></div>*/
/*                     <div class="col-xs-5 col-md-5 match-team">*/
/*                         <img class="" src="{{ asset('frontEnd/images/team1.png') }}" alt=""/>*/
/*                         <p>Fernand</p>*/
/*                     </div>*/
/*                     <div class="col-xs-2 col-md-2 match-team-vs">*/
/*                         <span class="txt-vs"> - vs - </span>*/
/*                     </div>*/
/*                     <div class="col-xs-5 col-md-5 match-team">*/
/*                         <img class="" src="{{ asset('frontEnd/images/team2.png') }}" alt=""/>*/
/*                         <p>Brain</p>*/
/*                     </div>*/
/*                     <div class="next-match-place">*/
/*                         <p class='sub-result'>Qatar ExonMobil</p>*/
/*                         <p class="dd-news-date">April 22, 2016 ~ 2:30pm Canada Stadium</p>*/
/*                     </div>*/
/*                     */
/*                 </div>*/
/*                 <div class="other-match col-md-4">*/
/*                     <div class="match-team-list">*/
/*                         <img class="t-img1" src="{{ asset('frontEnd/images/team1_small.png.png') }}" alt=""/>*/
/*                         <span>Fernand</span>*/
/*                         <span class="txt-vs"> - vs - </span>*/
/*                         <span>Brain</span>*/
/*                         <img class="t-img2" src="{{ asset('frontEnd/images/team1_small.png') }}" alt=""/>*/
/*                         <p>22/06/2015 14:30 - 16:00</p>*/
/*                     </div>*/
/*                     <div class="match-team-list">*/
/*                         <img class="t-img1" src="{{ asset('frontEnd/images/team1_small.png') }}" alt=""/>*/
/*                         <span>Fernand</span>*/
/*                         <span class="txt-vs"> - vs - </span>*/
/*                         <span>Brain</span>*/
/*                         <img class="t-img2" src="{{ asset('frontEnd/images/team1_small.png') }}" alt=""/>*/
/*                         <p>22/06/2015 14:30 - 16:00</p>*/
/*                     </div>*/
/*                     <div class="match-team-list">*/
/*                         <img class="t-img1" src="{{ asset('frontEnd/images/team1_small.png') }}" alt=""/>*/
/*                         <span>Fernand</span>*/
/*                         <span class="txt-vs"> - vs - </span>*/
/*                         <span>Brain</span>*/
/*                         <img class="t-img2" src="{{ asset('frontEnd/images/team1_small.png') }}" alt=""/>*/
/*                         <p>22/06/2015 14:30 - 16:00</p>*/
/*                     </div>*/
/*                     <div class="team-view-all">*/
/*                        <p>View all</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="other-match col-md-4 other-last">*/
/*                    <img src="{{ asset('frontEnd/images/adwertise.jpg') }}" alt="" />*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*            </div>*/
/*      </section>*/
/*     {% endblock %}*/
/*      */
/*           <!-- PARALLAX BLACK TENNIS-->*/
/*           {% block content6 %}*/
/*      <section class="bbtxt-content">*/
/* */
/*            <div class="container">*/
/*                     <div class="col-xs-12 bbtxt-box">*/
/*                         <h4><i class="fa fa-quote-left"></i>Tennis<span class="point-big">.</span> <span class="middle-txt">is the new black<span class="point-little">.</span></span><i class="fa fa-quote-right"></i></h4>*/
/*                         <p class="subin">The best tennis tour around the europe step by step.</p>*/
/*                         <div class="col-md-6 homevideo-top">*/
/*                              <h3 class="home-video-title">Amazing Video</h3>*/
/*                             <div class="col-md-12 homevideo">*/
/*                                */
/*                                 <div class="col-md-5 it-video">*/
/*                                   <a href="video.html"><img class="scale_image" src="images/video/1.jpg" alt=""/>*/
/*                                   <i class="fa fa-video-camera"></i></a>*/
/*                                 </div>*/
/*                                 <div class="video-txt">*/
/*                                    <div class="event_date_video">July 01, 2014 5:50 am</div>*/
/*                                    <div class="post_theme video-post">Interview</div><h3>Neque porro quisquam</h3>*/
/*                                    <p>Aliquam erat volutpat. So your content will always look good on any screen size like<br>*/
/*                                         Tablet, Phones, Imac, Macbook &amp; all sort of devices. </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-12 homevideo">*/
/*                                 <div class="col-md-5 it-video">*/
/*                                   <a href="video.html"><img class="scale_image" src="images/video/2.jpg" alt=""/>*/
/*                                   <i class="fa fa-video-camera"></i></a>*/
/*                                 </div>*/
/*                                 <div class="video-txt">*/
/*                                     <div class="event_date_video">July 01, 2014 5:50 am</div>*/
/*                                     <h3>Ante ipsum primis</h3>*/
/*                                    <p>Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi.</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-12 homevideo">*/
/*                                 <div class="col-md-5 it-video">*/
/*                                   <a href="video.html"><img class="scale_image" src="images/video/3.jpg" alt=""/>*/
/*                                   <i class="fa fa-video-camera"></i></a>*/
/*                                 </div>*/
/*                                 <div class="video-txt">*/
/*                                     <div class="event_date_video">July 01, 2014 5:50 am</div>*/
/*                                     <h3>Neque porro quisquam</h3>*/
/*                                    <p>Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-6 homevideo-top">*/
/*                             <h3 class="home-video-title">Amazing Video</h3>*/
/*                             <div class="col-md-12 homevideo"> */
/*                                 <div class="col-md-5 it-video">*/
/*                                   <a href="video.html"><img class="scale_image" src="images/video/1.jpg" alt=""/>*/
/*                                   <i class="fa fa-video-camera"></i></a>*/
/*                                 </div>*/
/*                                 <div class="video-txt">*/
/*                                    <div class="event_date_video">July 01, 2014 5:50 am</div>*/
/*                                    <div class="post_theme video-post">Interview</div><h3>Neque porro quisquam</h3>*/
/*                                    <p>Aliquam erat volutpat. So your content will always look good on any screen size like<br>*/
/*                                         Tablet, Phones, Imac, Macbook &amp; all sort of devices. </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-12 homevideo">*/
/*                                 <div class="col-md-5 it-video">*/
/*                                   <a href="video.html"><img class="scale_image" src="images/video/2.jpg" alt=""/>*/
/*                                   <i class="fa fa-video-camera"></i></a>*/
/*                                 </div>*/
/*                                 <div class="video-txt">*/
/*                                     <div class="event_date_video">July 01, 2014 5:50 am</div>*/
/*                                     <h3>Ante ipsum primis</h3>*/
/*                                    <p>Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi.</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-12 homevideo">*/
/*                                 <div class="col-md-5 it-video">*/
/*                                   <a href="video.html"><img class="scale_image" src="images/video/3.jpg" alt=""/>*/
/*                                   <i class="fa fa-video-camera"></i></a>*/
/*                                 </div>*/
/*                                 <div class="video-txt">*/
/*                                     <div class="event_date_video">July 01, 2014 5:50 am</div>*/
/*                                     <h3>Neque porro quisquam</h3>*/
/*                                    <p>Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                   </div>*/
/*              */
/*      </section>*/
/*      {% endblock %}*/
/*      */
/*      */
/*           <!--SECTION STATISTIC RESULTS-->*/
/*           {% block contentstatistique %}*/
/*      <section id="resultsPoint">*/
/*            <div class="container">*/
/*                     <div class="top-match col-xs-12 col-md-12">*/
/*                      <div class="top-score-title">*/
/*                         <h3>Statistics<span class="point-little">.</span></h3>*/
/*                         <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands */
/*                                     that a normal humans can understand.</p>*/
/*                         <div class="col-xs-12 circle-percentage">*/
/*                           <div class="col-xs-3">*/
/*                             <div class="pie_progress" role="progressbar" data-goal="83" data-barcolor="#f59123" data-barsize="10">*/
/*                              <div class="pie_content">*/
/*                                 <div class="pie_progress__number">0%</div>*/
/*                                 <div class="pie_progress__content">Super-Senior</div>*/
/*                              </div>*/
/*                             </div>*/
/*                           </div>*/
/*                           <div class="col-xs-3">*/
/*                             <div class="pie_progress" role="progressbar" data-goal="65" data-barcolor="#2c333b" data-barsize="10">*/
/*                              <div class="pie_content">*/
/*                                 <div class="pie_progress__number">0%</div>*/
/*                                 <div class="pie_progress__content">Senior</div>*/
/*                              </div>*/
/*                             </div>*/
/*                           </div>*/
/*                           <div class="col-xs-3">*/
/*                             <div class="pie_progress" role="progressbar" data-goal="32" data-barcolor="#f59123" data-barsize="10">*/
/*                              <div class="pie_content">*/
/*                                 <div class="pie_progress__number">0%</div>*/
/*                                 <div class="pie_progress__content">Pro</div>*/
/*                              </div>*/
/*                             </div>*/
/*                           </div>*/
/*                           <div class="col-xs-3">*/
/*                             <div class="pie_progress" role="progressbar" data-goal="73" data-barcolor="#2c333b" data-barsize="10">*/
/*                              <div class="pie_content">*/
/*                                 <div class="pie_progress__number">0%</div>*/
/*                                 <div class="pie_progress__content">Junior</div>*/
/*                              </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                        */
/*                       </div>*/
/*                     </div>*/
/*                 </div>*/
/*      </section>*/
/*     */
/*      */
/*      <section id="parallax-info">*/
/*         <div class="clearfix">*/
/* 			    <div class="col-md-6 yoga-desc title">*/
/*                     <h1>Robert Doe</h1>*/
/*                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. */
/*                     Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus. Suspendisse consectetur consectetur bibendum.</p>*/
/* */
/*                     <p class="txt-break">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. */
/*                     Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus. Suspendisse consectetur consectetur bibendum.</p>*/
/*                     <img class="signature" src="images/signature.png" alt=""/>*/
/*                </div>*/
/*                <div class="col-md-6 cup-img" style="padding:0;">*/
/*                      <img src="images/people.jpg" alt=""/>*/
/*                </div>		*/
/* 	        </div>*/
/*     </section>*/
/*       {% endblock %}*/
/*       */
/*       */
/*           <!-- SECTION SUBSCRIPTIONS-->*/
/*           {% block contetsubscription %}*/
/*      <section class="bbtxt-content-subscription">*/
/*            <div class="container">*/
/*                     <div class="col-xs-12 bbtxt-box">*/
/*                         <h4><i class="fa fa-quote-left"></i><span class="middle-txt">Enter in</span> <span class="point-big">WT</span> Tennis<i class="fa fa-quote-right"></i></h4>*/
/*                         <p class="subin">The best tennis tour around the europe step by step.</p>*/
/*                         <div class="subscription-content">*/
/*                             <div class="col-md-4">*/
/*                                 <div class="subscription-tennis">*/
/*                                      */
/*                                      <h3>subscription<span> Free</span></h3>*/
/*                                      */
/*                                      <p class="desc-subscription">A Responsive Online Shopping website can attract its more is buyers as the user.</p>*/
/*                                      <a class="pl-point-button" href="#">Read more</a>*/
/*                                  </div>*/
/*                              </div>*/
/*                              <div class="col-md-4">*/
/*                                 <div class="subscription-tennis">*/
/*                                    */
/*                                   <h3>subscription<span> Gold</span></h3>*/
/*                                   */
/*                                   <p class="desc-subscription">A Responsive Online Shopping website can attract its more is buyers as the user.</p>*/
/*                                   <a class="pl-point-button" href="#">Read more</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4">*/
/*                                 <div class="subscription-tennis">*/
/*                                   */
/*                                   <h3>subscription<span> Premium</span></h3>*/
/*                                   */
/*                                   <p class="desc-subscription">A Responsive Online Shopping website can attract its more is buyers as the user.</p>*/
/*                                   <a class="pl-point-button" href="#">Read more</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                </div>*/
/*      </section>*/
/*            {% endblock %}*/
/*            */
/*            */
/*      <!--SECTION CLIENTS-->*/
/*      {% block contentclients %}*/
/*      <section class="container">*/
/*            <div class="top-video col-xs-12 col-md-12">*/
/*              <h3>OUR <span>CLIENT</span><span class="point-little">.</span></h3>*/
/*              <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands */
/*                                     that a normal humans can understand.</p>*/
/* */
/*                  <div id="testimonials">*/
/*                    */
/*                           <div id="owl-demo" class="owl-carousel">*/
/*                             <div class="item">*/
/*                                  <img src="images/player/djokovic.jpg" alt="" />*/
/*                                  <div class="testimon-desc">*/
/*                                       <p>Fusce risus metus, placerat in <span>consectetur</span> eu, porttitor a est sed sed dolor lorem cras adipiscing</p>*/
/*                                       <p>A small <span>creative</span> team, trying to enrich the lives of others</p>*/
/*                                       <p class="nm-name">- Brian Rood</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                  <img src="images/player/nadal.jpg" alt="" />*/
/*                                  <div class="testimon-desc">*/
/*                                       <p>Fusce risus metus, placerat in <span>consectetur</span> eu, porttitor a est sed sed dolor lorem cras adipiscing</p>*/
/*                                       <p>A small <span>creative</span> team, trying to enrich the lives of others</p>*/
/*                                       <p class="nm-name">- Miki Rood</p>*/
/*                                  </div>*/
/*                            </div>*/
/*                             <div class="item">*/
/*                                 <img src="images/player/djokovic.jpg" alt="" />*/
/*                                 <div class="testimon-desc">*/
/*                                     <p>Fusce risus metus, placerat in <span>consectetur</span> eu, porttitor a est sed sed dolor lorem cras adipiscing</p>*/
/*                                       <p>A small <span>creative</span> team, trying to enrich the lives of others</p>*/
/*                                       <p class="nm-name">- Robert Rood</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                           </div>*/
/*                     </div>*/
/*             </div>*/
/*      </section>*/
/*      {% endblock %}*/
/*      */
/*      */
/*             <!--SECTION TOP PRODUCTS-->*/
/*        <!--SECTION SPONSOR-->*/
/*        {% block contentpicclient %}*/
/*      <section class="container">*/
/*            <div class="client-sport client-sport-nomargin home-pg">*/
/*                <div class="content-banner">*/
/*                      <ul class="sponsor second">*/
/*                       <li><img src="images/sponsor/2/1.jpg" alt="" /></li>*/
/*                       <li><img src="images/sponsor/2/2.jpg" alt="" /></li>*/
/*                       <li><img src="images/sponsor/2/3.jpg" alt="" /></li>*/
/*                       <li><img src="images/sponsor/2/4.jpg" alt="" /></li>*/
/*                       <li><img src="images/sponsor/2/5.jpg" alt="" /></li>*/
/*                       <li><img src="images/sponsor/2/2.jpg" alt="" /></li>*/
/*                     </ul>*/
/*                 </div>*/
/*           </div>*/
/*      </section>*/
/*      {% endblock%}*/
/*      */
/*      */
/*             <!--SECTION FOOTER--> */
/*             {% block contentfoter %}*/
/*     <section id="footer-tag">*/
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
/*                     <li><img src="images/1/1.jpg" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>*/
/*                     <li><img src="images/1/2.jpg" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>*/
/*                     <li><img src="images/1/3.jpg" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>*/
/*                  </ul>*/
/*               </div>*/
/*               <div class="col-md-3 footer-newsletters">*/
/*                 <h3>Newsletters</h3>*/
/*                 <form method="post">     */
/*                     <div class="name">*/
/*                         <label for="name">* Name:</label><div class="clear"></div>*/
/*                         <input id="name" name="name" type="text" placeholder="e.g. Mr. John Doe" required=""/>*/
/*                     </div>*/
/*                     <div class="email">*/
/*                         <label for="email">* Email:</label><div class="clear"></div>*/
/*                         <input id="email" name="email" type="text" placeholder="example@domain.com" required=""/>*/
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
/*     */
/*     */
/*     <footer>*/
/*            <div class="col-md-12 content-footer">*/
/* 		<p>© 2015 - 2016 Developped By Team Mywhyshy. </p>*/
/*       </div>*/
/* 	</footer>*/
/* {% endblock %}*/
/* */
/* */
/* <script src="{{ asset('frontEnd/js/jquery-1.10.2.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontEnd/js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontEnd/js/jquery.transit.min.js') }}" type="text/javascript"></script>*/
/* */
/* <!--MENU-->*/
/* <script src="{{ asset('frontEnd/js/menu/modernizr.custom.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontEnd/js/menu/cbpHorizontalMenu.js') }}" type="text/javascript"></script>*/
/* <!--END MENU-->*/
/* */
/* <!--Mini Flexslide-->*/
/* <script src="{{ asset('frontEnd/js/minislide/jquery.flexslider.js') }}" type="text/javascript"></script>*/
/* */
/* <!-- Percentace circolar -->*/
/* <script src="{{ asset('frontEnd/js/circle/jquery-asPieProgress.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontEnd/js/circle/rainbow.min.js') }}" type="text/javascript"></script>*/
/* */
/* <!--Gallery-->*/
/* <script src="{{ asset('frontEnd/js/gallery/jquery.prettyPhoto.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontEnd/js/gallery/isotope.js') }}" type="text/javascript"></script>*/
/* */
/* <!-- Button Anchor Top-->*/
/* <script src="{{ asset('frontEnd/js/jquery.ui.totop.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontEnd/js/custom.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontEnd/js/jquery.bxslider.js') }}" type="text/javascript"></script>*/
/* */
/* <!--Carousel News-->*/
/* <script src="{{ asset('frontEnd/js/jquery.easing.1.3.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontEnd/js/jquery.mousewheel.js') }}" type="text/javascript"></script>*/
/* */
/* <!--Carousel Clients-->*/
/* <script src="{{ asset('frontEnd/js/own/owl.carousel.js') }}" type="text/javascript"></script>*/
/* */
/* <!--Count down-->*/
/* <script src="{{ asset('frontEnd/js/jquery.countdown.js') }}" type="text/javascript"></script>*/
/* */
/* <script src="{{ asset('frontEnd/js/custom_ini.js') }}" type="text/javascript"></script> */
/*  */
/* </body>*/
/* */
/* </html>*/
/* */
