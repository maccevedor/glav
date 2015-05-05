<?php

/* frontend.html.twig */
class __TwigTemplate_4ce389b35b99f31376cc6c0620df5a32bcf96dc2f4378214296c8547fa54a984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'infoUserTop' => array($this, 'block_infoUserTop'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

\t<!-- start: Meta -->
\t<meta charset=\"utf-8\">
\t<title>Glav 2.0</title>
\t<meta name=\"description\" content=\"Bootstrap Metro Dashboard\">
\t<meta name=\"author\" content=\"Dennis Ji\">
\t<meta name=\"keyword\" content=\"Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
\t<!-- end: Meta -->
\t
\t<!-- start: Mobile Specific -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- end: Mobile Specific -->
\t
\t<!-- start: CSS -->
\t<link id=\"bootstrap-style\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/css/bootstrap.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\">
\t<link  href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link id=\"base-style\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link id=\"base-style-responsive\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
\t<!-- end: CSS -->

\t<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
\t<!--[if lt IE 9]>
\t  \t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<link id=\"ie-style\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/css/ie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<![endif]-->
\t
\t<!--[if IE 9]>
\t\t<link id=\"ie9style\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/css/ie9.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<![endif]-->
\t\t
\t<!-- start: Favicon -->
\t<link rel=\"shortcut icon\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/img/favicon.ico"), "html", null, true);
        echo "\">
\t<!-- end: Favicon -->
\t\t
\t\t
\t\t
</head>

<body>
\t\t<!-- start: Header -->
\t<div class=\"navbar\">
\t\t<div class=\"navbar-inner\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</a>
\t\t\t\t<a class=\"brand\" href=\"index.html\"><span>Glav 2.0</span></a>
\t\t\t\t\t\t\t\t
\t\t\t\t<!-- start: Header Menu -->
\t\t\t\t<div class=\"nav-no-collapse header-nav\">
\t\t\t\t\t<ul class=\"nav pull-right\">
\t\t\t\t\t\t<li class=\"dropdown hidden-phone\">
\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"icon-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge red\">
\t\t\t\t\t\t\t\t7 </span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu notifications\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-title\">
 \t\t\t\t\t\t\t\t\t<span>You have 11 notifications</span>
\t\t\t\t\t\t\t\t\t<a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
\t\t\t\t\t\t\t\t</li>\t
                            \t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon blue\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New user registration</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">1 min</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New comment</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">7 min</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New comment</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">8 min</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New comment</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">16 min</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon blue\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New user registration</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">36 min</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon yellow\"><i class=\"icon-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">2 items sold</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">1 hour</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li class=\"warning\">
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon red\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">User deleted account</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">2 hour</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li class=\"warning\">
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon red\"><i class=\"icon-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New comment</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">6 hour</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New comment</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">yesterday</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon blue\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New user registration</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">yesterday</span> 
                                    </a>
                                </li>
                                <li class=\"dropdown-menu-sub-footer\">
                            \t\t<a>View all notifications</a>
\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- start: Notifications Dropdown -->
\t\t\t\t\t\t<li class=\"dropdown hidden-phone\">
\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"icon-calendar\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge red\">
\t\t\t\t\t\t\t\t5 </span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu tasks\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-title\">
 \t\t\t\t\t\t\t\t\t<span>You have 17 tasks in progress</span>
\t\t\t\t\t\t\t\t\t<a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">iOS Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <div class=\"taskProgress progressSlim red\">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Android Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <div class=\"taskProgress progressSlim green\">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">ARM Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <div class=\"taskProgress progressSlim yellow\">32</div> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">ARM Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <div class=\"taskProgress progressSlim greenLight\">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">ARM Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <div class=\"taskProgress progressSlim orange\">80</div> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                            \t\t<a class=\"dropdown-menu-sub-footer\">View all tasks</a>
\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- end: Notifications Dropdown -->
\t\t\t\t\t\t<!-- start: Message Dropdown -->
\t\t\t\t\t\t<li class=\"dropdown hidden-phone\">
\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"icon-envelope\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge red\">
\t\t\t\t\t\t\t\t4 </span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu messages\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-title\">
 \t\t\t\t\t\t\t\t\t<span>You have 9 messages</span>
