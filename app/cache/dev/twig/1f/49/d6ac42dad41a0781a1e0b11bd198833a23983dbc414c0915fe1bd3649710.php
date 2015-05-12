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

    // line 5
    public function block_infoUserTop($context, array $blocks = array())
    {
        // line 6
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
        return array (  31 => 6,  28 => 5,  11 => 1,);
    }
}
