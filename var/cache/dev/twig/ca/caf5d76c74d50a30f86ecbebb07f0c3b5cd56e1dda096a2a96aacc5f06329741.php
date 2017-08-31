<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_903276bcfcfa92af168870dfc8ff11481fec8a5889defa0fbaf76464f984d371 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a62ff33dd507c1a96a12508fd696d38cbb40de2e3842528fefe172e29fec3cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a62ff33dd507c1a96a12508fd696d38cbb40de2e3842528fefe172e29fec3cf->enter($__internal_4a62ff33dd507c1a96a12508fd696d38cbb40de2e3842528fefe172e29fec3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_92f58ee8ef1b73365435cc605d4911fd1834eb039678a2d3d0b930e6164e83fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f58ee8ef1b73365435cc605d4911fd1834eb039678a2d3d0b930e6164e83fa->enter($__internal_92f58ee8ef1b73365435cc605d4911fd1834eb039678a2d3d0b930e6164e83fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_4a62ff33dd507c1a96a12508fd696d38cbb40de2e3842528fefe172e29fec3cf->leave($__internal_4a62ff33dd507c1a96a12508fd696d38cbb40de2e3842528fefe172e29fec3cf_prof);

        
        $__internal_92f58ee8ef1b73365435cc605d4911fd1834eb039678a2d3d0b930e6164e83fa->leave($__internal_92f58ee8ef1b73365435cc605d4911fd1834eb039678a2d3d0b930e6164e83fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_db39519ee167639cc8f9c9ac5897eb3a07513e02e6e49ae6697cde0d3cabc106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db39519ee167639cc8f9c9ac5897eb3a07513e02e6e49ae6697cde0d3cabc106->enter($__internal_db39519ee167639cc8f9c9ac5897eb3a07513e02e6e49ae6697cde0d3cabc106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1a93ced46f6111c015f657c00f88eda9d9fbfcadbb7b85f3bd63e1c9a881efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a93ced46f6111c015f657c00f88eda9d9fbfcadbb7b85f3bd63e1c9a881efc->enter($__internal_f1a93ced46f6111c015f657c00f88eda9d9fbfcadbb7b85f3bd63e1c9a881efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f1a93ced46f6111c015f657c00f88eda9d9fbfcadbb7b85f3bd63e1c9a881efc->leave($__internal_f1a93ced46f6111c015f657c00f88eda9d9fbfcadbb7b85f3bd63e1c9a881efc_prof);

        
        $__internal_db39519ee167639cc8f9c9ac5897eb3a07513e02e6e49ae6697cde0d3cabc106->leave($__internal_db39519ee167639cc8f9c9ac5897eb3a07513e02e6e49ae6697cde0d3cabc106_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_68a713d24c8301e17e2d015352ab514733600b298e7a72ec7598b847ae6a7f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a713d24c8301e17e2d015352ab514733600b298e7a72ec7598b847ae6a7f95->enter($__internal_68a713d24c8301e17e2d015352ab514733600b298e7a72ec7598b847ae6a7f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc714513c713e134e8bfb146b09e7a005b14c4ea50803956ba93fb540e3a86d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc714513c713e134e8bfb146b09e7a005b14c4ea50803956ba93fb540e3a86d8->enter($__internal_bc714513c713e134e8bfb146b09e7a005b14c4ea50803956ba93fb540e3a86d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bc714513c713e134e8bfb146b09e7a005b14c4ea50803956ba93fb540e3a86d8->leave($__internal_bc714513c713e134e8bfb146b09e7a005b14c4ea50803956ba93fb540e3a86d8_prof);

        
        $__internal_68a713d24c8301e17e2d015352ab514733600b298e7a72ec7598b847ae6a7f95->leave($__internal_68a713d24c8301e17e2d015352ab514733600b298e7a72ec7598b847ae6a7f95_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cd8ba7987dbc7d5b0f81f369ea226fb84301dfcb81e945dd0841b813f94b5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd8ba7987dbc7d5b0f81f369ea226fb84301dfcb81e945dd0841b813f94b5cb->enter($__internal_7cd8ba7987dbc7d5b0f81f369ea226fb84301dfcb81e945dd0841b813f94b5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c6429098625b55ca4c5520ec38a4c8a65d0d8521307d74c6e8ec2688f00cc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6429098625b55ca4c5520ec38a4c8a65d0d8521307d74c6e8ec2688f00cc1d->enter($__internal_8c6429098625b55ca4c5520ec38a4c8a65d0d8521307d74c6e8ec2688f00cc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8c6429098625b55ca4c5520ec38a4c8a65d0d8521307d74c6e8ec2688f00cc1d->leave($__internal_8c6429098625b55ca4c5520ec38a4c8a65d0d8521307d74c6e8ec2688f00cc1d_prof);

        
        $__internal_7cd8ba7987dbc7d5b0f81f369ea226fb84301dfcb81e945dd0841b813f94b5cb->leave($__internal_7cd8ba7987dbc7d5b0f81f369ea226fb84301dfcb81e945dd0841b813f94b5cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp\\www\\cours\\teacherdunet\\symfony3\\kackStarterpart2old\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
