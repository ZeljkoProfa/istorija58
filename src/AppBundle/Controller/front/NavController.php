<?php

namespace AppBundle\Controller\front;

use AppBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

Class NavController extends Controller
{
    public function listCategoryAction()
{
    $studsCats = $this->getDoctrine()
        ->getRepository('AppBundle:Category')->getStudsCategories();
    
    $teachersCats = $this->getDoctrine()
        ->getRepository('AppBundle:Category')->getTeachersCategories();
        
        return $this->render('front/nav.html.twig', array(
            'studsCats' => $studsCats,
            'teachersCats' => $teachersCats
        ));
}
}