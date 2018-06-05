<?php

/* manufacturers.html.twig */
class __TwigTemplate_b41a13c63fd178ef8048a849a68eaefd329d00281e6898228062dc6c5cd53d32 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base/base.html.twig", "manufacturers.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "manufacturers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "manufacturers.html.twig"));

        // line 1
        $context["page_title"] = "Liste des médicaments";
        $context["thumbnail_path"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "request", array()), "getSchemeAndHttpHost", array(), "method") . "/media/img/products-thumbnails/");
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
<h2>Laboratoires</h2>

<button type=\"button\" class=\"btn darkblue-btn square-btn\" data-toggle=\"modal\" data-target=\"#manufacturerAddModal\">
  Ajouter un laboratoire
</button>

<div class=\"manufacturers container-fluid\">

  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["manufacturers"]) || array_key_exists("manufacturers", $context) ? $context["manufacturers"] : (function () { throw new Twig_Error_Runtime('Variable "manufacturers" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 15
            echo "
  <div class=\"manufacturer-item\">
    <div class=\"manufacturer-content\">
      <h4 class=\"manufacturer-name\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", array()), "html", null, true);
            echo "</h4>
      <div class=\"manufacturer-addr\">
        <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "address", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "zip", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "city", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "country", array()), "html", null, true);
            echo "</p>
      </div>
    </div>
    <div class=\"manufacturer-button\">
      <p>+ d'infos</p>
      <div data-toggle=\"modal\" data-target=\"#manufacturerEditModal-";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "id", array()), "html", null, true);
            echo "\"><i class=\"far fa-arrow-alt-circle-right\"></i></div>
    </div>
  </div>

  <!-- Manufacturer Edit Modal -->
  <div class=\"modal fade modal-form\" id=\"manufacturerEditModal-";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"manufacturerAddModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"manufacturerEditModal-";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "id", array()), "html", null, true);
            echo "\">Laboratoire ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", array()), "html", null, true);
            echo "</h5>
        </div>
        <div class=\"modal-body\">
          <div class=\"manufacturer-modal-content\">

            <div class=\"modal-section\">
              <h4>Coordonnées : </h4>
              <div class=\"manufacturer-addr\">
                <p><b style=\"font-size: 12px;\">Adresse : </b></p>
                <p>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "address", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "zip", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "city", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "country", array()), "html", null, true);
            echo "</p>
                </br>
                <p><b style=\"font-size: 12px;\">Telephone :</b> ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "phone", array()), "html", null, true);
            echo "</p>
                <p><b style=\"font-size: 12px;\">Email :</b> ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "email", array()), "html", null, true);
            echo "</p>
              </div>
            </div>

            <div class=\"modal-section manufacturer-members\">
              <h4>Produits :</h4>
              <table class=\"table table-striped\">
                <tr class=\"text-center\">
                  <th>Nom</th>
                  <th>Dose</th>
                  <th>Quantité en stock</th>
                </tr>
                ";
            // line 62
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["manufacturer"], "products", array()))) {
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["manufacturer"], "products", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 63
                    echo "                <tr>
                  <td>";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 65
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "dose", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", array()), "html", null, true);
                    echo " </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo " ";
            }
            // line 69
            echo "              </table>
              <button type=\"button\" class=\"btn darkblue-btn square-btn\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#AddProductModal-";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "id", array()), "html", null, true);
            echo "\">
              <i class=\"fas fa-plus\"></i> Ajouter un produit
            </button>
            </div>

            <div class=\"modal-section manufacturer-products\">
              <h4>Membres :</h4>
              <table class=\"table table-striped\">
                <tr class=\"text-center\">
                  <th>Nom complet</th>
                  <th>Email</th>
                  <th>Role</th>
                </tr>

                ";
            // line 84
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["manufacturer"], "members", array()))) {
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["manufacturer"], "members", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                    // line 85
                    echo "                <tr>
                  <td>";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "lastname", array()), "html", null, true);
                    echo " </td>
                  <td>";
                    // line 87
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "email", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "role", array()), "html", null, true);
                    echo " </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo " ";
            }
            // line 91
            echo "
              </table>
              <button type=\"button\" class=\"btn darkblue-btn square-btn\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#AddMemberModal-";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "id", array()), "html", null, true);
            echo "\">
              <i class=\"fas fa-plus\"></i> Ajouter un membre
            </button>
            </div>

          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
          <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"\">Modifier</button>
        </div>
      </div>
    </div>
  </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
