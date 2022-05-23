<?php

namespace App\Entity;

use App\Repository\ReservationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationsRepository::class)]
class Reservations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $idTheme;

    #[ORM\Column(type: 'integer')]
    private $idClient;

    #[ORM\Column(type: 'date')]
    private $dateReservee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTheme(): ?int
    {
        return $this->idTheme;
    }

    public function setIdTheme(int $idTheme): self
    {
        $this->idTheme = $idTheme;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(int $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getDateReservee(): ?\DateTimeInterface
    {
        return $this->dateReservee;
    }

    public function setDateReservee(\DateTimeInterface $dateReservee): self
    {
        $this->dateReservee = $dateReservee;

        return $this;
    }
}
