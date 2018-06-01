<?php

/* calendar.html.twig */
class __TwigTemplate_ffcd538ca4a522ae37d20f0599c510328959800f319bf81ca334efcb84495af1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("base/base.html.twig", "calendar.html.twig", 3);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calendar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calendar.html.twig"));

        // line 1
        $context["page_title"] = "Calendrier";
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
<button type=\"button\" class=\"btn darkblue-btn square-btn\" data-toggle=\"modal\" data-target=\"#eventAddModal\">
  Ajouter un événement
</button>

<div class=\"container calendar-wrapper\">
  <div id='calendar' class=\"calendar\">

  </div>
</div>

<!-- Create Calendar Event Modal -->
<div class=\"modal fade modal-form\" id=\"eventAddModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"eventAddModal\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"eventAddModalLabel\">Ajouter un événement</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">

        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', array("attr" => array("id" => "createEventForm", "class" => "create-event-form")));
        echo "
          ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "name", array()), 'row');
        echo "
          <p>Date de debut :</p>
          ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "start", array()), 'row', array("attr" => array("class" => "form-date-picker")));
        echo "
          <p>Date de fin :</p>
          ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "end", array()), 'row', array("attr" => array("class" => "form-date-picker")));
        echo "
        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"createEventForm\">Créer l'évenement</button>
      </div>
    </div>
  </div>
</div>

<!-- Calendar Event Details Modal -->
<div class=\"modal fade modal-form\" id=\"eventDetailsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"eventDetailsModal\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"eventDetailsModal\">Details de l'événement</h5>
      </div>
      <div class=\"modal-body\">

        <p>Nom de l'événement : <span id=\"eventName\"></span></p>
        <p>Cree par : <span id=\"eventCreatedBy\"></span></p>
        <p>Date de debut : <span id=\"eventStartDate\"></span></p>
        <p>Heure de debut : <span id=\"eventStartTime\"></span></p>
        <p>Date de fin : <span id=\"eventEndDate\"></span></p>
        <p>Heure de fin : <span id=\"eventEndTime\"></span></p>
        <p id=\"eventRelativeTime\"></p>

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn darkblue-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
        <a id=\"deleteEventButton\" href=\"\" class=\"btn red-btn square-btn\">Supprimer l'évenement</a>
      </div>
    </div>
  </div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 78
        echo "
";
        // line 79
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

<script>
\$(document).ready(function() {

\$('#calendar').fullCalendar({
    locale: 'fr',
    isRTL: false,
    themeSystem: 'bootstrap4',
    bootstrapFontAwesome: {
      close: 'fa-times',
      prev: 'fa-chevron-left',
      next: 'fa-chevron-right',
      prevYear: 'fa-angle-double-left',
      nextYear: 'fa-angle-double-right'
    },
    editable: true,
    firstDay: 1,
    weekends: false,
    timezone: \"local\",
    businessHours: {
      dow: [ 1, 2, 3, 4, 5 ],
      start: '08:00',
      end: '20:00',
    },
    minTime: \"08:00:00\",
    maxTime: \"20:00:00\",
    defaultView: 'agendaWeek',
    header: {
      left:   'month,agendaWeek',
      center: 'title',
      right:  'today prev,next'
    },
    columnHeaderFormat: 'dddd D',
    nowIndicator: true,
    events: '";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("calendar_events");
        echo "',
    eventColor: '#153F68',
    contentHeight: 'auto',
    views: {
      agenda: {
        titleFormat: 'MMMM YYYY'
      },
      list: {
        titleFormat: 'MMMM YYYY'
      }
    },
    eventClick: function(event, jsEvent, view) {
      console.log(event);

      \$('#eventName').html(event.title);
      \$('#eventCreatedBy').html(event.createdBy);
      \$('#eventStartDate').html(moment(event.start).format('dddd Do MMMM YYYY'));
      \$('#eventStartTime').html(moment(event.start).format('LT'));
      \$('#eventEndDate').html(moment(event.end).format('dddd Do MMMM YYYY'));
      \$('#eventEndTime').html(moment(event.end).format('LT'));

      var relativeTime = moment(event.start).fromNow();
      if (moment(event.start).isBefore(moment())) {
        \$('#eventRelativeTime').html(\"Cet evenement a eu lieu : \" + relativeTime);
      } else {
        \$('#eventRelativeTime').html(\"Cet evenement aura lieu : \" + relativeTime);
      }
      \$('#deleteEventButton').attr(\"href\", '";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 141, $this->source); })()), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "' + '/calendar/events/delete/' + event.id);
      \$('#eventDetailsModal').modal();

      \$(this).css('border-color', 'red');

  }
});

function redimensionnement() {
  var result = document.getElementById('result');
  if(\"matchMedia\" in window) {
    if(window.matchMedia(\"(min-width:768px)\").matches) {
      \$('#calendar').fullCalendar('changeView', 'agendaWeek');
      \$('#calendar').fullCalendar({
        header: { left: '', center: 'title' }
      });
    } else {
      \$('#calendar').fullCalendar('changeView', 'listWeek');
    }
  }
}
// On lie l'événement resize à la fonction
window.addEventListener('resize', redimensionnement, false);








});
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 141,  200 => 114,  162 => 79,  159 => 78,  150 => 77,  100 => 35,  96 => 34,  91 => 32,  86 => 30,  82 => 29,  57 => 6,  48 => 5,  38 => 3,  36 => 1,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set page_title = 'Calendrier' %}

