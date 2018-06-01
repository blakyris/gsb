<?php

/* security/register.html.twig */
class __TwigTemplate_c10bdefb526bc8ae98502c423827cae6f66bb190a462dff377ef9ba2b413ffd2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("base/base.html.twig", "security/register.html.twig", 3);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        // line 1
        $context["page_title"] = "Enregistrer un utilisateur";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<h2>Gestion des utilisateurs</h2>

<button type=\"button\" class=\"btn darkblue-btn square-btn\" data-toggle=\"modal\" data-target=\"#createUserModal\">
  Créer un nouvel utilisateur
</button>


<div class=\"table-wrapper\">
  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom complet</th>
        <th>Email</th>
        <th>Role</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 27
            echo "      <tr>
        <td scope=\"row\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "lastname", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", array()), "html", null, true);
            echo "</td>
        <td>
              ";
            // line 32
            if (twig_in_filter("ROLE_ADMIN", twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, $context["u"], "roles", array())))) {
                echo " Administrateur ";
            }
            // line 33
            echo "        </td>
        <td>
          <div class=\"btn-group\" role=\"group\" aria-label=\"Action Group\">
              <button type=\"button\" class=\"btn darkblue-btn square-btn\">Modifier</button>
              <button class=\"btn red-btn sqaure-btn\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteUserModal";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", array()), "html", null, true);
            echo "\">Supprimer</button>
          </div>
        </td>
      </tr>

      <!-- Delete User Confirmation Modal -->
      <div class=\"modal fade modal-danger\" tabindex=\"-1\" role=\"dialog\" id=\"deleteUserModal";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", array()), "html", null, true);
            echo "\" aria-labelledby=\"deleteUserModal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", array()), "html", null, true);
            echo "\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h5 class=\"modal-title\" id=\"deleteUserModal";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", array()), "html", null, true);
            echo "\">Supprimer un utilisateur</h5>
            </div>
            <div class=\"modal-body\">
              <p>Vous êtes sur le point de supprimer un utilisateur. Cette action est irréversible et entraine la suppression de toutes les données liées a cet utilisateur.</p>
              <p>Etes-vous sûr de vouloir continuer ?</p>
            </div>
            <div class=\"modal-footer\">
              <a class=\"btn red-btn\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("delete_user", array("id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
              <button type=\"button\" class=\"btn darkblue-btn\" data-dismiss=\"modal\">Annuler</button>
            </div>
          </div>
        </div>
      </div>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    </tbody>
  </table>
</div>




<!-- Modal -->
<div class=\"modal fade modal-form\" id=\"createUserModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"createUserModal\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"createUserModal\">Créer un nouvel utilisateur</h5>
      </div>
      <div class=\"modal-body\">

      ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), 'form_start', array("attr" => array("id" => "createUserForm", "class" => "create-user-form")));
        echo "
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), "firstname", array()), 'row');
        echo "
        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), "lastname", array()), 'row');
        echo "
        <p>Date de naissance</p>
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "birthdate", array()), 'row');
        echo "
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), "username", array()), 'row');
        echo "
        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), "email", array()), 'row');
        echo "
        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), "plainPassword", array()), "first", array()), 'row');
        echo "
        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->source); })()), "plainPassword", array()), "second", array()), 'row');
        echo "
        ";
        // line 87
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 87, $this->source); })()), "user", array()), "roles", array()))) {
            // line 88
            echo "          ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->source); })()), "roles", array()), 'row');
            echo "
        ";
        }
        // line 90
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        echo "

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Annuler</button>
        <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"createUserForm\">Créer l'utilisateur</button>
      </div>
    </div>
  </div>
</div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 90,  205 => 88,  203 => 87,  199 => 86,  195 => 85,  191 => 84,  187 => 83,  183 => 82,  178 => 80,  174 => 79,  170 => 78,  152 => 62,  138 => 54,  128 => 47,  119 => 43,  110 => 37,  104 => 33,  100 => 32,  95 => 30,  89 => 29,  85 => 28,  82 => 27,  78 => 26,  56 => 6,  47 => 5,  37 => 3,  35 => 1,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set page_title = 'Enregistrer un utilisateur' %}

{% extends 'base/base.html.twig' %}

{% block content %}

<h2>Gestion des utilisateurs</h2>

<button type=\"button\" class=\"btn darkblue-btn square-btn\" data-toggle=\"modal\" data-target=\"#createUserModal\">
  Créer un nouvel utilisateur
</button>


<div class=\"table-wrapper\">
  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom complet</th>
        <th>Email</th>
        <th>Role</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      {% for u in users %}
      <tr>
        <td scope=\"row\">{{ u.id }}</td>
        <td>{{ u.firstname }} {{ u.lastname }}</td>
        <td>{{ u.email }}</td>
        <td>
              {% if \"ROLE_ADMIN\" in u.roles|keys %} Administrateur {% endif %}
        </td>
        <td>
          <div class=\"btn-group\" role=\"group\" aria-label=\"Action Group\">
              <button type=\"button\" class=\"btn darkblue-btn square-btn\">Modifier</button>
              <button class=\"btn red-btn sqaure-btn\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteUserModal{{ u.id }}\">Supprimer</button>
          </div>
        </td>
      </tr>

      <!-- Delete User Confirmation Modal -->
      <div class=\"modal fade modal-danger\" tabindex=\"-1\" role=\"dialog\" id=\"deleteUserModal{{ u.id }}\" aria-labelledby=\"deleteUserModal{{ u.id }}\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h5 class=\"modal-title\" id=\"deleteUserModal{{ u.id }}\">Supprimer un utilisateur</h5>
            </div>
            <div class=\"modal-body\">
              <p>Vous êtes sur le point de supprimer un utilisateur. Cette action est irréversible et entraine la suppression de toutes les données liées a cet utilisateur.</p>
              <p>Etes-vous sûr de vouloir continuer ?</p>
            </div>
            <div class=\"modal-footer\">
              <a class=\"btn red-btn\" href=\"{{ url('delete_user', { 'id': u.id }) }}\">Supprimer</a>
              <button type=\"button\" class=\"btn darkblue-btn\" data-dismiss=\"modal\">Annuler</button>
            </div>
          </div>
        </div>
      </div>

      {% endfor %}
    </tbody>
  </table>
</div>




<!-- Modal -->
<div class=\"modal fade modal-form\" id=\"createUserModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"createUserModal\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"createUserModal\">Créer un nouvel utilisateur</h5>
      </div>
      <div class=\"modal-body\">

      {{ form_start(form, {'attr': {'id': 'createUserForm', 'class': 'create-user-form'}}) }}
        {{ form_row(form.firstname) }}
        {{ form_row(form.lastname) }}
        <p>Date de naissance</p>
        {{ form_row(form.birthdate) }}
        {{ form_row(form.username) }}
        {{ form_row(form.email) }}
        {{ form_row(form.plainPassword.first) }}
        {{ form_row(form.plainPassword.second) }}
        {% if 'ROLE_ADMIN' in app.user.roles %}
          {{ form_row(form.roles) }}
        {% endif %}
      {{ form_end(form) }}

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Annuler</button>
        <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"createUserForm\">Créer l'utilisateur</button>
      </div>
    </div>
  </div>
</div>




{% endblock %}
", "security/register.html.twig", "/Users/sebastien/Sites/gsb/templates/security/register.html.twig");
    }
}
