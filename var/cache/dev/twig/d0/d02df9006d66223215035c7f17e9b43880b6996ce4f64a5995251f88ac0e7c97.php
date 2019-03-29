<?php

/* :front:front-main.html.twig */
class __TwigTemplate_41c1898f2f77380b84730d21a6f2b8cc2a3888c701797c92553c56b7c9e65492 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce8f9c388501ad463cafc3de4def9b22d2270e3867f440b22620a544db357e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8f9c388501ad463cafc3de4def9b22d2270e3867f440b22620a544db357e70->enter($__internal_ce8f9c388501ad463cafc3de4def9b22d2270e3867f440b22620a544db357e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front:front-main.html.twig"));

        $__internal_d01bf692b1a69be14eb099a2d07b2e4b3b46e1faeb8dc1bc17be810e6653e4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01bf692b1a69be14eb099a2d07b2e4b3b46e1faeb8dc1bc17be810e6653e4f1->enter($__internal_d01bf692b1a69be14eb099a2d07b2e4b3b46e1faeb8dc1bc17be810e6653e4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front:front-main.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-108000656-1\"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-108000656-1');
        </script>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.jpg"), "html", null, true);
        echo "\">
        <title>
            ";
        // line 22
        if (array_key_exists("page_title", $context)) {
            echo " Istorija58 | ";
            echo twig_escape_filter($this->env, ($context["page_title"] ?? $this->getContext($context, "page_title")), "html", null, true);
            echo " ";
        } else {
            echo " Istorija58 ";
        }
        // line 23
        echo "        </title>

        ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "    </head>
    <body>
        <div class=\"pillars\">
            <div>
                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/img/ancient_column_done.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"position: fixed; left:-5%; width: auto; height: 100%; top: 39px\">
            </div>
            <div >
                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/img/ancient_column_done.jpg"), "html", null, true);
        echo "\"  alt=\"\" style=\"position :fixed; right:-5%; width: auto; height: 100%; top: 39px\">
            </div>
        </div>
        <!-- Navigation -->
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:front/Nav:listCategory"));
        echo "

        ";
        // line 56
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "submit_message"), "method")) {
            // line 57
            echo "            <div class=\"upload-message\">
                <p>
                    ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "submit_message"), "method"), "html", null, true);
            echo "
                </p>
            </div>
        ";
        }
        // line 63
        echo "        
        ";
        // line 64
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "kontaktmsg"), "method", true, true)) {
            // line 65
            echo "            <div class=\"upload-message\">
                <p>
                    ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "kontaktmsg"), "method"), "html", null, true);
            echo "
                </p>
            </div>
        ";
        }
        // line 71
        echo "        <!-- Forbiden ip message -->
        ";
        // line 72
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "checked"), "method", true, true)) {
            // line 73
            echo "            <div class=\"upload-message\" style=\"background-color: red\">
                <p>
                    ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "checked"), "method"), "html", null, true);
            echo "
                </p>
            </div>
        ";
        }
        // line 79
        echo "        <!-- Forbiden ip message -->
        ";
        // line 80
        if (array_key_exists("message", $context)) {
            // line 81
            echo "            <div class=\"upload-message\" style=\"background-color: red\">
                <p>
                    ";
            // line 83
            echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
            echo "
                </p>
            </div>
        ";
        }
        // line 87
        echo "
        <!-- Page Content -->
        <div class=\"container\">
            <div class=\"row\">
                <!-- Post Content Column -->
                <div class=\"col-md-8\" id=\"search-content\">
                    ";
        // line 93
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "main_front_page")) {
            // line 94
            echo "
                        <!-- Title -->
                        <h5 class=\"title-main\">Učite istoriju? Dobro došli! </h5>

                        <!-- Description of content -->
                        <span class=\"lead\">
                            Rešite kviz ili potrazite materijal u odgovarajućem meniju. 
                        </span>
                        <hr>
                        <ul class=\"bxslider\">
                            <li><img src=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/bxslider/images/greek_teathar_720_261.jpg"), "html", null, true);
            echo "\" alt=\"\"/></li>
                            <li><img src=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/bxslider/images/misar_719_261.jpg"), "html", null, true);
            echo "\" alt=\"\"/></li>
                            <li><img src=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/bxslider/images/last_super.jpg"), "html", null, true);
            echo "\" alt=\"\"/></li>
                        </ul>
                        <hr>
                        <div class=\"tought-button\">
                            <span class=\"tought-button-click\">Pročitaj misao dana!</span>
                        </div>
                        ";
            // line 112
            if ( !twig_test_empty(($context["thought"] ?? $this->getContext($context, "thought")))) {
                // line 113
                echo "                            <div class=\"tought-of-day\">
                                <span>";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute(($context["thought"] ?? $this->getContext($context, "thought")), "text", array()), "html", null, true);
                echo "<i class=\"float-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["thought"] ?? $this->getContext($context, "thought")), "author", array()), "html", null, true);
                echo "</i></span>
                            </div>
                        ";
            }
            // line 117
            echo "                        <hr>
                    ";
        }
        // line 119
        echo "
                    ";
        // line 120
        $context["page_title"] = "naslovna";
        // line 121
        echo "                    ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "main_front_page")) {
            // line 122
            echo "                        <p>Poslednje dodato:</p>
                        <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                            <thead>
                                <tr>
                                    <th>Naslov</th>
                                    <th>Dodao</th>
                                    <th>Vreme dodavanja</th>
                                    <th>Akcije</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 134
                echo "                                    <tr>
                                        <td>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            ";
                // line 137
                if ($this->getAttribute($context["post"], "author", array(), "any", true, true)) {
                    echo " 
                                                ";
                    // line 138
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "author", array()), "html", null, true);
                    echo " 
                                            ";
                } elseif ($this->getAttribute(                // line 139
$context["post"], "adminId", array(), "any", true, true)) {
                    echo " 
                                                ";
                    // line 140
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "adminId", array()), "html", null, true);
                    echo " 
                                            ";
                } else {
                    // line 142
                    echo "                                                ";
                    echo twig_escape_filter($this->env, ($context["nepoznat"] ?? $this->getContext($context, "nepoznat")), "html", null, true);
                    echo " 
                                            ";
                }
                // line 144
                echo "                                        </td>
                                        <td>
                                            ";
                // line 146
                if ($this->getAttribute($context["post"], "created", array())) {
                    // line 147
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "
                                            ";
                }
                // line 149
                echo "
                                        </td>
                                        <td>
                                            <ul style=\"list-style-type: none\">
                                                <li>
                                                    <a href=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/posts/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "body", array()), "html", null, true);
                echo "\" target=\"_blank\">Prikazi</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "                            </tbody>
                        </table>
                    ";
        }
        // line 163
        echo "
                    ";
        // line 164
        $this->displayBlock('body', $context, $blocks);
        // line 166
        echo "
                    <!-- Comments -->
                    ";
        // line 168
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "main_front_page")) {
            // line 169
            echo "                        <div class=\"card my-4\" >
                            <h5 class=\"card-header\" >Ostavi komentar:</h5>
                            <div class=\"card-body\" >
                                ";
            // line 172
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_comment"] ?? $this->getContext($context, "form_comment")), 'form_start');
            echo "
                                <div class=\"form-group\">
                                    ";
            // line 174
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? $this->getContext($context, "form_comment")), "author", array()), 'label');
            echo "
                                    ";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? $this->getContext($context, "form_comment")), "author", array()), 'errors');
            echo "
                                    ";
            // line 176
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? $this->getContext($context, "form_comment")), "author", array()), 'widget');
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 179
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? $this->getContext($context, "form_comment")), "body", array()), 'label');
            echo "
                                    ";
            // line 180
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? $this->getContext($context, "form_comment")), "body", array()), 'errors');
            echo "
                                    ";
            // line 181
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? $this->getContext($context, "form_comment")), "body", array()), 'widget');
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 184
            $this->getAttribute($this->getAttribute(($context["form_comment"] ?? $this->getContext($context, "form_comment")), "status", array()), "setRendered", array(), "method");
            // line 185
            echo "                                </div>
                                <i class=\"fa fa-plus move-right\" style=\"color:white; right:-10px;\"></i><input type=\"submit\" value=\"Create\" style=\"position:relative; left: -10px!important;\" class=\"btn btn-primary btn-create btn-move-fafa\"/>
                                ";
            // line 187
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_comment"] ?? $this->getContext($context, "form_comment")), 'form_end');
            echo "
                            </div>
                        </div>
                        <h4 style=\"display:block; width:100%;\">Komentari:</h4>

                        <div class=\"width-90\">
                        <!-- Comments and comments with parentId -->
                        ";
            // line 194
            $this->loadTemplate("front/main/comments-main.html.twig", ":front:front-main.html.twig", 194)->display(array_merge($context, array("commments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
            // line 195
            echo "                        </div>

                        <!-- Pagination -->
                        ";
            // line 198
            if ((($context["maxPages"] ?? $this->getContext($context, "maxPages")) > 1)) {
                // line 199
                echo "                            <ul class=\"pagination pagination-sm\">
                                ";
                // line 201
                echo "                                ";
                // line 202
                echo "                                <li ";
                if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                    echo " class=\"disabled\" ";
                }
                echo " >
                                    <a href=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_front_page", array("currentPage" => ((((($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1) < 1)) ? (1) : ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1))))), "html", null, true);
                echo "\">«</a>
                                </li>

                                ";
                // line 207
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 208
                    echo "                                    <li ";
                    if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == $context["i"])) {
                        echo " class=\"active\"  ";
                    }
                    echo " >

                                        <a href=\"";
                    // line 210
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_front_page", array("currentPage" => $context["i"])), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 213
                echo "
                                ";
                // line 215
                echo "                                <li ";
                if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                    echo " class=\"disabled\" ";
                }
                echo " >
                                    <a href=\"";
                // line 216
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_front_page", array("currentPage" => ((((($context["thisPage"] ?? $this->getContext($context, "thisPage")) + 1) <= ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) ? ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) + 1)) : (($context["thisPage"] ?? $this->getContext($context, "thisPage")))))), "html", null, true);
                echo "\">»</a>
                                </li>
                            </ul>
                        ";
            }
            // line 220
            echo "
                    ";
        }
        // line 222
        echo "                </div>
                <div class=\"col-md-4\" id=\"side\">
                <!-- Sidebar Widgets Column -->
                ";
        // line 225
        $this->loadTemplate("front/front-side.html.twig", ":front:front-main.html.twig", 225)->display($context);
        // line 226
        echo "                </div>
            </div>
        </div>
        <footer class=\"py-5 bg-dark\">
            <div class=\"container\">
                <p class=\"m-0 text-center text-white\">Istorija58 2017</p>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript , jquery and sliderJS-->
        <script>
            \$(document).ready(function () {
                // \$('#appbundle_comment_author').val('');
                // \$('#appbundle_comment_body').val('');
                \$(\"#sl_sh_remove\").on('change', function(){
                   if(\$(this).is(':checked')){
                       \$('.bx-wrapper').hide();
                   } else {
                       \$('.bx-wrapper').show();
                   }
                });

                \$('.tought-button').on('click', function(){
                    \$('.tought-of-day').show();
                    \$(this).hide();
                });
                \$('.tought-of-day').on('click', function(){
                    \$('.tought-button').show();
                    \$(this).hide();
                });
            });
        </script>
    </body>
