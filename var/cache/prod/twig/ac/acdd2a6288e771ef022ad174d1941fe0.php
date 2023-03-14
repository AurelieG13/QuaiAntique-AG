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
class __TwigTemplate_83fc2dbde156abfaba0954e05bbe9431 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Panneau d'administration";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    </section>
</main>
";
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
        return array (  207 => 102,  201 => 99,  190 => 91,  184 => 88,  173 => 80,  167 => 77,  156 => 69,  150 => 66,  138 => 57,  132 => 54,  121 => 46,  115 => 43,  104 => 35,  98 => 32,  87 => 24,  81 => 21,  70 => 13,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\admin\\index.html.twig");
    }
}
