<?php

/* user_account.html.twig */
class __TwigTemplate_09b6e601c0af34485f73bbfb47cee234a2ac70825a71507fe941c971eaeea506 extends Twig_Template
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
        // line 1
        $context["page_title"] = "Mon compte";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "lastname", array()), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "userEditForm", "class" => "user-edit-form")));
        echo "
          <p>Prenom</p>
          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", array()), 'row');
        echo "
          <p>Nom de famille</p>
          ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", array()), 'row');
        echo "
          <p>Date de naissance</p>
          ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birthdate", array()), 'row');
        echo "
          <p>Nom d'utilisateur</p>
          ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", array()), 'row');
        echo "
          <p>Adresse electronique</p>
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'row');
        echo "
          ";
        // line 48
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "roles", array()))) {
            // line 49
            echo "          <p>Roles</p>
            ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "roles", array()), 'row');
            echo "
          ";
        }
        // line 52
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
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
        return array (  118 => 52,  113 => 50,  110 => 49,  108 => 48,  104 => 47,  99 => 45,  94 => 43,  89 => 41,  84 => 39,  79 => 37,  51 => 14,  45 => 11,  38 => 6,  35 => 5,  31 => 3,  29 => 1,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user_account.html.twig", "/Users/sebastien/Sites/gsb/templates/user_account.html.twig");
    }
}
