<?php

namespace QTU\CurriculumBundle\Entity;

/**
 * CurriculumForClassManagementSpecialized
 */
class CurriculumForClassManagementSpecialized
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
     * @var \QTU\CurriculumBundle\Entity\CurriculumForClassManagement
     */
    private $curriculumForClassManagement;


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
     * @return CurriculumForClassManagementSpecialized
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
     * @return CurriculumForClassManagementSpecialized
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
     * Set curriculumForClassManagement
     *
     * @param \QTU\CurriculumBundle\Entity\CurriculumForClassManagement $curriculumForClassManagement
     *
     * @return CurriculumForClassManagementSpecialized
     */
    public function setCurriculumForClassManagement(\QTU\CurriculumBundle\Entity\CurriculumForClassManagement $curriculumForClassManagement = null)
    {
        $this->curriculumForClassManagement = $curriculumForClassManagement;

        return $this;
    }

    /**
     * Get curriculumForClassManagement
     *
     * @return \QTU\CurriculumBundle\Entity\CurriculumForClassManagement
     */
    public function getCurriculumForClassManagement()
    {
        return $this->curriculumForClassManagement;
    }
}
