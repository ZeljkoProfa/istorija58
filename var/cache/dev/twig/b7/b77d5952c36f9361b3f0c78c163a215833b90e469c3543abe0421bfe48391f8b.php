<?php

/* :front/main:comments-main.html.twig */
class __TwigTemplate_8826e33a6c7fc65d920b5533362a8867368b59aabe29639db862ef8bdb9bc5aa extends Twig_Template
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
        $__internal_4c6bb175547f7ab5a4e0da46fc4ba9ff50137122603cd481695f2380a6f4bd5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c6bb175547f7ab5a4e0da46fc4ba9ff50137122603cd481695f2380a6f4bd5c->enter($__internal_4c6bb175547f7ab5a4e0da46fc4ba9ff50137122603cd481695f2380a6f4bd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front/main:comments-main.html.twig"));

        $__internal_3a4cf41a9306b6e469e8e79cb38afdcb53253eaa944b5b4c10665ab24ab4cb0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4cf41a9306b6e469e8e79cb38afdcb53253eaa944b5b4c10665ab24ab4cb0c->enter($__internal_3a4cf41a9306b6e469e8e79cb38afdcb53253eaa944b5b4c10665ab24ab4cb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front/main:comments-main.html.twig"));

        // line 1
        echo "<!--included in front-main.html.twig-->

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 4
            echo "    ";
            if (($this->getAttribute($context["comment"], "status", array()) == "1")) {
                // line 5
                echo "
        <div  class=\"comnnets-list\">
            <div class=\"showed-comment\">
                <div>
                    <h5 class=\"mt-0\" style=\"display:inline;\"><i>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", array()), "html", null, true);
                echo "</i></h5> 
                    <i style=\"float:right;\">";
                // line 10
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "Y-m-d"), "html", null, true);
                echo "</i><span  style=\"width:20px; float:right;\">,</span>
                    <i style=\"float:right;\">";
                // line 11
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "H:i:s"), "html", null, true);
                echo "</i>
                </div>
                        ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "body", array()), "html", null, true);
                echo "
                <input class=\"hidden-id-comment\" type=\"hidden\" value=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\">
                <button class=\"button-reply\">Odgovori</button>
                ";
                // line 16
                if (twig_length_filter($this->env, $this->getAttribute($context["comment"], "children", array()))) {
                    // line 17
                    echo "                    <button class=\"show-answers \" style=\"margin: 10px; font-size: 20px;\"> <i class=\"fa fa-angle-down\"></i> </button>
\t\t\t\t\t";
                    // line 18
                    echo "Odgovora  ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["comment"], "children", array())), "html", null, true);
                    echo "
\t\t\t\t";
                }
                // line 20
                echo "                <!-- Replies -->

                <!-- Reply form -->
                <div class=\"card my-4 replyForm\" style=\"width: 100%;display:none\" >
                    <h5 class=\"card-header\" >Ostavi komentar:</h5>
                    <div class=\"card-body\" >
                        <form action=\"";
                // line 26
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comments-front");
                echo "\" method=\"POST\">
                            <div class=\"form-group\" >
                                <input type=\"hidden\" name=\"parentId\" class=\"parentId\" value=\"\">
                                <label>Ime</label>
                                <input type=\"text\" name=\"author\" repuired class=\"form-control\"/>
                            </div>
                            <div class=\"form-group\" >
                                <label>Komentar</label>
                                <textarea type=\"text\" name=\"body\" repuired class=\"form-control\"/></textarea>
                            </div>
                            <i class=\"fa fa-plus move-right\" style=\"color:white; right:-10px;\"></i><input type=\"submit\" value=\"Potvrdi\" style=\"position:relative; left: -10px!important;\" class=\"btn btn-primary btn-create btn-move-fafa\"/>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"answers\" style=\"display:none;\">
                ";
                // line 42
                if (twig_length_filter($this->env, $this->getAttribute($context["comment"], "children", array()))) {
                    // line 43
                    echo "                    ";
                    $this->loadTemplate("front/main/comments-main.html.twig", ":front/main:comments-main.html.twig", 43)->display(array_merge($context, array("comments" => $this->getAttribute($context["comment"], "children", array()))));
                    // line 44
                    echo "                ";
                }
                // line 45
                echo "            </div>
        </div>
    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
