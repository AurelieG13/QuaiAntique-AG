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
class __TwigTemplate_a4410556409ef22b2491a21b27ece89f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profile/infos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Page de Profil - infos";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"mb-4\">
    <a type=\"button\" class=\"btn btn-custom\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_home", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 7)]), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit_user", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 27)]), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit_user_allergy", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 46)]), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit_user", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 127)]), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit_user_allergy", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 169)]), "html", null, true);
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
        return array (  336 => 202,  327 => 196,  317 => 189,  308 => 183,  289 => 169,  280 => 163,  266 => 152,  255 => 146,  246 => 140,  228 => 127,  219 => 121,  206 => 110,  199 => 105,  190 => 99,  181 => 93,  171 => 86,  162 => 80,  144 => 67,  135 => 61,  115 => 46,  106 => 40,  88 => 27,  79 => 21,  68 => 12,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/infos.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\profile\\infos.html.twig");
    }
}
