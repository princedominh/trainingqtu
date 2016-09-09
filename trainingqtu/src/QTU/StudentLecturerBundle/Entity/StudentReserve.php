<?php

namespace QTU\StudentLecturerBundle\Entity;

/**
 * StudentReserve
 */
class StudentReserve
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $details;

    /**
     * @var \QTU\StudentLecturerBundle\Entity\Student
     */
    private $student;


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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return StudentReserve
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return StudentReserve
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set student
     *
     * @param \QTU\StudentLecturerBundle\Entity\Student $student
     *
     * @return StudentReserve
     */
    public function setStudent(\QTU\StudentLecturerBundle\Entity\Student $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \QTU\StudentLecturerBundle\Entity\Student
     */
    public function getStudent()
    {
        return $this->student;
    }
}
