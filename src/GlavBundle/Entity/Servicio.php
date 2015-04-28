<?php

namespace GlavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicio
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GlavBundle\Entity\ServicioRepository")
 */
class Servicio
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
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer", length=50)
     */
    
    
    private $id_usuario;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cliente", type="integer", length=50)
     */
    
    
    private $id_cliente;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id_empleado", type="integer", length=50)
     */
    
    
    private $id_empleado;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id_automotor", type="integer", length=50)
     */
    
    
    private $id_automotor;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id_estado_servicio", type="integer", length=50)
     */
    
    private $id_estado_servicio;
    
    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    
    
    private $observacion;
    
        
        
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_servicio", type="datetime", nullable=true)
     */
    private $fecha_servicio;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_entrega", type="datetime", nullable=true)
     */
    private $fecha_entrega;

      
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
     * @return Servicio
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
     * Set id_usuario
     *
     * @param integer $idUsuario
     * @return Servicio
     */
    public function setIdUsuario($idUsuario)
    {
        $this->id_usuario = $idUsuario;

        return $this;
    }

    /**
     * Get id_usuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set id_cliente
     *
     * @param integer $idCliente
     * @return Servicio
     */
    public function setIdCliente($idCliente)
    {
        $this->id_cliente = $idCliente;

        return $this;
    }

    /**
     * Get id_cliente
     *
     * @return integer 
     */
    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    /**
     * Set id_empleado
     *
     * @param integer $idEmpleado
     * @return Servicio
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->id_empleado = $idEmpleado;

        return $this;
    }

    /**
     * Get id_empleado
     *
     * @return integer 
     */
    public function getIdEmpleado()
    {
        return $this->id_empleado;
    }

    /**
     * Set id_automotor
     *
     * @param integer $idAutomotor
     * @return Servicio
     */
    public function setIdAutomotor($idAutomotor)
    {
        $this->id_automotor = $idAutomotor;

        return $this;
    }

    /**
     * Get id_automotor
     *
     * @return integer 
     */
    public function getIdAutomotor()
    {
        return $this->id_automotor;
    }

    /**
     * Set id_estado_servicio
     *
     * @param integer $idEstadoServicio
     * @return Servicio
     */
    public function setIdEstadoServicio($idEstadoServicio)
    {
        $this->id_estado_servicio = $idEstadoServicio;

        return $this;
    }

    /**
     * Get id_estado_servicio
     *
     * @return integer 
     */
    public function getIdEstadoServicio()
    {
        return $this->id_estado_servicio;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Servicio
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
     * Set fecha_servicio
     *
     * @param \DateTime $fechaServicio
     * @return Servicio
     */
    public function setFechaServicio($fechaServicio)
    {
        $this->fecha_servicio = $fechaServicio;

        return $this;
    }

    /**
     * Get fecha_servicio
     *
     * @return \DateTime 
     */
    public function getFechaServicio()
    {
        return $this->fecha_servicio;
    }

    /**
     * Set fecha_entrega
     *
     * @param \DateTime $fechaEntrega
     * @return Servicio
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fecha_entrega = $fechaEntrega;

        return $this;
    }

    /**
     * Get fecha_entrega
     *
     * @return \DateTime 
     */
    public function getFechaEntrega()
    {
        return $this->fecha_entrega;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Servicio
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
     * @return Servicio
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
}
