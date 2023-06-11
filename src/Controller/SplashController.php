<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SplashController extends AbstractController
{
    #[Route('/', name: 'app_splash')]
    public function index(): Response
    {
        return $this->render('splash/index.html.twig', [
            'controller_name' => 'SplashController',
            'section_title' => 'Inicio',
            'section_subtitle' => 'Inicio',
        ]);
    }
}
