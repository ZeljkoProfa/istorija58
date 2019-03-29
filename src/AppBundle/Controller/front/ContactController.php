<?php

namespace AppBundle\Controller\front;

use AppBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Contact controller.
 *
 */
class ContactController extends Controller {

    /**
     * Creates a new contact entity.
     *
     */
    public function newAction(Request $request) {
        $contact = new Contact();
        $form = $this->createForm('AppBundle\Form\ContactType', $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /* Get user ip */
            if (isset($_SERVER['REMOTE_ADDR'])) {
                $ip = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP);
            } else {
                $ip = 'none';
            }
            if (isset($_SERVER['HTTP_CLIENT_IP'])) {
                $client_ip = filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP);
            } else {
                $client_ip = 'none';
            }
            if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $proxy = filter_var($_SERVER['HTTP_X_FORWARDED_FOR']);
            } else {
                $proxy = 'none';
            }

            /* Check for banned */
            $checked = $this->getDoctrine()->getRepository('AppBundle:Contact')->checkIp($ip);
            
            if ($checked === 'Empty' || $checked === array() || $checked === false) {
                //var_dump('if');
                // Setting time created.
                $contact->setCreated(new \DateTime('now'));
                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);
                $em->flush();
                $contact_id = $contact->getId();
                //var_dump($contact_id, $ip);exit;
                $this->getDoctrine()->getRepository('AppBundle:Contact')->writeIps($ip, $client_ip, $proxy, $contact_id, $origin = 'contact');
                return $this->redirectToRoute('main_front_page', array(
                            'kontaktmsg' => 'Poslato!'
                ));
            } else {
                //var_dump('else');exit;
                
                $message = 'Because of yours previous posts, comments and others, it is forbiden to you to post anything on this site!';

                return $this->redirectToRoute('main_front_page', array(
                            'checked' => $message
                ));
            }
            
        }

        return $this->render('front/contact/new.html.twig', array(
                    'contact' => $contact,
                    'form' => $form->createView(),
                    //'message' => $message,
        ));
    }

}
