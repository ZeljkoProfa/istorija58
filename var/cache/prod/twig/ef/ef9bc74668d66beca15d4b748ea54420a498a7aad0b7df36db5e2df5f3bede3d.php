<?php

/* front/front-side.html.twig */
class __TwigTemplate_652fd82ac128214da398452331053a3f48d27b37bc9a489a297b81cd9a0b43e7 extends Twig_Template
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

    <div class=\"input-group\">
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:front/Counter:visitor"));
        echo "
    </div>
    
    <!--<div>
        ";
        // line 9
        echo "    </div>-->
    <!-- Search Widget -->
    <form action=\"http://www.google.com/search\" class=\"searchform\" method=\"get\" name=\"searchform\" target=\"_blank\">
        <div class=\"card my-4\">
            <h5 class=\"card-header\">Pretraži web</h5>
            <div class=\"card-body\">
                <div class=\"input-group\">
                    <input type=\"text\" autocomplete=\"of\" name=\"q\" class=\"form-control\" placeholder=\"Search for...\" required=\"required\">
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-secondary\" type=\"submit\">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </form>
    <form action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" class=\"searchform\" method=\"get\" name=\"searchform\" target=\"_blank\">
        <div class=\"card my-4\">
            <h5 class=\"card-header\">Pretraži sajt</h5>
            <div class=\"card-body\">
                <div class=\"input-group\">
                    <input id=\"searchAjax\" type=\"text\" autocomplete=\"of\" name=\"q\" class=\"form-control\" placeholder=\"Search for...\" required=\"required\">
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-secondary\" type=\"submit\">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </form>
    <!-- Categories Widget -->
    <div class=\"card my-4\" >
        <h5 class=\"card-header\">Kalendar <button id=\"b1\" class=\"ap\">Srbija</button><button id=\"b2\" class=\"ap\">Vojvodina</button></h5>
        <div style=\"overflow: auto;\">
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/calendar/srbija-kal-1718.jpg"), "html", null, true);
        echo "\" target=\"_blanc\"><img class=\"calendar\" id=\"k1\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/calendar/srbija-kal-1718.jpg"), "html", null, true);
        echo "\"  type='application/pdf'></a>
        </div>
        <div style=\"overflow: auto;\">
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/calendar/vojvodina-kal-1718.jpg"), "html", null, true);
        echo "\" target=\"_blanc\"><img class=\"calendar2\" id=\"k2\" style=\"display:none;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/calendar/vojvodina-kal-1718.jpg"), "html", null, true);
        echo "\"  type='application/pdf'></a>
        </div>
    </div>
    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:front/MainPage:listLastPowPP"));
        echo "

";
    }

    public function getTemplateName()
    {
        return "front/front-side.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 47,  76 => 44,  68 => 41,  48 => 24,  31 => 9,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "front/front-side.html.twig", "/www/webvol5/q5/0messcb7d0j2zxl/istorija58.in.rs/app/Resources/views/front/front-side.html.twig");
    }
}
