<?php

namespace QTU\MarkBundle\Entity;

/**
 * StudentSubjectCourseDetails
 */
class StudentSubjectCourseDetails
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $mark;

    /**
     * @var float
     */
    private $percentage;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \QTU\MarkBundle\Entity\StudentSubjectCourse
     */
    private $subjectCourse;

    /**
     * @var \QTU\MarkBundle\Entity\MarkType
     */
    private $markType;


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
     * Set mark
     *
     * @param float $mark
     *
     * @return StudentSubjectCourseDetails
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return float
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set percentage
     *
     * @param float $percentage
     *
     * @return StudentSubjectCourseDetails
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Get percentage
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return StudentSubjectCourseDetails
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
     * Set description
     *
     * @param string $description
     *
     * @return StudentSubjectCourseDetails
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
     * Set subjectCourse
     *
     * @param \QTU\MarkBundle\Entity\StudentSubjectCourse $subjectCourse
     *
     * @return StudentSubjectCourseDetails
     */
    public function setSubjectCourse(\QTU\MarkBundle\Entity\StudentSubjectCourse $subjectCourse = null)
    {
        $this->subjectCourse = $subjectCourse;

        return $this;
    }

    /**
     * Get subjectCourse
     *
     * @return \QTU\MarkBundle\Entity\StudentSubjectCourse
     */
    public function getSubjectCourse()
    {
        return $this->subjectCourse;
    }

    /**
     * Set markType
     *
     * @param \QTU\MarkBundle\Entity\MarkType $markType
     *
     * @return StudentSubjectCourseDetails
     */
    public function setMarkType(\QTU\MarkBundle\Entity\MarkType $markType = null)
    {
        $this->markType = $markType;

        return $this;
    }

    /**
     * Get markType
     *
     * @return \QTU\MarkBundle\Entity\MarkType
     */
    public function getMarkType()
    {
        return $this->markType;
    }
}
