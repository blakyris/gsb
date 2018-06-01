<?php

/* security/register.html.twig */
class __TwigTemplate_aee5e011afc0f517ead76638b8eba6e2dbecccad8a75acb561bbb80f8b93d5d1 extends Twig_Template
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
        // line 1
        $context["page_title"] = "Enregistrer un utilisateur";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "createUserForm", "class" => "create-user-form")));
        echo "
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", array()), 'row');
        echo "
        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", array()), 'row');
        echo "
        <p>Date de naissance</p>
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birthdate", array()), 'row');
        echo "
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", array()), 'row');
        echo "
        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'row');
        echo "
        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "first", array()), 'row');
        echo "
        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "second", array()), 'row');
        echo "
        ";
        // line 87
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "roles", array()))) {
            // line 88
            echo "          ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "roles", array()), 'row');
            echo "
        ";
        }
        // line 90
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        return array (  193 => 90,  187 => 88,  185 => 87,  181 => 86,  177 => 85,  173 => 84,  169 => 83,  165 => 82,  160 => 80,  156 => 79,  152 => 78,  134 => 62,  120 => 54,  110 => 47,  101 => 43,  92 => 37,  86 => 33,  82 => 32,  77 => 30,  71 => 29,  67 => 28,  64 => 27,  60 => 26,  38 => 6,  35 => 5,  31 => 3,  29 => 1,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/register.html.twig", "/Users/sebastien/Sites/gsb/templates/security/register.html.twig");
    }
}
