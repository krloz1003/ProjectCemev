<?php

namespace GoGreat\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemoUser
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GoGreat\DemoBundle\Entity\DemoUserRepository")
 */
class DemoUser
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var GoGreat\DemoBundle\Entity\DemoComment
     */
    private $comments;

    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return DemoUser
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add comments
     *
     * @param GoGreat\DemoBundle\Entity\DemoComment $comments     
     */
    
    public function addComments(\GoGreat\DemoBundle\Entity\DemoComment $comments)
    {
        $comments->setAuthor($this);        
        $this->comments[] = $comments;
    }

    /**
     * Get comments
     *
     * @return Doctrine\Common\Collections\Collection $comments
     */
    public function getComments()
    {
        return $this->comments;
    }
}
