<?php

namespace AppBundle\Controller\back;

use AppBundle\Services\SecurityService;
use AppBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
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

    public function showAction(Contact $contact, SecurityService $securityService)
    {
        $id = $contact->getId();
        $user_ip = $securityService->takeIp($id, $origin = 'contact');
        $deleteForm = $this->createDeleteForm($contact);
        
        return $this->render('back/contact/show.html.twig', [
            'user_ip' => $user_ip,
            'contact' => $contact,
            'delete_form' => $deleteForm->createView(),
        ]);
    }

    public function editAction(Request $request, Contact $contact, SecurityService $securityService)
    {
        $deleteForm = $this->createDeleteForm($contact);
        $editForm = $this->createForm('AppBundle\Form\ContactType', $contact);
        $editForm->handleRequest($request);
        $id = $contact->getId();
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

    private function createDeleteForm(Contact $contact)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contact_delete', ['id' => $contact->getId()]))
            ->setMethod('DELETE')
            ->getForm();
    }
}
