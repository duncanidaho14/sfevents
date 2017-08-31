<?php

/* events/index.html.twig */
class __TwigTemplate_688bc2ad367143825d4c352e16001b72ed08d1d09b6374321a171f994ef110ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9512a575424488d4dca4d0706c64e9fa596eac314463d98fdfe74efa5e49c70a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9512a575424488d4dca4d0706c64e9fa596eac314463d98fdfe74efa5e49c70a->enter($__internal_9512a575424488d4dca4d0706c64e9fa596eac314463d98fdfe74efa5e49c70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/index.html.twig"));

        $__internal_7e4ddeb47cde713b55619ea1e970b959efd5801a0193aec640c5efeab2da819d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4ddeb47cde713b55619ea1e970b959efd5801a0193aec640c5efeab2da819d->enter($__internal_7e4ddeb47cde713b55619ea1e970b959efd5801a0193aec640c5efeab2da819d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>EventBrote</title>
</head>
<body>
    
    <h1> ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->pluralize(twig_length_filter($this->env, ($context["events"] ?? $this->getContext($context, "events"))), "Event", "Events"), "html", null, true);
        echo " </h1> 
    ";
        // line 11
        echo "
    ";
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 20
            echo "        <article>
            <header>
                <h2><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_path", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</a></h2>
            </header>
            ";
            // line 24
            echo $this->env->getExtension('AppBundle\Twig\MarkdownExtension')->parseMarkdown($this->getAttribute($context["event"], "description", array()));
            echo "
            <ul>
                <li><strong>Date:</strong> ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startsAt", array())), "html", null, true);
            echo "</li>
                <li><strong>Location:</strong> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "location", array()), "html", null, true);
            echo "</li>
                <li>
                    <strong>Price:</strong>

                    ";
            // line 31
            echo $this->env->getExtension('AppBundle\Twig\AppExtension')->formatPrice($context["event"]);
            echo "
                    
                    ";
            // line 38
            echo "                </li>
                ";
            // line 40
            echo "            </ul>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "


    
</body>
</html>
";
        
        $__internal_9512a575424488d4dca4d0706c64e9fa596eac314463d98fdfe74efa5e49c70a->leave($__internal_9512a575424488d4dca4d0706c64e9fa596eac314463d98fdfe74efa5e49c70a_prof);

        
        $__internal_7e4ddeb47cde713b55619ea1e970b959efd5801a0193aec640c5efeab2da819d->leave($__internal_7e4ddeb47cde713b55619ea1e970b959efd5801a0193aec640c5efeab2da819d_prof);

    }

    public function getTemplateName()
    {
        return "events/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 43,  82 => 40,  79 => 38,  74 => 31,  67 => 27,  63 => 26,  58 => 24,  51 => 22,  47 => 20,  42 => 19,  39 => 11,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>EventBrote</title>
</head>
<body>
    
    <h1> {{ pluralize(events|length, 'Event', 'Events') }} </h1> 
    {#{{ someMarkdown|raw }}#}

    {# <h1> {% set events_count = events|length %} 
        {% if events_count == 1 %}
            1 Event
        {% else %}
            {{ events_count }} Events
        {% endif %}
    </h1> #}
    {% for event in events %}
        <article>
            <header>
                <h2><a href=\"{{ path('event_path', {'id': event.id }) }}\">{{ event.name }}</a></h2>
            </header>
            {{ event.description|markdownify }}
            <ul>
                <li><strong>Date:</strong> {{ event.startsAt|date }}</li>
                <li><strong>Location:</strong> {{ event.location }}</li>
                <li>
                    <strong>Price:</strong>

                    {{ format_price(event) }}
                    
                    {# {% if event.price == 0 %}
                        Free
                    {% else %} 
                        {{ event.price|localizedcurrency('USD') }}
                    {% endif %} #}
                </li>
                {#<li><strong>Price:</strong> {{ event.price|number_format }}</li>#}
            </ul>
        </article>
    {% endfor %}



    
</body>
</html>
", "events/index.html.twig", "C:\\wamp\\www\\cours\\teacherdunet\\symfony3\\kackStarterpart2\\app\\Resources\\views\\events\\index.html.twig");
    }
}
