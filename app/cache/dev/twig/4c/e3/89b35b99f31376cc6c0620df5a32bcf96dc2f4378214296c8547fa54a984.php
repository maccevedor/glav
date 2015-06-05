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
            'breadcrumb' => array($this, 'block_breadcrumb'),
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
        echo "\" 
    rel=\"stylesheet\">
    <link id=\"bootstrap-style\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/css/jquery.dataTables.css"), "html", null, true);
        echo "\" 
    rel=\"stylesheet\">
    
   
    

    
    
    
    
\t<link  href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link id=\"base-style\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link id=\"base-style-responsive\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
\t<!-- end: CSS -->

\t<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
\t<!--[if lt IE 9]>
\t  \t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<link id=\"ie-style\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/css/ie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<![endif]-->
\t
\t<!--[if IE 9]>
\t\t<link id=\"ie9style\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/css/ie9.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<![endif]-->
\t\t
\t<!-- start: Favicon -->
\t<link rel=\"shortcut icon\" href=\"";
        // line 47
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
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/custom.js"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
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
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/custom.js"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
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
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/custom.js"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
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
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/custom.js"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
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
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/custom.js"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
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
\t\t\t\t\t\t<!-- start: User Dropdown -->
                        
                          <!-- Logueo configurado con fosUSer -->

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"halflings-icon white user\"></i> ";
        // line 320
        echo "  <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        ";
        // line 322
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 323
            echo "                        <li>
                            <a href=\"";
            // line 324
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\"><i class=\"halflings-icon white user\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 327
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\"><i class=\"halflings-icon white user\"></i> Cambiar clave</a>
                        </li>
                        
                        
                        
                        
                        <li>
                            <a href=\"";
            // line 334
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><i class=\"halflings-icon off\"></i> Log Out / Salir</a>
                        </li>
                        
                        <li class=\"divider\"></li>

                        ";
        } else {
            // line 340
            echo "                         <li>
                            <a href=\"";
            // line 341
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-fw fa-user\"></i>Iniciar Sesion</a>
                        </li>

                         ";
        }
        // line 345
        echo "                    </ul>
                </li>
            </ul>
                        
                        
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
                
                \t\t\t  
              
                          ";
        // line 376
        $this->displayBlock('menu', $context, $blocks);
        // line 404
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
            
            ";
        // line 418
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 429
        echo "
            \t\t\t
\t\t\t  ";
        // line 431
        $this->displayBlock('infoUserTop', $context, $blocks);
        // line 1063
        echo "       

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
\t\t\t<span style=\"text-align:left;float:left\">&copy; 2015 <a href=\"http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/\" alt=\"Bootstrap_Metro_Dashboard\">Anderson Pinto</a></span>
\t\t\t
\t\t</p>

\t</footer>
\t
\t<!-- start: JavaScript-->
    
    <script src=\"";
        // line 1107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery-migrate-1.0.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/modernizr.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/excanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.masonry.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.knob.modified.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/counter.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/retina.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/custom.js"), "html", null, true);
        echo "\"></script>
        
    <script type=\"text/javascript\">

