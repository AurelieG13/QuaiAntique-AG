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
class __TwigTemplate_cb656ffb72907a61b5b394279a01763d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_dish/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Administration - Carte";
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "words", [], "any", false, false, false, 19), 'row');
        echo "
        <section>
            <button type=\"submit\" class=\"btn btn-custom btn-lg my-3\">Rechercher</button>
    </section>
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categorie", [], "any", false, false, false, 23), 'row');
        echo "
  ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        $context['_seq'] = twig_ensure_traversable(($context["dishes"] ?? null));
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
        return array (  188 => 69,  176 => 63,  168 => 58,  157 => 52,  151 => 49,  148 => 48,  137 => 46,  133 => 45,  127 => 42,  123 => 41,  119 => 40,  116 => 39,  112 => 38,  95 => 24,  91 => 23,  84 => 19,  80 => 18,  73 => 14,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/admin_dish/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\admin\\admin_dish\\index.html.twig");
    }
}