\t\t\t\t\t\t\t\t\t<a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
\t\t\t\t\t\t\t\t</li>\t
                            \t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"img/avatar.jpg\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tDennis Ji
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \t6 min
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"img/avatar.jpg\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tDennis Ji
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \t56 min
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"img/avatar.jpg\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tDennis Ji
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \t3 hours
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"img/avatar.jpg\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tDennis Ji
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \tyesterday
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"img/avatar.jpg\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tDennis Ji
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \tJul 25, 2012
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                            \t\t<a class=\"dropdown-menu-sub-footer\">View all messages</a>
\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- start: User Dropdown -->
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white user\"></i> Dennis Ji
\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-title\">
 \t\t\t\t\t\t\t\t\t<span>Account Settings</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"halflings-icon user\"></i> Profile</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"login.html\"><i class=\"halflings-icon off\"></i> Logout</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- end: User Dropdown -->
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- end: Header Menu -->
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- start: Header -->
\t
\t\t<div class=\"container-fluid-full\">
\t\t<div class=\"row-fluid\">
\t\t\t\t
\t\t\t<!-- start: Main Menu -->
\t\t\t<div id=\"sidebar-left\" class=\"span2\">
\t\t\t\t<div class=\"nav-collapse sidebar-nav\">
                
                \t\t\t  ";
        // line 336
        $this->displayBlock('menu', $context, $blocks);
        // line 365
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end: Main Menu -->
\t\t\t
\t\t\t<noscript>
\t\t\t\t<div class=\"alert alert-block span10\">
\t\t\t\t\t<h4 class=\"alert-heading\">Warning!</h4>
\t\t\t\t\t<p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
\t\t\t\t</div>
\t\t\t</noscript>
\t\t\t
\t\t\t<!-- start: Content -->
\t\t\t<div id=\"content\" class=\"span10\">
\t\t\t
\t\t\t  ";
        // line 379
        $this->displayBlock('infoUserTop', $context, $blocks);
        // line 383
        echo "\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t<li>
\t\t\t\t\t<i class=\"icon-home\"></i>
\t\t\t\t\t<a href=\"index.html\">Home</a> 
\t\t\t\t\t<i class=\"icon-angle-right\"></i>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"#\">Dashboard</a></li>
\t\t\t</ul>

\t\t\t<div class=\"row-fluid\">
\t\t\t\t
\t\t\t\t<div class=\"span3 statbox purple\" onTablet=\"span6\" onDesktop=\"span3\">
\t\t\t\t\t<div class=\"boxchart\">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
\t\t\t\t\t<div class=\"number\">854<i class=\"icon-arrow-up\"></i></div>
\t\t\t\t\t<div class=\"title\">visits</div>
\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t<a href=\"#\"> read full report</a>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"span3 statbox green\" onTablet=\"span6\" onDesktop=\"span3\">
\t\t\t\t\t<div class=\"boxchart\">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
\t\t\t\t\t<div class=\"number\">123<i class=\"icon-arrow-up\"></i></div>
\t\t\t\t\t<div class=\"title\">sales</div>
\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t<a href=\"#\"> read full report</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"span3 statbox blue noMargin\" onTablet=\"span6\" onDesktop=\"span3\">
\t\t\t\t\t<div class=\"boxchart\">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
\t\t\t\t\t<div class=\"number\">982<i class=\"icon-arrow-up\"></i></div>
\t\t\t\t\t<div class=\"title\">orders</div>
\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t<a href=\"#\"> read full report</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"span3 statbox yellow\" onTablet=\"span6\" onDesktop=\"span3\">
\t\t\t\t\t<div class=\"boxchart\">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
\t\t\t\t\t<div class=\"number\">678<i class=\"icon-arrow-down\"></i></div>
\t\t\t\t\t<div class=\"title\">visits</div>
\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t<a href=\"#\"> read full report</a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t
\t\t\t</div>\t\t

