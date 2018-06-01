<?php

/* user_account.html.twig */
class __TwigTemplate_69f871231b4c1dfb08f48ecd17ca82aca24c9b281c8bc795d6820ce79edc44dc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("base/base-nopadding.html.twig", "user_account.html.twig", 3);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base-nopadding.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user_account.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user_account.html.twig"));

        // line 1
        $context["page_title"] = "Mon compte";
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
  <div class=\"user-profile\">

    <div class=\"user-profile-banner\">
      <div class=\"user-profile-picture\">
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/img/default-user-picture.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"\">
        <h3>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "user", array()), "lastname", array()), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn blue-btn square-btn\" data-toggle=\"modal\" data-target=\"#editAccountModal\">
          Editer le profil
        </button>
      </div>
    </div>

    <div class=\"user-profile-details\">
      <div>

      </div>
    </div>

  </div>

  <!-- Edit Account Modal -->
  <div class=\"modal fade modal-form\" id=\"editAccountModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editAccountModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"editAccountModal\">Editer le profil</h5>
        </div>
        <div class=\"modal-body\">
        ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), 'form_start', array("attr" => array("id" => "userEditForm", "class" => "user-edit-form")));
        echo "
          <p>Prenom</p>
          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "firstname", array()), 'row');
        echo "
          <p>Nom de famille</p>
          ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "lastname", array()), 'row');
        echo "
          <p>Date de naissance</p>
          ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "birthdate", array()), 'row');
        echo "
          <p>Nom d'utilisateur</p>
          ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "username", array()), 'row');
        echo "
          <p>Adresse electronique</p>
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "email", array()), 'row');
        echo "
          ";
        // line 48
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 48, $this->source); })()), "user", array()), "roles", array()))) {
            // line 49
            echo "          <p>Roles</p>
            ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "roles", array()), 'row');
            echo "
          ";
        }
        // line 52
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), 'form_end', array("render_rest" => false));
        echo "
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Annuler</button>
          <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"userEditForm\">Enregistrer les modifications</button>
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
        return "user_account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 52,  131 => 50,  128 => 49,  126 => 48,  122 => 47,  117 => 45,  112 => 43,  107 => 41,  102 => 39,  97 => 37,  69 => 14,  63 => 11,  56 => 6,  47 => 5,  37 => 3,  35 => 1,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set page_title = 'Mon compte' %}

{% extends 'base/base-nopadding.html.twig' %}

{% block content %}

  <div class=\"user-profile\">

    <div class=\"user-profile-banner\">
      <div class=\"user-profile-picture\">
        <img src=\"{{ asset('media/img/default-user-picture.jpg') }}\">
      </div>
      <div class=\"\">
        <h3>{{ app.user.firstname }} {{ app.user.lastname }}</h3>
        <button type=\"button\" class=\"btn blue-btn square-btn\" data-toggle=\"modal\" data-target=\"#editAccountModal\">
          Editer le profil
        </button>
      </div>
    </div>

    <div class=\"user-profile-details\">
      <div>

      </div>
    </div>

  </div>

  <!-- Edit Account Modal -->
  <div class=\"modal fade modal-form\" id=\"editAccountModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editAccountModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"editAccountModal\">Editer le profil</h5>
        </div>
        <div class=\"modal-body\">
        {{ form_start(form, {'attr': {'id': 'userEditForm', 'class': 'user-edit-form'}}) }}
          <p>Prenom</p>
          {{ form_row(form.firstname) }}
          <p>Nom de famille</p>
          {{ form_row(form.lastname) }}
          <p>Date de naissance</p>
          {{ form_row(form.birthdate) }}
          <p>Nom d'utilisateur</p>
          {{ form_row(form.username) }}
          <p>Adresse electronique</p>
          {{ form_row(form.email) }}
          {% if 'ROLE_ADMIN' in app.user.roles %}
          <p>Roles</p>
            {{ form_row(form.roles) }}
          {% endif %}
        {{ form_end(form, {'render_rest': false}) }}
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Annuler</button>
          <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"userEditForm\">Enregistrer les modifications</button>
        </div>
      </div>
    </div>
  </div>

{% endblock %}
", "user_account.html.twig", "/Users/sebastien/Sites/gsb/templates/user_account.html.twig");
    }
}
