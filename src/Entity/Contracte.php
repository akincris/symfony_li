<?php

namespace App\Entity;

use App\Repository\ContracteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContracteRepository::class)]
class Contracte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $data_incheierii = null;

    #[ORM\Column]
    private ?int $suma_asig = null;

    #[ORM\Column]
    private ?int $rata_tarif = null;

    #[ORM\Column]
    private ?int $cod_sucursala = null;

    #[ORM\Column]
    private ?int $tip_cod = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataIncheierii(): ?\DateTimeInterface
    {
        return $this->data_incheierii;
    }

    public function setDataIncheierii(\DateTimeInterface $data_incheierii): self
    {
        $this->data_incheierii = $data_incheierii;

        return $this;
    }

    public function getSumaAsig(): ?int
    {
        return $this->suma_asig;
    }

    public function setSumaAsig(int $suma_asig): self
    {
        $this->suma_asig = $suma_asig;

        return $this;
    }

    public function getRataTarif(): ?int
    {
        return $this->rata_tarif;
    }

    public function setRataTarif(int $rata_tarif): self
    {
        $this->rata_tarif = $rata_tarif;

        return $this;
    }

    public function getCodSucursala(): ?int
    {
        return $this->cod_sucursala;
    }

    public function setCodSucursala(int $cod_sucursala): self
    {
        $this->cod_sucursala = $cod_sucursala;

        return $this;
    }

    public function getTipCod(): ?int
    {
        return $this->tip_cod;
    }

    public function setTipCod(int $tip_cod): self
    {
        $this->tip_cod = $tip_cod;

        return $this;
    }
}
