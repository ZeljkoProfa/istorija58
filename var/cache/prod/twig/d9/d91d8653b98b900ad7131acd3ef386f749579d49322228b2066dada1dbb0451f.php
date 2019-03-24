<?php

/* front/pages/quiz-first.html.twig */
class __TwigTemplate_60a49ca6ca51981746bc0c4e8e0fca35292631a52ab8ea3cf0b220ce076eabda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("front/front-main.html.twig", "front/pages/quiz-first.html.twig", 1);
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
        echo "    <div class=\"row main-div\">
        <div class=\"col-md-12\">
            <h3 class=\"kviz-title\">Kviz - ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quiz"] ?? null), "quizName", array()), "html", null, true);
        echo "</h3>
            <span class=\"instruction\">Odgovori na pitanja:</span><span class=\"result\">0</span>
            <div>
                <div id=\"quiz-panel\">
                    ";
        // line 12
        echo "                    ";
        $context["total_points"] = 0;
        // line 13
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 14
            echo "                        <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\" class=\"single-question-block\" style=\"display:none;\" >
                            <input type=\"hidden\" class=\"bubling-check\" value=\"\">
                            <h4 class=\"quiz-question\" data-points=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "lesson", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array()), "html", null, true);
            echo "</h4>

                            <div class=\"check-button mark-answer\">
                                <input type=\"checkbox\" class=\"check-btn check-b\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "answer1", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "answer1", array()), "html", null, true);
            echo "<br>
                            </div>
                            <div class=\"check-button mark-answer\">
                                <input type=\"checkbox\" class=\"check-btn check-b\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "answer2", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "answer2", array()), "html", null, true);
            echo "<br>
                            </div>
                            <div class=\"check-button mark-answer\">
                                <input type=\"checkbox\" class=\"check-btn check-b\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "answer3", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "answer3", array()), "html", null, true);
            echo "<br>
                            </div>
                            <div class=\"check-button mark-answer\">
                                <input type=\"checkbox\" class=\"check-btn check-b\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "answer4", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "answer4", array()), "html", null, true);
            echo "<br>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-8 col-sm-8 col-md-8\">
                                    <div class=\"hidden-success-info\">
                                        <span class=\"info-Scs\">
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 col-sm-4 col-md-4\">
                                    <button class=\"btn-default ans\">Odgovori</button>
                                    <button class=\"btn-default forword\">Dalje</button>
                                </div>
                            </div>
                            <div class=\"row hidden-answerQ\" style=\"display:none\" data-lesson=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "lesson", array()), "html", null, true);
            echo "\">
                                <div class=\"col-xs-12 col-md-6\">
                                    <span>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "lesson", array()), "html", null, true);
            echo " </span>
                                </div>
                                <div class=\"col-xs-12 col-md-6\">
                                    <img class=\"img-no-over-edges\" src=\"";
            // line 47
            echo twig_escape_filter($this->env, ("/uploads/img/" . $this->getAttribute($context["question"], "img", array())), "html", null, true);
            echo "\">
                                </div>
                            </div>
                            ";
            // line 50
            if ($this->getAttribute($context["question"], "learnMore", array(), "any", true, true)) {
                // line 51
                echo "                                <div class=\"col-xs-12 col-md-12\">
                                    <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "learnMore", array()), "html", null, true);
                echo "\">Saznaj vise!</a>
                                </div>
                            ";
            }
            // line 55
            echo "
                            <div class=\"hidden-points\" style=\"display:none;\" data-points=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "points", array()), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"hidden-answerZ trueanswer\" style=\"display:none;\" data-realanswer=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "trueAnswer", array()), "html", null, true);
            echo "\">
                            </div>
                        </div> 
                        ";
            // line 61
            $context["total_points"] = (($context["total_points"] ?? null) + $this->getAttribute($context["question"], "points", array()));
            // line 62
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                    <div class=\"single-question-block\">
                        <div class=\"hidden-end\">
                            <span class=\"hidden-answerEnd smaller-letters\" id=\"end-info\"></span><br>
                            <span class=\"hidden-answerEnd bigger-letters\" id=\"end-mark\"></span>
                        </div>
                    </div>
                </div>
                <p id=\"points-old\" style=\"display:none;\">0</p>
                <p id=\"points-full-old\" style=\"display:none;\">0</p>
            </div>
        </div>
    </div>
    <script>
        \$('input').prop('checked', false);
        \$(document).ready(function () {

            var total = 0;
            // Display first question else hide!
            var all_points
            = ";
        // line 82
        echo twig_escape_filter($this->env, ($context["total_points"] ?? null), "html", null, true);
        echo ";
                    var firstQue = \$('.single-question-block').first();
            \$('.single-question-block').first().show();
            \$(firstQue).nextAll().hide();

            // Make elements brighter on hover
            // Answer lines
            \$('.check-button').hover(function () {
                \$(this).addClass('transition');
                \$(this).css('background-color', '#7cf24d');
            }, function () {
                \$(this).removeClass('transition');
                \$(this).css('background-color', '#4CAF50');
            });

            // Buttons
            \$('.ans').hover(function () {
                \$(this).addClass('transition');
                \$(this).css('background-color', '#63cef2');
            }, function () {
                \$(this).removeClass('transition');
                \$(this).css('background-color', '#007bff');
            });

            \$('.mark-answer').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                
                \$('input').prop('checked', false);
                \$(this).find('input').prop('checked', true);
                
                return false;
            });

            /*if (\$(this).find('input').is(':checked')) {
             
             } else {
             var choosed = \$(this).find('input').val();
             }*/



            \$('.ans').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();

                var choosed_arr = \$(this).closest('.single-question-block').find('.mark-answer');
                //console.log(choosed_arr);
                var i;
                var maybe;
                for (i = 0; i < choosed_arr.length; i++) {
                    maybe = \$(choosed_arr[i]).find('input');
                    console.log(maybe);
                    if (maybe.is(':checked')) {
                        var choosed = \$(maybe).val();
                    }
                }
                //console.log(choosed);
                \$('input').prop('checked', false);
                \$(this).find('input').prop('checked', true);

                // Get true answer.
                var realAns = \$(this).closest('.single-question-block').find('.trueanswer').data('realanswer');

                if (choosed === realAns && choosed != '1') {

                    // Change buttons
                    \$('.ans').hide();
                    \$('.forword').show();

                    // Display info success and points
                    var points_old = \$('#points-old').html();
                    points_old = parseInt(points_old);

                    var points_new = \$(this).closest('.single-question-block').find('.hidden-points').data('points');
                    points_new = parseInt(points_new);
                    total = points_old + points_new;

                    \$(this).closest('.single-question-block').find('.info-Scs').html('TAČNO! Osvojio si ' + points_new + ' poena i sada imas  ' + total);
                    \$(this).closest('.single-question-block').find('.hidden-success-info').show();

                    var temp_percent = total / all_points;
                    var percent_of_success = temp_percent * 100;
                    percent_of_success = Math.round(percent_of_success);

                    // Display lesson if there is any
                    var lesson = \$(this).closest('.single-question-block').find('.hidden-answerQ').data('lesson');
                    if (lesson != null && lesson != '' && lesson != false) {
                        \$(this).closest('.single-question-block').find('.hidden-answerQ').show();
                    }

                    //switch to next question!
                    if (choosed != '1') {
                        \$('.forword').click(function () {
                            \$(this).closest('.single-question-block').hide();
                            \$(this).closest('.single-question-block').next().show();
                            // \$('.ans').html('Odgovori');
                            \$('.ans').show();
                            \$('.forword').hide();
                        });
                    }
                    \$('.result').html(total);
                    \$('#points-old').html(total);
                    choosed = '1';

                    \$('#end-info').html('Osvojio si ' + total + ' poena. Maksimalni broj poena na ovom kvizu bio je '
                            + all_points + '. To predstavlja ' + percent_of_success + '% tacnih odgovora.'
                            );
                    if (percent_of_success >= 90) {
                        \$('#end-mark').html('Dobio si peticu! Bravo! Pravi si streber! :)');
                    } else if (70 < percent_of_success && percent_of_success <= 89) {
                        \$('#end-mark').html('Dobio si četvorku! Nije loše! :)');
                    } else if (50 < percent_of_success && percent_of_success <= 69) {
                        \$('#end-mark').html('Dobio si trojku. Pokreni se čoveče! :/');
                    } else if (30 < percent_of_success && percent_of_success <= 49) {
                        \$('#end-mark').html('Dobio si dvojku. Brzo knjigu u šake! :(');
                    } else if (percent_of_success <= 29) {
                        \$('#end-mark').html('Dobio si jedinicu. Prestani da igraš igrice i počni da učiš!');
                    }
                } else if (choosed !== realAns && choosed != '1') {
                    \$('.ans').hide();
                    \$('.forword').show();

                    var points_old = \$('#points-old').html();
                    points_old = parseInt(points_old);
                    //console.log(points_old);
                    var points_new = \$(this).closest('.single-question-block').find('.hidden-points').data('points');
                    points_new = parseInt(points_new);
                    total = points_old + points_new;

                    \$(this).closest('.single-question-block').find('.info-Scs').html('NETAČNO! I dalje imaš ' + points_old);
                    \$(this).closest('.single-question-block').find('.hidden-success-info').show().css('background-color', 'red');

                    // Calculate max points .hidden-points
                    var temp_points = \$(this).closest('.single-question-block').find('.hidden-points').data('points');
                    var tempora_points = parseInt(temp_points);
                    var old_full_points = \$('#points-full-old').html();
                    old_full_points = parseInt(old_full_points);

                    var temp_percent = points_old / all_points;
                    var percent_of_success = temp_percent * 100;
                    percent_of_success = Math.round(percent_of_success);

                    // Display lesson if there is any
                    var lesson = \$(this).closest('.single-question-block').find('.hidden-answerQ').data('lesson');
                    if (lesson != null && lesson != '' && lesson != false) {
                        \$(this).closest('.single-question-block').find('.hidden-answerQ').show();
                    }

                    //switch to next question!
                    if (choosed != '1') {
                        \$('.forword').click(function () {
                            // console.log(\$('.ans').html());
                            \$(this).closest('.single-question-block').hide();
                            \$(this).closest('.single-question-block').next().show();
                            //\$('.ans').html('Odgovori');
                            \$('.ans').show();
                            \$('.forword').hide();
                        });
                    }
                    \$('.result').html(points_old);
                    \$('#points-old').html(points_old);
                    choosed = '1';

                    \$('#end-info').html('Osvojio si ' + points_old + ' poena. Maksimalni broj poena na ovom kvizu bio je '
                            + all_points + '. To predstavlja ' + percent_of_success + '% tacnih odgovora.'
                            );
                    if (percent_of_success >= 90) {
                        \$('#end-mark').html('Dobio si peticu! Bravo! Pravi si streber! :)');
                    } else if (70 < percent_of_success && percent_of_success <= 89) {
                        \$('#end-mark').html('Dobio si četvorku! Nije loše! :)');
                    } else if (50 < percent_of_success && percent_of_success <= 69) {
                        \$('#end-mark').html('Dobio si trojku. Pokreni se čoveče! :/');
                    } else if (30 < percent_of_success && percent_of_success <= 49) {
                        \$('#end-mark').html('Dobio si dvojku. Brzo knjigu u šake! :(');
                    } else if (percent_of_success <= 29) {
                        \$('#end-mark').html('Dobio si jedinicu. Prestani da igraš igrice i počni da učiš!');
                    }
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "front/pages/quiz-first.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 82,  160 => 63,  154 => 62,  152 => 61,  146 => 58,  141 => 56,  138 => 55,  132 => 52,  129 => 51,  127 => 50,  121 => 47,  115 => 44,  110 => 42,  91 => 28,  83 => 25,  75 => 22,  67 => 19,  59 => 16,  53 => 14,  48 => 13,  45 => 12,  38 => 7,  34 => 5,  31 => 4,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "front/pages/quiz-first.html.twig", "/www/webvol5/q5/0messcb7d0j2zxl/istorija58.in.rs/app/Resources/views/front/pages/quiz-first.html.twig");
    }
}
