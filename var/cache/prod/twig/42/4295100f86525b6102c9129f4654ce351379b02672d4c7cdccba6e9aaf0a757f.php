<?php

/* front/main/showPPP.html.twig */
class __TwigTemplate_a30defc03165d7350a16115bb7272a314691323bc77ae93794b32fe54f26b0b4 extends Twig_Template
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
<!-- Side Widget -->
<div class=\"card my-4\">
    <h5 class=\"card-header\">Poslednje dodate prezentacije</h5>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
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
        return array (  48 => 13,  38 => 9,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "front/main/showPPP.html.twig", "/www/webvol5/q5/0messcb7d0j2zxl/istorija58.in.rs/app/Resources/views/front/main/showPPP.html.twig");
    }
}
