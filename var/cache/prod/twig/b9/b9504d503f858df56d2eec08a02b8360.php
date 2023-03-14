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

/* profile/editAllergy.html.twig */
class __TwigTemplate_fa5bfabd6dabd83ea63e3a0f83a1bb58 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profile/editAllergy.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Page de Profil - Allergies";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container-fluid overflow-hidden\">
    <div class=\"row vh-100 overflow-auto\">
        ";
        // line 8
        $this->loadTemplate("components/_sidebar.html.twig", "profile/editAllergy.html.twig", 8)->display($context);
        // line 9
        echo "        <div class=\"col d-flex flex-column h-sm-100\">
            <main class=\"row overflow-auto\">
                <div class=\"col pt-4\">
                    <h3>Modification de vos allergies</h3>
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_home");
        echo "\" type=\"button\" class=\"btn btn-custom my-3\">Retour</a>

                    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "allergies", [], "any", false, false, false, 16), 'row');
        echo "
                        <button class=\"btn btn-custom\">Modifier</button>
                    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                </div>
            </main>
        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "profile/editAllergy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  79 => 16,  75 => 15,  70 => 13,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/editAllergy.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\profile\\editAllergy.html.twig");
    }
}
