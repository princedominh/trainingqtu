<?php

namespace QTU\StudentLecturerBundle\Entity;

/**
 * Lecturer
 */
class Lecturer
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
     * @var \QTU\StudentLecturerBundle\Entity\QtuDepartment
     */
    private $qtuDepartment;


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
     * @return Lecturer
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
     * Set qtuDepartment
     *
     * @param \QTU\StudentLecturerBundle\Entity\QtuDepartment $qtuDepartment
     *
     * @return Lecturer
     */
    public function setQtuDepartment(\QTU\StudentLecturerBundle\Entity\QtuDepartment $qtuDepartment = null)
    {
        $this->qtuDepartment = $qtuDepartment;

        return $this;
    }

    /**
     * Get qtuDepartment
     *
     * @return \QTU\StudentLecturerBundle\Entity\QtuDepartment
     */
    public function getQtuDepartment()
    {
        return $this->qtuDepartment;
    }
}
