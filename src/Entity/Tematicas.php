<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tematicas
 *
 * @ORM\Table(name="tematicas")
 * @ORM\Entity
 */
class Tematicas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="horas_dia", type="integer", nullable=true)
     */
    private $horasDia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="almuerzo", type="integer", nullable=true)
     */
    private $almuerzo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hora_tarde", type="integer", nullable=true)
     */
    private $horaTarde;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hora_inicio", type="time", nullable=true)
     */
    private $horaInicio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hora_fin", type="time", nullable=true)
     */
    private $horaFin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getHorasDia(): ?int
    {
        return $this->horasDia;
    }

    public function setHorasDia(?int $horasDia): self
    {
        $this->horasDia = $horasDia;

        return $this;
    }

    public function getAlmuerzo(): ?int
    {
        return $this->almuerzo;
    }

    public function setAlmuerzo(?int $almuerzo): self
    {
        $this->almuerzo = $almuerzo;

        return $this;
    }

    public function getHoraTarde(): ?int
    {
        return $this->horaTarde;
    }

    public function setHoraTarde(?int $horaTarde): self
    {
        $this->horaTarde = $horaTarde;

        return $this;
    }

    public function getHoraInicio(): ?\DateTimeInterface
    {
        return $this->horaInicio;
    }

    public function setHoraInicio(?\DateTimeInterface $horaInicio): self
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    public function getHoraFin(): ?\DateTimeInterface
    {
        return $this->horaFin;
    }

    public function setHoraFin(?\DateTimeInterface $horaFin): self
    {
        $this->horaFin = $horaFin;

        return $this;
    }


}
