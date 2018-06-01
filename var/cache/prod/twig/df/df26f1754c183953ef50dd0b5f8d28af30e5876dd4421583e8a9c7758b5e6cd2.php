<?php

/* base/base-nopadding.html.twig */
class __TwigTemplate_af2f581ce017fc0855c77e89cc15bf2f6affd6e8e2a3d7d2bacb64b7e8c4857a extends Twig_Template
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
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
        ";
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
        return array (  69 => 15,  66 => 14,  56 => 21,  50 => 17,  48 => 14,  42 => 11,  36 => 8,  31 => 5,  29 => 4,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/base-nopadding.html.twig", "/Users/sebastien/Sites/gsb/templates/base/base-nopadding.html.twig");
    }
}
