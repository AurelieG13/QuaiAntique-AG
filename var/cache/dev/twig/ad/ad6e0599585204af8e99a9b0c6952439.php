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
class __TwigTemplate_884de3bfaa241601bd1b299601b03419 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "a_propos/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "a_propos/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "a_propos/index.html.twig", 1);
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

        echo "Hello MenuController!";
        
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  211 => 102,  180 => 73,  166 => 61,  160 => 58,  154 => 55,  148 => 52,  116 => 23,  110 => 20,  104 => 17,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MenuController!{% endblock %}

{% block body %}
    <h2 class=\"text-center mt-3\">A Propos</h2>
    <section class=\" separator d-flex justify-content-around flex-wrap\">
        <div class=\"card mb-3 mt-3\" style=\"max-width: 540px;\">
            <div class=\"row g-0\">
                <div class=\"col-md-4\">
                    <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"{{ asset('assets/images/cafe.jpg') }}\"  class=\"d-block w-100 custom-img-carousel\"  alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"{{ asset('assets/images/chambery1.jpg') }}\" class=\"d-block w-100 custom-img-carousel\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"{{ asset('assets/images/restoInt1.jpg') }}\" class=\"d-block w-100 custom-img-carousel\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"{{ asset('assets/images/restoInt2.jpg') }}\" class=\"d-block w-100 custom-img-carousel\" alt=\"...\">
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
                                <img src=\"{{ asset('assets/images/chef.jpg') }}\"  class=\"d-block w-100 custom-img-carousel\"  alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"{{ asset('assets/images/partage2.jpg') }}\" class=\"d-block w-100 custom-img-carousel\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"{{ asset('assets/images/saumon1.jpg') }}\" class=\"d-block w-100 custom-img-carousel\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"{{ asset('assets/images/deco.jpg') }}\" class=\"d-block w-100 custom-img-carousel\" alt=\"...\">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <div class=\"separator-custom mt-5\"></div>
 {# A terminer #}
    <h2 class=\"text-center mt-2\">Evenements</h2>
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
                            <a href=\"{{ path('contact_form') }} \" class=\"btn btn-custom  mt-3 mb-3\" type=\"button\">Contact</a>
                        <h5>TELEPHONE</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}", "a_propos/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\a_propos\\index.html.twig");
    }
}
