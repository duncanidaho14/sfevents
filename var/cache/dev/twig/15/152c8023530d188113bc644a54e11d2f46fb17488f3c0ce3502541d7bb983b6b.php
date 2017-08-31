<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f621f4d5cc9846fe4fa90440c309cee532381a63715787900e89548f28b50993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_7d0f41c2cf1b4801bdd1eaf859a344fe0d65002d85821f554e1f64f7b7c41d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d0f41c2cf1b4801bdd1eaf859a344fe0d65002d85821f554e1f64f7b7c41d82->enter($__internal_7d0f41c2cf1b4801bdd1eaf859a344fe0d65002d85821f554e1f64f7b7c41d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1d3ec904c2fa7f91efa1da5e4f72313a29afe4db316797105ea615a0e0d83587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3ec904c2fa7f91efa1da5e4f72313a29afe4db316797105ea615a0e0d83587->enter($__internal_1d3ec904c2fa7f91efa1da5e4f72313a29afe4db316797105ea615a0e0d83587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d0f41c2cf1b4801bdd1eaf859a344fe0d65002d85821f554e1f64f7b7c41d82->leave($__internal_7d0f41c2cf1b4801bdd1eaf859a344fe0d65002d85821f554e1f64f7b7c41d82_prof);

        
        $__internal_1d3ec904c2fa7f91efa1da5e4f72313a29afe4db316797105ea615a0e0d83587->leave($__internal_1d3ec904c2fa7f91efa1da5e4f72313a29afe4db316797105ea615a0e0d83587_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e560b7281846cb96d211ce4dd7ddbbd963379b0a443a38126a2d167885b82c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e560b7281846cb96d211ce4dd7ddbbd963379b0a443a38126a2d167885b82c80->enter($__internal_e560b7281846cb96d211ce4dd7ddbbd963379b0a443a38126a2d167885b82c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fff14c994f3e42174b49a84be8b9e7f91148fe30a5e3057c7a62dfe1169f9112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff14c994f3e42174b49a84be8b9e7f91148fe30a5e3057c7a62dfe1169f9112->enter($__internal_fff14c994f3e42174b49a84be8b9e7f91148fe30a5e3057c7a62dfe1169f9112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fff14c994f3e42174b49a84be8b9e7f91148fe30a5e3057c7a62dfe1169f9112->leave($__internal_fff14c994f3e42174b49a84be8b9e7f91148fe30a5e3057c7a62dfe1169f9112_prof);

        
        $__internal_e560b7281846cb96d211ce4dd7ddbbd963379b0a443a38126a2d167885b82c80->leave($__internal_e560b7281846cb96d211ce4dd7ddbbd963379b0a443a38126a2d167885b82c80_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1c5cac735648345b7f3601de3ce50934ce8c258e9f77d87ccd633969a6f6184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c5cac735648345b7f3601de3ce50934ce8c258e9f77d87ccd633969a6f6184->enter($__internal_d1c5cac735648345b7f3601de3ce50934ce8c258e9f77d87ccd633969a6f6184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_945adfaf2f8b577e7200f20240b94a95091c10c4e8771584fef1e40023bddba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945adfaf2f8b577e7200f20240b94a95091c10c4e8771584fef1e40023bddba4->enter($__internal_945adfaf2f8b577e7200f20240b94a95091c10c4e8771584fef1e40023bddba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_945adfaf2f8b577e7200f20240b94a95091c10c4e8771584fef1e40023bddba4->leave($__internal_945adfaf2f8b577e7200f20240b94a95091c10c4e8771584fef1e40023bddba4_prof);

        
        $__internal_d1c5cac735648345b7f3601de3ce50934ce8c258e9f77d87ccd633969a6f6184->leave($__internal_d1c5cac735648345b7f3601de3ce50934ce8c258e9f77d87ccd633969a6f6184_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58956f89c4303ab1b45eae6788618da12bfa0ed77f75afd01b2e71431ca707dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58956f89c4303ab1b45eae6788618da12bfa0ed77f75afd01b2e71431ca707dc->enter($__internal_58956f89c4303ab1b45eae6788618da12bfa0ed77f75afd01b2e71431ca707dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_78425761648d3a72ba25898ad1e21cd2e3ab713b625bd3ae61c629033087d360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78425761648d3a72ba25898ad1e21cd2e3ab713b625bd3ae61c629033087d360->enter($__internal_78425761648d3a72ba25898ad1e21cd2e3ab713b625bd3ae61c629033087d360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_78425761648d3a72ba25898ad1e21cd2e3ab713b625bd3ae61c629033087d360->leave($__internal_78425761648d3a72ba25898ad1e21cd2e3ab713b625bd3ae61c629033087d360_prof);

        
        $__internal_58956f89c4303ab1b45eae6788618da12bfa0ed77f75afd01b2e71431ca707dc->leave($__internal_58956f89c4303ab1b45eae6788618da12bfa0ed77f75afd01b2e71431ca707dc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\cours\\teacherdunet\\symfony3\\kackStarterpart2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
