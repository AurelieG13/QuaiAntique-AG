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
class __TwigTemplate_bf1c464901c75a8aafd0ed826d40e506 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_hoursComponent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_hoursComponent.html.twig"));

        // line 1
        echo "<h4>Horaires de Service</h4>
<table class=\"table-footer table caption-top table-sm table-bordered text-start\">
    <tbody>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 4, $this->source); })()), "hours", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
            // line 5
            echo "        <tr>
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  87 => 16,  80 => 14,  76 => 12,  69 => 10,  61 => 8,  59 => 7,  55 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4>Horaires de Service</h4>
<table class=\"table-footer table caption-top table-sm table-bordered text-start\">
    <tbody>
    {% for hour in this.hours %}
        <tr>
            <td>{{ hour.dayOfWeek }}</td>
            {% if hour.openedLunchHour|date(\"H:i\") != '00:00' %}
                <td>{{ hour.openedLunchHour|date(\"H:i\") }} -{{ hour.closedLunchHour|date(\"H:i\")  }}</td>
                <td></td>
                <td>{{ hour.openedDinnerHour|date(\"H:i\")  }} - {{ hour.closedDinnerHour|date(\"H:i\")  }}</td>
            {% else %}
                <td colspan=\"3\">Fermé</td>
            {% endif %}
        </tr>
    {% endfor %}
        
    </tbody>
</table>", "components/_hoursComponent.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\components\\_hoursComponent.html.twig");
    }
}
