<?php

namespace App\Entity;

use App\Repository\ScalaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScalaireRepository::class)
 */
class Scalaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $grandeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $unite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGrandeur(): ?float
    {
        return $this->grandeur;
    }

    public function setGrandeur(float $grandeur): self
    {
        $this->grandeur = $grandeur;

        return $this;
    }

    public function getUnite(): ?string
    {
        return $this->unite;
    }

    public function setUnite(?string $unite): self
    {
        $this->unite = $unite;

        return $this;
    }
}
