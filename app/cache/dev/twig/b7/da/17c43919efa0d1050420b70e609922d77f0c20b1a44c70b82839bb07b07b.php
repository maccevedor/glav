<?php

/* GlavBundle:Cliente:index.html.twig */
class __TwigTemplate_b7da17c43919efa0d1050420b70e609922d77f0c20b1a44c70b82839bb07b07b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GlavBundle::layoutAdmin.html.twig", "GlavBundle:Cliente:index.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
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
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 5
            echo "    ";
            $this->displayParentBlock("menu", $context, $blocks);
            echo "
  ";
        } else {
            // line 6
            echo "  
  
        <ul class=\"nav nav-tabs nav-stacked main-menu\">

            <li><a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("cliente");
            echo "\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> Cliente</span></a></li>
            <li><a href=\"index.html\"><i class=\"icon-road\"></i><span class=\"hidden-tablet\"> Automotor</span></a></li>
            <li><a href=\"index.html\"><i class=\"icon-inbox\"></i><span class=\"hidden-tablet\"> Servicio</span></a></li>\t   
            <li><a href=\"index.html\"><i class=\"icon-save\"></i><span class=\"hidden-tablet\"> Informes</span></a></li>
\t\t\t\t\t</ul>
  
  ";
        }
        // line 17
        echo "  
";
    }

    // line 22
    public function block_infoUserTop($context, array $blocks = array())
    {
        // line 23
        echo "    <h1>Cliente list</h1>
    

    
";
        // line 27
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), ", "), "html", null, true);
        echo " 
    
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Identificacion</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Genero</th>
                <th>Fnacimiento</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Celular</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 49
            echo "            <tr>
                <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "identificacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "genero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            if ($this->getAttribute($context["entity"], "fNacimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fNacimiento", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "direccion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telefono", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "celular", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            if ($this->getAttribute($context["entity"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 74
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("cliente_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "GlavBundle:Cliente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 79,  177 => 74,  165 => 68,  159 => 65,  150 => 61,  146 => 60,  142 => 59,  138 => 58,  134 => 57,  130 => 56,  124 => 55,  120 => 54,  116 => 53,  112 => 52,  108 => 51,  102 => 50,  99 => 49,  95 => 48,  71 => 27,  65 => 23,  62 => 22,  57 => 17,  47 => 10,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
