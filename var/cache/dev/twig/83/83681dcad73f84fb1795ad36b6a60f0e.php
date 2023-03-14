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

/* profile/infos.html.twig */
class __TwigTemplate_d723775a5712e56e24a2ba3a21397a91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/infos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/infos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/infos.html.twig", 1);
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

        echo "Page de Profil - infos";
        
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
        echo "<div class=\"mb-4\">
    <a type=\"button\" class=\"btn btn-custom\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_home", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\">Retour à votre profil</a>
</div>


";
        // line 12
        echo "<main class=\"profile-mobile\">
    <section class=\"card mb-4\">

        <div>
            <h5>Mon identité</h5>
        </div>
        <div class=\"container profile-custom-container\">
            <div class=\"row align-items-center\">
                <div class=\"col-1\">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/usersBeige.svg"), "html", null, true);
        echo "\" class=\"icon-profile-custom\"></img>
                </div>
                <div class=\"col-9 text-center\">
                    <span class=\"align-middle \">Modifier vos informations personnelles</span>
                </div>
                <div class=\"col-1\">
                    <a type=\"button\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit_user", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/arrow-right-circle.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img></a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"card mb-4\">
        <div>
            <h5>Allergies alimentaires</h5>
        </div>
        <div class=\"container profile-custom-container\">
            <div class=\"row align-items-center\">
                <div class=\"col-1\">
                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/allergy_beige.svg"), "html", null, true);
        echo "\" class=\"icon-profile-custom\"></img>
                </div>
                <div class=\"col-9 text-center\">
                    <span class=\"align-middle\">Modifier/Ajouter des allergies</span>
                </div>
                <div class=\"col-1\">
                    <a type=\"button\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit_user_allergy", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/arrow-right-circle.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img></a>
                </div>
            </div>
        </div>
    </section>



    <section class=\"card mb-4\">
        <div>
            <h5>Mon compte</h5>
        </div>
        <div class=\"container profile-custom-container\">
            <div class=\"row align-items-center\">
                <div class=\"col-1\">
                    <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/unlock_beige.svg"), "html", null, true);
        echo "\" class=\"icon-profile-custom\"></img>
                </div>
                <div class=\"col-9 text-center\">
                    <span class=\"align-middle\">Modifier votre mot de passe</span>
                </div>
                <div class=\"col-1\">
                    <a type=\"button\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/arrow-right-circle.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img></a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"card mb-4\">
        <div>
            <h5>Confidentialité</h5>
        </div>
        <div class=\"container profile-custom-container mb-1\">
            <div class=\"row align-items-center\">
                <div class=\"col-1\">
                    <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/privacy_gray.svg"), "html", null, true);
        echo "\" class=\"icon-privacy-custom\"></img>
                </div>
                <div class=\"col-9 text-center\">
                    <span class=\"align-middle\">Informations légales</span>
                </div>
                <div class=\"col-1\">
                    <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/arrow-right-circle.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img>
                </div>
            </div>
        </div>
        <div class=\"container profile-custom-container mb-1\">
            <div class=\"row align-items-center\">
                <div class=\"col-1\">
                    <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-slash_gray.svg"), "html", null, true);
        echo "\" class=\"icon-privacy-custom\"></img>
                </div>
                <div class=\"col-9 text-center\">
                    <span class=\"align-middle\">Supprimer mon compte</span>
                </div>
                <div class=\"col-1\">
                    <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/arrow-right-circle.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img>
                </div>
            </div>
        </div>
    </section>
    <section class=\"text-center\">
        <a class=\"btn btn-custom my-3\" href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" type=\"button\" aria-expanded=\"false\">Me déconnecter</a>
    </section>
</main>

