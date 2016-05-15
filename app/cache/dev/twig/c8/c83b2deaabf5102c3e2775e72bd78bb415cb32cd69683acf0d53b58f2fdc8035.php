<?php

/* wyshybackNavBundle::Layout.html.twig */
class __TwigTemplate_4e9cd8df7d7b23c69971a05f6df080c86a22aaa3f506a34284b7644564b8606c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'userImage' => array($this, 'block_userImage'),
            'userInfo' => array($this, 'block_userInfo'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    
        
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
<meta charset=\"utf-8\" />

          ";
        // line 9
        $this->displayBlock('titre', $context, $blocks);
        // line 12
        echo " <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
          width: 50%;
        height: 50%;
      }
    </style>
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/tftfavicon.png"), "html", null, true);
        echo "\"/>                                 
 
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
<meta content=\"\" name=\"description\" />
<meta content=\"\" name=\"author\" />
<!-- BEGIN PLUGIN CSS -->
<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/pace/pace-theme-flash.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/bootstrap-datepicker/css/datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-ricksaw-chart/css/rickshaw.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" >
<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-morris-chart/css/morris.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/bootstrap-select2/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>

<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
<!-- END PLUGIN CSS -->
<!-- BEGIN CORE CSS FRAMEWsORK -->
<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/boostrapv3/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/boostrapv3/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-scrollbar/jquery.scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/css/custom-icon-set.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/css/custom-icon-set.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>



 


