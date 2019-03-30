<?php

namespace AppBundle\Controller\front;

use AppBundle\Entity\Comment;
use AppBundle\Services\SecurityService;
use AppBundle\Services\ThoughtService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainPageController extends Controller {

    public function indexAction(
        Request $request,
        SecurityService $securityService,
        ThoughtService $thoughtService,
        LoggerInterface $logger
    ){
        $currentPage = $request->get('currentPage');
        $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->getLastAdded();
        $comments = $this->getDoctrine()->getRepository('AppBundle:Comment')->getComments($currentPage);

        $maxPages = ceil($comments->count() / 10);
        $thisPage = $currentPage;

        $thoughtOfTheDay = $thoughtService->getThought();
        $comment = new Comment();

        $form = $this->createForm('AppBundle\Form\CommentType', $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                if(
                    $securityService->commentCheck($comment) &&
                    $securityService->checkIp($request)
                ) {
                    try {
                        $comment->setCreated(new \DateTime('now'));
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($comment);
                        $em->flush();
                        $securityService->writeIps($comment->getId(), 'comment');
                    }catch (\Exception $e){
                        $logger->error('Error while writing comment to database. Error '.$e->getMessage());
                    }
                }

                unset($form);
                unset($comment);

                $comment = new Comment();
                $form = $this->createForm('AppBundle\Form\CommentType', $comment);
                return $this->render('front/front-main.html.twig', [
                            'thought' => $thoughtOfTheDay,
                            'posts' => $posts,
                            'comments' => $comments,
                            'maxPages' => $maxPages,
                            'thisPage' => $thisPage,
                            'form_comment' => $form->createView()
                ]);
        }
        return $this->render('front/front-main.html.twig', [
                    'thought' => $thoughtOfTheDay,
                    'posts' => $posts,
                    'comments' => $comments,
                    'maxPages' => $maxPages,
                    'thisPage' => $thisPage,
                    'form_comment' => $form->createView()
        ]);
    }

    public function listLastPowPPAction()
    {
        $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->getLastPpp();

        return $this->render('front/main/showPPP.html.twig', [
                    'posts' => $posts
        ]);
    }
}
