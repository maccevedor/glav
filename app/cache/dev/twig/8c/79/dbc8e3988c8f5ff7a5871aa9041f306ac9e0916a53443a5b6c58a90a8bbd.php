<?php

/* GlavBundle::layoutAdmin.html.twig */
class __TwigTemplate_8c79dbc8e3988c8f5ff7a5871aa9041f306ac9e0916a53443a5b6c58a90a8bbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend.html.twig", "GlavBundle::layoutAdmin.html.twig", 1);
        $this->blocks = array(
            'User' => array($this, 'block_User'),
            'menu' => array($this, 'block_menu'),
            'infoUserTop' => array($this, 'block_infoUserTop'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_User($context, array $blocks = array())
    {
        // line 4
        echo "        
        ";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "
        <ul class=\"nav nav-tabs nav-stacked main-menu\">
\t\t    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("cargo");
        echo "\"><i class=\"icon-tablet\"></i><span class=\"hidden-tablet\"> Cargo</span></a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("empleado");
        echo "\"><i class=\"icon-bar-chart\"></i><span class=\"hidden-tablet\"> Empleado</span></a></li>\t
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> Cliente</span></a></li>
            <li><a href=\"index.html\"><i class=\"icon-list\"></i><span class=\"hidden-tablet\"> Rubro</span></a></li>
             <li><a href=\"index.html\"><i class=\"icon-fire\"></i><span class=\"hidden-tablet\"> Tipo de Rubro</span></a></li>
            <li><a href=\"index.html\"><i class=\"icon-road\"></i><span class=\"hidden-tablet\"> Automotor</span></a></li>
            <li><a href=\"index.html\"><i class=\"icon-cog\"></i><span class=\"hidden-tablet\"> Tipo de Automotor</span></a></li>
            <li><a href=\"index.html\"><i class=\"icon-inbox\"></i><span class=\"hidden-tablet\"> Servicio</span></a></li>\t
            <li><a href=\"index.html\"><i class=\"icon-envelope\"></i><span class=\"hidden-tablet\"> Facturas</span></a></li>\t
            
            <li><a href=\"index.html\"><i class=\"icon-save\"></i><span class=\"hidden-tablet\"> Informes</span></a></li>
            

\t\t\t\t\t</ul>

    ";
    }

    // line 27
    public function block_infoUserTop($context, array $blocks = array())
    {
        // line 28
        echo "            ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "GlavBundle::layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  53 => 13,  49 => 12,  45 => 11,  41 => 9,  38 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }
}