<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class=\"\">
<!-- BEGIN HEADER -->
<div class=\"header navbar navbar-inverse \">
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class=\"navbar-inner\">
    <div class=\"header-seperation\">
      <ul class=\"nav pull-left notifcation-center\" id=\"main-menu-toggle-wrapper\" style=\"display:none\">
        <li class=\"dropdown\"> <a id=\"main-menu-toggle\" href=\"#main-menu\"  class=\"\" >
          <div class=\"iconset top-menu-toggle-white\"></div>
          </a> </li>
      </ul>
      <!-- BEGIN LOGO -->
      <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_1");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/logo.png"), "html", null, true);
        echo "\" class=\"logo\" alt=\"\"  data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/logo.png"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/logo2x.png"), "html", null, true);
        echo "\" width=\"106\" height=\"21\"/></a>
      <!-- END LOGO -->
      <ul class=\"nav pull-right notifcation-center\">
        <li class=\"dropdown\" id=\"header_task_bar\"> <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("wyshyback_nav_1");
        echo "\" class=\"dropdown-toggle active\" data-toggle=\"\">
          <div class=\"iconset top-home\"></div>
          </a> </li>
        <li class=\"dropdown\" id=\"header_inbox_bar\" > <a href=\"email.html\" class=\"dropdown-toggle\" >
          <div class=\"iconset top-messages\"></div>
          <span class=\"badge\" id=\"msgs-badge\">2</span> </a></li>
        <li class=\"dropdown\" id=\"portrait-chat-toggler\" style=\"display:none\"> <a href=\"#sidr\" class=\"chat-menu-toggle\">
          <div class=\"iconset top-chat-white \"></div>
          </a> </li>
      </ul>
    </div>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <div class=\"header-quick-nav\" >
      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class=\"pull-left\">
        <ul class=\"nav quick-section\">
          <li class=\"quicklinks\"> <a href=\"#\" class=\"\" id=\"layout-condensed-toggle\" >
            <div class=\"iconset top-menu-toggle-dark\"></div>
            </a> </li>
        </ul>
        <ul class=\"nav quick-section\">
          <li class=\"quicklinks\"> <a href=\"#\" class=\"\" >
            <div class=\"iconset top-reload\"></div>
            </a> </li>
          <li class=\"quicklinks\"> <span class=\"h-seperate\"></span></li>
          <li class=\"quicklinks\"> <a href=\"#\" class=\"\" >
            <div class=\"iconset top-tiles\"></div>
            </a> </li>
          <li class=\"m-r-10 input-prepend inside search-form no-boarder\"> <span class=\"add-on\"> <span class=\"iconset top-search\"></span></span>
            <input name=\"\" type=\"text\"  class=\"no-boarder \" placeholder=\"Recherche dans TFT\" style=\"width:250px;\">
          </li>
        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU -->
      <!-- BEGIN CHAT TOGGLER -->
      <div class=\"pull-right\">
        <div class=\"chat-toggler\"> <a href=\"#\" class=\"dropdown-toggle\" id=\"my-task-list\" data-placement=\"bottom\"  data-content='' data-toggle=\"dropdown\" data-original-title=\"Notifications\">
          <div class=\"user-details\">
            <div class=\"username\"> <span class=\"badge badge-important\">3</span> My <span class=\"bold\">Wishy</span> </div>
          </div>
          <div class=\"iconset top-down-arrow\"></div>
          </a>
          <div id=\"notification-list\" style=\"display:none\">
            <div style=\"width:300px\">
              <div class=\"notification-messages info\">
                <div class=\"user-profile\"> <img src=\"assets/img/profiles/d.jpg\"  alt=\"\" data-src=\"assets/img/profiles/d.jpg\" data-src-retina=\"assets/img/profiles/d2x.jpg\" width=\"35\" height=\"35\"> </div>
                <div class=\"message-wrapper\">
                  <div class=\"heading\"> David Nester - Commented on your wall </div>
                  <div class=\"description\"> Meeting postponed to tomorrow </div>
                  <div class=\"date pull-left\"> A min ago </div>
                </div>
                <div class=\"clearfix\"></div>
              </div>
              <div class=\"notification-messages danger\">
                <div class=\"iconholder\"> <i class=\"icon-warning-sign\"></i> </div>
                <div class=\"message-wrapper\">
                  <div class=\"heading\"> Server load limited </div>
                  <div class=\"description\"> Database server has reached its daily capicity </div>
                  <div class=\"date pull-left\"> 2 mins ago </div>
                </div>
                <div class=\"clearfix\"></div>
              </div>
              <div class=\"notification-messages success\">
                <div class=\"user-profile\"> <img src=\"assets/img/profiles/h.jpg\"  alt=\"\" data-src=\"assets/img/profiles/h.jpg\" data-src-retina=\"assets/img/profiles/h2x.jpg\" width=\"35\" height=\"35\"> </div>
                <div class=\"message-wrapper\">
                  <div class=\"heading\"> You haveve got 150 messages </div>
                  <div class=\"description\"> 150 newly unread messages in your inbox </div>
                  <div class=\"date pull-left\"> An hour ago </div>
                </div>
                <div class=\"clearfix\"></div>
              </div>
            </div>
          </div>
          <div class=\"profile-pic\"> <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/profiles/avatar_small.jpg"), "html", null, true);
        echo "\"  alt=\"\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/profiles/avatar_small.jpg"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/img/profiles/avatar_small2x.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\" /> </div>
        </div>
        <ul class=\"nav quick-section \">
          <li class=\"quicklinks\"> <a data-toggle=\"dropdown\" class=\"dropdown-toggle  pull-right \" href=\"#\" id=\"user-options\">
            <div class=\"iconset top-settings-dark \"></div>
            </a>
            <ul class=\"dropdown-menu  pull-right\" role=\"menu\" aria-labelledby=\"user-options\">
              <li><a href=\"user-profile.html\"> My Account</a> </li>
              <li><a href=\"calender.html\">My Calendar</a> </li>
              <li><a href=\"email.html\"> My Inbox&nbsp;&nbsp;<span class=\"badge badge-important animated bounceIn\">2</span></a> </li>
              <li class=\"divider\"></li>
              <li><a href=\"login.html\"><i class=\"fa fa-power-off\"></i>&nbsp;&nbsp;Log Out</a></li>
            </ul>
          </li>
          <li class=\"quicklinks\"> <span class=\"h-seperate\"></span></li>
          <li class=\"quicklinks\"> <a id=\"chat-menu-toggle\" href=\"#sidr\" class=\"chat-menu-toggle\" >
            <div class=\"iconset top-chat-dark \"><span class=\"badge badge-important hide\" id=\"chat-message-count\">1</span></div>
            </a>
            <div class=\"simple-chat-popup chat-menu-toggle hide\" >
              <div class=\"simple-chat-popup-arrow\"></div>
              <div class=\"simple-chat-popup-inner\">
                <div style=\"width:100px\">
                  <div class=\"semi-bold\">David Nester</div>
                  <div class=\"message\">Hey you there </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- END CHAT TOGGLER -->
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class=\"page-container row\">
  <!-- BEGIN SIDEBAR -->
  <div class=\"page-sidebar\" id=\"main-menu\">
    <!-- BEGIN MINI-PROFILE -->
    <div class=\"page-sidebar-wrapper scrollbar-dynamic\" id=\"main-menu-wrapper\">
      <div class=\"user-info-wrapper\">
        <div class=\"profile-wrapper\"> 
            ";
        // line 194
        $this->displayBlock('userImage', $context, $blocks);
        // line 196
        echo "        </div>
        <div class=\"user-info\">
            
            <!-- Les info de la session -->
            ";
        // line 200
        $this->displayBlock('userInfo', $context, $blocks);
        // line 203
        echo "                
        </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
     
      
      <p class=\"menu-title\">MENU TFT<span class=\"pull-right\"><a href=\"javascript:;\"><i class=\"fa fa-refresh\"></i></a></span></p>
      <ul>
          
          
          
          ";
        // line 215
        $this->displayBlock('menu', $context, $blocks);
        // line 218
        echo "       
           
      </ul>
   
      <div class=\"clearfix\"></div>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
  <a href=\"#\" class=\"scrollup\">Scroll</a>
  <div class=\"footer-widget\">
    <div class=\"progress transparent progress-small no-radius no-margin\">
      <div class=\"progress-bar progress-bar-success animate-progress-bar\" data-percentage=\"79%\" style=\"width: 79%;\"></div>
    </div>
    <div class=\"pull-right\">
      <div class=\"details-status\"> <span class=\"animate-number\" data-value=\"86\" data-animation-duration=\"560\">86</span>% </div>
      <a href=\"lockscreen.html\"><i class=\"fa fa-power-off\"></i></a></div>
  </div>
  <!-- END SIDEBAR -->
  <!-- BEGIN PAGE CONTAINER-->
  <div class=\"page-content\">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id=\"portlet-config\" class=\"modal hide\">
      <div class=\"modal-header\">
        <button data-dismiss=\"modal\" class=\"close\" type=\"button\"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class=\"modal-body\"> Widget settings form goes here </div>
    </div>
    <div class=\"clearfix\"></div>
    
    
    <div class=\"content\">
        
        ";
        // line 251
        $this->displayBlock('content', $context, $blocks);
        // line 254
        echo "            
    </div>
    
    
  </div>
