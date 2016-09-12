<?php

namespace QTU\StudentBundle\Entity;

/**
 * ClassManagementStudent
 */
class ClassManagementStudent
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \QTU\StudentBundle\Entity\ClassManagement
     */
    private $classManagement;

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
     * Set classManagement
     *
     * @param \QTU\StudentBundle\Entity\ClassManagement $classManagement
     *
     * @return ClassManagementStudent
     */
    public function setClassManagement(\QTU\StudentBundle\Entity\ClassManagement $classManagement = null)
    {
        $this->classManagement = $classManagement;

        return $this;
    }

    /**
     * Get classManagement
     *
     * @return \QTU\StudentBundle\Entity\ClassManagement
     */
    public function getClassManagement()
    {
        return $this->classManagement;
    }

    /**
     * Set student
     *
     * @param \QTU\StudentBundle\Entity\Student $student
     *
     * @return ClassManagementStudent
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
