<?php

namespace TrabSoc\PacienteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoClasifi
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class HistoClasifi
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
     * @ORM\ManyToOne(targetEntity="TrabSoc\PacienteBundle\Entity\Clasificacion")
     */
    private $clasificacion;
   
    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="TrabSoc\PacienteBundle\Entity\Paciente")
     */
    private $paciente;    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreate", type="datetime")
     */
    private $fechaCreate;


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
     * Set clasificacion
     *
     * @param TrabSoc\PacienteBundle\Entity\Clasificacion $clasificacion
     */
    public function setClasificacion(\TrabSoc\PacienteBundle\Entity\Clasificacion $clasificacion)
    {
        $this->clasificacion = $clasificacion;
    
        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return TrabSoc\PacienteBundle\Entity\Clasificacion
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set paciente
     *
     * @param TrabSoc\PacienteBundle\Entity\Paciente $paciente
     */
    public function setPaciente(\TrabSoc\PacienteBundle\Entity\Paciente $paciente)
    {
        $this->clasificacion = $paciente;
    
        return $this;
    }

    /**
     * Get paciente
     *
     * @return TrabSoc\PacienteBundle\Entity\Paciente
     */
    public function getPaciente()
    {
        return $this->paciente;
    }

    /**
     * Set fechaCreate
     *
     * @param \DateTime $fechaCreate
     * @return HistoClasifi
     */
    public function setFechaCreate($fechaCreate)
    {
        $this->fechaCreate = $fechaCreate;
    
        return $this;
    }

    /**
     * Get fechaCreate
     *
     * @return \DateTime 
     */
    public function getFechaCreate()
    {
        return $this->fechaCreate;
    }
}
