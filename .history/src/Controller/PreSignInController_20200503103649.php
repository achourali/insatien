<?php

namespace App\Controller;

use App\Entity\NewCompte;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class PreSignInController extends AbstractController
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
     * @Route("/comfirmation", name="comfirmation")
     */
    public function comfirmation(Request $request){
        return $this->render('default/comfirmation.html.twig',[
            "username"=>$request->get('username')
        ]);
    }
    /** 
    * @Route("/register", name="register")
    */
    public function register(Request $request, EntityManagerInterface $manager){

        $compte=new NewCompte();
        $form=$this->createFormBuilder($compte)
        ->add('firstName',TextType::class,[
            "attr"=>[
                "id"=>"defaultRegisterFormFirstName",
                "class"=>"form-control", 
                "placeholder"=>"First name"
            ]
        ])
        ->add('lastName',TextType::class,[
            "attr"=>[
                "id"=>"defaultRegisterFormLastName",
                "class"=>"form-control", 
                "placeholder"=>"Last name"
            ]
        ])
        ->add('password',PasswordType::class,[
            "attr"=>[
                "id"=>"defaultRegisterFormPassword",
                "class"=>"form-control", 
                "placeholder"=>"Password",
                "aria-describedby"=>"defaultRegisterFormPasswordHelpBlock"
            ]
        ])
       // ->add('ComfirmPassword',PasswordType::class)
        ->add('email',TextType::class,[
            "attr"=>[
                "id"=>"defaultRegisterFormEmail",
                "class"=>"form-control mb-4",
                "placeholder"=>"example@insat.u-carthage.tn"
            ]
        ])
        ->add('RegisterAs',ChoiceType::class,[
            "choices"=>[
                "teacher"=>"teacher",
                "student"=>"student"
            ],"attr"=>[
                "class"=>"browser-default custom-select mb-4"
            ]
        ])
        ->add('sign up',SubmitType::class,[
            "attr"=>[
                "class"=>"btn btn-info my-4 btn-block" 
            ]
        ])
        ->getForm();
        $form.setMethod("POST");
        try {
            $form->handleRequest($request);
        } catch (\Exception $e) {
            echo "failed : ".$e->getMessage();
        }
        
        if($form->isSubmitted() && $form->isValid()){
            $compte->setComfirmation(generate_string($permitted_chars, 6));
            $compte->setTried(0);
            $manager->persist($compte);
            $manager->flush();
            return $this->redirect('/comfirmation?username='.$compte->getFirstName());
        }

        return $this->render('default/register.html.twig',[
            "form"=>$form->createView()
        ]);
        }
        
        function generate_string($input='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', $strength = 16) {
            $input_length = strlen($input);
            $random_string = '';
            for($i = 0; $i < $strength; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }
        return $random_string;
        }
}
?>