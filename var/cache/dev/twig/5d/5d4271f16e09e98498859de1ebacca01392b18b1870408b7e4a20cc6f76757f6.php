<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_15bb75ac11aa5cd5a90162e22c880e7f234a1ee7e31cbff0ce75e65a8c3d3c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_7396399a424bcffe55f4049b934d66e8f26138f4e55110abf0ddcbb0c7591522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7396399a424bcffe55f4049b934d66e8f26138f4e55110abf0ddcbb0c7591522->enter($__internal_7396399a424bcffe55f4049b934d66e8f26138f4e55110abf0ddcbb0c7591522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_3a04e24a4a7fed5dd5e8a8c15cc2ab45c0ee3f58d37ceaec1d21c3ecb42649d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a04e24a4a7fed5dd5e8a8c15cc2ab45c0ee3f58d37ceaec1d21c3ecb42649d9->enter($__internal_3a04e24a4a7fed5dd5e8a8c15cc2ab45c0ee3f58d37ceaec1d21c3ecb42649d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7396399a424bcffe55f4049b934d66e8f26138f4e55110abf0ddcbb0c7591522->leave($__internal_7396399a424bcffe55f4049b934d66e8f26138f4e55110abf0ddcbb0c7591522_prof);

        
        $__internal_3a04e24a4a7fed5dd5e8a8c15cc2ab45c0ee3f58d37ceaec1d21c3ecb42649d9->leave($__internal_3a04e24a4a7fed5dd5e8a8c15cc2ab45c0ee3f58d37ceaec1d21c3ecb42649d9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c405eb9dfc95862aa952b015751a09e2e1dd81bc562fa8370c43d0cd104eb23d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c405eb9dfc95862aa952b015751a09e2e1dd81bc562fa8370c43d0cd104eb23d->enter($__internal_c405eb9dfc95862aa952b015751a09e2e1dd81bc562fa8370c43d0cd104eb23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4dd9e6ce569089cf2fb8259c654fc5c671b995b64f03917ec6748f316be707f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd9e6ce569089cf2fb8259c654fc5c671b995b64f03917ec6748f316be707f0->enter($__internal_4dd9e6ce569089cf2fb8259c654fc5c671b995b64f03917ec6748f316be707f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4dd9e6ce569089cf2fb8259c654fc5c671b995b64f03917ec6748f316be707f0->leave($__internal_4dd9e6ce569089cf2fb8259c654fc5c671b995b64f03917ec6748f316be707f0_prof);

        
        $__internal_c405eb9dfc95862aa952b015751a09e2e1dd81bc562fa8370c43d0cd104eb23d->leave($__internal_c405eb9dfc95862aa952b015751a09e2e1dd81bc562fa8370c43d0cd104eb23d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/zeljko/projects/istorija58.in.rs/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
