<?php

namespace AppBundle\Controller\back;

use AppBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Form\PostType;
use AppBundle\Form\PostEditType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Post controller.
 *
 */
class PostController extends Controller {

    /**
     * Lists all post entities.
     *
     */
    public function indexAction($currentPage = 1) {
        $limit = 10;

        if (isset($_GET['currentPage'])) {
            $currentPage = htmlspecialchars($_GET['currentPage']);
        }

        $posts = $this->getDoctrine()
                ->getRepository('AppBundle:Post')
                ->getLastAddedBack($currentPage, $limit);

        $maxPages = ceil($posts->count() / $limit);
        $thisPage = $currentPage;

        return $this->render('back/post/index.html.twig', array(
                    'posts' => $posts,
                    'maxPages' => $maxPages,
                    'thisPage' => $thisPage
        ));
    }

    /**
     * Creates a new post entity.
     *
     */
    public function newAction(Request $request) {
        $post = new Post();
        $form = $this->createForm('AppBundle\Form\PostType', $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Setting time created.
            $post->setCreated(new \DateTime('now'));
            // Setting creator's id.
            $post->setAdminId($this->getUser());
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $post->getBody();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                    $this->getParameter('post_directory'), $fileName
            );
            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $post->setBody($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('post_show', array('id' => $post->getId()));
        }

        return $this->render('back/post/new.html.twig', array(
                    'post' => $post,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a post entity.
     *
     */
    public function showAction(Post $post) {
        
        $id = $post->getId();
        $user_ip = $this->getDoctrine()->getRepository('AppBundle:Contact')->takeIp($id, $origin = 'post');
        
        $deleteForm = $this->createDeleteForm($post);

        return $this->render('back/post/show.html.twig', array(
                    'user_ip' => $user_ip,
                    'post' => $post,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing post entity.
     *
     */
    public function editAction(Request $request, Post $post) {
        
        $id = $post->getId();
        $user_ip = $this->getDoctrine()->getRepository('AppBundle:Contact')->takeIp($id, $origin = 'post');
        
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

            return $this->redirectToRoute('post_index', array('id' => $post->getId()));
        }

        return $this->render('back/post/edit.html.twig', array(
                    'user_ip' => $user_ip,
                    'post' => $post,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a post entity.
     *
     */
    public function deleteAction(Request $request, Post $post) {
        $form = $this->createDeleteForm($post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Remove file from web/uploads/posts folder.
            /* $filename = $post->getTitle();
              $filesystem = new Filesystem();
              $filesystem->remove(array('../../../../web/uploads/posts/' , $filename)); */
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
                        ->setAction($this->generateUrl('post_delete', array('id' => $post->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
