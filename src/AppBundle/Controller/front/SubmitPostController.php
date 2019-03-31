<?php

namespace AppBundle\Controller\front;

use AppBundle\Entity\Post;
use AppBundle\Services\SecurityService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class SubmitPostController extends Controller
{
    /**
     * Creates a new post entity.
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
        $post = new Post();
        $form = $this->createForm('AppBundle\Form\FrontPostType', $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $file */
            $file = $post->getBody();
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();

            $file->move(
                    $this->getParameter('post_directory'), $fileName
            );

            $post->setBody($fileName);

            if($securityService->checkIp($request)) {

                try {
                    $post->setCreated(new \DateTime('now'));
                    $post->setAdminId($this->getUser());
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($post);
                    $em->flush();

                    $securityService->writeIps($post->getId(), 'post');
                    $this->addFlash(
                        'success',
                        'Uspešno ste dodali članak. 
                        Biće vidljiv na sajtu kada ga administrator odobri.'
                    );
                }catch (\Exception $e){
                    $logger->error('Error while writing comment to database. Error '.$e->getMessage());
                }
            }else{
                $this->addFlash(
                    'error',
                    'Onemogućeno vam je postavljanje materijala, komentara i ostalog na ovaj sajt!'
                );
            }

            unset($post);
            unset($form);

            return $this->redirectToRoute('front_submit_post');
        }

        return $this->render('front/pages/contact.html.twig', [
                    'post' => $post,
                    'form' => $form->createView(),
        ]);
    }
}
