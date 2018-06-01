<?php

/* manufacturers.html.twig */
class __TwigTemplate_667db0c468c353b6aebbb98f9139517a5aa51f8adffb2b072e780766bf5d5311 extends Twig_Template
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
        $context["page_title"] = "Liste des médicaments";
        $context["thumbnail_path"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . "/media/img/products-thumbnails/");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "
<h2>Laboratoires</h2>

<h3>";
        // line 5
        echo twig_escape_filter($this->env, ($context["submittedForms"] ?? null), "html", null, true);
        echo " submitted forms.</h3>

<button type=\"button\" class=\"btn darkblue-btn square-btn\" data-toggle=\"modal\" data-target=\"#manufacturerAddModal\">
  Ajouter un laboratoire
</button>

<div class=\"manufacturers container-fluid\">

  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
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
              <h4>Membress :</h4>
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
        $context['_seq'] = twig_ensure_traversable(($context["productforms"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["memberforms"] ?? null));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "createManufacturerForm", "class" => "create-manufacturer-form")));
        echo " 
          ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array()), 'row');
        echo "
          ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", array()), 'row');
        echo "
          ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zip", array()), 'row');
        echo "
          ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", array()), 'row');
        echo "
          ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "country", array()), 'row');
        echo "
          ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", array()), 'row');
        // line 180
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'row');
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        return array (  399 => 180,  397 => 179,  393 => 178,  389 => 177,  385 => 176,  381 => 175,  377 => 174,  373 => 173,  357 => 159,  344 => 152,  334 => 147,  327 => 143,  318 => 139,  314 => 137,  309 => 136,  296 => 130,  288 => 125,  284 => 124,  277 => 120,  268 => 116,  264 => 114,  260 => 113,  253 => 108,  231 => 92,  227 => 90,  224 => 89,  215 => 87,  211 => 86,  205 => 85,  202 => 84,  196 => 83,  179 => 69,  176 => 68,  173 => 67,  164 => 65,  160 => 64,  156 => 63,  153 => 62,  147 => 61,  132 => 49,  128 => 48,  123 => 46,  117 => 45,  113 => 44,  99 => 35,  92 => 31,  84 => 26,  76 => 21,  70 => 20,  66 => 19,  61 => 17,  56 => 14,  52 => 13,  41 => 5,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "manufacturers.html.twig", "/Users/sebastien/Sites/gsb/templates/manufacturers.html.twig");
    }
}
