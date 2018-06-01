<?php

/* base/base.html.twig */
class __TwigTemplate_e375fccb3f671466e42491c5c7b4792a8a7784a04f39586777c0b10656600235 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>


";
        // line 6
        $this->loadTemplate("base/head/head.html.twig", "base/base.html.twig", 6)->display($context);
        // line 7
        echo "
<body>

  ";
        // line 10
        echo twig_include($this->env, $context, "base/navbar/navbar.html.twig");
        echo "

  <div class=\"body-wrapper\">
    ";
        // line 13
        echo twig_include($this->env, $context, "base/sidebar/sidebar.html.twig");
        echo "
    <div class=\"content-wrapper\">
      <div class=\"container-fluid\">
        ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "      </div>
    </div>
  </div>

  ";
        // line 23
        $this->displayBlock('footer', $context, $blocks);
        // line 26
        echo "
</body>

</html>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
        ";
    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
        // line 24
        echo "  ";
        echo twig_include($this->env, $context, "base/footer/footer.html.twig");
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "base/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  77 => 23,  72 => 17,  69 => 16,  61 => 26,  59 => 23,  53 => 19,  51 => 16,  45 => 13,  39 => 10,  34 => 7,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/base.html.twig", "/Users/sebastien/Sites/gsb/templates/base/base.html.twig");
    }
}
