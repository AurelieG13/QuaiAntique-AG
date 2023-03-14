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

/* admin/admin_allergy/index.html.twig */
class __TwigTemplate_14de9b15efeedb8af4c282cc28e1a7b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_allergy/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_allergy/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_allergy/index.html.twig", 1);
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

        echo "Administration - Allergies";
        
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
    <div class=\"mb-4\">
        <a type=\"button\" class=\"btn btn-custom\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/arrow-left-circle.svg"), "html", null, true);
        echo "\" alt=\"\">panel d'administration</a>
    </div>

    <h1>Liste des allergies</h1>
    <div class=\"mb-4 mt-4\">
      <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_allergy_add");
        echo "\" type=\"button\" class=\"btn btn-custom\">
        Ajouter une allergie
      </a>
    </div>
            

<table class=\"table table-bordered\">
    <thead>
        <tr class=\"text-center\">
            <td>Nom</td>
            <td colspan=\"2\">Actions</td>
        </tr>
    </thead>
    <tbody>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allergies"]) || array_key_exists("allergies", $context) ? $context["allergies"] : (function () { throw new RuntimeError('Variable "allergies" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["allergy"]) {
            // line 28
            echo "        <tr class=\"text-center\">
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["allergy"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            <td>
            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_allergy_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["allergy"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-success\">
                Modifier
            </a>
            </td>
            <td>
            <a href=\"#\" type=\"button\" class=\"btn btn-danger modal-trigger-allergy\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-delete-allergy\" data-id=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["allergy"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\" data-titre = \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["allergy"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
                Supprimer
            </a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allergy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        
    </tbody>
</table>


<!-- Modal -->
<div class=\"modal fade\" id=\"modal-delete-allergy\" tabindex=\"-1\" aria-labelledby=\"modal-delete-allergyLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"modal-delete-allergyLabel\">Supprimer une allergie</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body modal-body-allergy\">
        
      </div>
      <div class=\"modal-footer modal-footer-allergy\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\" data-bs-target=\"modal-delete-allergy\">Fermer</button>
        <a href=\"#\" type=\"button\" class=\"btn btn-custom\">Valider</a>
      </div>
    </div>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_allergy/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 42,  139 => 36,  131 => 31,  126 => 29,  123 => 28,  119 => 27,  102 => 13,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration - Allergies{% endblock %}

{% block body %}

    <div class=\"mb-4\">
        <a type=\"button\" class=\"btn btn-custom\" href=\"{{ path('admin_home') }}\"><img src=\"{{ asset('assets/images/arrow-left-circle.svg') }}\" alt=\"\">panel d'administration</a>
    </div>

    <h1>Liste des allergies</h1>
    <div class=\"mb-4 mt-4\">
      <a href=\"{{ path('admin_allergy_add') }}\" type=\"button\" class=\"btn btn-custom\">
        Ajouter une allergie
      </a>
    </div>
            

<table class=\"table table-bordered\">
    <thead>
        <tr class=\"text-center\">
            <td>Nom</td>
            <td colspan=\"2\">Actions</td>
        </tr>
    </thead>
    <tbody>
    {% for allergy in allergies %}
        <tr class=\"text-center\">
            <td>{{ allergy.name }}</td>
            <td>
            <a href=\"{{ path('admin_allergy_edit', {id: allergy.id}) }}\" type=\"button\" class=\"btn btn-success\">
                Modifier
            </a>
            </td>
            <td>
            <a href=\"#\" type=\"button\" class=\"btn btn-danger modal-trigger-allergy\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-delete-allergy\" data-id=\"{{ allergy.id }}\" data-titre = \"{{ allergy.id }}\">
                Supprimer
            </a>
            </td>
        </tr>
    {% endfor %}
        
    </tbody>
</table>


<!-- Modal -->
<div class=\"modal fade\" id=\"modal-delete-allergy\" tabindex=\"-1\" aria-labelledby=\"modal-delete-allergyLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"modal-delete-allergyLabel\">Supprimer une allergie</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body modal-body-allergy\">
        
      </div>
      <div class=\"modal-footer modal-footer-allergy\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\" data-bs-target=\"modal-delete-allergy\">Fermer</button>
        <a href=\"#\" type=\"button\" class=\"btn btn-custom\">Valider</a>
      </div>
    </div>
  </div>
</div>

{% endblock %}
", "admin/admin_allergy/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\admin\\admin_allergy\\index.html.twig");
    }
}
