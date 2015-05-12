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
        // line 3
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "    ";
    }

    // line 13
    public function block_infoUserTop($context, array $blocks = array())
    {
        // line 14
        echo "    <h1>Cliente list</h1>
    

    
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
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 38
            echo "            <tr>
                <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "identificacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "genero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            if ($this->getAttribute($context["entity"], "fNacimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fNacimiento", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "direccion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telefono", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "celular", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            if ($this->getAttribute($context["entity"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 57
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
        // line 63
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 68
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
        return array (  157 => 68,  150 => 63,  138 => 57,  132 => 54,  123 => 50,  119 => 49,  115 => 48,  111 => 47,  107 => 46,  103 => 45,  97 => 44,  93 => 43,  89 => 42,  85 => 41,  81 => 40,  75 => 39,  72 => 38,  68 => 37,  43 => 14,  40 => 13,  36 => 6,  33 => 5,  29 => 1,  26 => 3,  11 => 1,);
    }
}
