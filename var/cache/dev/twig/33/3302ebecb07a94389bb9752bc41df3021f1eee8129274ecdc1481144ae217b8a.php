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

/* tematicas/index.html.twig */
class __TwigTemplate_90659b7e55ba7239855a63c55f38930214d145bb7ebce79bd72d4cc42e05c0ce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tematicas/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tematicas/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tematicas/index.html.twig", 1);
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

\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<th>Almuerzo</th>
\t\t\t\t<th>HoraInicio</th>
\t\t\t\t<th>HoraFin</th>
\t\t\t\t<th>Acciones</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tematicas"]) || array_key_exists("tematicas", $context) ? $context["tematicas"] : (function () { throw new RuntimeError('Variable "tematicas" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tematica"]) {
            // line 22
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tematica"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tematica"], "nombre", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tematica"], "almuerzo", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            ((twig_get_attribute($this->env, $this->source, $context["tematica"], "horaInicio", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tematica"], "horaInicio", [], "any", false, false, false, 26), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            ((twig_get_attribute($this->env, $this->source, $context["tematica"], "horaFin", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tematica"], "horaFin", [], "any", false, false, false, 27), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tematicas_show", ["id" => twig_get_attribute($this->env, $this->source, $context["tematica"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">Mostrar</a>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tematicas_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["tematica"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">Editar</a>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("distribucion", ["id" => twig_get_attribute($this->env, $this->source, $context["tematica"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">Jornada</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</td>
\t\t</tbody>
\t</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "\t<tr>
\t\t<td colspan=\"8\">Sin registros</td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tematica'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</tbody></table><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tematicas_new");
        echo "\">Nuevo</a>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tematicas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 41,  154 => 38,  142 => 31,  138 => 30,  134 => 29,  129 => 27,  125 => 26,  121 => 25,  117 => 24,  113 => 23,  110 => 22,  105 => 21,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tematicas
{% endblock %}

{% block body %}
\t<h1>Tematicas</h1>

\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<th>Almuerzo</th>
\t\t\t\t<th>HoraInicio</th>
\t\t\t\t<th>HoraFin</th>
\t\t\t\t<th>Acciones</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for tematica in tematicas %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ tematica.id }}</td>
\t\t\t\t\t<td>{{ tematica.nombre }}</td>
\t\t\t\t\t<td>{{ tematica.almuerzo }}</td>
\t\t\t\t\t<td>{{ tematica.horaInicio ? tematica.horaInicio|date('H:i:s') : '' }}</td>
\t\t\t\t\t<td>{{ tematica.horaFin ? tematica.horaFin|date('H:i:s') : '' }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('tematicas_show', {'id': tematica.id}) }}\">Mostrar</a>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('tematicas_edit', {'id': tematica.id}) }}\">Editar</a>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{path('distribucion',{ 'id': tematica.id })}}\">Jornada</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</td>
\t\t</tbody>
\t</tr>
{% else %}
\t<tr>
\t\t<td colspan=\"8\">Sin registros</td>
\t</tr>
{% endfor %}</tbody></table><a href=\"{{ path('tematicas_new') }}\">Nuevo</a>{% endblock %}
", "tematicas/index.html.twig", "/Users/macbookpro/Sites/conferencias/templates/tematicas/index.html.twig");
    }
}
