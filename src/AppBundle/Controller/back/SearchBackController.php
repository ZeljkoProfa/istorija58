<?php

namespace AppBundle\Controller\back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchBackController extends Controller
{
    public function siteBackAction(Request $request, $currentPage = 1)
    {
        $limit = 10;
        
        if (!empty($request->query->get('currentPage'))) {
            $currentPage = $request->query->get('currentPage');
        }

        $requestString = $request->query->get('q');
        $search = $this->getDoctrine()->getRepository('AppBundle:Post')
            ->searchSiteBack($requestString, $currentPage);
        
        $maxPages = ceil($search->count() / $limit);
        $thisPage = $currentPage;
        
        unset($requestString);

        return $this->render('back/default/search.html.twig', array(
            'posts' => $search,
            'maxPages'=> $maxPages,
            'thisPage'=> $thisPage
        ));
    }
}
