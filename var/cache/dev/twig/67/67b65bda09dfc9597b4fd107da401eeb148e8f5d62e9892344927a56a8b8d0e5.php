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
        $__internal_9a6307d4ed00b4ca2090f17a6c97741572b96d864bbd325f57e6af14e0024591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6307d4ed00b4ca2090f17a6c97741572b96d864bbd325f57e6af14e0024591->enter($__internal_9a6307d4ed00b4ca2090f17a6c97741572b96d864bbd325f57e6af14e0024591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a9dcc6973f19fc7d31c6356533024a78dc11b9eff5941867de7ec43337cdb44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9dcc6973f19fc7d31c6356533024a78dc11b9eff5941867de7ec43337cdb44c->enter($__internal_a9dcc6973f19fc7d31c6356533024a78dc11b9eff5941867de7ec43337cdb44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9a6307d4ed00b4ca2090f17a6c97741572b96d864bbd325f57e6af14e0024591->leave($__internal_9a6307d4ed00b4ca2090f17a6c97741572b96d864bbd325f57e6af14e0024591_prof);

        
        $__internal_a9dcc6973f19fc7d31c6356533024a78dc11b9eff5941867de7ec43337cdb44c->leave($__internal_a9dcc6973f19fc7d31c6356533024a78dc11b9eff5941867de7ec43337cdb44c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d754992727e626583b0ef6ae4cd065250bbefe2a1222fb1a9debe5f4fa88923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d754992727e626583b0ef6ae4cd065250bbefe2a1222fb1a9debe5f4fa88923->enter($__internal_9d754992727e626583b0ef6ae4cd065250bbefe2a1222fb1a9debe5f4fa88923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1de765934f9bcc770d03e3b8eb850c6a4451de670dec57d369f0717dfefba957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de765934f9bcc770d03e3b8eb850c6a4451de670dec57d369f0717dfefba957->enter($__internal_1de765934f9bcc770d03e3b8eb850c6a4451de670dec57d369f0717dfefba957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1de765934f9bcc770d03e3b8eb850c6a4451de670dec57d369f0717dfefba957->leave($__internal_1de765934f9bcc770d03e3b8eb850c6a4451de670dec57d369f0717dfefba957_prof);

        
        $__internal_9d754992727e626583b0ef6ae4cd065250bbefe2a1222fb1a9debe5f4fa88923->leave($__internal_9d754992727e626583b0ef6ae4cd065250bbefe2a1222fb1a9debe5f4fa88923_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_762508c92cf3b687b097802121eabeb1a19a521f37de808f69a6de9f4036a686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762508c92cf3b687b097802121eabeb1a19a521f37de808f69a6de9f4036a686->enter($__internal_762508c92cf3b687b097802121eabeb1a19a521f37de808f69a6de9f4036a686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d18f3c961c4ee94cb450796e2b2a2f2f31f2ead8e2007a0e3bb4eda085f415e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18f3c961c4ee94cb450796e2b2a2f2f31f2ead8e2007a0e3bb4eda085f415e8->enter($__internal_d18f3c961c4ee94cb450796e2b2a2f2f31f2ead8e2007a0e3bb4eda085f415e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d18f3c961c4ee94cb450796e2b2a2f2f31f2ead8e2007a0e3bb4eda085f415e8->leave($__internal_d18f3c961c4ee94cb450796e2b2a2f2f31f2ead8e2007a0e3bb4eda085f415e8_prof);

        
        $__internal_762508c92cf3b687b097802121eabeb1a19a521f37de808f69a6de9f4036a686->leave($__internal_762508c92cf3b687b097802121eabeb1a19a521f37de808f69a6de9f4036a686_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c4db3fac8ff3f7da86d367c48e237f31a8e34977cde2710893c82707642cd69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4db3fac8ff3f7da86d367c48e237f31a8e34977cde2710893c82707642cd69->enter($__internal_0c4db3fac8ff3f7da86d367c48e237f31a8e34977cde2710893c82707642cd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b71c4d63e960124b32d830bd90f5bbda680fd1bc142ec3ed604041ebc208839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b71c4d63e960124b32d830bd90f5bbda680fd1bc142ec3ed604041ebc208839->enter($__internal_5b71c4d63e960124b32d830bd90f5bbda680fd1bc142ec3ed604041ebc208839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5b71c4d63e960124b32d830bd90f5bbda680fd1bc142ec3ed604041ebc208839->leave($__internal_5b71c4d63e960124b32d830bd90f5bbda680fd1bc142ec3ed604041ebc208839_prof);

        
        $__internal_0c4db3fac8ff3f7da86d367c48e237f31a8e34977cde2710893c82707642cd69->leave($__internal_0c4db3fac8ff3f7da86d367c48e237f31a8e34977cde2710893c82707642cd69_prof);

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
", "@Twig/layout.html.twig", "/www/webvol5/q5/0messcb7d0j2zxl/istorija58.in.rs/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
