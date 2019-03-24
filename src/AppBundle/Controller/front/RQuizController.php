<?php

namespace AppBundle\Controller\front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Quiz;

/**
 * RQuiz controller.
 *
 */
class RQuizController extends Controller
{
    public function listQuizzesAction()
    {
        // Add Quizzes
        //$quizzes_REP = $this->getDoctrine()->getRepository('AppBundle:Quiz');
        //$quizzes = $quizzes_REP->findAll();
        $quizzess = $this->getDoctrine()->getRepository('AppBundle:Quiz');
        $quizs = $quizzess->getByStatusQuizId();
        //var_dump($quizzes);exit;
        return $this->render('front/main/quizzes.html.twig', array(
            'quizzes'  => $quizs
        ));
    }
}