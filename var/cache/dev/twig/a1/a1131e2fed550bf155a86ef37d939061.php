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

/* main/index.html.twig */
class __TwigTemplate_bb94de92afe4577e07c9a038b76ea305 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "
\t<main class=\"container like-dish\">
\t\t<div class=\"col-12 text-center\">
\t\t\t<h1>Bienvenue Au Quai Antique</h1>
\t\t\t<p>Chambéry</p>
\t\t</div>

\t\t<section class=\"d-flex justify-content-around flex-wrap\">
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dishes"]) || array_key_exists("dishes", $context) ? $context["dishes"] : (function () { throw new RuntimeError('Variable "dishes" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
            // line 15
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["dish"], "activeHome", [], "any", false, false, false, 15) == true)) {
                // line 16
                echo "\t\t\t\t\t<div class=\"card mt-4\" style=\"width: 18rem;\">
\t\t\t\t\t";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dish"], "images", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 18
                    echo "\t\t\t\t\t\t<img src=\" ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploads/dish/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 18))), "html", null, true);
                    echo " \" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 18), "html", null, true);
                    echo "\"  class=\"mt-2\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 18), "html", null, true);
                    echo "\">
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 22
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dish'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</section>

\t\t<section class=\"text-center mt-4\">
\t\t\t\t\t<a class=\"btn btn-custom\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_form");
        echo "\" type=\"button\" aria-expanded=\"false\">Réserver</a>
\t\t</section>
\t\t<hr>
\t\t";
        // line 30
        echo "\t\t<section class=\"mt-5\">
\t\t\t<table class=\"table-mobile table-accueil table border-3 justify-content-center\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/mountain_brown.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t<td>Terrasse couverte<br>Vue sur la montagne</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/restaurant-table-and-chairs-svgrepo-com.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t<td>200 Places<br>Salle privative pour évènement</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wheelchair_brown.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t<td>Parking et accès handicapé<br>Dans tout l'établissement</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/parking_brown.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t<td>Parking 80 places<br>Privatisé et sécurisé</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</section>

\t\t";
        // line 54
        echo "\t\t<section>
\t\t\t<div class=\"container d-flex justify-content-center align-items-center table-desktop\">
\t\t\t\t<div class=\"row table-desktop\">
\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t<table  class=\"table-accueil table border-3\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/mountain_brown.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t\t\t\t<td>Terrasse couverte<br>Vue sur la montagne</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/restaurant-table-and-chairs-svgrepo-com.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t\t\t\t<td>200 Places<br>Salle privative pour évènement</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>\t
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-2 img-home\">
\t\t\t\t\t\t<img class=\"img-home\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/restoInt2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t<table class=\"table-accueil table border-3\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wheelchair_brown.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t\t\t\t<td>Parking et accès handicapé<br>Dans tout l'établissement</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\"><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/parking_brown.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t\t\t\t<td>Parking 80 places<br>Privatisé et sécurisé</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>\t
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 84,  220 => 80,  210 => 73,  199 => 65,  192 => 61,  183 => 54,  173 => 46,  166 => 42,  159 => 38,  152 => 34,  146 => 30,  140 => 26,  135 => 23,  129 => 22,  125 => 20,  112 => 18,  108 => 17,  105 => 16,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

\t<main class=\"container like-dish\">
\t\t<div class=\"col-12 text-center\">
\t\t\t<h1>Bienvenue Au Quai Antique</h1>
\t\t\t<p>Chambéry</p>
\t\t</div>

\t\t<section class=\"d-flex justify-content-around flex-wrap\">
\t\t\t{% for dish in dishes %}
\t\t\t\t{% if dish.activeHome == true %}
\t\t\t\t\t<div class=\"card mt-4\" style=\"width: 18rem;\">
\t\t\t\t\t{% for image in dish.images %}
\t\t\t\t\t\t<img src=\" {{ asset('assets/uploads/dish/' ~ image.name ) }} \" alt=\"{{dish.name}}\"  class=\"mt-2\" title=\"{{dish.name}}\">
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</section>

\t\t<section class=\"text-center mt-4\">
\t\t\t\t\t<a class=\"btn btn-custom\" href=\"{{ path('booking_form') }}\" type=\"button\" aria-expanded=\"false\">Réserver</a>
\t\t</section>
\t\t<hr>
\t\t{# vue mobile #}
\t\t<section class=\"mt-5\">
\t\t\t<table class=\"table-mobile table-accueil table border-3 justify-content-center\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\"><img src=\"{{ asset('assets/images/mountain_brown.svg') }}\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t<td>Terrasse couverte<br>Vue sur la montagne</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\"><img src=\"{{ asset('assets/images/restaurant-table-and-chairs-svgrepo-com.svg') }}\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t<td>200 Places<br>Salle privative pour évènement</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\"><img src=\"{{ asset('assets/images/wheelchair_brown.svg') }}\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t<td>Parking et accès handicapé<br>Dans tout l'établissement</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\"><img src=\"{{ asset('assets/images/parking_brown.svg') }}\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t<td>Parking 80 places<br>Privatisé et sécurisé</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</section>

\t\t{# vue desktop #}
\t\t<section>
\t\t\t<div class=\"container d-flex justify-content-center align-items-center table-desktop\">
\t\t\t\t<div class=\"row table-desktop\">
\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t<table  class=\"table-accueil table border-3\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\"><img src=\"{{ asset('assets/images/mountain_brown.svg') }}\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t\t\t\t<td>Terrasse couverte<br>Vue sur la montagne</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\"><img src=\"{{ asset('assets/images/restaurant-table-and-chairs-svgrepo-com.svg') }}\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t\t\t\t<td>200 Places<br>Salle privative pour évènement</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>\t
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-2 img-home\">
\t\t\t\t\t\t<img class=\"img-home\" src=\"{{ asset('assets/images/restoInt2.jpg') }}\" alt=\"\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t<table class=\"table-accueil table border-3\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\"><img src=\"{{ asset('assets/images/wheelchair_brown.svg') }}\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t\t\t\t<td>Parking et accès handicapé<br>Dans tout l'établissement</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\"><img src=\"{{ asset('assets/images/parking_brown.svg') }}\" class=\"icon-table-custom\"></img></th>
\t\t\t\t\t\t\t\t\t<td>Parking 80 places<br>Privatisé et sécurisé</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>\t
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
{% endblock %}
", "main/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\main\\index.html.twig");
    }
}
