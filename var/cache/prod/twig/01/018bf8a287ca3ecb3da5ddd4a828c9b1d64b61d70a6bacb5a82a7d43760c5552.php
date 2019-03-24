<?php

/* front/pages/visitor.html.twig */
class __TwigTemplate_2da42492d34aaf13eb83871f18fe796b61adab93da7ec9cfc811828c475fdb37 extends Twig_Template
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
        // line 1
        echo "
<div>
    
    ";
        // line 4
        $context["digit_arr"] = twig_split_filter($this->env, $this->getAttribute(($context["visit"] ?? null), "counter", array()), "");
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["digit_arr"] ?? null));
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
    }

    public function getTemplateName()
    {
        return "front/pages/visitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  34 => 7,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "front/pages/visitor.html.twig", "/www/webvol5/q5/0messcb7d0j2zxl/istorija58.in.rs/app/Resources/views/front/pages/visitor.html.twig");
    }
}
