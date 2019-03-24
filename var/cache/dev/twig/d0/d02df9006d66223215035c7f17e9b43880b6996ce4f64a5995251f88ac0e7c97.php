<?php

/* front/front-main.html.twig */
class __TwigTemplate_41c1898f2f77380b84730d21a6f2b8cc2a3888c701797c92553c56b7c9e65492 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdfb0317c4b3680be05583703a7a3a9f2ebe71c156e36c58a3e03c945164e919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdfb0317c4b3680be05583703a7a3a9f2ebe71c156e36c58a3e03c945164e919->enter($__internal_cdfb0317c4b3680be05583703a7a3a9f2ebe71c156e36c58a3e03c945164e919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/front-main.html.twig"));

        $__internal_e31909bcbcf7dc20fe1e809c748c76f657ce994c7fcef6adaea72b71767ccfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31909bcbcf7dc20fe1e809c748c76f657ce994c7fcef6adaea72b71767ccfce->enter($__internal_e31909bcbcf7dc20fe1e809c748c76f657ce994c7fcef6adaea72b71767ccfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/front-main.html.twig"));

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
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.jpg"), "html", null, true);
        echo "\">
        <title>

            ";
        // line 24
        if (array_key_exists("page_title", $context)) {
            echo " Istorija58 | ";
            echo twig_escape_filter($this->env, ($context["page_title"] ?? $this->getContext($context, "page_title")), "html", null, true);
            echo " ";
        } else {
            echo " Istorija58 ";
        }
        // line 25
        echo "        </title>

        ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascript', $context, $blocks);
        // line 47
        echo "    </head>

    <body>
        <div class=\"pillars\">
            <div>
                <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/img/ancient_column_done.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"position: fixed; left:-5%; width: auto; height: 100%; top: 39px\">
            </div>
            <div >
                <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/img/ancient_column_done.jpg"), "html", null, true);
        echo "\"  alt=\"\" style=\"position :fixed; right:-5%; width: auto; height: 100%; top: 39px\">
            </div>
        </div>
        <!-- Navigation -->
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:front/Nav:listCategory"));
        echo "

        ";
        // line 61
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "submit_message"), "method")) {
            // line 62
            echo "            <div class=\"upload-message\">
                <p>
                    ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "submit_message"), "method"), "html", null, true);
            echo "
                </p>
            </div>
        ";
        }
        // line 68
        echo "        
        ";
        // line 69
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "kontaktmsg"), "method", true, true)) {
            // line 70
            echo "            <div class=\"upload-message\">
                <p>
                    ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "kontaktmsg"), "method"), "html", null, true);
            echo "
                </p>
            </div>
        ";
        }
        // line 76
        echo "        
        <!-- Forbiden ip message -->
        ";
        // line 78
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "checked"), "method", true, true)) {
            // line 79
            echo "            <div class=\"upload-message\" style=\"background-color: red\">
                <p>
                    ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "checked"), "method"), "html", null, true);
            echo "
                </p>
            </div>
        ";
        }
        // line 85
        echo "        
        <!-- Forbiden ip message -->
        ";
        // line 87
        if (array_key_exists("message", $context)) {
            // line 88
            echo "            <div class=\"upload-message\" style=\"background-color: red\">
                <p>
                    ";
            // line 90
            echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
            echo "
                </p>
            </div>
        ";
        }
        // line 94
        echo "

        <!-- Page Content -->
        <div class=\"container\">

            <div class=\"row\">

                <!-- Post Content Column -->
                <div class=\"col-md-8\" id=\"search-content\">


                    ";
        // line 105
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "main_front_page")) {
            // line 106
            echo "
                        <!-- Title -->
                        <h5 class=\"title-main\">Učite istoriju? Dobro došli! </h5>

                        <!-- Description of content -->
                        <span class=\"lead\">
                            Rešite kviz ili potrazite materijal u odgovarajućem meniju. 
                        </span>
                        <span class=\"lead size-12 float-right\"> Ukloni slide show <input type=\"checkbox\" id=\"sl_sh_remove\">
                        </span>
                        <!--<div class=\"feed\">
                            <h5>Aktuelnosti</h5>
                            <div class=\"row\">
                                <a href=\"";
            // line 119
            echo "\" class=\"block-bre\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 feed-article\">
                                        <span class=\"\">
                                            Rezultati Školskog takmičenja iz istorije 2018.
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class=\"row\">
                                <a href=\"";
            // line 128
            echo "\" class=\"block-bre\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 feed-article\">
                                        <span class=\"\">
                                            Rezultati Opštinskog takmičenja iz istorije 2018.
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>-->

                        
                        <hr>

                        <ul class=\"bxslider\">
                            <li><img src=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/bxslider/images/greek_teathar_720_261.jpg"), "html", null, true);
            echo "\" alt=\"\"/></li>
                            <li><img src=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/bxslider/images/misar_719_261.jpg"), "html", null, true);
            echo "\" alt=\"\"/></li>
                            <li><img src=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/bxslider/images/last_super.jpg"), "html", null, true);
            echo "\" alt=\"\"/></li>
                        </ul>
                        <!-- Preview Image 
                        <img class=\"img-fluid rounded\" src=\"img/077_morachiello_odeon_efeso.jpg\" alt=\"\">
                        -->
                        
                        <hr>
                        <div class=\"tought-button\">
                            <span class=\"tought-button-click\">Pročitaj misao dana!</span>
                        </div>
                        <div class=\"tought-of-day\">
                            <span>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["thought"] ?? $this->getContext($context, "thought")), 0, array()), "text", array()), "html", null, true);
            echo "<i class=\"float-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["thought"] ?? $this->getContext($context, "thought")), 0, array()), "author", array()), "html", null, true);
            echo "</i></span>
                            
                        </div>
                        <hr>
                    ";
        }
        // line 160
        echo "

                    ";
        // line 162
        $context["page_title"] = "naslovna";
        // line 163
        echo "                    ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "main_front_page")) {
            // line 164
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
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 176
                echo "                                    <tr>
                                        <td>";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            ";
                // line 179
                if ($this->getAttribute($context["post"], "author", array(), "any", true, true)) {
                    echo " 
                                                ";
                    // line 180
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "author", array()), "html", null, true);
                    echo " 
                                            ";
                } elseif ($this->getAttribute(                // line 181
$context["post"], "adminId", array(), "any", true, true)) {
                    echo " 
                                                ";
                    // line 182
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "adminId", array()), "html", null, true);
                    echo " 
                                            ";
                } else {
                    // line 184
                    echo "                                                ";
                    echo twig_escape_filter($this->env, ($context["nepoznat"] ?? $this->getContext($context, "nepoznat")), "html", null, true);
                    echo " 
                                            ";
                }
                // line 186
                echo "                                        </td>
                                        <td>";
                // line 187
                if ($this->getAttribute($context["post"], "created", array())) {
                    // line 188
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "
                                            ";
                }
                // line 190
                echo "                                            </td>
                                            <td>
                                                <ul style=\"list-style-type: none\">
                                                    <li>
                                                        <a href=\"";
                // line 194
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
            // line 200
            echo "                                        </tbody>
                                    </table>
                                    ";
        }
        // line 203
        echo "
                                        ";
        // line 204
        $this->displayBlock('body', $context, $blocks);
        // line 208
        echo "