\t\t\t<div class=\"row-fluid\">
\t\t\t\t
\t\t\t\t<div class=\"span8 widget blue\" onTablet=\"span7\" onDesktop=\"span8\">
\t\t\t\t\t
\t\t\t\t\t<div id=\"stats-chart2\"  style=\"height:282px\" ></div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"sparkLineStats span4 widget green\" onTablet=\"span5\" onDesktop=\"span4\">

                    <ul class=\"unstyled\">
                        
                        <li><span class=\"sparkLineStats3\"></span> 
                            Pageviews: 
                            <span class=\"number\">781</span>
                        </li>
                        <li><span class=\"sparkLineStats4\"></span>
                            Pages / Visit: 
                            <span class=\"number\">2,19</span>
                        </li>
                        <li><span class=\"sparkLineStats5\"></span>
                            Avg. Visit Duration: 
                            <span class=\"number\">00:02:58</span>
                        </li>
                        <li><span class=\"sparkLineStats6\"></span>
                            Bounce Rate: <span class=\"number\">59,83%</span>
                        </li>
                        <li><span class=\"sparkLineStats7\"></span>
                            % New Visits: 
                            <span class=\"number\">70,79%</span>
                        </li>
                        <li><span class=\"sparkLineStats8\"></span>
                            % Returning Visitor: 
                            <span class=\"number\">29,21%</span>
                        </li>

                    </ul>
\t\t\t\t\t
\t\t\t\t\t<div class=\"clearfix\"></div>

                </div><!-- End .sparkStats -->

