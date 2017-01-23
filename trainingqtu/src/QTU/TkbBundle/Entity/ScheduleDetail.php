<?php

namespace QTU\TkbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Sonata\UserBundle\Entity\User as User;

/**
 * ScheduleDetail
 *
 * @ORM\Table(name="tkb_schedule_detail")
 * @ORM\Entity(repositoryClass="QTU\TkbBundle\Repository\ScheduleDetailRepository")
 */
class ScheduleDetail
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_occur", type="date")
     */
    private $dateOccur;

    /**
     * @var string
     *
     * @ORM\Column(name="period", type="string", length=50)
     */
    private $period;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     * use to save the real amount period has done.
     * @ORM\Column(name="has_done", type="integer")
     */
    private $hasDone = 0;
    
    

    /**
     * @var integer
     *
     * @ORM\Column(name="in_late", type="integer")
     */
    private $inLate = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="out_soon", type="integer")
     */
    private $outSoon = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_detail", type="integer", nullable=false, options={"default":0})
     * 0 for theory
     * 1 for pratise
     * 2 for test
     */
    private $typeDetail = 0;

    /**
     * @ORM\ManyToOne(targetEntity="Course", inversedBy="scheduleDetails")
     * @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     */
    protected $course;

    /**
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User", inversedBy="scheduleDetails")
     * @ORM\JoinColumn(name="instructor_id", referencedColumnName="id")
     */
    protected $instructor;

    /**
     * @ORM\ManyToOne(targetEntity="Room", inversedBy="scheduleDetails")
     * @ORM\JoinColumn(name="room_id", referencedColumnName="id")
     */
    protected $room;

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
     * Set dateOccur
     *
     * @param \DateTime $dateOccur
     * @return ScheduleDetail
     */
    public function setDateOccur($dateOccur)
    {
        $this->dateOccur = $dateOccur;

        return $this;
    }

    /**
     * Get dateOccur
     *
     * @return \DateTime 
     */
    public function getDateOccur()
    {
        return $this->dateOccur;
    }

    /**
     * Set period
     *
     * @param string $period
     * @return ScheduleDetail
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return string 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return ScheduleDetail
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
     * Set hasDone
     *
     * @param integer $hasDone
     * @return ScheduleDetail
     */
    public function setHasDone($hasDone)
    {
        $this->hasDone = $hasDone;

        return $this;
    }

    /**
     * Get hasDone
     *
     * @return integer 
     */
    public function getHasDone()
    {
        return $this->hasDone;
    }

    /**
     * Set inLate
     *
     * @param integer $inLate
     * @return ScheduleDetail
     */
    public function setInLate($inLate)
    {
        $this->inLate = $inLate;

        return $this;
    }

    /**
     * Get inLate
     *
     * @return integer 
     */
    public function getInLate()
    {
        return $this->inLate;
    }

    /**
     * Set outSoon
     *
     * @param integer $outSoon
     * @return ScheduleDetail
     */
    public function setOutSoon($outSoon)
    {
        $this->outSoon = $outSoon;

        return $this;
    }

    /**
     * Get outSoon
     *
     * @return integer 
     */
    public function getOutSoon()
    {
        return $this->outSoon;
    }
    
    /**
     * Set typeDetail
     *
     * @param integer $typeDetail
     * @return ScheduleDetail
     */
    public function setTypeDetail($typeDetail)
    {
        $this->typeDetail = $typeDetail;

        return $this;
    }

    /**
     * Get typeDetail
     *
     * @return integer 
     */
    public function getTypeDetail()
    {
        return $this->typeDetail;
    }
    
    /**
     * Set course
     *
     * @param Course $course
     * @return ScheduleDetail
     */
    public function setCourse(Course $course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return Course
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set instructor
     *
     * @param Application\Sonata\UserBundle\Entity\User $instructor
     * @return ScheduleDetail
     */
    public function setInstructor(User $instructor)
    {
        $this->instructor = $instructor;

        return $this;
    }

    /**
     * Get instructor
     *
     * @return Application\Sonata\UserBundle\Entity\User
     */
    public function getInstructor()
    {
        return $this->instructor;
    }

    /**
     * Set room
     *
     * @param Room $room
     * @return Instructor
     */
    public function setRoom(Room $room)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    
}
