<?php

/* GlavBundle::layoutIndex.html.twig */
class __TwigTemplate_d9c06482abe7c1b6c74a52124efb7edf888ed51b0361f1e74e4927cefe6aade1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend.html.twig", "GlavBundle::layoutIndex.html.twig", 1);
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
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><i class=\"icon-tablet\"></i><span class=\"hidden-tablet\"> Iniciar Session</span></a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("empleado");
        echo "\"><i class=\"icon-bar-chart\"></i><span class=\"hidden-tablet\">Consultar Factura</span></a></li>\t
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\">Ayuda</span></a></li>
\t\t</ul>

    ";
    }

    // line 19
    public function block_infoUserTop($context, array $blocks = array())
    {
        // line 20
        echo "            ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "GlavBundle::layoutIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  61 => 19,  53 => 15,  49 => 14,  45 => 13,  41 => 11,  38 => 10,  33 => 4,  30 => 3,  11 => 1,);
    }
}
