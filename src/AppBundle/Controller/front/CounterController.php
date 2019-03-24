<?php

namespace AppBundle\Controller\front;

use AppBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Counter controller.
 *
 */
class CounterController extends Controller {

    public function visitorAction(Request $request) {
        // Get num of visits - counter
        $visit = $this->getDoctrine()->getRepository('AppBundle:Counter')->getLastVisit();
        $visitNum = $visit[0];
        $firstObjectInOneObjectArray = $visit[0];
        $id = $firstObjectInOneObjectArray->getId();
        //var_dump($counter);exit;
        $counter = $firstObjectInOneObjectArray->getCounter();
        // Update counter
        if (!isset($_COOKIE['firsttime'])) {
            setcookie("firsttime", "no", time() + 60);
            $this->getDoctrine()->getRepository('AppBundle:Counter')->incrementVisit($id, $counter);
        }
        return $this->render('front/pages/visitor.html.twig', array(
                    'visit' => $visitNum
        ));
    }

}
