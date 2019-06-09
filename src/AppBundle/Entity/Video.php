<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VideoRepository")
 */
class Video
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var string
     * @Assert\Length(
     *      min = 2,
     *      max = 200,
     *      minMessage = "Naslov mora imati bar {{ limit }} karaktera",
     *      maxMessage = "Naslov ne moze biti duzi
     *  od  {{ limit }} karaktera")
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="title", type="string", length=200, nullable=false)
     */
    private $title;
    
    /**
     * @var string
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Ime korisnika mora imati bar {{ limit }} karaktera",
     *      maxMessage = "ime korisnika ne moze biti duze od  {{ limit }} karaktera")
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="author", type="string", length=100, nullable=false)
     */
    private $author = 'admin';

    /**
     * @var string
     * @Assert\Length(
     *      min = 5,
     *      max = 200,
     *      minMessage = "Komentar mora imati bar {{ limit }} karaktera",
     *      maxMessage = "Komentar ne moze biti duzi od  {{ limit }} karaktera")
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var string
     * 
     * @ORM\Column(name="status", type="string", length=5, nullable=false)
     */
    private $status = '0';
    

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Video
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Video
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Video
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Video
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
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
    
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
    
    public function getStatus()
    {
        return $this->status;
    }
    
    

    public function __toString()
    {
        return $this->title;
    }
}
