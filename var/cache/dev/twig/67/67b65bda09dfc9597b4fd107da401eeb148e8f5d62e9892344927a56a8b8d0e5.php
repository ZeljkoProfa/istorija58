<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_20669322a809ecfe860f40f7f7b0bf92359b688482b90222f21cb3bc22061f4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c1059d9b952bb62a7ad45fc43728a8ae2267ea8303ae878fd5d0125901c1a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1059d9b952bb62a7ad45fc43728a8ae2267ea8303ae878fd5d0125901c1a77->enter($__internal_1c1059d9b952bb62a7ad45fc43728a8ae2267ea8303ae878fd5d0125901c1a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_542fbac320fcc3aaa97396cf13007c51ea27931a5bd56df33ee744811f39f040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542fbac320fcc3aaa97396cf13007c51ea27931a5bd56df33ee744811f39f040->enter($__internal_542fbac320fcc3aaa97396cf13007c51ea27931a5bd56df33ee744811f39f040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1c1059d9b952bb62a7ad45fc43728a8ae2267ea8303ae878fd5d0125901c1a77->leave($__internal_1c1059d9b952bb62a7ad45fc43728a8ae2267ea8303ae878fd5d0125901c1a77_prof);

        
        $__internal_542fbac320fcc3aaa97396cf13007c51ea27931a5bd56df33ee744811f39f040->leave($__internal_542fbac320fcc3aaa97396cf13007c51ea27931a5bd56df33ee744811f39f040_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_764e32c313b46740ee76126ba46838651e6ffcafc8759c0c2b490e8ce0caf40e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764e32c313b46740ee76126ba46838651e6ffcafc8759c0c2b490e8ce0caf40e->enter($__internal_764e32c313b46740ee76126ba46838651e6ffcafc8759c0c2b490e8ce0caf40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_daf3d4c88c39954713d1a38d37c22ce4d806616738c0d92b6cc1c667296730fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf3d4c88c39954713d1a38d37c22ce4d806616738c0d92b6cc1c667296730fe->enter($__internal_daf3d4c88c39954713d1a38d37c22ce4d806616738c0d92b6cc1c667296730fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_daf3d4c88c39954713d1a38d37c22ce4d806616738c0d92b6cc1c667296730fe->leave($__internal_daf3d4c88c39954713d1a38d37c22ce4d806616738c0d92b6cc1c667296730fe_prof);

        
        $__internal_764e32c313b46740ee76126ba46838651e6ffcafc8759c0c2b490e8ce0caf40e->leave($__internal_764e32c313b46740ee76126ba46838651e6ffcafc8759c0c2b490e8ce0caf40e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5c660fe54d5043cc31ce3f64bc302ea85dd6d88a6034b7793feec5c18aa9379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c660fe54d5043cc31ce3f64bc302ea85dd6d88a6034b7793feec5c18aa9379->enter($__internal_b5c660fe54d5043cc31ce3f64bc302ea85dd6d88a6034b7793feec5c18aa9379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad986d21604086d0c720df5da6908559c39b2b6e0b797f95e22d9a1d373bc951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad986d21604086d0c720df5da6908559c39b2b6e0b797f95e22d9a1d373bc951->enter($__internal_ad986d21604086d0c720df5da6908559c39b2b6e0b797f95e22d9a1d373bc951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ad986d21604086d0c720df5da6908559c39b2b6e0b797f95e22d9a1d373bc951->leave($__internal_ad986d21604086d0c720df5da6908559c39b2b6e0b797f95e22d9a1d373bc951_prof);

        
        $__internal_b5c660fe54d5043cc31ce3f64bc302ea85dd6d88a6034b7793feec5c18aa9379->leave($__internal_b5c660fe54d5043cc31ce3f64bc302ea85dd6d88a6034b7793feec5c18aa9379_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_71fa49bf6671b4548306baed930d54dffe38856ea3037f332d6d2edf208de135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71fa49bf6671b4548306baed930d54dffe38856ea3037f332d6d2edf208de135->enter($__internal_71fa49bf6671b4548306baed930d54dffe38856ea3037f332d6d2edf208de135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ef59ed8db7f4ee819363ebd84e1188b4abcaa499c0ff0adb114220c21660740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef59ed8db7f4ee819363ebd84e1188b4abcaa499c0ff0adb114220c21660740->enter($__internal_0ef59ed8db7f4ee819363ebd84e1188b4abcaa499c0ff0adb114220c21660740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0ef59ed8db7f4ee819363ebd84e1188b4abcaa499c0ff0adb114220c21660740->leave($__internal_0ef59ed8db7f4ee819363ebd84e1188b4abcaa499c0ff0adb114220c21660740_prof);

        
        $__internal_71fa49bf6671b4548306baed930d54dffe38856ea3037f332d6d2edf208de135->leave($__internal_71fa49bf6671b4548306baed930d54dffe38856ea3037f332d6d2edf208de135_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/home/zeljko/projects/istorija58.in.rs/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
