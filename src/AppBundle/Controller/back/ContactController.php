<?php

namespace AppBundle\Controller\back;

use AppBundle\Services\SecurityService;
use AppBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Contact controller.
 *
 */
class ContactController extends Controller
{
    /**
     * Lists all contact entities.
     *
     * @param Request $request
     * @param int $currentPage
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $currentPage = 1)
    {
        $limit = 10;

        if (empty($request->request->get('currentPage'))) {
            $currentPage = $request->request->get('currentPage');
        }
        
        $contacts = $this->getDoctrine()
                        ->getRepository('AppBundle:Contact')
                        ->getLastContactAdded($limit, $currentPage);
        
        $maxPages = ceil($contacts->count() / $limit);
        $thisPage = $currentPage;

        return $this->render('back/contact/index.html.twig', [
                    'contacts' => $contacts,
                    'maxPages' => $maxPages,
                    'thisPage' => $thisPage
        ]);
    }

    /**
     * Finds and displays a contact entity.
     *
     * @param Contact $contact
     * @param SecurityService $securityService
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Contact $contact, SecurityService $securityService)
    {
        $id = $contact->getId();
        //var_dump($id);exit;
        $user_ip = $securityService->takeIp($id, $origin = 'contact');
        //var_dump($user_ip);exit;
        $deleteForm = $this->createDeleteForm($contact);
        
        return $this->render('back/contact/show.html.twig', [
            'user_ip' => $user_ip,
            'contact' => $contact,
            'delete_form' => $deleteForm->createView(),
        ]);
    }

    /**
     * Displays a form to edit an existing contact entity.
     *
     * @param Request $request
     * @param Contact $contact
     * @param SecurityService $securityService
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, Contact $contact, SecurityService $securityService)
    {
        $deleteForm = $this->createDeleteForm($contact);
        $editForm = $this->createForm('AppBundle\Form\ContactType', $contact);
        $editForm->handleRequest($request);
        $id = $contact->getId();
        //var_dump($id);exit;
        $user_ip = $securityService->takeIp($id, $origin = 'contact');

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contact_edit', ['id' => $contact->getId()]);
        }

        return $this->render('back/contact/edit.html.twig', [
            'user_ip' => $user_ip,
            'contact' => $contact,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView()
        ]);
    }

    /**
     * Deletes a contact entity.
     *
     * @param Request $request
     * @param Contact $contact
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, Contact $contact)
    {
        $form = $this->createDeleteForm($contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contact);
            $em->flush();
        }

        return $this->redirectToRoute('contact_index');
    }

    /**
     * Creates a form to delete a contact entity.
     *
     * @param Contact $contact The contact entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Contact $contact)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contact_delete', ['id' => $contact->getId()]))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