window.onload = function() {

\$('#example').DataTable();


\$('#cliente').change(function () {

        cliente = \$('#cliente').val();
        alert(cliente);
        \$('#informacion').load('";
        // line 1149
        echo $this->env->getExtension('routing')->getPath("factura_buscar_cliente");
        echo "',{cliente:cliente},function()
            {
            });
        
        
});

\$('#matricula').change(function () {

        matricula = \$('#matricula').val();
        alert(matricula);
        \$('#informacion').load('";
        // line 1160
        echo $this->env->getExtension('routing')->getPath("servicio_buscar_matricula");
        echo "',{matricula:matricula},function()
            {
            });
        
        
});

    \$('#glavbundle_prestamo_id_empleado').on('change', function() {
    alert( \$(this).find(\":selected\").val());
    servicioId = \$(this).find(\":selected\").val();
    //\$('#informacion').load('";
        // line 1170
        echo $this->env->getExtension('routing')->getPath("prestamo_total");
        echo "',
            //\$('#dialogoBox').hide();
            \$('#informacion').load('";
        // line 1172
        echo $this->env->getExtension('routing')->getPath("prestamo_total");
        echo "',{servicioId:servicioId},function()
            {
            });

});


    \$('#glavbundle_facturadetalle_id_servicio').on('change', function() {
    //alert( \$(this).find(\":selected\").val());
    servicioId = \$(this).find(\":selected\").val();
    //\$('#informacion').load('";
        // line 1182
        echo $this->env->getExtension('routing')->getPath("factura_valor");
        echo "',
            //\$('#dialogoBox').hide();
            \$('#informacion').load('";
        // line 1184
        echo $this->env->getExtension('routing')->getPath("factura_valor");
        echo "',{servicioId:servicioId},function()
            {
            });

});


}
</script>
    \t<!-- end: JavaScript-->

    </body>
</html>";
    }

    // line 376
    public function block_menu($context, array $blocks = array())
    {
        // line 377
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

    // line 418
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 419
        echo "
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t<li>
\t\t\t\t\t<i class=\"icon-home\"></i>
\t\t\t\t\t<a href=\"index.html\">Home</a> 
\t\t\t\t\t<i class=\"icon-angle-right\"></i>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"#\">Dashboard</a></li>
\t\t\t</ul>
            ";
    }

    // line 431
    public function block_infoUserTop($context, array $blocks = array())
    {
        // line 432
        echo "              
              
               

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
\t\t\t\t\t\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
        // line 805
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/custom.js"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<strong>Name:</strong> Dennis Ji<br>
\t\t\t\t\t\t\t\t<strong>Since:</strong> Jul 25, 2012 11:09<br>
\t\t\t\t\t\t\t\t<strong>Status:</strong> Approved             
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"yellow\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
        // line 813
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/custom.js"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<strong>Name:</strong> Dennis Ji<br>
\t\t\t\t\t\t\t\t<strong>Since:</strong> Jul 25, 2012 11:09<br>
\t\t\t\t\t\t\t\t<strong>Status:</strong> Pending                                
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"red\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
        // line 821
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/custom.js"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<strong>Name:</strong> Dennis Ji<br>
\t\t\t\t\t\t\t\t<strong>Since:</strong> Jul 25, 2012 11:09<br>
\t\t\t\t\t\t\t\t<strong>Status:</strong> Banned                                  
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"blue\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
        // line 829
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/js/custom.js"), "html", null, true);
        echo "\">
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
        return array (  1192 => 829,  1181 => 821,  1170 => 813,  1159 => 805,  784 => 432,  781 => 431,  768 => 419,  765 => 418,  735 => 377,  732 => 376,  715 => 1184,  710 => 1182,  697 => 1172,  692 => 1170,  679 => 1160,  665 => 1149,  649 => 1136,  645 => 1135,  641 => 1134,  637 => 1133,  633 => 1132,  629 => 1131,  625 => 1130,  621 => 1129,  617 => 1128,  613 => 1127,  609 => 1126,  605 => 1125,  601 => 1124,  597 => 1123,  593 => 1122,  589 => 1121,  585 => 1120,  581 => 1119,  577 => 1118,  573 => 1117,  569 => 1116,  565 => 1115,  561 => 1114,  557 => 1113,  553 => 1112,  549 => 1111,  545 => 1110,  541 => 1109,  537 => 1108,  533 => 1107,  487 => 1063,  485 => 431,  481 => 429,  479 => 418,  463 => 404,  461 => 376,  428 => 345,  421 => 341,  418 => 340,  409 => 334,  399 => 327,  391 => 324,  388 => 323,  386 => 322,  382 => 320,  355 => 296,  336 => 280,  317 => 264,  298 => 248,  279 => 232,  91 => 47,  84 => 43,  77 => 39,  67 => 32,  63 => 31,  59 => 30,  46 => 20,  41 => 18,  22 => 1,);
    }
}
