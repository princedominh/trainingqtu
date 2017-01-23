<?php

namespace QTU\TkbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Course
 *
 */
class CourseTemp2
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @Gedmo\Slug(fields={"name","id"})
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var integer
     *
     * @ORM\Column(name="credit", type="integer")
     */
    private $credit;

    /**
     * @var integer
     *
     * @ORM\Column(name="class_hours", type="integer")
     */
    private $classHours;

    /**
     * @var integer
     *
     * @ORM\Column(name="lab_hours", type="integer")
     */
    private $labHours = 0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_at", type="datetime", nullable=true)
     */
    private $startAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stop_at", type="datetime", nullable=true)
     */
    private $stopAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="need_mic", type="boolean", nullable=true)
     */
    private $needMic = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="need_projector", type="boolean", nullable=true)
     */
    private $needProjector = false;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    
    /**
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User", inversedBy="courses")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $instructor;

    /**
     * @ORM\ManyToOne(targetEntity="ClassP", inversedBy="courses")
     * @ORM\JoinColumn(name="class_p_id", referencedColumnName="id")
     */
    protected $class_p;

    


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
     * Set name
     *
     * @param string $name
     * @return Course
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Course
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Course
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set credit
     *
     * @param integer $credit
     * @return Course
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return integer 
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set classHours
     *
     * @param integer $classHours
     * @return Course
     */
    public function setClassHours($classHours)
    {
        $this->classHours = $classHours;

        return $this;
    }

    /**
     * Get classHours
     *
     * @return integer 
     */
    public function getClassHours()
    {
        return $this->classHours;
    }

    /**
     * Set labHours
     *
     * @param integer $labHours
     * @return Course
     */
    public function setLabHours($labHours)
    {
        $this->labHours = $labHours;

        return $this;
    }

    /**
     * Get labHours
     *
     * @return integer 
     */
    public function getLabHours()
    {
        return $this->labHours;
    }

    /**
     * Set startAt
     *
     * @param \DateTime $startAt
     * @return Course
     */
    public function setStartAt($startAt)
    {
        $this->startAt = $startAt;

        return $this;
    }

    /**
     * Get startAt
     *
     * @return \DateTime 
     */
    public function getStartAt()
    {
        return $this->startAt;
    }

    /**
     * Set stopAt
     *
     * @param \DateTime $stopAt
     * @return Course
     */
    public function setStopAt($stopAt)
    {
        $this->stopAt = $stopAt;

        return $this;
    }

    /**
     * Get stopAt
     *
     * @return \DateTime 
     */
    public function getStopAt()
    {
        return $this->stopAt;
    }

    /**
     * Set needMic
     *
     * @param boolean $needMic
     * @return Course
     */
    public function setNeedMic($needMic)
    {
        $this->needMic = $needMic;

        return $this;
    }

    /**
     * Get needMic
     *
     * @return boolean 
     */
    public function getNeedMic()
    {
        return $this->needMic;
    }

    /**
     * Set needProjector
     *
     * @param boolean $needProjector
     * @return Course
     */
    public function setNeedProjector($needProjector)
    {
        $this->needProjector = $needProjector;

        return $this;
    }

    /**
     * Get needProjector
     *
     * @return boolean 
     */
    public function getNeedProjector()
    {
        return $this->needProjector;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Course
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set instructor
     *
     * @param User $instructor
     * @return Course
     */
    public function setInstructor($instructor)
    {
        $this->instructor = $instructor;

        return $this;
    }

    /**
     * Get instructor
     *
     * @return User 
     */
    public function getInstructor()
    {
        return $this->instructor;
    }
    /**
     * Set class_p
     *
     * @param Class_P $class_p
     * @return Course
     */
    public function setClassP($class_p)
    {
        $this->class_p = $class_p;

        return $this;
    }

    /**
     * Get class_p
     *
     * @return Class_P 
     */
    public function getClassP()
    {
        return $this->class_p;
    }
    
}
