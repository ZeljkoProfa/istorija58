<?php
namespace AppBundle\Controller\back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListByCategoriesBackController extends Controller
{
    public function listByCategoriesAction($id, $title, $currentPage)
    {
        $limit = 10;
        $posts = $this->getDoctrine()
                ->getRepository('AppBundle:Post')->getPostsByCategoryBack($id, $limit, $currentPage);
        
        
        $maxPages = ceil($posts->count() / $limit);
        $thisPage = $currentPage;


        return $this->render('back/pages-back/content-pages-back.html.twig', array(
                'id' => $id,
                'posts' => $posts,
                'title' => $title,
                'maxPages'=> $maxPages,
                'thisPage'=> $thisPage
        ));
    }
}
