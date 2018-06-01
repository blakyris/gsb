<?php

/* base/base-nosidebar.html.twig */
class __TwigTemplate_daab6eb2eafad18233ca40d489533c3fc9740c56e30b5746f875fdad6859742e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/base-nosidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/base-nosidebar.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
";
        // line 4
        $this->loadTemplate("base/head/head.html.twig", "base/base-nosidebar.html.twig", 4)->display($context);
        // line 5
        echo "
<body>

  ";
        // line 8
        echo twig_include($this->env, $context, "base/navbar/navbar-nomenu.html.twig");
        echo "

  <div class=\"body-wrapper\">
    <div class=\"content-wrapper\">
      <div class=\"container-fluid\">
        ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "      </div>
    </div>
  </div>

  ";
        // line 20
        echo twig_include($this->env, $context, "base/footer/footer.html.twig");
        echo "

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base/base-nosidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  74 => 13,  58 => 20,  52 => 16,  50 => 13,  42 => 8,  37 => 5,  35 => 4,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
{% include('base/head/head.html.twig') %}

<body>

  {{ include('base/navbar/navbar-nomenu.html.twig') }}

  <div class=\"body-wrapper\">
    <div class=\"content-wrapper\">
      <div class=\"container-fluid\">
        {% block content %}

        {% endblock %}
      </div>
    </div>
  </div>

  {{ include('base/footer/footer.html.twig') }}

</body>

</html>
", "base/base-nosidebar.html.twig", "/Users/sebastien/Sites/gsb/templates/base/base-nosidebar.html.twig");
    }
}
