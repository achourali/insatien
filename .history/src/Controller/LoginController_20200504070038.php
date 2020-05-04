<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index(Request $request){
        $helper = $this->get('security.authentication_utils');
        $error = $helper->getLastAuthenticationError();
        var_dump( $error );
        return $this->render('ConnectedUser/studentBase.html.twig');
    }
}
