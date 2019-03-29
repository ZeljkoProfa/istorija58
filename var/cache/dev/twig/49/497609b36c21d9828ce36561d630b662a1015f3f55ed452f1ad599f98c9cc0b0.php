<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_453ffa803ad24185120e3ebe1045b232d460acd5b928df8577edc4c00eba13a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_a0f1b93a33499d89d8c38634e710b4f1c8fad2bd4ea3b66e70609d6e2bf6c630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f1b93a33499d89d8c38634e710b4f1c8fad2bd4ea3b66e70609d6e2bf6c630->enter($__internal_a0f1b93a33499d89d8c38634e710b4f1c8fad2bd4ea3b66e70609d6e2bf6c630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_a8a4e34afc13b71853c94e08c457a9eb7e9cd9c6787847d0c72a79d99bcbda47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a4e34afc13b71853c94e08c457a9eb7e9cd9c6787847d0c72a79d99bcbda47->enter($__internal_a8a4e34afc13b71853c94e08c457a9eb7e9cd9c6787847d0c72a79d99bcbda47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0f1b93a33499d89d8c38634e710b4f1c8fad2bd4ea3b66e70609d6e2bf6c630->leave($__internal_a0f1b93a33499d89d8c38634e710b4f1c8fad2bd4ea3b66e70609d6e2bf6c630_prof);

        
        $__internal_a8a4e34afc13b71853c94e08c457a9eb7e9cd9c6787847d0c72a79d99bcbda47->leave($__internal_a8a4e34afc13b71853c94e08c457a9eb7e9cd9c6787847d0c72a79d99bcbda47_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bdeeeb90d13d687703f33b5f2c8d6fef01acead5c89576f5a41dd7124f8da1a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdeeeb90d13d687703f33b5f2c8d6fef01acead5c89576f5a41dd7124f8da1a0->enter($__internal_bdeeeb90d13d687703f33b5f2c8d6fef01acead5c89576f5a41dd7124f8da1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3d1ed1817cf6211561d89cf0912a6e55831ef2ce79704c27191bdd71d88d0be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1ed1817cf6211561d89cf0912a6e55831ef2ce79704c27191bdd71d88d0be3->enter($__internal_3d1ed1817cf6211561d89cf0912a6e55831ef2ce79704c27191bdd71d88d0be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3d1ed1817cf6211561d89cf0912a6e55831ef2ce79704c27191bdd71d88d0be3->leave($__internal_3d1ed1817cf6211561d89cf0912a6e55831ef2ce79704c27191bdd71d88d0be3_prof);

        
        $__internal_bdeeeb90d13d687703f33b5f2c8d6fef01acead5c89576f5a41dd7124f8da1a0->leave($__internal_bdeeeb90d13d687703f33b5f2c8d6fef01acead5c89576f5a41dd7124f8da1a0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3b9a25691553d76d8f3fac6c29aed0b1d7a20c456a4a6e64fa18bff51a81b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b9a25691553d76d8f3fac6c29aed0b1d7a20c456a4a6e64fa18bff51a81b7e->enter($__internal_e3b9a25691553d76d8f3fac6c29aed0b1d7a20c456a4a6e64fa18bff51a81b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_04c225d9fc1956b5e1de1f988a9f8bce54aa3e736773734c5de41d9cdeca29a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c225d9fc1956b5e1de1f988a9f8bce54aa3e736773734c5de41d9cdeca29a8->enter($__internal_04c225d9fc1956b5e1de1f988a9f8bce54aa3e736773734c5de41d9cdeca29a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_04c225d9fc1956b5e1de1f988a9f8bce54aa3e736773734c5de41d9cdeca29a8->leave($__internal_04c225d9fc1956b5e1de1f988a9f8bce54aa3e736773734c5de41d9cdeca29a8_prof);

        
        $__internal_e3b9a25691553d76d8f3fac6c29aed0b1d7a20c456a4a6e64fa18bff51a81b7e->leave($__internal_e3b9a25691553d76d8f3fac6c29aed0b1d7a20c456a4a6e64fa18bff51a81b7e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d34f797687a0cee4798046edd915173ca53390378ccbbf85db58746ac2e45099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34f797687a0cee4798046edd915173ca53390378ccbbf85db58746ac2e45099->enter($__internal_d34f797687a0cee4798046edd915173ca53390378ccbbf85db58746ac2e45099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e00b633c4ec45e3801136e9eae937cb3dde3219ffd4396df3d0588d562cc78db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00b633c4ec45e3801136e9eae937cb3dde3219ffd4396df3d0588d562cc78db->enter($__internal_e00b633c4ec45e3801136e9eae937cb3dde3219ffd4396df3d0588d562cc78db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e00b633c4ec45e3801136e9eae937cb3dde3219ffd4396df3d0588d562cc78db->leave($__internal_e00b633c4ec45e3801136e9eae937cb3dde3219ffd4396df3d0588d562cc78db_prof);

        
        $__internal_d34f797687a0cee4798046edd915173ca53390378ccbbf85db58746ac2e45099->leave($__internal_d34f797687a0cee4798046edd915173ca53390378ccbbf85db58746ac2e45099_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/zeljko/projects/istorija58.in.rs/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
