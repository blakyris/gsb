<?php

/* manufacturers.html.twig */
class __TwigTemplate_b41a13c63fd178ef8048a849a68eaefd329d00281e6898228062dc6c5cd53d32 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "manufacturers.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "manufacturers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "manufacturers.html.twig"));

        $context["page_title"] = "Liste des médicaments";
        $context["thumbnail_path"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "request", array()), "getSchemeAndHttpHost", array(), "method") . "/media/img/products-thumbnails/");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "
<h2>Laboratoires</h2>

<h3>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["submittedForms"]) || array_key_exists("submittedForms", $context) ? $context["submittedForms"] : (function () { throw new Twig_Error_Runtime('Variable "submittedForms" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " submitted forms.</h3>

<button type=\"button\" class=\"btn darkblue-btn square-btn\" data-toggle=\"modal\" data-target=\"#manufacturerAddModal\">
  Ajouter un laboratoire
</button>

<div class=\"manufacturers container-fluid\">

  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["manufacturers"]) || array_key_exists("manufacturers", $context) ? $context["manufacturers"] : (function () { throw new Twig_Error_Runtime('Variable "manufacturers" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 14
            echo "
  <div class=\"manufacturer-item\">
    <div class=\"manufacturer-content\">
      <h4 class=\"manufacturer-name\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", array()), "html", null, true);
            echo "</h4>
      <div class=\"manufacturer-addr\">
        <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "address", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "zip", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "city", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "country", array()), "html", null, true);
            echo "</p>
      </div>
    </div>
    <div class=\"manufacturer-button\">
      <p>+ d'infos</p>
      <div data-toggle=\"modal\" data-target=\"#manufacturerEditModal-";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "id", array()), "html", null, true);
            echo "\"><i class=\"far fa-arrow-alt-circle-right\"></i></div>
    </div>
  </div>

  <!-- Manufacturer Edit Modal -->
  <div class=\"modal fade modal-form\" id=\"manufacturerEditModal-";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"manufacturerAddModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"manufacturerEditModal-";
            // line 35
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
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "address", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "zip", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "city", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "country", array()), "html", null, true);
            echo "</p>
                </br>
                <p><b style=\"font-size: 12px;\">Telephone :</b> ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "phone", array()), "html", null, true);
            echo "</p>
                <p><b style=\"font-size: 12px;\">Email :</b> ";
            // line 49
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
            // line 61
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["manufacturer"], "products", array()))) {
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["manufacturer"], "products", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 62
                    echo "                <tr>
                  <td>";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "dose", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 65
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", array()), "html", null, true);
                    echo " </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo " ";
            }
            // line 68
            echo "              </table>
              <button type=\"button\" class=\"btn darkblue-btn square-btn\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#AddProductModal-";
            // line 69
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
            // line 83
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["manufacturer"], "members", array()))) {
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["manufacturer"], "members", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                    // line 84
                    echo "                <tr>
                  <td>";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "lastname", array()), "html", null, true);
                    echo " </td>
                  <td>";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "email", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 87
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "role", array()), "html", null, true);
                    echo " </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo " ";
            }
            // line 90
            echo "
              </table>
              <button type=\"button\" class=\"btn darkblue-btn square-btn\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#AddMemberModal-";
            // line 92
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
        // line 108
        echo "
</div>

<!-- MODAL DIALOGS -->

