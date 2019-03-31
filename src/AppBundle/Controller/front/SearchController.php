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
     * @param Request $request
     * @param int $currentPage
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function siteAction(Request $request, $currentPage = 1)
    {
        $limit = 10;
        
        if (!empty($request->query->get('currentPage'))) {
            $currentPage = $request->query->get('currentPage');
        }

        $requestString = $request->query->get('q');
        $search = $this->getDoctrine()->getRepository('AppBundle:Post')->searchSite($requestString, $currentPage, $limit);
        
        $maxPages = ceil($search->count() / $limit);
        $thisPage = $currentPage;
        
        unset($requestString);

        return $this->render('front/pages/search.html.twig', [
            'posts' => $search,
            'maxPages'=> $maxPages,
            'thisPage'=> $thisPage
        ]);
    }
}
