<?php

namespace AppBundle\Controller\back;

use AppBundle\Entity\Thoughts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Thought controller.
 *
 */
class ThoughtsController extends Controller
{
    /**
     * Lists all thought entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $thoughts = $em->getRepository('AppBundle:Thoughts')->findAll();

        return $this->render('back/thoughts/index.html.twig', array(
            'thoughts' => $thoughts,
        ));
    }

    /**
     * Creates a new thought entity.
     *
     */
    public function newAction(Request $request)
    {
        $thought = new Thoughts();
        $form = $this->createForm('AppBundle\Form\ThoughtsType', $thought);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             // Setting time created.
            $thought->setCreated(new \DateTime('now'));
            // Setting creator's id.
            $thought->setAdminId($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($thought);
            $em->flush();

            return $this->redirectToRoute('thoughts_show', array('id' => $thought->getId()));
        }

        return $this->render('back/thoughts/new.html.twig', array(
            'thought' => $thought,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a thought entity.
     *
     */
    public function showAction(Thoughts $thought)
    {
        $deleteForm = $this->createDeleteForm($thought);

        return $this->render('back/thoughts/show.html.twig', array(
            'thought' => $thought,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing thought entity.
     *
     */
    public function editAction(Request $request, Thoughts $thought)
    {
        $deleteForm = $this->createDeleteForm($thought);
        $editForm = $this->createForm('AppBundle\Form\ThoughtsType', $thought);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('thoughts_edit', array('id' => $thought->getId()));
        }

        return $this->render('back/thoughts/edit.html.twig', array(
            'thought' => $thought,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a thought entity.
     *
     */
    public function deleteAction(Request $request, Thoughts $thought)
    {
        $form = $this->createDeleteForm($thought);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($thought);
            $em->flush();
        }

        return $this->redirectToRoute('thoughts_index');
    }

    /**
     * Creates a form to delete a thought entity.
     *
     * @param Thoughts $thought The thought entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Thoughts $thought)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('thoughts_delete', array('id' => $thought->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
