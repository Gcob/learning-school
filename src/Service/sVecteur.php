<?php


namespace App\Service;


use App\Classes\Vecteur;
use JetBrains\PhpStorm\Pure;
use Twig\Environment;

class sVecteur
{
    private array $vecteurs = [];


    public function __construct (
        private Environment $twig
    ){

    }

    /**
     * @return array
     */
    public function getVecteurs(): array
    {
        return $this->vecteurs;
    }

    /**
     * @param array $vecteurs
     */
    public function setVecteurs(array $vecteurs): void
    {
        $this->vecteurs = $vecteurs;
    }

    /**
     * @param Vecteur $vecteur
     */
    public function addVecteur(Vecteur $vecteur): void
    {
        $this->vecteurs[] = $vecteur;
    }

    public function getVecteurToString(Vecteur $vecteur)
    {
        return $this->twig->render('_components/vecteurToString.html.twig', [
            'vecteur' => $vecteur
        ]);
    }

    public function getVecteursToString ()
    {
        $vecteursHtml = [];

        foreach ($this->getVecteurs() as $vecteur)
        {
            $vecteursHtml[] = $this->getVecteurToString($vecteur);
        }

        return $vecteursHtml;
    }

    public function getVecteursResultante ()
    {
        return $this->twig->render('_components/vecteursResultante.html.twig', [
            'sVecteur' => $this
        ]);
    }

    public function getVecteurPoint2Pos (Vecteur $v)
    {
        $point = ['x' => 0, 'y' => 0, 'trueAngle' => 0];

        $degree = match ($v->getSens())
        {
            1 => 360 - $v->getDirection(),
            2 => 270 + $v->getDirection(),
            3 => 270 - $v->getDirection(),
            4 => 180 + $v->getDirection(),
            5 => 180 - $v->getDirection(),
            6 => 90 + $v->getDirection(),
            7 => 90 - $v->getDirection(),
            default => $v->getDirection(),
        };

        $point['x'] = (cos(deg2rad($degree)) * $v->getGrandeur());
        $point['y'] = (sin(deg2rad($degree)) * $v->getGrandeur());
        $point['trueAngle'] = $degree;

        /*
        if($v->getSens() % 2 == 1)
        {
            $point['x'] = (cos(deg2rad($degree)) * $v->getGrandeur());
            $point['y'] = (sin(deg2rad($degree)) * $v->getGrandeur());
        }
        else
        {
            $point['x'] = (sin(deg2rad($degree)) * $v->getGrandeur());
            $point['y'] = (cos(deg2rad($degree)) * $v->getGrandeur());
        }
        */

        return $point;
    }
}