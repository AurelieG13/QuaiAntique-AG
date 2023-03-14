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
class __TwigTemplate_e6458384ba294dbad2dd57e476966a71 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Page de Profil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "firstname", [], "any", false, false, false, 13), "html", null, true);
        echo "</h3>
                    <p>Gérer vos informations personnelles en cliquant sur <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_infos", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\"> Vos Informations Personnelles</a></p>

                    <section class=\" separator d-flex justify-content-around flex-wrap\">
                        <div class=\"card mt-3\" style=\"width: 18rem;\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-center\">Informations personnelles</h5>
                                <p class=\"card-text\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 20), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
                                <p class=\"card-text\">Téléphone : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phoneNumber", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                                <p class=\"card-text\">Convives : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "guestBooking", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                            </div>
                        </div>

                        <div class=\"card mt-3\" style=\"width: 18rem;\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-center\">Allergies</h5>
                                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "allergies", [], "any", false, false, false, 29));
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
                    <p>Retrouvez toutes vos réservations passées en cliquant sur <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_home");
        echo "\">Vos Réservations</a> </p>
                </div>
            </main>
        </div>
    </div>
</div>


";
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
        return array (  123 => 36,  116 => 31,  107 => 30,  103 => 29,  93 => 22,  89 => 21,  83 => 20,  74 => 14,  70 => 13,  65 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\profile\\index.html.twig");
    }
}
