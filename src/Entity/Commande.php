<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $NumCommande;

    #[ORM\Column(type: 'date')]
    private $DateCommande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumCommande(): ?int
    {
        return $this->NumCommande;
    }

    public function setNumCommande(int $NumCommande): self
    {
        $this->NumCommande = $NumCommande;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->DateCommande;
    }

    public function setDateCommande(\DateTimeInterface $DateCommande): self
    {
        $this->DateCommande = $DateCommande;

        return $this;
    }
}
