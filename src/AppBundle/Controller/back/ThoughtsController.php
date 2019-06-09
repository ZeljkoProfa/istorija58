<?php

namespace AppBundle\Controller\back;

use AppBundle\Entity\Thoughts;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ThoughtsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $thoughts = $em->getRepository('AppBundle:Thoughts')->findAll();

        return $this->render('back/thoughts/index.html.twig', array(
            'thoughts' => $thoughts,
        ));
    }

    public function newAction(Request $request, LoggerInterface $logger)
    {
        $thought = new Thoughts();
        $form = $this->createForm('AppBundle\Form\ThoughtsType', $thought);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $thought->setCreated(new \DateTime('now'));
                $thought->setAdminId($this->getUser());
                $em = $this->getDoctrine()->getManager();
                $em->persist($thought);
                $em->flush();
            }catch (\Exception $e){
                $logger->error('Error while creating thought. Error: '.$e->getMessage());
            }

            return $this->redirectToRoute('thoughts_show', array('id' => $thought->getId()));
        }

        return $this->render('back/thoughts/new.html.twig', array(
            'thought' => $thought,
            'form' => $form->createView(),
        ));
    }

    public function showAction(Thoughts $thought)
    {
        $deleteForm = $this->createDeleteForm($thought);

        return $this->render('back/thoughts/show.html.twig', array(
            'thought' => $thought,
            'delete_form' => $deleteForm->createView(),
        ));
    }

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

    private function createDeleteForm(Thoughts $thought)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('thoughts_delete', array('id' => $thought->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
