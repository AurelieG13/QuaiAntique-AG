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

/* admin/admin_hours/index.html.twig */
class __TwigTemplate_a5ea8ff28818f3e1c6a78aee72345dc2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_hours/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Administration - Horaires";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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

  <h1>Liste des horaires</h1>
  <div class=\"mb-4 mt-4\">
    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hours_add");
        echo "\" type=\"button\" class=\"btn btn-custom\">
    Ajouter un horaire
    </a>
  </div>

  <table class=\"table table-bordered\">
      <thead>
          <tr class=\"text-center\">
              <td>Jour</td>
              <td>Placement Semaine</td>
              <td>Midi début</td>
              <td>Midi fin</td>
              <td>Soir début</td>
              <td>Soir fin</td>
              <td colspan=\"3\">Actions</td>
          </tr>
      </thead>
      <tbody>
      ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hours"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
            // line 32
            echo "          <tr class=\"text-center\">
              <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "dayOfWeek", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
              <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "sortWeek", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
              <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "openedLunchHour", [], "any", false, false, false, 35), "H:i"), "html", null, true);
            echo "</td>
              <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "closedLunchHour", [], "any", false, false, false, 36), "H:i"), "html", null, true);
            echo "</td>
              <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "openedDinnerHour", [], "any", false, false, false, 37), "H:i"), "html", null, true);
            echo "</td>
              <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "closedDinnerHour", [], "any", false, false, false, 38), "H:i"), "html", null, true);
            echo "</td>

              <td>
              <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hours_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["hour"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-success\">
                  Modifier
              </a>
              </td>
              <td>
                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hours_duplicate", ["id" => twig_get_attribute($this->env, $this->source, $context["hour"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-warning\">
                    Dupliquer
                </a>
              </td>
              <td>
              <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hours_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["hour"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-danger\">
                Supprimer
            </a>
              </td>
          </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "          
      </tbody>
  </table>


";
    }

    public function getTemplateName()
    {
        return "admin/admin_hours/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 57,  142 => 51,  134 => 46,  126 => 41,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  100 => 33,  97 => 32,  93 => 31,  72 => 13,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/admin_hours/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\admin\\admin_hours\\index.html.twig");
    }
}