\t\t\t</div>
\t\t\t
\t\t\t\t\t\t
\t\t\t<div class=\"row-fluid\">
\t\t\t\t
\t\t\t\t<div class=\"widget blue span5\" onTablet=\"span6\" onDesktop=\"span5\">
\t\t\t\t\t
\t\t\t\t\t<h2><span class=\"glyphicons globe\"><i></i></span> Demographics</h2>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"verticalChart\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"singleBar\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"bar\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"value\">
\t\t\t\t\t\t\t\t\t\t<span>37%</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"title\">US</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"singleBar\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"bar\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"value\">
\t\t\t\t\t\t\t\t\t\t<span>16%</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"title\">PL</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"singleBar\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"bar\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"value\">
\t\t\t\t\t\t\t\t\t\t<span>12%</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"title\">GB</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"singleBar\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"bar\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"value\">
\t\t\t\t\t\t\t\t\t\t<span>9%</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"title\">DE</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"singleBar\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"bar\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"value\">
\t\t\t\t\t\t\t\t\t\t<span>7%</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"title\">NL</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"singleBar\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"bar\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"value\">
\t\t\t\t\t\t\t\t\t\t<span>6%</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"title\">CA</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"singleBar\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"bar\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"value\">
\t\t\t\t\t\t\t\t\t\t<span>5%</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"title\">FI</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"singleBar\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"bar\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"value\">
\t\t\t\t\t\t\t\t\t\t<span>4%</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"title\">RU</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"singleBar\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"bar\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"value\">
\t\t\t\t\t\t\t\t\t\t<span>3%</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"title\">AU</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"singleBar\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"bar\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"value\">
\t\t\t\t\t\t\t\t\t\t<span>1%</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"title\">N/A</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div><!--/span-->
\t\t\t\t
\t\t\t\t<div class=\"widget span3 red\" onTablet=\"span6\" onDesktop=\"span3\">
\t\t\t\t\t
\t\t\t\t\t<h2><span class=\"glyphicons pie_chart\"><i></i></span> Browsers</h2>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"browserStat big\">
\t\t\t\t\t\t\t<img src=\"img/browser-chrome-big.png\" alt=\"Chrome\">
\t\t\t\t\t\t\t<span>34%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"browserStat big\">
\t\t\t\t\t\t\t<img src=\"img/browser-firefox-big.png\" alt=\"Firefox\">
\t\t\t\t\t\t\t<span>34%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"browserStat\">
\t\t\t\t\t\t\t<img src=\"img/browser-ie.png\" alt=\"Internet Explorer\">
\t\t\t\t\t\t\t<span>34%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"browserStat\">
\t\t\t\t\t\t\t<img src=\"img/browser-safari.png\" alt=\"Safari\">
\t\t\t\t\t\t\t<span>34%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"browserStat\">
\t\t\t\t\t\t\t<img src=\"img/browser-opera.png\" alt=\"Opera\">
\t\t\t\t\t\t\t<span>34%</span>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"widget yellow span4 noMargin\" onTablet=\"span12\" onDesktop=\"span4\">
\t\t\t\t\t<h2><span class=\"glyphicons fire\"><i></i></span> Server Load</h2>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t <div id=\"serverLoad2\" style=\"height:224px;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row-fluid\">
\t\t\t\t
\t\t\t\t<div class=\"box black span4\" onTablet=\"span6\" onDesktop=\"span4\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white list\"></i><span class=\"break\"></span>Weekly Stat</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon white chevron-up\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon white remove\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<ul class=\"dashboard-list metro\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-up green\"></i>                               
\t\t\t\t\t\t\t\t\t<strong>92</strong>
\t\t\t\t\t\t\t\t\tNew Comments                                    
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t  <li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"icon-arrow-down red\"></i>
\t\t\t\t\t\t\t  <strong>15</strong>
\t\t\t\t\t\t\t  New Registrations
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"icon-minus blue\"></i>
\t\t\t\t\t\t\t  <strong>36</strong>
\t\t\t\t\t\t\t  New Articles                                    
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"icon-comment yellow\"></i>
\t\t\t\t\t\t\t  <strong>45</strong>
\t\t\t\t\t\t\t  User reviews                                    
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"icon-arrow-up green\"></i>                               
\t\t\t\t\t\t\t  <strong>112</strong>
\t\t\t\t\t\t\t  New Comments                                    
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"icon-arrow-down red\"></i>
\t\t\t\t\t\t\t  <strong>31</strong>
\t\t\t\t\t\t\t  New Registrations
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"icon-minus blue\"></i>
\t\t\t\t\t\t\t  <strong>93</strong>
\t\t\t\t\t\t\t  New Articles                                    
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t  <i class=\"icon-comment yellow\"></i>
\t\t\t\t\t\t\t  <strong>256</strong>
\t\t\t\t\t\t\t  User reviews                                    
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->
\t\t\t\t
\t\t\t\t<div class=\"box black span4\" onTablet=\"span6\" onDesktop=\"span4\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span>Last Users</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon white chevron-up\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon white remove\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<ul class=\"dashboard-list metro\">
\t\t\t\t\t\t\t<li class=\"green\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"img/avatar.jpg\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<strong>Name:</strong> Dennis Ji<br>
\t\t\t\t\t\t\t\t<strong>Since:</strong> Jul 25, 2012 11:09<br>
\t\t\t\t\t\t\t\t<strong>Status:</strong> Approved             
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"yellow\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"img/avatar.jpg\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<strong>Name:</strong> Dennis Ji<br>
\t\t\t\t\t\t\t\t<strong>Since:</strong> Jul 25, 2012 11:09<br>
\t\t\t\t\t\t\t\t<strong>Status:</strong> Pending                                
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"red\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"img/avatar.jpg\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<strong>Name:</strong> Dennis Ji<br>
\t\t\t\t\t\t\t\t<strong>Since:</strong> Jul 25, 2012 11:09<br>
\t\t\t\t\t\t\t\t<strong>Status:</strong> Banned                                  
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"blue\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"img/avatar.jpg\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<strong>Name:</strong> Dennis Ji<br>
\t\t\t\t\t\t\t\t<strong>Since:</strong> Jul 25, 2012 11:09<br>
\t\t\t\t\t\t\t\t<strong>Status:</strong> Updated                                 
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->
\t\t\t\t
\t\t\t\t<div class=\"box black span4 noMargin\" onTablet=\"span12\" onDesktop=\"span4\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white check\"></i><span class=\"break\"></span>To Do List</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon white wrench\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon white chevron-up\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon white remove\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<div class=\"todo metro\">
\t\t\t\t\t\t\t<ul class=\"todo-list\">
\t\t\t\t\t\t\t\t<li class=\"red\">
\t\t\t\t\t\t\t\t\t<a class=\"action icon-check-empty\" href=\"#\"></a>\t
\t\t\t\t\t\t\t\t\tWindows Phone 8 App 
\t\t\t\t\t\t\t\t\t<strong>today</strong>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"red\">
\t\t\t\t\t\t\t\t\t<a class=\"action icon-check-empty\" href=\"#\"></a>
\t\t\t\t\t\t\t\t\tNew frontend layout
\t\t\t\t\t\t\t\t\t<strong>today</strong>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"yellow\">
\t\t\t\t\t\t\t\t\t<a class=\"action icon-check-empty\" href=\"#\"></a>
\t\t\t\t\t\t\t\t\tHire developers
\t\t\t\t\t\t\t\t\t<strong>tommorow</strong>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"yellow\">
\t\t\t\t\t\t\t\t\t<a class=\"action icon-check-empty\" href=\"#\"></a>
\t\t\t\t\t\t\t\t\tWindows Phone 8 App
\t\t\t\t\t\t\t\t\t<strong>tommorow</strong>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"green\">
\t\t\t\t\t\t\t\t\t<a class=\"action icon-check-empty\" href=\"#\"></a>
\t\t\t\t\t\t\t\t\tNew frontend layout
\t\t\t\t\t\t\t\t\t<strong>this week</strong>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"green\">
\t\t\t\t\t\t\t\t\t<a class=\"action icon-check-empty\" href=\"#\"></a>
\t\t\t\t\t\t\t\t\tHire developers
\t\t\t\t\t\t\t\t\t<strong>this week</strong>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"blue\">
\t\t\t\t\t\t\t\t\t<a class=\"action icon-check-empty\" href=\"#\"></a>
\t\t\t\t\t\t\t\t\tNew frontend layout
\t\t\t\t\t\t\t\t\t<strong>this month</strong>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"blue\">
\t\t\t\t\t\t\t\t\t<a class=\"action icon-check-empty\" href=\"#\"></a>
\t\t\t\t\t\t\t\t\tHire developers
\t\t\t\t\t\t\t\t\t<strong>this month</strong>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t<div class=\"row-fluid hideInIE8 circleStats\">
\t\t\t\t
\t\t\t\t<div class=\"span2\" onTablet=\"span4\" onDesktop=\"span2\">
                \t<div class=\"circleStatsItemBox yellow\">
