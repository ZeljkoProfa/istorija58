<?php

namespace AppBundle\Controller\front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Quiz;
use Symfony\Component\HttpFoundation\Request;

class QuizFirstController extends Controller
{
    
    public function playQuizAction(Request $request, $id){
        if(isset($_GET['id'])){
            //var_dump($_GET['id']);exit;
            $id = $_GET['id'];
        }
        $quizzes_REPO = $this->getDoctrine()->getRepository('AppBundle:Quiz');
        $quiz = $quizzes_REPO->findOneById($id);
        
        $questions_REP = $this->getDoctrine()->getRepository('AppBundle:QuizQuestions');
        $questions = $questions_REP->findByQuizId($id);
        //var_dump($questions);exit;
        return $this->render('front/pages/quiz-first.html.twig', array(
            'title' => 'Kviz',
            'quiz'  => $quiz,
            'questions'  =>$questions
                
        ));
    }
    
    public function quizListAction(){
        $quizzess = $this->getDoctrine()->getRepository('AppBundle:Quiz');
        $quizs = $quizzess->getByStatusQuizId();
        
        //var_dump($questions);exit;
        return $this->render('front/pages/quiz_list.html.twig', array(
            'title' => 'Izaberi kviz',
            'quizzes' => $quizs
        ));
    }
}