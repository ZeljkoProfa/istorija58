<?php

namespace AppBundle\Controller\front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

Class PersonalController extends Controller
{
    public function thingsAction()
    {
        return $this->render('front/pages/personal-things.html.twig');
    }
}