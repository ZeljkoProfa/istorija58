<?php

/* front/main/showPPP.html.twig */
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
        $__internal_1e52baa2b08c4314674add3a0e30710ac40f7c7d36f01f609ae877f2b271405b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e52baa2b08c4314674add3a0e30710ac40f7c7d36f01f609ae877f2b271405b->enter($__internal_1e52baa2b08c4314674add3a0e30710ac40f7c7d36f01f609ae877f2b271405b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/main/showPPP.html.twig"));

        $__internal_cb11b99f2c1e9d5d468d945b6294e531308d7136bfd58849926abb8a9192b8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb11b99f2c1e9d5d468d945b6294e531308d7136bfd58849926abb8a9192b8d3->enter($__internal_cb11b99f2c1e9d5d468d945b6294e531308d7136bfd58849926abb8a9192b8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/main/showPPP.html.twig"));

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
        
        $__internal_1e52baa2b08c4314674add3a0e30710ac40f7c7d36f01f609ae877f2b271405b->leave($__internal_1e52baa2b08c4314674add3a0e30710ac40f7c7d36f01f609ae877f2b271405b_prof);

        
        $__internal_cb11b99f2c1e9d5d468d945b6294e531308d7136bfd58849926abb8a9192b8d3->leave($__internal_cb11b99f2c1e9d5d468d945b6294e531308d7136bfd58849926abb8a9192b8d3_prof);

    }

    public function getTemplateName()
    {
        return "front/main/showPPP.html.twig";
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
</div>", "front/main/showPPP.html.twig", "/www/webvol5/q5/0messcb7d0j2zxl/istorija58.in.rs/app/Resources/views/front/main/showPPP.html.twig");
    }
}