</div>

<!-- MODAL DIALOGS -->

";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productforms"]) || array_key_exists("productforms", $context) ? $context["productforms"] : (function () { throw new Twig_Error_Runtime('Variable "productforms" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["productform"]) {
            // line 115
            echo "
<!-- Manufacturer Add Product Modal -->
<div class=\"modal fade modal-form\" id=\"AddProductModal-";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productform"], "manufacturerId", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"AddProductModal-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productform"], "manufacturerId", array()), "html", null, true);
            echo "\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"AddProductModal-";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productform"], "manufacturerId", array()), "html", null, true);
            echo "\">Ajouter un produit</h5>
      </div>
      <div class=\"modal-body\">

        ";
            // line 125
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, $context["productform"], "formView", array()), 'form_start', array("attr" => array("id" => ("ManufacturerAddProductForm-" . twig_get_attribute($this->env, $this->source, $context["productform"], "manufacturerId", array())), "class" => "manufacturer-add-product-form")));
            echo " 
        ";
            // line 126
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, $context["productform"], "formView", array()), 'form_end');
            echo "

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"ManufacturerAddProductForm-";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productform"], "manufacturerId", array()), "html", null, true);
            echo "\">Ajouter</button>
      </div>
    </div>
  </div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo " 

";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["memberforms"]) || array_key_exists("memberforms", $context) ? $context["memberforms"] : (function () { throw new Twig_Error_Runtime('Variable "memberforms" does not exist.', 139, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["memberform"]) {
            // line 140
            echo "
<!-- Manufacturer Add Member Modal -->
<div class=\"modal fade modal-form\" id=\"AddMemberModal-";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memberform"], "manufacturerId", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"AddMemberModal-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memberform"], "manufacturerId", array()), "html", null, true);
            echo "\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"AddMemberModal-";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memberform"], "manufacturerId", array()), "html", null, true);
            echo "\">Ajouter un produit</h5>
      </div>
      <div class=\"modal-body\">

        ";
            // line 150
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, $context["memberform"], "formView", array()), 'form_start', array("attr" => array("id" => ("ManufacturerAddMemberForm-" . twig_get_attribute($this->env, $this->source, $context["memberform"], "manufacturerId", array())), "class" => "manufacturer-add-member-form")));
            echo "
        ";
            // line 151
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, $context["memberform"], "formView", array()), 'form_end');
            echo "

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"ManufacturerAddMemberForm-";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memberform"], "manufacturerId", array()), "html", null, true);
            echo "\">Ajouter</button>
      </div>
    </div>
  </div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "

<!-- Manufacturer Add Modal -->
<div class=\"modal fade modal-form\" id=\"manufacturerAddModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"manufacturerAddModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"manufacturerAddModalLabel\">Ajouter un laboratoire</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">

        ";
        // line 177
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 177, $this->source); })()), 'form_start', array("attr" => array("id" => "createManufacturerForm", "class" => "create-manufacturer-form")));
        echo " 
          ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 178, $this->source); })()), "name", array()), 'row');
        echo "
          ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 179, $this->source); })()), "address", array()), 'row');
        echo "
          ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 180, $this->source); })()), "zip", array()), 'row');
        echo "
          ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 181, $this->source); })()), "city", array()), 'row');
        echo "
          ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 182, $this->source); })()), "country", array()), 'row');
        echo "
          ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 183, $this->source); })()), "phone", array()), 'row');
        // line 184
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 184, $this->source); })()), "email", array()), 'row');
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 184, $this->source); })()), 'form_end');
        echo "

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"createManufacturerForm\">Ajouter</button>
      </div>
    </div>
  </div>
