<?php

namespace AppBundle\Controller\front;

use AppBundle\Entity\Video;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Tools\Pagination\Paginator;

Class VideoFrontController extends Controller {

    // List videos on front.
    public function listVideosAction($currentPage = 1) {

        if(isset($_POST['currentPage'])){
            $currentPage = htmlspecialchars($_POST['currentPage']);
        }
        
        $limit = 10;
        $videos = $this->getDoctrine()
                        ->getRepository('AppBundle:Video')->getVideos($currentPage, $limit);
        
        
        $maxPages = ceil($videos->count() / $limit);
        $thisPage = $currentPage;
        
        // Pass through the 3 above variables to calculate pages in twig
        return $this->render('front/pages/video.html.twig', array(
                    'videos' => $videos,
                    'maxPages'=> $maxPages,
                    'thisPage'=> $thisPage
        ));
    }
    
    public function watchVideosAction() {
        if(isset($_GET['id'])){
            $id = htmlspecialchars($_GET['id']);
        }
        
        $repository = $this->getDoctrine()->getRepository(Video::class);
        $video = $repository->findOneById($id);
        return $this->render('front/pages/video-play.html.twig', array(
            'video' => $video
        ));
    }
    
    public function searchVideoAction(Request $request, $currentPage = 1){
        
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
        return $this->render('front/pages/video.html.twig', array(
            'videos' => $search,
            'maxPages'=> $maxPages,
            'thisPage'=> $thisPage
        ));
    }

}