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

/* attachement/show.html.twig */
class __TwigTemplate_608820e9be4525a43e1308eeb935a9dd9c3e821971869161c1b79ab07bc8e33e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "attachement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "attachement/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Attachement";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Attachement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attachement"]) || array_key_exists("attachement", $context) ? $context["attachement"] : (function () { throw new RuntimeError('Variable "attachement" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attachement"]) || array_key_exists("attachement", $context) ? $context["attachement"] : (function () { throw new RuntimeError('Variable "attachement" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Size</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attachement"]) || array_key_exists("attachement", $context) ? $context["attachement"] : (function () { throw new RuntimeError('Variable "attachement" does not exist.', 20, $this->source); })()), "size", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>File</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attachement"]) || array_key_exists("attachement", $context) ? $context["attachement"] : (function () { throw new RuntimeError('Variable "attachement" does not exist.', 24, $this->source); })()), "file", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attachement"]) || array_key_exists("attachement", $context) ? $context["attachement"] : (function () { throw new RuntimeError('Variable "attachement" does not exist.', 28, $this->source); })()), "content", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_attachement_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_attachement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["attachement"]) || array_key_exists("attachement", $context) ? $context["attachement"] : (function () { throw new RuntimeError('Variable "attachement" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "attachement/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "attachement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  122 => 35,  117 => 33,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Attachement{% endblock %}

{% block body %}
    <h1>Attachement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ attachement.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ attachement.name }}</td>
            </tr>
            <tr>
                <th>Size</th>
                <td>{{ attachement.size }}</td>
            </tr>
            <tr>
                <th>File</th>
                <td>{{ attachement.file }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ attachement.content }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_attachement_index') }}\">back to list</a>

    <a href=\"{{ path('app_attachement_edit', {'id': attachement.id}) }}\">edit</a>

    {{ include('attachement/_delete_form.html.twig') }}
{% endblock %}
", "attachement/show.html.twig", "/var/www/localhost/my_project_directory/templates/attachement/show.html.twig");
    }
}
