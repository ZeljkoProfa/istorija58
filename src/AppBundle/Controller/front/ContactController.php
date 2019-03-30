<?php

namespace AppBundle\Controller\front;

use AppBundle\Entity\Contact;
use AppBundle\Services\SecurityService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Contact front controller.
 */
class ContactController extends Controller {

    /**
     * Creates a new contact entity.
     *
     * @param Request $request
     * @param SecurityService $securityService
     * @param LoggerInterface $logger
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(
        Request $request,
        SecurityService $securityService,
        LoggerInterface $logger
    ) {
        $contact = new Contact();
        $form = $this->createForm('AppBundle\Form\ContactType', $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if(
                $securityService->checkIp($request)
            ) {
                try {
                    $contact->setCreated(new \DateTime('now'));
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($contact);
                    $em->flush();
                    $securityService->writeIps($contact->getId(), 'comment');
                }catch (\Exception $e){
                    $logger->error('Error while writing comment to database. Error '.$e->getMessage());
                }
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
            $contactId = $contact->getId();
            //var_dump($contact_id, $ip);exit;
            $securityService->writeIps($contactId, 'contact');

            return $this->redirectToRoute('main_front_page', [
                        'kontaktmsg' => 'Poslato!'
            ]);
        }

        return $this->render('front/contact/new.html.twig', [
                    'contact' => $contact,
                    'form' => $form->createView(),
        ]);
    }
}