<!-- Comments -->
                                    ";
        // line 210
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "main_front_page")) {
            // line 211
            echo "

                                        <!-- Comments Form -->
                                        <div class=\"card my-4\" >
                                            <h5 class=\"card-header\" >Ostavi komentar:</h5>
                                            <div class=\"card-body\" >

                                                ";
            // line 218
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_comment"] ?? $this->getContext($context, "form_comment")), 'form_start');
            echo "
                                                <div class=\"form-group\">
                                                    ";
            // line 220
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? $this->getContext($context, "form_comment")), "author", array()), 'label');
            echo "
                                                    ";
            // line 221
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? $this->getContext($context, "form_comment")), "author", array()), 'errors');
            echo "
                                                    ";
            // line 222
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? $this->getContext($context, "form_comment")), "author", array()), 'widget');
            echo "
                                                </div>
                                                <div class=\"form-group\">
                                                    ";
            // line 225
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? $this->getContext($context, "form_comment")), "body", array()), 'label');
            echo "
                                                    ";
            // line 226
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? $this->getContext($context, "form_comment")), "body", array()), 'errors');
            echo "
                                                    ";
            // line 227
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? $this->getContext($context, "form_comment")), "body", array()), 'widget');
            echo "
                                                </div>
                                                <div class=\"form-group\">
                                                    ";
            // line 230
            $this->getAttribute($this->getAttribute(($context["form_comment"] ?? $this->getContext($context, "form_comment")), "status", array()), "setRendered", array(), "method");
            // line 231
            echo "                                                </div>
                                                <i class=\"fa fa-plus move-right\" style=\"color:white; right:-10px;\"></i><input type=\"submit\" value=\"Create\" style=\"position:relative; left: -10px!important;\" class=\"btn btn-primary btn-create btn-move-fafa\"/>
                                                ";
            // line 233
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_comment"] ?? $this->getContext($context, "form_comment")), 'form_end');
            echo "
                                            </div>
                                        </div>
                                        <h4 style=\"display:block; width:100%;\">Komentari:</h4>

                                        <div class=\"width-90\">
                                        <!-- Comments and omments with parentId -->
                                        ";
            // line 240
            $this->loadTemplate("front/main/comments-main.html.twig", "front/front-main.html.twig", 240)->display(array_merge($context, array("commments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
            // line 241
            echo "                                        </div>
                                        ";
            // line 242
            if ((($context["maxPages"] ?? $this->getContext($context, "maxPages")) > 1)) {
                // line 243
                echo "                                            <ul class=\"pagination pagination-sm\">
                                                ";
                // line 245
                echo "                                                ";
                // line 246
                echo "                                                <li ";
                if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == 1)) {
                    echo " class=\"disabled\" ";
                }
                echo " >
                                                    <a href=\"";
                // line 247
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_front_page", array("currentPage" => ((((($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1) < 1)) ? (1) : ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) - 1))))), "html", null, true);
                echo "\">«</a>
                                                </li>

                                                ";
                // line 251
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? $this->getContext($context, "maxPages"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 252
                    echo "                                                    <li ";
                    if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == $context["i"])) {
                        echo " class=\"active\"  ";
                    }
                    echo " >

                                                        <a href=\"";
                    // line 254
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
                // line 257
                echo "
                                                ";
                // line 259
                echo "                                                <li ";
                if ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) == ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) {
                    echo " class=\"disabled\" ";
                }
                echo " >
                                                    <a href=\"";
                // line 260
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_front_page", array("currentPage" => ((((($context["thisPage"] ?? $this->getContext($context, "thisPage")) + 1) <= ($context["maxPages"] ?? $this->getContext($context, "maxPages")))) ? ((($context["thisPage"] ?? $this->getContext($context, "thisPage")) + 1)) : (($context["thisPage"] ?? $this->getContext($context, "thisPage")))))), "html", null, true);
                echo "\">»</a>
                                                </li>
                                            </ul>
                                        ";
            }
            // line 264
            echo "                                    ";
        }
        // line 265
        echo "                                    </div>
                                    
                                    <div class=\"col-md-4\" id=\"side\">
                                    <!-- Sidebar Widgets Column -->
                                    ";
        // line 269
        $this->loadTemplate("front/front-side.html.twig", "front/front-main.html.twig", 269)->display($context);
        // line 270
        echo "                                    </div>
                                    
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container -->
                            <!-- Footer -->
                            <footer class=\"py-5 bg-dark\">
                                <div class=\"container\">
                                    <p class=\"m-0 text-center text-white\">Istorija58 2017</p>
                                </div>
                                <!-- /.container -->
                            </footer>
                            <!-- Bootstrap core JavaScript , jquery and sliderJS-->
                            <script>
            \$(document).ready(function () {
                // \$('#appbundle_comment_author').val('');
                // \$('#appbundle_comment_body').val('');
                var sl_sh_remove = \$('#sl_sh_remove');
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
        
        $__internal_cdfb0317c4b3680be05583703a7a3a9f2ebe71c156e36c58a3e03c945164e919->leave($__internal_cdfb0317c4b3680be05583703a7a3a9f2ebe71c156e36c58a3e03c945164e919_prof);

        
        $__internal_e31909bcbcf7dc20fe1e809c748c76f657ce994c7fcef6adaea72b71767ccfce->leave($__internal_e31909bcbcf7dc20fe1e809c748c76f657ce994c7fcef6adaea72b71767ccfce_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_169248c07e88761708c46e93f654b696458a8e6b985bd55d9d40824ad38497ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169248c07e88761708c46e93f654b696458a8e6b985bd55d9d40824ad38497ff->enter($__internal_169248c07e88761708c46e93f654b696458a8e6b985bd55d9d40824ad38497ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f97c3d6a5a5ee31a444b1df42c7eb4956cc844f38f17b59715013e1be3a90814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97c3d6a5a5ee31a444b1df42c7eb4956cc844f38f17b59715013e1be3a90814->enter($__internal_f97c3d6a5a5ee31a444b1df42c7eb4956cc844f38f17b59715013e1be3a90814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        echo "

            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/css/blog-post.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/css/quiz-first.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/css/myfront.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/bxslider/jquery.bxslider.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/bxslider/jquery.bxslider.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        ";
        
        $__internal_f97c3d6a5a5ee31a444b1df42c7eb4956cc844f38f17b59715013e1be3a90814->leave($__internal_f97c3d6a5a5ee31a444b1df42c7eb4956cc844f38f17b59715013e1be3a90814_prof);

        
        $__internal_169248c07e88761708c46e93f654b696458a8e6b985bd55d9d40824ad38497ff->leave($__internal_169248c07e88761708c46e93f654b696458a8e6b985bd55d9d40824ad38497ff_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_5d29b33274b1e136271c01a6377c2fa069b9c537d9474c60080318e7b297b701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d29b33274b1e136271c01a6377c2fa069b9c537d9474c60080318e7b297b701->enter($__internal_5d29b33274b1e136271c01a6377c2fa069b9c537d9474c60080318e7b297b701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_10635d0ffc1fbfaa964d98482218d8dbc79d046e42597c73f3097a8e937f8ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10635d0ffc1fbfaa964d98482218d8dbc79d046e42597c73f3097a8e937f8ff7->enter($__internal_10635d0ffc1fbfaa964d98482218d8dbc79d046e42597c73f3097a8e937f8ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 40
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!--<script src=\"";
        // line 41
        echo "\" type=\"text/javascript\"></script>-->
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/vendor/popper/popper.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("skins/history/bxslider/jquery.bxslider.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_10635d0ffc1fbfaa964d98482218d8dbc79d046e42597c73f3097a8e937f8ff7->leave($__internal_10635d0ffc1fbfaa964d98482218d8dbc79d046e42597c73f3097a8e937f8ff7_prof);

        
        $__internal_5d29b33274b1e136271c01a6377c2fa069b9c537d9474c60080318e7b297b701->leave($__internal_5d29b33274b1e136271c01a6377c2fa069b9c537d9474c60080318e7b297b701_prof);

    }

    // line 204
    public function block_body($context, array $blocks = array())
    {
        $__internal_69c4dbe699095916cca5deff702a259e76a161a147e727668ac2e3e92116515f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c4dbe699095916cca5deff702a259e76a161a147e727668ac2e3e92116515f->enter($__internal_69c4dbe699095916cca5deff702a259e76a161a147e727668ac2e3e92116515f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7879d07d62214e9ccb36c967a85a82c072cf05e39f113993a3253b55dc50e429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7879d07d62214e9ccb36c967a85a82c072cf05e39f113993a3253b55dc50e429->enter($__internal_7879d07d62214e9ccb36c967a85a82c072cf05e39f113993a3253b55dc50e429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 205
        echo "

                                        ";
        
        $__internal_7879d07d62214e9ccb36c967a85a82c072cf05e39f113993a3253b55dc50e429->leave($__internal_7879d07d62214e9ccb36c967a85a82c072cf05e39f113993a3253b55dc50e429_prof);

        
        $__internal_69c4dbe699095916cca5deff702a259e76a161a147e727668ac2e3e92116515f->leave($__internal_69c4dbe699095916cca5deff702a259e76a161a147e727668ac2e3e92116515f_prof);

    }

    public function getTemplateName()
    {
        return "front/front-main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  639 => 205,  630 => 204,  618 => 45,  614 => 44,  610 => 43,  606 => 42,  603 => 41,  598 => 40,  589 => 39,  577 => 36,  573 => 35,  569 => 34,  565 => 33,  561 => 32,  557 => 31,  553 => 30,  549 => 28,  540 => 27,  490 => 270,  488 => 269,  482 => 265,  479 => 264,  472 => 260,  465 => 259,  462 => 257,  451 => 254,  443 => 252,  438 => 251,  432 => 247,  425 => 246,  423 => 245,  420 => 243,  418 => 242,  415 => 241,  413 => 240,  403 => 233,  399 => 231,  397 => 230,  391 => 227,  387 => 226,  383 => 225,  377 => 222,  373 => 221,  369 => 220,  364 => 218,  355 => 211,  353 => 210,  349 => 208,  347 => 204,  344 => 203,  339 => 200,  326 => 194,  320 => 190,  314 => 188,  312 => 187,  309 => 186,  303 => 184,  298 => 182,  294 => 181,  290 => 180,  286 => 179,  281 => 177,  278 => 176,  274 => 175,  261 => 164,  258 => 163,  256 => 162,  252 => 160,  242 => 155,  228 => 144,  224 => 143,  220 => 142,  204 => 128,  193 => 119,  178 => 106,  176 => 105,  163 => 94,  156 => 90,  152 => 88,  150 => 87,  146 => 85,  139 => 81,  135 => 79,  133 => 78,  129 => 76,  122 => 72,  118 => 70,  116 => 69,  113 => 68,  106 => 64,  102 => 62,  100 => 61,  95 => 59,  88 => 55,  82 => 52,  75 => 47,  73 => 39,  70 => 38,  68 => 27,  64 => 25,  56 => 24,  50 => 21,  28 => 1,);
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

        {% block javascript %}
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
                        <span class=\"lead size-12 float-right\"> Ukloni slide show <input type=\"checkbox\" id=\"sl_sh_remove\">
                        </span>
                        <!--<div class=\"feed\">
                            <h5>Aktuelnosti</h5>
                            <div class=\"row\">
                                <a href=\"{# asset('uploads/feed/rezultati takmicenja 18..doc') #}\" class=\"block-bre\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 feed-article\">
                                        <span class=\"\">
                                            Rezultati Školskog takmičenja iz istorije 2018.
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class=\"row\">
                                <a href=\"{# asset('uploads/feed/Резултати Општинског такмичења из историје 18.doc') #}\" class=\"block-bre\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 feed-article\">
                                        <span class=\"\">
                                            Rezultati Opštinskog takmičenja iz istorije 2018.
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>-->

                        
                        <hr>

                        <ul class=\"bxslider\">
                            <li><img src=\"{{ asset('skins/history/bxslider/images/greek_teathar_720_261.jpg') }}\" alt=\"\"/></li>
                            <li><img src=\"{{ asset('skins/history/bxslider/images/misar_719_261.jpg') }}\" alt=\"\"/></li>
                            <li><img src=\"{{ asset('skins/history/bxslider/images/last_super.jpg') }}\" alt=\"\"/></li>
                        </ul>
                        <!-- Preview Image 
                        <img class=\"img-fluid rounded\" src=\"img/077_morachiello_odeon_efeso.jpg\" alt=\"\">
                        -->
                        
                        <hr>
                        <div class=\"tought-button\">
                            <span class=\"tought-button-click\">Pročitaj misao dana!</span>
                        </div>
                        <div class=\"tought-of-day\">
                            <span>{{ thought.0.text }}<i class=\"float-right\">{{ thought.0.author }}</i></span>
                            
                        </div>
                        <hr>
                    {% endif %}


                    {% set page_title = 'naslovna' %}
                    {%  if app.request.get('_route') == 'main_front_page' %}
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
                                        <td>{% if post.created %}
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


                                        <!-- Comments Form -->
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
                                        <!-- Comments and omments with parentId -->
                                        {% include 'front/main/comments-main.html.twig' with {'commments':comments} %}
                                        </div>
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
                                <!-- /.row -->
                            </div>
                            <!-- /.container -->
                            <!-- Footer -->
                            <footer class=\"py-5 bg-dark\">
                                <div class=\"container\">
                                    <p class=\"m-0 text-center text-white\">Istorija58 2017</p>
                                </div>
                                <!-- /.container -->
                            </footer>
                            <!-- Bootstrap core JavaScript , jquery and sliderJS-->
                            <script>
            \$(document).ready(function () {
                // \$('#appbundle_comment_author').val('');
                // \$('#appbundle_comment_body').val('');
                var sl_sh_remove = \$('#sl_sh_remove');
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

", "front/front-main.html.twig", "/home/zeljko/projects/istorija58.in.rs/app/Resources/views/front/front-main.html.twig");
    }
}
