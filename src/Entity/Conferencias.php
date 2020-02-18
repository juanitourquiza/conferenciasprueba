<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conferencias
 *
 * @ORM\Table(name="conferencias", indexes={@ORM\Index(name="fk_conferencias_tematicas_idx", columns={"tematicas_id"})})
 * @ORM\Entity
 */
class Conferencias
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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duracion", type="integer", nullable=true)
     */
    private $duracion;

    /**
     * @var \Tematicas
     *
     * @ORM\ManyToOne(targetEntity="Tematicas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tematicas_id", referencedColumnName="id")
     * })
     */
    private $tematicas;

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

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getDuracion(): ?int
    {
        return $this->duracion;
    }

    public function setDuracion(?int $duracion): self
    {
        $this->duracion = $duracion;

        return $this;
    }

    public function getTematicas(): ?Tematicas
    {
        return $this->tematicas;
    }

    public function setTematicas(?Tematicas $tematicas): self
    {
        $this->tematicas = $tematicas;

        return $this;
    }


}
