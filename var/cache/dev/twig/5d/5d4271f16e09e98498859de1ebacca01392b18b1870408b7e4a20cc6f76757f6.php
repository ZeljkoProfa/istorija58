<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_15bb75ac11aa5cd5a90162e22c880e7f234a1ee7e31cbff0ce75e65a8c3d3c99 extends Twig_Template
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
        $__internal_9a418180cb49a80d5e64993d73b2754fff47ffe7656aa47875bd716ac83c0242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a418180cb49a80d5e64993d73b2754fff47ffe7656aa47875bd716ac83c0242->enter($__internal_9a418180cb49a80d5e64993d73b2754fff47ffe7656aa47875bd716ac83c0242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c080acb4d2a560f6ff842914b2995aa08dbcbb3742121401405b249a43bb44b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c080acb4d2a560f6ff842914b2995aa08dbcbb3742121401405b249a43bb44b3->enter($__internal_c080acb4d2a560f6ff842914b2995aa08dbcbb3742121401405b249a43bb44b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a418180cb49a80d5e64993d73b2754fff47ffe7656aa47875bd716ac83c0242->leave($__internal_9a418180cb49a80d5e64993d73b2754fff47ffe7656aa47875bd716ac83c0242_prof);

        
        $__internal_c080acb4d2a560f6ff842914b2995aa08dbcbb3742121401405b249a43bb44b3->leave($__internal_c080acb4d2a560f6ff842914b2995aa08dbcbb3742121401405b249a43bb44b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dfdd816e0965be58b560161de67719a4b7bc2172a9d0aec985697ffe0475711b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdd816e0965be58b560161de67719a4b7bc2172a9d0aec985697ffe0475711b->enter($__internal_dfdd816e0965be58b560161de67719a4b7bc2172a9d0aec985697ffe0475711b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b802c46759273cf5a997b07f6e5abf39853c500dc13e527f14e7d25a60cb6acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b802c46759273cf5a997b07f6e5abf39853c500dc13e527f14e7d25a60cb6acd->enter($__internal_b802c46759273cf5a997b07f6e5abf39853c500dc13e527f14e7d25a60cb6acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b802c46759273cf5a997b07f6e5abf39853c500dc13e527f14e7d25a60cb6acd->leave($__internal_b802c46759273cf5a997b07f6e5abf39853c500dc13e527f14e7d25a60cb6acd_prof);

        
        $__internal_dfdd816e0965be58b560161de67719a4b7bc2172a9d0aec985697ffe0475711b->leave($__internal_dfdd816e0965be58b560161de67719a4b7bc2172a9d0aec985697ffe0475711b_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/zeljko/projects/istorija58.in.rs/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
