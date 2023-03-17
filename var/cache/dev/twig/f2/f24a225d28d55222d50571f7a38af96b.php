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

/* profile/index.html.twig */
class __TwigTemplate_e0fb70a2514838e0549bdd0fa701e1a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
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

        echo "Page de Profil";
        
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
<div class=\"container-fluid overflow-hidden\">
    <div class=\"row vh-100 overflow-auto\">
        ";
        // line 9
        $this->loadTemplate("components/_sidebar.html.twig", "profile/index.html.twig", 9)->display($context);
        // line 10
        echo "        <div class=\"col d-flex flex-column h-sm-100\">
            <main class=\"row overflow-auto\">
                <div class=\"col pt-4\">
                    <h3 class=\"text-center\" >Bienvenue sur votre profil ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "firstname", [], "any", false, false, false, 13), "html", null, true);
        echo "</h3>
                    <p>Gérer vos informations personnelles en cliquant sur <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_infos", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\"> Vos Informations Personnelles</a></p>

                    <section class=\" separator d-flex justify-content-around flex-wrap\">
                        <div class=\"card mt-3\" style=\"width: 18rem;\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-center\">Informations personnelles</h5>
                                <p class=\"card-text\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "firstname", [], "any", false, false, false, 20), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
                                <p class=\"card-text\">Téléphone : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "phoneNumber", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                                <p class=\"card-text\">Convives : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "guestBooking", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                            </div>
                        </div>

                        <div class=\"card mt-3\" style=\"width: 18rem;\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-center\">Allergies</h5>
                                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "allergies", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["allergy"]) {
            // line 30
            echo "                                    <li class=\"custom-allergy-list\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["allergy"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allergy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                              
                            </div>
                        </div>
                    </section>
                    <hr>
                    <p>Retrouvez toutes vos réservations passées ci-dessous: </p>

                    <table class=\"table table-bordered\">
    <thead>
        <tr class=\"text-center\">
            <td>Date de réservation</td>
            <td>Heure de réservation</td>
            <td>Nombre de convives</td>
        </tr>
    </thead>
    <tbody>
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "booking", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 48
            echo "        <tr class=\"text-center\">
            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "dateBooking", [], "any", false, false, false, 49), "d/m/y"), "html", null, true);
            echo "</td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "timeBooking", [], "any", false, false, false, 50), "H:i"), "html", null, true);
            echo "</td>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "seats", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        
    </tbody>
</table>
                </div>
            </main>
        </div>
    </div>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 54,  179 => 51,  175 => 50,  171 => 49,  168 => 48,  164 => 47,  146 => 31,  137 => 30,  133 => 29,  123 => 22,  119 => 21,  113 => 20,  104 => 14,  100 => 13,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page de Profil{% endblock %}

{% block body %}

<div class=\"container-fluid overflow-hidden\">
    <div class=\"row vh-100 overflow-auto\">
        {% include \"components/_sidebar.html.twig\" %}
        <div class=\"col d-flex flex-column h-sm-100\">
            <main class=\"row overflow-auto\">
                <div class=\"col pt-4\">
                    <h3 class=\"text-center\" >Bienvenue sur votre profil {{app.user.firstname}}</h3>
                    <p>Gérer vos informations personnelles en cliquant sur <a href=\"{{ path('profile_infos', {id: app.user.id}) }}\"> Vos Informations Personnelles</a></p>

                    <section class=\" separator d-flex justify-content-around flex-wrap\">
                        <div class=\"card mt-3\" style=\"width: 18rem;\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-center\">Informations personnelles</h5>
                                <p class=\"card-text\">{{user.firstname}} {{user.name}}</p>
                                <p class=\"card-text\">Téléphone : {{user.phoneNumber}}</p>
                                <p class=\"card-text\">Convives : {{user.guestBooking}}</p>
                            </div>
                        </div>

                        <div class=\"card mt-3\" style=\"width: 18rem;\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-center\">Allergies</h5>
                                {% for allergy in user.allergies %}
                                    <li class=\"custom-allergy-list\">{{ allergy.name}}</li>
                                {% endfor %}                              
                            </div>
                        </div>
                    </section>
                    <hr>
                    <p>Retrouvez toutes vos réservations passées ci-dessous: </p>

                    <table class=\"table table-bordered\">
    <thead>
        <tr class=\"text-center\">
            <td>Date de réservation</td>
            <td>Heure de réservation</td>
            <td>Nombre de convives</td>
        </tr>
    </thead>
    <tbody>
    {% for booking in user.booking %}
        <tr class=\"text-center\">
            <td>{{ booking.dateBooking|date('d/m/y') }}</td>
            <td>{{ booking.timeBooking|date('H:i') }}</td>
            <td>{{ booking.seats }}</td>
        </tr>
    {% endfor %}
        
    </tbody>
</table>
                </div>
            </main>
        </div>
    </div>
</div>


{% endblock %}
", "profile/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\profile\\index.html.twig");
    }
}
