<?php

namespace QTU\StudentBundle\Entity;

/**
 * StudentRewardDiscipline
 */
class StudentRewardDiscipline
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $document;

    /**
     * @var string
     */
    private $details;

    /**
     * @var \QTU\StudentBundle\Entity\Student
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
     * Set type
     *
     * @param integer $type
     *
     * @return StudentRewardDiscipline
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return StudentRewardDiscipline
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
     * Set document
     *
     * @param string $document
     *
     * @return StudentRewardDiscipline
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return StudentRewardDiscipline
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
     * @param \QTU\StudentBundle\Entity\Student $student
     *
     * @return StudentRewardDiscipline
     */
    public function setStudent(\QTU\StudentBundle\Entity\Student $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \QTU\StudentBundle\Entity\Student
     */
    public function getStudent()
    {
        return $this->student;
    }
}
