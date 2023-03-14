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

/* components/_sidebar.html.twig */
class __TwigTemplate_29d46d0fc04061516f60c482462b6a55 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_sidebar.html.twig"));

        // line 1
        echo "
        <div class=\"col-12 col-sm-3 col-xl-2 px-sm-2 px-0 d-flex sticky-top sidebar-custom\">
            <div class=\"d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white\">
                <a href=\"/\" class=\"d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none \">
                    <span class=\"fs-5 text-center text-white\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "firstname", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
        echo " </span>
                </a>
                <ul class=\"nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start\" id=\"menu\">
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_home");
        echo "\" class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-house text-white\"></i><span class=\"ms-1 d-none d-sm-inline text-white\">Accueil</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_infos", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\"  class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-speedometer2 text-white\"></i><span class=\"ms-1 d-none d-sm-inline text-white\">Vos informations personnelles</span></a>
                    </li>
                    <li>
                        <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_home");
        echo "\" class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-table text-white\"></i><span class=\"ms-1 d-none d-sm-inline text-white\">Vos réservations</span></a>
                    </li>
                    
                </ul>
            </div>
        </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  66 => 14,  58 => 9,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        <div class=\"col-12 col-sm-3 col-xl-2 px-sm-2 px-0 d-flex sticky-top sidebar-custom\">
            <div class=\"d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white\">
                <a href=\"/\" class=\"d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none \">
                    <span class=\"fs-5 text-center text-white\">{{app.user.firstname}} {{app.user.name}} </span>
                </a>
                <ul class=\"nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start\" id=\"menu\">
                    <li class=\"nav-item\">
                        <a href=\"{{path('profile_home')}}\" class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-house text-white\"></i><span class=\"ms-1 d-none d-sm-inline text-white\">Accueil</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('profile_infos', {id: app.user.id}) }}\"  class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-speedometer2 text-white\"></i><span class=\"ms-1 d-none d-sm-inline text-white\">Vos informations personnelles</span></a>
                    </li>
                    <li>
                        <a href=\"{{path('profile_home')}}\" class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-table text-white\"></i><span class=\"ms-1 d-none d-sm-inline text-white\">Vos réservations</span></a>
                    </li>
                    
                </ul>
            </div>
        </div>", "components/_sidebar.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\components\\_sidebar.html.twig");
    }
}
