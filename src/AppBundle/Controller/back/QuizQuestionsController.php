<?php

namespace AppBundle\Controller\back;

use AppBundle\Entity\QuizQuestions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;

class QuizQuestionsController extends Controller
{
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $quizQuestions = $em->getRepository('AppBundle:QuizQuestions')->findAll();

        return $this->render('back/quizquestions/index.html.twig', array(
                    'quizQuestions' => $quizQuestions,
        ));
    }

    /**
     * @param Request $request
     * @return bool|\Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function newAction(Request $request)
    {
        $quizQuestions = new Quizquestions();
        $form = $this->createForm('AppBundle\Form\QuizQuestionsType', $quizQuestions);
        $form->handleRequest($request);

        if (!empty($request->query->get('id'))) {
            return false;
        }

        $quizQuestions->setQuizId($request->query->get('id'));
        $parentId = $request->query->get('id');

        if ($form->isSubmitted() && $form->isValid()) {
            $last_num = $this->getDoctrine()
                    ->getRepository('AppBundle:QuizQuestions')
                    ->getLastQuestonNumber($parentId);
            if ($last_num == null || $last_num == 0 || $last_num == false || is_array($last_num) || is_object($last_num)) {
                $last_num = 1;
            }

            $quizQuestions->setNumber((int)$last_num + 1);
            $quizQuestions->setCreated(new \DateTime('now'));

            $this->getDoctrine()
                    ->getRepository('AppBundle:Quiz')
                    ->updateTotal($last_num + 1, $parentId);

            /** @var UploadedFile $file */
            $file = $quizQuestions->getImg();
            if ($file) {
                $file_name_ = $file->getClientOriginalName();
                $fileName = $file_name_;

                $file->move(
                        $this->getParameter('img_directory'), $fileName
                );

                $quizQuestions->setImg($fileName);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($quizQuestions);
            $em->flush();

            return $this->redirectToRoute('quiz_show', array(
                        'id' => $parentId
            ));
        }

        return $this->render('back/quizquestions/new.html.twig', array(
                    'quizQuestions' => $quizQuestions,
                    'form' => $form->createView(),
        ));
    }

    /**
     * @param QuizQuestions $quizQuestions
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(QuizQuestions $quizQuestions)
    {
        $deleteForm = $this->createDeleteForm($quizQuestions);
        $quizId = $quizQuestions->getQuizId();
        return $this->render('back/quizquestions/show.html.twig', array(
                    'quizQuestions' => $quizQuestions,
                    'delete_form' => $deleteForm->createView(),
                    'quizid' => $quizId
        ));
    }

    /**
     * @param Request $request
     * @param QuizQuestions $quizQuestion
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, QuizQuestions $quizQuestion)
    {
        $img = '';

        if ($quizQuestion->getImg() != '') {
            $imagePath = $this->getParameter('img_directory');
            $image = $imagePath . "/" . $quizQuestion->getImg();
            $fileNameOld = $quizQuestion->getImg();

            if (isset($fileNameOld)) {
                $img = new File($image);
                $oldFileName = $img->getFilename();
                $quizQuestion->setImg($img);
            }
        }
        $quizId = $quizQuestion->getQuizId();
        $deleteForm = $this->createDeleteForm($quizQuestion);
        $editForm = $this->createForm('AppBundle\Form\QuizQuestionsType', $quizQuestion);
        $editForm->handleRequest($request);
        

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $imgDelete = $editForm['imgdel']->getData();
            if ($editForm->getData()->getImg() == null) {
                if ($oldFileName != '' && $imgDelete == false) {
                    $editForm->getData()->setImg($img);
                    /** @var UploadedFile $file */
                    $file = $img;
                    $fileName_ = $oldFileName;
                    $fileName = $fileName_;
                    $file->move($this->getParameter('img_directory'), $fileName);
                    $quizQuestion->setImg($fileName);
                } else if ($oldFileName != '' && $imgDelete == true) {
                    $fileName_ = '';
                    $fileName = $fileName_;
                    $quizQuestion->setImg($fileName);
                }
            } else {
                /** @var UploadedFile $file */
                $file = $quizQuestion->getImg();
                $fileName_ = $file->getClientOriginalName();
                $fileName = $fileName_;
                $file->move($this->getParameter('img_directory'), $fileName);
                $quizQuestion->setImg($fileName);
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('quizquestions_show', array(
                        'id' => $quizQuestion->getId(),
                        'quizId' => $quizId
            ));
        }

        return $this->render('back/quizquestions/edit.html.twig', array(
                    'quizQuestion' => $quizQuestion,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'img' => $img,
                    'quizid' => $quizId
        ));
    }

    public function deleteAction(Request $request, QuizQuestions $quizQuestion)
    {
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

    private function createDeleteForm(QuizQuestions $quizQuestion) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('quizquestions_delete', array('id' => $quizQuestion->getId())))
                        ->setMethod('DELETE')
                        ->getForm();
    }

}