\t\t\t\t\t\t<div class=\"header\">Disk Space Usage</div>
\t\t\t\t\t\t<span class=\"percent\">percent</span>
\t\t\t\t\t\t<div class=\"circleStat\">
                    \t\t<input type=\"text\" value=\"58\" class=\"whiteCircle\" />
\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t<span class=\"count\">
\t\t\t\t\t\t\t\t<span class=\"number\">20000</span>
\t\t\t\t\t\t\t\t<span class=\"unit\">MB</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"sep\"> / </span>
\t\t\t\t\t\t\t<span class=\"value\">
\t\t\t\t\t\t\t\t<span class=\"number\">50000</span>
\t\t\t\t\t\t\t\t<span class=\"unit\">MB</span>
\t\t\t\t\t\t\t</span>\t
\t\t\t\t\t\t</div>
                \t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"span2\" onTablet=\"span4\" onDesktop=\"span2\">
                \t<div class=\"circleStatsItemBox green\">
\t\t\t\t\t\t<div class=\"header\">Bandwidth</div>
\t\t\t\t\t\t<span class=\"percent\">percent</span>
\t\t\t\t\t\t<div class=\"circleStat\">
                    \t\t<input type=\"text\" value=\"78\" class=\"whiteCircle\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t<span class=\"count\">
