<?php
namespace AppBundle\Controller\back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListCategoriesBackController extends Controller
{
    public function listCategoriesAction()
    {
        $categories = $this->getDoctrine()
                ->getRepository('AppBundle:Category')->getCategoriesBack();
        return $this->render('back/nav-back.html.twig', array(
                'categories'=> $categories
        ));
    }
}
