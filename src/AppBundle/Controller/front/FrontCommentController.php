<?php

namespace AppBundle\Controller\front;

use AppBundle\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontCommentController extends Controller
{

//    public function newCommentAction()
//    {
//
//        if (isset($_POST)) {
//            $comment = new Comment();
//
//            $comment->setCreated(new \DateTime('now'));
//
//            $comment->setAuthor(htmlspecialchars($_POST['author']));
//            $comment->setBody(htmlspecialchars($_POST['body']));
//
//            $em = $this->getDoctrine()->getManager();
//
//            if(isset($_POST['parentId'])){
//
//            $commentfromdb = $em->getRepository('AppBundle:Comment')->findOneById(htmlspecialchars($_POST['parentId']));
//            $comment->setParentId($commentfromdb);
//
//            // Setting children needed for recursive call for subtemplate in twig
//            $parent = $comment->getParentId();
//            $parent->addChild($comment);
//            }
//
//            /* Get ip  */
//            if (isset($_SERVER['REMOTE_ADDR'])) {
//                $ip = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP);
//            } else {
//                $ip = 'none';
//            }
//            if (isset($_SERVER['HTTP_CLIENT_IP'])) {
//                $client_ip = filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP);
//            } else {
//                $client_ip = 'none';
//            }
//            if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//                $proxy = filter_var($_SERVER['HTTP_X_FORWARDED_FOR']);
//            } else {
//                $proxy = 'none';
//            }
//
//            $em->persist($comment);
//            $em->flush();
//            $id = $comment->getId();
//
//            /* Write ip to db */
//            $this->getDoctrine()->getRepository('AppBundle:Contact')->writeIps($ip, $client_ip, $proxy, $id, $origin = 'comment');
//
//            return $this->redirectToRoute('main_front_page', array(
//                'message' => 'You can not post on this site!'
//            ));
//        }
//    }

}
