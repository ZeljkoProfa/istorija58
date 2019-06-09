<?php

namespace AppBundle\Controller\back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomepageController extends Controller
{
    public function indexLastAddedAction(Request $request, $currentPage = 1)
    {
        $limit = 10;
        if (!empty($request->query->get('currentPage'))) {
            $currentPage = $request->query->get('currentPage');
        }
        
        $posts = $this->getDoctrine()
                ->getRepository('AppBundle:Post')
                ->getLastAddedBack($limit, $currentPage);
        
        $maxPages = ceil($posts->count() / $limit);
        $thisPage = $currentPage;
        
        $comments = $this->getDoctrine()
                ->getRepository('AppBundle:Comment')
                ->getCommentsLastTen();

        $contacts = $this->getDoctrine()
                ->getRepository('AppBundle:Contact')
                ->getContactsLastTen();

        $response = $this->render('back/default/admin_homepage.html.twig', array(
                'posts' => $posts,
                'maxPages' => $maxPages,
                'thisPage' => $thisPage,
                'comments' => $comments,
                'contacts' => $contacts
        ));

		$response->setSharedMaxAge(3600);
		$response->headers->addCacheControlDirective('must-revalidate', true);

		return $response;
    }

}
