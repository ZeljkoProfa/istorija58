<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactRepository")
 */
class Contact
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
     *      max = 50,
     *      minMessage = "Ime mora imati bar {{ limit }} karaktera",
     *      maxMessage = "Ime ne moze biti duze od  {{ limit }} karaktera")
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="author", type="string", length=100, nullable=false)
     */
    private $author;

    /**
     * @var text
     * @Assert\Length(
     *      min = 10,
     *      max = 500,
     *      minMessage = "Pitanje mora imati bar {{ limit }} karaktera",
     *      maxMessage = "Pitanje ne moze biti duze od  {{ limit }} karaktera")
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="body", type="text", length=1000, nullable=false)
     */
    private $body;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var string
     * @Assert\Length(
     *      min = 7,
     *      max = 100,
     *      minMessage = "Email mora imati bar {{ limit }} karaktera",
     *      maxMessage = "Email ne moze biti duzi od  {{ limit }} karaktera")
     * @var string
     * @Assert\Email(
     *     message = "Email adresa '{{ value }}' nije validna. Unesite validnu email adresu.",
     *     checkMX = true
     * )
     * @Assert\NotBlank()
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;
    
    
    
    
    
    

    public function __toString()
    {
        return $this->author;
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
     * Set author
     *
     * @param string $author
     *
     * @return Contact
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
     * Set body
     *
     * @param string $body
     *
     * @return Contact
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Contact
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
     * Set email
     *
     * @param string $email
     *
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
