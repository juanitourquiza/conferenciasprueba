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

/* tematicas/show.html.twig */
class __TwigTemplate_61d1888317f9da86d6d332b15ef678ec7f8656a1246496a901166ef1f8e3b08c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tematicas/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tematicas/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tematicas/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tematicas
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>Tematicas</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tematica"]) || array_key_exists("tematica", $context) ? $context["tematica"] : (function () { throw new RuntimeError('Variable "tematica" does not exist.', 13, $this->source); })()), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Almuerzo</th>
\t\t\t\t<td>";
        // line 17
        ((twig_get_attribute($this->env, $this->source, (isset($context["tematica"]) || array_key_exists("tematica", $context) ? $context["tematica"] : (function () { throw new RuntimeError('Variable "tematica" does not exist.', 17, $this->source); })()), "almuerzo", [], "any", false, false, false, 17)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tematica"]) || array_key_exists("tematica", $context) ? $context["tematica"] : (function () { throw new RuntimeError('Variable "tematica" does not exist.', 17, $this->source); })()), "almuerzo", [], "any", false, false, false, 17), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>HoraInicio</th>
\t\t\t\t<td>";
        // line 21
        ((twig_get_attribute($this->env, $this->source, (isset($context["tematica"]) || array_key_exists("tematica", $context) ? $context["tematica"] : (function () { throw new RuntimeError('Variable "tematica" does not exist.', 21, $this->source); })()), "horaInicio", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tematica"]) || array_key_exists("tematica", $context) ? $context["tematica"] : (function () { throw new RuntimeError('Variable "tematica" does not exist.', 21, $this->source); })()), "horaInicio", [], "any", false, false, false, 21), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>HoraFin</th>
\t\t\t\t<td>";
        // line 25
        ((twig_get_attribute($this->env, $this->source, (isset($context["tematica"]) || array_key_exists("tematica", $context) ? $context["tematica"] : (function () { throw new RuntimeError('Variable "tematica" does not exist.', 25, $this->source); })()), "horaFin", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tematica"]) || array_key_exists("tematica", $context) ? $context["tematica"] : (function () { throw new RuntimeError('Variable "tematica" does not exist.', 25, $this->source); })()), "horaFin", [], "any", false, false, false, 25), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tematicas_index");
        echo "\">back to list</a>

\t<a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tematicas_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tematica"]) || array_key_exists("tematica", $context) ? $context["tematica"] : (function () { throw new RuntimeError('Variable "tematica" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\">edit</a>

\t";
        // line 34
        echo twig_include($this->env, $context, "tematicas/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tematicas/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 34,  131 => 32,  126 => 30,  118 => 25,  111 => 21,  104 => 17,  97 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tematicas
{% endblock %}

{% block body %}
\t<h1>Tematicas</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<td>{{ tematica.nombre }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Almuerzo</th>
\t\t\t\t<td>{{ tematica.almuerzo ? tematica.almuerzo|date('H:i:s') : '' }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>HoraInicio</th>
\t\t\t\t<td>{{ tematica.horaInicio ? tematica.horaInicio|date('H:i:s') : '' }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>HoraFin</th>
\t\t\t\t<td>{{ tematica.horaFin ? tematica.horaFin|date('H:i:s') : '' }}</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('tematicas_index') }}\">back to list</a>

\t<a href=\"{{ path('tematicas_edit', {'id': tematica.id}) }}\">edit</a>

\t{{ include('tematicas/_delete_form.html.twig') }}
{% endblock %}
", "tematicas/show.html.twig", "/Users/macbookpro/Sites/conferencias/templates/tematicas/show.html.twig");
    }
}
