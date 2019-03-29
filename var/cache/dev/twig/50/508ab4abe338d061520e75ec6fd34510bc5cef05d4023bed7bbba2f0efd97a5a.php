<?php

/* :front/main:showPPP.html.twig */
class __TwigTemplate_4e2aac457d6bcc77d59c52fe0d460023588c920e39db5bed122cb58b1f1d1897 extends Twig_Template
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
        $__internal_c1730e660db61ccf40cb0f6163e7732298ba7969e3fc91ed585a9ba37bf459e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1730e660db61ccf40cb0f6163e7732298ba7969e3fc91ed585a9ba37bf459e6->enter($__internal_c1730e660db61ccf40cb0f6163e7732298ba7969e3fc91ed585a9ba37bf459e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front/main:showPPP.html.twig"));

        $__internal_070c51629b44205976455668bba10364671fcf168f7b5e2f5eb5d58e23cd4207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070c51629b44205976455668bba10364671fcf168f7b5e2f5eb5d58e23cd4207->enter($__internal_070c51629b44205976455668bba10364671fcf168f7b5e2f5eb5d58e23cd4207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front/main:showPPP.html.twig"));

        // line 1
        echo "
<!-- Side Widget -->
<div class=\"card my-4\">
    <h5 class=\"card-header\">Poslednje dodate prezentacije</h5>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "        <div style=\"margin: 5px 0 5px 20px;\">
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/posts/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "body", array()), "html", null, true);
            echo "\" target=\"_blank\">
                <i class=\"fa fa-file-powerpoint-o\" aria-hidden=\"false\" ></i>
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>";
        
        $__internal_c1730e660db61ccf40cb0f6163e7732298ba7969e3fc91ed585a9ba37bf459e6->leave($__internal_c1730e660db61ccf40cb0f6163e7732298ba7969e3fc91ed585a9ba37bf459e6_prof);

        
        $__internal_070c51629b44205976455668bba10364671fcf168f7b5e2f5eb5d58e23cd4207->leave($__internal_070c51629b44205976455668bba10364671fcf168f7b5e2f5eb5d58e23cd4207_prof);

    }

    public function getTemplateName()
    {
        return ":front/main:showPPP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  44 => 9,  38 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
<!-- Side Widget -->
<div class=\"card my-4\">
    <h5 class=\"card-header\">Poslednje dodate prezentacije</h5>
    {% for post in posts %}
        <div style=\"margin: 5px 0 5px 20px;\">
            <a href=\"{{ asset('uploads/posts/') }}{{post.body}}\" target=\"_blank\">
                <i class=\"fa fa-file-powerpoint-o\" aria-hidden=\"false\" ></i>
                {{ post.title }}
            </a>
        </div>
    {% endfor %}
</div>", ":front/main:showPPP.html.twig", "/home/zeljko/projects/istorija58.in.rs/app/Resources/views/front/main/showPPP.html.twig");
    }
}