\t\t\t\t\t\t\t\t<span class=\"number\">5000</span>
\t\t\t\t\t\t\t\t<span class=\"unit\">GB</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"sep\"> / </span>
\t\t\t\t\t\t\t<span class=\"value\">
\t\t\t\t\t\t\t\t<span class=\"number\">5000</span>
\t\t\t\t\t\t\t\t<span class=\"unit\">GB</span>
\t\t\t\t\t\t\t</span>\t
\t\t\t\t\t\t</div>
                \t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"span2\" onTablet=\"span4\" onDesktop=\"span2\">
                \t<div class=\"circleStatsItemBox red\">
\t\t\t\t\t\t<div class=\"header\">Memory</div>
\t\t\t\t\t\t<span class=\"percent\">percent</span>
                    \t<div class=\"circleStat\">
                    \t\t<input type=\"text\" value=\"100\" class=\"whiteCircle\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t<span class=\"count\">
\t\t\t\t\t\t\t\t<span class=\"number\">64</span>
\t\t\t\t\t\t\t\t<span class=\"unit\">GB</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"sep\"> / </span>
\t\t\t\t\t\t\t<span class=\"value\">
\t\t\t\t\t\t\t\t<span class=\"number\">64</span>
\t\t\t\t\t\t\t\t<span class=\"unit\">GB</span>
\t\t\t\t\t\t\t</span>\t
\t\t\t\t\t\t</div>
                \t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"span2 noMargin\" onTablet=\"span4\" onDesktop=\"span2\">
                \t<div class=\"circleStatsItemBox pink\">
\t\t\t\t\t\t<div class=\"header\">CPU</div>
\t\t\t\t\t\t<span class=\"percent\">percent</span>
                    \t<div class=\"circleStat\">
                    \t\t<input type=\"text\" value=\"83\" class=\"whiteCircle\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t<span class=\"count\">
\t\t\t\t\t\t\t\t<span class=\"number\">64</span>
\t\t\t\t\t\t\t\t<span class=\"unit\">GHz</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"sep\"> / </span>
\t\t\t\t\t\t\t<span class=\"value\">
\t\t\t\t\t\t\t\t<span class=\"number\">3.2</span>
\t\t\t\t\t\t\t\t<span class=\"unit\">GHz</span>
\t\t\t\t\t\t\t</span>\t
\t\t\t\t\t\t</div>
                \t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"span2\" onTablet=\"span4\" onDesktop=\"span2\">
                \t<div class=\"circleStatsItemBox blue\">
\t\t\t\t\t\t<div class=\"header\">Memory</div>
\t\t\t\t\t\t<span class=\"percent\">percent</span>
                    \t<div class=\"circleStat\">
                    \t\t<input type=\"text\" value=\"100\" class=\"whiteCircle\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t<span class=\"count\">
\t\t\t\t\t\t\t\t<span class=\"number\">64</span>
\t\t\t\t\t\t\t\t<span class=\"unit\">GB</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"sep\"> / </span>
\t\t\t\t\t\t\t<span class=\"value\">
\t\t\t\t\t\t\t\t<span class=\"number\">64</span>
\t\t\t\t\t\t\t\t<span class=\"unit\">GB</span>
\t\t\t\t\t\t\t</span>\t
\t\t\t\t\t\t</div>
                \t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"span2\" onTablet=\"span4\" onDesktop=\"span2\">
                \t<div class=\"circleStatsItemBox green\">
\t\t\t\t\t\t<div class=\"header\">Memory</div>
\t\t\t\t\t\t<span class=\"percent\">percent</span>
                    \t<div class=\"circleStat\">
                    \t\t<input type=\"text\" value=\"100\" class=\"whiteCircle\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t<span class=\"count\">