{% extends 'base/base.html.twig' %}

{% block content %}

<button type=\"button\" class=\"btn darkblue-btn square-btn\" data-toggle=\"modal\" data-target=\"#eventAddModal\">
  Ajouter un événement
</button>

<div class=\"container calendar-wrapper\">
  <div id='calendar' class=\"calendar\">

  </div>
</div>

<!-- Create Calendar Event Modal -->
<div class=\"modal fade modal-form\" id=\"eventAddModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"eventAddModal\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"eventAddModalLabel\">Ajouter un événement</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">

        {{ form_start(form, {'attr': {'id': 'createEventForm', 'class': 'create-event-form'}}) }}
          {{ form_row(form.name) }}
          <p>Date de debut :</p>
          {{ form_row(form.start, {'attr': {'class': 'form-date-picker'}}) }}
          <p>Date de fin :</p>
          {{ form_row(form.end, {'attr': {'class': 'form-date-picker'}}) }}
        {{ form_end(form) }}

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn red-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn blue-btn square-btn\" form=\"createEventForm\">Créer l'évenement</button>
      </div>
    </div>
  </div>
</div>

<!-- Calendar Event Details Modal -->
<div class=\"modal fade modal-form\" id=\"eventDetailsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"eventDetailsModal\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"eventDetailsModal\">Details de l'événement</h5>
      </div>
      <div class=\"modal-body\">

        <p>Nom de l'événement : <span id=\"eventName\"></span></p>
        <p>Cree par : <span id=\"eventCreatedBy\"></span></p>
        <p>Date de debut : <span id=\"eventStartDate\"></span></p>
        <p>Heure de debut : <span id=\"eventStartTime\"></span></p>
        <p>Date de fin : <span id=\"eventEndDate\"></span></p>
        <p>Heure de fin : <span id=\"eventEndTime\"></span></p>
        <p id=\"eventRelativeTime\"></p>

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn darkblue-btn square-btn\" data-dismiss=\"modal\">Fermer</button>
        <a id=\"deleteEventButton\" href=\"\" class=\"btn red-btn square-btn\">Supprimer l'évenement</a>
      </div>
    </div>
  </div>
</div>



{% endblock %}


{% block footer %}

{{ parent() }}

<script>
\$(document).ready(function() {

\$('#calendar').fullCalendar({
    locale: 'fr',
    isRTL: false,
    themeSystem: 'bootstrap4',
    bootstrapFontAwesome: {
      close: 'fa-times',
      prev: 'fa-chevron-left',
      next: 'fa-chevron-right',
      prevYear: 'fa-angle-double-left',
      nextYear: 'fa-angle-double-right'
    },
    editable: true,
    firstDay: 1,
    weekends: false,
    timezone: \"local\",
    businessHours: {
      dow: [ 1, 2, 3, 4, 5 ],
      start: '08:00',
      end: '20:00',
    },
    minTime: \"08:00:00\",
    maxTime: \"20:00:00\",
    defaultView: 'agendaWeek',
    header: {
      left:   'month,agendaWeek',
      center: 'title',
      right:  'today prev,next'
    },
    columnHeaderFormat: 'dddd D',
    nowIndicator: true,
    events: '{{ url('calendar_events') }}',
    eventColor: '#153F68',
    contentHeight: 'auto',
    views: {
      agenda: {
        titleFormat: 'MMMM YYYY'
      },
      list: {
        titleFormat: 'MMMM YYYY'
      }
    },
    eventClick: function(event, jsEvent, view) {
      console.log(event);

      \$('#eventName').html(event.title);
      \$('#eventCreatedBy').html(event.createdBy);
      \$('#eventStartDate').html(moment(event.start).format('dddd Do MMMM YYYY'));
      \$('#eventStartTime').html(moment(event.start).format('LT'));
      \$('#eventEndDate').html(moment(event.end).format('dddd Do MMMM YYYY'));
      \$('#eventEndTime').html(moment(event.end).format('LT'));

      var relativeTime = moment(event.start).fromNow();
      if (moment(event.start).isBefore(moment())) {
        \$('#eventRelativeTime').html(\"Cet evenement a eu lieu : \" + relativeTime);
      } else {
        \$('#eventRelativeTime').html(\"Cet evenement aura lieu : \" + relativeTime);
      }
      \$('#deleteEventButton').attr(\"href\", '{{ app.request.getSchemeAndHttpHost() }}' + '/calendar/events/delete/' + event.id);
      \$('#eventDetailsModal').modal();

      \$(this).css('border-color', 'red');

  }
});

function redimensionnement() {
  var result = document.getElementById('result');
  if(\"matchMedia\" in window) {
    if(window.matchMedia(\"(min-width:768px)\").matches) {
      \$('#calendar').fullCalendar('changeView', 'agendaWeek');
      \$('#calendar').fullCalendar({
        header: { left: '', center: 'title' }
      });
    } else {
      \$('#calendar').fullCalendar('changeView', 'listWeek');
    }
  }
}
// On lie l'événement resize à la fonction
window.addEventListener('resize', redimensionnement, false);








});
</script>

{% endblock %}
", "calendar.html.twig", "/Users/sebastien/Sites/gsb/templates/calendar.html.twig");
    }
}
