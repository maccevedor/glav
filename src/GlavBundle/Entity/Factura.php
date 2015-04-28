<?php

namespace GlavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GlavBundle\Entity\FacturaRepository")
 */
class Factura
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
     * @ORM\Column(name="id_factura_detalle", type="integer", length=50)
     */
    
    
    
    private $id_factura_detalle;
    
        /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=255)
     */
    
    
    private $valor;
    
        /**
     * @var string
     *
     * @ORM\Column(name="iva", type="string", length=255)
     */
    
    
    private $iva;
    
    /**
     * @var string
     *
     * @ORM\Column(name="total", type="string", length=255)
     */
    
    
    private $total;
    
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

}


