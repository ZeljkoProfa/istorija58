<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_453ffa803ad24185120e3ebe1045b232d460acd5b928df8577edc4c00eba13a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6731b02061dae0d935cc13d39090471e54c54b86262d8cc665eb4dc1c6027de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6731b02061dae0d935cc13d39090471e54c54b86262d8cc665eb4dc1c6027de9->enter($__internal_6731b02061dae0d935cc13d39090471e54c54b86262d8cc665eb4dc1c6027de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7f778977a80d113dcc73a482f674ace7c69155dc6cf2268d464db9ef04860a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f778977a80d113dcc73a482f674ace7c69155dc6cf2268d464db9ef04860a47->enter($__internal_7f778977a80d113dcc73a482f674ace7c69155dc6cf2268d464db9ef04860a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6731b02061dae0d935cc13d39090471e54c54b86262d8cc665eb4dc1c6027de9->leave($__internal_6731b02061dae0d935cc13d39090471e54c54b86262d8cc665eb4dc1c6027de9_prof);

        
        $__internal_7f778977a80d113dcc73a482f674ace7c69155dc6cf2268d464db9ef04860a47->leave($__internal_7f778977a80d113dcc73a482f674ace7c69155dc6cf2268d464db9ef04860a47_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_65575f12d097b790bf4437f1d14f1edd78584fb02baf817c3f62581aeb5fb245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65575f12d097b790bf4437f1d14f1edd78584fb02baf817c3f62581aeb5fb245->enter($__internal_65575f12d097b790bf4437f1d14f1edd78584fb02baf817c3f62581aeb5fb245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0be8148ab3f50135016c2e4c790e28d651a2bae43694f5507b66d0864c185afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be8148ab3f50135016c2e4c790e28d651a2bae43694f5507b66d0864c185afb->enter($__internal_0be8148ab3f50135016c2e4c790e28d651a2bae43694f5507b66d0864c185afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0be8148ab3f50135016c2e4c790e28d651a2bae43694f5507b66d0864c185afb->leave($__internal_0be8148ab3f50135016c2e4c790e28d651a2bae43694f5507b66d0864c185afb_prof);

        
        $__internal_65575f12d097b790bf4437f1d14f1edd78584fb02baf817c3f62581aeb5fb245->leave($__internal_65575f12d097b790bf4437f1d14f1edd78584fb02baf817c3f62581aeb5fb245_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f48c10e4263c98a51b96ecc1ad0285a85edd9a0ff49acfc6c14f16e89ae90cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f48c10e4263c98a51b96ecc1ad0285a85edd9a0ff49acfc6c14f16e89ae90cc->enter($__internal_5f48c10e4263c98a51b96ecc1ad0285a85edd9a0ff49acfc6c14f16e89ae90cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68935d8f28348eec43bf313825225d1f01f73cf4c475c5938d34d8cbd3adfc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68935d8f28348eec43bf313825225d1f01f73cf4c475c5938d34d8cbd3adfc02->enter($__internal_68935d8f28348eec43bf313825225d1f01f73cf4c475c5938d34d8cbd3adfc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_68935d8f28348eec43bf313825225d1f01f73cf4c475c5938d34d8cbd3adfc02->leave($__internal_68935d8f28348eec43bf313825225d1f01f73cf4c475c5938d34d8cbd3adfc02_prof);

        
        $__internal_5f48c10e4263c98a51b96ecc1ad0285a85edd9a0ff49acfc6c14f16e89ae90cc->leave($__internal_5f48c10e4263c98a51b96ecc1ad0285a85edd9a0ff49acfc6c14f16e89ae90cc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_582ec61e9259afa45978fd80534d2922cef1b24353bcb1bed1e363297ec2a4ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582ec61e9259afa45978fd80534d2922cef1b24353bcb1bed1e363297ec2a4ca->enter($__internal_582ec61e9259afa45978fd80534d2922cef1b24353bcb1bed1e363297ec2a4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4cd0f7b171a8dcdda064654bec48b30a067ece7179fbfaacd7c28ea120d0c157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd0f7b171a8dcdda064654bec48b30a067ece7179fbfaacd7c28ea120d0c157->enter($__internal_4cd0f7b171a8dcdda064654bec48b30a067ece7179fbfaacd7c28ea120d0c157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4cd0f7b171a8dcdda064654bec48b30a067ece7179fbfaacd7c28ea120d0c157->leave($__internal_4cd0f7b171a8dcdda064654bec48b30a067ece7179fbfaacd7c28ea120d0c157_prof);

        
        $__internal_582ec61e9259afa45978fd80534d2922cef1b24353bcb1bed1e363297ec2a4ca->leave($__internal_582ec61e9259afa45978fd80534d2922cef1b24353bcb1bed1e363297ec2a4ca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/zeljko/projects/istorija58.in.rs/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
