<?php
namespace AppBundle\Controller\back;

use AppBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Tools\Pagination\Paginator;

Class ListByCategoriesBackController extends Controller {

    /**
     * Controller contentPages action
     * LIST POSTS BY CATEGORIES FROM DROPDOWN MENU IN ADMIN MODUL
     * @param integer $page The current page passed via URL
     */
    public function listByCategoriesAction($id, $title, $currentPage) {

        $limit = 10;
        $posts = $this->getDoctrine()
                        ->getRepository('AppBundle:Post')->getPostsByCategoryBack($id, $currentPage, $limit);
        
        
        $maxPages = ceil($posts->count() / $limit);
        $thisPage = $currentPage;
        // Pass through the 3 above variables to calculate pages in twig

        return $this->render('back/pages-back/content-pages-back.html.twig', array(
                    'id' => $id,
                    'posts' => $posts,
                    'title' => $title,
                    'maxPages'=> $maxPages,
                    'thisPage'=> $thisPage
        ));
    }

}