<!-- BEGIN CHAT --> 
<div class=\"chat-window-wrapper\">
\t<div id=\"main-chat-wrapper\" class=\"inner-content\">
        <div class=\"chat-window-wrapper scroller scrollbar-dynamic\" id=\"chat-users\" >
            <div class=\"chat-header\">\t
            <div class=\"pull-left\">
                <input type=\"text\" placeholder=\"search\">
            </div>\t\t
                <div class=\"pull-right\">
                    <a href=\"#\" class=\"\" ><div class=\"iconset top-settings-dark \"></div> </a>
                </div>\t\t\t
            </div>\t
            <div class=\"side-widget\">
               <div class=\"side-widget-title\">group chats</div>
                <div class=\"side-widget-content\">
                 <div id=\"groups-list\">
                    <ul class=\"groups\" >
                        <li><a href=\"#\"><div class=\"status-icon green\"></div>Office work</a></li>
                        <li><a href=\"#\"><div class=\"status-icon green\"></div>Personal vibes</a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class=\"side-widget fadeIn\">
               <div class=\"side-widget-title\">favourites</div>
               <div id=\"favourites-list\">
                <div class=\"side-widget-content\" >
                    <div class=\"user-details-wrapper active\" data-chat-status=\"online\" data-chat-user-pic=\"assets/img/profiles/d.jpg\" data-chat-user-pic-retina=\"assets/img/profiles/d2x.jpg\" data-user-name=\"Jane Smith\">
                        <div class=\"user-profile\">
                            <img src=\"assets/img/profiles/d.jpg\"  alt=\"\" data-src=\"assets/img/profiles/d.jpg\" data-src-retina=\"assets/img/profiles/d2x.jpg\" width=\"35\" height=\"35\">
                        </div>
                        <div class=\"user-details\">
                            <div class=\"user-name\">
                            Jane Smith
                            </div>
                            <div class=\"user-more\">
                            Hello you there?
                            </div>
                        </div>
                        <div class=\"user-details-status-wrapper\">
                            <span class=\"badge badge-important\">3</span>
                        </div>
                        <div class=\"user-details-count-wrapper\">
                            <div class=\"status-icon green\"></div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>\t
                    <div class=\"user-details-wrapper\" data-chat-status=\"busy\" data-chat-user-pic=\"assets/img/profiles/d.jpg\" data-chat-user-pic-retina=\"assets/img/profiles/d2x.jpg\" data-user-name=\"David Nester\">
                        <div class=\"user-profile\">
                            <img src=\"assets/img/profiles/c.jpg\"  alt=\"\" data-src=\"assets/img/profiles/c.jpg\" data-src-retina=\"assets/img/profiles/c2x.jpg\" width=\"35\" height=\"35\">
                        </div>
                        <div class=\"user-details\">
                            <div class=\"user-name\">
                            David Nester
                            </div>
                            <div class=\"user-more\">
                            Busy, Do not disturb
                            </div>
                        </div>
                        <div class=\"user-details-status-wrapper\">
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"user-details-count-wrapper\">
                            <div class=\"status-icon red\"></div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>\t\t\t\t\t
                </div>
                </div>
            </div>
            <div class=\"side-widget\">
               <div class=\"side-widget-title\">more friends</div>
                 <div class=\"side-widget-content\" id=\"friends-list\">
                    <div class=\"user-details-wrapper\" data-chat-status=\"online\" data-chat-user-pic=\"assets/img/profiles/d.jpg\" data-chat-user-pic-retina=\"assets/img/profiles/d2x.jpg\" data-user-name=\"Jane Smith\">
                        <div class=\"user-profile\">
                            <img src=\"assets/img/profiles/d.jpg\"  alt=\"\" data-src=\"assets/img/profiles/d.jpg\" data-src-retina=\"assets/img/profiles/d2x.jpg\" width=\"35\" height=\"35\">
                        </div>
                        <div class=\"user-details\">
                            <div class=\"user-name\">
                            Jane Smith
                            </div>
                            <div class=\"user-more\">
                            Hello you there?
                            </div>
                        </div>
                        <div class=\"user-details-status-wrapper\">

                        </div>
                        <div class=\"user-details-count-wrapper\">
                            <div class=\"status-icon green\"></div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>\t
                    <div class=\"user-details-wrapper\" data-chat-status=\"busy\" data-chat-user-pic=\"assets/img/profiles/d.jpg\" data-chat-user-pic-retina=\"assets/img/profiles/d2x.jpg\" data-user-name=\"David Nester\">
                        <div class=\"user-profile\">
                            <img src=\"assets/img/profiles/h.jpg\"  alt=\"\" data-src=\"assets/img/profiles/h.jpg\" data-src-retina=\"assets/img/profiles/h2x.jpg\" width=\"35\" height=\"35\">
                        </div>
                        <div class=\"user-details\">
                            <div class=\"user-name\">
                            David Nester
                            </div>
                            <div class=\"user-more\">
                            Busy, Do not disturb
                            </div>
                        </div>
                        <div class=\"user-details-status-wrapper\">
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"user-details-count-wrapper\">
                            <div class=\"status-icon red\"></div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>\t\t
                    <div class=\"user-details-wrapper\" data-chat-status=\"online\" data-chat-user-pic=\"assets/img/profiles/d.jpg\" data-chat-user-pic-retina=\"assets/img/profiles/d2x.jpg\" data-user-name=\"Jane Smith\">
                        <div class=\"user-profile\">
                            <img src=\"assets/img/profiles/c.jpg\"  alt=\"\" data-src=\"assets/img/profiles/c.jpg\" data-src-retina=\"assets/img/profiles/c2x.jpg\" width=\"35\" height=\"35\">
                        </div>
                        <div class=\"user-details\">
                            <div class=\"user-name\">
                            Jane Smith
                            </div>
                            <div class=\"user-more\">
                            Hello you there?
                            </div>
                        </div>
                        <div class=\"user-details-status-wrapper\">

                        </div>
                        <div class=\"user-details-count-wrapper\">
                            <div class=\"status-icon green\"></div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>\t
                    <div class=\"user-details-wrapper\" data-chat-status=\"busy\" data-chat-user-pic=\"assets/img/profiles/d.jpg\" data-chat-user-pic-retina=\"assets/img/profiles/d2x.jpg\" data-user-name=\"David Nester\">
                        <div class=\"user-profile\">
                            <img src=\"assets/img/profiles/h.jpg\"  alt=\"\" data-src=\"assets/img/profiles/h.jpg\" data-src-retina=\"assets/img/profiles/h2x.jpg\" width=\"35\" height=\"35\">
                        </div>
                        <div class=\"user-details\">
                            <div class=\"user-name\">
                            David Nester
                            </div>
                            <div class=\"user-more\">
                            Busy, Do not disturb
                            </div>
                        </div>
                        <div class=\"user-details-status-wrapper\">
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"user-details-count-wrapper\">
                            <div class=\"status-icon red\"></div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>\t\t\t\t
                </div>\t\t
            </div>
        </div>

        <div class=\"chat-window-wrapper\" id=\"messages-wrapper\" style=\"display:none\">
        <div class=\"chat-header\">\t
            <div class=\"pull-left\">
                <input type=\"text\" placeholder=\"search\">
            </div>\t\t
                <div class=\"pull-right\">
                    <a href=\"#\" class=\"\" ><div class=\"iconset top-settings-dark \"></div> </a>
                </div>\t\t\t\t\t
            </div>
        <div class=\"clearfix\"></div>\t
        <div class=\"chat-messages-header\">
        <div class=\"status online\"></div><span class=\"semi-bold\">Jane Smith(Typing..)</span>
        <a href=\"#\" class=\"chat-back\"><i class=\"icon-custom-cross\"></i></a>
        </div>
        <div class=\"chat-messages scrollbar-dynamic clearfix\">
            <div class=\"inner-scroll-content clearfix\">
            <div class=\"sent_time\">Yesterday 11:25pm</div>
            <div class=\"user-details-wrapper \" >
                <div class=\"user-profile\">
                    <img src=\"assets/img/profiles/d.jpg\"  alt=\"\" data-src=\"assets/img/profiles/d.jpg\" data-src-retina=\"assets/img/profiles/d2x.jpg\" width=\"35\" height=\"35\">
                </div>
                <div class=\"user-details\">
                  <div class=\"bubble\">\t
                        Hello, You there?
                   </div>
                </div>\t\t\t\t\t
                <div class=\"clearfix\"></div>
               <div class=\"sent_time off\">Yesterday 11:25pm</div>
            </div>\t\t
            <div class=\"user-details-wrapper \">
                <div class=\"user-profile\">
                    <img src=\"assets/img/profiles/d.jpg\"  alt=\"\" data-src=\"assets/img/profiles/d.jpg\" data-src-retina=\"assets/img/profiles/d2x.jpg\" width=\"35\" height=\"35\">
                </div>
                <div class=\"user-details\">
                  <div class=\"bubble\">\t
                        How was the meeting?
                   </div>
                </div>\t\t\t\t\t
                <div class=\"clearfix\"></div>
                <div class=\"sent_time off\">Yesterday 11:25pm</div>
            </div>
            <div class=\"user-details-wrapper \">
                <div class=\"user-profile\">
                    <img src=\"assets/img/profiles/d.jpg\"  alt=\"\" data-src=\"assets/img/profiles/d.jpg\" data-src-retina=\"assets/img/profiles/d2x.jpg\" width=\"35\" height=\"35\">
                </div>
                <div class=\"user-details\">
                  <div class=\"bubble\">\t
                        Let me know when you free
                   </div>
                </div>\t\t\t\t\t
                <div class=\"clearfix\"></div>
                <div class=\"sent_time off\">Yesterday 11:25pm</div>
            </div>
            <div class=\"sent_time \">Today 11:25pm</div>
            <div class=\"user-details-wrapper pull-right\">
                <div class=\"user-details\">
                  <div class=\"bubble sender\">\t
                        Let me know when you free
                   </div>
                </div>\t\t\t\t\t
                <div class=\"clearfix\"></div>
                <div class=\"sent_time off\">Sent On Tue, 2:45pm</div>
            </div>\t\t
        </div>
        </div>
        <div class=\"chat-input-wrapper\" style=\"display:none\">
            <textarea id=\"chat-message-input\" rows=\"1\" placeholder=\"Type your message\"></textarea>
        </div>
        <div class=\"clearfix\"></div>
        </div>
    </div>
