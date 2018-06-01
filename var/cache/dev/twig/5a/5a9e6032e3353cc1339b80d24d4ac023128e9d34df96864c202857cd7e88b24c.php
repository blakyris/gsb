<?php

/* expense_reports.html.twig */
class __TwigTemplate_c2e5a6bbfe6b317e1bc9d7a445a118864042f7d05ff9d4ce1fbc8738d14e61c5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("base/base.html.twig", "expense_reports.html.twig", 3);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expense_reports.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expense_reports.html.twig"));

        // line 1
        $context["page_title"] = "Gestion des notes de frais";
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
  <h3>Gestion des notes de frais</h3>

  <button type=\"button\" class=\"btn darkblue-btn square-btn\" data-toggle=\"modal\" data-target=\"#expenseRerportAddModal\">Ajouter une note de frais</button>
  <button type=\"button\" class=\"btn darkblue-btn square-btn\">Historique</button>

  <div class=\"container-fluid expense-reports-wrapper\">


    ";
        // line 15
        if ( !(null === (isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new Twig_Error_Runtime('Variable "reports" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new Twig_Error_Runtime('Variable "reports" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["er"]) {
                // line 17
                echo "
    <a data-toggle=\"modal\" data-target=\"#expenseRerportDetailModal-";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "id", array()), "html", null, true);
                echo "\">
      <div class=\"er-item-wrapper
      ";
                // line 20
                if ((twig_get_attribute($this->env, $this->source, $context["er"], "statut", array()) == 0)) {
                    echo " er-item-statut-awaiting ";
                }
                // line 21
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["er"], "statut", array()) == 1)) {
                    echo " er-item-statut-inprogress ";
                }
                // line 22
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["er"], "statut", array()) == 2)) {
                    echo " er-item-statut-complete ";
                }
                // line 23
                echo "      \">
        <div class=\"er-item-content\">

          <div class=\"er-item-row\">
            <div class=\"er-item-owner-picture\" style=\"background-image: url(";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/img/default-user-picture.jpg"), "html", null, true);
                echo ");\"></div>
          </div>
          <div class=\"er-item-row\">
            <p class=\"er-item-row-title\">Cree par :</p>
            <p class=\"er-item-row-data\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["er"], "owner", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["er"], "owner", array()), "lastname", array()), "html", null, true);
                echo "</p>
          </div>
          <div class=\"er-item-row\">
            <p class=\"er-item-row-title\">Reference :</p>
            <p class=\"er-item-row-data\">NF-";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "id", array()), "html", null, true);
                echo "</p>
          </div>
          <div class=\"er-item-row\">
            <p class=\"er-item-row-title\">Date de publication :</p>
            <p class=\"er-item-row-data\">";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</p>
          </div>
          <div class=\"er-item-row\">
            <p class=\"er-item-row-title\">Statut : </p>
            <p class=\"er-item-row-data\">
              ";
                // line 44
                if ((twig_get_attribute($this->env, $this->source, $context["er"], "statut", array()) == 0)) {
                    echo " En attente de traitement... ";
                }
                // line 45
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["er"], "statut", array()) == 1)) {
                    echo " Traitement en cours... ";
                }
                // line 46
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["er"], "statut", array()) == 2)) {
                    echo " Validee ";
                }
                // line 47
                echo "            <p>
          </div>
          <div class=\"er-item-row\">
            <p class=\"er-item-row-title\">Total :</p>
            <p class=\"er-item-row-data\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "totalPrice", array()), "html", null, true);
                echo " €<p>
          </div>
          <div class=\"er-item-row\">
            <p class=\"er-item-row-title\">Part de prise en charge :</p>
            <p class=\"er-item-row-data\">
              ";
                // line 56
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["er"], "refundedPortion", array()))) {
                    // line 57
                    echo "                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "refundedPortion", array()), "html", null, true);
                    echo " %
              ";
                } else {
                    // line 59
                    echo "                -
              ";
                }
                // line 61
                echo "            <p>
          </div>
          <div class=\"er-item-row\">
            <p class=\"er-item-row-title\">Derniere mise a jour : </p>
            <p class=\"er-item-row-data\">
              ";
                // line 66
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["er"], "lastStatutUpdate", array()))) {
                    // line 67
                    echo "                le ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "lastStatutUpdate", array()), "html", null, true);
                    echo " par ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "statutUpdateBy", array()), "html", null, true);
                    echo "
              ";
                } else {
                    // line 69
                    echo "                -
              ";
                }
                // line 71
                echo "            <p>
          </div>

        </div>

      </div>
    </a>

    <!-- Expense Report Edit Modal -->
    <div class=\"modal fade\" id=\"expenseRerportDetailModal-";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"expenseRerportDetailModal-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "id", array()), "html", null, true);
                echo "\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"expenseRerportDetailModalLabel\">Details</h5>
            <i class=\"far fa-times-circle\" data-dismiss=\"modal\" aria-label=\"Close\" style=\"font-size:26px;\"></i>
          </div>
          <div class=\"modal-body\">

            <p>Date : ";
                // line 89
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</p>
            <p>Cree par : ";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["er"], "owner", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["er"], "owner", array()), "lastname", array()), "html", null, true);
                echo "<p>

          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#expenseRerportDeleteModal-";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "id", array()), "html", null, true);
                echo "\">Supprimer</button>
            <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"createProductForm\">Modifier</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Expense Report Edit Modal -->
    <div class=\"modal fade modal-danger\" id=\"expenseRerportDeleteModal-";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"expenseRerportDeleteModal-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "id", array()), "html", null, true);
                echo "\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"expenseRerportDeleteModal-";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "id", array()), "html", null, true);
                echo "\">Supprimer une note de frais</h5>
          </div>
          <div class=\"modal-body\">
            <p>
              Vous etes sur le point de supprimer une note de frais. Cette action est irreversible et les donnees liees a cet note de frais seront supprrimees de la base de donnees.
            </p>
            <p>
              Voulez-vous vraiment supprimer cette note de frais ?
            </p>
          </div>
          <div class=\"modal-footer\">
            <a class=\"btn red-btn square-btn\" href=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("delete_expense_report", array("id" => twig_get_attribute($this->env, $this->source, $context["er"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fas fa-trash-alt fa-margin-right\"></i>Supprimer</a>
            <button type=\"button\" class=\"btn blue-btn square-btn\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#expenseRerportDetailModal-";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["er"], "id", array()), "html", null, true);
                echo "\"><i class=\"fas fa-ban fa-margin-right\"></i>Anmuler</button>
          </div>
        </div>
      </div>
    </div>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['er'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "    ";
        }
        // line 126
        echo "
  </div>

  <!-- Expense Report Add Modal -->
  <div class=\"modal fade\" id=\"expenseRerportAddModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productAddModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"expenseRerportAddModalLabel\">Ajouter une note de frais</h5>
          <i class=\"far fa-times-circle\" data-dismiss=\"modal\" aria-label=\"Close\" style=\"font-size:26px;\"></i>
        </div>
        <div class=\"modal-body\">

          ";
        // line 139
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 139, $this->source); })()), 'form_start', array("attr" => array("id" => "createExpenseReportForm", "class" => "create-expense-report-form")));
        echo "
            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 140, $this->source); })()), "totalPrice", array()), 'row');
        echo "
            ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 141, $this->source); })()), "attachement", array()), 'row');
        echo "
          ";
        // line 142
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->source); })()), 'form_end');
        echo "

        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Annuler</button>
          <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"createExpenseReportForm\">Ajouter la note de frais</button>
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
        return "expense_reports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 142,  309 => 141,  305 => 140,  301 => 139,  286 => 126,  283 => 125,  270 => 118,  266 => 117,  252 => 106,  243 => 102,  232 => 94,  223 => 90,  219 => 89,  205 => 80,  194 => 71,  190 => 69,  182 => 67,  180 => 66,  173 => 61,  169 => 59,  163 => 57,  161 => 56,  153 => 51,  147 => 47,  142 => 46,  137 => 45,  133 => 44,  125 => 39,  118 => 35,  109 => 31,  102 => 27,  96 => 23,  91 => 22,  86 => 21,  82 => 20,  77 => 18,  74 => 17,  69 => 16,  67 => 15,  56 => 6,  47 => 5,  37 => 3,  35 => 1,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set page_title = 'Gestion des notes de frais' %}

