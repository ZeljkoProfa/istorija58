<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6aa24968946f34922310ed50af42256cf9f8ba36aea15eb93ed36e61ca5b39d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_c3126b1fc9927030fd86522093a387a9acfb6098d9e6f349f467d138c3f9053f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3126b1fc9927030fd86522093a387a9acfb6098d9e6f349f467d138c3f9053f->enter($__internal_c3126b1fc9927030fd86522093a387a9acfb6098d9e6f349f467d138c3f9053f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_51fe3cb012e09d19f46f28e1e9c08ed597b34278186c3a9b45808f2385805079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fe3cb012e09d19f46f28e1e9c08ed597b34278186c3a9b45808f2385805079->enter($__internal_51fe3cb012e09d19f46f28e1e9c08ed597b34278186c3a9b45808f2385805079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3126b1fc9927030fd86522093a387a9acfb6098d9e6f349f467d138c3f9053f->leave($__internal_c3126b1fc9927030fd86522093a387a9acfb6098d9e6f349f467d138c3f9053f_prof);

        
        $__internal_51fe3cb012e09d19f46f28e1e9c08ed597b34278186c3a9b45808f2385805079->leave($__internal_51fe3cb012e09d19f46f28e1e9c08ed597b34278186c3a9b45808f2385805079_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a5371ddfb87ea91ed494a96f30366a26e3c93db1cf5fce398f848e32f13e12af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5371ddfb87ea91ed494a96f30366a26e3c93db1cf5fce398f848e32f13e12af->enter($__internal_a5371ddfb87ea91ed494a96f30366a26e3c93db1cf5fce398f848e32f13e12af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_50dfd418a72c0747326826a14b65b3b8482bea87cfe1e15c4d5529dea4f9c89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50dfd418a72c0747326826a14b65b3b8482bea87cfe1e15c4d5529dea4f9c89f->enter($__internal_50dfd418a72c0747326826a14b65b3b8482bea87cfe1e15c4d5529dea4f9c89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_50dfd418a72c0747326826a14b65b3b8482bea87cfe1e15c4d5529dea4f9c89f->leave($__internal_50dfd418a72c0747326826a14b65b3b8482bea87cfe1e15c4d5529dea4f9c89f_prof);

        
        $__internal_a5371ddfb87ea91ed494a96f30366a26e3c93db1cf5fce398f848e32f13e12af->leave($__internal_a5371ddfb87ea91ed494a96f30366a26e3c93db1cf5fce398f848e32f13e12af_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa1e4d8b1767d639498582f24bf84d1217e165cd0df2af98487dcf27ec373ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1e4d8b1767d639498582f24bf84d1217e165cd0df2af98487dcf27ec373ef2->enter($__internal_aa1e4d8b1767d639498582f24bf84d1217e165cd0df2af98487dcf27ec373ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_245887772478d9fedec07cfc169fcb400d0e6bdd47504a9bf64c4a748555ac1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245887772478d9fedec07cfc169fcb400d0e6bdd47504a9bf64c4a748555ac1f->enter($__internal_245887772478d9fedec07cfc169fcb400d0e6bdd47504a9bf64c4a748555ac1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_245887772478d9fedec07cfc169fcb400d0e6bdd47504a9bf64c4a748555ac1f->leave($__internal_245887772478d9fedec07cfc169fcb400d0e6bdd47504a9bf64c4a748555ac1f_prof);

        
        $__internal_aa1e4d8b1767d639498582f24bf84d1217e165cd0df2af98487dcf27ec373ef2->leave($__internal_aa1e4d8b1767d639498582f24bf84d1217e165cd0df2af98487dcf27ec373ef2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa3ee4d760021ff36d8f32678e29909d94128a95e3fda5bdf0eea41e54679c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3ee4d760021ff36d8f32678e29909d94128a95e3fda5bdf0eea41e54679c2b->enter($__internal_aa3ee4d760021ff36d8f32678e29909d94128a95e3fda5bdf0eea41e54679c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_377313ef967581711b60cc4f31cf6868948f41c5d4a9b5bad7e8fe6d0cd92d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377313ef967581711b60cc4f31cf6868948f41c5d4a9b5bad7e8fe6d0cd92d91->enter($__internal_377313ef967581711b60cc4f31cf6868948f41c5d4a9b5bad7e8fe6d0cd92d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_377313ef967581711b60cc4f31cf6868948f41c5d4a9b5bad7e8fe6d0cd92d91->leave($__internal_377313ef967581711b60cc4f31cf6868948f41c5d4a9b5bad7e8fe6d0cd92d91_prof);

        
        $__internal_aa3ee4d760021ff36d8f32678e29909d94128a95e3fda5bdf0eea41e54679c2b->leave($__internal_aa3ee4d760021ff36d8f32678e29909d94128a95e3fda5bdf0eea41e54679c2b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/www/webvol5/q5/0messcb7d0j2zxl/istorija58.in.rs/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
