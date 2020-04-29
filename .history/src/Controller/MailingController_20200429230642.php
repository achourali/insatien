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
use  App\Entity\ContactMail;

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

        $message=new ContactMail();
        $mailform=$this->createFormBuilder($message)
            ->add('fullName',TextType::class,[
                "attr"=>[
                    "placeholder"=>" add your full name",
                    "class" =>"col-md-8"
                ]
            ])
            ->add('email',TextType::class,[
                "attr"=>[
                    "placeholder"=>"example@insat.u-carthage.tn",
                    "class" =>"col-md-8"
                ]
            ])
            ->add('Subject',TextType::class,[
                "attr"=>[
                    "placeholder"=>"add the subject",
                    "class" =>"col-md-8"
                ]
            ])
            ->add('type',ChoiceType::class,[
                "choices"=>[
                    "service"=>"General Customer Service",
                    "Suggestions"=>"Suggestions",
                    "Feedbacks"=>"Feedbacks"
                ],
                "attr"=>[
                    "label"=>"Choose One:"
                ]
            ])
            ->add('Message',TextareaType::class,[
                "attr"=>[
                    "placeholder"=>"Message ",
                    "class" =>"col-md-4"
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
            "mailform"=>$mailform->createView()
        ]);
    }
    /**
     * @Route("/feedback", name="feedback")
     */
    public function feedback(){
        return $this->render('mailing/feedback.html.twig');
    }
}
