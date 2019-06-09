<?php

namespace AppBundle\Controller\back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CheckUploadStatusController extends Controller
{
    public function checkAction(Request $request)
    {

        if (!empty($request->query->get('check'))) {
            $check = $request->query->get('check');

            $this->getDoctrine()->getRepository('AppBundle:CheckUploadStatus')->editStatusRep($check);

            return $this->render('back/checkStatus/edit.html.twig', array(
                        'status_msg' => 'Uspesno ste promenili status stranice dodaj-sadrzaj.'
            ));
        }

        return $this->render('back/checkStatus/edit.html.twig', array(
        ));
    }
}
