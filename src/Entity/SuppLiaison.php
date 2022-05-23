<?php

namespace App\Entity;

use App\Repository\SuppLiaisonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SuppLiaisonRepository::class)]
class SuppLiaison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $idReservation;

    #[ORM\Column(type: 'integer')]
    private $idSupplement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdReservation(): ?int
    {
        return $this->idReservation;
    }

    public function setIdReservation(int $idReservation): self
    {
        $this->idReservation = $idReservation;

        return $this;
    }

    public function getIdSupplement(): ?int
    {
        return $this->idSupplement;
    }

    public function setIdSupplement(int $idSupplement): self
    {
        $this->idSupplement = $idSupplement;

        return $this;
    }
}
