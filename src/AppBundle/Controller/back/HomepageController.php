<?php

namespace AppBundle\Controller\back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Homepage controller.
 *
 *
 */
class HomepageController extends Controller {

    /**
     * Homepage controller.
     *
     * Controller contentPages action
     *
     * @param integer $currentPage The current page passed via URL
     */
    public function indexLastAddedAction($currentPage = 1) {
        $limit = 10;
        if (isset($_GET['currentPage'])) {
            $currentPage = htmlspecialchars($_GET['currentPage']);
            $currentPage = trim($_GET['currentPage']);
        }
        
        $posts = $this->getDoctrine()
                        ->getRepository('AppBundle:Post')
                        ->getLastAddedBack($currentPage, $limit);
        
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
		
		// cache for 3600 seconds
		$response->setSharedMaxAge(3600);

		// (optional) set a custom Cache-Control directive
		$response->headers->addCacheControlDirective('must-revalidate', true);

		return $response;
    }

}
