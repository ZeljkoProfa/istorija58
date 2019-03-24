<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Comment;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Comment
 *
 * @ORM\Table(name="comment", indexes={@ORM\Index(name="post_id", columns={"post_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentRepository")
 */
class Comment
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
     *      minMessage = "Ime korisnika mora imati bar {{ limit }} karaktera",
     *      maxMessage = "ime korisnika ne moze biti duze od  {{ limit }} karaktera")
     * 
     * @Assert\NotBlank()
     * @ORM\Column(name="author", type="string", length=100, nullable=false)
     */
    private $author;

    /**
     * 
     * @Assert\Length(
     *      min = 5,
     *      max = 500,
     *      minMessage = "Komentar mora imati bar {{ limit }} karaktera",
     *      maxMessage = "Komentar ne moze biti duzi od  {{ limit }} karaktera")
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="body", type="string", length=500, nullable=false)
     */
    private $body;

    /**
     * @var \AppBundle\Entity\Post
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Post", inversedBy="comments")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    private $postId;

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
    private $status = '1';
    
    /**
     * @var \AppBundle\Entity\Comment
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Comment", inversedBy="children" )
     * @ORM\JoinColumn(name="parentId", referencedColumnName="id")
     */
    private $parentId;
    
    /**
     * @var \AppBundle\Entity\Comment
     * 
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="parentId")
     */
    private $children;
    
    public function __construct()
    {
        $this->children = new ArrayCollection();
    }
    
    public function getChildren() {
        return $this->children;
    }
    
    public function addChild(Comment $child) {
       $this->children[] = $child;
       $child->setParentId($this);
    }
    
    /**
     * Get parentId
     *
     * @return integer
     */
    public function getParentId() {
        return $this->parentId;
    }
    
    /**
     * Set parentId
     *
     * @param inetger $parent
     *
     * @return Comment
     */
    public function setParentId($parent) {
        $this->parentId = $parent;
        return $this;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Comment
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
     * @return Comment
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
     * @return Comment
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
     * Set postId
     *
     * @param integer $postId
     *
     * @return Comment
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get postId
     *
     * @return integer
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Comment
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
    
    public function setStatus($status){
        $this->status = $status;
        return $this;
    }
    
    public function getStatus(){
        return $this->status;
    }
    
    

    public function __toString()
    {
        return $this->author;
    }
}
