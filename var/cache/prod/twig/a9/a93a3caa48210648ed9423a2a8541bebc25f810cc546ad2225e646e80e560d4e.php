<?php

/* base/footer/scripts.html.twig */
class __TwigTemplate_94462807cc58aa2d041272dd5899c758b3bf2dc20f1fe1a9fcf1d1103965816e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
        // line 2
        echo "
  <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
  integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
  crossorigin=\"anonymous\">
  </script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js\"
  integrity=\"sha384-VspmFJ2uqRrKr3en+IG0cIq1Cl/v/PHneDw6SQZYgrcr8ZZmZoQ3zhuGfMnSR/F2\"
  crossorigin=\"anonymous\">
  </script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js\"></script>
  <script type='text/javascript' src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/fr.js\"></script>
  <script>
      \$(\"#menu-toggle\").click(function(e) {
        e.preventDefault();
        \$(\".body-wrapper\").toggleClass(\"toggled\");
      });
  </script>

  <!-- Initialize Bootstrap functionality -->
  <script>
  // Initialize tooltip component
  \$(function () {
    \$('[data-toggle=\"tooltip\"]').tooltip()
  })

  // Initialize popover component
  \$(function () {
    \$('[data-toggle=\"popover\"]').popover()
  })
  </script>

";
    }

    public function getTemplateName()
    {
        return "base/footer/scripts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/footer/scripts.html.twig", "/Users/sebastien/Sites/gsb/templates/base/footer/scripts.html.twig");
    }
}
