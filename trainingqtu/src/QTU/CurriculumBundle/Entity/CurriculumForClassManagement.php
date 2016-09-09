<?php

namespace QTU\CurriculumBundle\Entity;

use QTU\StudentLecturerBundle\Entity\ClassManagement as ClassManagement;

/**
 * CurriculumForClassManagement
 */
class CurriculumForClassManagement
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
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \QTU\StudentLecturerBundle\Entity\ClassManagement
     */
    private $classManagement;


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
     * @return CurriculumForClassManagement
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
     * Set name
     *
     * @param string $name
     *
     * @return CurriculumForClassManagement
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return CurriculumForClassManagement
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

    /**
     * Set classManagement
     *
     * @param \QTU\StudentLecturerBundle\Entity\ClassManagement $classManagement
     *
     * @return CurriculumForClassManagement
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
}
