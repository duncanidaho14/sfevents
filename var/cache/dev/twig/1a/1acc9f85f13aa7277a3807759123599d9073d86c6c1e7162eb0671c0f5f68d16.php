<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b9261139668cfe795ee6591bfaa9fed24c81866b74390da4dab6a6f8c74929ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56edff5e93cfc3c156a1517864d5755c5ce63c08832ff5d7b91cca52c6a6cf58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56edff5e93cfc3c156a1517864d5755c5ce63c08832ff5d7b91cca52c6a6cf58->enter($__internal_56edff5e93cfc3c156a1517864d5755c5ce63c08832ff5d7b91cca52c6a6cf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b9f00ae11b0a311ab328679d9aaac46bc8146b881d2f46ec566c4c4dbe81f170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f00ae11b0a311ab328679d9aaac46bc8146b881d2f46ec566c4c4dbe81f170->enter($__internal_b9f00ae11b0a311ab328679d9aaac46bc8146b881d2f46ec566c4c4dbe81f170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56edff5e93cfc3c156a1517864d5755c5ce63c08832ff5d7b91cca52c6a6cf58->leave($__internal_56edff5e93cfc3c156a1517864d5755c5ce63c08832ff5d7b91cca52c6a6cf58_prof);

        
        $__internal_b9f00ae11b0a311ab328679d9aaac46bc8146b881d2f46ec566c4c4dbe81f170->leave($__internal_b9f00ae11b0a311ab328679d9aaac46bc8146b881d2f46ec566c4c4dbe81f170_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_785d927cb398164e4fff7f308154728c70c527e8b5f0ab6e311b167d0b0a6403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785d927cb398164e4fff7f308154728c70c527e8b5f0ab6e311b167d0b0a6403->enter($__internal_785d927cb398164e4fff7f308154728c70c527e8b5f0ab6e311b167d0b0a6403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f0588ab08c1d85856b7c32b0635eeca4e530a493a83522266a24f15963dc972f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0588ab08c1d85856b7c32b0635eeca4e530a493a83522266a24f15963dc972f->enter($__internal_f0588ab08c1d85856b7c32b0635eeca4e530a493a83522266a24f15963dc972f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f0588ab08c1d85856b7c32b0635eeca4e530a493a83522266a24f15963dc972f->leave($__internal_f0588ab08c1d85856b7c32b0635eeca4e530a493a83522266a24f15963dc972f_prof);

        
        $__internal_785d927cb398164e4fff7f308154728c70c527e8b5f0ab6e311b167d0b0a6403->leave($__internal_785d927cb398164e4fff7f308154728c70c527e8b5f0ab6e311b167d0b0a6403_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_501264e56062b26607496f64361b038436c16e102ae4ab5c16b65ac0ec037ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501264e56062b26607496f64361b038436c16e102ae4ab5c16b65ac0ec037ba1->enter($__internal_501264e56062b26607496f64361b038436c16e102ae4ab5c16b65ac0ec037ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d975186a2573deb150d57d528e2bad853978c3929d99fb33f34cfea56e9be05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d975186a2573deb150d57d528e2bad853978c3929d99fb33f34cfea56e9be05->enter($__internal_4d975186a2573deb150d57d528e2bad853978c3929d99fb33f34cfea56e9be05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4d975186a2573deb150d57d528e2bad853978c3929d99fb33f34cfea56e9be05->leave($__internal_4d975186a2573deb150d57d528e2bad853978c3929d99fb33f34cfea56e9be05_prof);

        
        $__internal_501264e56062b26607496f64361b038436c16e102ae4ab5c16b65ac0ec037ba1->leave($__internal_501264e56062b26607496f64361b038436c16e102ae4ab5c16b65ac0ec037ba1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3046c9fd285e0cf41d48c3ed6d1f28cf4cd466ef37f35feb7bb9a1d22b5469be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3046c9fd285e0cf41d48c3ed6d1f28cf4cd466ef37f35feb7bb9a1d22b5469be->enter($__internal_3046c9fd285e0cf41d48c3ed6d1f28cf4cd466ef37f35feb7bb9a1d22b5469be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12bb49a6b6ee8f3f0dbebb7937aeaebe0759bb7c7b669ac7f41b086ae20938b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bb49a6b6ee8f3f0dbebb7937aeaebe0759bb7c7b669ac7f41b086ae20938b4->enter($__internal_12bb49a6b6ee8f3f0dbebb7937aeaebe0759bb7c7b669ac7f41b086ae20938b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_12bb49a6b6ee8f3f0dbebb7937aeaebe0759bb7c7b669ac7f41b086ae20938b4->leave($__internal_12bb49a6b6ee8f3f0dbebb7937aeaebe0759bb7c7b669ac7f41b086ae20938b4_prof);

        
        $__internal_3046c9fd285e0cf41d48c3ed6d1f28cf4cd466ef37f35feb7bb9a1d22b5469be->leave($__internal_3046c9fd285e0cf41d48c3ed6d1f28cf4cd466ef37f35feb7bb9a1d22b5469be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\cours\\teacherdunet\\symfony3\\kackStarterpart2old\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
