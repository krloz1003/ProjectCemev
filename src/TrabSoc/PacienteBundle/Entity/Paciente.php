<?php

namespace TrabSoc\PacienteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Paciente
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Paciente
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
     * @ORM\Column(name="noExpediente", type="string", length=10)
     */
    private $noExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="curp", type="string", length=18)
     */
    private $curp;

    /**
     * @var string
     *
     * @ORM\Column(name="paterno", type="string", length=255)
     */
    private $paterno;

    /**
     * @var string
     *
     * @ORM\Column(name="materno", type="string", length=255)
     */
    private $materno;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaNac", type="date")
     */
    private $fechaNac;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1)
     */
    private $sexo;

    /**
     * @ORM\ManyToOne(targetEntity="TrabSoc\PacienteBundle\Entity\TipoSanguineo")
     */
    private $tipoSanguineo;

    /**
    * @ORM\ManyToOne(targetEntity="CP\LocationBundle\Entity\Clues")
    */    
    private $clues;

    /**
    * @ORM\OneToMany(targetEntity="TrabSoc\PacienteBundle\Entity\Ingreso", mappedBy="paciente")
    */
    private $ingreso;
    
    public function __toString()
    {
        return $this->getNoExpediente();
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
     * Set noExpediente
     *
     * @param string $noExpediente
     * @return Paciente
     */
    public function setNoExpediente($noExpediente)
    {
        $this->noExpediente = $noExpediente;
    
        return $this;
    }

    /**
     * Get noExpediente
     *
     * @return string 
     */
    public function getNoExpediente()
    {
        return $this->noExpediente;
    }

    /**
     * Set curp
     *
     * @param string $curp
     * @return Paciente
     */
    public function setCurp($curp)
    {
        $this->curp = $curp;
    
        return $this;
    }

    /**
     * Get curp
     *
     * @return string 
     */
    public function getCurp()
    {
        return $this->curp;
    }

    /**
     * Set paterno
     *
     * @param string $paterno
     * @return Paciente
     */
    public function setPaterno($paterno)
    {
        $this->paterno = $paterno;
    
        return $this;
    }

    /**
     * Get paterno
     *
     * @return string 
     */
    public function getPaterno()
    {
        return $this->paterno;
    }

    /**
     * Set materno
     *
     * @param string $materno
     * @return Paciente
     */
    public function setMaterno($materno)
    {
        $this->materno = $materno;
    
        return $this;
    }

    /**
     * Get materno
     *
     * @return string 
     */
    public function getMaterno()
    {
        return $this->materno;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Paciente
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fechaNac
     *
     * @param \DateTime $fechaNac
     * @return Paciente
     */
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;
    
        return $this;
    }

    /**
     * Get fechaNac
     *
     * @return \DateTime 
     */
    public function getFechaNac()
    {
        return $this->fechaNac;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Paciente
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    
        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set ciudad
     *
     * @param TrabSoc\PacienteBundle\Entity\TipoSanguineo $tipoSanguineo
     */
    public function setTipoSanguineo(\TrabSoc\PacienteBundle\Entity\TipoSanguineo $tipoSanguineo)
    {
        $this->tipoSanguineo = $tipoSanguineo;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return TrabSoc\PacienteBundle\Entity\TipoSanguineo
     */
    public function getTipoSanguineo()
    {
        return $this->tipoSanguineo;
    }

    /**
     * Set clues
     *
     * @param CP\LocationBundle\Entity\Clues $clues
     */
    public function setClues(\CP\LocationBundle\Entity\Clues $clues)
    {
        $this->clues = $clues;
    
        return $this;
    }

    /**
     * Get clues
     *
     * @return CP\LocationBundle\Entity\Clues
     */
    public function getClues()
    {
        return $this->clues;
    }    

    /**
     * Set ingreso
     *
     * @param TrabSoc\Pacientebundle\Entity\Ingreso $ingreso
     * @return Paciente
     */
    public function setIngreso(\TrabSoc\Pacientebundle\Entity\Ingreso $ingreso)
    {
        $this->ingreso = $ingreso;
    }

    /**
     * Get ingreso
     *
     * @return text 
     */
    public function getIngreso()
    {
        return $this->ingreso;
    }
}
