<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_33edcd278bcff661ecc85f3d3e8d69140226ee0ca9329865c4ff28e778a43f52 extends Twig_Template
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
        $__internal_b20b985a26ffa24750b7a57c39f26950a4f1adc3f7e22525bc2a2a73d15585ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b20b985a26ffa24750b7a57c39f26950a4f1adc3f7e22525bc2a2a73d15585ea->enter($__internal_b20b985a26ffa24750b7a57c39f26950a4f1adc3f7e22525bc2a2a73d15585ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_0191678a5cbf737db6a030582608b1ef88e88883c13e106898b7c40399fcda05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0191678a5cbf737db6a030582608b1ef88e88883c13e106898b7c40399fcda05->enter($__internal_0191678a5cbf737db6a030582608b1ef88e88883c13e106898b7c40399fcda05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b20b985a26ffa24750b7a57c39f26950a4f1adc3f7e22525bc2a2a73d15585ea->leave($__internal_b20b985a26ffa24750b7a57c39f26950a4f1adc3f7e22525bc2a2a73d15585ea_prof);

        
        $__internal_0191678a5cbf737db6a030582608b1ef88e88883c13e106898b7c40399fcda05->leave($__internal_0191678a5cbf737db6a030582608b1ef88e88883c13e106898b7c40399fcda05_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp\\www\\cours\\teacherdunet\\symfony3\\kackStarterpart2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