";
        
        $__internal_4c6bb175547f7ab5a4e0da46fc4ba9ff50137122603cd481695f2380a6f4bd5c->leave($__internal_4c6bb175547f7ab5a4e0da46fc4ba9ff50137122603cd481695f2380a6f4bd5c_prof);

        
        $__internal_3a4cf41a9306b6e469e8e79cb38afdcb53253eaa944b5b4c10665ab24ab4cb0c->leave($__internal_3a4cf41a9306b6e469e8e79cb38afdcb53253eaa944b5b4c10665ab24ab4cb0c_prof);

    }

    public function getTemplateName()
    {
        return ":front/main:comments-main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 49,  123 => 45,  120 => 44,  117 => 43,  115 => 42,  96 => 26,  88 => 20,  82 => 18,  79 => 17,  77 => 16,  72 => 14,  68 => 13,  63 => 11,  59 => 10,  55 => 9,  49 => 5,  46 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--included in front-main.html.twig-->

{% for comment in comments %}
    {% if comment.status == '1' %}

        <div  class=\"comnnets-list\">
            <div class=\"showed-comment\">
                <div>
                    <h5 class=\"mt-0\" style=\"display:inline;\"><i>{{ comment.author }}</i></h5> 
                    <i style=\"float:right;\">{{ comment.created|date('Y-m-d') }}</i><span  style=\"width:20px; float:right;\">,</span>
                    <i style=\"float:right;\">{{ comment.created|date('H:i:s') }}</i>
                </div>
                        {{ comment.body }}
                <input class=\"hidden-id-comment\" type=\"hidden\" value=\"{{ comment.id }}\">
                <button class=\"button-reply\">Odgovori</button>
                {% if comment.children|length %}
                    <button class=\"show-answers \" style=\"margin: 10px; font-size: 20px;\"> <i class=\"fa fa-angle-down\"></i> </button>
\t\t\t\t\t{{ 'Odgovora  ' }}{{ comment.children|length }}
\t\t\t\t{% endif %}
                <!-- Replies -->

                <!-- Reply form -->
                <div class=\"card my-4 replyForm\" style=\"width: 100%;display:none\" >
                    <h5 class=\"card-header\" >Ostavi komentar:</h5>
                    <div class=\"card-body\" >
                        <form action=\"{{ path('comments-front') }}\" method=\"POST\">
                            <div class=\"form-group\" >
                                <input type=\"hidden\" name=\"parentId\" class=\"parentId\" value=\"\">
                                <label>Ime</label>
                                <input type=\"text\" name=\"author\" repuired class=\"form-control\"/>
                            </div>
                            <div class=\"form-group\" >
                                <label>Komentar</label>
                                <textarea type=\"text\" name=\"body\" repuired class=\"form-control\"/></textarea>
                            </div>
                            <i class=\"fa fa-plus move-right\" style=\"color:white; right:-10px;\"></i><input type=\"submit\" value=\"Potvrdi\" style=\"position:relative; left: -10px!important;\" class=\"btn btn-primary btn-create btn-move-fafa\"/>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"answers\" style=\"display:none;\">
                {% if comment.children|length %}
                    {% include 'front/main/comments-main.html.twig' with {'comments':comment.children} %}
                {% endif %}
            </div>
        </div>
    {% endif %}
{% endfor %}{# include 'front/main/comments-main.html.twig' with {'comments':children} #}

", ":front/main:comments-main.html.twig", "/home/zeljko/projects/istorija58.in.rs/app/Resources/views/front/main/comments-main.html.twig");
    }
}
