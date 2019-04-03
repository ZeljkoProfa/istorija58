<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * QuizQuestions
 *
 * @ORM\Table(name="quiz_questions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuizQuestionsRepository")
 */
class QuizQuestions
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
     * @var int
     * @ORM\Column(name="quiz_id", type="integer", length=10, nullable=false)
     */
    private $quizId;
    
    /**
     * @var int
     * @ORM\Column(name="number", type="integer", length=10, nullable=false)
     */
    private $number;

    /**
     * @var string
     * @ORM\Column(name="question", type="string", length=100, nullable=false)
     */
    private $question;

    /**
     * @var string
     * @ORM\Column(name="answer1", type="string", length=100, nullable=false)
     */
    private $answer1;

    /**
     * @var string
     * @ORM\Column(name="answer2", type="string", length=100, nullable=false)
     */
    private $answer2;

    /**
     * @var string
     * @ORM\Column(name="answer3", type="string", length=100, nullable=false)
     */
    private $answer3;

    /**
     * @var string
     * @ORM\Column(name="answer4", type="string", length=100, nullable=false)
     */
    private $answer4;

    /**
     * @var string
     * @ORM\Column(name="true_answer", type="string", length=100, nullable=false)
     */
    private $trueAnswer;

    /**
     * @var string
     * @ORM\Column(name="lesson", type="string", length=500, nullable=false)
     */
    private $lesson;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     * 
     * 
     * @Assert\File(mimeTypes={ "image/jpeg", "image/png"})
     */
    private $img;
    
    /**
     * @var int
     * @ORM\Column(name="points", type="integer", length=100, nullable=false)
     */
    private $points = 0;

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
     * Set quizId
     *
     * @param integer $quizId
     *
     * @return QuizQuestions
     */
    public function setQuizId($quizId)
    {
        $this->quizId = $quizId;

        return $this;
    }

    /**
     * Get quizId
     *
     * @return int
     */
    public function getQuizId()
    {
        return $this->quizId;
    }

    /**
     * Set question
     *
     * @param string $question
     *
     * @return QuizQuestions
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set answer1
     *
     * @param string $answer1
     *
     * @return QuizQuestions
     */
    public function setAnswer1($answer1)
    {
        $this->answer1 = $answer1;

        return $this;
    }

    /**
     * Get answer1
     *
     * @return string
     */
    public function getAnswer1()
    {
        return $this->answer1;
    }

    /**
     * Set answer2
     *
     * @param string $answer2
     *
     * @return QuizQuestions
     */
    public function setAnswer2($answer2)
    {
        $this->answer2 = $answer2;

        return $this;
    }

    /**
     * Get answer2
     *
     * @return string
     */
    public function getAnswer2()
    {
        return $this->answer2;
    }

    /**
     * Set answer3
     *
     * @param string $answer3
     *
     * @return QuizQuestions
     */
    public function setAnswer3($answer3)
    {
        $this->answer3 = $answer3;

        return $this;
    }

    /**
     * Get answer3
     *
     * @return string
     */
    public function getAnswer3()
    {
        return $this->answer3;
    }

    /**
     * Set answer4
     *
     * @param string $answer4
     *
     * @return QuizQuestions
     */
    public function setAnswer4($answer4)
    {
        $this->answer4 = $answer4;

        return $this;
    }

    /**
     * Get answer4
     *
     * @return string
     */
    public function getAnswer4()
    {
        return $this->answer4;
    }

    /**
     * Set trueAnswer
     *
     * @param string $trueAnswer
     *
     * @return QuizQuestions
     */
    public function setTrueAnswer($trueAnswer)
    {
        $this->trueAnswer = $trueAnswer;

        return $this;
    }

    /**
     * Get trueAnswer
     *
     * @return string
     */
    public function getTrueAnswer()
    {
        return $this->trueAnswer;
    }

    /**
     * Set points
     *
     * @param string $points
     *
     * @return QuizQuestions
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return string
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return QuizQuestions
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
    
    public function getNumber()
    {
        return $this->number;
    }
    
    public function setNumber($number)
    {
        $this->number = $number;
    }
    
    public function getLesson()
    {
        return $this->lesson;
    }
    
    public function setLesson($lesson)
    {
        $this->lesson = $lesson;
    }
    
    public function getImg()
    {
        return $this->img;
    }
    
    public function setImg($img)
    {
        $this->img = $img;
    }
}

