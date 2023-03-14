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

/* admin/admin_menu/index.html.twig */
class __TwigTemplate_1b4671dd28ad33bd3697e8c3b77f9e6d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_menu/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_menu/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_menu/index.html.twig", 1);
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

        echo "Administration - Menus";
        
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
        echo "  <div class=\"mb-4\">
    <a type=\"button\" class=\"btn btn-custom\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/arrow-left-circle.svg"), "html", null, true);
        echo "\" alt=\"\"> panneau d'administration</a>
  </div>

  <h1>Liste des menus</h1>
  <div class=\"mb-4 mt-4\">
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu_add");
        echo "\" type=\"button\" class=\"btn btn-custom\">
      Ajouter un menu
    </a>
    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_formule_list");
        echo "\" type=\"button\" class=\"btn btn-custom\">
      Gérer les formules
    </a>
  </div>

  <table class=\"table table-bordered\">
      <thead>
          <tr class=\"text-center\">
              <td>Nom</td>
              <td>Description</td>
              <td>Image</td>
              <td colspan=\"2\">Actions</td>
              <td colspan=\"3\">Formules</td>
              
              
          </tr>
      </thead>
      <tbody>
      ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 34
            echo "          <tr class=\"text-center\">
              <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
              <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
              <td>
              ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "images", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 39
                echo "                <img src=\" ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploads/menu/mini/30x30-" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 39))), "html", null, true);
                echo " \" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 39), "html", null, true);
                echo "\" width=\"30\" class=\"mt-2\">
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "              </td>
              <td>
              <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-success\">
                  Modifier
              </a>
              </td>
              <td>
              <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-danger\">
                Supprimer
            </a>
              </td>
                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "formules", [], "any", false, false, false, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["formule"]) {
                // line 53
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "          </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "          
      </tbody>
  </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_menu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 57,  191 => 55,  182 => 53,  178 => 52,  171 => 48,  163 => 43,  159 => 41,  148 => 39,  144 => 38,  139 => 36,  135 => 35,  132 => 34,  128 => 33,  107 => 15,  101 => 12,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration - Menus{% endblock %}

{% block body %}
  <div class=\"mb-4\">
    <a type=\"button\" class=\"btn btn-custom\" href=\"{{ path('admin_home') }}\"><img src=\"{{ asset('assets/images/arrow-left-circle.svg') }}\" alt=\"\"> panneau d'administration</a>
  </div>

  <h1>Liste des menus</h1>
  <div class=\"mb-4 mt-4\">
    <a href=\"{{ path('admin_menu_add') }}\" type=\"button\" class=\"btn btn-custom\">
      Ajouter un menu
    </a>
    <a href=\"{{ path('admin_formule_list') }}\" type=\"button\" class=\"btn btn-custom\">
      Gérer les formules
    </a>
  </div>

  <table class=\"table table-bordered\">
      <thead>
          <tr class=\"text-center\">
              <td>Nom</td>
              <td>Description</td>
              <td>Image</td>
              <td colspan=\"2\">Actions</td>
              <td colspan=\"3\">Formules</td>
              
              
          </tr>
      </thead>
      <tbody>
      {% for menu in menus %}
          <tr class=\"text-center\">
              <td>{{ menu.name }}</td>
              <td>{{ menu.description }}</td>
              <td>
              {% for image in menu.images %}
                <img src=\" {{ asset('assets/uploads/menu/mini/30x30-' ~ image.name ) }} \" alt=\"{{menu.name}}\" width=\"30\" class=\"mt-2\">
              {% endfor %}
              </td>
              <td>
              <a href=\"{{ path('admin_menu_edit', {id: menu.id}) }}\" type=\"button\" class=\"btn btn-success\">
                  Modifier
              </a>
              </td>
              <td>
              <a href=\"{{ path('admin_menu_delete', {id: menu.id}) }}\" type=\"button\" class=\"btn btn-danger\">
                Supprimer
            </a>
              </td>
                {% for formule in menu.formules %}
                    <td>{{ formule.name }}</td>
                {% endfor %}
          </tr>
      {% endfor %}
          
      </tbody>
  </table>

{% endblock %}
", "admin/admin_menu/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\admin\\admin_menu\\index.html.twig");
    }
}
