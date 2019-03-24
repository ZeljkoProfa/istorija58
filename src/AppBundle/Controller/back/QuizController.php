<?php

namespace AppBundle\Controller\back;

use AppBundle\Entity\Quiz;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\QuizQuestions;

/**
 * Quiz controller.
 *
 */
class QuizController extends Controller {

    /**
     * Lists all quiz entities.
     *
     */
    public function indexAction($currentPage = 1) {
        $limit = 10;
        if (isset($_GET['currentPage'])) {
            $currentPage = htmlspecialchars($_GET['currentPage']);
        }
        //$em = $this->getDoctrine()->getManager();
        $quizzes = $this->getDoctrine()
                ->getRepository('AppBundle:Quiz')
                ->getAllQuizzes($currentPage, $limit);
        //$quizzes = $em->getRepository('AppBundle:Quiz')->findAll();

        $maxPages = ceil($quizzes->count() / $limit);
        $thisPage = $currentPage;
        return $this->render('back/quiz/index.html.twig', array(
                    'quizzes' => $quizzes,
                    'thisPage' => $thisPage,
                    'maxPages' => $maxPages,
        ));
    }

    /**
     * Creates a new quiz entity.
     *
     */
    public function newAction(Request $request) {
        $quiz = new Quiz();
        $form = $this->createForm('AppBundle\Form\QuizType', $quiz);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            //Set total number of questions per quiz
            // Setting time created.
            $quiz->setCreated(new \DateTime('now'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($quiz);
            $em->flush();

            return $this->redirectToRoute('quiz_show', array('id' => $quiz->getId()));
        }

        return $this->render('back/quiz/new.html.twig', array(
                    'quiz' => $quiz,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a quiz entity.
     *
     */
    public function showAction(Quiz $quiz) {
        $request = new Request();
        $deleteForm = $this->createDeleteForm($quiz);
        
        $quizQuestions = new QuizQuestions();
        // $delete_form_q = $this->createDeleteQForm($quizQuestions);
        $form = $this->createForm('AppBundle\Form\QuizQuestionsType', $quizQuestions);
        $form->handleRequest($request);
        
        $quiz_questions_REP =  $this->getDoctrine()->getRepository('AppBundle:QuizQuestions');
        $quiz_questions = $quiz_questions_REP->findByQuizId($quiz->getId());
        //var_dump($quiz->getId());exit;-- returns good value.
        
        
        return $this->render('back/quiz/show.html.twig', array(
                    'quiz' => $quiz,
                    'delete_form' => $deleteForm->createView(),
                    'form' => $form->createView(),
                    'quizQuestions' => $quiz_questions,
                    //'delete_q_form' => $delete_form_q
        ));
    }

    /**
     * Displays a form to edit an existing quiz entity.
     *
     */
    public function editAction(Request $request, Quiz $quiz) {
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

    /**
     * Deletes a quiz entity.
     *
     */
    public function deleteAction(Request $request, Quiz $quiz) {
        $form = $this->createDeleteForm($quiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($quiz);
            $em->flush();
        }

        return $this->redirectToRoute('quiz_index');
    }

    /**
     * Creates a form to delete a quiz entity.
     *
     * @param Quiz $quiz The quiz entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Quiz $quiz) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('quiz_delete', array('id' => $quiz->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }
    
    /**
     * Deletes a quizQuestion entity.
     *
     */
    /*public function deleteQAction(Request $request, QuizQuestions $quizQuestion) {
        $form = $this->createDeleteForm($quizQuestion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($quizQuestion);
            $em->flush();
        }

        return $this->redirectToRoute('quizquestions_index');
    }

    /**
     * Creates a form to delete a quiz entity.
     *
     * @param Quiz $quiz The quiz entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /*private function createDeleteQForm(QuizQuestions $quizQuestion) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('quizquestions_delete', array('id' => $quizQuestion->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }*/
}
