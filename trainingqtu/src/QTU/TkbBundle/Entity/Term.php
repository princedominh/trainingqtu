<?php

namespace QTU\TkbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Term
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
     * @ORM\Column(name="year", type="string", length=10)
     */
    private $year;

    /**
     * @var integer
     *
     * @ORM\Column(name="semester", type="integer")
     */
    private $semester;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="Course", mappedBy="term")
     */
    protected $courses;
    
    
    public function __construct($id = 0) {
        if($id!=0) {
            $this->id = $id;
        }
        $this->courses = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function __toString() {
        return $this->semester . ' - ' .$this->year;
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
     * Set year
     *
     * @param string $year
     * @return Term
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set semester
     *
     * @param integer $semester
     * @return Term
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;

        return $this;
    }

    /**
     * Get semester
     *
     * @return integer 
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Term
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
     * Set Courses
     *
     * @param Course $courses
     * @return Term
     */
    public function setCourses($courses)
    {
        $this->courses = $courses;

        return $this;
    }

    /**
     * Get Courses
     *
     * @return Courses 
     */
    public function getCourses()
    {
        return $this->courses;
    }

    public function addCourse(Course $course)
    {
        $this->courses[] = $course;
    }
}
