<?php

namespace QTU\CurriculumBundle\Entity;

/**
 * CurriculumForMajorSpecialized
 */
class CurriculumForMajorSpecialized
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \QTU\CurriculumBundle\Entity\CurriculumForMajor
     */
    private $curriculumForMajor;


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
     * Set name
     *
     * @param string $name
     *
     * @return CurriculumForMajorSpecialized
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CurriculumForMajorSpecialized
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set curriculumForMajor
     *
     * @param \QTU\CurriculumBundle\Entity\CurriculumForMajor $curriculumForMajor
     *
     * @return CurriculumForMajorSpecialized
     */
    public function setCurriculumForMajor(\QTU\CurriculumBundle\Entity\CurriculumForMajor $curriculumForMajor = null)
    {
        $this->curriculumForMajor = $curriculumForMajor;

        return $this;
    }

    /**
     * Get curriculumForMajor
     *
     * @return \QTU\CurriculumBundle\Entity\CurriculumForMajor
     */
    public function getCurriculumForMajor()
    {
        return $this->curriculumForMajor;
    }
}
