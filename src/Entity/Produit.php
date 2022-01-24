<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Reference;

    #[ORM\Column(type: 'integer')]
    private $PrixHT;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->Reference;
    }

    public function setReference(string $Reference): self
    {
        $this->Reference = $Reference;

        return $this;
    }

    public function getPrixHT(): ?int
    {
        return $this->PrixHT;
    }

    public function setPrixHT(int $PrixHT): self
    {
        $this->PrixHT = $PrixHT;

        return $this;
    }
}
