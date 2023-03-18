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
class __TwigTemplate_d72f6c9e23b769e4e4f2266a3ee44128 extends Template
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
    <a class=\"btn category-custom p-2 m-1\" type=\"button\" href=\"#plat\">PLATS</a>
    <a class=\"btn category-custom p-2 m-1\" type=\"button\" href=\"#dessert\">DESSERTS</a>
    <a class=\"btn category-custom p-2 m-1\" type=\"button\" href=\"#boisson\">BOISSONS</a>

        <div class=\"category-custom mt-5\">
            <h2 id=\"entree\" class=\"text-center\">Entrées</h2>
        </div>
        
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["categoryEntree"]);
        foreach ($context['_seq'] as $context["_key"] => $context["categoryEntree"]) {
            // line 21
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <strong>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryEntree"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</strong>
                    <br>
                    <span>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryEntree"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</span>
                </div>
                <div class=\"col align-self-center\">
                    <strong>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryEntree"], "price", [], "any", false, false, false, 29), "html", null, true);
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
        // line 35
        echo "
        <div class=\"category-custom mt-5\">
            <h2 id=\"plat\" class=\"text-center\">Plats</h2>
        </div>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["categoryPlat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["categoryPlat"]) {
            // line 40
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <strong>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryPlat"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo "</strong>
                    <br>
                    <span>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryPlat"], "description", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>
                </div>
                <div class=\"col align-self-center\">
                    <strong>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryPlat"], "price", [], "any", false, false, false, 48), "html", null, true);
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
        // line 54
        echo "
        <div class=\"category-custom mt-5\">
            <h2 id=\"dessert\" class=\"text-center\">Desserts</h2>
        </div>
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["categoryDessert"]);
        foreach ($context['_seq'] as $context["_key"] => $context["categoryDessert"]) {
            // line 59
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <strong>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryDessert"], "name", [], "any", false, false, false, 62), "html", null, true);
            echo "</strong>
                    <br>
                    <span>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryDessert"], "description", [], "any", false, false, false, 64), "html", null, true);
            echo "</span>
                </div>
                <div class=\"col align-self-center\">
                    <strong>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryDessert"], "price", [], "any", false, false, false, 67), "html", null, true);
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
        // line 73
        echo "
        <div class=\"category-custom mt-5\">
            <h2 id=\"boisson\" class=\"text-center\">Boissons</h2>
        </div>
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["categoryBoisson"]);
        foreach ($context['_seq'] as $context["_key"] => $context["categoryBoisson"]) {
            // line 78
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <strong>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryBoisson"], "name", [], "any", false, false, false, 81), "html", null, true);
            echo "</strong>
                    <br>
                    <span>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryBoisson"], "description", [], "any", false, false, false, 83), "html", null, true);
            echo "</span>
                </div>
                <div class=\"col align-self-center\">
                    <strong>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryBoisson"], "price", [], "any", false, false, false, 86), "html", null, true);
            echo " €</strong>
                </div>
            </div>
        </div>
        <div class=\"category-custom-separator\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryBoisson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
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
        return array (  251 => 92,  239 => 86,  233 => 83,  228 => 81,  223 => 78,  219 => 77,  213 => 73,  201 => 67,  195 => 64,  190 => 62,  185 => 59,  181 => 58,  175 => 54,  163 => 48,  157 => 45,  152 => 43,  147 => 40,  143 => 39,  137 => 35,  125 => 29,  119 => 26,  114 => 24,  109 => 21,  105 => 20,  93 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    <a class=\"btn category-custom p-2 m-1\" type=\"button\" href=\"#plat\">PLATS</a>
    <a class=\"btn category-custom p-2 m-1\" type=\"button\" href=\"#dessert\">DESSERTS</a>
    <a class=\"btn category-custom p-2 m-1\" type=\"button\" href=\"#boisson\">BOISSONS</a>

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

        <div class=\"category-custom mt-5\">
            <h2 id=\"boisson\" class=\"text-center\">Boissons</h2>
        </div>
        {% for categoryBoisson in categoryBoisson %}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <strong>{{categoryBoisson.name}}</strong>
                    <br>
                    <span>{{categoryBoisson.description}}</span>
                </div>
                <div class=\"col align-self-center\">
                    <strong>{{categoryBoisson.price}} €</strong>
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
