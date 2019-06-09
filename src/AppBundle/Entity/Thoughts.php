<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Thoughts
 *
 * @ORM\Table(name="thoughts")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ThoughtsRepository")
 */
class Thoughts 
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
     *
     * @ORM\Column(name="text", type="string", length=200, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=100, nullable=false)
     */
    private $author;

    /**
     * @var \AppBundle\Entity\Admin
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Admin", inversedBy="thoughts")
     * @ORM\JoinColumn(name="admin_id", referencedColumnName="id", nullable=true)
     */
    private $adminId;
            
    /**
     * @var \Datetime $created
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;
    
    /**
     * @var Date
     *
     * @ORM\Column(name="test_date", type="date", nullable=true)
     */
    private $test_date = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="current_thought", type="string", nullable=true)
     */
    private $current_thought = NULL;

    /**
     * @param $current_thought
     * @return $this
     */
    public function setCurrentThought($current_thought)
    {
        $this->current_thought = $current_thought;

        return $this;
    }

    /**
     * Get current_thought
     *
     * @return string
     */
    public function getCurrentThought()
    {
        return $this->current_thought;
    }

    
    /**
     * Set text
     *
     * @param string $text
     *
     * @return Thoughts
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Thoughts
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $test_date
     * @return $this
     */
    public function setTest_date($test_date)
    {
        $this->test_date = $test_date;

        return $this;
    }

    /**
     * @return Date
     */
    public function getTest_date()
    {
        return $this->test_date;
    }
    
    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Thoughts
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
     * Set adminId
     *
     * @param integer $adminId
     *
     * @return Thoughts
     */
    public function setAdminId($adminId) {
        $this->adminId = $adminId;

        return $this;
    }

    /**
     * @return Admin
     */
    public function getAdminId() {
        return $this->adminId;
    }
}
