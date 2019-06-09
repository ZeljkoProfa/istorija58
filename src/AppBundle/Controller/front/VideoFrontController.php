<?php

namespace AppBundle\Controller\front;

use AppBundle\Entity\Video;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VideoFrontController extends Controller
{
    public function listVideosAction(Request $request, $currentPage = 1)
    {
        if(!empty($request->query->get('currentPage'))){
            $currentPage = $request->query->get('currentPage');
        }
        
        $limit = 10;
        $videos = $this->getDoctrine()
                        ->getRepository('AppBundle:Video')->getVideos($limit, $currentPage);

        $maxPages = ceil($videos->count() / $limit);
        $thisPage = $currentPage;

        return $this->render('front/pages/video.html.twig', [
                    'videos' => $videos,
                    'maxPages' => $maxPages,
                    'thisPage' => $thisPage
        ]);
    }
    
    public function watchVideosAction(Video $video)
    {
        return $this->render('front/pages/video_play.html.twig', [
            'video' => $video
        ]);
    }
    
    public function searchVideoAction(Request $request, $currentPage = 1)
    {
        if (!empty($request->query->get('currentPate'))) {
            $currentPage = $request->query->get('currentPate');
        }

        $string = $request->query->get('q');
        $search = $this->getDoctrine()->getRepository('AppBundle:Video')->searchVids($string, $currentPage);
        
        $maxPages = ceil($search->count() / 10);
        $thisPage = $currentPage;

        unset($requestString);

        return $this->render('front/pages/video.html.twig', [
            'videos' => $search,
            'maxPages' => $maxPages,
            'thisPage' => $thisPage
        ]);
    }
}
