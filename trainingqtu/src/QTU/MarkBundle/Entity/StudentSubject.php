<?php

namespace QTU\MarkBundle\Entity;

/**
 * StudentSubject
 */
class StudentSubject
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $mark;

    /**
     * @var \QTU\MarkBundle\Entity\Student
     */
    private $student;

    /**
     * @var \QTU\MarkBundle\Entity\Subject
     */
    private $subject;


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
     * @param integer $mark
     *
     * @return StudentSubject
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return integer
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set student
     *
     * @param \QTU\MarkBundle\Entity\Student $student
     *
     * @return StudentSubject
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
     * Set subject
     *
     * @param \QTU\MarkBundle\Entity\Subject $subject
     *
     * @return StudentSubject
     */
    public function setSubject(\QTU\MarkBundle\Entity\Subject $subject = null)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return \QTU\MarkBundle\Entity\Subject
     */
    public function getSubject()
    {
        return $this->subject;
    }
}
