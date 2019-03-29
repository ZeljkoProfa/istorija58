<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5ef0b50a195c75e414df2e401dbc8ea767a45b8419ff529c0de7ab474280ec12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f95fb7c82fcd6ec41487495649d3b67068b05591d9ae267ec04cfb950f238f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95fb7c82fcd6ec41487495649d3b67068b05591d9ae267ec04cfb950f238f30->enter($__internal_f95fb7c82fcd6ec41487495649d3b67068b05591d9ae267ec04cfb950f238f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_47dc824cdf2ed67bb0d13dc890974ae2cd3556b09f3437a332881ab26d250244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47dc824cdf2ed67bb0d13dc890974ae2cd3556b09f3437a332881ab26d250244->enter($__internal_47dc824cdf2ed67bb0d13dc890974ae2cd3556b09f3437a332881ab26d250244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f95fb7c82fcd6ec41487495649d3b67068b05591d9ae267ec04cfb950f238f30->leave($__internal_f95fb7c82fcd6ec41487495649d3b67068b05591d9ae267ec04cfb950f238f30_prof);

        
        $__internal_47dc824cdf2ed67bb0d13dc890974ae2cd3556b09f3437a332881ab26d250244->leave($__internal_47dc824cdf2ed67bb0d13dc890974ae2cd3556b09f3437a332881ab26d250244_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49d29ace5ac2c6764d9ea5c9524470905987a1f106b30d1cda13aca787da3548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d29ace5ac2c6764d9ea5c9524470905987a1f106b30d1cda13aca787da3548->enter($__internal_49d29ace5ac2c6764d9ea5c9524470905987a1f106b30d1cda13aca787da3548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_45fe5384e43cfbb44783920c824b58db90db4f26ed3c1291edf652cca4b558ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45fe5384e43cfbb44783920c824b58db90db4f26ed3c1291edf652cca4b558ea->enter($__internal_45fe5384e43cfbb44783920c824b58db90db4f26ed3c1291edf652cca4b558ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_45fe5384e43cfbb44783920c824b58db90db4f26ed3c1291edf652cca4b558ea->leave($__internal_45fe5384e43cfbb44783920c824b58db90db4f26ed3c1291edf652cca4b558ea_prof);

        
        $__internal_49d29ace5ac2c6764d9ea5c9524470905987a1f106b30d1cda13aca787da3548->leave($__internal_49d29ace5ac2c6764d9ea5c9524470905987a1f106b30d1cda13aca787da3548_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a59093335b1fc26ccc176cb8b49beacf84dc2a80ae53f7c93704d0abfb289879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59093335b1fc26ccc176cb8b49beacf84dc2a80ae53f7c93704d0abfb289879->enter($__internal_a59093335b1fc26ccc176cb8b49beacf84dc2a80ae53f7c93704d0abfb289879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_485754236822331de8e723ab99fd78aff978ce016f3da544d677e919af8b80a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485754236822331de8e723ab99fd78aff978ce016f3da544d677e919af8b80a7->enter($__internal_485754236822331de8e723ab99fd78aff978ce016f3da544d677e919af8b80a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_485754236822331de8e723ab99fd78aff978ce016f3da544d677e919af8b80a7->leave($__internal_485754236822331de8e723ab99fd78aff978ce016f3da544d677e919af8b80a7_prof);

        
        $__internal_a59093335b1fc26ccc176cb8b49beacf84dc2a80ae53f7c93704d0abfb289879->leave($__internal_a59093335b1fc26ccc176cb8b49beacf84dc2a80ae53f7c93704d0abfb289879_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_346c04ccb38a70a7706fe24c9ff17b73b20b9442b46e9723efd90d151682c5b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346c04ccb38a70a7706fe24c9ff17b73b20b9442b46e9723efd90d151682c5b6->enter($__internal_346c04ccb38a70a7706fe24c9ff17b73b20b9442b46e9723efd90d151682c5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_30169fc7aac1e4c74683e024f6de9f94950cdcfbecff00f59a8b40a42184ffc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30169fc7aac1e4c74683e024f6de9f94950cdcfbecff00f59a8b40a42184ffc1->enter($__internal_30169fc7aac1e4c74683e024f6de9f94950cdcfbecff00f59a8b40a42184ffc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_30169fc7aac1e4c74683e024f6de9f94950cdcfbecff00f59a8b40a42184ffc1->leave($__internal_30169fc7aac1e4c74683e024f6de9f94950cdcfbecff00f59a8b40a42184ffc1_prof);

        
        $__internal_346c04ccb38a70a7706fe24c9ff17b73b20b9442b46e9723efd90d151682c5b6->leave($__internal_346c04ccb38a70a7706fe24c9ff17b73b20b9442b46e9723efd90d151682c5b6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/zeljko/projects/istorija58.in.rs/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
