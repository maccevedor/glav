<?php

namespace GlavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturaDetalle
 *
 * @ORM\Table(name="FacturaDetalle", indexes={@ORM\Index(name="FK_FacturaDetalle_Factura", columns={"id_factura"}),@ORM\Index(name="FK_Factura_Servicio", columns={"id_servicio"})})
 * @ORM\Entity(repositoryClass="GlavBundle\Entity\FacturaDetalleRepository")
 */
class FacturaDetalle
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
     * @var \Factura
     *
     * @ORM\ManyToOne(targetEntity="Factura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_factura", referencedColumnName="id")
     * })
     */
    private $id_factura;
    
    
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
     * @var string
     *
     * @ORM\Column(name="cantidad", type="string", length=255)
     */
    
    
    private $cantidad;
    
    
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
     * @return FacturaDetalle
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
     * Set id_servicio
     *
     * @param integer $idServicio
     * @return FacturaDetalle
     */
    public function setIdServicio($idServicio)
    {
        $this->id_servicio = $idServicio;

        return $this;
    }

    /**
     * Get id_servicio
     *
     * @return integer 
     */
    public function getIdServicio()
    {
        return $this->id_servicio;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return FacturaDetalle
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return FacturaDetalle
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

    /**
     * Set iva
     *
     * @param string $iva
     * @return FacturaDetalle
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return string 
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set total
     *
     * @param string $total
     * @return FacturaDetalle
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return FacturaDetalle
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
     * @return FacturaDetalle
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
     * Set id_factura
     *
     * @param \GlavBundle\Entity\Factura $idFactura
     * @return FacturaDetalle
     */
    public function setIdFactura(\GlavBundle\Entity\Factura $idFactura = null)
    {
        $this->id_factura = $idFactura;

        return $this;
    }

    /**
     * Get id_factura
     *
     * @return \GlavBundle\Entity\Factura 
     */
    public function getIdFactura()
    {
        return $this->id_factura;
    }
}