\t\t\t\t\t\t\t\t<span class=\"number\">64</span>
\t\t\t\t\t\t\t\t<span class=\"unit\">GB</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"sep\"> / </span>
\t\t\t\t\t\t\t<span class=\"value\">
\t\t\t\t\t\t\t\t<span class=\"number\">64</span>
\t\t\t\t\t\t\t\t<span class=\"unit\">GB</span>
\t\t\t\t\t\t\t</span>\t
\t\t\t\t\t\t</div>
                \t</div>
\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t</div>\t\t
\t\t\t
\t\t\t<div class=\"row-fluid\">\t

\t\t\t\t<a class=\"quick-button metro yellow span2\">
\t\t\t\t\t<i class=\"icon-group\"></i>
\t\t\t\t\t<p>Users</p>
\t\t\t\t\t<span class=\"badge\">237</span>
\t\t\t\t</a>
\t\t\t\t<a class=\"quick-button metro red span2\">
\t\t\t\t\t<i class=\"icon-comments-alt\"></i>
\t\t\t\t\t<p>Comments</p>
\t\t\t\t\t<span class=\"badge\">46</span>
\t\t\t\t</a>
\t\t\t\t<a class=\"quick-button metro blue span2\">
\t\t\t\t\t<i class=\"icon-shopping-cart\"></i>
\t\t\t\t\t<p>Orders</p>
\t\t\t\t\t<span class=\"badge\">13</span>
\t\t\t\t</a>
\t\t\t\t<a class=\"quick-button metro green span2\">
\t\t\t\t\t<i class=\"icon-barcode\"></i>
\t\t\t\t\t<p>Products</p>
\t\t\t\t</a>
\t\t\t\t<a class=\"quick-button metro pink span2\">
\t\t\t\t\t<i class=\"icon-envelope\"></i>
\t\t\t\t\t<p>Messages</p>
\t\t\t\t\t<span class=\"badge\">88</span>
\t\t\t\t</a>
\t\t\t\t<a class=\"quick-button metro black span2\">
\t\t\t\t\t<i class=\"icon-calendar\"></i>
\t\t\t\t\t<p>Calendar</p>
\t\t\t\t</a>
\t\t\t\t
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t
\t\t\t</div><!--/row-->
\t\t\t
       

\t</div><!--/.fluid-container-->
\t
\t\t\t<!-- end: Content -->
\t\t</div><!--/#content.span10-->
\t\t</div><!--/fluid-row-->
\t\t
\t<div class=\"modal hide fade\" id=\"myModal\">
\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
\t\t\t<h3>Settings</h3>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t<p>Here settings can be configured...</p>
\t\t</div>
\t\t<div class=\"modal-footer\">
\t\t\t<a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
\t\t\t<a href=\"#\" class=\"btn btn-primary\">Save changes</a>
\t\t</div>
\t</div>
\t
\t<div class=\"common-modal modal fade\" id=\"common-Modal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t<div class=\"modal-content\">
\t\t\t<ul class=\"list-inline item-details\">
\t\t\t\t<li><a href=\"http://themifycloud.com\">Admin templates</a></li>
\t\t\t\t<li><a href=\"http://themescloud.org\">Bootstrap themes</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t
\t<div class=\"clearfix\"></div>
\t
\t<footer>

\t\t<p>
\t\t\t<span style=\"text-align:left;float:left\">&copy; 2013 <a href=\"http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/\" alt=\"Bootstrap_Metro_Dashboard\">JANUX Responsive Dashboard</a></span>
\t\t\t
\t\t</p>

\t</footer>
\t
\t<!-- start: JavaScript-->
    
    <script src=\"";
        // line 1062
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1063
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery-migrate-1.0.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1064
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1065
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1066
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/modernizr.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1067
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1068
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1069
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1070
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1071
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/excanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1072
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1073
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1074
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1075
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1076
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1077
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1078
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1079
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1080
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1081
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1082
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1083
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1084
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1085
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1086
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.masonry.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1087
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.knob.modified.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1088
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1089
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/counter.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1090
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/retina.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1091
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/custom.js"), "html", null, true);
        echo "\"></script>
    \t<!-- end: JavaScript-->

    </body>
