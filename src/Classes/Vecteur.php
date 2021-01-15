<?php
/**
 * L'objectif de cette classe est de gérer les valeurs en lien avec un vecteur.
 * Pour les logiques et calculs, il faut employer le service sVecteurs.
 */

namespace App\Classes;


class Vecteur
{
    //Remarquez qu<on tourne en sens anti-horaire
    public const CADRAN_I_X = 1;
    public const CADRAN_I_Y = 2;
    public const CADRAN_II_Y = 3;
    public const CADRAN_II_X = 4;
    public const CADRAN_III_X = 5;
    public const CADRAN_III_Y = 6;
    public const CADRAN_IV_Y = 7;
    public const CADRAN_IV_X = 8;

    private static int $nameCount = 0;

    public static function generateName () : string
    {
        return 'V' . ++self::$nameCount;
    }

    private static int $colorIndex = 0;

    public static function generateCouleur () : string
    {
        $colorValues = ['r' => 0, 'g' => 0, 'b' => 0];

        switch(self::$colorIndex++ % 3)
        {
            case 0:
                $colorValues['r'] = 255 - self::$colorIndex * 10;
                break;
            case 1:
                $colorValues['g'] = 255 - self::$colorIndex * 10;
                break;
            case 2:
                $colorValues['b'] = 255 - self::$colorIndex * 10;
                break;
        }

        $color = sprintf('rgb(%s, %s, %s)', $colorValues['r'], $colorValues['g'], $colorValues['b']);

        return $color;
    }

    private string $name = '';
    private string $couleur = '';

    /**
     * @var Point
     */
    private Point $pointAbsoluCadranIX;
    private Point $pointRelatifCadranIX;


    public function __construct(
        private float $grandeur,
        private float $angle = 0.0,
        private int $sens = self::CADRAN_I_X,
        private float $multiplicateur = 1.0
    ){
        $this->setSens($this->sens);//pour validation
        $this->name = self::generateName();
        $this->couleur = self::generateCouleur();
    }

    /**
     * @return float
     */
    public function getGrandeur(): float
    {
        return $this->grandeur;
    }

    /**
     * @param float $grandeur
     */
    public function setGrandeur(float $grandeur): void
    {
        $this->grandeur = $grandeur;
    }

    /**
     * @return float
     */
    public function getAngle(): float
    {
        return $this->angle;
    }

    /**
     * @param float $angle
     */
    public function setAngle(float $angle): void
    {
        $this->angle = $angle;
    }

    /**
     * @return int
     */
    public function getSens(): int
    {
        return $this->sens;
    }

    /**
     * @param int $sens
     */
    public function setSens(int $sens): void
    {
        if ($sens < self::CADRAN_I_X || $sens > self::CADRAN_IV_X)
        {
            throw new \Error("Cadran innexistant.");
        }

        $this->sens = $sens;
    }

    /**
     * @return float
     */
    public function getMultiplicateur(): float
    {
        return $this->multiplicateur;
    }

    /**
     * @param float $multiplicateur
     */
    public function setMultiplicateur(float $multiplicateur): void
    {
        $this->multiplicateur = $multiplicateur;
    }

    /**
     * @return string
     *
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     */
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @return array
     */
    public function getAbsolutePosition(): array
    {
        return $this->absolutePosition;
    }

    /**
     * @param array $absolutePosition
     */
    public function setAbsolutePosition(array $absolutePosition): void
    {
        $this->absolutePosition = $absolutePosition;
    }
}