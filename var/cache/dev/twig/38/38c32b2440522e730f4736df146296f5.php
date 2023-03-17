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

/* admin/index.html.twig */
class __TwigTemplate_fd59eecd2c39ac8433f1357258180b54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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

        echo "Panneau d'administration";
        
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
        echo "<h1>Accuil panneau d'administration</h1>
<main class=\"container\">
    <section class=\"d-flex justify-content-around flex-wrap\">

        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_list");
        echo "\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/contact.svg"), "html", null, true);
        echo "\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Contacts
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dish_list");
        echo "\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dish.svg"), "html", null, true);
        echo "\" class=\"rounded mx-auto d-block align-middle\"  width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer la carte
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu_list");
        echo "\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/menu.svg"), "html", null, true);
        echo "\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer les menus
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_list");
        echo "\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/categorie.svg"), "html", null, true);
        echo "\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer les catégories
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_formule_list");
        echo "\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/formule.svg"), "html", null, true);
        echo "\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer les formules
                    </h5>
                </div>
            </div>
        </a>


        <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hours_list");
        echo "\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/hours.svg"), "html", null, true);
        echo "\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer les horaires
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_restaurant_list");
        echo "\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/restaurant.svg"), "html", null, true);
        echo "\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer le restaurant
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_list");
        echo "\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users.svg"), "html", null, true);
        echo "\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer les utilisateurs
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_allergy_list");
        echo "\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/allergy.svg"), "html", null, true);
        echo "\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer les allergies
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_booking_list");
        echo "\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/allergy.svg"), "html", null, true);
        echo "\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer les réservations
                    </h5>
                </div>
            </div>
        </a>
    </section>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 113,  248 => 110,  237 => 102,  231 => 99,  220 => 91,  214 => 88,  203 => 80,  197 => 77,  186 => 69,  180 => 66,  168 => 57,  162 => 54,  151 => 46,  145 => 43,  134 => 35,  128 => 32,  117 => 24,  111 => 21,  100 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panneau d'administration{% endblock %}

{% block body %}
<h1>Accuil panneau d'administration</h1>
<main class=\"container\">
    <section class=\"d-flex justify-content-around flex-wrap\">

        <a href=\"{{ path('admin_contact_list') }}\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"{{ asset('assets/images/contact.svg') }}\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Contacts
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"{{ path('admin_dish_list') }}\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"{{ asset('assets/images/dish.svg') }}\" class=\"rounded mx-auto d-block align-middle\"  width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer la carte
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"{{ path('admin_menu_list') }}\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"{{ asset('assets/images/menu.svg') }}\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer les menus
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"{{ path('admin_category_list') }}\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"{{ asset('assets/images/categorie.svg') }}\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer les catégories
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"{{ path('admin_formule_list') }}\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"{{ asset('assets/images/formule.svg') }}\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer les formules
                    </h5>
                </div>
            </div>
        </a>


        <a href=\"{{ path('admin_hours_list') }}\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"{{ asset('assets/images/hours.svg') }}\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer les horaires
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"{{ path('admin_restaurant_list') }}\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"{{ asset('assets/images/restaurant.svg') }}\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer le restaurant
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"{{ path('admin_user_list') }}\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"{{ asset('assets/images/users.svg') }}\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer les utilisateurs
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"{{ path('admin_allergy_list') }}\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"{{ asset('assets/images/allergy.svg') }}\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer les allergies
                    </h5>
                </div>
            </div>
        </a>

        <a href=\"{{ path('admin_booking_list') }}\" class=\"text-decoration-none\">
            <div class=\"card mt-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-align\">
                    <img src=\"{{ asset('assets/images/allergy.svg') }}\" class=\"rounded mx-auto d-block align-middle\" width=\"40\" alt=\"...\">
                    <h5 class=\"card-title text-center mt-2\">
                        Administrer les réservations
                    </h5>
                </div>
            </div>
        </a>
    </section>
</main>
{% endblock %}
", "admin/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\admin\\index.html.twig");
    }
}
