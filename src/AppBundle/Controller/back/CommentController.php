<?php

namespace AppBundle\Controller\back;

use AppBundle\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Comp;
use Doctrine\Common\Util\Debug;

/**
 * Comment controller.
 *
 */
class CommentController extends Controller
{
    /**
     * Lists all comment entities.
     *
     */
    public function indexAction($currentPage = 1)
    {
        $limit = 10;

        if (isset($_GET['currentPage'])) {
            $currentPage = htmlspecialchars($_GET['currentPage']);
        }
        
        $comments = $this->getDoctrine()
                        ->getRepository('AppBundle:Comment')
                        ->getLastCommentAddedBack($currentPage, $limit);
        
        $maxPages = ceil($comments->count() / $limit);
        $thisPage = $currentPage;

        return $this->render('back/comment/index.html.twig', array(
                    'comments' => $comments,
                    'maxPages' => $maxPages,
                    'thisPage' => $thisPage
        ));
    }

    /**
     * Creates a new comment entity.
     *
     */
    public function newAction(Request $request)
    {
        $comment = new Comment();
        $form = $this->createForm('AppBundle\Form\CommentType', $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Setting time created.
            $comment->setCreated(new \DateTime('now'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirectToRoute('comment_show', array('id' => $comment->getId()));
        }

        return $this->render('back/comment/new.html.twig', array(
            'comment' => $comment,
            'form_comment' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a comment entity.
     *
     */
    public function showAction(Comment $comment)
    {
        $id = $comment->getId();
        $user_ip = $this->getDoctrine()->getRepository('AppBundle:Contact')->takeIp($id, $origin = 'comment');
        
        $deleteForm = $this->createDeleteForm($comment);

        return $this->render('back/comment/show.html.twig', array(
            'user_ip' => $user_ip,
            'comment' => $comment,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing comment entity.
     *
     */
    public function editAction(Request $request, Comment $comment)
    {
        $id = $comment->getId();
        $user_ip = $this->getDoctrine()->getRepository('AppBundle:Contact')->takeIp($id, $origin = 'comment');
        
        $deleteForm = $this->createDeleteForm($comment);
        $editForm = $this->createForm('AppBundle\Form\CommentType', $comment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
            $comment->setStatus('0');
            //Debug::dump($editForm->getData());exit;
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

    /**
     * Deletes a comment entity.
     *
     */
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

    /**
     * Creates a form to delete a comment entity.
     *
     * @param Comment $comment The comment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Comment $comment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comment_delete', array('id' => $comment->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
