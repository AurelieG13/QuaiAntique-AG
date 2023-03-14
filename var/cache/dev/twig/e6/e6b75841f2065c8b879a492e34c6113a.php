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

/* components/_navbar.html.twig */
class __TwigTemplate_25ad3649098e977b5a660c5b1daeb1e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light \">
\t<div class=\"container-fluid nav-custom dropdown-center\">
\t\t<a class=\"navbar-brand \" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img class=\"logo-nav d-flex\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Logo.png"), "html", null, true);
        echo "\" alt=\"Logo Entreprise\"></a>
\t\t<div class=\"dropdown\">
\t\t\t<a class=\"navbar-toggler dropdown-toggle\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\" role=\"button\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t<span class=\"navbar-text\">
\t\t\t\t\t<i class=\"bi bi-person-circle icon-connect\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu\">
\t\t\t";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_home");
            echo "\">Mon compte</a></li>
\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Se déconnecter</a></li>
\t\t\t\t";
            // line 14
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 15
                echo "\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_home");
                echo "\">Panel d'administration</a></li>
\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t
\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Se connecter</a></li>
\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">S'inscrire</a></li>
\t\t\t";
        }
        // line 22
        echo "\t\t\t</ul>
\t\t</div>
\t\t
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"container-fluid align-item-center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t<span class=\"navbar-text collapse navbar-collapse justify-content-center title-desktop-custom\">Le Quai Antique</span>
\t\t\t\t</div>
\t\t\t\t";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t\t\t\t<div class=\"col-2 my-auto\">
\t\t\t\t\t\t<div class=\"navbar-text collapse navbar-collapse text-home-custom\">
\t\t\t\t\t\t\t<span class=\"text-center \">Bienvenue <strong> ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "firstname", [], "any", false, false, false, 36), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</strong></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-1 dropdown navbar-text collapse navbar-collapse\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" role=\"button\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"navbar-text\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-person-circle icon-connect\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_home");
            echo "\">Mon compte</a></li>
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Se déconnecter</a></li>
\t\t\t\t\t\t";
            // line 48
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 49
                echo "\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_home");
                echo "\">Panel d'administration</a></li>
\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t<div class=\"col-2 my-auto\">
\t\t\t\t\t\t<a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"navbar-text collapse navbar-collapse justify-content-end\">
\t\t\t\t\t\t\t<span class=\"icon-connect-text\">Identifiez-vous</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-2 my-auto\">
\t\t\t\t\t\t<a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" class=\"navbar-text collapse navbar-collapse justify-content-end\">
\t\t\t\t\t\t\t<span class=\"icon-connect-text\">S'inscrire</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 65
        echo "\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"d-flex flex-row p-2\">
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav w-100 justify-content-around\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link btn-menu-custom text-center fs-3\" aria-current=\"page\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link btn-menu-custom text-center fs-3\" href=\"#\">Réserver</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link btn-menu-custom text-center fs-3\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dish_list");
        echo "\">Carte</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link btn-menu-custom text-center fs-3\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menu_list");
        echo "\">Menus</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link  btn-menu-custom text-center fs-3\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("a_propos");
        echo "\">A propos</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</nav>
<div class=\"navbar navbar-expand-lg navbar-light bg-light container-fluid justify-content-center\">
\t<button class=\"navbar-toggler btn btn-custom\" href=\"#\" type=\"button\" aria-expanded=\"false\">
\t\t<span class=\"navbar-text\">Réserver</span>
\t</button>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 85,  195 => 82,  189 => 79,  180 => 73,  170 => 65,  162 => 60,  154 => 55,  151 => 54,  146 => 51,  140 => 49,  138 => 48,  134 => 47,  130 => 46,  115 => 36,  111 => 34,  109 => 33,  96 => 22,  91 => 20,  86 => 19,  82 => 17,  76 => 15,  74 => 14,  70 => 13,  65 => 12,  63 => 11,  54 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light \">
\t<div class=\"container-fluid nav-custom dropdown-center\">
\t\t<a class=\"navbar-brand \" href=\"{{ path('home')}}\"><img class=\"logo-nav d-flex\" src=\"{{ asset('assets/images/Logo.png') }}\" alt=\"Logo Entreprise\"></a>
\t\t<div class=\"dropdown\">
\t\t\t<a class=\"navbar-toggler dropdown-toggle\" href=\"{{ path('register')}}\" role=\"button\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t<span class=\"navbar-text\">
\t\t\t\t\t<i class=\"bi bi-person-circle icon-connect\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu\">
\t\t\t{% if app.user %}
\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('profile_home') }}\">Mon compte</a></li>
\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('register')}}\">Se déconnecter</a></li>
\t\t\t\t{% if is_granted('ROLE_ADMIN')  %}
\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('admin_home')}}\">Panel d'administration</a></li>
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t{% else %}
\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('login')}}\">Se connecter</a></li>
\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('register')}}\">S'inscrire</a></li>
\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t\t
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"container-fluid align-item-center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t<span class=\"navbar-text collapse navbar-collapse justify-content-center title-desktop-custom\">Le Quai Antique</span>
\t\t\t\t</div>
\t\t\t\t{% if app.user %}
\t\t\t\t\t<div class=\"col-2 my-auto\">
\t\t\t\t\t\t<div class=\"navbar-text collapse navbar-collapse text-home-custom\">
\t\t\t\t\t\t\t<span class=\"text-center \">Bienvenue <strong> {{app.user.firstname}} {{app.user.name}}</strong></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-1 dropdown navbar-text collapse navbar-collapse\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" role=\"button\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"navbar-text\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-person-circle icon-connect\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('profile_home') }}\">Mon compte</a></li>
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('logout') }}\">Se déconnecter</a></li>
\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN')  %}
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('admin_home')}}\">Panel d'administration</a></li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"col-2 my-auto\">
\t\t\t\t\t\t<a href=\"{{ path('login') }}\" class=\"navbar-text collapse navbar-collapse justify-content-end\">
\t\t\t\t\t\t\t<span class=\"icon-connect-text\">Identifiez-vous</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-2 my-auto\">
\t\t\t\t\t\t<a href=\"{{ path('register') }}\" class=\"navbar-text collapse navbar-collapse justify-content-end\">
\t\t\t\t\t\t\t<span class=\"icon-connect-text\">S'inscrire</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"d-flex flex-row p-2\">
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav w-100 justify-content-around\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link btn-menu-custom text-center fs-3\" aria-current=\"page\" href=\"{{ path('home')}}\">Accueil</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link btn-menu-custom text-center fs-3\" href=\"#\">Réserver</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link btn-menu-custom text-center fs-3\" href=\"{{ path('dish_list') }}\">Carte</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link btn-menu-custom text-center fs-3\" href=\"{{ path('menu_list') }}\">Menus</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link  btn-menu-custom text-center fs-3\" href=\"{{ path('a_propos') }}\">A propos</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</nav>
<div class=\"navbar navbar-expand-lg navbar-light bg-light container-fluid justify-content-center\">
\t<button class=\"navbar-toggler btn btn-custom\" href=\"#\" type=\"button\" aria-expanded=\"false\">
\t\t<span class=\"navbar-text\">Réserver</span>
\t</button>
</div>

", "components/_navbar.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\components\\_navbar.html.twig");
    }
}
