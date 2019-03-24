<?php
namespace AppBundle\Controller\back;

use AppBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Tools\Pagination\Paginator;

Class ListCategoriesBackController extends Controller {

    /**
     * LIST CATEGORIES IN DROPDOWN MENU IN ADMIN NAV.
     */
    public function listCategoriesAction() {

        $categories = $this->getDoctrine()
                        ->getRepository('AppBundle:Category')->getCategoriesBack();
        //dump($categories);exit;
        return $this->render('back/nav-back.html.twig', array(
                    'categories'=> $categories
        ));
    }
}