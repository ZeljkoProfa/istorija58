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
        $__internal_7014f84399f0424584382ae8b96be8ed52ef064ae5fca469bd4fd90e8fc7246f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7014f84399f0424584382ae8b96be8ed52ef064ae5fca469bd4fd90e8fc7246f->enter($__internal_7014f84399f0424584382ae8b96be8ed52ef064ae5fca469bd4fd90e8fc7246f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6792e817dda434ff1c2a6bf683c1d6fdf3b4e4dacb55147d650818dba485d483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6792e817dda434ff1c2a6bf683c1d6fdf3b4e4dacb55147d650818dba485d483->enter($__internal_6792e817dda434ff1c2a6bf683c1d6fdf3b4e4dacb55147d650818dba485d483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7014f84399f0424584382ae8b96be8ed52ef064ae5fca469bd4fd90e8fc7246f->leave($__internal_7014f84399f0424584382ae8b96be8ed52ef064ae5fca469bd4fd90e8fc7246f_prof);

        
        $__internal_6792e817dda434ff1c2a6bf683c1d6fdf3b4e4dacb55147d650818dba485d483->leave($__internal_6792e817dda434ff1c2a6bf683c1d6fdf3b4e4dacb55147d650818dba485d483_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e4b300c7e2720f2f9de9dbd0cb873da1dc1143825e694842a28657bb50df1da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4b300c7e2720f2f9de9dbd0cb873da1dc1143825e694842a28657bb50df1da->enter($__internal_0e4b300c7e2720f2f9de9dbd0cb873da1dc1143825e694842a28657bb50df1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7f8ba4a7e226362c212a8ddf2c6c31ff0abc24028d6b913b47248bc56910c50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8ba4a7e226362c212a8ddf2c6c31ff0abc24028d6b913b47248bc56910c50a->enter($__internal_7f8ba4a7e226362c212a8ddf2c6c31ff0abc24028d6b913b47248bc56910c50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7f8ba4a7e226362c212a8ddf2c6c31ff0abc24028d6b913b47248bc56910c50a->leave($__internal_7f8ba4a7e226362c212a8ddf2c6c31ff0abc24028d6b913b47248bc56910c50a_prof);

        
        $__internal_0e4b300c7e2720f2f9de9dbd0cb873da1dc1143825e694842a28657bb50df1da->leave($__internal_0e4b300c7e2720f2f9de9dbd0cb873da1dc1143825e694842a28657bb50df1da_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/www/webvol5/q5/0messcb7d0j2zxl/istorija58.in.rs/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
