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
        $__internal_33c8c4c4971cc2721d31634a1b48f646bbba99e9d06837a8b1e5c377a65603d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c8c4c4971cc2721d31634a1b48f646bbba99e9d06837a8b1e5c377a65603d4->enter($__internal_33c8c4c4971cc2721d31634a1b48f646bbba99e9d06837a8b1e5c377a65603d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ef18cf3f1d1413ab5eeb2e7cba1aa2b7f79befcb90b061d17ab10f86252566f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef18cf3f1d1413ab5eeb2e7cba1aa2b7f79befcb90b061d17ab10f86252566f9->enter($__internal_ef18cf3f1d1413ab5eeb2e7cba1aa2b7f79befcb90b061d17ab10f86252566f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33c8c4c4971cc2721d31634a1b48f646bbba99e9d06837a8b1e5c377a65603d4->leave($__internal_33c8c4c4971cc2721d31634a1b48f646bbba99e9d06837a8b1e5c377a65603d4_prof);

        
        $__internal_ef18cf3f1d1413ab5eeb2e7cba1aa2b7f79befcb90b061d17ab10f86252566f9->leave($__internal_ef18cf3f1d1413ab5eeb2e7cba1aa2b7f79befcb90b061d17ab10f86252566f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d92ac1507eec58cca6507c00afe059f371dc9168ec6fecb2fec731876967b03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92ac1507eec58cca6507c00afe059f371dc9168ec6fecb2fec731876967b03a->enter($__internal_d92ac1507eec58cca6507c00afe059f371dc9168ec6fecb2fec731876967b03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_644b4d5f27916c912bb5bd5d9d946c13ab92113d0899dacb891a9a7483331e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644b4d5f27916c912bb5bd5d9d946c13ab92113d0899dacb891a9a7483331e71->enter($__internal_644b4d5f27916c912bb5bd5d9d946c13ab92113d0899dacb891a9a7483331e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_644b4d5f27916c912bb5bd5d9d946c13ab92113d0899dacb891a9a7483331e71->leave($__internal_644b4d5f27916c912bb5bd5d9d946c13ab92113d0899dacb891a9a7483331e71_prof);

        
        $__internal_d92ac1507eec58cca6507c00afe059f371dc9168ec6fecb2fec731876967b03a->leave($__internal_d92ac1507eec58cca6507c00afe059f371dc9168ec6fecb2fec731876967b03a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa2eb1af87b096636f76a44e03cef5a333b1a7785c34d91ca27fc875888e3bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa2eb1af87b096636f76a44e03cef5a333b1a7785c34d91ca27fc875888e3bb2->enter($__internal_aa2eb1af87b096636f76a44e03cef5a333b1a7785c34d91ca27fc875888e3bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1bf55b3b0e64c7a7d88c36a58aecdf7ba8c3181348790f8969ecdc9b669b466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bf55b3b0e64c7a7d88c36a58aecdf7ba8c3181348790f8969ecdc9b669b466->enter($__internal_f1bf55b3b0e64c7a7d88c36a58aecdf7ba8c3181348790f8969ecdc9b669b466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f1bf55b3b0e64c7a7d88c36a58aecdf7ba8c3181348790f8969ecdc9b669b466->leave($__internal_f1bf55b3b0e64c7a7d88c36a58aecdf7ba8c3181348790f8969ecdc9b669b466_prof);

        
        $__internal_aa2eb1af87b096636f76a44e03cef5a333b1a7785c34d91ca27fc875888e3bb2->leave($__internal_aa2eb1af87b096636f76a44e03cef5a333b1a7785c34d91ca27fc875888e3bb2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed5f2dbe58c46f6dcddee6f7d93fde3cd640618da8276d216e6e3a41f4953541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5f2dbe58c46f6dcddee6f7d93fde3cd640618da8276d216e6e3a41f4953541->enter($__internal_ed5f2dbe58c46f6dcddee6f7d93fde3cd640618da8276d216e6e3a41f4953541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8972c0e63e31e1eb196528bff53893298c3b7b329e2166f754644c88fa0aa9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8972c0e63e31e1eb196528bff53893298c3b7b329e2166f754644c88fa0aa9ba->enter($__internal_8972c0e63e31e1eb196528bff53893298c3b7b329e2166f754644c88fa0aa9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8972c0e63e31e1eb196528bff53893298c3b7b329e2166f754644c88fa0aa9ba->leave($__internal_8972c0e63e31e1eb196528bff53893298c3b7b329e2166f754644c88fa0aa9ba_prof);

        
        $__internal_ed5f2dbe58c46f6dcddee6f7d93fde3cd640618da8276d216e6e3a41f4953541->leave($__internal_ed5f2dbe58c46f6dcddee6f7d93fde3cd640618da8276d216e6e3a41f4953541_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/www/webvol5/q5/0messcb7d0j2zxl/istorija58.in.rs/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
