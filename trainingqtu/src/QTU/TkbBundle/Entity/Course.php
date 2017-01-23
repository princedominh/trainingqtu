<?php

namespace QTU\TkbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Application\Sonata\UserBundle\Entity\User;

/**
 * Course
 *
 * @ORM\Table(name="tkb_course")
 * @ORM\Entity(repositoryClass="QTU\TkbBundle\Repository\CourseRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Course
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @Gedmo\Slug(fields={"name","id"})
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /** tín chỉ
     * @var integer
     *
     * @ORM\Column(name="credit", type="integer", nullable=true)
     */
    private $credit;

    /** giờ lý thuyết
     * @var integer
     *
     * @ORM\Column(name="class_hours", type="integer", nullable=true)
     */
    private $classHours;

    /** giờ thực hành
     * @var integer
     *
     * @ORM\Column(name="lab_hours", type="integer", nullable=true)
     */
    private $labHours = 0;

    /** giờ đồ án
     * @var integer
     *
     * @ORM\Column(name="project_hours", type="integer", nullable=true)
     */
    private $projectHours = 0;

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
     * @var boolean
     *
     * @ORM\Column(name="finish", type="boolean", nullable=true)
     */
    private $finish = false;

    /**
     * @ORM\ManyToMany(targetEntity="Application\Sonata\UserBundle\Entity\User", inversedBy="courses")
     * @ORM\JoinTable(name="tkb_courses_instructors")
     **/
    protected $instructors;    

    /**
     * @ORM\ManyToMany(targetEntity="ClassP", inversedBy="courses")
     * @ORM\JoinTable(name="tkb_courses_classes")
     **/
    protected $classes;    

    /**
     * @ORM\OneToMany(targetEntity="ScheduleDetail", mappedBy="course")
     * @ORM\OrderBy({"dateOccur" = "ASC"})
     */
    protected $scheduleDetails;
    
    /**
     * @ORM\ManyToOne(targetEntity="Term", inversedBy="courses")
     * @ORM\JoinColumn(name="term_id", referencedColumnName="id")
     */
    protected $term;

    /**
     * @ORM\ManyToOne(targetEntity="Subject", inversedBy="courses")
     * @ORM\JoinColumn(name="subject_id", referencedColumnName="id")
     */
    protected $subject;

    public function __construct($id = 0) {
        if($id!=0) {
            $this->id = $id;
        }
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->instructors = new \Doctrine\Common\Collections\ArrayCollection();
        $this->scheduleDetails = new \Doctrine\Common\Collections\ArrayCollection();
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
        if($this->subject) {
            return $this->subject->getName();
        }
        return $this->name;
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
     * Set projectHours
     *
     * @param integer $projectHours
     * @return Course
     */
    public function setProjectHours($projectHours)
    {
        $this->projectHours = $projectHours;

        return $this;
    }

    /**
     * Get projectHours
     *
     * @return integer 
     */
    public function getProjectHours()
    {
        return $this->projectHours;
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
     * Set finish
     *
     * @param boolean $finish
     * @return Course
     */
    public function setFinish($finish)
    {
        $this->finish = $finish;

        return $this;
    }

    /**
     * Get finish
     *
     * @return boolean 
     */
    public function getFinish()
    {
        return $this->finish;
    }

    /**
     * Set instructor
     *
     * @param User $instructor
     * @return Course
     */
    public function setInstructors($instructors)
    {
        $this->instructors = $instructors;

        return $this;
    }

    /**
     * Get instructor
     *
     * @return User 
     */
    public function getInstructors()
    {
        return $this->instructors;
    }
    
    public function addInstructor(User $instructor = null)
    {
        if(!is_null($instructor)) {
            $this->instructors[] = $instructor;
        }
    }
    
    /**
     * Set Classes
     *
     * @param User $instructor
     * @return Course
     */
    public function setClasses($classes)
    {
        $this->classes = $classes;

        return $this;
    }

    /**
     * Get instructor
     *
     * @return User 
     */
    public function getClasses()
    {
        return $this->classes;
    }

    public function addClass(ClassP $class)
    {
        $this->classes[] = $class;
    }

    /**
     * Set Classes
     *
     * @param ScheduleDetail $scheduleDetails
     * @return Course
     */
    public function setScheduleDetails($scheduleDetails)
    {
        $this->scheduleDetails = $scheduleDetails;

        return $this;
    }

    /**
     * Get scheduleDetails
     *
     * @return ScheduleDetails 
     */
    public function getScheduleDetails()
    {
        return $this->scheduleDetails;
    }
    public function getScheduleDetailsArray()
    {
        $details = $this->getScheduleDetails();
        $result = array();
        foreach ($details as $detail) {
            $result[] = array(
                'id'=>$detail->getId(),
                'dateOccur'=>$detail->getDateOccur(),
                'period'=>$detail->getPeriod(),
                'classes'=>$detail->getCourse()->getClasses(),
            );
        }
        return $result;
    }

    public function addScheduleDetail(ScheduleDetail $scheduledetail)
    {
        $this->scheduleDetails[] = $scheduledetail;
    }
    
    /**
     * Set term
     *
     * @param Term $term
     * @return Course
     */
    public function setTerm(Term $term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return Term
     */
    public function getTerm()
    {
        return $this->term;
    }
    
    /**
     * Set subject
     *
     * @param Subject $subject
     * @return Course
     */
    public function setSubject(Subject $subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return Subject
     */
    public function getSubject()
    {
        return $this->subject;
    }
    
    
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
    */
    public function prePersist() {
        if($this->subject) {
            if($this->name!='') {
                $this->name = $this->subject->getName();
            }
            $this->credit = $this->subject->getCredit();
            $this->classHours = $this->subject->getClassCredit() * 15;
            $this->labHours = $this->subject->getLabCredit() * 30;
        }
    }
    
}
