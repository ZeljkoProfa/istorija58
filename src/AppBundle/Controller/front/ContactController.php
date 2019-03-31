<?php

namespace AppBundle\Controller\front;

use AppBundle\Entity\Contact;
use AppBundle\Services\SecurityService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
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
                    $this->addFlash('success', 'Poslato!');
                }catch (\Exception $e){
                    $logger->error('Error while writing comment to database. Error '.$e->getMessage());
                }
            }else{
                $this->addFlash(
                    'error',
                    'Onemogućeno vam je postavljanje materijala, komentara i ostalog na ovaj sajt!'
                );
            }

            $contactId = $contact->getId();
            $securityService->writeIps($contactId, 'contact');

            return $this->redirectToRoute('main_front_page');
        }

        return $this->render('front/pages/contact.html.twig', [
                    'contact' => $contact,
                    'form' => $form->createView(),
        ]);
    }
}
