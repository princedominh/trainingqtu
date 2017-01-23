<?php

namespace QTU\DepartmentMajorBundle\Entity;

/**
 * Major
 */
class Major
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $shortname;

    /**
     * @var string
     */
    private $fullname;
    
     /**
     * @var string
     */
    private $code;
   

    /**
     * @var \QTU\DepartmentMajorBundle\Entity\Department
     */
    private $department;


    public function __toString() {
        return $this->fullname;
    }

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
     * Set shortname
     *
     * @param string $shortname
     *
     * @return Major
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Get shortname
     *
     * @return string
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     *
     * @return Major
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Major
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
     * Set department
     *
     * @param \QTU\DepartmentMajorBundle\Entity\Department $department
     *
     * @return Major
     */
    public function setDepartment(\QTU\DepartmentMajorBundle\Entity\Department $department = null)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return \QTU\DepartmentMajorBundle\Entity\Department
     */
    public function getDepartment()
    {
        return $this->department;
    }
}
