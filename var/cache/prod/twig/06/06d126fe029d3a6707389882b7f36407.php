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

/* components/_hoursComponent.html.twig */
class __TwigTemplate_822930d13c4be10d4fa5d702a0077803 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h4>Horaires de Service</h4>
<table class=\"table-footer table caption-top table-sm table-bordered text-start\">
    <tbody>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "hours", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
            // line 5
            echo "        <tr class=\"text-center\">
            <td>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "dayOfWeek", [], "any", false, false, false, 6), "html", null, true);
            echo "</td>
            ";
            // line 7
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "openedLunchHour", [], "any", false, false, false, 7), "H:i") != "00:00")) {
                // line 8
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "openedLunchHour", [], "any", false, false, false, 8), "H:i"), "html", null, true);
                echo " -";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "closedLunchHour", [], "any", false, false, false, 8), "H:i"), "html", null, true);
                echo "</td>
                <td></td>
                <td>";
                // line 10
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "openedDinnerHour", [], "any", false, false, false, 10), "H:i"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "closedDinnerHour", [], "any", false, false, false, 10), "H:i"), "html", null, true);
                echo "</td>
            ";
            } else {
                // line 12
                echo "                <td colspan=\"3\">Fermé</td>
            ";
            }
            // line 14
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        
    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "components/_hoursComponent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  74 => 14,  70 => 12,  63 => 10,  55 => 8,  53 => 7,  49 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_hoursComponent.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\components\\_hoursComponent.html.twig");
    }
}
