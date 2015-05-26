<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b80f9ed548489f3ac40a6e5c36b73114ceb9f196dd4fd6e6f543ef94c93a3e5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GlavBundle::layoutAdmin.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "
        <ul class=\"nav nav-tabs nav-stacked main-menu\">
\t\t    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><i class=\"icon-tablet\"></i><span class=\"hidden-tablet\"> Iniciar Session</span></a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("empleado");
        echo "\"><i class=\"icon-bar-chart\"></i><span class=\"hidden-tablet\">Consultar Factura</span></a></li>\t
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\">Ayuda</span></a></li>
\t\t</ul>

    ";
    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 17
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 18
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 19
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 20
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  65 => 20,  62 => 19,  60 => 18,  55 => 17,  52 => 16,  44 => 10,  40 => 9,  36 => 8,  32 => 6,  29 => 5,  11 => 1,);
    }
}
