<?php

namespace CP\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clues
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Clues
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
     * @ORM\Column(name="cvercve", type="string", length=2)
     */
    private $cvercve;

    /**
     * @var string
     *
     * @ORM\Column(name="cinscve", type="string", length=1)
     */
    private $cinscve;

    /**
     * @var string
     *
     * @ORM\Column(name="ctuncve", type="string", length=1)
     */
    private $ctuncve;

    /**
     * @var string
     *
     * @ORM\Column(name="ccomcve", type="string", length=3)
     */
    private $ccomcve;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoUnidad", type="string", length=30)
     */
    private $tipoUnidad;

    /**
     * @var string
     *
     * @ORM\Column(name="tipologia", type="string", length=1)
     */
    private $tipologia;

    /**
     * @var string
     *
     * @ORM\Column(name="desUnidad", type="string", length=255)
     */
    private $desUnidad;

    /**
     * @var string
     *
     * @ORM\Column(name="domUnidad", type="string", length=255)
     */
    private $domUnidad;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=255)
     */
    private $cp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cortaEstancia", type="boolean")
     */
    private $cortaEstancia;

    /**
     * @ORM\ManyToOne(targetEntity="CP\LocationBundle\Entity\Estado")
     */
    private $estado;

    /**
     * @ORM\ManyToOne(targetEntity="CP\LocationBundle\Entity\Jurisdiccion")
     */
    private $jurisdiccion;

    /**
     * @ORM\ManyToOne(targetEntity="CP\LocationBundle\Entity\Municipio")
     */
    private $municipio;

    /**
     * @ORM\ManyToOne(targetEntity="CP\LocationBundle\Entity\Localidad")
     */
    private $localidad;


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
     * Set cvercve
     *
     * @param string $cvercve
     * @return Clues
     */
    public function setCvercve($cvercve)
    {
        $this->cvercve = $cvercve;
    
        return $this;
    }

    /**
     * Get cvercve
     *
     * @return string 
     */
    public function getCvercve()
    {
        return $this->cvercve;
    }

    /**
     * Set cinscve
     *
     * @param string $cinscve
     * @return Clues
     */
    public function setCinscve($cinscve)
    {
        $this->cinscve = $cinscve;
    
        return $this;
    }

    /**
     * Get cinscve
     *
     * @return string 
     */
    public function getCinscve()
    {
        return $this->cinscve;
    }

    /**
     * Set ctuncve
     *
     * @param string $ctuncve
     * @return Clues
     */
    public function setCtuncve($ctuncve)
    {
        $this->ctuncve = $ctuncve;
    
        return $this;
    }

    /**
     * Get ctuncve
     *
     * @return string 
     */
    public function getCtuncve()
    {
        return $this->ctuncve;
    }

    /**
     * Set ccomcve
     *
     * @param string $ccomcve
     * @return Clues
     */
    public function setCcomcve($ccomcve)
    {
        $this->ccomcve = $ccomcve;
    
        return $this;
    }

    /**
     * Get ccomcve
     *
     * @return string 
     */
    public function getCcomcve()
    {
        return $this->ccomcve;
    }

    /**
     * Set tipoUnidad
     *
     * @param string $tipoUnidad
     * @return Clues
     */
    public function setTipoUnidad($tipoUnidad)
    {
        $this->tipoUnidad = $tipoUnidad;
    
        return $this;
    }

    /**
     * Get tipoUnidad
     *
     * @return string 
     */
    public function getTipoUnidad()
    {
        return $this->tipoUnidad;
    }

    /**
     * Set tipologia
     *
     * @param string $tipologia
     * @return Clues
     */
    public function setTipologia($tipologia)
    {
        $this->tipologia = $tipologia;
    
        return $this;
    }

    /**
     * Get tipologia
     *
     * @return string 
     */
    public function getTipologia()
    {
        return $this->tipologia;
    }

    /**
     * Set desUnidad
     *
     * @param string $desUnidad
     * @return Clues
     */
    public function setDesUnidad($desUnidad)
    {
        $this->desUnidad = $desUnidad;
    
        return $this;
    }

    /**
     * Get desUnidad
     *
     * @return string 
     */
    public function getDesUnidad()
    {
        return $this->desUnidad;
    }

    /**
     * Set domUnidad
     *
     * @param string $domUnidad
     * @return Clues
     */
    public function setDomUnidad($domUnidad)
    {
        $this->domUnidad = $domUnidad;
    
        return $this;
    }

    /**
     * Get domUnidad
     *
     * @return string 
     */
    public function getDomUnidad()
    {
        return $this->domUnidad;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Clues
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    
        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set cortaEstancia
     *
     * @param boolean $cortaEstancia
     * @return Clues
     */
    public function setCortaEstancia($cortaEstancia)
    {
        $this->cortaEstancia = $cortaEstancia;
    
        return $this;
    }

    /**
     * Get cortaEstancia
     *
     * @return boolean 
     */
    public function getCortaEstancia()
    {
        return $this->cortaEstancia;
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
     * @param CP\LocationBundle\Entity\Jurisdiccion $jurisdiccion
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
     * Set municipio
     *
     * @param CP\LocationBundle\Entity\Municipio $municipio     
     */
    public function setMunicipio(\CP\LocationBundle\Entity\Municipio $municipio)
    {
        $this->municipio = $municipio;
    
        return $this;
    }

    /**
     * Get municipio
     *
     * @return CP\LocationBundle\Entity\Municipio
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set localidad
     *
     * @param CP\LocationBundle\Entity\Localidad     
     */
    public function setLocalidad(\CP\LocationBundle\Entity\Localidad $localidad)
    {
        $this->localidad = $localidad;
    
        return $this;
    }

    /**
     * Get localidad
     *
     * @return CP\LocationBundle\Entity\Localidad
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }
}