</html>";
    }

    // line 336
    public function block_menu($context, array $blocks = array())
    {
        // line 337
        echo "              
              
                
\t\t\t\t\t<ul class=\"nav nav-tabs nav-stacked main-menu\">
\t\t\t\t\t\t<li><a href=\"index.html\"><i class=\"icon-bar-chart\"></i><span class=\"hidden-tablet\"> Dashboard</span></a></li>\t
\t\t\t\t\t\t<li><a href=\"messages.html\"><i class=\"icon-envelope\"></i><span class=\"hidden-tablet\"> Messages</span></a></li>
\t\t\t\t\t\t<li><a href=\"tasks.html\"><i class=\"icon-tasks\"></i><span class=\"hidden-tablet\"> Tasks</span></a></li>
\t\t\t\t\t\t<li><a href=\"ui.html\"><i class=\"icon-eye-open\"></i><span class=\"hidden-tablet\"> UI Features</span></a></li>
\t\t\t\t\t\t<li><a href=\"widgets.html\"><i class=\"icon-dashboard\"></i><span class=\"hidden-tablet\"> Widgets</span></a></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Dropdown</span><span class=\"label label-important\"> 3 </span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"submenu.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 1</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"submenu2.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 2</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"submenu3.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 3</span></a></li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"form.html\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Forms</span></a></li>
\t\t\t\t\t\t<li><a href=\"chart.html\"><i class=\"icon-list-alt\"></i><span class=\"hidden-tablet\"> Charts</span></a></li>
\t\t\t\t\t\t<li><a href=\"typography.html\"><i class=\"icon-font\"></i><span class=\"hidden-tablet\"> Typography</span></a></li>
\t\t\t\t\t\t<li><a href=\"gallery.html\"><i class=\"icon-picture\"></i><span class=\"hidden-tablet\"> Gallery</span></a></li>
\t\t\t\t\t\t<li><a href=\"table.html\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Tables</span></a></li>
\t\t\t\t\t\t<li><a href=\"calendar.html\"><i class=\"icon-calendar\"></i><span class=\"hidden-tablet\"> Calendar</span></a></li>
\t\t\t\t\t\t<li><a href=\"file-manager.html\"><i class=\"icon-folder-open\"></i><span class=\"hidden-tablet\"> File Manager</span></a></li>
\t\t\t\t\t\t<li><a href=\"icon.html\"><i class=\"icon-star\"></i><span class=\"hidden-tablet\"> Icons</span></a></li>
\t\t\t\t\t\t<li><a href=\"login.html\"><i class=\"icon-lock\"></i><span class=\"hidden-tablet\"> Login Page</span></a></li>
\t\t\t\t\t</ul>
                    ";
    }

    // line 379
    public function block_infoUserTop($context, array $blocks = array())
    {
        // line 380
        echo "              
              
                ";
    }

    public function getTemplateName()
    {
        return "frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1242 => 380,  1239 => 379,  1208 => 337,  1205 => 336,  1196 => 1091,  1192 => 1090,  1188 => 1089,  1184 => 1088,  1180 => 1087,  1176 => 1086,  1172 => 1085,  1168 => 1084,  1164 => 1083,  1160 => 1082,  1156 => 1081,  1152 => 1080,  1148 => 1079,  1144 => 1078,  1140 => 1077,  1136 => 1076,  1132 => 1075,  1128 => 1074,  1124 => 1073,  1120 => 1072,  1116 => 1071,  1112 => 1070,  1108 => 1069,  1104 => 1068,  1100 => 1067,  1096 => 1066,  1092 => 1065,  1088 => 1064,  1084 => 1063,  1080 => 1062,  399 => 383,  397 => 379,  381 => 365,  379 => 336,  76 => 36,  69 => 32,  62 => 28,  52 => 21,  48 => 20,  44 => 19,  40 => 18,  21 => 1,);
    }
}