";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productforms"]) || array_key_exists("productforms", $context) ? $context["productforms"] : (function () { throw new Twig_Error_Runtime('Variable "productforms" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["productform"]) {
            // line 114
            echo "
<!-- Manufacturer Add Product Modal -->
<div class=\"modal fade modal-form\" id=\"AddProductModal-";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productform"], "manufacturerId", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"AddProductModal-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productform"], "manufacturerId", array()), "html", null, true);
            echo "\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"AddProductModal-";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productform"], "manufacturerId", array()), "html", null, true);
            echo "\">Ajouter un produit</h5>
      </div>
      <div class=\"modal-body\">

        ";
            // line 124
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, $context["productform"], "formView", array()), 'form_start', array("attr" => array("id" => ("ManufacturerAddProductForm-" . twig_get_attribute($this->env, $this->source, $context["productform"], "manufacturerId", array())), "class" => "manufacturer-add-product-form")));
            echo " 
        ";
            // line 125
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, $context["productform"], "formView", array()), 'form_end');
            echo "

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"ManufacturerAddProductForm-";
            // line 130
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
        // line 136
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["memberforms"]) || array_key_exists("memberforms", $context) ? $context["memberforms"] : (function () { throw new Twig_Error_Runtime('Variable "memberforms" does not exist.', 136, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["memberform"]) {
            // line 137
            echo "
<!-- Manufacturer Add Member Modal -->
<div class=\"modal fade modal-form\" id=\"AddMemberModal-";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memberform"], "manufacturerId", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"AddMemberModal-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memberform"], "manufacturerId", array()), "html", null, true);
            echo "\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"AddMemberModal-";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memberform"], "manufacturerId", array()), "html", null, true);
            echo "\">Ajouter un produit</h5>
      </div>
      <div class=\"modal-body\">

        ";
            // line 147
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, $context["memberform"], "formView", array()), 'form_start', array("attr" => array("id" => ("ManufacturerAddMemberForm-" . twig_get_attribute($this->env, $this->source, $context["memberform"], "manufacturerId", array())), "class" => "manufacturer-add-member-form")));
            echo " ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, $context["memberform"], "formView", array()), 'form_end');
            echo "

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"ManufacturerAddMemberForm-";
            // line 152
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
        // line 159
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
        // line 173
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 173, $this->source); })()), 'form_start', array("attr" => array("id" => "createManufacturerForm", "class" => "create-manufacturer-form")));
        echo " 
          ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 174, $this->source); })()), "name", array()), 'row');
        echo "
          ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 175, $this->source); })()), "address", array()), 'row');
        echo "
          ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 176, $this->source); })()), "zip", array()), 'row');
        echo "
          ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 177, $this->source); })()), "city", array()), 'row');
        echo "
          ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 178, $this->source); })()), "country", array()), 'row');
        echo "
          ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 179, $this->source); })()), "phone", array()), 'row');
        // line 180
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 180, $this->source); })()), "email", array()), 'row');
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 180, $this->source); })()), 'form_end');
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
        return array (  417 => 180,  415 => 179,  411 => 178,  407 => 177,  403 => 176,  399 => 175,  395 => 174,  391 => 173,  375 => 159,  362 => 152,  352 => 147,  345 => 143,  336 => 139,  332 => 137,  327 => 136,  314 => 130,  306 => 125,  302 => 124,  295 => 120,  286 => 116,  282 => 114,  278 => 113,  271 => 108,  249 => 92,  245 => 90,  242 => 89,  233 => 87,  229 => 86,  223 => 85,  220 => 84,  214 => 83,  197 => 69,  194 => 68,  191 => 67,  182 => 65,  178 => 64,  174 => 63,  171 => 62,  165 => 61,  150 => 49,  146 => 48,  141 => 46,  135 => 45,  131 => 44,  117 => 35,  110 => 31,  102 => 26,  94 => 21,  88 => 20,  84 => 19,  79 => 17,  74 => 14,  70 => 13,  59 => 5,  54 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set page_title = 'Liste des médicaments' %} {% set thumbnail_path = app.request.getSchemeAndHttpHost() ~ \"/media/img/products-thumbnails/\" %} {% extends 'base/base.html.twig' %} {% block content %}

<h2>Laboratoires</h2>

<h3>{{ submittedForms }} submitted forms.</h3>

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

{% endfor %} {% for memberform in memberforms %}

<!-- Manufacturer Add Member Modal -->
<div class=\"modal fade modal-form\" id=\"AddMemberModal-{{ memberform.manufacturerId }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"AddMemberModal-{{ memberform.manufacturerId }}\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"AddMemberModal-{{ memberform.manufacturerId }}\">Ajouter un produit</h5>
      </div>
      <div class=\"modal-body\">

        {{ form_start(memberform.formView, {'attr': {'id': 'ManufacturerAddMemberForm-' ~ memberform.manufacturerId, 'class': 'manufacturer-add-member-form'}}) }} {{ form_end(memberform.formView) }}

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
", "manufacturers.html.twig", "/Users/sebastien/Sites/gsb/templates/manufacturers.html.twig");
    }
}
