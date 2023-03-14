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
class __TwigTemplate_f1c56786f1d00901eb68bacec60a617f extends Template
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
        echo "
        <div class=\"col-12 col-sm-3 col-xl-2 px-sm-2 px-0 d-flex sticky-top sidebar-custom\">
            <div class=\"d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white\">
                <a href=\"/\" class=\"d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none \">
                    <span class=\"fs-5 text-center text-white\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 5), "firstname", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_infos", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "html", null, true);
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
        return array (  67 => 18,  60 => 14,  52 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_sidebar.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\components\\_sidebar.html.twig");
    }
}
