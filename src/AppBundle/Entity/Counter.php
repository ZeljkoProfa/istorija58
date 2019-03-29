<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Counter
 *
 * @ORM\Table(name="counter")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CounterRepository")
 */
class Counter 
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
     * $var integer
     * @ORM\Column(name="counter", type="integer", nullable=false)
     */
    private $counter;


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
     * Set counter
     *
     * @param string $counter
     *
     * @return Counter
     */
    public function setCounter($counter)
    {
        $this->counter = $counter;

        return $this;
    }

    /**
     * Get counter
     *
     * @return string
     */
    public function getCounter()
    {
        return $this->counter;
    }
}

