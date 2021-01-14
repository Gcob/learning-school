<?php


namespace App\Classes;


class Vecteur
{
    // Le premier sens est celui de l'axe des X, l'autre des Y et on compte dans le sens anti horaire
    public const SENS_1_CADRAN_1 = 1;
    public const SENS_2_CADRAN_1 = 2;
    public const SENS_1_CADRAN_2 = 3;
    public const SENS_2_CADRAN_2 = 4;
    public const SENS_1_CADRAN_3 = 5;
    public const SENS_2_CADRAN_3 = 6;
    public const SENS_1_CADRAN_4 = 7;
    public const SENS_2_CADRAN_4 = 8;

    private string $name = '';

    private static int $nameCount = 0;

    public static function getNewName ()
    {
        return chr(++self::$nameCount + 64);
    }

    public function __construct(
        // La valeur associée à l'unité
        private float   $grandeur,

        // L'unité de la grandeur
        private string  $unites,

        // La direction est l'angle en degrées
        private float   $direction = 0.0,

        //Le sens comporte 8 options (2 par cadran)
        private int     $sens = self::SENS_1_CADRAN_1
    ){
        if($this->sens < self::SENS_1_CADRAN_1 || $this->sens > self::SENS_2_CADRAN_4)
        {
            throw new \Exception('Le sens doit être précisé');
        }
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
     * @return string
     */
    public function getUnites(): string
    {
        return $this->unites;
    }

    /**
     * @param string $unites
     */
    public function setUnites(string $unites): void
    {
        $this->unites = $unites;
    }

    /**
     * @return float
     */
    public function getDirection(): float
    {
        return $this->direction;
    }

    /**
     * @param float $direction
     */
    public function setDirection(float $direction): void
    {
        $this->direction = $direction;
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
        $this->sens = $sens;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        if(!$this->name)
            $this->name = self::getNewName();

        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}