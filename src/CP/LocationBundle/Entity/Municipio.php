<?php

namespace CP\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Municipio
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
     * @ORM\ManyToOne(targetEntity="CP\LocationBundle\Entity\Estado")
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="CP\LocationBundle\Entity\Jurisdiccion")
     */
    private $jurisdiccion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_mun", type="string", length=255)
     */
    private $nombreMun;

    public function __toString()
    {
        return $this->getNombreMun();
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
     * Set estado
     *
     * @param CP\LocationBundle\Entity\Estado $estado     
     */
    public function setEstado(\CP\LocationBundle\Entity\Estado $estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return CP\LocationBundle\Entity\Estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set jurisdiccion
     *
     * @param CP\LocationBundle\Entity\Jurisdiccion     
     */
    public function setJurisdiccion(\CP\LocationBundle\Entity\Jurisdiccion $jurisdiccion)
    {
        $this->jurisdiccion = $jurisdiccion;
    
        return $this;
    }

    /**
     * Get jurisdiccion
     *
     * @return CP\LocationBundle\Entity\Jurisdiccion 
     */
    public function getJurisdiccion()
    {
        return $this->jurisdiccion;
    }

    /**
     * Set nombreMun
     *
     * @param string $nombreMun
     * @return Municipio
     */
    public function setNombreMun($nombreMun)
    {
        $this->nombreMun = $nombreMun;
    
        return $this;
    }

    /**
     * Get nombreMun
     *
     * @return string 
     */
    public function getNombreMun()
    {
        return $this->nombreMun;
    }
}
