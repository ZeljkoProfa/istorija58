<?php

namespace AppBundle\Controller\back;

use AppBundle\Entity\Quiz;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\QuizQuestions;

class QuizController extends Controller
{
    public function indexAction(Request $request, $currentPage = 1)
    {
        $limit = 10;

        if (!empty($request->query->get('currentPage'))) {
            $currentPage = $request->query->get('currentPage');
        }

        $quizzes = $this->getDoctrine()
                ->getRepository('AppBundle:Quiz')
                ->getAllQuizzes($limit, $currentPage);

        $maxPages = ceil($quizzes->count() / $limit);
        $thisPage = $currentPage;

        return $this->render('back/quiz/index.html.twig', array(
                'quizzes' => $quizzes,
                'thisPage' => $thisPage,
                'maxPages' => $maxPages,
        ));
    }

    public function newAction(Request $request, LoggerInterface $logger)
    {
        $quiz = new Quiz();
        $form = $this->createForm('AppBundle\Form\QuizType', $quiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $quiz->setCreated(new \DateTime('now'));
                $em = $this->getDoctrine()->getManager();
                $em->persist($quiz);
                $em->flush();
            }catch (\Exception $e){
                $logger->error('Error while creating quiz. Error: '.$e->getMessage());
            }

            return $this->redirectToRoute('quiz_show', array('id' => $quiz->getId()));
        }

        return $this->render('back/quiz/new.html.twig', array(
                    'quiz' => $quiz,
                    'form' => $form->createView(),
        ));
    }

    public function showAction(Quiz $quiz)
    {
        $request = new Request();
        $deleteForm = $this->createDeleteForm($quiz);
        
        $quizQuestions = new QuizQuestions();
        $form = $this->createForm('AppBundle\Form\QuizQuestionsType', $quizQuestions);
        $form->handleRequest($request);
        
        $quiz_questions_REP =  $this->getDoctrine()->getRepository('AppBundle:QuizQuestions');
        $quiz_questions = $quiz_questions_REP->findBy(['quizId' => $quiz->getId()]);
        
        
        return $this->render('back/quiz/show.html.twig', array(
                    'quiz' => $quiz,
                    'delete_form' => $deleteForm->createView(),
                    'form' => $form->createView(),
                    'quizQuestions' => $quiz_questions
        ));
    }

    public function editAction(Request $request, Quiz $quiz)
    {
        $deleteForm = $this->createDeleteForm($quiz);
        $editForm = $this->createForm('AppBundle\Form\QuizType', $quiz);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('quiz_show', array('id' => $quiz->getId()));
        }

        return $this->render('back/quiz/edit.html.twig', array(
                'quiz' => $quiz,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Quiz $quiz)
    {
        $form = $this->createDeleteForm($quiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($quiz);
            $em->flush();
        }

        return $this->redirectToRoute('quiz_index');
    }

    private function createDeleteForm(Quiz $quiz)
    {
        return $this->createFormBuilder()
                ->setAction($this->generateUrl('quiz_delete', array('id' => $quiz->getId())))
                ->setMethod('DELETE')
                ->getForm();
    }
}
