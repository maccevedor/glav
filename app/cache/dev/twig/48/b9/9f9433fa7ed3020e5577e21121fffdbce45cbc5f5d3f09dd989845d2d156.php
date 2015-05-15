<?php

/* GlavBundle:Rubro:new.html.twig */
class __TwigTemplate_48b99f9433fa7ed3020e5577e21121fffdbce45cbc5f5d3f09dd989845d2d156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GlavBundle::layoutAdmin.html.twig", "GlavBundle:Rubro:new.html.twig", 1);
        $this->blocks = array(
            'infoUserTop' => array($this, 'block_infoUserTop'),
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

    // line 2
    public function block_infoUserTop($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>Rubro creation</h1>

    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("rubro");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "GlavBundle:Rubro:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
