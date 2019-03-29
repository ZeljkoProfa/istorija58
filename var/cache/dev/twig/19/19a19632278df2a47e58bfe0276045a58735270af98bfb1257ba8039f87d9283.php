<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6aa24968946f34922310ed50af42256cf9f8ba36aea15eb93ed36e61ca5b39d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b201d10b4c8cf4e4953ff3445876c4f54e29b7eb4f5bdaa38d5ee8ba00677648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b201d10b4c8cf4e4953ff3445876c4f54e29b7eb4f5bdaa38d5ee8ba00677648->enter($__internal_b201d10b4c8cf4e4953ff3445876c4f54e29b7eb4f5bdaa38d5ee8ba00677648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_08d774c3b5710dcda6a9cc829e965bef9b8950b2e8da8e763ade5ac43f693433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d774c3b5710dcda6a9cc829e965bef9b8950b2e8da8e763ade5ac43f693433->enter($__internal_08d774c3b5710dcda6a9cc829e965bef9b8950b2e8da8e763ade5ac43f693433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b201d10b4c8cf4e4953ff3445876c4f54e29b7eb4f5bdaa38d5ee8ba00677648->leave($__internal_b201d10b4c8cf4e4953ff3445876c4f54e29b7eb4f5bdaa38d5ee8ba00677648_prof);

        
        $__internal_08d774c3b5710dcda6a9cc829e965bef9b8950b2e8da8e763ade5ac43f693433->leave($__internal_08d774c3b5710dcda6a9cc829e965bef9b8950b2e8da8e763ade5ac43f693433_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9249093ea48aae75728a37898c2936792e943cbac19b4325564a734ce10e79d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9249093ea48aae75728a37898c2936792e943cbac19b4325564a734ce10e79d7->enter($__internal_9249093ea48aae75728a37898c2936792e943cbac19b4325564a734ce10e79d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7c0f7b9cef3e7b1330bc029ff500c752b101f677e1839c0b92eb951dcda8b284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0f7b9cef3e7b1330bc029ff500c752b101f677e1839c0b92eb951dcda8b284->enter($__internal_7c0f7b9cef3e7b1330bc029ff500c752b101f677e1839c0b92eb951dcda8b284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c0f7b9cef3e7b1330bc029ff500c752b101f677e1839c0b92eb951dcda8b284->leave($__internal_7c0f7b9cef3e7b1330bc029ff500c752b101f677e1839c0b92eb951dcda8b284_prof);

        
        $__internal_9249093ea48aae75728a37898c2936792e943cbac19b4325564a734ce10e79d7->leave($__internal_9249093ea48aae75728a37898c2936792e943cbac19b4325564a734ce10e79d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_766a88541515ec5d0a699c01a2d7e407de39315c42349e6cecd7a8b71f05687b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766a88541515ec5d0a699c01a2d7e407de39315c42349e6cecd7a8b71f05687b->enter($__internal_766a88541515ec5d0a699c01a2d7e407de39315c42349e6cecd7a8b71f05687b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_33aafb030b5a62a9032e3f4f6ee26d0687d6da97417347023b66e2369af13a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33aafb030b5a62a9032e3f4f6ee26d0687d6da97417347023b66e2369af13a7f->enter($__internal_33aafb030b5a62a9032e3f4f6ee26d0687d6da97417347023b66e2369af13a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_33aafb030b5a62a9032e3f4f6ee26d0687d6da97417347023b66e2369af13a7f->leave($__internal_33aafb030b5a62a9032e3f4f6ee26d0687d6da97417347023b66e2369af13a7f_prof);

        
        $__internal_766a88541515ec5d0a699c01a2d7e407de39315c42349e6cecd7a8b71f05687b->leave($__internal_766a88541515ec5d0a699c01a2d7e407de39315c42349e6cecd7a8b71f05687b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_816cec4236ef4f72d502ea2d6ec37b1a6f39bce21997bacc8d482d2c8c2b32e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_816cec4236ef4f72d502ea2d6ec37b1a6f39bce21997bacc8d482d2c8c2b32e0->enter($__internal_816cec4236ef4f72d502ea2d6ec37b1a6f39bce21997bacc8d482d2c8c2b32e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e6234a5a4822809dcb4b27375710402bc17a26a88fecc83ba21500f0415bc8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6234a5a4822809dcb4b27375710402bc17a26a88fecc83ba21500f0415bc8ce->enter($__internal_e6234a5a4822809dcb4b27375710402bc17a26a88fecc83ba21500f0415bc8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6234a5a4822809dcb4b27375710402bc17a26a88fecc83ba21500f0415bc8ce->leave($__internal_e6234a5a4822809dcb4b27375710402bc17a26a88fecc83ba21500f0415bc8ce_prof);

        
        $__internal_816cec4236ef4f72d502ea2d6ec37b1a6f39bce21997bacc8d482d2c8c2b32e0->leave($__internal_816cec4236ef4f72d502ea2d6ec37b1a6f39bce21997bacc8d482d2c8c2b32e0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/zeljko/projects/istorija58.in.rs/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
