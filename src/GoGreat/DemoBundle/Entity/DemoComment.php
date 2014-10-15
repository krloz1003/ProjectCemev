<?php

namespace GoGreat\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemoComment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GoGreat\DemoBundle\Entity\DemoCommentRepository")
 */
class DemoComment
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
     * @ORM\Column(name="body", type="string", length=255)
     */
    private $body;

    /**
     * @var GoGreat\DemoBundle\Entity\DemoUser
     */
    private $author;


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
     * Set body
     *
     * @param string $body
     * @return DemoComment
     */
    public function setBody($body)
    {
        $this->body = $body;
    
        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set author
     *
     * @param GoGreat\DemoBundle\Entity\DemoUser $author
     */
    public function setAuthor(\GoGreat\DemoBundle\Entity\DemoUser $author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return GoGreat\DemoBundle\Entity\DemoUser $author
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
