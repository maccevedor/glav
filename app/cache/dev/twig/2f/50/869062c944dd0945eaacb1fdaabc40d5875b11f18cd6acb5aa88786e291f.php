<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2f50869062c944dd0945eaacb1fdaabc40d5875b11f18cd6acb5aa88786e291f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GlavBundle::layoutAdmin.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GlavBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "
        <ul class=\"nav nav-tabs nav-stacked main-menu\">
\t\t    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><i class=\"icon-tablet\"></i><span class=\"hidden-tablet\"> Iniciar Session</span></a></li>
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("empleado");
        echo "\"><i class=\"icon-bar-chart\"></i><span class=\"hidden-tablet\">Consultar Factura</span></a></li>\t
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\">Ayuda</span></a></li>
\t\t</ul>

    ";
    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 14
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 14)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  52 => 13,  44 => 8,  40 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
