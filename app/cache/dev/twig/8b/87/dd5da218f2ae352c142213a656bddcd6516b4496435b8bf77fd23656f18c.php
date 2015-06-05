<?php

/* GlavBundle:Factura:new.html.twig */
class __TwigTemplate_8b87dd5da218f2ae352c142213a656bddcd6516b4496435b8bf77fd23656f18c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GlavBundle::layoutAdmin.html.twig", "GlavBundle:Factura:new.html.twig", 1);
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

    // line 4
    public function block_infoUserTop($context, array $blocks = array())
    {
        // line 5
        echo "<form id=\"factura\" action=\"";
        echo $this->env->getExtension('routing')->getPath("factura_guardar");
        echo "\" method=\"post\" enctype=\"multipart/form-data\" >

    <h1>Factura creation</h1>
<input type=\"hidden\" id=\"usuario\" name=\"usuario\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo "\">

    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formF"]) ? $context["formF"] : $this->getContext($context, "formF")), 'widget');
        echo "
    <div id=\"informacion\">
        <input type=\"hidden\" id=\"neto\" name=\"neto\">
        <input type=\"hidden\" id=\"total\" name=\"total\">
    </div>
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("factura");
        echo "\">
        
            <input type=\"submit\" value=\"Guardar\"/>
            Back to the list
        </a>
    </li>
</ul>

</form>


";
    }

    public function getTemplateName()
    {
        return "GlavBundle:Factura:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  51 => 15,  43 => 10,  38 => 8,  31 => 5,  28 => 4,  11 => 1,);
    }
}
