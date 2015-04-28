<?php

namespace GlavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Automotor
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GlavBundle\Entity\AutomotorRepository")
 */
class Automotor
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
     * @var string
     *
     * @ORM\Column(name="id_tipo_automotor", type="string", length=255)
     */
    
    
    private $id_tipo_automotor;
    
    /**
     * @var string
     *
     * @ORM\Column(name="tipo_rubro", type="string", length=255)
     */
    private $tipo_rubro;
    
    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=250, nullable=true)
     */
    private $modelo;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", length=200, nullable=true)
     */
    private $matricula;

      
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


