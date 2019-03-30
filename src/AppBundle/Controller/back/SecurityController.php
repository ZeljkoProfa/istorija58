<?php

namespace AppBundle\Controller\back;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller {

    public function loginAction(Request $request, AuthenticationUtils $authUtils) {

        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();
        //var_dump($authUtils->getPassword());exit;
        return $this->render('back/login.html.twig', [
                    'last_username' => $lastUsername,
                    'error' => $error,
        ]);
    }

    public function forbidAction (Request $request, LoggerInterface $logger){
        $ip = $request->request->get('ip');
        $sql = /** @lang mysql */
            'INSERT INTO bannedd_ip (ip, banned, created) VALUES (
            :ip, :banned, NOW())';

        $params = [
            'ip' => $ip,
            'banned' => '1'
        ];

        try {
            $em = $this->getDoctrine()->getManager();
            $stmt = $em->getConnection()->prepare($sql);
            $status = $stmt->execute($params);
        }catch (\Exception $e){
            $logger->error('Error while banning ip. Error '.$e->getMessage());
        }
        
        return new Response(json_encode($status));
        
    }
}