";
        // line 110
        echo "<main class=\"profile-desktop\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <section class=\"card mb-4\">
                    <div>
                        <h5>Mon identité</h5>
                    </div>
                    <div class=\"card-body container profile-custom-container\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-1\">
                                <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/usersBeige.svg"), "html", null, true);
        echo "\" class=\"icon-profile-custom\"></img>
                            </div>
                            <div class=\"col-9 text-center\">
                                <span class=\"align-middle \">Modifier vos informations personnelles</span>
                            </div>
                            <div class=\"col-1\">
                                <a type=\"button\" href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit_user", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127)]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/arrow-right-circle.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img></a>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class=\"card mb-4\">
                    <div>
                        <h5>Mon compte</h5>
                    </div>
                    <div class=\"card-body container profile-custom-container\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-1\">
                                <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/unlock_beige.svg"), "html", null, true);
        echo "\" class=\"icon-profile-custom\"></img>
                            </div>
                            <div class=\"col-9 text-center\">
                                <span class=\"align-middle\">Modifier votre mot de passe</span>
                            </div>
                            <div class=\"col-1\">
                                <a type=\"button\" href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/arrow-right-circle.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=\"text-center\">
                    <a class=\"btn btn-custom my-3\" href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" type=\"button\" aria-expanded=\"false\">Me déconnecter</a>
                </section>
            </div>
            <div class=\"col-6\">
                <section class=\"card mb-4\">
                    <div>
                        <h5>Allergies alimentaires</h5>
                    </div>
                    <div class=\"card-body container profile-custom-container\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-1\">
                                <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/allergy_beige.svg"), "html", null, true);
        echo "\" class=\"icon-profile-custom\"></img>
                            </div>
                            <div class=\"col-9 text-center\">
                                <span class=\"align-middle\">Modifier/Ajouter des allergies</span>
                            </div>
                            <div class=\"col-1\">
                                <a type=\"button\" href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit_user_allergy", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 169, $this->source); })()), "id", [], "any", false, false, false, 169)]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/arrow-right-circle.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img></a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class=\"card mb-4\">
                    <div>
                        <h5>Confidentialité</h5>
                    </div>
                    
                    <div class=\"card-body container profile-custom-container mb-1\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-1\">
                                <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/privacy_gray.svg"), "html", null, true);
        echo "\" class=\"icon-privacy-custom\"></img>
                            </div>
                            <div class=\"col-9 text-center\">
                                <span class=\"align-middle\">Informations légales</span>
                            </div>
                            <div class=\"col-1\">
                                <img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/arrow-right-circle.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body container profile-custom-container mb-1\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-1\">
                                <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-slash_gray.svg"), "html", null, true);
        echo "\" class=\"icon-privacy-custom\"></img>
                            </div>
                            <div class=\"col-9 text-center\">
                                <span class=\"align-middle\">Supprimer mon compte</span>
                            </div>
                            <div class=\"col-1\">
                                <img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/arrow-right-circle.svg"), "html", null, true);
        echo "\" class=\"icon-table-custom\"></img>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profile/infos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 202,  357 => 196,  347 => 189,  338 => 183,  319 => 169,  310 => 163,  296 => 152,  285 => 146,  276 => 140,  258 => 127,  249 => 121,  236 => 110,  229 => 105,  220 => 99,  211 => 93,  201 => 86,  192 => 80,  174 => 67,  165 => 61,  145 => 46,  136 => 40,  118 => 27,  109 => 21,  98 => 12,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page de Profil - infos{% endblock %}

{% block body %}
<div class=\"mb-4\">
    <a type=\"button\" class=\"btn btn-custom\" href=\"{{ path('profile_home', {id: user.id}) }}\">Retour à votre profil</a>
</div>


