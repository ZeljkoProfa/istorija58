<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quiz
 *
 * @ORM\Table(name="quiz")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuizRepository")
 */
class Quiz
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
     * @ORM\Column(name="quiz_name", type="string", length=100, nullable=false)
     */
    private $quizName;

    /**
     * @var int
     * @ORM\Column(name="quiz_category", type="string", length=100, nullable=false)
     */
    private $quizCategory;

    /**
     * @var string
     * @ORM\Column(name="status", type="string", length=1, nullable=false)
     */
    private $status = '0';
    
    /**
     * @var int
     * @ORM\Column(name="total", type="integer", length=10, nullable=false)
     */
    private $total = '0';
    
    /**
     * @var \DateTime
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quizName
     *
     * @param string $quizName
     *
     * @return Quiz
     */
    public function setQuizName($quizName)
    {
        $this->quizName = $quizName;

        return $this;
    }

    /**
     * Get quizName
     *
     * @return string
     */
    public function getQuizName()
    {
        return $this->quizName;
    }

    /**
     * Set quizCategory
     *
     * @param integer $quizCategory
     *
     * @return Quiz
     */
    public function setQuizCategory($quizCategory)
    {
        $this->quizCategory = $quizCategory;

        return $this;
    }

    /**
     * Get quizCategory
     *
     * @return int
     */
    public function getQuizCategory()
    {
        return $this->quizCategory;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Quiz
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

    public function __toString()
    {
        return $this->quizName;
    }
    
    public function getStatus()
    {
        return $this->status;
    }
    
    public function setStatus($status)
    {
        $this->status = $status;
    }
    
    public function getTotal()
    {
        return $this->total;
    }
    
    public function setTotal($total)
    {
        $this->total = $total;
    }
}