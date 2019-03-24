<?php

namespace AppBundle\Controller\back;

use AppBundle\Entity\CheckUploadStatus;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Form\PostType;
use AppBundle\Form\PostEditType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Post controller.
 *
 */
class CheckUploadStatusController extends Controller {

    public function checkAction() {

        if (isset($_GET['check'])) {
            $check = htmlspecialchars($_GET['check']);

            $this->getDoctrine()->getRepository('AppBundle:CheckUploadStatus')->editStatusRep($check);

            return $this->render('back/checkStatus/edit.html.twig', array(
                        'status_msg' => 'Uspesno ste promenili status stranice dodaj-sadrzaj.'
            ));
        }

        return $this->render('back/checkStatus/edit.html.twig', array(
        ));
    }

}
