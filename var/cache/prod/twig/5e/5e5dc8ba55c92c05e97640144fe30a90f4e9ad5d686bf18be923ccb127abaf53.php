<?php

/* base/head/head.html.twig */
class __TwigTemplate_9740bbc1557640f9f354f88056c08c452db6f887a3740b7c26ad3c533f7fcd3b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "</head>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"height=device-height, initial-scale=1.0\">
  <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>
  <title>GSB - ";
        // line 9
        if (array_key_exists("page_title", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
            echo " ";
        }
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\"
    rel=\"stylesheet\"
    integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\"
    crossorigin=\"anonymous\">
    <link href=\"https://use.fontawesome.com/releases/v5.0.4/css/all.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

    <!-- FULLCALENDAR CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css\">
    <link rel=\"stylesheet\" media=\"print\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css\">

    <!-- GOOGLE FONTS -->
    <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i\" rel=\"stylesheet\">

  ";
    }

    public function getTemplateName()
    {
        return "base/head/head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  65 => 12,  62 => 11,  57 => 29,  55 => 11,  46 => 9,  40 => 5,  37 => 4,  32 => 31,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/head/head.html.twig", "/Users/sebastien/Sites/gsb/templates/base/head/head.html.twig");
    }
}
