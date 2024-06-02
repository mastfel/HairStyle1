<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MentionsController extends AbstractController
{
    #[Route('/mentions', name: 'app_mentions')]
    public function mention(): Response
    {
        return $this->render('mentions/mentions.html.twig', [
            'controller_name' => 'MentionsController',
        ]);
    }

    #[Route('/conditions', name:'app_conditons')]
    
        public function condition():Response
    {
        return $this->render('mentions/conditions.html.twig',[

        ]);
    }
    
}
