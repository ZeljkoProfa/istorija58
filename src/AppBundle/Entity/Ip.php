<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ip
 *
 * @ORM\Table(name="ip")
 * @ORM\Entity()
 */
class Ip
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
     * @ORM\Column(name="ip", type="string", length=200, nullable=true)
     */
    private $ip;
    
    /**
     * @var string
     *
     * @ORM\Column(name="proxy", type="string", length=200, nullable=true)
     */
    private $proxy;
    
    /**
     * @var string
     *
     * @ORM\Column(name="client_ip", type="string", length=200, nullable=true)
     */
    private $client_ip;
    
    /**
     * @var string
     *
     * @ORM\Column(name="post_id", type="string", length=200, nullable=true)
     */
    private $post_id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="contact_id", type="string", length=200, nullable=true)
     */
    private $contact_id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="comment_id", type="string", length=200, nullable=true)
     */
    private $comment_id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="banned", type="string", length=2, nullable=false, options={"default" = 0})
     */
    private $banned = '0';
    
    /**
     * @var \Datetime $created
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @param $ip
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
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
     * @param $post_id
     * @return $this
     */
    public function setPostId($post_id)
    {
        $this->post_id = $post_id;

        return $this;
    }

    /**
     * Get post_id
     *
     * @return string
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * @param $comment_id
     * @return $this
     */
    public function setCommentId($comment_id)
    {
        $this->comment_id = $comment_id;

        return $this;
    }

    /**
     * Get comment_id
     *
     * @return string
     */
    public function getCommentId()
    {
        return $this->comment_id;
    }

    /**
     * @param $contact_id
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->contact_id = $contact_id;

        return $this;
    }

    /**
     * Get contact_id
     *
     * @return string
     */
    public function getContactId()
    {
        return $this->contact_id;
    }

    /**
     * @param $proxy
     * @return $this
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;

        return $this;
    }

    /**
     * Get proxy
     *
     * @return string
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * @param $banned
     * @return $this
     */
    public function setBanned($banned)
    {
        $this->banned = $banned;

        return $this;
    }

    /**
     * Get banned
     *
     * @return string
     */
    public function getBanned()
    {
        return $this->banned;
    }

    /**
     * @param $client_ip
     * @return $this
     */
    public function setClient_ip($client_ip)
    {
        $this->client_ip = $client_ip;

        return $this;
    }

    /**
     * Get client_ip
     *
     * @return string
     */
    public function getClient_ip()
    {
        return $this->client_ip;
    }
    
    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Ip
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
}