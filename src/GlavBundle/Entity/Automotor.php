REATE TABLE IF NOT EXISTS `automotor` (
  `idautomotor` int(11) NOT NULL AUTO_INCREMENT,
  `idtipoautomotor` int(11) NOT NULL,
  `modelo` int(11) NOT NULL DEFAULT '0',
  `matricula` varchar(45) NOT NULL,
  `hash` varchar(256) DEFAULT NULL,
  `firma` varchar(1024) DEFAULT NULL,

<?php

namespace GlavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rubro
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GlavBundle\Entity\RubroRepository")
 */
class Rubro
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    
    
    private $nombre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="tipo_rubro", type="string", length=255)
     */
    private $tipo_rubro;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=45, nullable=true)
     */
    private $descripcion;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=200, nullable=true)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="iva", type="string", length=200, nullable=true)
     */
    private $iva;
    

    
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


