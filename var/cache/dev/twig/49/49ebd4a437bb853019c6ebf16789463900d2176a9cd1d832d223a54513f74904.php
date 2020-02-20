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

/* app/index.html.twig */
class __TwigTemplate_d74c9299d42d239d482b5eccca695a2beb689d91bb448795ef7d86261fad3873 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app/index.html.twig", 1);
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
        echo "

\t<div class=\"container text-center\">
\t\t<div class=\"col-md-12 \">
\t\t\t<h1>Bienvenidos aqui puede cargar los archivos de tematicas y conferencias</h1>
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t<form class=\"card card-signin\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subir");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t<label for=\"inputAddress4\" style=\"color:#da5207\">Subir Archivo Tematicas</label>
\t\t\t\t\t\t<input class=\"form-control\" id=\"ayudar\" name=\"tematica\" type=\"file\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enviar</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<form class=\"card card-signin\" action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subir");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t<label for=\"inputAddress4\" style=\"color:#da5207\">Subir Archivo Conferencias</label>
\t\t\t\t\t\t<input class=\"form-control\" id=\"ayudar\" name=\"conferencia\" type=\"file\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enviar</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"col-md-12  mt-3\">
\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tematicas_index");
        echo "\">Listado Tematicas y Jornadas</a>
\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conferencias_index");
        echo "\">Listado Conferencias</a>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "app/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 39,  128 => 38,  112 => 25,  98 => 14,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home
{% endblock %}

{% block body %}


\t<div class=\"container text-center\">
\t\t<div class=\"col-md-12 \">
\t\t\t<h1>Bienvenidos aqui puede cargar los archivos de tematicas y conferencias</h1>
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t<form class=\"card card-signin\" action=\"{{ path('subir') }}\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t<label for=\"inputAddress4\" style=\"color:#da5207\">Subir Archivo Tematicas</label>
\t\t\t\t\t\t<input class=\"form-control\" id=\"ayudar\" name=\"tematica\" type=\"file\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enviar</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<form class=\"card card-signin\" action=\"{{ path('subir') }}\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t<label for=\"inputAddress4\" style=\"color:#da5207\">Subir Archivo Conferencias</label>
\t\t\t\t\t\t<input class=\"form-control\" id=\"ayudar\" name=\"conferencia\" type=\"file\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enviar</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"col-md-12  mt-3\">
\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('tematicas_index')}}\">Listado Tematicas y Jornadas</a>
\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('conferencias_index')}}\">Listado Conferencias</a>
\t\t</div>
\t</div>
{% endblock %}
", "app/index.html.twig", "/Users/macbookpro/Sites/conferencias/templates/app/index.html.twig");
    }
}
