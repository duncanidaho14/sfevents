<?php

/* base.html.twig */
class __TwigTemplate_e28bd062d690aed3965710b8eab66d0d244606b075a6ce9d44a80cac4bab5a43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbe42dc5a26c5deb32763f108d0b16a90d16498fd26fc0901cb7751473ce7cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe42dc5a26c5deb32763f108d0b16a90d16498fd26fc0901cb7751473ce7cbd->enter($__internal_fbe42dc5a26c5deb32763f108d0b16a90d16498fd26fc0901cb7751473ce7cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_684114253101c670f99a5fba648bae6db4bb59dd4989dc2d558943d1f58c5b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684114253101c670f99a5fba648bae6db4bb59dd4989dc2d558943d1f58c5b42->enter($__internal_684114253101c670f99a5fba648bae6db4bb59dd4989dc2d558943d1f58c5b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fbe42dc5a26c5deb32763f108d0b16a90d16498fd26fc0901cb7751473ce7cbd->leave($__internal_fbe42dc5a26c5deb32763f108d0b16a90d16498fd26fc0901cb7751473ce7cbd_prof);

        
        $__internal_684114253101c670f99a5fba648bae6db4bb59dd4989dc2d558943d1f58c5b42->leave($__internal_684114253101c670f99a5fba648bae6db4bb59dd4989dc2d558943d1f58c5b42_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6dafa948aea24f634eaa8ab8fb300569bad557a46b06785cf6b623adbee661e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6dafa948aea24f634eaa8ab8fb300569bad557a46b06785cf6b623adbee661e->enter($__internal_b6dafa948aea24f634eaa8ab8fb300569bad557a46b06785cf6b623adbee661e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3218869c97b6fd76a7a31e70cc2cd7304eebcf298e68297fbbe19910400b5f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3218869c97b6fd76a7a31e70cc2cd7304eebcf298e68297fbbe19910400b5f35->enter($__internal_3218869c97b6fd76a7a31e70cc2cd7304eebcf298e68297fbbe19910400b5f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3218869c97b6fd76a7a31e70cc2cd7304eebcf298e68297fbbe19910400b5f35->leave($__internal_3218869c97b6fd76a7a31e70cc2cd7304eebcf298e68297fbbe19910400b5f35_prof);

        
        $__internal_b6dafa948aea24f634eaa8ab8fb300569bad557a46b06785cf6b623adbee661e->leave($__internal_b6dafa948aea24f634eaa8ab8fb300569bad557a46b06785cf6b623adbee661e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a74a8b7227d184e9ab952a43e4c98007b5d0d726e99ac50af834258441ef247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a74a8b7227d184e9ab952a43e4c98007b5d0d726e99ac50af834258441ef247->enter($__internal_3a74a8b7227d184e9ab952a43e4c98007b5d0d726e99ac50af834258441ef247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_87dd49d7aa3b23ac00f58ffdafc09b75480e7cfe38df5d87360c8b2cf11363a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87dd49d7aa3b23ac00f58ffdafc09b75480e7cfe38df5d87360c8b2cf11363a5->enter($__internal_87dd49d7aa3b23ac00f58ffdafc09b75480e7cfe38df5d87360c8b2cf11363a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_87dd49d7aa3b23ac00f58ffdafc09b75480e7cfe38df5d87360c8b2cf11363a5->leave($__internal_87dd49d7aa3b23ac00f58ffdafc09b75480e7cfe38df5d87360c8b2cf11363a5_prof);

        
        $__internal_3a74a8b7227d184e9ab952a43e4c98007b5d0d726e99ac50af834258441ef247->leave($__internal_3a74a8b7227d184e9ab952a43e4c98007b5d0d726e99ac50af834258441ef247_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0bf7fdd9e95a08d147b4cd406ecd329e5e6e1fd6c31ed0f40a37fb8a3e1d603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0bf7fdd9e95a08d147b4cd406ecd329e5e6e1fd6c31ed0f40a37fb8a3e1d603->enter($__internal_c0bf7fdd9e95a08d147b4cd406ecd329e5e6e1fd6c31ed0f40a37fb8a3e1d603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b57763c398457f9cfe69feef7632de344738fb451a13950d5ef84af3ca49644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b57763c398457f9cfe69feef7632de344738fb451a13950d5ef84af3ca49644->enter($__internal_5b57763c398457f9cfe69feef7632de344738fb451a13950d5ef84af3ca49644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5b57763c398457f9cfe69feef7632de344738fb451a13950d5ef84af3ca49644->leave($__internal_5b57763c398457f9cfe69feef7632de344738fb451a13950d5ef84af3ca49644_prof);

        
        $__internal_c0bf7fdd9e95a08d147b4cd406ecd329e5e6e1fd6c31ed0f40a37fb8a3e1d603->leave($__internal_c0bf7fdd9e95a08d147b4cd406ecd329e5e6e1fd6c31ed0f40a37fb8a3e1d603_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f068923e997b04e845a0852c4c8f45911b1568ee7043de0f1b659b43b112fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f068923e997b04e845a0852c4c8f45911b1568ee7043de0f1b659b43b112fe2->enter($__internal_0f068923e997b04e845a0852c4c8f45911b1568ee7043de0f1b659b43b112fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_51fc6d09177e54c6e96f1160ccc7bb93262e113034419e2814f9fe385e9f74a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fc6d09177e54c6e96f1160ccc7bb93262e113034419e2814f9fe385e9f74a0->enter($__internal_51fc6d09177e54c6e96f1160ccc7bb93262e113034419e2814f9fe385e9f74a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_51fc6d09177e54c6e96f1160ccc7bb93262e113034419e2814f9fe385e9f74a0->leave($__internal_51fc6d09177e54c6e96f1160ccc7bb93262e113034419e2814f9fe385e9f74a0_prof);

        
        $__internal_0f068923e997b04e845a0852c4c8f45911b1568ee7043de0f1b659b43b112fe2->leave($__internal_0f068923e997b04e845a0852c4c8f45911b1568ee7043de0f1b659b43b112fe2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\cours\\teacherdunet\\symfony3\\kackStarterpart2\\app\\Resources\\views\\base.html.twig");
    }
}
