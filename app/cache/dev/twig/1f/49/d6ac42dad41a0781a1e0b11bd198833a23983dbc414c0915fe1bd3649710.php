<?php

/* GlavBundle:Default:index.html.twig */
class __TwigTemplate_1f49d6ac42dad41a0781a1e0b11bd198833a23983dbc414c0915fe1bd3649710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GlavBundle::layoutIndex.html.twig", "GlavBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'infoUserTop' => array($this, 'block_infoUserTop'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GlavBundle::layoutIndex.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 5
            echo "
        <ul class=\"nav nav-tabs nav-stacked main-menu\">
\t\t    <li><a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("cargo");
            echo "\"><i class=\"icon-tablet\"></i><span class=\"hidden-tablet\"> Cargo</span></a></li>
            <li><a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("empleado");
            echo "\"><i class=\"icon-bar-chart\"></i><span class=\"hidden-tablet\"> Empleado</span></a></li>\t
            <li><a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("cliente");
            echo "\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> Cliente</span></a></li>
            <li><a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("tiporubro");
            echo "\"\"><i class=\"icon-fire\"></i><span class=\"hidden-tablet\"> Tipo de Rubro</span></a></li>
            <li><a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("rubro");
            echo "\"><i class=\"icon-list\"></i><span class=\"hidden-tablet\"> Rubro</span></a></li>
             
             <li><a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("tipoautomotor");
            echo "\"><i class=\"icon-cog\"></i><span class=\"hidden-tablet\"> Tipo de Automotor</span></a></li>
            <li><a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("automotor");
            echo "\"><i class=\"icon-road\"></i><span class=\"hidden-tablet\"> Automotor</span></a></li>
            
            <li><a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("servicio");
            echo "\"><i class=\"icon-inbox\"></i><span class=\"hidden-tablet\"> Servicio</span></a></li>\t
            <li><a href=\"index.html\"><i class=\"icon-envelope\"></i><span class=\"hidden-tablet\"> Facturas</span></a></li>\t
            <li><a href=\"index.html\"><i class=\"icon-save\"></i><span class=\"hidden-tablet\"> Informes</span></a></li>
\t\t\t\t\t</ul>
                    
                    
  ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 22
            echo "  
  
          <ul class=\"nav nav-tabs nav-stacked main-menu\">

            <li><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("cliente");
            echo "\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> Cliente</span></a></li>
            <li><a href=\"index.html\"><i class=\"icon-road\"></i><span class=\"hidden-tablet\"> Automotor</span></a></li>
            <li><a href=\"index.html\"><i class=\"icon-inbox\"></i><span class=\"hidden-tablet\"> Servicio</span></a></li>\t   
            <li><a href=\"index.html\"><i class=\"icon-save\"></i><span class=\"hidden-tablet\"> Informes</span></a></li>
\t\t\t\t\t</ul>
  
  ";
        } else {
            // line 32
            echo "  
  
    ";
            // line 34
            $this->displayParentBlock("menu", $context, $blocks);
            echo "

  
  ";
        }
        // line 38
        echo "  ";
    }

    // line 41
    public function block_infoUserTop($context, array $blocks = array())
    {
        // line 42
        echo "<img class=\"grayscale\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontend/img/AUTOLOGO.jpg"), "html", null, true);
        echo "\" alt=\"Sample Image 1\">
    ";
    }

    public function getTemplateName()
    {
        return "GlavBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  110 => 41,  106 => 38,  99 => 34,  95 => 32,  85 => 26,  79 => 22,  69 => 16,  64 => 14,  60 => 13,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
