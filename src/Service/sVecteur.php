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
    public function setVecteurs(array $vecteurs): sVecteur
    {
        $this->vecteurs = $vecteurs;
        return $this;
    }

    /**
     * @param Vecteur $vecteur
     */
    public function addVecteur(Vecteur $vecteur): sVecteur
    {
        $this->vecteurs[] = $vecteur;
        return $this;
    }

    /**
     * @param Vecteur $v
     * @return float
     * 
     * Retourne un angle converti en fonction du CADRAN_I_X
     */
    public function trouverAngleAbsolu (Vecteur $v) : float
    {
        $angleAbsolu = 0.0;

        switch ($v->getSens())
        {
            case Vecteur::CADRAN_I_X:
                $angleAbsolu = $v->getAngle();
                break;
            case Vecteur::CADRAN_I_Y:
                $angleAbsolu = 90 - $v->getAngle();
                break;
            case Vecteur::CADRAN_II_Y:
                $angleAbsolu = 90 + $v->getAngle();
                break;
            case Vecteur::CADRAN_II_X:
                $angleAbsolu = 180 - $v->getAngle();
                break;
            case Vecteur::CADRAN_III_X:
                $angleAbsolu = 180 + $v->getAngle();
                break;
            case Vecteur::CADRAN_III_Y:
                $angleAbsolu = 270 - $v->getAngle();
                break;
            case Vecteur::CADRAN_IV_Y:
                $angleAbsolu = 270 + $v->getAngle();
                break;
            case Vecteur::CADRAN_IV_X:
                $angleAbsolu = 360 - $v->getAngle();
                break;
        }

        return $angleAbsolu;
    }

    /**
     * @param Vecteur $v
     * @return Vecteur
     *
     * Notez que le point x1,y1 sera toujours 0,0 en position absolue.
     */
    public function generateVecteurAbsolutePosition (Vecteur $v) : Vecteur
    {


        return $v;
    }


}