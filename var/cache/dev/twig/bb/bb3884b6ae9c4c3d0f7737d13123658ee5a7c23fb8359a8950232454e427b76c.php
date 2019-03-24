<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5ef0b50a195c75e414df2e401dbc8ea767a45b8419ff529c0de7ab474280ec12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_37b4d4a922243305ca4ef5291b2093ed167228ca01d138e8749ba923318c182f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b4d4a922243305ca4ef5291b2093ed167228ca01d138e8749ba923318c182f->enter($__internal_37b4d4a922243305ca4ef5291b2093ed167228ca01d138e8749ba923318c182f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1ee2639aed0f0abc52bc740ff527659ef27e9ab5263e6ca88c1b75c1283905c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee2639aed0f0abc52bc740ff527659ef27e9ab5263e6ca88c1b75c1283905c8->enter($__internal_1ee2639aed0f0abc52bc740ff527659ef27e9ab5263e6ca88c1b75c1283905c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37b4d4a922243305ca4ef5291b2093ed167228ca01d138e8749ba923318c182f->leave($__internal_37b4d4a922243305ca4ef5291b2093ed167228ca01d138e8749ba923318c182f_prof);

        
        $__internal_1ee2639aed0f0abc52bc740ff527659ef27e9ab5263e6ca88c1b75c1283905c8->leave($__internal_1ee2639aed0f0abc52bc740ff527659ef27e9ab5263e6ca88c1b75c1283905c8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1706c9b1a4610a16d27fc40aa9cbb758e3f348d5744728551fbe2f7d877ba650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1706c9b1a4610a16d27fc40aa9cbb758e3f348d5744728551fbe2f7d877ba650->enter($__internal_1706c9b1a4610a16d27fc40aa9cbb758e3f348d5744728551fbe2f7d877ba650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a2e43f02cfad9e3f7554739fd64034e2b08b062145559836631cb46ec2e971c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2e43f02cfad9e3f7554739fd64034e2b08b062145559836631cb46ec2e971c->enter($__internal_0a2e43f02cfad9e3f7554739fd64034e2b08b062145559836631cb46ec2e971c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0a2e43f02cfad9e3f7554739fd64034e2b08b062145559836631cb46ec2e971c->leave($__internal_0a2e43f02cfad9e3f7554739fd64034e2b08b062145559836631cb46ec2e971c_prof);

        
        $__internal_1706c9b1a4610a16d27fc40aa9cbb758e3f348d5744728551fbe2f7d877ba650->leave($__internal_1706c9b1a4610a16d27fc40aa9cbb758e3f348d5744728551fbe2f7d877ba650_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f63adef977647010c1a3f649efe8f955e74281aa91d8c3f2f2c1b75da9d495c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63adef977647010c1a3f649efe8f955e74281aa91d8c3f2f2c1b75da9d495c8->enter($__internal_f63adef977647010c1a3f649efe8f955e74281aa91d8c3f2f2c1b75da9d495c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30d2ec63a458bacf2f9d71aaf0916b38f92190ea6cba75dcd7972cb68ad1eecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d2ec63a458bacf2f9d71aaf0916b38f92190ea6cba75dcd7972cb68ad1eecf->enter($__internal_30d2ec63a458bacf2f9d71aaf0916b38f92190ea6cba75dcd7972cb68ad1eecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_30d2ec63a458bacf2f9d71aaf0916b38f92190ea6cba75dcd7972cb68ad1eecf->leave($__internal_30d2ec63a458bacf2f9d71aaf0916b38f92190ea6cba75dcd7972cb68ad1eecf_prof);

        
        $__internal_f63adef977647010c1a3f649efe8f955e74281aa91d8c3f2f2c1b75da9d495c8->leave($__internal_f63adef977647010c1a3f649efe8f955e74281aa91d8c3f2f2c1b75da9d495c8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bfc93c56472aaa10f40554bfac49a9bd1d16d3cee3d09e53ffd1305df2a1e438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc93c56472aaa10f40554bfac49a9bd1d16d3cee3d09e53ffd1305df2a1e438->enter($__internal_bfc93c56472aaa10f40554bfac49a9bd1d16d3cee3d09e53ffd1305df2a1e438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0b82766f65b3ccefe7e5c1249a9edc72a5315383ce938d1ce6f53a6320e786c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b82766f65b3ccefe7e5c1249a9edc72a5315383ce938d1ce6f53a6320e786c9->enter($__internal_0b82766f65b3ccefe7e5c1249a9edc72a5315383ce938d1ce6f53a6320e786c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0b82766f65b3ccefe7e5c1249a9edc72a5315383ce938d1ce6f53a6320e786c9->leave($__internal_0b82766f65b3ccefe7e5c1249a9edc72a5315383ce938d1ce6f53a6320e786c9_prof);

        
        $__internal_bfc93c56472aaa10f40554bfac49a9bd1d16d3cee3d09e53ffd1305df2a1e438->leave($__internal_bfc93c56472aaa10f40554bfac49a9bd1d16d3cee3d09e53ffd1305df2a1e438_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/home/zeljko/projects/istorija58.in.rs/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
