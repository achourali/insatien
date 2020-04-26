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
            'controller_name' => 'DefaultController',
        ]);
    }
    
    /** 
    * @Route("/", name="home")
    */
    public function home(){
        return $this->render('default/home.html.twig');
    }

     /**
     * @Route("/contact", name="contact")
     */
    public function contactUs(){
        return $this->render('default/contactUs.html.twig');
    }
        /** 
    * @Route("/register", name="register")
    * @Method({"POST"})
    */
    public function register(){
        return $this->render('default/register.html.twig');
    }
}
