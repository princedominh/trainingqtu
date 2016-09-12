<?php

namespace QTU\LecturerBundle\Entity;

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
     * @var \QTU\DepartmentMajorBundle\Entity\Department
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
     * @param \QTU\DepartmentMajorBundle\Entity\Department $qtuDepartment
     *
     * @return Lecturer
     */
    public function setQtuDepartment(\QTU\DepartmentMajorBundle\Entity\Department $qtuDepartment = null)
    {
        $this->qtuDepartment = $qtuDepartment;

        return $this;
    }

    /**
     * Get qtuDepartment
     *
     * @return \QTU\DepartmentMajorBundle\Entity\Department
     */
    public function getQtuDepartment()
    {
        return $this->qtuDepartment;
    }
}

