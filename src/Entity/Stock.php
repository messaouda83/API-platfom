<?php

namespace App\Entity;

use App\Repository\StockRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockRepository::class)]
class Stock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $ListProduits;

    #[ORM\Column(type: 'string', length: 255)]
    private $IDProduit;

    #[ORM\Column(type: 'string', length: 255)]
    private $Produits;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getListProduits(): ?string
    {
        return $this->ListProduits;
    }

    public function setListProduits(string $ListProduits): self
    {
        $this->ListProduits = $ListProduits;

        return $this;
    }

    public function getIDProduit(): ?string
    {
        return $this->IDProduit;
    }

    public function setIDProduit(string $IDProduit): self
    {
        $this->IDProduit = $IDProduit;

        return $this;
    }

    public function getProduits(): ?string
    {
        return $this->Produits;
    }

    public function setProduits(string $Produits): self
    {
        $this->Produits = $Produits;

        return $this;
    }
}
