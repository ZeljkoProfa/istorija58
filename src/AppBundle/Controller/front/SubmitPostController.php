<?php

namespace AppBundle\Controller\front;

use AppBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Form\PostType;
use AppBundle\Form\PostEditType;
use Symfony\Component\HttpFoundation\File\File;

/**
 * SubmitPost controller.
 *
 */
class SubmitPostController extends Controller {
    /**
     * Creates a new post entity.
     *
     */
    public function newAction(Request $request) {
        
        $post = new Post();
        $form = $this->createForm('AppBundle\Form\FrontPostType', $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            /* Getting ip */
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
            
            $id = $post->getId();
            $this->getDoctrine()->getRepository('AppBundle:Contact')->writeIps($ip, $client_ip, $proxy, $id, $origin = 'post');
            
            // Clear form.
            unset($post);
            unset($form);

            return $this->redirectToRoute('front_submit_post', array(
                'submit_message' => 'Uspesno ste dodali članak. Biće vidljiv na sajtu kada ga administrator odobri.'
            ));
            
            } else {
                $message = 'Because of yours previous posts, comments and others, it is forbiden to you to post anything on this site!';

                return $this->redirectToRoute('main_front_page', array(
                            'checked' => $message
            ));
            }
        }

        return $this->render('front/pages/new.html.twig', array(
                    'post' => $post,
                    'form' => $form->createView(),
        ));
    }

}
