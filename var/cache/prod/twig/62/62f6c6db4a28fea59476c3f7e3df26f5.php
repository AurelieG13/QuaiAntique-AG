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

/* admin/admin_formule/index.html.twig */
class __TwigTemplate_d46fc5f96b32fbaa4ea7031b92d34517 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_formule/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Administration - Formules";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <div class=\"mb-4\">
      <a type=\"button\" class=\"btn btn-custom\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/arrow-left-circle.svg"), "html", null, true);
        echo "\" alt=\"\"> panneau d'administration</a>
  </div>

  <h1>Liste des formules</h1>
  <div class=\"mb-4 mt-4\">
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_formule_add");
        echo "\" type=\"button\" class=\"btn btn-custom\">
      Ajouter une formule
    </a>
    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu_list");
        echo "\" type=\"button\" class=\"btn btn-custom\">
      Gérer les menus
    </a>
  </div>

<table class=\"table table-bordered\">
    <thead>
        <tr class=\"text-center\">
            <td>Nom</td>
            <td>Sous-titre</td>
            <td>Description</td>
            <td>Prix</td>
            <td colspan=\"2\">Actions</td>
        </tr>
    </thead>
    <tbody>
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["formules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["formule"]) {
            // line 32
            echo "        <tr class=\"text-center\">
            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "subtitle", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "price", [], "any", false, false, false, 36), "html", null, true);
            echo " €</td>
            <td>
            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_formule_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["formule"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-success\">
                Modifier
            </a>
            </td>
            <td>
            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_formule_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["formule"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-danger\">
                Supprimer
            </a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "admin/admin_formule/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 49,  128 => 43,  120 => 38,  115 => 36,  111 => 35,  107 => 34,  103 => 33,  100 => 32,  96 => 31,  77 => 15,  71 => 12,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/admin_formule/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\admin\\admin_formule\\index.html.twig");
    }
}
