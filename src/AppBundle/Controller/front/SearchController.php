<?php

namespace AppBundle\Controller\front;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

Class SearchController extends Controller
{
    /**
     * Controller site action
     *
     * @param integer $page The current page passed via URL
     */
    public function siteAction(Request $request, $currentPage = 1)
    {
        $limit = 10;
        
        if (isset($_GET['currentPage'])) {
            $currentPage = htmlspecialchars($_GET['currentPage']);
        }
        
        //$requestString = $request->request->get('searchedFor');
        $requestString = htmlspecialchars($request->query->get('q'));
        //dump($requestString);exit;
        $search = $this->getDoctrine()->getRepository('AppBundle:Post')->searchSite($requestString, $currentPage, $limit);
        //dump($search);exit;
        //$searched = new JsonResponse(json_encode($search));
        
        $maxPages = ceil($search->count() / $limit);
        $thisPage = $currentPage;
        
        unset($requestString);
        return $this->render('front/pages/search.html.twig', array(
            'posts' => $search,
            'maxPages'=> $maxPages,
            'thisPage'=> $thisPage
        ));
        
    }
}