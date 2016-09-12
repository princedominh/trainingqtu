<?php

namespace QTU\StudentBundle\Entity;

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
     * @var \QTU\StudentBundle\Entity\QtuDepartment
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
     * @param \QTU\StudentBundle\Entity\QtuDepartment $qtuDepartment
     *
     * @return Lecturer
     */
    public function setQtuDepartment(\QTU\StudentBundle\Entity\QtuDepartment $qtuDepartment = null)
    {
        $this->qtuDepartment = $qtuDepartment;

        return $this;
    }

    /**
     * Get qtuDepartment
     *
     * @return \QTU\StudentBundle\Entity\QtuDepartment
     */
    public function getQtuDepartment()
    {
        return $this->qtuDepartment;
    }
}
