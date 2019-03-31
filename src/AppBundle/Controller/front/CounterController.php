<?php

namespace AppBundle\Controller\front;

use AppBundle\Entity\Counter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CounterController extends Controller
{

    public function visitorAction(Request $request)
    {
        $visit = $this->getDoctrine()->getRepository('AppBundle:Counter')->getLastVisit();
        $visitNum = $visit[0];

        /** @var Counter $counter */
        $counter = $visit[0];
        $id = $counter->getId();
        $counter = $counter->getCounter();

        if (empty($request->cookies->get('firsttime'))) {
            setcookie("firsttime", "no", time() + 60);
            $this->getDoctrine()->getRepository('AppBundle:Counter')->incrementVisit($id, $counter);
        }

        return $this->render('front/pages/visitor.html.twig', [
            'visit' => $visitNum
        ]);
    }

}
