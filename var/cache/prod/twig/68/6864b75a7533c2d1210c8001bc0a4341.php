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
class __TwigTemplate_ac0031282498afc6de25b0da50552a8b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["dishes"] ?? null));
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
\t\t\t\t\t<button class=\"btn btn-custom\" href=\"#\" type=\"button\" aria-expanded=\"false\">Réserver</button>
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
        return array (  194 => 84,  187 => 80,  177 => 73,  166 => 65,  159 => 61,  150 => 54,  140 => 46,  133 => 42,  126 => 38,  119 => 34,  113 => 30,  105 => 23,  99 => 22,  95 => 20,  82 => 18,  78 => 17,  75 => 16,  72 => 15,  68 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\main\\index.html.twig");
    }
}
