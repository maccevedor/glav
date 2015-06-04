<?php

/* GlavBundle:Servicio:index.html.twig */
class __TwigTemplate_7b3bfc8007c449cee4befbcd583b2f59ecdb1511f13e441997386ba12ebd539c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GlavBundle::layoutAdmin.html.twig", "GlavBundle:Servicio:index.html.twig", 1);
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

    // line 3
    public function block_infoUserTop($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Servicio list</h1>
    Buscar por Matricula
    <input type=\"text\" id=\"matricula\" name=\"matricula\">
        <div id=\"informacion\">

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Modelo</th>
                <th>Matricula</th>
                <th>Empleado</th>
                <th>Estadoservicio</th>
                <th>Observacion</th>
                <th>Fecha_servicio</th>
                <th>Fecha_entrega</th>
                <th>Pago</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("servicio_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "modelo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "matricula", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "empleado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado_servicio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "observacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["entity"], "fecha_servicio", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fecha_servicio", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["entity"], "fecha_entrega", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fecha_entrega", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pago", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("servicio_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("servicio_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("servicio_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "GlavBundle:Servicio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 53,  124 => 48,  112 => 42,  106 => 39,  99 => 35,  93 => 34,  87 => 33,  83 => 32,  79 => 31,  75 => 30,  71 => 29,  67 => 28,  61 => 27,  58 => 26,  54 => 25,  31 => 4,  28 => 3,  11 => 1,);
    }
}
