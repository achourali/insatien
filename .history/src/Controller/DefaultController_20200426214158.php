<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'PreSignInController',
        ]);
    }
     /** 
    * @Route("/", name="home")
    */
    public function home(){
        return $this->render('blog/home.html.twig');
    }
}
