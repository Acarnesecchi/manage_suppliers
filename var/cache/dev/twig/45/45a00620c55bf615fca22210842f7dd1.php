<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* supplier/index.html.twig */
class __TwigTemplate_0e129fff79bc30002a62c3463441e3dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "supplier/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Check All Our Suppliers";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_create");
        echo "\" class=\"btn btn-create\">Add a New Supplier</a>
<h2>Our Suppliers</h2>

<form method=\"get\" action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_index");
        echo "\" class=\"mb-3\">
    <select class=\"form-select\" name=\"filter\" onchange=\"this.form.submit()\">
        <option value=\"all\" ";
        // line 11
        echo ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 11, $this->source); })()) == "all")) ? ("selected") : (""));
        echo ">All Suppliers</option>
        <option value=\"active\" ";
        // line 12
        echo ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 12, $this->source); })()) == "active")) ? ("selected") : (""));
        echo ">Active Suppliers</option>
    </select>
</form>

<table class=\"table table-custom\">
    <thead class=\"thead-dark\">
        <tr>
            <th>Type</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Active</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["suppliers"]) || array_key_exists("suppliers", $context) ? $context["suppliers"] : (function () { throw new RuntimeError('Variable "suppliers" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 30
            echo "        <tr>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["supplier"], "type", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplier"], "mail", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplier"], "number", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo ((twig_get_attribute($this->env, $this->source, $context["supplier"], "active", [], "any", false, false, false, 35)) ? ("Yes") : ("No"));
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplier"], "description", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_update", ["id" => twig_get_attribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn btn-edit\">Edit</a>
                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"btn btn-delete\" onclick=\"return confirm('You are about to delete a resource. This action is irreversible')\">Delete</a>
            </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "        <tr>
            <td colspan=\"7\" class=\"text-center\">No suppliers found.</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </tbody>
</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "supplier/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  179 => 47,  170 => 43,  161 => 39,  157 => 38,  152 => 36,  148 => 35,  144 => 34,  140 => 33,  136 => 32,  132 => 31,  129 => 30,  124 => 29,  104 => 12,  100 => 11,  95 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Check All Our Suppliers{% endblock %}

{% block body %}
<a href=\"{{ path('app_supplier_create') }}\" class=\"btn btn-create\">Add a New Supplier</a>
<h2>Our Suppliers</h2>

<form method=\"get\" action=\"{{ path('app_supplier_index') }}\" class=\"mb-3\">
    <select class=\"form-select\" name=\"filter\" onchange=\"this.form.submit()\">
        <option value=\"all\" {{ filter == 'all' ? 'selected' : '' }}>All Suppliers</option>
        <option value=\"active\" {{ filter == 'active' ? 'selected' : '' }}>Active Suppliers</option>
    </select>
</form>

<table class=\"table table-custom\">
    <thead class=\"thead-dark\">
        <tr>
            <th>Type</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Active</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {% for supplier in suppliers %}
        <tr>
            <td>{{ supplier.type.name }}</td>
            <td>{{ supplier.name }}</td>
            <td>{{ supplier.mail }}</td>
            <td>{{ supplier.number }}</td>
            <td>{{ supplier.active ? 'Yes' : 'No' }}</td>
            <td>{{ supplier.description }}</td>
            <td>
                <a href=\"{{ path('app_supplier_update', {'id': supplier.id}) }}\" class=\"btn btn-edit\">Edit</a>
                <a href=\"{{ path('app_supplier_delete', {'id': supplier.id}) }}\" class=\"btn btn-delete\" onclick=\"return confirm('You are about to delete a resource. This action is irreversible')\">Delete</a>
            </td>
        </tr>
        {% else %}
        <tr>
            <td colspan=\"7\" class=\"text-center\">No suppliers found.</td>
        </tr>
        {% endfor %}
    </tbody>
</table>
{% endblock %}
", "supplier/index.html.twig", "/workspaces/php-mariadb/symfony/manage_suppliers/templates/supplier/index.html.twig");
    }
}
