<?php

namespace QTU\CurriculumBundle\Entity;

/**
 * CurriculumForMajor
 */
class CurriculumForMajor
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
     * @var \QTU\CurriculumBundle\Entity\MajorDetails
     */
    private $majorDetails;


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
     * @return CurriculumForMajor
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
     * @return CurriculumForMajor
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
     * @return CurriculumForMajor
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
     * Set majorDetails
     *
     * @param \QTU\DepartmentMajorBundle\Entity\MajorDetails $majorDetails
     *
     * @return CurriculumForMajor
     */
    public function setMajorDetails(\QTU\DepartmentMajorBundle\Entity\MajorDetails $majorDetails = null)
    {
        $this->majorDetails = $majorDetails;

        return $this;
    }

    /**
     * Get majorDetails
     *
     * @return \QTU\CurriculumBundle\Entity\MajorDetails
     */
    public function getMajorDetails()
    {
        return $this->majorDetails;
    }
}
