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

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        // line 11
        echo "
        <ul class=\"nav nav-tabs nav-stacked main-menu\">
\t\t    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("cargo");
        echo "\"><i class=\"icon-tablet\"></i><span class=\"hidden-tablet\"> Cargo</span></a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("empleado");
        echo "\"><i class=\"icon-bar-chart\"></i><span class=\"hidden-tablet\"> Empleado</span></a></li>\t
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> Cliente</span></a></li>
                         <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("tiporubro");
        echo "\"><i class=\"icon-fire\"></i><span class=\"hidden-tablet\"> Tipo de Servicio</span></a></li>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("rubro");
        echo "\"><i class=\"icon-list\"></i><span class=\"hidden-tablet\"> Rubro</span></a></li>
                        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("tipoautomotor");
        echo "\"><i class=\"icon-cog\"></i><span class=\"hidden-tablet\"> Tipo de Automotor</span></a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("automotor");
        echo "\"><i class=\"icon-road\"></i><span class=\"hidden-tablet\"> Automotor</span></a></li>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("servicio");
        echo "\"><i class=\"icon-inbox\"></i><span class=\"hidden-tablet\"> Servicio</span></a></li>\t
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("prestamo");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Prestamo </span></a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("factura");
        echo "\"><i class=\"icon-envelope\"></i><span class=\"hidden-tablet\"> Facturas</span></a></li>\t
            
<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Informes</span><span class=\"label label-important\"> 3 </span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("informe");
        echo "\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\">Empleados</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"submenu2.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Mensuales</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"submenu3.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Totales </span></a></li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>
            

\t\t\t\t\t</ul>

    ";
    }

    // line 37
    public function block_infoUserTop($context, array $blocks = array())
    {
        // line 38
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
        return array (  106 => 38,  103 => 37,  89 => 27,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  41 => 11,  38 => 10,  33 => 4,  30 => 3,  11 => 1,);
    }
}
