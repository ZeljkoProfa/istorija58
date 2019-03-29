<?php

namespace AppBundle\Controller\back;

use AppBundle\Entity\QuizQuestions;
use AppBundle\Controller\back\QuizController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Util\Debug; //::dump($user)
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Quizquestion controller.
 *
 */
class QuizQuestionsController extends Controller {

    /**
     * Lists all quizQuestion entities.
     *
     */
    public function indexAction($currentPage = 1) {
        $em = $this->getDoctrine()->getManager();

        $quizQuestions = $em->getRepository('AppBundle:QuizQuestions')->findAll();

        return $this->render('back/quizquestions/index.html.twig', array(
                    'quizQuestions' => $quizQuestions,
        ));
    }

    /**
     * Creates a new quizQuestion entity.
     *
     */
    public function newAction(Request $request) {
        $quizQuestions = new Quizquestions();
        $form = $this->createForm('AppBundle\Form\QuizQuestionsType', $quizQuestions);
        $form->handleRequest($request);

        if (isset($_GET['id'])) {
            $quizQuestions->setQuizId(htmlspecialchars($_GET['id']));
            $parent_id = $_GET['id'];
        }
        if ($form->isSubmitted() && $form->isValid()) {
            //$quiz_id = $form['quizId']->getData()->getId();   // <----- Only way I can get associated field.
            //$repositoryQuiz = $this->getDoctrine()->getRepository('AppBundle:Quiz');
            //$quiz_entity = $repositoryQuiz->findOneById($quiz_id);

            $last_num = $this->getDoctrine()
                    ->getRepository('AppBundle:QuizQuestions')
                    ->getLastQuestonNumber($parent_id);
            //var_dump($last_num);exit;
            if ($last_num == null || $last_num == 0 || $last_num == false || is_array($last_num) || is_object($last_num)) {
                $last_num = 1;
            }
            //var_dump($last_num);exit;
            (int) $last_num;

            $quizQuestions->setNumber($last_num + 1);
            $quizQuestions->setCreated(new \DateTime('now'));

            // Update total for Quiz entity!!!
            $this->getDoctrine()
                    ->getRepository('AppBundle:Quiz')
                    ->updateTotal($last_num + 1, $parent_id);

            // File action
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $quizQuestions->getImg();
            //var_dump($file);exit;
            if ($file) {
                $file_name_ = $file->getClientOriginalName();

                // Generate a unique name for the file before saving it
                $fileName = $file_name_;

                // Move the file to the directory where brochures are stored
                $file->move(
                        $this->getParameter('img_directory'), $fileName
                );
                // Update the 'brochure' property to store the PDF file name
                // instead of its contents
                $quizQuestions->setImg($fileName);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($quizQuestions);
            $em->flush();

            return $this->redirectToRoute('quiz_show', array(
                        'id' => $parent_id
            ));
        }

        return $this->render('back/quizquestions/new.html.twig', array(
                    'quizQuestions' => $quizQuestions,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a quizQuestion entity.
     *
     */
    public function showAction(QuizQuestions $quizQuestions) {
        $deleteForm = $this->createDeleteForm($quizQuestions);
        $quizId = $quizQuestions->getQuizId();
        return $this->render('back/quizquestions/show.html.twig', array(
                    'quizQuestions' => $quizQuestions,
                    'delete_form' => $deleteForm->createView(),
                    'quizid' => $quizId
        ));
    }

    /**
     * Displays a form to edit an existing quizQuestion entity.
     *
     */
    public function editAction(Request $request, QuizQuestions $quizQuestion) {
        $img = '';

        //Debug::dump($quizQuestion);
        if ($quizQuestion->getImg() != '') {
            $image_path = $this->getParameter('img_directory');
            $image = $image_path . "/" . $quizQuestion->getImg();
            $fileName_old = $quizQuestion->getImg();

            if (isset($fileName_old)) {
                $img = new File($image);
                $old_file_name = $img->getFilename();
                $quizQuestion->setImg($img);
            }
        }
        $quizid = $quizQuestion->getQuizId();
        $deleteForm = $this->createDeleteForm($quizQuestion);
        $editForm = $this->createForm('AppBundle\Form\QuizQuestionsType', $quizQuestion);
        $editForm->handleRequest($request);
        

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $img_delete = $editForm['imgdel']->getData(); // <-- return good value
            //Debug::dump($editForm->getData());exit;
            //Debug::dump($old_file_name);exit;
            if ($editForm->getData()->getImg() == null) {
                if ($old_file_name != '' && $img_delete == false) {
                    $editForm->getData()->setImg($img);
                    /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                    $file = $img;
                    $file_name_ = $old_file_name;
                    // Generate a unique name for the file before saving it ! NOT
                    $fileName = $file_name_;
                    $file->move($this->getParameter('img_directory'), $fileName);
                    $quizQuestion->setImg($fileName);
                } else if ($old_file_name != '' && $img_delete == true) {
                    $file = $img;
                    $file_name_ = '';
                    // Generate a unique name for the file before saving it ! NOT
                    $fileName = $file_name_;
                    //$file->move($this->getParameter('img_directory'), $fileName);
                    $quizQuestion->setImg($fileName);
                }
            } else {
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $quizQuestion->getImg();
                $file_name_ = $file->getClientOriginalName();
                // Generate a unique name for the file before saving it ! NOT
                $fileName = $file_name_;
                // Move the file to the directory where img's are stored
                $file->move($this->getParameter('img_directory'), $fileName);
                $quizQuestion->setImg($fileName);
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('quizquestions_show', array(
                        'id' => $quizQuestion->getId(),
                        'quizId' => $quizid
            ));
        }

        return $this->render('back/quizquestions/edit.html.twig', array(
                    'quizQuestion' => $quizQuestion,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'img' => $img,
                    'quizid' => $quizid
        ));
    }

    /**
     * Deletes a quizQuestion entity.
     *
     */
    public function deleteAction(Request $request, QuizQuestions $quizQuestion) {
        $form = $this->createDeleteForm($quizQuestion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($quizQuestion);
            $em->flush();
        }

        return $this->redirectToRoute('quiz_show', array(
                    'id' => $quizQuestion->getQuizId()
        ));
    }

    /**
     * Creates a form to delete a quizQuestion entity.
     *
     * @param QuizQuestions $quizQuestion The quizQuestion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(QuizQuestions $quizQuestion) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('quizquestions_delete', array('id' => $quizQuestion->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
