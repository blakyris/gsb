<?php

/* security/login.html.twig */
class __TwigTemplate_8ddde654196312b59ee1f4a5712b98e23f66e34cc7a45b4c3726054ce6211f05 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("base/base-empty-nopadding.html.twig", "security/login.html.twig", 3);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        $context["page_title"] = "Connexion";
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
    <div class=\"login-form\">

      <div class=\"login-form-logo\" style=\"background-image: url(";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/img/logo-gsb.png"), "html", null, true);
            echo ");\">
      </div>

      ";
            // line 17
            if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 17, $this->source); })())) {
                // line 18
                echo "        <div class=\"alert-danger login-form-flash\">
          <i class=\"fas fa-exclamation-triangle\"></i>
          ";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 20, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 20, $this->source); })()), "messageData", array()), "security"), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 23
            echo "
      <h3 class=\"login-form-title text-center\">Connexion</h3>

      <form action=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
            echo "\" method=\"post\">
          <div class=\"login-form-item\">
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\" placeholder=\"Nom d'utilisateur\"/>
          </div>
          <div class=\"login-form-item\">
            <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\"/>
          </div>
          <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
          <div class=\"login-form-item\">
            <button class=\"btn blue-btn square-btn\" type=\"submit\">Connexion</button>
          </div>
      </form>
    </div>
  </div>

  ";
        } else {
            // line 42
            echo "
  <div class=\"login-form-wrapper\">
    <div class=\"login-form\">
      <p>Vous etes deja connecte. Vous serez redirige vers votre compte.</p>
      <meta http-equiv=\"refresh\" content=\"3;url=";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_account");
            echo "\">
    </div>
  </div>

  ";
        }
        // line 51
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 51,  120 => 46,  114 => 42,  97 => 28,  92 => 26,  87 => 23,  81 => 20,  77 => 18,  75 => 17,  69 => 14,  61 => 8,  59 => 7,  56 => 6,  47 => 5,  37 => 3,  35 => 1,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set page_title = 'Connexion' %}

{% extends 'base/base-empty-nopadding.html.twig' %}

{% block content %}

  {% if app.user == null %}



  <div class=\"login-form-wrapper\">
    <div class=\"login-form\">

      <div class=\"login-form-logo\" style=\"background-image: url({{ asset('media/img/logo-gsb.png') }});\">
      </div>

      {% if error %}
        <div class=\"alert-danger login-form-flash\">
          <i class=\"fas fa-exclamation-triangle\"></i>
          {{ error.messageKey|trans(error.messageData, 'security') }}
        </div>
      {% endif %}

      <h3 class=\"login-form-title text-center\">Connexion</h3>

      <form action=\"{{ url('login') }}\" method=\"post\">
          <div class=\"login-form-item\">
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Nom d'utilisateur\"/>
          </div>
          <div class=\"login-form-item\">
            <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\"/>
          </div>
          <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
          <div class=\"login-form-item\">
            <button class=\"btn blue-btn square-btn\" type=\"submit\">Connexion</button>
          </div>
      </form>
    </div>
  </div>

  {% else %}

  <div class=\"login-form-wrapper\">
    <div class=\"login-form\">
      <p>Vous etes deja connecte. Vous serez redirige vers votre compte.</p>
      <meta http-equiv=\"refresh\" content=\"3;url={{ url('user_account') }}\">
    </div>
  </div>

  {% endif %}

{% endblock %}
", "security/login.html.twig", "/Users/sebastien/Sites/gsb/templates/security/login.html.twig");
    }
}
