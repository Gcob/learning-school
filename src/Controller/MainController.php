<?php

namespace App\Controller;

use App\Classes\Vecteur;
use App\Service\sVecteur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'main')]
    public function index(sVecteur $sVecteur): Response
    {
        $v1 = new Vecteur(105, 25, Vecteur::CADRAN_II_Y);
        $v2 = new Vecteur(33, 20, Vecteur::CADRAN_II_X);
        $v3 = new Vecteur(180, 75, Vecteur::CADRAN_I_X);

        $sVecteur
            ->addVecteur($v1)
            ->addVecteur($v2)
            ->addVecteur($v3)
        ;

        dump($v1);

        return $this->render('main/index.html.twig', [
            'sVecteur' => $sVecteur,
        ]);
    }
}
