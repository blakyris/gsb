<?php

/* security/register_admin_user.html.twig */
class __TwigTemplate_6194bd818a224aae9aec0f7ce7523ad12b2546edf7147a0a49c3ab4b4ce1238c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("base/base-empty-nopadding.html.twig", "security/register_admin_user.html.twig", 3);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base-empty-nopadding.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register_admin_user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register_admin_user.html.twig"));

        // line 1
        $context["page_title"] = "Créer le super utilisateur";
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
  ";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "user", array()) == null)) {
            // line 8
            echo "
  <div class=\"login-form-wrapper\">
    <div class=\"login-form\" style=\"top: 5%; margin-bottom: 10px;\">

      <div class=\"login-form-logo\" style=\"background-image: url(";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/img/logo-gsb.png"), "html", null, true);
            echo ");\">
      </div>

      <h3 class=\"login-form-title text-center\">Créer l'administrateur</h3>

      <div class=\"form-wrapper\">
        ";
            // line 18
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', array("attr" => array("id" => "createUserForm", "class" => "create-user-form")));
            echo "
          ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "firstname", array()), 'row');
            echo "
          ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "lastname", array()), 'row');
            echo "
          <p>Date de naissance</p>
          ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "birthdate", array()), 'row');
            echo "
          ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "username", array()), 'row');
            echo "
          ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "email", array()), 'row');
            echo "
          ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "plainPassword", array()), "first", array()), 'row');
            echo "
          ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "plainPassword", array()), "second", array()), 'row');
            echo "
          ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "roles", array()), 'row');
            echo "
        ";
            // line 28
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
            echo "
      </div>

      <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"createUserForm\">Créer l'utilisateur</button>

    </div>
  </div>

  ";
        } else {
            // line 37
            echo "
  <div class=\"login-form-wrapper\">
    <div class=\"login-form\">
      <p>Vous n'êtes pas autorisé a accéder a cette ressource.</p>
      <meta http-equiv=\"refresh\" content=\"3;url=";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_account");
            echo "\">
    </div>
  </div>

  ";
        }
        // line 46
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/register_admin_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 46,  131 => 41,  125 => 37,  113 => 28,  109 => 27,  105 => 26,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  84 => 20,  80 => 19,  76 => 18,  67 => 12,  61 => 8,  59 => 7,  56 => 6,  47 => 5,  37 => 3,  35 => 1,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set page_title = 'Créer le super utilisateur' %}

{% extends 'base/base-empty-nopadding.html.twig' %}

{% block content %}

  {% if app.user == null %}

  <div class=\"login-form-wrapper\">
    <div class=\"login-form\" style=\"top: 5%; margin-bottom: 10px;\">

      <div class=\"login-form-logo\" style=\"background-image: url({{ asset('media/img/logo-gsb.png') }});\">
      </div>

      <h3 class=\"login-form-title text-center\">Créer l'administrateur</h3>

      <div class=\"form-wrapper\">
        {{ form_start(form, {'attr': {'id': 'createUserForm', 'class': 'create-user-form'}}) }}
          {{ form_row(form.firstname) }}
          {{ form_row(form.lastname) }}
          <p>Date de naissance</p>
          {{ form_row(form.birthdate) }}
          {{ form_row(form.username) }}
          {{ form_row(form.email) }}
          {{ form_row(form.plainPassword.first) }}
          {{ form_row(form.plainPassword.second) }}
          {{ form_row(form.roles) }}
        {{ form_end(form) }}
      </div>

      <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"createUserForm\">Créer l'utilisateur</button>

    </div>
  </div>

  {% else %}

  <div class=\"login-form-wrapper\">
    <div class=\"login-form\">
      <p>Vous n'êtes pas autorisé a accéder a cette ressource.</p>
      <meta http-equiv=\"refresh\" content=\"3;url={{ url('user_account') }}\">
    </div>
  </div>

  {% endif %}

{% endblock %}
", "security/register_admin_user.html.twig", "/Users/sebastien/Sites/gsb/templates/security/register_admin_user.html.twig");
    }
}
