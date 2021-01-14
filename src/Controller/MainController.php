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
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 7.5, Vecteur::SENS_1_CADRAN_1));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 22.5, Vecteur::SENS_1_CADRAN_1));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 37.5, Vecteur::SENS_1_CADRAN_1));

        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 37.5, Vecteur::SENS_2_CADRAN_1));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 22.5, Vecteur::SENS_2_CADRAN_1));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 7.5, Vecteur::SENS_2_CADRAN_1));

        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 7.5, Vecteur::SENS_1_CADRAN_2));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 22.5, Vecteur::SENS_1_CADRAN_2));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 37.5, Vecteur::SENS_1_CADRAN_2));

        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 37.5, Vecteur::SENS_2_CADRAN_2));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 22.5, Vecteur::SENS_2_CADRAN_2));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 7.5, Vecteur::SENS_2_CADRAN_2));

        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 7.5, Vecteur::SENS_1_CADRAN_3));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 22.5, Vecteur::SENS_1_CADRAN_3));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 37.5, Vecteur::SENS_1_CADRAN_3));

        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 37.5, Vecteur::SENS_2_CADRAN_3));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 22.5, Vecteur::SENS_2_CADRAN_3));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 7.5, Vecteur::SENS_2_CADRAN_3));

        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 7.5, Vecteur::SENS_1_CADRAN_4));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 22.5, Vecteur::SENS_1_CADRAN_4));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 37.5, Vecteur::SENS_1_CADRAN_4));

        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 37.5, Vecteur::SENS_2_CADRAN_4));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 22.5, Vecteur::SENS_2_CADRAN_4));
        $sVecteur->addVecteur(new Vecteur(25.0, 'm', 7.5, Vecteur::SENS_2_CADRAN_4));

        return $this->render('main/index.html.twig', [
            'sVecteur' => $sVecteur,
        ]);
    }
}
