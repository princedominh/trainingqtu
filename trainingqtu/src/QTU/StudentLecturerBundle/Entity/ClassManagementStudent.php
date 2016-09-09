<?php

namespace QTU\StudentLecturerBundle\Entity;

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
     * @var \QTU\StudentLecturerBundle\Entity\ClassManagement
     */
    private $classManagement;

    /**
     * @var \QTU\StudentLecturerBundle\Entity\Student
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
     * @param \QTU\StudentLecturerBundle\Entity\ClassManagement $classManagement
     *
     * @return ClassManagementStudent
     */
    public function setClassManagement(\QTU\StudentLecturerBundle\Entity\ClassManagement $classManagement = null)
    {
        $this->classManagement = $classManagement;

        return $this;
    }

    /**
     * Get classManagement
     *
     * @return \QTU\StudentLecturerBundle\Entity\ClassManagement
     */
    public function getClassManagement()
    {
        return $this->classManagement;
    }

    /**
     * Set student
     *
     * @param \QTU\StudentLecturerBundle\Entity\Student $student
     *
     * @return ClassManagementStudent
     */
    public function setStudent(\QTU\StudentLecturerBundle\Entity\Student $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \QTU\StudentLecturerBundle\Entity\Student
     */
    public function getStudent()
    {
        return $this->student;
    }
}
