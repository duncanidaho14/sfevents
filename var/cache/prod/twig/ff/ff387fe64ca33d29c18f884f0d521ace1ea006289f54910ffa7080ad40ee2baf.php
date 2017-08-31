<?php

/* projects/index.html.twig */
class __TwigTemplate_5d34c712a3a777b5c1f9930d27478b878b264c5396d355c9533b6c004159982b extends Twig_Template
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
        echo "<h1> ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["projects"] ?? null)), "html", null, true);
        echo " projects</h1>

<ul>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 5
            echo "\t<li> ";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo " </li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "projects/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  30 => 5,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "projects/index.html.twig", "C:\\wamp\\www\\cours\\teacherdunet\\symfony3\\kackStarterpart2\\app\\Resources\\views\\projects\\index.html.twig");
    }
}
