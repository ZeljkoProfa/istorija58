<?php

namespace AppBundle\Controller\front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

Class NavController extends Controller
{
    public function listCategoryAction()
    {
        $studsCats = $this->getDoctrine()->getRepository('AppBundle:Category')->getStudsCategories();

        $teachersCats = $this->getDoctrine()->getRepository('AppBundle:Category')->getTeachersCategories();

        return $this->render('front/nav.html.twig', [
            'studsCats' => $studsCats,
            'teachersCats' => $teachersCats
        ]);
    }
}
