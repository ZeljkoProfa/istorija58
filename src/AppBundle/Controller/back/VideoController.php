<?php

namespace AppBundle\Controller\back;

use AppBundle\Entity\Video;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VideoController extends Controller
{
    public function indexAction(Request $request, $currentPage)
    {
        if(!empty($request->request->get('currentPage'))){
            $currentPage = $request->request->get('currentPage');
        }

        $limit = 10;
        $videos = $this->getDoctrine()
                        ->getRepository('AppBundle:Video')->getVideos($limit,$currentPage);
        
        $maxPages = ceil($videos->count() / $limit);
        $thisPage = $currentPage;
        
        return $this->render('back/video/index.html.twig', array(
            'videos' => $videos,
            'maxPages'=> $maxPages,
            'thisPage'=> $thisPage
        ));
    }

    public function newAction(Request $request, LoggerInterface $logger)
    {
        $video = new Video();
        $form = $this->createForm('AppBundle\Form\VideoType', $video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $video->setCreated(new \DateTime('now'));
                $em = $this->getDoctrine()->getManager();
                $em->persist($video);
                $em->flush();
            }catch (\Exception $e){
                $logger->error('Error while creating video. Error: '.$e->getMessage());
            }

            return $this->redirectToRoute('video_show', array('id' => $video->getId()));
        }

        return $this->render('back/video/new.html.twig', array(
            'video' => $video,
            'form' => $form->createView(),
        ));
    }

    public function showAction(Video $video)
    {
        $deleteForm = $this->createDeleteForm($video);

        return $this->render('back/video/show.html.twig', array(
            'video' => $video,
            'delete_form' => $deleteForm->createView(),
        ));
    }

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

    private function createDeleteForm(Video $video)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('video_delete', array('id' => $video->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
    
    public function findVideosAction(Request $request, $currentPage = 1)
    {
        $limit = 10;

        if(!empty($request->request->get('currentPage'))){
            $currentPage = $request->request->get('currentPage');
        }

        $string = htmlspecialchars($request->query->get('q'));
        $search = $this->getDoctrine()->getRepository('AppBundle:Video')->searchVids($string, $currentPage);
        
        $maxPages = ceil($search->count() / $limit);
        $thisPage = $currentPage;
        unset($requestString);

        return $this->render('back/video/index.html.twig', array(
            'videos' => $search,
            'maxPages'=> $maxPages,
            'thisPage'=> $thisPage
        ));
    }
}
