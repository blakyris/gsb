<?php

/* base/sidebar/sidebar.html.twig */
class __TwigTemplate_eba9615c4f52fb48eeecfeca90444e4fb13f1096fd1854eb723286b72da1f322 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/sidebar/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/sidebar/sidebar.html.twig"));

        // line 1
        $this->displayBlock('sidebar', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 2
        echo "
<div class=\"sidebar-wrapper\">

  <div class=\"sidebar-user-profile\">
    <div class=\"sidebar-user-picture\" style=\"background-image: url(";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/img/default-user-picture.jpg"), "html", null, true);
        echo ");\"></div>
    <p class=\"sidebar-user-name\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "user", array()), "lastname", array()), "html", null, true);
        echo "</p>
    <p class=\"sidebar-user-role\">
      ";
        // line 9
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "user", array()), "roles", array()))) {
            echo " Administrateur ";
        }
        // line 10
        echo "      ";
        if (twig_in_filter("ROLE_MANAGER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "user", array()), "roles", array()))) {
            echo " Manager ";
        }
        // line 11
        echo "      ";
        if (twig_in_filter("ROLE_DOCTOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "user", array()), "roles", array()))) {
            echo " Docteur ";
        }
        // line 12
        echo "    </p>
    <div class=\"sidebar-user-account text-center\">
      <a class=\"btn blue-btn square-btn\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_account");
        echo "\"><i class=\"fas fa-user\" style=\"margin-right:10px;\"></i>Mon compte</a>
      <a class=\"btn red-btn square-btn\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
        echo "\"><i class=\"fas fa-power-off\"></i></a>
    </div>
  </div>

  <ul class=\"sidebar-nav\">
    ";
        // line 20
        if ((twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "user", array()), "roles", array())) || twig_in_filter("ROLE_MANAGER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "user", array()), "roles", array())))) {
            // line 21
            echo "    <li class=\"sidebar-menu-item\">
      <a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_registration");
            echo "\"><i class=\"fas fa-angle-right\"></i>Gestion des utilisateurs</a>
    </li>
    ";
        }
        // line 25
        echo "    <li class=\"sidebar-menu-item\">
      <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("manufacturers");
        echo "\"><i class=\"fas fa-angle-right\"></i>Laboratoires</a>
    </li>
    <li class=\"sidebar-menu-item\">
      <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("products_list");
        echo "\"><i class=\"fas fa-angle-right\"></i>Catalogue de médicaments</a>
    </li>
    <li class=\"sidebar-menu-item\">
      <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("calendar");
        echo "\"><i class=\"fas fa-angle-right\"></i>Calendrier</a>
    </li>
    <li class=\"sidebar-menu-item\">
      <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("expense_reports");
        echo "\"><i class=\"fas fa-angle-right\"></i>Notes de frais</a>
    </li>
  </ul>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base/sidebar/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 35,  121 => 32,  115 => 29,  109 => 26,  106 => 25,  100 => 22,  97 => 21,  95 => 20,  87 => 15,  83 => 14,  79 => 12,  74 => 11,  69 => 10,  65 => 9,  58 => 7,  54 => 6,  48 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block sidebar %}

<div class=\"sidebar-wrapper\">

  <div class=\"sidebar-user-profile\">
    <div class=\"sidebar-user-picture\" style=\"background-image: url({{ asset('media/img/default-user-picture.jpg') }});\"></div>
    <p class=\"sidebar-user-name\">{{ app.user.firstname }} {{ app.user.lastname }}</p>
    <p class=\"sidebar-user-role\">
      {% if \"ROLE_ADMIN\" in app.user.roles %} Administrateur {% endif %}
      {% if \"ROLE_MANAGER\" in app.user.roles %} Manager {% endif %}
      {% if \"ROLE_DOCTOR\" in app.user.roles %} Docteur {% endif %}
    </p>
    <div class=\"sidebar-user-account text-center\">
      <a class=\"btn blue-btn square-btn\" href=\"{{ url('user_account') }}\"><i class=\"fas fa-user\" style=\"margin-right:10px;\"></i>Mon compte</a>
      <a class=\"btn red-btn square-btn\" href=\"{{ url('logout') }}\"><i class=\"fas fa-power-off\"></i></a>
    </div>
  </div>

  <ul class=\"sidebar-nav\">
    {% if 'ROLE_ADMIN' in app.user.roles or 'ROLE_MANAGER' in app.user.roles %}
    <li class=\"sidebar-menu-item\">
      <a href=\"{{ url('user_registration') }}\"><i class=\"fas fa-angle-right\"></i>Gestion des utilisateurs</a>
    </li>
    {% endif %}
    <li class=\"sidebar-menu-item\">
      <a href=\"{{ url('manufacturers') }}\"><i class=\"fas fa-angle-right\"></i>Laboratoires</a>
    </li>
    <li class=\"sidebar-menu-item\">
      <a href=\"{{ url('products_list') }}\"><i class=\"fas fa-angle-right\"></i>Catalogue de médicaments</a>
    </li>
    <li class=\"sidebar-menu-item\">
      <a href=\"{{ url('calendar') }}\"><i class=\"fas fa-angle-right\"></i>Calendrier</a>
    </li>
    <li class=\"sidebar-menu-item\">
      <a href=\"{{ url('expense_reports') }}\"><i class=\"fas fa-angle-right\"></i>Notes de frais</a>
    </li>
  </ul>

</div>

{% endblock %}
", "base/sidebar/sidebar.html.twig", "/Users/sebastien/Sites/gsb/templates/base/sidebar/sidebar.html.twig");
    }
}
