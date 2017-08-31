<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_097a921329cf5bc4e2a728b0d114bb844c67a6c0f56c9f0cd6db1ad4449f14a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_733a4f2ae3dc3ed7e5bec59ffe5eaa26597e515eb7585d3245fb22ace1a646b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733a4f2ae3dc3ed7e5bec59ffe5eaa26597e515eb7585d3245fb22ace1a646b5->enter($__internal_733a4f2ae3dc3ed7e5bec59ffe5eaa26597e515eb7585d3245fb22ace1a646b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2e24fdeb38e2e425df2af3560682bfaa9f699945bc0e03021e51febaad9fc62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e24fdeb38e2e425df2af3560682bfaa9f699945bc0e03021e51febaad9fc62e->enter($__internal_2e24fdeb38e2e425df2af3560682bfaa9f699945bc0e03021e51febaad9fc62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_733a4f2ae3dc3ed7e5bec59ffe5eaa26597e515eb7585d3245fb22ace1a646b5->leave($__internal_733a4f2ae3dc3ed7e5bec59ffe5eaa26597e515eb7585d3245fb22ace1a646b5_prof);

        
        $__internal_2e24fdeb38e2e425df2af3560682bfaa9f699945bc0e03021e51febaad9fc62e->leave($__internal_2e24fdeb38e2e425df2af3560682bfaa9f699945bc0e03021e51febaad9fc62e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_af43a4ce765a820a9d74f54c6359428903bf4f4a6cacffd40f15d24b6ea8c235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af43a4ce765a820a9d74f54c6359428903bf4f4a6cacffd40f15d24b6ea8c235->enter($__internal_af43a4ce765a820a9d74f54c6359428903bf4f4a6cacffd40f15d24b6ea8c235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_72dc347e27211434ab971bfc8a818a1dfe93eade6ce34d13c5af297263199a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72dc347e27211434ab971bfc8a818a1dfe93eade6ce34d13c5af297263199a44->enter($__internal_72dc347e27211434ab971bfc8a818a1dfe93eade6ce34d13c5af297263199a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_72dc347e27211434ab971bfc8a818a1dfe93eade6ce34d13c5af297263199a44->leave($__internal_72dc347e27211434ab971bfc8a818a1dfe93eade6ce34d13c5af297263199a44_prof);

        
        $__internal_af43a4ce765a820a9d74f54c6359428903bf4f4a6cacffd40f15d24b6ea8c235->leave($__internal_af43a4ce765a820a9d74f54c6359428903bf4f4a6cacffd40f15d24b6ea8c235_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2af6794bff9628d718402ba372c60ea2112573003e72c33b51fa5a9a96cf91e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af6794bff9628d718402ba372c60ea2112573003e72c33b51fa5a9a96cf91e2->enter($__internal_2af6794bff9628d718402ba372c60ea2112573003e72c33b51fa5a9a96cf91e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b8910d2f2641ad6d74fbffd3a1b46df3a3a4d487cdae85087cf4189c21b206d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8910d2f2641ad6d74fbffd3a1b46df3a3a4d487cdae85087cf4189c21b206d8->enter($__internal_b8910d2f2641ad6d74fbffd3a1b46df3a3a4d487cdae85087cf4189c21b206d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b8910d2f2641ad6d74fbffd3a1b46df3a3a4d487cdae85087cf4189c21b206d8->leave($__internal_b8910d2f2641ad6d74fbffd3a1b46df3a3a4d487cdae85087cf4189c21b206d8_prof);

        
        $__internal_2af6794bff9628d718402ba372c60ea2112573003e72c33b51fa5a9a96cf91e2->leave($__internal_2af6794bff9628d718402ba372c60ea2112573003e72c33b51fa5a9a96cf91e2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ccad48aca2bdf25c0cfa8945c34d63e66b61e2a70ceac1d237ddb4b083c7ae71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccad48aca2bdf25c0cfa8945c34d63e66b61e2a70ceac1d237ddb4b083c7ae71->enter($__internal_ccad48aca2bdf25c0cfa8945c34d63e66b61e2a70ceac1d237ddb4b083c7ae71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5e940450ff6e2febb6c82b14fdf6f775b5cc6abfe8d40b93e3e8bdf870a20b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e940450ff6e2febb6c82b14fdf6f775b5cc6abfe8d40b93e3e8bdf870a20b22->enter($__internal_5e940450ff6e2febb6c82b14fdf6f775b5cc6abfe8d40b93e3e8bdf870a20b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5e940450ff6e2febb6c82b14fdf6f775b5cc6abfe8d40b93e3e8bdf870a20b22->leave($__internal_5e940450ff6e2febb6c82b14fdf6f775b5cc6abfe8d40b93e3e8bdf870a20b22_prof);

        
        $__internal_ccad48aca2bdf25c0cfa8945c34d63e66b61e2a70ceac1d237ddb4b083c7ae71->leave($__internal_ccad48aca2bdf25c0cfa8945c34d63e66b61e2a70ceac1d237ddb4b083c7ae71_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\cours\\teacherdunet\\symfony3\\kackStarterpart2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
