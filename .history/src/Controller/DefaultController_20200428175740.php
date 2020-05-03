<?php

namespace App\Controller;

use App\Entity\Compte;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

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
    */
    public function register(Request $request){

        $Manager = $this->getDoctrine()->getManager();
        $compte=new Compte();
        $form=$this->createFormBuilder($compte)
            ->add('username',TextType::class,[
                "attr"=>[
                    "placeholder"=>"username"
                ]
            ])
            ->add('password',TextType::class,[
                "attr"=>[
                    "placeholder"=>"password"
                ]
            ])
            ->add('email',TextType::class,[
                "attr"=>[
                    "placeholder"=>"example@insat.u-carthage.tn"
                ]
            ])
            ->add('type',ChoiceType::class,[
                "choices"=>[
                    "teacher"=>"teacher",
                    "student"=>"student"
                ],
                "attr"=>[
                    "label"=>"I am a :"
                ]
            ])
            ->add('sign up',SubmitType::class)
            ->add('reset',ResetType::class)
            ->getForm();
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $compte->setComfirmation(false);
            $manager->persist($compte);
            $manager->flush();
            return $this->redirectToRoute('default/comfirmation.html.twig' , ['username' => $compte->getUsername()]);
        }

        return $this->render('default/register.html.twig',[
            "form"=>$form->createView()
        ]);
    }
}
