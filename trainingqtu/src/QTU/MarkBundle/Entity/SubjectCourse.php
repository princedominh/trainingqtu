<?php

namespace QTU\MarkBundle\Entity;

/**
 * SubjectCourse
 */
class SubjectCourse
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var \QTU\MarkBundle\Entity\Subject
     */
    private $subject;

    /**
     * @var \QTU\MarkBundle\Entity\Term
     */
    private $term;


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
     * Set code
     *
     * @param string $code
     *
     * @return SubjectCourse
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
     * Set subject
     *
     * @param \QTU\MarkBundle\Entity\Subject $subject
     *
     * @return SubjectCourse
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

    /**
     * Set term
     *
     * @param \QTU\MarkBundle\Entity\Term $term
     *
     * @return SubjectCourse
     */
    public function setTerm(\QTU\MarkBundle\Entity\Term $term = null)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return \QTU\MarkBundle\Entity\Term
     */
    public function getTerm()
    {
        return $this->term;
    }
}
