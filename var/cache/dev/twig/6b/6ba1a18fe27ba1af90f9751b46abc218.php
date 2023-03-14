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

/* dish/index.html.twig */
class __TwigTemplate_1807fc9bf399804ee1284eeb5d337fe9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dish/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dish/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dish/index.html.twig", 1);
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

        echo "Carte";
        
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
        echo "    <h1>Carte</h1>


";
        // line 10
        echo "    <section class=\"mt-5 container\">
    <a class=\"btn category-custom p-2 m-1\" type=\"button\" href=\"#entree\">ENTREES</a>
    <a class=\"btn category-custom\" type=\"button\" href=\"#plat\">PLATS</a>
    <a class=\"btn category-custom\" type=\"button\" href=\"#dessert\">DESSERTS</a>

        <div class=\"category-custom mt-5\">
            <h2 id=\"entree\" class=\"text-center\">Entrées</h2>
        </div>
        
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["categoryEntree"]);
        foreach ($context['_seq'] as $context["_key"] => $context["categoryEntree"]) {
            // line 20
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryEntree"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</strong>
                    <br>
                    <span>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryEntree"], "description", [], "any", false, false, false, 25), "html", null, true);
            echo "</span>
                </div>
                <div class=\"col align-self-center\">
                    <strong>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryEntree"], "price", [], "any", false, false, false, 28), "html", null, true);
            echo " €</strong>
                </div>
            </div>
        </div>
        <div class=\"category-custom-separator\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryEntree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
        <div class=\"category-custom mt-5\">
            <h2 id=\"plat\" class=\"text-center\">Plats</h2>
        </div>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["categoryPlat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["categoryPlat"]) {
            // line 39
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <strong>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryPlat"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</strong>
                    <br>
                    <span>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryPlat"], "description", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                </div>
                <div class=\"col align-self-center\">
                    <strong>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryPlat"], "price", [], "any", false, false, false, 47), "html", null, true);
            echo " €</strong>
                </div>
            </div>
        </div>
        <div class=\"category-custom-separator\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryPlat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
        <div class=\"category-custom mt-5\">
            <h2 id=\"dessert\" class=\"text-center\">Desserts</h2>
        </div>
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["categoryDessert"]);
        foreach ($context['_seq'] as $context["_key"] => $context["categoryDessert"]) {
            // line 58
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <strong>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryDessert"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo "</strong>
                    <br>
                    <span>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryDessert"], "description", [], "any", false, false, false, 63), "html", null, true);
            echo "</span>
                </div>
                <div class=\"col align-self-center\">
                    <strong>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryDessert"], "price", [], "any", false, false, false, 66), "html", null, true);
            echo " €</strong>
                </div>
            </div>
        </div>
        <div class=\"category-custom-separator\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryDessert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dish/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 72,  200 => 66,  194 => 63,  189 => 61,  184 => 58,  180 => 57,  174 => 53,  162 => 47,  156 => 44,  151 => 42,  146 => 39,  142 => 38,  136 => 34,  124 => 28,  118 => 25,  113 => 23,  108 => 20,  104 => 19,  93 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Carte{% endblock %}

{% block body %}
    <h1>Carte</h1>


{# {{ form(form) }} #}
    <section class=\"mt-5 container\">
    <a class=\"btn category-custom p-2 m-1\" type=\"button\" href=\"#entree\">ENTREES</a>
    <a class=\"btn category-custom\" type=\"button\" href=\"#plat\">PLATS</a>
    <a class=\"btn category-custom\" type=\"button\" href=\"#dessert\">DESSERTS</a>

        <div class=\"category-custom mt-5\">
            <h2 id=\"entree\" class=\"text-center\">Entrées</h2>
        </div>
        
        {% for categoryEntree in categoryEntree %}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <strong>{{categoryEntree.name}}</strong>
                    <br>
                    <span>{{categoryEntree.description}}</span>
                </div>
                <div class=\"col align-self-center\">
                    <strong>{{categoryEntree.price}} €</strong>
                </div>
            </div>
        </div>
        <div class=\"category-custom-separator\"></div>
        {% endfor %}

        <div class=\"category-custom mt-5\">
            <h2 id=\"plat\" class=\"text-center\">Plats</h2>
        </div>
        {% for categoryPlat in categoryPlat %}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <strong>{{categoryPlat.name}}</strong>
                    <br>
                    <span>{{categoryPlat.description}}</span>
                </div>
                <div class=\"col align-self-center\">
                    <strong>{{categoryPlat.price}} €</strong>
                </div>
            </div>
        </div>
        <div class=\"category-custom-separator\"></div>
        {% endfor %}

        <div class=\"category-custom mt-5\">
            <h2 id=\"dessert\" class=\"text-center\">Desserts</h2>
        </div>
        {% for categoryDessert in categoryDessert %}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <strong>{{categoryDessert.name}}</strong>
                    <br>
                    <span>{{categoryDessert.description}}</span>
                </div>
                <div class=\"col align-self-center\">
                    <strong>{{categoryDessert.price}} €</strong>
                </div>
            </div>
        </div>
        <div class=\"category-custom-separator\"></div>
        {% endfor %}
    </section>
{% endblock %}
", "dish/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\dish\\index.html.twig");
    }
}
