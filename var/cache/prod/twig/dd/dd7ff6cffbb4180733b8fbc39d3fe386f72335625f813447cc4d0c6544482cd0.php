<?php

/* base/footer/footer.html.twig */
class __TwigTemplate_a4bd0e046ae93b04c4923ea20b90c3947c828fdef372e505c756f6e9163cdf86 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_include($this->env, $context, "base/footer/scripts.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "base/footer/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/footer/footer.html.twig", "/Users/sebastien/Sites/gsb/templates/base/footer/footer.html.twig");
    }
}
