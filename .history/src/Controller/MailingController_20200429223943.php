<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class MailingController extends AbstractController
{
    /**
     * @Route("/mailing", name="mailing")
     */
    public function index()
    {
        return $this->render('mailing/index.html.twig', [
            'controller_name' => 'MailingController',
        ]);
    }

     /**
     * @Route("/contact", name="contact")
     */
    public function register(Request $request, EntityManagerInterface $manager){

        $message=new CompteMail();
        $mailform=$this->createFormBuilder($message)
            ->add('full name',TextType::class,[
                "attr"=>[
                    "placeholder"=>" add your full name"
                ]
            ])
            ->add('email',TextType::class,[
                "attr"=>[
                    "placeholder"=>"example@insat.u-carthage.tn"
                ]
            ])
            ->add('Subject',TextType::class,[
                "attr"=>[
                    "placeholder"=>"add the subject"
                ]
            ])
            ->add('Message',TextareaType::class,[
                "attr"=>[
                    "placeholder"=>"Message "
                ]
            ])
            ->add('send',SubmitType::class)
            ->add('reset',ResetType::class)
            ->getForm();
        $mailform->handleRequest($request);
        
        if($mailform->isSubmitted() && $mailform->isValid()){
            $manager->persist($message);
            $manager->flush();
            return $this->redirect('feedback');
        }

        return $this->render('mailing/contactUs.html.twig',[
            "form"=>$mailform->createView()
        ]);
    }
}
