<?php

namespace App\Entity;

use App\Repository\AgentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AgentRepository::class)]
class Agent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    public ?int $id = null;

    #[ORM\Column(length: 255)]
    public ?string $nume = null;

    #[ORM\Column(length: 255)]
    public ?string $prenume = null;

    #[ORM\Column(length: 255)]
    public ?string $patronimic = null;

    #[ORM\Column(length: 255)]
    public ?string $adresa = null;

    #[ORM\Column(length: 255)]
    public ?string $telefon = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNume(): ?string
    {
        return $this->nume;
    }

    public function setNume(string $nume): self
    {
        $this->nume = $nume;

        return $this;
    }

    public function getPrenume(): ?string
    {
        return $this->prenume;
    }

    public function setPrenume(string $prenume): self
    {
        $this->prenume = $prenume;

        return $this;
    }

    public function getPatronimic(): ?string
    {
        return $this->patronimic;
    }

    public function setPatronimic(string $patronimic): self
    {
        $this->patronimic = $patronimic;

        return $this;
    }

    public function getAdresa(): ?string
    {
        return $this->adresa;
    }

    public function setAdresa(string $adresa): self
    {
        $this->adresa = $adresa;

        return $this;
    }

    public function getTelefon(): ?string
    {
        return $this->telefon;
    }

    public function setTelefon(string $telefon): self
    {
        $this->telefon = $telefon;

        return $this;
    }
}
