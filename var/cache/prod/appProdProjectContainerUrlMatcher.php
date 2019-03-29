<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/admin')) {
            // admin_index
            if ('/admin' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_admin_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\back\\AdminController::indexAction',  '_route' => 'admin_index',);
            }
            not_admin_index:

            // admin_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_admin_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show')), array (  '_controller' => 'AppBundle\\Controller\\back\\AdminController::showAction',));
            }
            not_admin_show:

            // admin_new
            if ('/admin/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_admin_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\back\\AdminController::newAction',  '_route' => 'admin_new',);
            }
            not_admin_new:

            // admin_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_admin_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'AppBundle\\Controller\\back\\AdminController::editAction',));
            }
            not_admin_edit:

            // admin_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_admin_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'AppBundle\\Controller\\back\\AdminController::deleteAction',));
            }
            not_admin_delete:

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/category')) {
                // category_index
                if ('/category' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_category_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'category_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\back\\CategoryController::indexAction',  '_route' => 'category_index',);
                }
                not_category_index:

                // category_show
                if (preg_match('#^/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_category_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'AppBundle\\Controller\\back\\CategoryController::showAction',));
                }
                not_category_show:

                // category_new
                if ('/category/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_category_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\back\\CategoryController::newAction',  '_route' => 'category_new',);
                }
                not_category_new:

                // category_edit
                if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_category_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'AppBundle\\Controller\\back\\CategoryController::editAction',));
                }
                not_category_edit:

                // category_delete
                if (preg_match('#^/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'AppBundle\\Controller\\back\\CategoryController::deleteAction',));
                }
                not_category_delete:

            }

            elseif (0 === strpos($pathinfo, '/comment')) {
                // comment_index
                if ('/comment' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_comment_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'comment_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\back\\CommentController::indexAction',  '_route' => 'comment_index',);
                }
                not_comment_index:

                // comment_show
                if (preg_match('#^/comment/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_comment_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_show')), array (  '_controller' => 'AppBundle\\Controller\\back\\CommentController::showAction',));
                }
                not_comment_show:

                // comment_new
                if ('/comment/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_comment_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\back\\CommentController::newAction',  '_route' => 'comment_new',);
                }
                not_comment_new:

                // comment_edit
                if (preg_match('#^/comment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_comment_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_edit')), array (  '_controller' => 'AppBundle\\Controller\\back\\CommentController::editAction',));
                }
                not_comment_edit:

                // comment_delete
                if (preg_match('#^/comment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_comment_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_delete')), array (  '_controller' => 'AppBundle\\Controller\\back\\CommentController::deleteAction',));
                }
                not_comment_delete:

            }

            elseif (0 === strpos($pathinfo, '/contact')) {
                // contact_index
                if ('/contact' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_contact_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'contact_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\back\\ContactController::indexAction',  '_route' => 'contact_index',);
                }
                not_contact_index:

                // contact_show
                if (preg_match('#^/contact/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_contact_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_show')), array (  '_controller' => 'AppBundle\\Controller\\back\\ContactController::showAction',));
                }
                not_contact_show:

                // contact_new
                if ('/contact/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_contact_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\back\\ContactController::newAction',  '_route' => 'contact_new',);
                }
                not_contact_new:

                // contact_edit
                if (preg_match('#^/contact/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_contact_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_edit')), array (  '_controller' => 'AppBundle\\Controller\\back\\ContactController::editAction',));
                }
                not_contact_edit:

                // contact_delete
                if (preg_match('#^/contact/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_contact_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_delete')), array (  '_controller' => 'AppBundle\\Controller\\back\\ContactController::deleteAction',));
                }
                not_contact_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/post')) {
            // post_index
            if ('/post' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_post_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'post_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\back\\PostController::indexAction',  '_route' => 'post_index',);
            }
            not_post_index:

            // post_show
            if (preg_match('#^/post/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_post_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_show')), array (  '_controller' => 'AppBundle\\Controller\\back\\PostController::showAction',));
            }
            not_post_show:

            // post_new
            if ('/post/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_post_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\back\\PostController::newAction',  '_route' => 'post_new',);
            }
            not_post_new:

            // post_edit
            if (preg_match('#^/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_post_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_edit')), array (  '_controller' => 'AppBundle\\Controller\\back\\PostController::editAction',));
            }
            not_post_edit:

            // post_delete
            if (preg_match('#^/post/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_post_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_delete')), array (  '_controller' => 'AppBundle\\Controller\\back\\PostController::deleteAction',));
            }
            not_post_delete:

        }

        // video_search
        if ('/pretraga-videa' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\front\\VideoFrontController::searchVideoAction',  '_route' => 'video_search',);
        }

        if (0 === strpos($pathinfo, '/video')) {
            // video_index
            if ('/video' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_video_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'video_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\back\\VideoController::indexAction',  'currentPage' => 1,  '_route' => 'video_index',);
            }
            not_video_index:

            // video_show
            if (preg_match('#^/video/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_video_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'video_show')), array (  '_controller' => 'AppBundle\\Controller\\back\\VideoController::showAction',));
            }
            not_video_show:

            // video_new
            if ('/video/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_video_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\back\\VideoController::newAction',  '_route' => 'video_new',);
            }
            not_video_new:

            // video_edit
            if (preg_match('#^/video/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_video_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'video_edit')), array (  '_controller' => 'AppBundle\\Controller\\back\\VideoController::editAction',));
            }
            not_video_edit:

            // video_delete
            if (preg_match('#^/video/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_video_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'video_delete')), array (  '_controller' => 'AppBundle\\Controller\\back\\VideoController::deleteAction',));
            }
            not_video_delete:

            // film_search
            if ('/video/admin-pretraga-videa' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\back\\VideoController::findVideosAction',  '_route' => 'film_search',);
            }

        }

        // main_front_page
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'main_front_page');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\front\\MainPageController::listLastAddedAction',  'currentPage' => 1,  '_route' => 'main_front_page',);
        }

        if (0 === strpos($pathinfo, '/k')) {
            // content_pages
            if (0 === strpos($pathinfo, '/kategorije') && preg_match('#^/kategorije/(?P<title>[^/]++)/(?P<id>[^/]++)(?:/(?P<currentPage>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_pages')), array (  '_controller' => 'AppBundle\\Controller\\front\\ContentPagesController::contentPagesAction',  'currentPage' => 1,));
            }

            // contact
            if ('/kontakt' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\front\\ContactController::newAction',  '_route' => 'contact',);
            }

            // comments-front
            if ('/komentari' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\front\\FrontCommentController::newCommentAction',  '_route' => 'comments-front',);
            }

        }

        // front_submit_post
        if ('/dodaj-sadrzaj' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\front\\SubmitPostController::newAction',  '_route' => 'front_submit_post',);
        }

        // search
        if ('/fajl-pretraga' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\front\\SearchController::siteAction',  'currentPage' => 1,  '_route' => 'search',);
        }

        // blog_author
        if ('/o-blogu' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\front\\PersonalController::thingsAction',  '_route' => 'blog_author',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // video_front
            if ('/lista-filmova' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_video_front;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\front\\VideoFrontController::listVideosAction',  'currentPage' => 1,  '_route' => 'video_front',);
            }
            not_video_front:

            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\back\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ('/logout' === $pathinfo) {
                return array('_route' => 'logout');
            }

        }

        // video_play
        if ('/gledaj-film' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_video_play;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\front\\VideoFrontController::watchVideosAction',  '_route' => 'video_play',);
        }
        not_video_play:

        if (0 === strpos($pathinfo, '/quiz')) {
            // quiz_index
            if ('/quiz' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_quiz_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'quiz_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\back\\QuizController::indexAction',  'currentPage' => 1,  '_route' => 'quiz_index',);
            }
            not_quiz_index:

            // quiz_show
            if (preg_match('#^/quiz/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_quiz_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_show')), array (  '_controller' => 'AppBundle\\Controller\\back\\QuizController::showAction',));
            }
            not_quiz_show:

            // quiz_new
            if ('/quiz/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_quiz_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\back\\QuizController::newAction',  '_route' => 'quiz_new',);
            }
            not_quiz_new:

            // quiz_edit
            if (preg_match('#^/quiz/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_quiz_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_edit')), array (  '_controller' => 'AppBundle\\Controller\\back\\QuizController::editAction',));
            }
            not_quiz_edit:

            // quiz_delete
            if (preg_match('#^/quiz/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_quiz_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_delete')), array (  '_controller' => 'AppBundle\\Controller\\back\\QuizController::deleteAction',));
            }
            not_quiz_delete:

            if (0 === strpos($pathinfo, '/quizquestions')) {
                // quizquestions_index
                if ('/quizquestions' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_quizquestions_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'quizquestions_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\back\\QuizQuestionsController::indexAction',  '_route' => 'quizquestions_index',);
                }
                not_quizquestions_index:

                // quizquestions_show
                if (preg_match('#^/quizquestions/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_quizquestions_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizquestions_show')), array (  '_controller' => 'AppBundle\\Controller\\back\\QuizQuestionsController::showAction',));
                }
                not_quizquestions_show:

                // quizquestions_new
                if ('/quizquestions/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_quizquestions_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\back\\QuizQuestionsController::newAction',  '_route' => 'quizquestions_new',);
                }
                not_quizquestions_new:

                // quizquestions_edit
                if (preg_match('#^/quizquestions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_quizquestions_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizquestions_edit')), array (  '_controller' => 'AppBundle\\Controller\\back\\QuizQuestionsController::editAction',));
                }
                not_quizquestions_edit:

                // quizquestions_delete
                if (preg_match('#^/quizquestions/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_quizquestions_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizquestions_delete')), array (  '_controller' => 'AppBundle\\Controller\\back\\QuizQuestionsController::deleteAction',));
                }
                not_quizquestions_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/thoughts')) {
            // thoughts_index
            if ('/thoughts' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_thoughts_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'thoughts_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\back\\ThoughtsController::indexAction',  '_route' => 'thoughts_index',);
            }
            not_thoughts_index:

            // thoughts_show
            if (preg_match('#^/thoughts/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_thoughts_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thoughts_show')), array (  '_controller' => 'AppBundle\\Controller\\back\\ThoughtsController::showAction',));
            }
            not_thoughts_show:

            // thoughts_new
            if ('/thoughts/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_thoughts_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\back\\ThoughtsController::newAction',  '_route' => 'thoughts_new',);
            }
            not_thoughts_new:

            // thoughts_edit
            if (preg_match('#^/thoughts/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_thoughts_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thoughts_edit')), array (  '_controller' => 'AppBundle\\Controller\\back\\ThoughtsController::editAction',));
            }
            not_thoughts_edit:

            // thoughts_delete
            if (preg_match('#^/thoughts/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_thoughts_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thoughts_delete')), array (  '_controller' => 'AppBundle\\Controller\\back\\ThoughtsController::deleteAction',));
            }
            not_thoughts_delete:

        }

        // homepage
        if ('/homepage' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\back\\HomepageController::indexLastAddedAction',  'currentPage' => 1,  '_route' => 'homepage',);
        }

        // list_posts_by_categories_back
        if (0 === strpos($pathinfo, '/back') && preg_match('#^/back/(?P<title>[^/]++)/(?P<id>[^/]++)(?:/(?P<currentPage>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_posts_by_categories_back')), array (  '_controller' => 'AppBundle\\Controller\\back\\ListByCategoriesBackController::listByCategoriesAction',  'currentPage' => 1,));
        }

        // search_back
        if ('/search-back' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\back\\SearchBackController::siteBackAction',  'currentPage' => 1,  '_route' => 'search_back',);
        }

        // quiz
        if (preg_match('#^/(?P<id>[^/]++)/kviz$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_quiz;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz')), array (  '_controller' => 'AppBundle\\Controller\\front\\QuizFirstController::playQuizAction',));
        }
        not_quiz:

        // quiz_list
        if ('/lista-kvizova' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_quiz_list;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\front\\QuizFirstController::quizListAction',  '_route' => 'quiz_list',);
        }
        not_quiz_list:

        // forbid_ip
        if ('/forbid' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_forbid_ip;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\back\\SecurityController::forbidAction',  '_route' => 'forbid_ip',);
        }
        not_forbid_ip:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
