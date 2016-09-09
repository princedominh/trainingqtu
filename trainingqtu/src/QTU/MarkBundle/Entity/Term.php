<?php

namespace QTU\MarkBundle\Entity;

/**
 * Term
 */
class Term
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $year;

    /**
     * @var boolean
     */
    private $semester;

    /**
     * @var integer
     */
    private $orderTerm = '0';

    /**
     * @var string
     */
    private $description;


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
     *
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
     * @param boolean $semester
     *
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
     * @return boolean
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Set orderTerm
     *
     * @param integer $orderTerm
     *
     * @return Term
     */
    public function setOrderTerm($orderTerm)
    {
        $this->orderTerm = $orderTerm;

        return $this;
    }

    /**
     * Get orderTerm
     *
     * @return integer
     */
    public function getOrderTerm()
    {
        return $this->orderTerm;
    }

    /**
     * Set description
     *
     * @param string $description
     *
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
}
