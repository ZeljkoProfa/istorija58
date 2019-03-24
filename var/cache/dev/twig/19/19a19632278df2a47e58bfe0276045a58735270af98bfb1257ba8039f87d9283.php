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
        $__internal_69f1f363539d34adf5220cbafa885805d1e5ae1d410c1a51a62fc3fe9bbf626d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f1f363539d34adf5220cbafa885805d1e5ae1d410c1a51a62fc3fe9bbf626d->enter($__internal_69f1f363539d34adf5220cbafa885805d1e5ae1d410c1a51a62fc3fe9bbf626d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_340d8fb38bf9d509ba9856fa40aaee7c0ce2f4425e7d2543ef518767ff008068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340d8fb38bf9d509ba9856fa40aaee7c0ce2f4425e7d2543ef518767ff008068->enter($__internal_340d8fb38bf9d509ba9856fa40aaee7c0ce2f4425e7d2543ef518767ff008068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69f1f363539d34adf5220cbafa885805d1e5ae1d410c1a51a62fc3fe9bbf626d->leave($__internal_69f1f363539d34adf5220cbafa885805d1e5ae1d410c1a51a62fc3fe9bbf626d_prof);

        
        $__internal_340d8fb38bf9d509ba9856fa40aaee7c0ce2f4425e7d2543ef518767ff008068->leave($__internal_340d8fb38bf9d509ba9856fa40aaee7c0ce2f4425e7d2543ef518767ff008068_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f30c467d6d4cfe5b6507b88db6f7c0c62f51add0dcea72b8ccd6ec73e656c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f30c467d6d4cfe5b6507b88db6f7c0c62f51add0dcea72b8ccd6ec73e656c57->enter($__internal_3f30c467d6d4cfe5b6507b88db6f7c0c62f51add0dcea72b8ccd6ec73e656c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fc32074fac2d173c5d0ecee0c7100499d1ec93b03950dee1a7876dd11c5c1bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc32074fac2d173c5d0ecee0c7100499d1ec93b03950dee1a7876dd11c5c1bf1->enter($__internal_fc32074fac2d173c5d0ecee0c7100499d1ec93b03950dee1a7876dd11c5c1bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fc32074fac2d173c5d0ecee0c7100499d1ec93b03950dee1a7876dd11c5c1bf1->leave($__internal_fc32074fac2d173c5d0ecee0c7100499d1ec93b03950dee1a7876dd11c5c1bf1_prof);

        
        $__internal_3f30c467d6d4cfe5b6507b88db6f7c0c62f51add0dcea72b8ccd6ec73e656c57->leave($__internal_3f30c467d6d4cfe5b6507b88db6f7c0c62f51add0dcea72b8ccd6ec73e656c57_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7225024bf04d1da6799f86e426756c402947a517e7b3693bdcc21664e4b2b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7225024bf04d1da6799f86e426756c402947a517e7b3693bdcc21664e4b2b7a->enter($__internal_e7225024bf04d1da6799f86e426756c402947a517e7b3693bdcc21664e4b2b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_681100055b3e31639d1ddbf66abe4693499b68348c9e1ff425e84e7d29bca32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681100055b3e31639d1ddbf66abe4693499b68348c9e1ff425e84e7d29bca32e->enter($__internal_681100055b3e31639d1ddbf66abe4693499b68348c9e1ff425e84e7d29bca32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_681100055b3e31639d1ddbf66abe4693499b68348c9e1ff425e84e7d29bca32e->leave($__internal_681100055b3e31639d1ddbf66abe4693499b68348c9e1ff425e84e7d29bca32e_prof);

        
        $__internal_e7225024bf04d1da6799f86e426756c402947a517e7b3693bdcc21664e4b2b7a->leave($__internal_e7225024bf04d1da6799f86e426756c402947a517e7b3693bdcc21664e4b2b7a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7959cc281d79a6b3e95ac54a0e95629e4a9941832f16aab72bdaa5d0155405ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7959cc281d79a6b3e95ac54a0e95629e4a9941832f16aab72bdaa5d0155405ff->enter($__internal_7959cc281d79a6b3e95ac54a0e95629e4a9941832f16aab72bdaa5d0155405ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc877f58a15cbcad9689341f9b915f7ce02c96172793a5b16068af49aca3c708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc877f58a15cbcad9689341f9b915f7ce02c96172793a5b16068af49aca3c708->enter($__internal_dc877f58a15cbcad9689341f9b915f7ce02c96172793a5b16068af49aca3c708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc877f58a15cbcad9689341f9b915f7ce02c96172793a5b16068af49aca3c708->leave($__internal_dc877f58a15cbcad9689341f9b915f7ce02c96172793a5b16068af49aca3c708_prof);

        
        $__internal_7959cc281d79a6b3e95ac54a0e95629e4a9941832f16aab72bdaa5d0155405ff->leave($__internal_7959cc281d79a6b3e95ac54a0e95629e4a9941832f16aab72bdaa5d0155405ff_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/zeljko/projects/istorija58.in.rs/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
