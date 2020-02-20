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

/* app/distribucion.html.twig */
class __TwigTemplate_5b9ca3715cf67500a14ce66c93b89505e70b8c8b87ed4e5300f7d5ae7f423e99 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/distribucion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/distribucion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app/distribucion.html.twig", 1);
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

        echo "Home
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
        echo "\t<div class=\"container w\">
\t\t<div class=\"row left\">
\t\t\t<hr/>
\t\t\t";
        // line 11
        echo "\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t";
        // line 14
        if (twig_test_empty((isset($context["conferencia"]) || array_key_exists("conferencia", $context) ? $context["conferencia"] : (function () { throw new RuntimeError('Variable "conferencia" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "\t\t\t\t\t\t\t<td colspan=\"4\" align=\"center\">
\t\t\t\t\t\t\t\t<b>No existen conferencias
\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t\t\t<td colspan=\"4\" align=\"center\">
\t\t\t\t\t\t\t\t<b>Tematica
\t\t\t\t\t\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["conferencia"]) || array_key_exists("conferencia", $context) ? $context["conferencia"] : (function () { throw new RuntimeError('Variable "conferencia" does not exist.', 22, $this->source); })()), "0", [], "array", false, false, false, 22), "tematicas", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["conferencia"]) || array_key_exists("conferencia", $context) ? $context["conferencia"] : (function () { throw new RuntimeError('Variable "conferencia" does not exist.', 24, $this->source); })()), "0", [], "array", false, false, false, 24), "tematicas", [], "any", false, false, false, 24), "nombre", [], "any", false, false, false, 24), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Hora</td>
\t\t\t\t\t\t<td>Tema</td>
\t\t\t\t\t\t<td>Duracion</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            // line 34
            $context["horai"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["conferencia"]) || array_key_exists("conferencia", $context) ? $context["conferencia"] : (function () { throw new RuntimeError('Variable "conferencia" does not exist.', 34, $this->source); })()), "0", [], "array", false, false, false, 34), "tematicas", [], "any", false, false, false, 34), "horainicio", [], "any", false, false, false, 34), "H:i");
            // line 35
            echo "\t\t\t\t\t";
            $context["result"] = $this->extensions['App\Twig\SumaminutosExtension']->suma_minutos((isset($context["horai"]) || array_key_exists("horai", $context) ? $context["horai"] : (function () { throw new RuntimeError('Variable "horai" does not exist.', 35, $this->source); })()), 0);
            // line 36
            echo "\t\t\t\t\t";
            $context["break"] = false;
            // line 37
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["conferencia"]) || array_key_exists("conferencia", $context) ? $context["conferencia"] : (function () { throw new RuntimeError('Variable "conferencia" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ok"]) {
                if ( !(isset($context["break"]) || array_key_exists("break", $context) ? $context["break"] : (function () { throw new RuntimeError('Variable "break" does not exist.', 37, $this->source); })())) {
                    // line 38
                    echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                    // line 39
                    echo twig_escape_filter($this->env, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 39, $this->source); })()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ok"], "nombre", [], "any", false, false, false, 40), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ok"], "duracion", [], "any", false, false, false, 41), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t";
                    // line 42
                    $context["result"] = $this->extensions['App\Twig\SumaminutosExtension']->suma_minutos((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 42, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ok"], "duracion", [], "any", false, false, false, 42));
                    // line 43
                    echo "
\t\t\t\t\t\t\t";
                    // line 44
                    if (((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 44, $this->source); })()) == twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ok"], "tematicas", [], "any", false, false, false, 44), "almuerzo", [], "any", false, false, false, 44), "H:i"))) {
                        // line 45
                        echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"3\" align=\"center\">ALMUERZO</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                    }
                    // line 49
                    echo "
\t\t\t\t\t\t\t";
                    // line 50
                    if (((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 50, $this->source); })()) == twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ok"], "tematicas", [], "any", false, false, false, 50), "horafin", [], "any", false, false, false, 50), "H:i"))) {
                        // line 51
                        echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"3\" align=\"center\">FIN CONFERENCIA</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                        // line 54
                        $context["break"] = true;
                        // line 55
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 56
                    echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ok'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t\t";
        }
        // line 59
        echo "\t\t\t</table>
\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tematicas_index");
        echo "\">Regresar</a>
\t\t</div>

\t\t<div class=\"clearfix\"></div>
\t</div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "app/distribucion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 60,  198 => 59,  195 => 58,  187 => 56,  184 => 55,  182 => 54,  177 => 51,  175 => 50,  172 => 49,  166 => 45,  164 => 44,  161 => 43,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  144 => 38,  138 => 37,  135 => 36,  132 => 35,  130 => 34,  117 => 24,  112 => 22,  108 => 20,  101 => 15,  99 => 14,  94 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home
{% endblock %}

{% block body %}
\t<div class=\"container w\">
\t\t<div class=\"row left\">
\t\t\t<hr/>
\t\t\t{#{dump(conferencia)}#}
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t{% if conferencia is empty %}
\t\t\t\t\t\t\t<td colspan=\"4\" align=\"center\">
\t\t\t\t\t\t\t\t<b>No existen conferencias
\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<td colspan=\"4\" align=\"center\">
\t\t\t\t\t\t\t\t<b>Tematica
\t\t\t\t\t\t\t\t\t{{ conferencia['0'].tematicas.id }}
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t{{ conferencia['0'].tematicas.nombre }}
\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Hora</td>
\t\t\t\t\t\t<td>Tema</td>
\t\t\t\t\t\t<td>Duracion</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% set horai= conferencia['0'].tematicas.horainicio | date (\"H:i\") %}
\t\t\t\t\t{% set result = suma_minutos(horai, 0) %}
\t\t\t\t\t{% set break = false %}
\t\t\t\t\t{% for ok in conferencia if not break %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ result }}</td>
\t\t\t\t\t\t\t<td>{{ ok.nombre }}</td>
\t\t\t\t\t\t\t<td>{{ ok.duracion }}</td>
\t\t\t\t\t\t\t{% set result = suma_minutos(result, ok.duracion ) %}

\t\t\t\t\t\t\t{% if result ==  ok.tematicas.almuerzo| date (\"H:i\") %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"3\" align=\"center\">ALMUERZO</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if result ==  ok.tematicas.horafin| date (\"H:i\") %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"3\" align=\"center\">FIN CONFERENCIA</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% set break = true %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t</table>
\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('tematicas_index') }}\">Regresar</a>
\t\t</div>

\t\t<div class=\"clearfix\"></div>
\t</div>
</div>{% endblock %}
", "app/distribucion.html.twig", "/Users/macbookpro/Sites/conferencias/templates/app/distribucion.html.twig");
    }
}