</div>
<!-- END CHAT --> 
<!-- END CONTAINER -->
</div>
        
<script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/breakpoints.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-unveil/jquery.unveil.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-block-ui/jqueryblockui.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/bootstrap-select2/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/js/form_validations.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/js/core.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backEnd/assets/js/notifications.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        // line 512
        $this->displayBlock('js', $context, $blocks);
        // line 514
        echo "</body>
</html>
";
    }

    // line 9
    public function block_titre($context, array $blocks = array())
    {
        // line 10
        echo "              
          ";
    }

    // line 194
    public function block_userImage($context, array $blocks = array())
    {
        // line 195
        echo "            ";
    }

    // line 200
    public function block_userInfo($context, array $blocks = array())
    {
        // line 201
        echo "                
                ";
    }

    // line 215
    public function block_menu($context, array $blocks = array())
    {
        // line 216
        echo "        
          ";
    }

    // line 251
    public function block_content($context, array $blocks = array())
    {
        // line 252
        echo "        <!-- Ici on va metre notre travail :P -->    
        ";
    }

    // line 512
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "wyshybackNavBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  712 => 512,  707 => 252,  704 => 251,  699 => 216,  696 => 215,  691 => 201,  688 => 200,  684 => 195,  681 => 194,  676 => 10,  673 => 9,  667 => 514,  665 => 512,  661 => 511,  657 => 510,  653 => 509,  648 => 507,  643 => 505,  639 => 504,  635 => 503,  631 => 502,  627 => 501,  623 => 500,  619 => 499,  615 => 498,  610 => 496,  606 => 495,  602 => 494,  598 => 493,  594 => 492,  354 => 254,  352 => 251,  317 => 218,  315 => 215,  301 => 203,  299 => 200,  293 => 196,  291 => 194,  239 => 149,  163 => 76,  151 => 73,  125 => 50,  121 => 49,  117 => 48,  113 => 47,  106 => 43,  102 => 42,  98 => 41,  94 => 40,  90 => 39,  84 => 36,  79 => 34,  75 => 33,  71 => 32,  67 => 31,  63 => 30,  59 => 29,  50 => 23,  37 => 12,  35 => 9,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     */
/*         */
/* <meta http-equiv="content-type" content="text/html;charset=UTF-8" />*/
/* <meta charset="utf-8" />*/
/* */
/*           {% block titre %}*/
/*               */
/*           {% endblock %}*/
/*  <style>*/
/*       html, body {*/
/*         height: 100%;*/
/*         margin: 0;*/
/*         padding: 0;*/
/*       }*/
/*       #map {*/
/*           width: 50%;*/
/*         height: 50%;*/
/*       }*/
/*     </style>*/
/*     <link rel="shortcut icon" type="image/png" href="{{ asset('backEnd/assets/img/tftfavicon.png') }}"/>                                 */
/*  */
/* <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/* <meta content="" name="description" />*/
/* <meta content="" name="author" />*/
/* <!-- BEGIN PLUGIN CSS -->*/
/* <link href="{{ asset('backEnd/assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen"/>*/
/* <link href="{{ asset('backEnd/assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{ asset('backEnd/assets/plugins/bootstrap-datepicker/css/datepicker.css') }}" rel="stylesheet" type="text/css" />*/
/* <link rel="stylesheet" href="{{ asset('backEnd/assets/plugins/jquery-ricksaw-chart/css/rickshaw.css') }}" type="text/css" media="screen" >*/
/* <link rel="stylesheet" href="{{ asset('backEnd/assets/plugins/jquery-morris-chart/css/morris.css') }}" type="text/css" media="screen">*/
/* <link href="{{ asset('backEnd/assets/plugins/bootstrap-select2/select2.css') }}" rel="stylesheet" type="text/css" media="screen"/>*/
/* */
/* <link href="{{ asset('backEnd/assets/plugins/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" media="screen"/>*/
/* <!-- END PLUGIN CSS -->*/
/* <!-- BEGIN CORE CSS FRAMEWsORK -->*/
/* <link href="{{ asset('backEnd/assets/plugins/boostrapv3/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{ asset('backEnd/assets/plugins/boostrapv3/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{ asset('backEnd/assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{ asset('backEnd/assets/css/animate.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{ asset('backEnd/assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css"/>*/
/* <!-- END CORE CSS FRAMEWORK -->*/
/* */
/* <!-- BEGIN CSS TEMPLATE -->*/
/* <link href="{{ asset('backEnd/assets/css/style.css') }}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{ asset('backEnd/assets/css/responsive.css') }}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{ asset('backEnd/assets/css/custom-icon-set.css') }}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{ asset('backEnd/assets/css/custom-icon-set.css') }}" rel="stylesheet" type="text/css"/>*/
/* */
/* */
/* */
/*  */
/* */
/* */
/* <!-- END CSS TEMPLATE -->*/
/* </head>*/
/* <!-- END HEAD -->*/
/* <!-- BEGIN BODY -->*/
/* <body class="">*/
/* <!-- BEGIN HEADER -->*/
/* <div class="header navbar navbar-inverse ">*/
/*   <!-- BEGIN TOP NAVIGATION BAR -->*/
/*   <div class="navbar-inner">*/
/*     <div class="header-seperation">*/
/*       <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">*/
/*         <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" >*/
/*           <div class="iconset top-menu-toggle-white"></div>*/
/*           </a> </li>*/
/*       </ul>*/
/*       <!-- BEGIN LOGO -->*/
/*       <a href="{{path('wyshyback_nav_1')}}"><img src="{{ asset('backEnd/assets/img/logo.png') }}" class="logo" alt=""  data-src="{{ asset('backEnd/assets/img/logo.png') }}" data-src-retina="{{ asset('backEnd/assets/img/logo2x.png') }}" width="106" height="21"/></a>*/
/*       <!-- END LOGO -->*/
/*       <ul class="nav pull-right notifcation-center">*/
/*         <li class="dropdown" id="header_task_bar"> <a href="{{path('wyshyback_nav_1')}}" class="dropdown-toggle active" data-toggle="">*/
/*           <div class="iconset top-home"></div>*/
/*           </a> </li>*/
/*         <li class="dropdown" id="header_inbox_bar" > <a href="email.html" class="dropdown-toggle" >*/
/*           <div class="iconset top-messages"></div>*/
/*           <span class="badge" id="msgs-badge">2</span> </a></li>*/
/*         <li class="dropdown" id="portrait-chat-toggler" style="display:none"> <a href="#sidr" class="chat-menu-toggle">*/
/*           <div class="iconset top-chat-white "></div>*/
/*           </a> </li>*/
/*       </ul>*/
/*     </div>*/
/*     <!-- END RESPONSIVE MENU TOGGLER -->*/
/*     <div class="header-quick-nav" >*/
/*       <!-- BEGIN TOP NAVIGATION MENU -->*/
/*       <div class="pull-left">*/
/*         <ul class="nav quick-section">*/
/*           <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >*/
/*             <div class="iconset top-menu-toggle-dark"></div>*/
/*             </a> </li>*/
/*         </ul>*/
/*         <ul class="nav quick-section">*/
/*           <li class="quicklinks"> <a href="#" class="" >*/
/*             <div class="iconset top-reload"></div>*/
/*             </a> </li>*/
/*           <li class="quicklinks"> <span class="h-seperate"></span></li>*/
/*           <li class="quicklinks"> <a href="#" class="" >*/
/*             <div class="iconset top-tiles"></div>*/
/*             </a> </li>*/
/*           <li class="m-r-10 input-prepend inside search-form no-boarder"> <span class="add-on"> <span class="iconset top-search"></span></span>*/
/*             <input name="" type="text"  class="no-boarder " placeholder="Recherche dans TFT" style="width:250px;">*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*       <!-- END TOP NAVIGATION MENU -->*/
/*       <!-- BEGIN CHAT TOGGLER -->*/
/*       <div class="pull-right">*/
/*         <div class="chat-toggler"> <a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="Notifications">*/
/*           <div class="user-details">*/
/*             <div class="username"> <span class="badge badge-important">3</span> My <span class="bold">Wishy</span> </div>*/
/*           </div>*/
/*           <div class="iconset top-down-arrow"></div>*/
/*           </a>*/
/*           <div id="notification-list" style="display:none">*/
/*             <div style="width:300px">*/
/*               <div class="notification-messages info">*/
/*                 <div class="user-profile"> <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35"> </div>*/
/*                 <div class="message-wrapper">*/
/*                   <div class="heading"> David Nester - Commented on your wall </div>*/
/*                   <div class="description"> Meeting postponed to tomorrow </div>*/
/*                   <div class="date pull-left"> A min ago </div>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*               </div>*/
/*               <div class="notification-messages danger">*/
/*                 <div class="iconholder"> <i class="icon-warning-sign"></i> </div>*/
/*                 <div class="message-wrapper">*/
/*                   <div class="heading"> Server load limited </div>*/
/*                   <div class="description"> Database server has reached its daily capicity </div>*/
/*                   <div class="date pull-left"> 2 mins ago </div>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*               </div>*/
/*               <div class="notification-messages success">*/
/*                 <div class="user-profile"> <img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35"> </div>*/
/*                 <div class="message-wrapper">*/
/*                   <div class="heading"> You haveve got 150 messages </div>*/
/*                   <div class="description"> 150 newly unread messages in your inbox </div>*/
/*                   <div class="date pull-left"> An hour ago </div>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="profile-pic"> <img src="{{ asset('backEnd/assets/img/profiles/avatar_small.jpg') }}"  alt="" data-src="{{ asset('backEnd/assets/img/profiles/avatar_small.jpg') }}" data-src-retina="{{ asset('backEnd/assets/img/profiles/avatar_small2x.jpg') }}" width="35" height="35" /> </div>*/
/*         </div>*/
/*         <ul class="nav quick-section ">*/
/*           <li class="quicklinks"> <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">*/
/*             <div class="iconset top-settings-dark "></div>*/
/*             </a>*/
/*             <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">*/
/*               <li><a href="user-profile.html"> My Account</a> </li>*/
/*               <li><a href="calender.html">My Calendar</a> </li>*/
/*               <li><a href="email.html"> My Inbox&nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a> </li>*/
/*               <li class="divider"></li>*/
/*               <li><a href="login.html"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>*/
/*             </ul>*/
/*           </li>*/
/*           <li class="quicklinks"> <span class="h-seperate"></span></li>*/
/*           <li class="quicklinks"> <a id="chat-menu-toggle" href="#sidr" class="chat-menu-toggle" >*/
/*             <div class="iconset top-chat-dark "><span class="badge badge-important hide" id="chat-message-count">1</span></div>*/
/*             </a>*/
/*             <div class="simple-chat-popup chat-menu-toggle hide" >*/
/*               <div class="simple-chat-popup-arrow"></div>*/
/*               <div class="simple-chat-popup-inner">*/
/*                 <div style="width:100px">*/
/*                   <div class="semi-bold">David Nester</div>*/
/*                   <div class="message">Hey you there </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*       <!-- END CHAT TOGGLER -->*/
/*     </div>*/
/*     <!-- END TOP NAVIGATION MENU -->*/
/*   </div>*/
/*   <!-- END TOP NAVIGATION BAR -->*/
/* </div>*/
/* <!-- END HEADER -->*/
/* <!-- BEGIN CONTAINER -->*/
/* <div class="page-container row">*/
/*   <!-- BEGIN SIDEBAR -->*/
/*   <div class="page-sidebar" id="main-menu">*/
/*     <!-- BEGIN MINI-PROFILE -->*/
/*     <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">*/
/*       <div class="user-info-wrapper">*/
/*         <div class="profile-wrapper"> */
/*             {% block userImage %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="user-info">*/
/*             */
/*             <!-- Les info de la session -->*/
/*             {% block userInfo %}*/
/*                 */
/*                 {% endblock %}*/
/*                 */
/*         </div>*/
/*       </div>*/
/*       <!-- END MINI-PROFILE -->*/
/*       <!-- BEGIN SIDEBAR MENU -->*/
/*      */
/*       */
/*       <p class="menu-title">MENU TFT<span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>*/
/*       <ul>*/
/*           */
/*           */
/*           */
/*           {% block menu %}*/
/*         */
/*           {% endblock %}*/
/*        */
/*            */
/*       </ul>*/
/*    */
/*       <div class="clearfix"></div>*/
/*       <!-- END SIDEBAR MENU -->*/
/*     </div>*/
/*   </div>*/
/*   <a href="#" class="scrollup">Scroll</a>*/
/*   <div class="footer-widget">*/
/*     <div class="progress transparent progress-small no-radius no-margin">*/
/*       <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%" style="width: 79%;"></div>*/
/*     </div>*/
/*     <div class="pull-right">*/
/*       <div class="details-status"> <span class="animate-number" data-value="86" data-animation-duration="560">86</span>% </div>*/
/*       <a href="lockscreen.html"><i class="fa fa-power-off"></i></a></div>*/
/*   </div>*/
/*   <!-- END SIDEBAR -->*/
/*   <!-- BEGIN PAGE CONTAINER-->*/
/*   <div class="page-content">*/
/*     <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->*/
/*     <div id="portlet-config" class="modal hide">*/
/*       <div class="modal-header">*/
/*         <button data-dismiss="modal" class="close" type="button"></button>*/
/*         <h3>Widget Settings</h3>*/
/*       </div>*/
/*       <div class="modal-body"> Widget settings form goes here </div>*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/*     */
/*     */
/*     <div class="content">*/
/*         */
/*         {% block content %}*/
/*         <!-- Ici on va metre notre travail :P -->    */
/*         {% endblock %}*/
/*             */
/*     </div>*/
/*     */
/*     */
/*   </div>*/
/* <!-- BEGIN CHAT --> */
/* <div class="chat-window-wrapper">*/
/* 	<div id="main-chat-wrapper" class="inner-content">*/
/*         <div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users" >*/
/*             <div class="chat-header">	*/
/*             <div class="pull-left">*/
/*                 <input type="text" placeholder="search">*/
/*             </div>		*/
/*                 <div class="pull-right">*/
/*                     <a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>*/
/*                 </div>			*/
/*             </div>	*/
/*             <div class="side-widget">*/
/*                <div class="side-widget-title">group chats</div>*/
/*                 <div class="side-widget-content">*/
/*                  <div id="groups-list">*/
/*                     <ul class="groups" >*/
/*                         <li><a href="#"><div class="status-icon green"></div>Office work</a></li>*/
/*                         <li><a href="#"><div class="status-icon green"></div>Personal vibes</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="side-widget fadeIn">*/
/*                <div class="side-widget-title">favourites</div>*/
/*                <div id="favourites-list">*/
/*                 <div class="side-widget-content" >*/
/*                     <div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">*/
/*                         <div class="user-profile">*/
/*                             <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">*/
/*                         </div>*/
/*                         <div class="user-details">*/
/*                             <div class="user-name">*/
/*                             Jane Smith*/
/*                             </div>*/
/*                             <div class="user-more">*/
/*                             Hello you there?*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="user-details-status-wrapper">*/
/*                             <span class="badge badge-important">3</span>*/
/*                         </div>*/
/*                         <div class="user-details-count-wrapper">*/
/*                             <div class="status-icon green"></div>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>	*/
/*                     <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">*/
/*                         <div class="user-profile">*/
/*                             <img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">*/
/*                         </div>*/
/*                         <div class="user-details">*/
/*                             <div class="user-name">*/
/*                             David Nester*/
/*                             </div>*/
/*                             <div class="user-more">*/
/*                             Busy, Do not disturb*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="user-details-status-wrapper">*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                         <div class="user-details-count-wrapper">*/
/*                             <div class="status-icon red"></div>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>					*/
/*                 </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="side-widget">*/
/*                <div class="side-widget-title">more friends</div>*/
/*                  <div class="side-widget-content" id="friends-list">*/
/*                     <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">*/
/*                         <div class="user-profile">*/
/*                             <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">*/
/*                         </div>*/
/*                         <div class="user-details">*/
/*                             <div class="user-name">*/
/*                             Jane Smith*/
/*                             </div>*/
/*                             <div class="user-more">*/
/*                             Hello you there?*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="user-details-status-wrapper">*/
/* */
/*                         </div>*/
/*                         <div class="user-details-count-wrapper">*/
/*                             <div class="status-icon green"></div>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>	*/
/*                     <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">*/
/*                         <div class="user-profile">*/
/*                             <img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">*/
/*                         </div>*/
/*                         <div class="user-details">*/
/*                             <div class="user-name">*/
/*                             David Nester*/
/*                             </div>*/
/*                             <div class="user-more">*/
/*                             Busy, Do not disturb*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="user-details-status-wrapper">*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                         <div class="user-details-count-wrapper">*/
/*                             <div class="status-icon red"></div>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>		*/
/*                     <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">*/
/*                         <div class="user-profile">*/
/*                             <img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">*/
/*                         </div>*/
/*                         <div class="user-details">*/
/*                             <div class="user-name">*/
/*                             Jane Smith*/
/*                             </div>*/
/*                             <div class="user-more">*/
/*                             Hello you there?*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="user-details-status-wrapper">*/
/* */
/*                         </div>*/
/*                         <div class="user-details-count-wrapper">*/
/*                             <div class="status-icon green"></div>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>	*/
/*                     <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">*/
/*                         <div class="user-profile">*/
/*                             <img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">*/
/*                         </div>*/
/*                         <div class="user-details">*/
/*                             <div class="user-name">*/
/*                             David Nester*/
/*                             </div>*/
/*                             <div class="user-more">*/
/*                             Busy, Do not disturb*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="user-details-status-wrapper">*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                         <div class="user-details-count-wrapper">*/
/*                             <div class="status-icon red"></div>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>				*/
/*                 </div>		*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="chat-window-wrapper" id="messages-wrapper" style="display:none">*/
/*         <div class="chat-header">	*/
/*             <div class="pull-left">*/
/*                 <input type="text" placeholder="search">*/
/*             </div>		*/
/*                 <div class="pull-right">*/
/*                     <a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>*/
/*                 </div>					*/
/*             </div>*/
/*         <div class="clearfix"></div>	*/
/*         <div class="chat-messages-header">*/
/*         <div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>*/
/*         <a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>*/
/*         </div>*/
/*         <div class="chat-messages scrollbar-dynamic clearfix">*/
/*             <div class="inner-scroll-content clearfix">*/
/*             <div class="sent_time">Yesterday 11:25pm</div>*/
/*             <div class="user-details-wrapper " >*/
/*                 <div class="user-profile">*/
/*                     <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">*/
/*                 </div>*/
/*                 <div class="user-details">*/
/*                   <div class="bubble">	*/
/*                         Hello, You there?*/
/*                    </div>*/
/*                 </div>					*/
/*                 <div class="clearfix"></div>*/
/*                <div class="sent_time off">Yesterday 11:25pm</div>*/
/*             </div>		*/
/*             <div class="user-details-wrapper ">*/
/*                 <div class="user-profile">*/
/*                     <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">*/
/*                 </div>*/
/*                 <div class="user-details">*/
/*                   <div class="bubble">	*/
/*                         How was the meeting?*/
/*                    </div>*/
/*                 </div>					*/
/*                 <div class="clearfix"></div>*/
/*                 <div class="sent_time off">Yesterday 11:25pm</div>*/
/*             </div>*/
/*             <div class="user-details-wrapper ">*/
/*                 <div class="user-profile">*/
/*                     <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">*/
/*                 </div>*/
/*                 <div class="user-details">*/
/*                   <div class="bubble">	*/
/*                         Let me know when you free*/
/*                    </div>*/
/*                 </div>					*/
/*                 <div class="clearfix"></div>*/
/*                 <div class="sent_time off">Yesterday 11:25pm</div>*/
/*             </div>*/
/*             <div class="sent_time ">Today 11:25pm</div>*/
/*             <div class="user-details-wrapper pull-right">*/
/*                 <div class="user-details">*/
/*                   <div class="bubble sender">	*/
/*                         Let me know when you free*/
/*                    </div>*/
/*                 </div>					*/
/*                 <div class="clearfix"></div>*/
/*                 <div class="sent_time off">Sent On Tue, 2:45pm</div>*/
/*             </div>		*/
/*         </div>*/
/*         </div>*/
/*         <div class="chat-input-wrapper" style="display:none">*/
/*             <textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- END CHAT --> */
/* <!-- END CONTAINER -->*/
/* </div>*/
/*         */
/* <script src="{{ asset('backEnd/assets/plugins/jquery-1.8.3.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('backEnd/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('backEnd/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('backEnd/assets/plugins/breakpoints.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('backEnd/assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>*/
/* */
/* <script src="{{ asset('backEnd/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('backEnd/assets/plugins/jquery-block-ui/jqueryblockui.js') }}" type="text/javascript"></script> */
/* <script src="{{ asset('backEnd/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('backEnd/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('backEnd/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('backEnd/assets/plugins/bootstrap-select2/select2.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('backEnd/assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('backEnd/assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>*/
/* <!-- END PAGE LEVEL PLUGINS -->*/
/* <script src="{{ asset('backEnd/assets/js/form_validations.js') }}" type="text/javascript"></script>*/
/* <!-- BEGIN CORE TEMPLATE JS -->*/
/* <script src="{{ asset('backEnd/assets/js/core.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('backEnd/assets/js/demo.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('backEnd/assets/js/notifications.js') }}" type="text/javascript"></script>*/
/* {% block js %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
