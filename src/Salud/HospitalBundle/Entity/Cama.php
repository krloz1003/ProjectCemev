<?php

namespace Salud\HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cama
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cama
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
     * @ORM\Column(name="tipoCama", type="string", length=255)
     */
    private $tipoCama;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Salud\HospitalBundle\Entity\Servicio")
     */
    private $servicio;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Salud\HospitalBundle\Entity\Especialidad")
     */
    private $especialidad;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Salud\HospitalBundle\Entity\Area")
     */
    private $area;


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
     * @return Cama
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
     * @return Cama
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
     * Set tipoCama
     *
     * @param string $tipoCama
     * @return Cama
     */
    public function setTipoCama($tipoCama)
    {
        $this->tipoCama = $tipoCama;
    
        return $this;
    }

    /**
     * Get tipoCama
     *
     * @return string 
     */
    public function getTipoCama()
    {
        return $this->tipoCama;
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
     * Set especialidad
     *
     * @param Salud\HospitalBundle\Entity\Especialidad $especialidad
     */
    public function setEspecialidad(\Salud\HospitalBundle\Entity\Especialidad $especialidad)
    {
        $this->especialidad = $especialidad;
    
        return $this;
    }

    /**
     * Get especialidad
     *
     * @return Salud\HospitalBundle\Entity\Especialidad
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Set area
     *
     * @param Salud\HospitalBundle\Entity\Area $area
     */
    public function setArea(\Salud\HospitalBundle\Entity\Area $area)
    {
        $this->area = $area;
    
        return $this;
    }

    /**
     * Get area
     *
     * @return Salud\HospitalBundle\Entity\Area
     */
    public function getArea()
    {
        return $this->area;
    }
}
