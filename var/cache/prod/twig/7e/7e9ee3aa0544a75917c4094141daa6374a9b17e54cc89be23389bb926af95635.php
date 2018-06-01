<?php

/* base/sidebar/sidebar.html.twig */
class __TwigTemplate_6404073a79cd50d68975253d664c69cf039729d6692b6e7fce2a890ad149a2b9 extends Twig_Template
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
        // line 1
        $this->displayBlock('sidebar', $context, $blocks);
    }

    public function block_sidebar($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "lastname", array()), "html", null, true);
        echo "</p>
    <p class=\"sidebar-user-role\">
      ";
        // line 9
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "roles", array()))) {
            echo " Administrateur ";
        }
        // line 10
        echo "      ";
        if (twig_in_filter("ROLE_MANAGER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "roles", array()))) {
            echo " Manager ";
        }
        // line 11
        echo "      ";
        if (twig_in_filter("ROLE_DOCTOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "roles", array()))) {
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
        if ((twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "roles", array())) || twig_in_filter("ROLE_MANAGER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "roles", array())))) {
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
    }

    public function getTemplateName()
    {
        return "base/sidebar/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  103 => 32,  97 => 29,  91 => 26,  88 => 25,  82 => 22,  79 => 21,  77 => 20,  69 => 15,  65 => 14,  61 => 12,  56 => 11,  51 => 10,  47 => 9,  40 => 7,  36 => 6,  30 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/sidebar/sidebar.html.twig", "/Users/sebastien/Sites/gsb/templates/base/sidebar/sidebar.html.twig");
    }
}
