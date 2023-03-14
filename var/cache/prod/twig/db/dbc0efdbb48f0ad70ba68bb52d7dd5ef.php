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

/* components/_footer.html.twig */
class __TwigTemplate_0b7f4f8067b02bc0aaff06222092453b extends Template
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
        echo "<div class=\" footer-custom\">
\t<footer class=\" py-2 my-2  border-top-custom\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col nav text-center justify-content-center\">
\t\t\t\t<a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_form");
        echo " \" class=\"btn btn-custom btn-footer-custom text-center fs-3 pe-2\" type=\"button\">Contact</a>
\t\t\t</div>
\t\t\t<div class=\"col nav justify-content-center\">
\t\t\t\t<span>
\t\t\t\t\t<a class=\"pe-2 btn btn-social-share\">
\t\t\t\t\t\t<i class=\"bi bi-facebook icon-custom\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"pe-2 btn btn-social-share\">
\t\t\t\t\t\t<i class=\"bi bi-twitter icon-custom\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"pe-2 btn btn-social-share\">
\t\t\t\t\t\t<i class=\"bi bi-instagram icon-custom\"></i>
\t\t\t\t\t</a>
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col nav text-center justify-content-center \">
\t\t\t\t<div>
\t\t\t\t\t";
        // line 25
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("_hoursComponent");
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t";
        // line 43
        echo "\t</div>
</div>
<div class=\"text-center border-top-custom\">
\t<div class=\"d-flex justify-content-around\">
\t\t<a href=\"#\" class=\"text-center\">Mentions Légales</a>
\t\t<a href=\"#\" class=\"text-center\">Politique de confidentialité</a>
\t\t<a href=\"#\" class=\"text-center\">Gestion des cookies</a>
\t</div>
\t<span class=\"text-center text-muted\">© 2022 Company, Inc</span>
</div></footer></div>



";
    }

    public function getTemplateName()
    {
        return "components/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 43,  66 => 25,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_footer.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\components\\_footer.html.twig");
    }
}
