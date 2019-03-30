<?php

namespace AppBundle\Controller\back;

use AppBundle\Entity\Post;
use AppBundle\Services\SecurityService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Post controller.
 *
 * Class PostController
 * @package AppBundle\Controller\back
 */
class PostController extends Controller {

    /**
     * Lists all post entities.
     *
     * @param Request $request
     * @param int $currentPage
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $currentPage = 1) {
        $limit = 10;

        if (empty($request->request->get('currentPage'))) {
            $currentPage = $request->request->get('currentPage');
        }

        $posts = $this->getDoctrine()
                ->getRepository('AppBundle:Post')
                ->getLastAddedBack($currentPage, $limit);

        $maxPages = ceil($posts->count() / $limit);
        $thisPage = $currentPage;

        return $this->render('back/post/index.html.twig', [
                    'posts' => $posts,
                    'maxPages' => $maxPages,
                    'thisPage' => $thisPage
        ]);
    }

    /**
     * Creates a new post entity.
     *
     * @param Request $request
     * @param LoggerInterface $logger
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request, LoggerInterface $logger) {
        $post = new Post();
        $form = $this->createForm('AppBundle\Form\PostType', $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $file */
            $file = $post->getBody();
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();

            $file->move(
                    $this->getParameter('post_directory'), $fileName
            );

            $post->setBody($fileName);

            try {
                $post->setCreated(new \DateTime('now'));
                $post->setAdminId($this->getUser());
                $em = $this->getDoctrine()->getManager();
                $em->persist($post);
                $em->flush();
            }catch (\Exception $e){
                $logger->error('Error while creating post. Error '.$e->getMessage());
            }

            return $this->redirectToRoute('post_show', ['id' => $post->getId()]);
        }

        return $this->render('back/post/new.html.twig', [
                    'post' => $post,
                    'form' => $form->createView(),
        ]);
    }

    /**
     * Finds and displays a post entity.
     *
     * @param Post $post
     * @param SecurityService $securityService
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Post $post, SecurityService $securityService) {
        
        $id = $post->getId();
        $user_ip = $securityService->takeIp($id, $origin = 'post');
        
        $deleteForm = $this->createDeleteForm($post);

        return $this->render('back/post/show.html.twig', [
                    'user_ip' => $user_ip,
                    'post' => $post,
                    'delete_form' => $deleteForm->createView(),
        ]);
    }

    /**
     * Displays a form to edit an existing post entity.
     *
     * @param Request $request
     * @param Post $post
     * @param SecurityService $securityService
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, Post $post, SecurityService $securityService) {
        
        $id = $post->getId();
        $user_ip = $securityService->takeIp($id, $origin = 'post');
        
        // Set value of $post->getBody to be a instance of Symfony\Component\HttpFoundation\File\File
        $fileName = $post->getBody();
        $file = new File($this->getParameter('post_directory') . '/' . $post->getBody());
        $post->setBody($file);

        $deleteForm = $this->createDeleteForm($post);
        $editForm = $this->createForm('AppBundle\Form\PostEditType', $post);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $post->setBody($fileName);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('post_index', ['id' => $post->getId()]);
        }

        return $this->render('back/post/edit.html.twig', [
                    'user_ip' => $user_ip,
                    'post' => $post,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ]);
    }

    /**
     * Deletes a post entity.
     *
     * @param Request $request
     * @param Post $post
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, Post $post) {
        $form = $this->createDeleteForm($post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (isset($post)) {
                unlink('../public_html/uploads/posts/' . $post->getBody());
            }
            $em = $this->getDoctrine()->getManager();
            $em->remove($post);
            $em->flush();
        }

        return $this->redirectToRoute('post_index');
    }

    /**
     * Creates a form to delete a post entity.
     *
     * @param Post $post The post entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Post $post) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('post_delete', ['id' => $post->getId()]))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
