<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller {

    public function testAdminAction(Request $request) {
        return $this->render('AppBundle:Layout:templateAdmin.html.twig');
    }

}
