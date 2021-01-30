<?php

namespace App\Controller;

use App\Entity\Scalaire;
use App\Entity\Vecteur2d;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VecteurController extends AbstractController
{
    #[Route('/vecteur/test', name: 'vecteurTest')]
    public function index(): Response
    {
        $vecteurs = [];

        for ($i=0;$i<8;$i++)
        {
            $v1 = new Vecteur2d();
            $v1
                ->setGrandeur(new Scalaire($i * 0.1 + 10, 'N'))
                ->setDirection($i * 5)
                ->setSens($i)
            ;
            $vecteurs[] = $v1;
        }

        return $this->render('vecteur/vecteur-test.html.twig', [
            'vecteurs' => $vecteurs
        ]);
    }
}
