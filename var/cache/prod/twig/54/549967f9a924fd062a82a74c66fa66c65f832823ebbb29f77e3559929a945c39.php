<?php

/* front/pages/quiz_list.html.twig */
class __TwigTemplate_affd9bce6b410b8be3da5f4dbfdde30262e404ff3f5cdf28e005f60b9ce0a5ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("front/front-main.html.twig", "front/pages/quiz_list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "front/front-main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page_title"] = ($context["title"] ?? null);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    
    
    <div class=\"row main-div\">
        <div class=\"col-md-12\">
            <h5 class=\"margin-bottom-20\">Proveri svoje znanje, odigraj jedan kviz!</h5>
            <div class=\"quiz-links row\">

                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quizzes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            echo " 
                    ";
            // line 14
            echo "                    <div class=\"quiz-links-margins col-sm-12 col-md-6\">
                        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\" class=\"fire-new ap\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "quizName", array()), "html", null, true);
            echo "</a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "front/pages/quiz_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  52 => 15,  49 => 14,  43 => 12,  34 => 5,  31 => 4,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "front/pages/quiz_list.html.twig", "/www/webvol5/q5/0messcb7d0j2zxl/istorija58.in.rs/app/Resources/views/front/pages/quiz_list.html.twig");
    }
}
