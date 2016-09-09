<?php

namespace QTU\MarkBundle\Entity;

/**
 * StudentSubjectCourse
 */
class StudentSubjectCourse
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $overallMark;

    /**
     * @var boolean
     */
    private $isPass;

    /**
     * @var \QTU\MarkBundle\Entity\Student
     */
    private $student;

    /**
     * @var \QTU\MarkBundle\Entity\SubjectCourse
     */
    private $subjectCourse;


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
     * Set overallMark
     *
     * @param float $overallMark
     *
     * @return StudentSubjectCourse
     */
    public function setOverallMark($overallMark)
    {
        $this->overallMark = $overallMark;

        return $this;
    }

    /**
     * Get overallMark
     *
     * @return float
     */
    public function getOverallMark()
    {
        return $this->overallMark;
    }

    /**
     * Set isPass
     *
     * @param boolean $isPass
     *
     * @return StudentSubjectCourse
     */
    public function setIsPass($isPass)
    {
        $this->isPass = $isPass;

        return $this;
    }

    /**
     * Get isPass
     *
     * @return boolean
     */
    public function getIsPass()
    {
        return $this->isPass;
    }

    /**
     * Set student
     *
     * @param \QTU\MarkBundle\Entity\Student $student
     *
     * @return StudentSubjectCourse
     */
    public function setStudent(\QTU\MarkBundle\Entity\Student $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \QTU\MarkBundle\Entity\Student
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set subjectCourse
     *
     * @param \QTU\MarkBundle\Entity\SubjectCourse $subjectCourse
     *
     * @return StudentSubjectCourse
     */
    public function setSubjectCourse(\QTU\MarkBundle\Entity\SubjectCourse $subjectCourse = null)
    {
        $this->subjectCourse = $subjectCourse;

        return $this;
    }

    /**
     * Get subjectCourse
     *
     * @return \QTU\MarkBundle\Entity\SubjectCourse
     */
    public function getSubjectCourse()
    {
        return $this->subjectCourse;
    }
}
