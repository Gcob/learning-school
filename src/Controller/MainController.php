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
        $sVecteur->addVecteur(new Vecteur(10.0, 'm', 25, Vecteur::SENS_2_CADRAN_1));
        $sVecteur->addVecteur(new Vecteur(15.0, 'm', 5, Vecteur::SENS_1_CADRAN_4));

        return $this->render('main/index.html.twig', [
            'sVecteur' => $sVecteur,
        ]);
    }
}
