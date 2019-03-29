<?php

/* :front:front-side.html.twig */
class __TwigTemplate_b5aee73b09d87384244f1f0d790f40077b8d94159236b3ad79c57426e490af10 extends Twig_Template
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
        $__internal_bf96b8ffaddd931eaa3140015182b1ac679f0f0b37680f6fb3a9ec496e5dd7b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf96b8ffaddd931eaa3140015182b1ac679f0f0b37680f6fb3a9ec496e5dd7b6->enter($__internal_bf96b8ffaddd931eaa3140015182b1ac679f0f0b37680f6fb3a9ec496e5dd7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front:front-side.html.twig"));

        $__internal_7bde08ec21532c761fb82d44e8b0bfd2fccef7e7138198597d092715d48e7ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bde08ec21532c761fb82d44e8b0bfd2fccef7e7138198597d092715d48e7ba5->enter($__internal_7bde08ec21532c761fb82d44e8b0bfd2fccef7e7138198597d092715d48e7ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front:front-side.html.twig"));

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
        
        $__internal_bf96b8ffaddd931eaa3140015182b1ac679f0f0b37680f6fb3a9ec496e5dd7b6->leave($__internal_bf96b8ffaddd931eaa3140015182b1ac679f0f0b37680f6fb3a9ec496e5dd7b6_prof);

        
        $__internal_7bde08ec21532c761fb82d44e8b0bfd2fccef7e7138198597d092715d48e7ba5->leave($__internal_7bde08ec21532c761fb82d44e8b0bfd2fccef7e7138198597d092715d48e7ba5_prof);

    }

    public function getTemplateName()
    {
        return ":front:front-side.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 47,  82 => 44,  74 => 41,  54 => 24,  37 => 9,  30 => 4,  25 => 1,);
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

    <div class=\"input-group\">
        {{ render(controller('AppBundle:front/Counter:visitor')) }}
    </div>
    
    <!--<div>
        {# render(controller('AppBundle:front/RQuiz:listQuizzes')) #}
    </div>-->
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
    <form action=\"{{ path('search') }}\" class=\"searchform\" method=\"get\" name=\"searchform\" target=\"_blank\">
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
            <a href=\"{{ asset('uploads/calendar/srbija-kal-1718.jpg')}}\" target=\"_blanc\"><img class=\"calendar\" id=\"k1\" src=\"{{ asset('uploads/calendar/srbija-kal-1718.jpg')}}\"  type='application/pdf'></a>
        </div>
        <div style=\"overflow: auto;\">
            <a href=\"{{ asset('uploads/calendar/vojvodina-kal-1718.jpg')}}\" target=\"_blanc\"><img class=\"calendar2\" id=\"k2\" style=\"display:none;\" src=\"{{ asset('uploads/calendar/vojvodina-kal-1718.jpg')}}\"  type='application/pdf'></a>
        </div>
    </div>
    {{ render(controller('AppBundle:front/MainPage:listLastPowPP')) }}

", ":front:front-side.html.twig", "/home/zeljko/projects/istorija58.in.rs/app/Resources/views/front/front-side.html.twig");
    }
}
