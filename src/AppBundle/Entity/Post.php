<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Post
 *
 * @ORM\Table(name="post", indexes={@ORM\Index(name="admin_id", columns={"admin_id"}), 
 * @ORM\Index(name="category_id", columns={"category_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 * 
 */
class Post
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
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Naslov mora imati bar {{ limit }} karaktera",
     *      maxMessage = "Naslov ne moze biti duzi od  {{ limit }} karaktera")
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @Assert\Length(
     *      min = 2,
     *      max = 100,
     *      minMessage = "Ključne reči moraju imati bar {{ limit }} karaktera",
     *      maxMessage = "Ključne reči ne mogu imati vise od {{ limit }} karaktera")
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="seo_title", type="string", length=255, nullable=true)
     */
    private $seoTitle;

    /**
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Vaše ime  mora imati bar {{ limit }} karaktera",
     *      maxMessage = "Vaše ime ne moze biti duze od  {{ limit }} karaktera")
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="author", type="string", length=100, nullable=true)
     */
    private $author = 'admin';

    /**
     * @var \AppBundle\Entity\Admin
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Admin", inversedBy="posts")
     * @ORM\JoinColumn(name="admin_id", referencedColumnName="id", nullable=true)
     */
    private $adminId;

    /**
     * @ORM\Column(type="string",nullable=true)
     * 
     * @Assert\NotBlank(message="Molimo unesite PDF ili Word fajl.")
     * @Assert\File(mimeTypes={ "application/vnd.openxmlformats-officedocument.presentationml.presentation", "application/vnd.ms-powerpoint", "application/pdf", "application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document"})
     */
    private $body;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \AppBundle\Entity\Category
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Category", inversedBy="posts")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * 
     */
    private $category;

    /**
     * @var string
     * 
     * @ORM\Column(name="status", type="string")
     */
    private $status = '0';
    
    /**
     * @var string
     * 
     * @ORM\Column(name="class", type="string")
     */
    private $class;

    /**
     *
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="postId")
     */
    private $comments;

    public function __construct() {
        $this->comments = new ArrayCollection();
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set seoTitle
     *
     * @param string $seoTitle
     *
     * @return Post
     */
    public function setSeoTitle($seoTitle) {
        $this->seoTitle = $seoTitle;

        return $this;
    }

    /**
     * Get seoTitle
     *
     * @return string
     */
    public function getSeoTitle() {
        return $this->seoTitle;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Post
     */
    public function setAuthor($author) {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * Set adminId
     *
     * @param integer $adminId
     *
     * @return Post
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

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Post
     */
    public function setBody($body) {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody() {
        return $this->body;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Post
     */
    public function setCreated($created) {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Post
     */
    public function setCategory($category) {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Add comment
     *
     * @param Comment $comment
     *
     * @return Post
     */
    public function addComment(Comment $comment) {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param Comment $comment
     */
    public function removeComment(Comment $comment) {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments() {
        return $this->comments;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function __toString() {
        return $this->title;
    }

    public function getClass() {
        return $this->class;
    }
    
    public function setClass($class) {
        $this->class = $class;
        return $this;
    }

}