</html>

";
        
        $__internal_ce8f9c388501ad463cafc3de4def9b22d2270e3867f440b22620a544db357e70->leave($__internal_ce8f9c388501ad463cafc3de4def9b22d2270e3867f440b22620a544db357e70_prof);

        
        $__internal_d01bf692b1a69be14eb099a2d07b2e4b3b46e1faeb8dc1bc17be810e6653e4f1->leave($__internal_d01bf692b1a69be14eb099a2d07b2e4b3b46e1faeb8dc1bc17be810e6653e4f1_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c25823bb54062ce259927676902d33a40b5f4af15184cf90cf5fd87dcebb036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c25823bb54062ce259927676902d33a40b5f4af15184cf90cf5fd87dcebb036->enter($__internal_0c25823bb54062ce259927676902d33a40b5f4af15184cf90cf5fd87dcebb036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_504f67f8df7716a2e9c7e35fea1a93a8aad758c2811500dd087ddbb6cacd89de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504f67f8df7716a2e9c7e35fea1a93a8aad758c2811500dd087ddbb6cacd89de->enter($__internal_504f67f8df7716a2e9c7e35fea1a93a8aad758c2811500dd087ddbb6cacd89de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 26
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/css/blog-post.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/css/quiz-first.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/css/myfront.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/bxslider/jquery.bxslider.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/bxslider/jquery.bxslider.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        ";
        
        $__internal_504f67f8df7716a2e9c7e35fea1a93a8aad758c2811500dd087ddbb6cacd89de->leave($__internal_504f67f8df7716a2e9c7e35fea1a93a8aad758c2811500dd087ddbb6cacd89de_prof);

        
        $__internal_0c25823bb54062ce259927676902d33a40b5f4af15184cf90cf5fd87dcebb036->leave($__internal_0c25823bb54062ce259927676902d33a40b5f4af15184cf90cf5fd87dcebb036_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a504084aa1f169815ada627146f478b0de824e65b1f3baf31e75ecd1fcf2eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a504084aa1f169815ada627146f478b0de824e65b1f3baf31e75ecd1fcf2eaf->enter($__internal_9a504084aa1f169815ada627146f478b0de824e65b1f3baf31e75ecd1fcf2eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_645988eb4d4ee3568666ca8f6ac6c70f7939daab255a85f9dbc787dfd57fac31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645988eb4d4ee3568666ca8f6ac6c70f7939daab255a85f9dbc787dfd57fac31->enter($__internal_645988eb4d4ee3568666ca8f6ac6c70f7939daab255a85f9dbc787dfd57fac31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!--<script src=\"";
        // line 37
        echo "\" type=\"text/javascript\"></script>-->
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/vendor/popper/popper.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/bxslider/jquery.bxslider.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_645988eb4d4ee3568666ca8f6ac6c70f7939daab255a85f9dbc787dfd57fac31->leave($__internal_645988eb4d4ee3568666ca8f6ac6c70f7939daab255a85f9dbc787dfd57fac31_prof);

        
        $__internal_9a504084aa1f169815ada627146f478b0de824e65b1f3baf31e75ecd1fcf2eaf->leave($__internal_9a504084aa1f169815ada627146f478b0de824e65b1f3baf31e75ecd1fcf2eaf_prof);

    }

    // line 164
    public function block_body($context, array $blocks = array())
    {
        $__internal_de212a3f08bec61f0a220b4db702747299e40c8f15a67b8ec2ee4490087c54dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de212a3f08bec61f0a220b4db702747299e40c8f15a67b8ec2ee4490087c54dc->enter($__internal_de212a3f08bec61f0a220b4db702747299e40c8f15a67b8ec2ee4490087c54dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c23997026f427adfdc4c9623fee117717f1573dd567e8e8075d334766989c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c23997026f427adfdc4c9623fee117717f1573dd567e8e8075d334766989c08->enter($__internal_7c23997026f427adfdc4c9623fee117717f1573dd567e8e8075d334766989c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 165
        echo "                    ";
        
        $__internal_7c23997026f427adfdc4c9623fee117717f1573dd567e8e8075d334766989c08->leave($__internal_7c23997026f427adfdc4c9623fee117717f1573dd567e8e8075d334766989c08_prof);

        
        $__internal_de212a3f08bec61f0a220b4db702747299e40c8f15a67b8ec2ee4490087c54dc->leave($__internal_de212a3f08bec61f0a220b4db702747299e40c8f15a67b8ec2ee4490087c54dc_prof);

    }

    public function getTemplateName()
    {
        return ":front:front-main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 165,  582 => 164,  570 => 41,  566 => 40,  562 => 39,  558 => 38,  555 => 37,  550 => 36,  541 => 35,  529 => 32,  525 => 31,  521 => 30,  517 => 29,  513 => 28,  509 => 27,  504 => 26,  495 => 25,  451 => 226,  449 => 225,  444 => 222,  440 => 220,  433 => 216,  426 => 215,  423 => 213,  412 => 210,  404 => 208,  399 => 207,  393 => 203,  386 => 202,  384 => 201,  381 => 199,  379 => 198,  374 => 195,  372 => 194,  362 => 187,  358 => 185,  356 => 184,  350 => 181,  346 => 180,  342 => 179,  336 => 176,  332 => 175,  328 => 174,  323 => 172,  318 => 169,  316 => 168,  312 => 166,  310 => 164,  307 => 163,  302 => 160,  289 => 154,  282 => 149,  276 => 147,  274 => 146,  270 => 144,  264 => 142,  259 => 140,  255 => 139,  251 => 138,  247 => 137,  242 => 135,  239 => 134,  235 => 133,  222 => 122,  219 => 121,  217 => 120,  214 => 119,  210 => 117,  202 => 114,  199 => 113,  197 => 112,  188 => 106,  184 => 105,  180 => 104,  168 => 94,  166 => 93,  158 => 87,  151 => 83,  147 => 81,  145 => 80,  142 => 79,  135 => 75,  131 => 73,  129 => 72,  126 => 71,  119 => 67,  115 => 65,  113 => 64,  110 => 63,  103 => 59,  99 => 57,  97 => 56,  92 => 54,  85 => 50,  79 => 47,  73 => 43,  71 => 35,  68 => 34,  66 => 25,  62 => 23,  54 => 22,  49 => 20,  28 => 1,);
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
<html lang=\"en\">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-108000656-1\"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-108000656-1');
        </script>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{asset('favicon.jpg')}}\">
        <title>
            {% if page_title is defined %} Istorija58 | {{ page_title }} {% else %} Istorija58 {% endif %}
        </title>

        {% block stylesheets %}
            <link href=\"{{ asset('skins/history/vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('skins/history/css/blog-post.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('skins/history/css/quiz-first.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('skins/history/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('skins/history/css/myfront.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"{{ asset('skins/history/bxslider/jquery.bxslider.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('skins/history/bxslider/jquery.bxslider.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('skins/history/vendor/jquery/jquery.min.js') }}\" type=\"text/javascript\"></script>
            <!--<script src=\"{# asset('skins/history/js/ajaxSearch.js') #}\" type=\"text/javascript\"></script>-->
            <script src=\"{{ asset('skins/history/js/main.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('skins/history/vendor/popper/popper.min.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('skins/history/vendor/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('skins/history/bxslider/jquery.bxslider.min.js') }}\" type=\"text/javascript\"></script>
        {% endblock %}
    </head>
    <body>
        <div class=\"pillars\">
            <div>
                <img src=\"{{ asset('skins/history/img/ancient_column_done.jpg') }}\" alt=\"\" style=\"position: fixed; left:-5%; width: auto; height: 100%; top: 39px\">
            </div>
            <div >
                <img src=\"{{ asset('skins/history/img/ancient_column_done.jpg') }}\"  alt=\"\" style=\"position :fixed; right:-5%; width: auto; height: 100%; top: 39px\">
            </div>
        </div>
        <!-- Navigation -->
        {{ render(controller('AppBundle:front/Nav:listCategory')) }}

        {% if app.request.get('submit_message') %}
            <div class=\"upload-message\">
                <p>
                    {{ app.request.get('submit_message') }}
                </p>
            </div>
        {% endif %}
        
        {% if  app.request.get('kontaktmsg') is defined %}
            <div class=\"upload-message\">
                <p>
                    {{ app.request.get('kontaktmsg') }}
                </p>
            </div>
        {% endif %}
        <!-- Forbiden ip message -->
        {% if app.request.get('checked') is defined %}
            <div class=\"upload-message\" style=\"background-color: red\">
                <p>
                    {{ app.request.get('checked') }}
                </p>
            </div>
        {% endif %}
        <!-- Forbiden ip message -->
        {% if message is defined %}
            <div class=\"upload-message\" style=\"background-color: red\">
                <p>
                    {{ message }}
                </p>
            </div>
        {% endif %}

        <!-- Page Content -->
        <div class=\"container\">
            <div class=\"row\">
                <!-- Post Content Column -->
                <div class=\"col-md-8\" id=\"search-content\">
                    {% if app.request.get('_route') == 'main_front_page' %}

                        <!-- Title -->
                        <h5 class=\"title-main\">Učite istoriju? Dobro došli! </h5>

                        <!-- Description of content -->
                        <span class=\"lead\">
                            Rešite kviz ili potrazite materijal u odgovarajućem meniju. 
                        </span>
                        <hr>
                        <ul class=\"bxslider\">
                            <li><img src=\"{{ asset('skins/history/bxslider/images/greek_teathar_720_261.jpg') }}\" alt=\"\"/></li>
                            <li><img src=\"{{ asset('skins/history/bxslider/images/misar_719_261.jpg') }}\" alt=\"\"/></li>
                            <li><img src=\"{{ asset('skins/history/bxslider/images/last_super.jpg') }}\" alt=\"\"/></li>
                        </ul>
                        <hr>
                        <div class=\"tought-button\">
                            <span class=\"tought-button-click\">Pročitaj misao dana!</span>
                        </div>
                        {% if thought is not empty %}
                            <div class=\"tought-of-day\">
                                <span>{{ thought.text }}<i class=\"float-right\">{{ thought.author }}</i></span>
                            </div>
                        {% endif %}
                        <hr>
                    {% endif %}

                    {% set page_title = 'naslovna' %}
                    {% if app.request.get('_route') == 'main_front_page' %}
                        <p>Poslednje dodato:</p>
                        <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                            <thead>
                                <tr>
                                    <th>Naslov</th>
                                    <th>Dodao</th>
                                    <th>Vreme dodavanja</th>
                                    <th>Akcije</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for post in posts %}
                                    <tr>
                                        <td>{{ post.title }}</td>
                                        <td>
                                            {% if post.author is defined %} 
                                                {{ post.author }} 
                                            {% elseif post.adminId is defined %} 
                                                {{ post.adminId }} 
                                            {% else %}
                                                {{ nepoznat }} 
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if post.created %}
                                            {{ post.created|date('Y-m-d H:i:s') }}
                                            {% endif %}

                                        </td>
                                        <td>
                                            <ul style=\"list-style-type: none\">
                                                <li>
                                                    <a href=\"{{ asset('uploads/posts/') }}{{post.body}}\" target=\"_blank\">Prikazi</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}

                    {% block body %}
                    {% endblock %}

                    <!-- Comments -->
                    {%  if app.request.get('_route') == 'main_front_page' %}
                        <div class=\"card my-4\" >
                            <h5 class=\"card-header\" >Ostavi komentar:</h5>
                            <div class=\"card-body\" >
                                {{ form_start(form_comment) }}
                                <div class=\"form-group\">
                                    {{ form_label(form_comment.author) }}
                                    {{ form_errors(form_comment.author) }}
                                    {{ form_widget(form_comment.author) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form_comment.body) }}
                                    {{ form_errors(form_comment.body) }}
                                    {{ form_widget(form_comment.body) }}
                                </div>
                                <div class=\"form-group\">
                                    {% do form_comment.status.setRendered() %}
                                </div>
                                <i class=\"fa fa-plus move-right\" style=\"color:white; right:-10px;\"></i><input type=\"submit\" value=\"Create\" style=\"position:relative; left: -10px!important;\" class=\"btn btn-primary btn-create btn-move-fafa\"/>
                                {{ form_end(form_comment) }}
                            </div>
                        </div>
                        <h4 style=\"display:block; width:100%;\">Komentari:</h4>

                        <div class=\"width-90\">
                        <!-- Comments and comments with parentId -->
                        {% include 'front/main/comments-main.html.twig' with {'commments':comments} %}
                        </div>

                        <!-- Pagination -->
                        {% if maxPages > 1 %}
                            <ul class=\"pagination pagination-sm\">
                                {# `«` arrow  #}
                                {# `currentPage var is the one defined in routing yaml/pageroute/defaults.  #}
                                <li {% if thisPage == 1  %} class=\"disabled\" {% endif %} >
                                    <a href=\"{{ path('main_front_page', { currentPage: thisPage-1 < 1 ? 1 : thisPage-1}) }}\">«</a>
                                </li>

                                {# Render each page number #}
                                {% for i in 1..maxPages %}{# Creates a sequence based on the operand before and after the operator!!! #}
                                    <li {% if thisPage == i  %} class=\"active\"  {% endif %} >

                                        <a href=\"{{ path('main_front_page', { currentPage: i}) }}\" >{{ i }}</a>
                                    </li>
                                {% endfor %}

                                {# `»` arrow #}
                                <li {% if thisPage == maxPages %} class=\"disabled\" {% endif %} >
                                    <a href=\"{{ path('main_front_page', { currentPage: thisPage+1 <= maxPages ? thisPage+1 : thisPage}) }}\">»</a>
                                </li>
                            </ul>
                        {% endif %}

                    {% endif %}
                </div>
                <div class=\"col-md-4\" id=\"side\">
                <!-- Sidebar Widgets Column -->
                {% include 'front/front-side.html.twig' %}
                </div>
            </div>
        </div>
        <footer class=\"py-5 bg-dark\">
            <div class=\"container\">
                <p class=\"m-0 text-center text-white\">Istorija58 2017</p>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript , jquery and sliderJS-->
        <script>
            \$(document).ready(function () {
                // \$('#appbundle_comment_author').val('');
                // \$('#appbundle_comment_body').val('');
                \$(\"#sl_sh_remove\").on('change', function(){
                   if(\$(this).is(':checked')){
                       \$('.bx-wrapper').hide();
                   } else {
                       \$('.bx-wrapper').show();
                   }
                });

                \$('.tought-button').on('click', function(){
                    \$('.tought-of-day').show();
                    \$(this).hide();
                });
                \$('.tought-of-day').on('click', function(){
                    \$('.tought-button').show();
                    \$(this).hide();
                });
            });
        </script>
    </body>
</html>

", ":front:front-main.html.twig", "/home/zeljko/projects/istorija58.in.rs/app/Resources/views/front/front-main.html.twig");
    }
}
