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

/* @EasyAdmin/inspector/data_collector.html.twig */
class __TwigTemplate_654f7d1e310f4a2ff6c65bc38f77f7b07f00bca66a7ddccadba2ae8f6d5bb05f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/inspector/data_collector.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/inspector/data_collector.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@EasyAdmin/inspector/data_collector.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <span class=\"label ";
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "isEasyAdminRequest", [], "any", false, false, false, 4)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 5
        echo twig_include($this->env, $context, ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 5, $this->source); })()) >= 3)) ? ("@EasyAdmin/inspector/icon-v3.svg.twig") : ("@EasyAdmin/inspector/icon.svg.twig")));
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 11
        echo "    <h2>EasyAdmin <small>(";
        echo twig_escape_filter($this->env, twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo ")</small></h2>

    ";
        // line 13
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 13, $this->source); })()), "isEasyAdminRequest", [], "any", false, false, false, 13)) {
            // line 14
            echo "        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "data", [], "any", false, false, false, 18)], false);
            echo "
    ";
        }
        // line 20
        echo "
    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html\">Read documentation</a></li>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle\">Project homepage</a></li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/inspector/data_collector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 20,  112 => 18,  106 => 14,  104 => 13,  98 => 11,  88 => 10,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block menu %}
    <span class=\"label {{ not collector.isEasyAdminRequest ? 'disabled' }}\">
        <span class=\"icon\">{{ include(profiler_markup_version >= 3 ? '@EasyAdmin/inspector/icon-v3.svg.twig' : '@EasyAdmin/inspector/icon.svg.twig') }}</span>
        <strong>EasyAdmin</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>EasyAdmin <small>({{ constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }})</small></h2>

    {% if not collector.isEasyAdminRequest %}
        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>
    {% else %}
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.data }, with_context = false) }}
    {% endif %}

    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html\">Read documentation</a></li>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle\">Project homepage</a></li>
    </ul>
{% endblock %}
", "@EasyAdmin/inspector/data_collector.html.twig", "C:\\Users\\islem\\Desktop\\recette\\symrecipe\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\inspector\\data_collector.html.twig");
    }
}