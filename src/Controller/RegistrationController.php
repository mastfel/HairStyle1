<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistartionFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class RegistrationController extends AbstractController
{
    
    #[Route('/registration', name: 'app_registration')]
    public function registration(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();

        
        $form = $this->createForm(RegistartionFormType::class, $user)
            ->handleRequest($request);

        
        if($form->isSubmitted() && $form->isValid()) {
            $user->setRoles(['ROLE_USER']);
           

            $user->setPassword($passwordHasher->hashPassword($user, $user->getPassword()));

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', "Vous  êtes inscrit avec succès !");
            return $this->redirectToRoute('app_default');
        }

        return $this->render("registration/registration.html.twig", [
            'form' => $form->createView()
        ]);
        
    }
}
