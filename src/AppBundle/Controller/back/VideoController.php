<?php

namespace AppBundle\Controller\back;

use AppBundle\Entity\Video;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Video controller.
 *
 */
class VideoController extends Controller
{
    /**
     * Lists all video entities.
     *
     */
    public function indexAction($currentPage)
    {
        if(isset($_POST['currentPage'])){
            $currentPage = htmlspecialchars($_POST['currentPage']);
        }
        $limit = 10;
        $videos = $this->getDoctrine()
                        ->getRepository('AppBundle:Video')->getVideos($currentPage, $limit);
        
        $maxPages = ceil($videos->count() / $limit);
        $thisPage = $currentPage;
        
        return $this->render('back/video/index.html.twig', array(
            'videos' => $videos,
            'maxPages'=> $maxPages,
            'thisPage'=> $thisPage
        ));
    }

    /**
     * Creates a new video entity.
     *
     */
    public function newAction(Request $request)
    {
        $video = new Video();
        $form = $this->createForm('AppBundle\Form\VideoType', $video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Setting time created.
            $video->setCreated(new \DateTime('now'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($video);
            $em->flush();

            return $this->redirectToRoute('video_show', array('id' => $video->getId()));
        }

        return $this->render('back/video/new.html.twig', array(
            'video' => $video,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a video entity.
     *
     */
    public function showAction(Video $video)
    {
        $deleteForm = $this->createDeleteForm($video);

        return $this->render('back/video/show.html.twig', array(
            'video' => $video,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing video entity.
     *
     */
    public function editAction(Request $request, Video $video)
    {
        $deleteForm = $this->createDeleteForm($video);
        $editForm = $this->createForm('AppBundle\Form\VideoType', $video);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('video_show', array('id' => $video->getId()));
        }

        return $this->render('back/video/edit.html.twig', array(
            'video' => $video,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a video entity.
     *
     */
    public function deleteAction(Request $request, Video $video)
    {
        $form = $this->createDeleteForm($video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($video);
            $em->flush();
        }

        return $this->redirectToRoute('video_index');
    }

    /**
     * Creates a form to delete a video entity.
     *
     * @param Video $video The video entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Video $video)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('video_delete', array('id' => $video->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    public function findVideosAction(Request $request, $currentPage = 1){
        
        $limit = 10;
        
        if (isset($_GET['currentPage'])) {
            $currentPage = htmlspecialchars($_GET['currentPage']);
        }
        
        //$requestString = $request->request->get('searchedFor');
        $string = htmlspecialchars($request->query->get('q'));
        //dump($requestString);exit;
        $search = $this->getDoctrine()->getRepository('AppBundle:Video')->searchVids($string, $currentPage, $limit);
        //dump($search);exit;
        //$searched = new JsonResponse(json_encode($search));
        
        $maxPages = ceil($search->count() / $limit);
        $thisPage = $currentPage;
        //dump($search);exit;
        unset($requestString);
        return $this->render('back/video/index.html.twig', array(
            'videos' => $search,
            'maxPages'=> $maxPages,
            'thisPage'=> $thisPage
        ));
    }
}
