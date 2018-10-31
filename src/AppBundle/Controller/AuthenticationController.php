<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AuthenticationController extends Controller {

    public function indexAction(Request $request) {
//        if (is_object($this->getUser())) {
//            return $this->redirect($this->generateUrl('role_check'));
//        }
//
//        $authenticationUtils = $this->get('security.authentication_utils');
//        $error = $authenticationUtils->getLastAuthenticationError();
//        //$lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('AppBundle:Default:index.html.twig');
    }

}
