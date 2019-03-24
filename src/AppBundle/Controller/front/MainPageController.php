<?php

namespace AppBundle\Controller\front;

use AppBundle\Entity\Comment;
use AppBundle\Services\SecurityService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainPageController extends Controller {

    public function listLastAddedAction($currentPage = 1, Request $request, SecurityService $securityService) {
        if (isset($_GET['currentPage'])) {
            $currentPage = htmlspecialchars($_GET['currentPage']);
        }
        $limit = 10;
        $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->getLastAdded();
        $comments = $this->getDoctrine()->getRepository('AppBundle:Comment')->getComments($currentPage, $limit);

        $maxPages = ceil($comments->count() / $limit);
        $thisPage = $currentPage;

        /* Get random thought each day for all day! */
        $date = date('Y-m-d');
        $old_date = $this->getDoctrine()->getRepository('AppBundle:Thoughts')->getOldThoughtDate();

        if(!empty($old_date)) {
            $old_date = $old_date[0]['test_date'];

            if ($old_date instanceof \DateTime) {
                $old_date->format('Y-m-d');
            }

            if ($date == $old_date->format('Y-m-d')) {
                /* If thought is not changed (if it is still same date) just get tought and show it */
                $thought_day = $this->getDoctrine()->getRepository('AppBundle:Thoughts')->getThought();
            } else {
                $this->getDoctrine()->getRepository('AppBundle:Thoughts')->writeNewDate($date);
                $thought_day = $this->getDoctrine()->getRepository('AppBundle:Thoughts')->getThought();
            }
        }

        if(empty($thought_day)){
            $thought_day = '';
        }

        $comment = new Comment();

        $form = $this->createForm('AppBundle\Form\CommentType', $comment);
        $comment->setAuthor('');
        $comment->setBody('');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /* Get ip  */
            if (isset($_SERVER['REMOTE_ADDR'])) {
                $ip = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP);
            } else {
                $ip = 'none';
            }
            if (isset($_SERVER['HTTP_CLIENT_IP'])) {
                $client_ip = filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP);
            } else {
                $client_ip = 'none';
            }
            if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $proxy = filter_var($_SERVER['HTTP_X_FORWARDED_FOR']);
            } else {
                $proxy = 'none';
            }

            /* Check for banned */
            $checked = $this->getDoctrine()->getRepository('AppBundle:Contact')->checkIp($ip);
            if ($checked === 'Empty' || $checked === array() || $checked === false) {
                $bool = $securityService->commentCheck($comment);

                if($bool) {
                    $comment->setCreated(new \DateTime('now'));
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($comment);
                    $em->flush();
                }

                $id = $comment->getId();
                //var_dump($id, $ip);exit;
                $this->getDoctrine()->getRepository('AppBundle:Contact')->writeIps($ip, $client_ip, $proxy, $id, $origin = 'comment');
                unset($comment);
                unset($form);

                $comment = new Comment();
                $form = $this->createForm('AppBundle\Form\CommentType', $comment);
                return $this->render('front/front-main.html.twig', array(
                            'thought' => $thought_day,
                            'posts' => $posts,
                            'comments' => $comments,
                            'maxPages' => $maxPages,
                            'thisPage' => $thisPage,
                            'form_comment' => $form->createView()
                ));
                
            } else {
                
                $message = 'Because of yours previous posts, comments and others, it is forbiden to you to post anything on this site!';
                
                $id = $comment->getId();
                unset($comment);
                unset($form);
                
                $comment = new Comment();
                $form = $this->createForm('AppBundle\Form\CommentType', $comment);
                return $this->render('front/front-main.html.twig', array(
                            'thought' => $thought_day,
                            'posts' => $posts,
                            'comments' => $comments,
                            'maxPages' => $maxPages,
                            'thisPage' => $thisPage,
                            'form_comment' => $form->createView(),
                            'message' => $message,
                ));
            }
        }
        //dump($request->request->all()); exit;
        return $this->render('front/front-main.html.twig', array(
                    'thought' => $thought_day,
                    'posts' => $posts,
                    'comments' => $comments,
                    'maxPages' => $maxPages,
                    'thisPage' => $thisPage,
                    'form_comment' => $form->createView()
        ));
    }

    public function listLastPowPPAction() {

        $posts = $this->getDoctrine()
                        ->getRepository('AppBundle:Post')->getLastPpp();

        return $this->render('front/main/showPPP.html.twig', array(
                    'posts' => $posts
        ));
    }

}
