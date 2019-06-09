<?php

namespace AppBundle\Controller\back;

use AppBundle\Entity\Comment;
use AppBundle\Services\SecurityService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommentController extends Controller
{
    public function indexAction(Request $request, $currentPage = 1)
    {
        $limit = 10;

        if (!empty($request->request->get('currentPage'))){
            $currentPage = $request->request->get('currentPage');
        }
        
        $comments = $this->getDoctrine()
                        ->getRepository('AppBundle:Comment')
                        ->getLastCommentAddedBack($limit, $currentPage);
        
        $maxPages = ceil($comments->count() / $limit);
        $thisPage = $currentPage;

        return $this->render('back/comment/index.html.twig', array(
                'comments' => $comments,
                'maxPages' => $maxPages,
                'thisPage' => $thisPage
        ));
    }

    public function newAction(Request $request, LoggerInterface $logger)
    {
        $comment = new Comment();
        $form = $this->createForm('AppBundle\Form\CommentType', $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $comment->setCreated(new \DateTime('now'));
                $em = $this->getDoctrine()->getManager();
                $em->persist($comment);
                $em->flush();
            }catch (\Exception $e){
                $logger->error('Error while creating comment. Error '.$e->getMessage());
            }

            return $this->redirectToRoute('comment_show', array('id' => $comment->getId()));
        }

        return $this->render('back/comment/new.html.twig', array(
            'comment' => $comment,
            'form_comment' => $form->createView(),
        ));
    }

    public function showAction(Comment $comment, SecurityService $securityService)
    {
        $id = $comment->getId();
        $user_ip = $securityService->takeIp($id, $origin = 'comment');
        
        $deleteForm = $this->createDeleteForm($comment);

        return $this->render('back/comment/show.html.twig', array(
            'user_ip' => $user_ip,
            'comment' => $comment,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function editAction(Request $request, Comment $comment, SecurityService $securityService)
    {
        $id = $comment->getId();
        $user_ip = $securityService->takeIp($id, $origin = 'comment');
        
        $deleteForm = $this->createDeleteForm($comment);
        $editForm = $this->createForm('AppBundle\Form\CommentType', $comment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
            $comment->setStatus('0');
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('comment_index', array('id' => $comment->getId()));
        }

        return $this->render('back/comment/edit.html.twig', array(
            'user_ip' => $user_ip,
            'comment' => $comment,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Comment $comment)
    {
        $form = $this->createDeleteForm($comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($comment);
            $em->flush();
        }

        return $this->redirectToRoute('comment_index');
    }

    private function createDeleteForm(Comment $comment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comment_delete', array('id' => $comment->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
