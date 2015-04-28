<?php

namespace GlavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrlCiudad
 *
 * @ORM\Table(name="GrlCiudad", indexes={@ORM\Index(name="id_grl_region", columns={"id_grl_region"})})
 * @ORM\Entity
 */
class GrlCiudad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_grl_region", type="integer", nullable=true)
     */
    private $idGrlRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=15, nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=27, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="latitud", type="string", length=15, nullable=true)
     */
    private $latitud;

    /**
     * @var string
     *
     * @ORM\Column(name="longitud", type="string", length=15, nullable=true)
     */
    private $longitud;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=15, nullable=true)
     */
    private $estado;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idGrlRegion
     *
     * @param integer $idGrlRegion
     * @return GrlCiudad
     */
    public function setIdGrlRegion($idGrlRegion)
    {
        $this->idGrlRegion = $idGrlRegion;

        return $this;
    }

    /**
     * Get idGrlRegion
     *
     * @return integer 
     */
    public function getIdGrlRegion()
    {
        return $this->idGrlRegion;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return GrlCiudad
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return GrlCiudad
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set latitud
     *
     * @param string $latitud
     * @return GrlCiudad
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud
     *
     * @return string 
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set longitud
     *
     * @param string $longitud
     * @return GrlCiudad
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return string 
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return GrlCiudad
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }
    public function __toString()
    {
        return $this->getNombre();
    }
}    