{# Version mobile #}
<main class=\"profile-mobile\">
    <section class=\"card mb-4\">

        <div>
            <h5>Mon identité</h5>
        </div>
        <div class=\"container profile-custom-container\">
            <div class=\"row align-items-center\">
                <div class=\"col-1\">
                    <img src=\"{{ asset('assets/images/usersBeige.svg') }}\" class=\"icon-profile-custom\"></img>
                </div>
                <div class=\"col-9 text-center\">
                    <span class=\"align-middle \">Modifier vos informations personnelles</span>
                </div>
                <div class=\"col-1\">
                    <a type=\"button\" href=\"{{ path('profile_edit_user', {id: user.id}) }}\"><img src=\"{{ asset('assets/images/arrow-right-circle.svg') }}\" class=\"icon-table-custom\"></img></a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"card mb-4\">
        <div>
            <h5>Allergies alimentaires</h5>
        </div>
        <div class=\"container profile-custom-container\">
            <div class=\"row align-items-center\">
                <div class=\"col-1\">
                    <img src=\"{{ asset('assets/images/allergy_beige.svg') }}\" class=\"icon-profile-custom\"></img>
                </div>
                <div class=\"col-9 text-center\">
                    <span class=\"align-middle\">Modifier/Ajouter des allergies</span>
                </div>
                <div class=\"col-1\">
                    <a type=\"button\" href=\"{{ path('profile_edit_user_allergy', {id: user.id}) }}\"><img src=\"{{ asset('assets/images/arrow-right-circle.svg') }}\" class=\"icon-table-custom\"></img></a>
                </div>
            </div>
        </div>
    </section>



    <section class=\"card mb-4\">
        <div>
            <h5>Mon compte</h5>
        </div>
        <div class=\"container profile-custom-container\">
            <div class=\"row align-items-center\">
                <div class=\"col-1\">
                    <img src=\"{{ asset('assets/images/unlock_beige.svg') }}\" class=\"icon-profile-custom\"></img>
                </div>
                <div class=\"col-9 text-center\">
                    <span class=\"align-middle\">Modifier votre mot de passe</span>
                </div>
                <div class=\"col-1\">
                    <a type=\"button\" href=\"{{ path('app_forgot_password_request') }}\"><img src=\"{{ asset('assets/images/arrow-right-circle.svg') }}\" class=\"icon-table-custom\"></img></a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"card mb-4\">
        <div>
            <h5>Confidentialité</h5>
        </div>
        <div class=\"container profile-custom-container mb-1\">
            <div class=\"row align-items-center\">
                <div class=\"col-1\">
                    <img src=\"{{ asset('assets/images/privacy_gray.svg') }}\" class=\"icon-privacy-custom\"></img>
                </div>
                <div class=\"col-9 text-center\">
                    <span class=\"align-middle\">Informations légales</span>
                </div>
                <div class=\"col-1\">
                    <img src=\"{{ asset('assets/images/arrow-right-circle.svg') }}\" class=\"icon-table-custom\"></img>
                </div>
            </div>
        </div>
        <div class=\"container profile-custom-container mb-1\">
            <div class=\"row align-items-center\">
                <div class=\"col-1\">
                    <img src=\"{{ asset('assets/images/user-slash_gray.svg') }}\" class=\"icon-privacy-custom\"></img>
                </div>
                <div class=\"col-9 text-center\">
                    <span class=\"align-middle\">Supprimer mon compte</span>
                </div>
                <div class=\"col-1\">
                    <img src=\"{{ asset('assets/images/arrow-right-circle.svg') }}\" class=\"icon-table-custom\"></img>
                </div>
            </div>
        </div>
    </section>
    <section class=\"text-center\">
        <a class=\"btn btn-custom my-3\" href=\"{{ path('logout') }}\" type=\"button\" aria-expanded=\"false\">Me déconnecter</a>
    </section>
</main>

{# Version desktop #}
<main class=\"profile-desktop\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <section class=\"card mb-4\">
                    <div>
                        <h5>Mon identité</h5>
                    </div>
                    <div class=\"card-body container profile-custom-container\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-1\">
                                <img src=\"{{ asset('assets/images/usersBeige.svg') }}\" class=\"icon-profile-custom\"></img>
                            </div>
                            <div class=\"col-9 text-center\">
                                <span class=\"align-middle \">Modifier vos informations personnelles</span>
                            </div>
                            <div class=\"col-1\">
                                <a type=\"button\" href=\"{{ path('profile_edit_user', {id: user.id}) }}\"><img src=\"{{ asset('assets/images/arrow-right-circle.svg') }}\" class=\"icon-table-custom\"></img></a>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class=\"card mb-4\">
                    <div>
                        <h5>Mon compte</h5>
                    </div>
                    <div class=\"card-body container profile-custom-container\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-1\">
                                <img src=\"{{ asset('assets/images/unlock_beige.svg') }}\" class=\"icon-profile-custom\"></img>
                            </div>
                            <div class=\"col-9 text-center\">
                                <span class=\"align-middle\">Modifier votre mot de passe</span>
                            </div>
                            <div class=\"col-1\">
                                <a type=\"button\" href=\"{{ path('app_forgot_password_request') }}\"><img src=\"{{ asset('assets/images/arrow-right-circle.svg') }}\" class=\"icon-table-custom\"></img></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=\"text-center\">
                    <a class=\"btn btn-custom my-3\" href=\"{{ path('logout')}}\" type=\"button\" aria-expanded=\"false\">Me déconnecter</a>
                </section>
            </div>
            <div class=\"col-6\">
                <section class=\"card mb-4\">
                    <div>
                        <h5>Allergies alimentaires</h5>
                    </div>
                    <div class=\"card-body container profile-custom-container\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-1\">
                                <img src=\"{{ asset('assets/images/allergy_beige.svg') }}\" class=\"icon-profile-custom\"></img>
                            </div>
                            <div class=\"col-9 text-center\">
                                <span class=\"align-middle\">Modifier/Ajouter des allergies</span>
                            </div>
                            <div class=\"col-1\">
                                <a type=\"button\" href=\"{{ path('profile_edit_user_allergy', {id: user.id}) }}\"><img src=\"{{ asset('assets/images/arrow-right-circle.svg') }}\" class=\"icon-table-custom\"></img></a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class=\"card mb-4\">
                    <div>
                        <h5>Confidentialité</h5>
                    </div>
                    
                    <div class=\"card-body container profile-custom-container mb-1\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-1\">
                                <img src=\"{{ asset('assets/images/privacy_gray.svg') }}\" class=\"icon-privacy-custom\"></img>
                            </div>
                            <div class=\"col-9 text-center\">
                                <span class=\"align-middle\">Informations légales</span>
                            </div>
                            <div class=\"col-1\">
                                <img src=\"{{ asset('assets/images/arrow-right-circle.svg') }}\" class=\"icon-table-custom\"></img>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body container profile-custom-container mb-1\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-1\">
                                <img src=\"{{ asset('assets/images/user-slash_gray.svg') }}\" class=\"icon-privacy-custom\"></img>
                            </div>
                            <div class=\"col-9 text-center\">
                                <span class=\"align-middle\">Supprimer mon compte</span>
                            </div>
                            <div class=\"col-1\">
                                <img src=\"{{ asset('assets/images/arrow-right-circle.svg') }}\" class=\"icon-table-custom\"></img>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
{% endblock %}
", "profile/infos.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\profile\\infos.html.twig");
    }
}
