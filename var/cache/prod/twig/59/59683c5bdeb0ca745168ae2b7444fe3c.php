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

/* a_propos/index.html.twig */
class __TwigTemplate_f31b15b248b974bce65cf305d0bf80ef extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "a_propos/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello MenuController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h2 class=\"text-center mt-3\">A Propos</h2>
    <section class=\" separator d-flex justify-content-around flex-wrap\">
        <div class=\"card mb-3 mt-3\" style=\"max-width: 540px;\">
            <div class=\"row g-0\">
                <div class=\"col-md-4\">
                    <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cafe.jpg"), "html", null, true);
        echo "\"  class=\"d-block w-100 custom-img-carousel\"  alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chambery1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100 custom-img-carousel\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/restoInt1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100 custom-img-carousel\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/restoInt2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100 custom-img-carousel\" alt=\"...\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Notre Restaurant</h5>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat pellentesque condimentum. Vivamus imperdiet felis sit amet ex lacinia laoreet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=\"d-flex justify-content-around flex-wrap\">
        <div class=\"card mb-3 mt-3\" style=\"max-width: 540px;\">
            <div class=\"row g-0\">
            <div class=\"col-md-8\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-center\">Notre Chef</h5>
                    <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat pellentesque condimentum. Vivamus imperdiet felis sit amet ex lacinia laoreet.</p>
                </div>
                </div>
                <div class=\"col-md-4\">
                    <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chef.jpg"), "html", null, true);
        echo "\"  class=\"d-block w-100 custom-img-carousel\"  alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/partage2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100 custom-img-carousel\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/saumon1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100 custom-img-carousel\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/deco.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100 custom-img-carousel\" alt=\"...\">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <div class=\"separator-custom mt-5\"></div>
 ";
        // line 73
        echo "    <h2 class=\"text-center mt-2\">Evenements</h2>
    <section class=\"separator d-flex justify-content-around flex-wrap\">
        <div class=\"card mb-3\" style=\"max-width: 540px;\">
            <div class=\"row g-0\">
                <div class=\"col-md-4\">
                <img src=\"...\" class=\"img-fluid rounded-start\" alt=\"...\">
                </div>
                <div class=\"col-md-8\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
                </div>
                </div>
            </div>
            </div>
    </section>

    <div class=\"separator-custom mt-5\"></div>
    <h2 class=\"text-center mt-2\">Contact</h2>
    <section class=\"d-flex justify-content-around text-center\">
        <div class=\"card mb-3\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"card-body\">
                        <h6 class=\"card-text\">Une question ? </h6>
                        <h6 class=\"card-text\">Une demande particulière ? </h6>
                        <h6 class=\"card-text\">Un devis pour un évènement ?</h6>
                        <h5 class=\"card-text\">N'hesitez pas, Contactez-nous !</h5>
                            <a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_form");
        echo " \" class=\"btn btn-custom  mt-3 mb-3\" type=\"button\">Contact</a>
                        <h5>TELEPHONE</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "a_propos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 102,  150 => 73,  136 => 61,  130 => 58,  124 => 55,  118 => 52,  86 => 23,  80 => 20,  74 => 17,  68 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "a_propos/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\a_propos\\index.html.twig");
    }
}
