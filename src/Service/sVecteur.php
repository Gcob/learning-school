<?php


namespace App\Service;


use App\Classes\Vecteur;
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

    public function getVecteursToString (array $vecteurs)
    {
        $vecteursHtml = [];

        foreach ($vecteurs as $vecteur)
        {
            $vecteursHtml[] = $this->getVecteurToString($vecteur);
        }

        return $vecteursHtml;
    }
}