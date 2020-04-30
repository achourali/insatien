<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
    public function register(Request $request, EntityManagerInterface $manager ,\Swift_Mailer $mailer){

        $message=new ContactMail();
        $mailform=$this->createFormBuilder($message)
            ->add('fullName',TextType::class,[
                "attr"=>[
                    "placeholder"=>" add your full name",
                    
                ]
            ])
            ->add('email',TextType::class,[
                "attr"=>[
                    "placeholder"=>"example@insat.u-carthage.tn",
                ]
            ])
            ->add('Subject',ChoiceType::class,[
                "attr"=>[
                    "label"=>"Choose One:"
                ],
                "choices"=>[
                    "service"=>"General Customer Service",
                    "Suggestions"=>"Suggestions",
                    "Feedbacks"=>"Feedbacks"
                ]

            ])
            ->add('Message',TextareaType::class,[
                "attr"=>[
                    "placeholder"=>"Message ",
                ]
            ])
            ->add('send',SubmitType::class)
            ->add('reset',ResetType::class)
            ->getForm();
        $mailform->handleRequest($request);
        
        if($mailform->isSubmitted() && $mailform->isValid()){
            //$contact = $mailform->getData();
            $manager->persist($message);
            $manager->flush();
            $msg = (new \Swift_Message('Nouveau contact'))
            // On attribue l'expéditeur
            ->setFrom($message.email)

            // On attribue le destinataire
            ->setTo('insatien.help@gmail.com')

            // On crée le texte avec la vue
            ->setBody(
                $this->renderView(
                    'emails/contact.html.twig', compact('message')
                ),
                'text/html'
            );
            $mailer->send($msg);
            return $this->redirect('feedback');
        }

        return $this->render('mailing/contactUs.html.twig',[
            "form"=>$mailform->createView()
        ]);
    }
    /**
     * @Route("/feedback", name="feedback")
     */
    public function feedback(){
        return $this->render('mailing/feedback.html.twig');
    }
}