{% extends 'base/base.html.twig' %}

{% block content %}

  <h3>Gestion des notes de frais</h3>

  <button type=\"button\" class=\"btn darkblue-btn square-btn\" data-toggle=\"modal\" data-target=\"#expenseRerportAddModal\">Ajouter une note de frais</button>
  <button type=\"button\" class=\"btn darkblue-btn square-btn\">Historique</button>

  <div class=\"container-fluid expense-reports-wrapper\">


    {% if reports is not null %}
    {% for er in reports %}

    <a data-toggle=\"modal\" data-target=\"#expenseRerportDetailModal-{{ er.id }}\">
      <div class=\"er-item-wrapper
      {% if er.statut == 0 %} er-item-statut-awaiting {% endif %}
      {% if er.statut == 1 %} er-item-statut-inprogress {% endif %}
      {% if er.statut == 2 %} er-item-statut-complete {% endif %}
      \">
        <div class=\"er-item-content\">

          <div class=\"er-item-row\">
            <div class=\"er-item-owner-picture\" style=\"background-image: url({{ asset('media/img/default-user-picture.jpg') }});\"></div>
          </div>
          <div class=\"er-item-row\">
            <p class=\"er-item-row-title\">Cree par :</p>
            <p class=\"er-item-row-data\">{{ er.owner.firstname }} {{ er.owner.lastname }}</p>
          </div>
          <div class=\"er-item-row\">
            <p class=\"er-item-row-title\">Reference :</p>
            <p class=\"er-item-row-data\">NF-{{ er.id }}</p>
          </div>
          <div class=\"er-item-row\">
            <p class=\"er-item-row-title\">Date de publication :</p>
            <p class=\"er-item-row-data\">{{ er.date|date('d/m/Y') }}</p>
          </div>
          <div class=\"er-item-row\">
            <p class=\"er-item-row-title\">Statut : </p>
            <p class=\"er-item-row-data\">
              {% if er.statut == 0 %} En attente de traitement... {% endif %}
              {% if er.statut == 1 %} Traitement en cours... {% endif %}
              {% if er.statut == 2 %} Validee {% endif %}
            <p>
          </div>
          <div class=\"er-item-row\">
            <p class=\"er-item-row-title\">Total :</p>
            <p class=\"er-item-row-data\">{{ er.totalPrice }} €<p>
          </div>
          <div class=\"er-item-row\">
            <p class=\"er-item-row-title\">Part de prise en charge :</p>
            <p class=\"er-item-row-data\">
              {% if er.refundedPortion is not null %}
                {{ er.refundedPortion }} %
              {% else %}
                -
              {% endif %}
            <p>
          </div>
          <div class=\"er-item-row\">
            <p class=\"er-item-row-title\">Derniere mise a jour : </p>
            <p class=\"er-item-row-data\">
              {% if er.lastStatutUpdate is not null %}
                le {{ er.lastStatutUpdate }} par {{ er.statutUpdateBy }}
              {% else %}
                -
              {% endif %}
            <p>
          </div>

        </div>

      </div>
    </a>

    <!-- Expense Report Edit Modal -->
    <div class=\"modal fade\" id=\"expenseRerportDetailModal-{{ er.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"expenseRerportDetailModal-{{ er.id }}\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"expenseRerportDetailModalLabel\">Details</h5>
            <i class=\"far fa-times-circle\" data-dismiss=\"modal\" aria-label=\"Close\" style=\"font-size:26px;\"></i>
          </div>
          <div class=\"modal-body\">

            <p>Date : {{ er.date|date('d/m/Y') }}</p>
            <p>Cree par : {{ er.owner.firstname }} {{ er.owner.lastname }}<p>

          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#expenseRerportDeleteModal-{{ er.id }}\">Supprimer</button>
            <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"createProductForm\">Modifier</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Expense Report Edit Modal -->
    <div class=\"modal fade modal-danger\" id=\"expenseRerportDeleteModal-{{ er.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"expenseRerportDeleteModal-{{ er.id }}\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"expenseRerportDeleteModal-{{ er.id }}\">Supprimer une note de frais</h5>
          </div>
          <div class=\"modal-body\">
            <p>
              Vous etes sur le point de supprimer une note de frais. Cette action est irreversible et les donnees liees a cet note de frais seront supprrimees de la base de donnees.
            </p>
            <p>
              Voulez-vous vraiment supprimer cette note de frais ?
            </p>
          </div>
          <div class=\"modal-footer\">
            <a class=\"btn red-btn square-btn\" href=\"{{ url('delete_expense_report', { 'id': er.id }) }}\"><i class=\"fas fa-trash-alt fa-margin-right\"></i>Supprimer</a>
            <button type=\"button\" class=\"btn blue-btn square-btn\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#expenseRerportDetailModal-{{ er.id }}\"><i class=\"fas fa-ban fa-margin-right\"></i>Anmuler</button>
          </div>
        </div>
      </div>
    </div>

    {% endfor %}
    {% endif %}

  </div>

  <!-- Expense Report Add Modal -->
  <div class=\"modal fade\" id=\"expenseRerportAddModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productAddModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"expenseRerportAddModalLabel\">Ajouter une note de frais</h5>
          <i class=\"far fa-times-circle\" data-dismiss=\"modal\" aria-label=\"Close\" style=\"font-size:26px;\"></i>
        </div>
        <div class=\"modal-body\">

          {{ form_start(form, {'attr': {'id': 'createExpenseReportForm', 'class': 'create-expense-report-form'}}) }}
            {{ form_row(form.totalPrice) }}
            {{ form_row(form.attachement) }}
          {{ form_end(form) }}

        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Annuler</button>
          <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"createExpenseReportForm\">Ajouter la note de frais</button>
        </div>
      </div>
    </div>
  </div>




{% endblock %}
", "expense_reports.html.twig", "/Users/sebastien/Sites/gsb/templates/expense_reports.html.twig");
    }
}
