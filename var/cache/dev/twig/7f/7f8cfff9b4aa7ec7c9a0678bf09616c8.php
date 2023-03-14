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

/* admin/admin_user/index.html.twig */
class __TwigTemplate_fa20ac8804f1661fcff122a085200192 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_user/index.html.twig", 1);
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

        echo "Administration - Utilisateurs";
        
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
        echo "
    <div class=\"mb-4\">
        <a type=\"button\" class=\"btn btn-custom\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/arrow-left-circle.svg"), "html", null, true);
        echo "\" alt=\"\">panel d'administration</a>
    </div>

    <h1>Liste des utilisateurs</h1>
    <div class=\"mb-4 mt-4\">
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_addManager");
        echo "\" type=\"button\" class=\"btn btn-custom\">
            Ajouter un manager
        </a>

        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_addAdmin");
        echo "\" type=\"button\" class=\"btn btn-custom\">
            Ajouter un administrateur
        </a>
    </div>

<table class=\"table table-bordered\">
    <thead>
        <tr class=\"text-center\">
            <td>Nom</td>
            <td>Prénom</td>
            <td>Email</td>
            <td>Rôle(s)</td>
            <td colspan=\"2\">Actions</td>
        </tr>
    </thead>
    <tbody>
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 34
            echo "        <tr class=\"text-center\">
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 40
                echo "                    ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 41
                    echo "                        ";
                    $context["name"] = "Administrateur";
                    // line 42
                    echo "                        ";
                    $context["color"] = "danger";
                    // line 43
                    echo "                    ";
                } elseif (($context["role"] == "ROLE_MANAGER")) {
                    // line 44
                    echo "                        ";
                    $context["name"] = "Manager";
                    // line 45
                    echo "                        ";
                    $context["color"] = "warning";
                    // line 46
                    echo "                    ";
                } else {
                    // line 47
                    echo "                        ";
                    $context["name"] = "Membre";
                    // line 48
                    echo "                        ";
                    $context["color"] = "info";
                    // line 49
                    echo "                    ";
                }
                // line 50
                echo "                    <span class=\"badge bg-";
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 50, $this->source); })()), "html", null, true);
                echo " </span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </td>
            <td>
            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-success\">
                Modifier
            </a>
            </td>
            <td>
              <a href=\"#\" type=\"button\" class=\"btn btn-danger modal-trigger-user\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-delete-user\" data-id=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\" data-titre = \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\">
                  Supprimer
              </a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        
    </tbody>
</table>


<!-- Modal -->
<div class=\"modal fade\" id=\"modal-delete-user\" tabindex=\"-1\" aria-labelledby=\"modal-deleteLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"modal-deleteLabel\">Supprimer un utilisateur</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body modal-body-user\">
        
      </div>
      <div class=\"modal-footer modal-footer-user\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\" data-bs-target=\"modal-delete-user\">Fermer</button>
        <a href=\"#\" type=\"button\" class=\"btn btn-custom\">Valider</a>
      </div>
    </div>
  </div>
</div>

    ";
        // line 90
        echo "    <div class=\"navigation\">
        ";
        // line 91
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 91, $this->source); })()));
        echo "
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 91,  245 => 90,  219 => 65,  205 => 59,  197 => 54,  193 => 52,  182 => 50,  179 => 49,  176 => 48,  173 => 47,  170 => 46,  167 => 45,  164 => 44,  161 => 43,  158 => 42,  155 => 41,  152 => 40,  148 => 39,  143 => 37,  139 => 36,  135 => 35,  132 => 34,  128 => 33,  109 => 17,  102 => 13,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration - Utilisateurs{% endblock %}

{% block body %}

    <div class=\"mb-4\">
        <a type=\"button\" class=\"btn btn-custom\" href=\"{{ path('admin_home') }}\"><img src=\"{{ asset('assets/images/arrow-left-circle.svg') }}\" alt=\"\">panel d'administration</a>
    </div>

    <h1>Liste des utilisateurs</h1>
    <div class=\"mb-4 mt-4\">
        <a href=\"{{ path('admin_user_addManager') }}\" type=\"button\" class=\"btn btn-custom\">
            Ajouter un manager
        </a>

        <a href=\"{{ path('admin_user_addAdmin') }}\" type=\"button\" class=\"btn btn-custom\">
            Ajouter un administrateur
        </a>
    </div>

<table class=\"table table-bordered\">
    <thead>
        <tr class=\"text-center\">
            <td>Nom</td>
            <td>Prénom</td>
            <td>Email</td>
            <td>Rôle(s)</td>
            <td colspan=\"2\">Actions</td>
        </tr>
    </thead>
    <tbody>
    {% for user in users %}
        <tr class=\"text-center\">
            <td>{{ user.name }}</td>
            <td>{{ user.firstname }}</td>
            <td>{{ user.email }}</td>
            <td>
                {% for role in user.roles %}
                    {% if role == \"ROLE_ADMIN\" %}
                        {% set name = \"Administrateur\" %}
                        {% set color = \"danger\" %}
                    {% elseif role == \"ROLE_MANAGER\"  %}
                        {% set name = \"Manager\" %}
                        {% set color = \"warning\" %}
                    {% else %}
                        {% set name = \"Membre\" %}
                        {% set color = \"info\" %}
                    {% endif %}
                    <span class=\"badge bg-{{ color }}\"> {{ name }} </span>
                {% endfor %}
            </td>
            <td>
            <a href=\"{{ path('admin_user_edit', {id: user.id}) }}\" type=\"button\" class=\"btn btn-success\">
                Modifier
            </a>
            </td>
            <td>
              <a href=\"#\" type=\"button\" class=\"btn btn-danger modal-trigger-user\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-delete-user\" data-id=\"{{ user.id }}\" data-titre = \"{{ user.id }}\">
                  Supprimer
              </a>
            </td>
        </tr>
    {% endfor %}
        
    </tbody>
</table>


<!-- Modal -->
<div class=\"modal fade\" id=\"modal-delete-user\" tabindex=\"-1\" aria-labelledby=\"modal-deleteLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"modal-deleteLabel\">Supprimer un utilisateur</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body modal-body-user\">
        
      </div>
      <div class=\"modal-footer modal-footer-user\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\" data-bs-target=\"modal-delete-user\">Fermer</button>
        <a href=\"#\" type=\"button\" class=\"btn btn-custom\">Valider</a>
      </div>
    </div>
  </div>
</div>

    {# display navigation #}
    <div class=\"navigation\">
        {{ knp_pagination_render(users) }}
    </div>

{% endblock %}
", "admin/admin_user/index.html.twig", "C:\\xampp\\htdocs\\QuaiAntique-AG\\templates\\admin\\admin_user\\index.html.twig");
    }
}
