<?php

/* front/nav.html.twig */
class __TwigTemplate_abb6a81624526c91aa00b736d6fd9a46dd0d35f7df545ee8ebc096387ba87735 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" id=\"nav-bre\">
    <div class=\"container\">
        <a class=\"navbar-brand nav-item \" style=\"\" href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_front_page");
        echo "\" style=\"text-indent: 10px;\">
        <img class=\"brand-style\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.jpg"), "html", null, true);
        echo "\" style=\"width:30px; height:30px; border-radius: 5px\">
        <strong style=\"text-indent: 10px;\" class=\"brand-style\">
\t\t
            Istorija5-8
        </strong>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto main-nav\">
                <li class=\"nav-item color-orange\" style=\"background-color: #f0ad4e;\">
                    <a class=\"nav-link \" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_list");
        echo "\">Kviz!</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_submit_post");
        echo "\"><i class=\"fa fa-upload\" style=\"margin-right: 3px;\" aria-hidden=\"true\"></i>Dodaj</a>
                </li>
                <li class=\"nav-item\">
                    <div>
                        <a class=\"nav-link\" href=\"#\">Za nastavnike</a>
                    </div>
                    <div>
                        <ul class=\"menu-list\">
                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teachersCats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["teachersCat"]) {
            // line 28
            echo "                                <li><strong><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("content_pages", array("id" => $this->getAttribute($context["teachersCat"], "id", array()), "title" => $this->getAttribute($context["teachersCat"], "title", array()))), "html", null, true);
            echo "\" style=\"font-weight: normal;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teachersCat"], "title", array()), "html", null, true);
            echo "</a></strong></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teachersCat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <div>
                        <a class=\"nav-link\" href=\"#\">Sadržaji</a>
                    </div>
                    <div>
                        <ul class=\"menu-list\">
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["studsCats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["studsCat"]) {
            // line 40
            echo "                                <li><strong><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("content_pages", array("id" => $this->getAttribute($context["studsCat"], "id", array()), "title" => $this->getAttribute($context["studsCat"], "title", array()))), "html", null, true);
            echo "\" style=\"font-weight: normal;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studsCat"], "title", array()), "html", null, true);
            echo "</a></strong></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studsCat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                            <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("video_front");
        echo "\">video</a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Kontakt</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_author");
        echo "\">Neka reč</a>
                </li>

            </ul>
        </div>
    </div>
               
</nav>
";
    }

    public function getTemplateName()
    {
        return "front/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 50,  109 => 47,  100 => 42,  89 => 40,  85 => 39,  74 => 30,  63 => 28,  59 => 27,  48 => 19,  42 => 16,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "front/nav.html.twig", "/www/webvol5/q5/0messcb7d0j2zxl/istorija58.in.rs/app/Resources/views/front/nav.html.twig");
    }
}
