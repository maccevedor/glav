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

}


