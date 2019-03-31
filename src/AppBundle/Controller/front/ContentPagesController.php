<?php

namespace AppBundle\Controller\front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

Class ContentPagesController extends Controller
{
    /**
     * Controller contentPages action
     *
     * @param $id
     * @param $title
     * @param $currentPage
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contentPagesAction($id, $title, $currentPage)
    {
        $limit = 10;
        $posts = $this->getDoctrine()
                        ->getRepository('AppBundle:Post')->getForPagesByCategory($id, $currentPage, $limit);

        $maxPages = ceil($posts->count() / $limit);
        $thisPage = $currentPage;

        return $this->render('front/pages/content_pages.html.twig', [
                    'id' => $id,
                    'posts' => $posts,
                    'title' => $title,
                    'maxPages'=> $maxPages,
                    'thisPage'=> $thisPage
        ]);
    }
}