</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 198
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 199
        echo "
  ";
        // line 200
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

  ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productforms"]) || array_key_exists("productforms", $context) ? $context["productforms"] : (function () { throw new Twig_Error_Runtime('Variable "productforms" does not exist.', 202, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 203
            echo "    <script type=\"text/javascript\">
      \$('.collectionSelector-";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form"], "manufacturerId", array()), "html", null, true);
            echo "').collection();
    </script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "manufacturers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 207,  471 => 204,  468 => 203,  464 => 202,  459 => 200,  456 => 199,  447 => 198,  421 => 184,  419 => 183,  415 => 182,  411 => 181,  407 => 180,  403 => 179,  399 => 178,  395 => 177,  379 => 163,  366 => 156,  358 => 151,  354 => 150,  347 => 146,  338 => 142,  334 => 140,  330 => 139,  326 => 137,  313 => 131,  305 => 126,  301 => 125,  294 => 121,  285 => 117,  281 => 115,  277 => 114,  270 => 109,  248 => 93,  244 => 91,  241 => 90,  232 => 88,  228 => 87,  222 => 86,  219 => 85,  213 => 84,  196 => 70,  193 => 69,  190 => 68,  181 => 66,  177 => 65,  173 => 64,  170 => 63,  164 => 62,  149 => 50,  145 => 49,  140 => 47,  134 => 46,  130 => 45,  116 => 36,  109 => 32,  101 => 27,  93 => 22,  87 => 21,  83 => 20,  78 => 18,  73 => 15,  69 => 14,  58 => 5,  49 => 4,  39 => 2,  36 => 1,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set page_title = 'Liste des médicaments' %} {% set thumbnail_path = app.request.getSchemeAndHttpHost() ~ \"/media/img/products-thumbnails/\" %} 
{% extends 'base/base.html.twig' %} 

{% block content %}

<h2>Laboratoires</h2>

<button type=\"button\" class=\"btn darkblue-btn square-btn\" data-toggle=\"modal\" data-target=\"#manufacturerAddModal\">
  Ajouter un laboratoire
</button>

<div class=\"manufacturers container-fluid\">

  {% for manufacturer in manufacturers %}

  <div class=\"manufacturer-item\">
    <div class=\"manufacturer-content\">
      <h4 class=\"manufacturer-name\">{{ manufacturer.name }}</h4>
      <div class=\"manufacturer-addr\">
        <p>{{ manufacturer.address }}</p>
        <p>{{ manufacturer.zip }}, {{ manufacturer.city }}</p>
        <p>{{ manufacturer.country }}</p>
      </div>
    </div>
    <div class=\"manufacturer-button\">
      <p>+ d'infos</p>
      <div data-toggle=\"modal\" data-target=\"#manufacturerEditModal-{{ manufacturer.id }}\"><i class=\"far fa-arrow-alt-circle-right\"></i></div>
    </div>
  </div>

  <!-- Manufacturer Edit Modal -->
  <div class=\"modal fade modal-form\" id=\"manufacturerEditModal-{{ manufacturer.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"manufacturerAddModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"manufacturerEditModal-{{ manufacturer.id }}\">Laboratoire {{ manufacturer.name }}</h5>
        </div>
        <div class=\"modal-body\">
          <div class=\"manufacturer-modal-content\">

            <div class=\"modal-section\">
              <h4>Coordonnées : </h4>
              <div class=\"manufacturer-addr\">
                <p><b style=\"font-size: 12px;\">Adresse : </b></p>
                <p>{{ manufacturer.address }}</p>
                <p>{{ manufacturer.zip }}, {{ manufacturer.city }}</p>
                <p>{{ manufacturer.country }}</p>
                </br>
                <p><b style=\"font-size: 12px;\">Telephone :</b> {{ manufacturer.phone }}</p>
                <p><b style=\"font-size: 12px;\">Email :</b> {{ manufacturer.email }}</p>
              </div>
            </div>

            <div class=\"modal-section manufacturer-members\">
              <h4>Produits :</h4>
              <table class=\"table table-striped\">
                <tr class=\"text-center\">
                  <th>Nom</th>
                  <th>Dose</th>
                  <th>Quantité en stock</th>
                </tr>
                {% if manufacturer.products is not null %} {% for product in manufacturer.products %}
                <tr>
                  <td>{{ product.name }}</td>
                  <td>{{ product.dose }}</td>
                  <td>{{ product.quantity }} </td>
                </tr>
                {% endfor %} {% endif %}
              </table>
              <button type=\"button\" class=\"btn darkblue-btn square-btn\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#AddProductModal-{{ manufacturer.id }}\">
              <i class=\"fas fa-plus\"></i> Ajouter un produit
            </button>
            </div>

            <div class=\"modal-section manufacturer-products\">
              <h4>Membres :</h4>
              <table class=\"table table-striped\">
                <tr class=\"text-center\">
                  <th>Nom complet</th>
                  <th>Email</th>
                  <th>Role</th>
                </tr>

                {% if manufacturer.members is not null %} {% for member in manufacturer.members %}
                <tr>
                  <td>{{ member.firstname }} {{ member.lastname }} </td>
                  <td>{{ member.email }}</td>
                  <td>{{ member.role }} </td>
                </tr>
                {% endfor %} {% endif %}

              </table>
              <button type=\"button\" class=\"btn darkblue-btn square-btn\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#AddMemberModal-{{ manufacturer.id }}\">
              <i class=\"fas fa-plus\"></i> Ajouter un membre
            </button>
            </div>

          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
          <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"\">Modifier</button>
        </div>
      </div>
    </div>
  </div>

  {% endfor %}

</div>

<!-- MODAL DIALOGS -->

{% for productform in productforms %}

<!-- Manufacturer Add Product Modal -->
<div class=\"modal fade modal-form\" id=\"AddProductModal-{{ productform.manufacturerId }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"AddProductModal-{{ productform.manufacturerId }}\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"AddProductModal-{{ productform.manufacturerId }}\">Ajouter un produit</h5>
      </div>
      <div class=\"modal-body\">

        {{ form_start(productform.formView, {'attr': {'id': 'ManufacturerAddProductForm-' ~ productform.manufacturerId, 'class': 'manufacturer-add-product-form'}}) }} 
        {{ form_end(productform.formView) }}

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"ManufacturerAddProductForm-{{ productform.manufacturerId }}\">Ajouter</button>
      </div>
    </div>
  </div>
</div>

{% endfor %} 

{% for memberform in memberforms %}

<!-- Manufacturer Add Member Modal -->
<div class=\"modal fade modal-form\" id=\"AddMemberModal-{{ memberform.manufacturerId }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"AddMemberModal-{{ memberform.manufacturerId }}\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"AddMemberModal-{{ memberform.manufacturerId }}\">Ajouter un produit</h5>
      </div>
      <div class=\"modal-body\">

        {{ form_start(memberform.formView, {'attr': {'id': 'ManufacturerAddMemberForm-' ~ memberform.manufacturerId, 'class': 'manufacturer-add-member-form'}}) }}
        {{ form_end(memberform.formView) }}

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"ManufacturerAddMemberForm-{{ memberform.manufacturerId }}\">Ajouter</button>
      </div>
    </div>
  </div>
</div>

{% endfor %}


<!-- Manufacturer Add Modal -->
<div class=\"modal fade modal-form\" id=\"manufacturerAddModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"manufacturerAddModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"manufacturerAddModalLabel\">Ajouter un laboratoire</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">

        {{ form_start(form, {'attr': {'id': 'createManufacturerForm', 'class': 'create-manufacturer-form'}}) }} 
          {{ form_row(form.name) }}
          {{ form_row(form.address) }}
          {{ form_row(form.zip) }}
          {{ form_row(form.city) }}
          {{ form_row(form.country) }}
          {{ form_row(form.phone)
        }} {{ form_row(form.email) }} {{ form_end(form) }}

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"createManufacturerForm\">Ajouter</button>
      </div>
    </div>
  </div>
</div>
</div>

{% endblock %}

{% block footer %}

  {{ parent() }}

  {% for form in productforms %}
    <script type=\"text/javascript\">
      \$('.collectionSelector-{{ form.manufacturerId }}').collection();
    </script>
  {% endfor %}

{% endblock %}", "manufacturers.html.twig", "/Users/sebastien/Sites/gsb/templates/manufacturers.html.twig");
    }
}
