<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServicesController extends AbstractController
{
    #[Route('/services', name: 'app_coiff')]
    public function index(): Response
    {
        return $this->render('services/coiff.html.twig', [
            'controller_name' => 'ServicesController',
        ]);
    }
    #[Route('/color', name: 'app_color')]
    public function color(): Response
    {
        return $this->render('services/color.html.twig', [
            'controller_name' => 'ServicesController',
        ]);
    }
    
    #[Route('/makeup', name:'app_makeup')]
    public function makeup(): Response
    {
        return $this->render('services/makeup.html.twig',[

        ]);
    }
}
