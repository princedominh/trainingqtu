<?php

namespace QTU\CurriculumBundle\Entity;

/**
 * CurriculumForClassManagementSubject
 */
class CurriculumForClassManagementSubject
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $semester = '1';

    /**
     * @var integer
     */
    private $groupValue;

    /**
     * @var integer
     */
    private $groupQuantity;

    /**
     * @var \QTU\CurriculumBundle\Entity\Subject
     */
    private $subject;

    /**
     * @var \QTU\CurriculumBundle\Entity\KnowledgeBlock
     */
    private $knowledgeBlock;

    /**
     * @var \QTU\CurriculumBundle\Entity\CurriculumForClassManagementSpecialized
     */
    private $curriculumForClassManagementSpecialized;


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
     * Set semester
     *
     * @param boolean $semester
     *
     * @return CurriculumForClassManagementSubject
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;

        return $this;
    }

    /**
     * Get semester
     *
     * @return boolean
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Set groupValue
     *
     * @param integer $groupValue
     *
     * @return CurriculumForClassManagementSubject
     */
    public function setGroupValue($groupValue)
    {
        $this->groupValue = $groupValue;

        return $this;
    }

    /**
     * Get groupValue
     *
     * @return integer
     */
    public function getGroupValue()
    {
        return $this->groupValue;
    }

    /**
     * Set groupQuantity
     *
     * @param integer $groupQuantity
     *
     * @return CurriculumForClassManagementSubject
     */
    public function setGroupQuantity($groupQuantity)
    {
        $this->groupQuantity = $groupQuantity;

        return $this;
    }

    /**
     * Get groupQuantity
     *
     * @return integer
     */
    public function getGroupQuantity()
    {
        return $this->groupQuantity;
    }

    /**
     * Set subject
     *
     * @param \QTU\CurriculumBundle\Entity\Subject $subject
     *
     * @return CurriculumForClassManagementSubject
     */
    public function setSubject(\QTU\CurriculumBundle\Entity\Subject $subject = null)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return \QTU\CurriculumBundle\Entity\Subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set knowledgeBlock
     *
     * @param \QTU\CurriculumBundle\Entity\KnowledgeBlock $knowledgeBlock
     *
     * @return CurriculumForClassManagementSubject
     */
    public function setKnowledgeBlock(\QTU\CurriculumBundle\Entity\KnowledgeBlock $knowledgeBlock = null)
    {
        $this->knowledgeBlock = $knowledgeBlock;

        return $this;
    }

    /**
     * Get knowledgeBlock
     *
     * @return \QTU\CurriculumBundle\Entity\KnowledgeBlock
     */
    public function getKnowledgeBlock()
    {
        return $this->knowledgeBlock;
    }

    /**
     * Set curriculumForClassManagementSpecialized
     *
     * @param \QTU\CurriculumBundle\Entity\CurriculumForClassManagementSpecialized $curriculumForClassManagementSpecialized
     *
     * @return CurriculumForClassManagementSubject
     */
    public function setCurriculumForClassManagementSpecialized(\QTU\CurriculumBundle\Entity\CurriculumForClassManagementSpecialized $curriculumForClassManagementSpecialized = null)
    {
        $this->curriculumForClassManagementSpecialized = $curriculumForClassManagementSpecialized;

        return $this;
    }

    /**
     * Get curriculumForClassManagementSpecialized
     *
     * @return \QTU\CurriculumBundle\Entity\CurriculumForClassManagementSpecialized
     */
    public function getCurriculumForClassManagementSpecialized()
    {
        return $this->curriculumForClassManagementSpecialized;
    }
}
