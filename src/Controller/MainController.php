<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(): Response
    {
        $liens = [
            'Vecteur/test' => $this->generateUrl('vecteurTest'),
        ];

        return $this->render('main/index.html.twig', [
            'liens' => $liens
        ]);
    }
}
