<?php

namespace Salud\HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Especialidad
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Especialidad
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
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Salud\HospitalBundle\Entity\Servicio")
     */
    private $servicio;

    /**
     * @var string
     *
     * @ORM\Column(name="clues", type="string", length=255)
     */
    private $clues;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Especialidad
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Especialidad
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set servicio
     *
     * @param Salud\HospitalBundle\Entity\Servicio $servicio
     */
    public function setServicio(\Salud\HospitalBundle\Entity\Servicio $servicio)
    {
        $this->servicio = $servicio;
    
        return $this;
    }

    /**
     * Get servicio
     *
     * @return Salud\HospitalBundle\Entity\Servicio
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Set clues
     *
     * @param string $clues
     * @return Especialidad
     */
    public function setClues($clues)
    {
        $this->clues = $clues;
    
        return $this;
    }

    /**
     * Get clues
     *
     * @return string 
     */
    public function getClues()
    {
        return $this->clues;
    }
}
