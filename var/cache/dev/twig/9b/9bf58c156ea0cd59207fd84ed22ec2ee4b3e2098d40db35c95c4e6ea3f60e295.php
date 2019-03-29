<?php

/* :front/pages:visitor.html.twig */
class __TwigTemplate_0bfdd2c13de3a4b14dc33912e399697ad5366e419877f0818a8c84566b57635c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bda1220f38c27bdf5a1799dc2fc817e582fd9bf8c199adeb22554a21100b4a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda1220f38c27bdf5a1799dc2fc817e582fd9bf8c199adeb22554a21100b4a31->enter($__internal_bda1220f38c27bdf5a1799dc2fc817e582fd9bf8c199adeb22554a21100b4a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front/pages:visitor.html.twig"));

        $__internal_7a09bbfc33dad8cfff2d7f57dd971d18d28304846c25cd5231e0c8cca6187888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a09bbfc33dad8cfff2d7f57dd971d18d28304846c25cd5231e0c8cca6187888->enter($__internal_7a09bbfc33dad8cfff2d7f57dd971d18d28304846c25cd5231e0c8cca6187888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front/pages:visitor.html.twig"));

        // line 1
        echo "
<div>
    
    ";
        // line 4
        $context["digit_arr"] = twig_split_filter($this->env, $this->getAttribute(($context["visit"] ?? $this->getContext($context, "visit")), "counter", array()), "");
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["digit_arr"] ?? $this->getContext($context, "digit_arr")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "        <div class=\"counter\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    
</div>
";
        
        $__internal_bda1220f38c27bdf5a1799dc2fc817e582fd9bf8c199adeb22554a21100b4a31->leave($__internal_bda1220f38c27bdf5a1799dc2fc817e582fd9bf8c199adeb22554a21100b4a31_prof);

        
        $__internal_7a09bbfc33dad8cfff2d7f57dd971d18d28304846c25cd5231e0c8cca6187888->leave($__internal_7a09bbfc33dad8cfff2d7f57dd971d18d28304846c25cd5231e0c8cca6187888_prof);

    }

    public function getTemplateName()
    {
        return ":front/pages:visitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  40 => 7,  37 => 6,  32 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div>
    
    {% set digit_arr = visit.counter|split('') %}
    {% for i in digit_arr %}
        <div class=\"counter\">
            {{i}}
        </div>
    {% endfor %}
    
</div>
", ":front/pages:visitor.html.twig", "/home/zeljko/projects/istorija58.in.rs/app/Resources/views/front/pages/visitor.html.twig");
    }
}
