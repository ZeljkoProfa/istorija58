<?php

/* front/front-main.html.twig */
class __TwigTemplate_ff2d628455a4856ea0f33c8820dd72767b4b4de33becb128459eca93a865ad00 extends Twig_Template
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
            echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
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
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "submit_message"), "method")) {
            // line 62
            echo "            <div class=\"upload-message\">
                <p>
                    ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "submit_message"), "method"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "kontaktmsg"), "method"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "checked"), "method"), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "main_front_page")) {
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["thought"] ?? null), 0, array()), "text", array()), "html", null, true);
            echo "<i class=\"float-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["thought"] ?? null), 0, array()), "author", array()), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "main_front_page")) {
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
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
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
                    echo twig_escape_filter($this->env, ($context["nepoznat"] ?? null), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "main_front_page")) {
            // line 211
            echo "

                                        <!-- Comments Form -->
                                        <div class=\"card my-4\" >
                                            <h5 class=\"card-header\" >Ostavi komentar:</h5>
                                            <div class=\"card-body\" >

                                                ";
            // line 218
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_comment"] ?? null), 'form_start');
            echo "
                                                <div class=\"form-group\">
                                                    ";
            // line 220
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? null), "author", array()), 'label');
            echo "
                                                    ";
            // line 221
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? null), "author", array()), 'errors');
            echo "
                                                    ";
            // line 222
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? null), "author", array()), 'widget');
            echo "
                                                </div>
                                                <div class=\"form-group\">
                                                    ";
            // line 225
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? null), "body", array()), 'label');
            echo "
                                                    ";
            // line 226
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? null), "body", array()), 'errors');
            echo "
                                                    ";
            // line 227
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_comment"] ?? null), "body", array()), 'widget');
            echo "
                                                </div>
                                                <div class=\"form-group\">
                                                    ";
            // line 230
            $this->getAttribute($this->getAttribute(($context["form_comment"] ?? null), "status", array()), "setRendered", array(), "method");
            // line 231
            echo "                                                </div>
                                                <i class=\"fa fa-plus move-right\" style=\"color:white; right:-10px;\"></i><input type=\"submit\" value=\"Create\" style=\"position:relative; left: -10px!important;\" class=\"btn btn-primary btn-create btn-move-fafa\"/>
                                                ";
            // line 233
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_comment"] ?? null), 'form_end');
            echo "
                                            </div>
                                        </div>
                                        <h4 style=\"display:block; width:100%;\">Komentari:</h4>

                                        <div class=\"width-90\">
                                        <!-- Comments and omments with parentId -->
                                        ";
            // line 240
            $this->loadTemplate("front/main/comments-main.html.twig", "front/front-main.html.twig", 240)->display(array_merge($context, array("commments" => ($context["comments"] ?? null))));
            // line 241
            echo "                                        </div>
                                        ";
            // line 242
            if ((($context["maxPages"] ?? null) > 1)) {
                // line 243
                echo "                                            <ul class=\"pagination pagination-sm\">
                                                ";
                // line 245
                echo "                                                ";
                // line 246
                echo "                                                <li ";
                if ((($context["thisPage"] ?? null) == 1)) {
                    echo " class=\"disabled\" ";
                }
                echo " >
                                                    <a href=\"";
                // line 247
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_front_page", array("currentPage" => ((((($context["thisPage"] ?? null) - 1) < 1)) ? (1) : ((($context["thisPage"] ?? null) - 1))))), "html", null, true);
                echo "\">«</a>
                                                </li>

                                                ";
                // line 251
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPages"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 252
                    echo "                                                    <li ";
                    if ((($context["thisPage"] ?? null) == $context["i"])) {
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
                if ((($context["thisPage"] ?? null) == ($context["maxPages"] ?? null))) {
                    echo " class=\"disabled\" ";
                }
                echo " >
                                                    <a href=\"";
                // line 260
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_front_page", array("currentPage" => ((((($context["thisPage"] ?? null) + 1) <= ($context["maxPages"] ?? null))) ? ((($context["thisPage"] ?? null) + 1)) : (($context["thisPage"] ?? null))))), "html", null, true);
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
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
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
    }

    // line 204
    public function block_body($context, array $blocks = array())
    {
        // line 205
        echo "

                                        ";
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
        return array (  597 => 205,  594 => 204,  588 => 45,  584 => 44,  580 => 43,  576 => 42,  573 => 41,  568 => 40,  565 => 39,  559 => 36,  555 => 35,  551 => 34,  547 => 33,  543 => 32,  539 => 31,  535 => 30,  531 => 28,  528 => 27,  484 => 270,  482 => 269,  476 => 265,  473 => 264,  466 => 260,  459 => 259,  456 => 257,  445 => 254,  437 => 252,  432 => 251,  426 => 247,  419 => 246,  417 => 245,  414 => 243,  412 => 242,  409 => 241,  407 => 240,  397 => 233,  393 => 231,  391 => 230,  385 => 227,  381 => 226,  377 => 225,  371 => 222,  367 => 221,  363 => 220,  358 => 218,  349 => 211,  347 => 210,  343 => 208,  341 => 204,  338 => 203,  333 => 200,  320 => 194,  314 => 190,  308 => 188,  306 => 187,  303 => 186,  297 => 184,  292 => 182,  288 => 181,  284 => 180,  280 => 179,  275 => 177,  272 => 176,  268 => 175,  255 => 164,  252 => 163,  250 => 162,  246 => 160,  236 => 155,  222 => 144,  218 => 143,  214 => 142,  198 => 128,  187 => 119,  172 => 106,  170 => 105,  157 => 94,  150 => 90,  146 => 88,  144 => 87,  140 => 85,  133 => 81,  129 => 79,  127 => 78,  123 => 76,  116 => 72,  112 => 70,  110 => 69,  107 => 68,  100 => 64,  96 => 62,  94 => 61,  89 => 59,  82 => 55,  76 => 52,  69 => 47,  67 => 39,  64 => 38,  62 => 27,  58 => 25,  50 => 24,  44 => 21,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "front/front-main.html.twig", "/www/webvol5/q5/0messcb7d0j2zxl/istorija58.in.rs/app/Resources/views/front/front-main.html.twig");
    }
}
