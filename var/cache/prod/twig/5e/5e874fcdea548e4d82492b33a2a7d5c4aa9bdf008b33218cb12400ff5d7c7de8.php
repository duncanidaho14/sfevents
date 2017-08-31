<?php

/* events/index.html.twig */
class __TwigTemplate_07c71ca6015c05bcfcffc3584c43af51aebf6aaf52e0446bc90a28d9c5858f89 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>EventBrote</title>
</head>
<body>
    <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["events"] ?? null)), "html", null, true);
        echo " Events</h1>
    ";
        // line 9
        echo ($context["someMarkdown"] ?? null);
        echo "
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 11
            echo "        <article>
            <header>
                <h2>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</h2>
            </header>
            <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
            echo "</p>
            <ul>
                <li><strong>Date:</strong> ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startsAt", array())), "html", null, true);
            echo "</li>
                <li><strong>Location:</strong> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "location", array()), "html", null, true);
            echo "</li>
                <li><strong>Price:</strong> ";
            // line 19
            echo twig_escape_filter($this->env, twig_localized_currency_filter($this->getAttribute($context["event"], "price", array()), "USD"), "html", null, true);
            echo "</li>
                ";
            // line 21
            echo "            </ul>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "


    
</body>
</html>
";
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
        return array (  74 => 24,  66 => 21,  62 => 19,  58 => 18,  54 => 17,  49 => 15,  44 => 13,  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "events/index.html.twig", "C:\\wamp\\www\\cours\\teacherdunet\\symfony3\\kackStarterpart2\\app\\Resources\\views\\events\\index.html.twig");
    }
}
