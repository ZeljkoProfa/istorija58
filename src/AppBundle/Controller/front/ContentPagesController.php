<?php

namespace AppBundle\Controller\front;

use AppBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Tools\Pagination\Paginator;

Class ContentPagesController extends Controller {

    /**
     * Controller contentPages action
     *
     * @param integer $page The current page passed via URL
     */
    public function contentPagesAction($id, $title, $currentPage) {

        $limit = 10;
        $posts = $this->getDoctrine()
                        ->getRepository('AppBundle:Post')->getForPagesByCategory($id, $currentPage, $limit);
        
        
        $maxPages = ceil($posts->count() / $limit);
        $thisPage = $currentPage;
        // Pass through the 3 above variables to calculate pages in twig

        return $this->render('front/pages/content-pages.html.twig', array(
                    'id' => $id,
                    'posts' => $posts,
                    'title' => $title,
                    'maxPages'=> $maxPages,
                    'thisPage'=> $thisPage
        ));
    }

}
