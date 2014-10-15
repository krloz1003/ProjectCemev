<?php

namespace TrabSoc\PacienteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingreso
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Ingreso
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
     * @ORM\Column(name="folioIngreso", type="string", length=50)
     */
    private $folioIngreso;    

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="TrabSoc\PacienteBundle\Entity\Paciente", inversedBy="ingreso", cascade={"persist"})
     */
    private $paciente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEntrada", type="datetime")
     */
    private $fechaEntrada;

    /**
     * @var string
     *
     * @ORM\Column(name="viaAdmision", type="string", length=255)
     */
    private $viaAdmision;

    /**
     * @var string
     *
     * @ORM\Column(name="hospitalReferencia", type="string", length=255)
     */
    private $hospitalReferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="noReferencia", type="string", length=50)
     */
    private $noReferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="medicoReferancia", type="string", length=255)
     */
    private $medicoReferancia;

    /**
     * @var string
     *
     * @ORM\Column(name="dxcie10", type="string", length=255)
     */
    private $dxcie10;

    /**
     * @var string
     *
     * @ORM\Column(name="edoIngreso", type="string", length=255)
     */
    private $edoIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="edoSalud", type="string", length=255)
     */
    private $edoSalud;

    /**
     * @var string
     *
     * @ORM\Column(name="motivoEgreso", type="string", length=255)
     */
    private $motivoEgreso;

    /**
     * @var string
     *
     * @ORM\Column(name="medicoEgreso", type="string", length=255)
     */
    private $medicoEgreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEgreso", type="datetime")
     */
    private $fechaEgreso;    

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
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Salud\HospitalBundle\Entity\Cama")
     */
    private $cama;

    /**
     * @var string
     *
     * @ORM\Column(name="movimiento", type="string", length=255)
     */
    private $movimiento;


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
     * Set folioIngreso
     *
     * @param string $folioIngreso
     * @return Ingreso
     */
    public function setFolioIngreso($folioIngreso)
    {
        $this->foioIngreso = $folioIngreso;
    
        return $this;
    }

    /**
     * Get folioIngreso
     *
     * @return string 
     */
    public function getFolioIngreso()
    {
        return $this->folioIngreso;
    }    

    /**
     * Set paciente
     *
     * @param TrabSoc\PacienteBundle\Entity\Paciente $paciente
     */
    public function setPaciente(\TrabSoc\PacienteBundle\Entity\Paciente $paciente = NULL)
    {
        $this->paciente = $paciente;
    
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
     * Set fechaEntrada
     *
     * @param \DateTime $fechaEntrada
     * @return Ingreso
     */
    public function setFechaEntrada($fechaEntrada)
    {
        $this->fechaEntrada = $fechaEntrada;
    
        return $this;
    }

    /**
     * Get fechaEntrada
     *
     * @return \DateTime 
     */
    public function getFechaEntrada()
    {
        return $this->fechaEntrada;
    }

    /**
     * Set viaAdmision
     *
     * @param string $viaAdmision
     * @return Ingreso
     */
    public function setViaAdmision($viaAdmision)
    {
        $this->viaAdmision = $viaAdmision;
    
        return $this;
    }

    /**
     * Get viaAdmision
     *
     * @return string 
     */
    public function getViaAdmision()
    {
        return $this->viaAdmision;
    }

    /**
     * Set hospitalReferencia
     *
     * @param string $hospitalReferencia
     * @return Ingreso
     */
    public function setHospitalReferencia($hospitalReferencia)
    {
        $this->hospitalReferencia = $hospitalReferencia;
    
        return $this;
    }

    /**
     * Get hospitalReferencia
     *
     * @return string 
     */
    public function getHospitalReferencia()
    {
        return $this->hospitalReferencia;
    }

    /**
     * Set noReferencia
     *
     * @param string $noReferencia
     * @return Ingreso
     */
    public function setNoReferencia($noReferencia)
    {
        $this->noReferencia = $noReferencia;
    
        return $this;
    }

    /**
     * Get noReferencia
     *
     * @return string 
     */
    public function getNoReferencia()
    {
        return $this->noReferencia;
    }

    /**
     * Set medicoReferancia
     *
     * @param string $medicoReferancia
     * @return Ingreso
     */
    public function setMedicoReferancia($medicoReferancia)
    {
        $this->medicoReferancia = $medicoReferancia;
    
        return $this;
    }

    /**
     * Get medicoReferancia
     *
     * @return string 
     */
    public function getMedicoReferancia()
    {
        return $this->medicoReferancia;
    }

    /**
     * Set dxcie10
     *
     * @param string $dxcie10
     * @return Ingreso
     */
    public function setDxcie10($dxcie10)
    {
        $this->dxcie10 = $dxcie10;
    
        return $this;
    }

    /**
     * Get dxcie10
     *
     * @return string 
     */
    public function getDxcie10()
    {
        return $this->dxcie10;
    }

    /**
     * Set edoIngreso
     *
     * @param string $edoIngreso
     * @return Ingreso
     */
    public function setEdoIngreso($edoIngreso)
    {
        $this->edoIngreso = $edoIngreso;
    
        return $this;
    }

    /**
     * Get edoIngreso
     *
     * @return string 
     */
    public function getEdoIngreso()
    {
        return $this->edoIngreso;
    }

    /**
     * Set edoSalud
     *
     * @param string $edoSalud
     * @return Ingreso
     */
    public function setEdoSalud($edoSalud)
    {
        $this->edoSalud = $edoSalud;
    
        return $this;
    }

    /**
     * Get edoSalud
     *
     * @return string 
     */
    public function getEdoSalud()
    {
        return $this->edoSalud;
    }

    /**
     * Set motivoEgreso
     *
     * @param string $motivoEgreso
     * @return Ingreso
     */
    public function setMotivoEgreso($motivoEgreso)
    {
        $this->motivoEgreso = $motivoEgreso;
    
        return $this;
    }

    /**
     * Get motivoEgreso
     *
     * @return string 
     */
    public function getMotivoEgreso()
    {
        return $this->motivoEgreso;
    }

    /**
     * Set medicoEgreso
     *
     * @param string $medicoEgreso
     * @return Ingreso
     */
    public function setMedicoEgreso($medicoEgreso)
    {
        $this->medicoEgreso = $medicoEgreso;
    
        return $this;
    }

    /**
     * Get medicoEgreso
     *
     * @return string 
     */
    public function getMedicoEgreso()
    {
        return $this->medicoEgreso;
    }

    /**
     * Set fechaEgreso
     *
     * @param \DateTime $fechaEgreso
     * @return Ingreso
     */
    public function setFechaEgreso($fechaEgreso)
    {
        $this->fechaEgreso = $fechaEgreso;
    
        return $this;
    }

    /**
     * Get fechaEgreso
     *
     * @return \DateTime 
     */
    public function getFechaEgreso()
    {
        return $this->fechaEgreso;
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
        $this->area= $area;
    
        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set cama
     *
     * @param Salud\HospitalBundle\Entity\Cama $cama
     */
    public function setCama(\Salud\HospitalBundle\Entity\Cama $cama)
    {
        $this->cama = $cama;
    
        return $this;
    }

    /**
     * Get cama
     *
     * @return Salud\HospitalBundle\Entity\Cama 
     */
    public function getCama()
    {
        return $this->cama;
    }

    /**
     * Set movimiento
     *
     * @param string $movimiento
     * @return Ingreso
     */
    public function setMovimiento($movimiento)
    {
        $this->movimiento = $movimiento;
    
        return $this;
    }

    /**
     * Get movimiento
     *
     * @return string 
     */
    public function getMovimiento()
    {
        return $this->movimiento;
    }
}
