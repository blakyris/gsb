<?php

/* base/base-nopadding.html.twig */
class __TwigTemplate_cc704455a55a71094c24f93d8cc0e9daed5042bdccdb7f4e35ba97d1aff4efc5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/base-nopadding.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/base-nopadding.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
";
        // line 4
        $this->loadTemplate("base/head/head.html.twig", "base/base-nopadding.html.twig", 4)->display($context);
        // line 5
        echo "
<body>

  ";
        // line 8
        echo twig_include($this->env, $context, "base/navbar/navbar.html.twig");
        echo "

  <div class=\"body-wrapper\">
    ";
        // line 11
        echo twig_include($this->env, $context, "base/sidebar/sidebar.html.twig");
        echo "
    <div class=\"content-wrapper navbar-fix\" style=\"padding:0;\">
      <div class=\"container-fluid\" style=\"padding:0;\">
        ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "      </div>
    </div>
  </div>

  ";
        // line 21
        echo twig_include($this->env, $context, "base/footer/footer.html.twig");
        echo "

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base/base-nopadding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  78 => 14,  62 => 21,  56 => 17,  54 => 14,  48 => 11,  42 => 8,  37 => 5,  35 => 4,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
{% include('base/head/head.html.twig') %}

<body>

  {{ include('base/navbar/navbar.html.twig') }}

  <div class=\"body-wrapper\">
    {{ include('base/sidebar/sidebar.html.twig') }}
    <div class=\"content-wrapper navbar-fix\" style=\"padding:0;\">
      <div class=\"container-fluid\" style=\"padding:0;\">
        {% block content %}

        {% endblock %}
      </div>
    </div>
  </div>

  {{ include('base/footer/footer.html.twig') }}

</body>

</html>
", "base/base-nopadding.html.twig", "/Users/sebastien/Sites/gsb/templates/base/base-nopadding.html.twig");
    }
}
