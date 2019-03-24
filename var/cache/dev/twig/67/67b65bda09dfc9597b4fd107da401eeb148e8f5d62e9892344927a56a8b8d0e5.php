<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_20669322a809ecfe860f40f7f7b0bf92359b688482b90222f21cb3bc22061f4c extends Twig_Template
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
        $__internal_ac2ce05ed9b21a227689f45eb92109f6b36e693249a1bd4be53be339ecaa5f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac2ce05ed9b21a227689f45eb92109f6b36e693249a1bd4be53be339ecaa5f42->enter($__internal_ac2ce05ed9b21a227689f45eb92109f6b36e693249a1bd4be53be339ecaa5f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b1001123d27628b25d1317b3cf645291f81aaf2498887c696d9936b78d571649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1001123d27628b25d1317b3cf645291f81aaf2498887c696d9936b78d571649->enter($__internal_b1001123d27628b25d1317b3cf645291f81aaf2498887c696d9936b78d571649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ac2ce05ed9b21a227689f45eb92109f6b36e693249a1bd4be53be339ecaa5f42->leave($__internal_ac2ce05ed9b21a227689f45eb92109f6b36e693249a1bd4be53be339ecaa5f42_prof);

        
        $__internal_b1001123d27628b25d1317b3cf645291f81aaf2498887c696d9936b78d571649->leave($__internal_b1001123d27628b25d1317b3cf645291f81aaf2498887c696d9936b78d571649_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_096ed1fd9039cb2301bc50c471ca09e22e739ed659f98ed5632d1e8dd0f2f5f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096ed1fd9039cb2301bc50c471ca09e22e739ed659f98ed5632d1e8dd0f2f5f2->enter($__internal_096ed1fd9039cb2301bc50c471ca09e22e739ed659f98ed5632d1e8dd0f2f5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6cb9386d45d4c103074cb997275822a33510dc518c178c0d3aa3eb0a67c42a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb9386d45d4c103074cb997275822a33510dc518c178c0d3aa3eb0a67c42a34->enter($__internal_6cb9386d45d4c103074cb997275822a33510dc518c178c0d3aa3eb0a67c42a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6cb9386d45d4c103074cb997275822a33510dc518c178c0d3aa3eb0a67c42a34->leave($__internal_6cb9386d45d4c103074cb997275822a33510dc518c178c0d3aa3eb0a67c42a34_prof);

        
        $__internal_096ed1fd9039cb2301bc50c471ca09e22e739ed659f98ed5632d1e8dd0f2f5f2->leave($__internal_096ed1fd9039cb2301bc50c471ca09e22e739ed659f98ed5632d1e8dd0f2f5f2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae8e84380938ff4c0f80e3c5cb7721c64032f08dde36c9d70ebf581ed8663e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8e84380938ff4c0f80e3c5cb7721c64032f08dde36c9d70ebf581ed8663e5d->enter($__internal_ae8e84380938ff4c0f80e3c5cb7721c64032f08dde36c9d70ebf581ed8663e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5638541547e836666ee7f074c51a27d77179f27fbc849e8a1e935d8bac9f82f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5638541547e836666ee7f074c51a27d77179f27fbc849e8a1e935d8bac9f82f1->enter($__internal_5638541547e836666ee7f074c51a27d77179f27fbc849e8a1e935d8bac9f82f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5638541547e836666ee7f074c51a27d77179f27fbc849e8a1e935d8bac9f82f1->leave($__internal_5638541547e836666ee7f074c51a27d77179f27fbc849e8a1e935d8bac9f82f1_prof);

        
        $__internal_ae8e84380938ff4c0f80e3c5cb7721c64032f08dde36c9d70ebf581ed8663e5d->leave($__internal_ae8e84380938ff4c0f80e3c5cb7721c64032f08dde36c9d70ebf581ed8663e5d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d27330009adb0fdda731df30d61a268c7039a1430f815f7a7380dd215f09d4c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d27330009adb0fdda731df30d61a268c7039a1430f815f7a7380dd215f09d4c6->enter($__internal_d27330009adb0fdda731df30d61a268c7039a1430f815f7a7380dd215f09d4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3530a2caf2f496f14f2dc71f008d81fefc9573bbfd58425b1d72fd58427bb803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3530a2caf2f496f14f2dc71f008d81fefc9573bbfd58425b1d72fd58427bb803->enter($__internal_3530a2caf2f496f14f2dc71f008d81fefc9573bbfd58425b1d72fd58427bb803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3530a2caf2f496f14f2dc71f008d81fefc9573bbfd58425b1d72fd58427bb803->leave($__internal_3530a2caf2f496f14f2dc71f008d81fefc9573bbfd58425b1d72fd58427bb803_prof);

        
        $__internal_d27330009adb0fdda731df30d61a268c7039a1430f815f7a7380dd215f09d4c6->leave($__internal_d27330009adb0fdda731df30d61a268c7039a1430f815f7a7380dd215f09d4c6_prof);

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
", "@Twig/layout.html.twig", "/home/zeljko/projects/istorija58.in.rs/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
