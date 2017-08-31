<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fbce99ec66089d0e9b2d7de48ebbc2683f9e4e4358d0704803e157bfcd827a6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c70c18317f610f0b3c0e450f7c2c834029a3cba90326af56c7adf706efa06ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c70c18317f610f0b3c0e450f7c2c834029a3cba90326af56c7adf706efa06ee->enter($__internal_4c70c18317f610f0b3c0e450f7c2c834029a3cba90326af56c7adf706efa06ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_813a332c6901b202498d602b13b5771c98859870d226e103796a34cada5d7ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813a332c6901b202498d602b13b5771c98859870d226e103796a34cada5d7ba1->enter($__internal_813a332c6901b202498d602b13b5771c98859870d226e103796a34cada5d7ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c70c18317f610f0b3c0e450f7c2c834029a3cba90326af56c7adf706efa06ee->leave($__internal_4c70c18317f610f0b3c0e450f7c2c834029a3cba90326af56c7adf706efa06ee_prof);

        
        $__internal_813a332c6901b202498d602b13b5771c98859870d226e103796a34cada5d7ba1->leave($__internal_813a332c6901b202498d602b13b5771c98859870d226e103796a34cada5d7ba1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37ac6f21d0645bdffdc3050230e0e05bc0f98ba5fb1e4b864212ac1c881ae8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ac6f21d0645bdffdc3050230e0e05bc0f98ba5fb1e4b864212ac1c881ae8d3->enter($__internal_37ac6f21d0645bdffdc3050230e0e05bc0f98ba5fb1e4b864212ac1c881ae8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7957ce77d78503e8e9fc008316735be96a069273f58f68bc13bbc7606b08ae7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7957ce77d78503e8e9fc008316735be96a069273f58f68bc13bbc7606b08ae7e->enter($__internal_7957ce77d78503e8e9fc008316735be96a069273f58f68bc13bbc7606b08ae7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7957ce77d78503e8e9fc008316735be96a069273f58f68bc13bbc7606b08ae7e->leave($__internal_7957ce77d78503e8e9fc008316735be96a069273f58f68bc13bbc7606b08ae7e_prof);

        
        $__internal_37ac6f21d0645bdffdc3050230e0e05bc0f98ba5fb1e4b864212ac1c881ae8d3->leave($__internal_37ac6f21d0645bdffdc3050230e0e05bc0f98ba5fb1e4b864212ac1c881ae8d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\www\\cours\\teacherdunet\\symfony3\\kackStarterpart2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
