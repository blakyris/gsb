<?php

/* products_list.html.twig */
class __TwigTemplate_7ee85486131fceff25e5ad774c07e0ee9eb8279766ee3508c6f05d0ba27123f3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 5
        $this->parent = $this->loadTemplate("base/base.html.twig", "products_list.html.twig", 5);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products_list.html.twig"));

        // line 2
        $context["page_title"] = "Liste des médicaments";
        // line 3
        $context["thumbnail_path"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "getSchemeAndHttpHost", array(), "method") . "/media/img/products-thumbnails/");
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
<h2 class=\"text-center\" style=\"margin-top:20px;\">Catalogue de médicaments</h2>

<button type=\"button\" class=\"btn darkblue-btn square-btn\" data-toggle=\"modal\" data-target=\"#productAddModal\">
  Ajouter un produit
</button>

<div class=\"products-list\">
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
            echo "
  <div class=\"list-item\">
    <div class=\"list-item-thumbnail\" style=\"background-image:url('";
            // line 19
            echo twig_escape_filter($this->env, ((isset($context["thumbnail_path"]) || array_key_exists("thumbnail_path", $context) ? $context["thumbnail_path"] : (function () { throw new Twig_Error_Runtime('Variable "thumbnail_path" does not exist.', 19, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["product"], "thumbnail", array())), "html", null, true);
            echo "');\"></div>
    <div class=\"list-item-footer\">
      <div class=\"list-item-details\">
        <h4>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", array()), "html", null, true);
            echo "</h4>
        <div class=\"list-item-price\">
          <p>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", array()), "html", null, true);
            echo " €<p>
          </div>
        </div>
        <div class=\"list-item-action\">
          <div class=\"btn-group text-center\">
            <button type=\"button\" class=\"btn darkblue-btn square-btn\" data-toggle=\"modal\" data-target=\"#productDetailModal-";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", array()), "html", null, true);
            echo "\"><i class=\"fas fa-angle-double-right fa-margin-right\"></i>Détails</button>
            <button type=\"button\" class=\"btn darkblue-btn dropdown-toggle dropdown-toggle-split square-btn\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" href=\"#\"><i class=\"far fa-edit fa-margin-right\"></i>Modifier le produit</a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item text-danger\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("delete_product", array("id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", array()))), "html", null, true);
            echo "\"><i class=\"far fa-trash-alt fa-margin-right\"></i>Supprimer</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Details Modal -->
    <div class=\"modal fade product-details-modal\" id=\"productDetailModal-";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productDetailModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"productDetailModalLabel\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", array()), "html", null, true);
            echo "</h5>
          </div>
          <div class=\"modal-body\">
            <div class=\"single-product-thumbnail\" style=\"background-image:url('";
            // line 51
            echo twig_escape_filter($this->env, ((isset($context["thumbnail_path"]) || array_key_exists("thumbnail_path", $context) ? $context["thumbnail_path"] : (function () { throw new Twig_Error_Runtime('Variable "thumbnail_path" does not exist.', 51, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["product"], "thumbnail", array())), "html", null, true);
            echo "');\"></div>
            <div class=\"single-product-details\">

            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
          </div>
        </div>
      </div>
    </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
    <!-- Product Add Modal -->
    <div class=\"modal fade modal-form\" id=\"productAddModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productAddModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"productAddModalLabel\">Ajouter un produit</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body\">

            ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), 'form_start', array("attr" => array("id" => "createProductForm", "class" => "create-product-form")));
        echo "
              ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "name", array()), 'row');
        echo "
              ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), "description", array()), 'row');
        echo "
              ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), "price", array()), 'row');
        echo "
              ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), "thumbnail", array()), 'row');
        echo "
            ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
        echo "

          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
            <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"createProductForm\">Ajouter le produit</button>
          </div>
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
        return "products_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 82,  179 => 81,  175 => 80,  171 => 79,  167 => 78,  163 => 77,  148 => 64,  129 => 51,  123 => 48,  116 => 44,  105 => 36,  95 => 29,  87 => 24,  82 => 22,  76 => 19,  72 => 17,  68 => 16,  58 => 8,  49 => 7,  39 => 5,  37 => 3,  35 => 2,  15 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% set page_title = 'Liste des médicaments' %}
{% set thumbnail_path = app.request.getSchemeAndHttpHost() ~ \"/media/img/products-thumbnails/\" %}

{% extends 'base/base.html.twig' %}

{% block content %}

<h2 class=\"text-center\" style=\"margin-top:20px;\">Catalogue de médicaments</h2>

<button type=\"button\" class=\"btn darkblue-btn square-btn\" data-toggle=\"modal\" data-target=\"#productAddModal\">
  Ajouter un produit
</button>

<div class=\"products-list\">
  {% for product in products %}

  <div class=\"list-item\">
    <div class=\"list-item-thumbnail\" style=\"background-image:url('{{ thumbnail_path ~ product.thumbnail }}');\"></div>
    <div class=\"list-item-footer\">
      <div class=\"list-item-details\">
        <h4>{{ product.name }}</h4>
        <div class=\"list-item-price\">
          <p>{{ product.price }} €<p>
          </div>
        </div>
        <div class=\"list-item-action\">
          <div class=\"btn-group text-center\">
            <button type=\"button\" class=\"btn darkblue-btn square-btn\" data-toggle=\"modal\" data-target=\"#productDetailModal-{{ product.id }}\"><i class=\"fas fa-angle-double-right fa-margin-right\"></i>Détails</button>
            <button type=\"button\" class=\"btn darkblue-btn dropdown-toggle dropdown-toggle-split square-btn\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" href=\"#\"><i class=\"far fa-edit fa-margin-right\"></i>Modifier le produit</a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item text-danger\" href=\"{{ url('delete_product', { 'id': product.id }) }}\"><i class=\"far fa-trash-alt fa-margin-right\"></i>Supprimer</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Details Modal -->
    <div class=\"modal fade product-details-modal\" id=\"productDetailModal-{{ product.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productDetailModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"productDetailModalLabel\">{{ product.name }}</h5>
          </div>
          <div class=\"modal-body\">
            <div class=\"single-product-thumbnail\" style=\"background-image:url('{{ thumbnail_path ~ product.thumbnail }}');\"></div>
            <div class=\"single-product-details\">

            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
          </div>
        </div>
      </div>
    </div>

    {% endfor %}

    <!-- Product Add Modal -->
    <div class=\"modal fade modal-form\" id=\"productAddModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productAddModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"productAddModalLabel\">Ajouter un produit</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body\">

            {{ form_start(form, {'attr': {'id': 'createProductForm', 'class': 'create-product-form'}}) }}
              {{ form_row(form.name) }}
              {{ form_row(form.description) }}
              {{ form_row(form.price) }}
              {{ form_row(form.thumbnail) }}
            {{ form_end(form) }}

          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
            <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"createProductForm\">Ajouter le produit</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  {% endblock %}
", "products_list.html.twig", "/Users/sebastien/Sites/gsb/templates/products_list.html.twig");
    }
}
