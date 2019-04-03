<?php

namespace AppBundle\Controller\front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Quiz;
use Symfony\Component\HttpFoundation\Request;

class QuizFirstController extends Controller
{
    public function playQuizAction(Request $request, $id)
    {
        if(!empty($request->query->get('id'))){
            $id = $request->query->get('id');
        }

        $quizzesRepo = $this->getDoctrine()->getRepository('AppBundle:Quiz');
        $quiz = $quizzesRepo->findOneBy(['id' => $id]);
        
        $questionsRepo = $this->getDoctrine()->getRepository('AppBundle:QuizQuestions');
        $questions = $questionsRepo->findBy(['quizId' => $quiz->getId()]);

        return $this->render('front/pages/quiz_first.html.twig', [
            'title' => 'Kviz',
            'quiz'  => $quiz,
            'questions'  =>$questions
        ]);
    }
    
    public function quizListAction()
    {
        $quizzes = $this->getDoctrine()->getRepository('AppBundle:Quiz');
        $quizzes = $quizzes->getByStatusQuizId();

        return $this->render('front/pages/quiz_list.html.twig', array(
            'title' => 'Izaberi kviz',
            'quizzes' => $quizzes
        ));
    }
}
