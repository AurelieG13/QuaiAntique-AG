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

/* admin/admin_dish/index.html.twig */
class __TwigTemplate_e288ba548cb0872a5eb25922c68bcccd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_dish/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_dish/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_dish/index.html.twig", 1);
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

        echo "Administration - Carte";
        
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
        echo "\" alt=\"\"> panneau d'administration</a>
  </div>

  <h1>Liste des plats</h1>

  <div class=\"mb-4 mt-4\">
    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dish_add");
        echo "\" type=\"button\" class=\"btn btn-custom\">
      Ajouter un plat
    </a>
  </div>
  ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "words", [], "any", false, false, false, 19), 'row');
        echo "
        <section>
            <button type=\"submit\" class=\"btn btn-custom btn-lg my-3\">Rechercher</button>
    </section>
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "categorie", [], "any", false, false, false, 23), 'row');
        echo "
  ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
  <table class=\"table table-bordered\">
      <thead>
          <tr class=\"text-center\">
              <td>Catégorie</td>
              <td>Nom</td>
              <td>Description</td>
              <td>Image</td>
              <td>Prix</td>
              <td>Présent sur Accueil</td>
              <td colspan=\"2\" class=\"text-center\"></td>
          </tr>
      </thead>
      <tbody>
      ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dishes"]) || array_key_exists("dishes", $context) ? $context["dishes"] : (function () { throw new RuntimeError('Variable "dishes" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
            // line 39
            echo "          <tr class=\"text-center\">
              <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dish"], "categorie", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
              <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
              <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
              
              <td>
              ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dish"], "images", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 46
                echo "                <img src=\" ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploads/dish/mini/30x30-" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 46))), "html", null, true);
                echo " \" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 46), "html", null, true);
                echo "\" width=\"30\" class=\"mt-2\">
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "              </td>
              <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 49), "html", null, true);
            echo " €</td>
              <td>
              <div class=\"form-check form-switch \">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\" ";
            // line 52
            echo ((twig_get_attribute($this->env, $this->source, $context["dish"], "activeHome", [], "any", false, false, false, 52)) ? ("checked") : (""));
            echo " data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\">
                <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\"></label>
              </div>
              
              </td>
              <td>
              <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dish_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-success\">
                  Modifier
              </a>
              </td>
              <td>
            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dish_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-danger\">
                Supprimer
            </a>
              </td>
          </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dish'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "      </tbody>
  </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_dish/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 69,  206 => 63,  198 => 58,  187 => 52,  181 => 49,  178 => 48,  167 => 46,  163 => 45,  157 => 42,  153 => 41,  149 => 40,  146 => 39,  142 => 38,  125 => 24,  121 => 23,  114 => 19,  110 => 18,  103 => 14,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration - Carte{% endblock %}

{% block body %}

  <div class=\"mb-4\">
    <a type=\"button\" class=\"btn btn-custom\" href=\"{{ path('admin_home') }}\"><img src=\"{{ asset('assets/images/arrow-left-circle.svg') }}\" alt=\"\"> panneau d'administration</a>
  </div>

  <h1>Liste des plats</h1>

  <div class=\"mb-4 mt-4\">
    <a href=\"{{ path('admin_dish_add') }}\" type=\"button\" class=\"btn btn-custom\">
      Ajouter un plat
    </a>
  </div>
  {{ form_start(form) }}
    {{ form_row(form.words)}}
        <section>
            <button type=\"submit\" class=\"btn btn-custom btn-lg my-3\">Rechercher</button>
    </section>
    {{ form_row(form.categorie)}}
  {{ form_end(form) }}
  <table class=\"table table-bordered\">
      <thead>
          <tr class=\"text-center\">
              <td>Catégorie</td>
              <td>Nom</td>
              <td>Description</td>
              <td>Image</td>
              <td>Prix</td>
              <td>Présent sur Accueil</td>
              <td colspan=\"2\" class=\"text-center\"></td>
          </tr>
      </thead>
      <tbody>
      {% for dish in dishes %}
          <tr class=\"text-center\">
              <td>{{ dish.categorie.name }}</td>
              <td>{{ dish.name }}</td>
              <td>{{ dish.description }}</td>
              
              <td>
              {% for image in dish.images %}
                <img src=\" {{ asset('assets/uploads/dish/mini/30x30-' ~ image.name ) }} \" alt=\"{{dish.name}}\" width=\"30\" class=\"mt-2\">
              {% endfor %}
              </td>
              <td>{{ dish.price }} €</td>
              <td>
              <div class=\"form-check form-switch \">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\" {{ (dish.activeHome) ? 'checked':''}} data-id=\"{{ dish.id }}\">
                <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\"></label>
              </div>
              
              </td>
              <td>
              <a href=\"{{ path('admin_dish_edit', {id: dish.id}) }}\" type=\"button\" class=\"btn btn-success\">
                  Modifier
              </a>
              </td>
              <td>
            <a href=\"{{ path('admin_dish_delete', {id: dish.id}) }}\" type=\"button\" class=\"btn btn-danger\">
                Supprimer
            </a>
              </td>
          </tr>
      {% endfor %}
      </tbody>
  </table>

{% endblock %}
", "admin/admin_dish/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\admin\\admin_dish\\index.html.twig");
    }
}
