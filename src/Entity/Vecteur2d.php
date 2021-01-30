<?php

namespace App\Entity;

use App\Repository\Vecteur2dRepository;
use Doctrine\ORM\Mapping as ORM;
use PhpParser\Node\Scalar\String_;

/**
 * @ORM\Entity(repositoryClass=Vecteur2dRepository::class)
 */
class Vecteur2d
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Scalaire::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $grandeur;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $direction;

    /**
     * @ORM\Column(type="integer")
     */
    private $sens;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $color;

    private static $nameIndex = 0;
    private static $colorIndex = 0;

    /**
     * Génère une couleur hexadécimal
     *
     * @return String
     */
    private static function generateColor ():String
    {
        $color = ['r' => '00', 'g' => '00', 'b' => '00'];

        $colorIndex = match (self::$colorIndex % 3) {
            0 => 'r',
            1 => 'g',
            2 => 'b',
        };

        $color[$colorIndex] = ceil(self::$colorIndex / 3) * 10;
        self::$colorIndex++;

        return '#' . $color['r'] . $color['g'] . $color['b'];
    }

    /**
     * Génère un nom de vecteur d'une lettre
     *
     * @return String
     */
    private static function generateName ():String
    {
        return range('A', 'Z')[++self::$nameIndex];
    }

    /**
     * Vecteur2d constructor.
     */
    public function __construct()
    {
        $this->setName(self::generateName());
        $this->setColor(self::generateColor());
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGrandeur(): ?Scalaire
    {
        return $this->grandeur;
    }

    public function setGrandeur(?Scalaire $grandeur): self
    {
        $this->grandeur = $grandeur;

        return $this;
    }

    public function getDirection(): ?float
    {
        return $this->direction;
    }

    public function setDirection(?float $direction): self
    {
        $this->direction = $direction;

        return $this;
    }

    public function getSens(): ?int
    {
        return $this->sens;
    }

    public function setSens(int $sens): self
    {
        $this->sens = $sens;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }
}
