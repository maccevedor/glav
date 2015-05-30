<?php

namespace GlavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestamo
 *
 * @ORM\Table(name="Prestamo", indexes={@ORM\Index(name="FK_Prestamo_Servicio", columns={"id_servicio"}),@ORM\Index(name="FK_Servicio_Empleado", columns={"id_empleado"})})
 * @ORM\Entity(repositoryClass="GlavBundle\Entity\PrestamoRepository")
 */
class Prestamo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=50, nullable=true)
     */
    
    private $hash;
    
    
    /**
     * @var \Servicio
     *
     * @ORM\ManyToOne(targetEntity="Servicio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_servicio", referencedColumnName="id")
     * })
     */
    
    
    private $id_servicio;
    
    /**
     * @var \Empleado
     *
     * @ORM\ManyToOne(targetEntity="Empleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empleado", referencedColumnName="id")
     * })
     */
    
    
    private $id_empleado;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=255)
     */
    
    
    private $valor;
    
    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    
    
    private $observacion;
      
    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado = 1;
    
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;
    
    function __construct(){
        $this->hash=md5(time());
        $this->fecha =  new \DateTime('now');

    }

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
     * Set hash
     *
     * @param string $hash
     * @return Prestamo
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string 
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Prestamo
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Prestamo
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

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Prestamo
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set id_servicio
     *
     * @param \GlavBundle\Entity\Servicio $idServicio
     * @return Prestamo
     */
    public function setIdServicio(\GlavBundle\Entity\Servicio $idServicio = null)
    {
        $this->id_servicio = $idServicio;

        return $this;
    }

    /**
     * Get id_servicio
     *
     * @return \GlavBundle\Entity\Servicio 
     */
    public function getIdServicio()
    {
        return $this->id_servicio;
    }

    /**
     * Set id_empleado
     *
     * @param \GlavBundle\Entity\Empleado $idEmpleado
     * @return Prestamo
     */
    public function setIdEmpleado(\GlavBundle\Entity\Empleado $idEmpleado = null)
    {
        $this->id_empleado = $idEmpleado;

        return $this;
    }

    /**
     * Get id_empleado
     *
     * @return \GlavBundle\Entity\Empleado 
     */
    public function getIdEmpleado()
    {
        return $this->id_empleado;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return Prestamo
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }
}
