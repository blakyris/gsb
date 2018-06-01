<?php

/* base/navbar/navbar.html.twig */
class __TwigTemplate_b83d320c99943e5ccfcc169e3c389efe5ceaacaebc1aec8066a73f74afe0131b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('navbar', $context, $blocks);
    }

    public function block_navbar($context, array $blocks = array())
    {
        // line 2
        echo "    <nav class=\"navbar fixed-top navbar-expand-lg navbar-light\">
        <button id=\"menu-toggle\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <a class=\"navbar-brand\" href=\"#\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/img/logo-gsb.png"), "html", null, true);
        echo "\" width=\"50\" alt=\"\">
        </a>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "base/navbar/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  30 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/navbar/navbar.html.twig", "/Users/sebastien/Sites/gsb/templates/base/navbar/navbar.html.twig");
    }
}
