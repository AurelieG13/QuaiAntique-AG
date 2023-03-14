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
class __TwigTemplate_7a73c7b26cb1d5af2dc93d5c7a205a5e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dish/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Carte";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  182 => 72,  170 => 66,  164 => 63,  159 => 61,  154 => 58,  150 => 57,  144 => 53,  132 => 47,  126 => 44,  121 => 42,  116 => 39,  112 => 38,  106 => 34,  94 => 28,  88 => 25,  83 => 23,  78 => 20,  74 => 19,  63 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dish/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\dish\\index.html.twig");
    }
}
