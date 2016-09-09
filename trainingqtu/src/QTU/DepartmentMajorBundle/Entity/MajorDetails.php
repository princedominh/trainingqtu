<?php

namespace QTU\DepartmentMajorBundle\Entity;

/**
 * MajorDetails
 */
class MajorDetails
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
    private $note;

    /**
     * @var \QTU\DepartmentMajorBundle\Entity\TrainingForm
     */
    private $trainingForm;

    /**
     * @var \QTU\DepartmentMajorBundle\Entity\TrainingLevel
     */
    private $trainingLevel;

    /**
     * @var \QTU\DepartmentMajorBundle\Entity\Major
     */
    private $major;


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
     * @return MajorDetails
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
     * Set note
     *
     * @param string $note
     *
     * @return MajorDetails
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set trainingForm
     *
     * @param \QTU\DepartmentMajorBundle\Entity\TrainingForm $trainingForm
     *
     * @return MajorDetails
     */
    public function setTrainingForm(\QTU\DepartmentMajorBundle\Entity\TrainingForm $trainingForm = null)
    {
        $this->trainingForm = $trainingForm;

        return $this;
    }

    /**
     * Get trainingForm
     *
     * @return \QTU\DepartmentMajorBundle\Entity\TrainingForm
     */
    public function getTrainingForm()
    {
        return $this->trainingForm;
    }

    /**
     * Set trainingLevel
     *
     * @param \QTU\DepartmentMajorBundle\Entity\TrainingLevel $trainingLevel
     *
     * @return MajorDetails
     */
    public function setTrainingLevel(\QTU\DepartmentMajorBundle\Entity\TrainingLevel $trainingLevel = null)
    {
        $this->trainingLevel = $trainingLevel;

        return $this;
    }

    /**
     * Get trainingLevel
     *
     * @return \QTU\DepartmentMajorBundle\Entity\TrainingLevel
     */
    public function getTrainingLevel()
    {
        return $this->trainingLevel;
    }

    /**
     * Set major
     *
     * @param \QTU\DepartmentMajorBundle\Entity\Major $major
     *
     * @return MajorDetails
     */
    public function setMajor(\QTU\DepartmentMajorBundle\Entity\Major $major = null)
    {
        $this->major = $major;

        return $this;
    }

    /**
     * Get major
     *
     * @return \QTU\DepartmentMajorBundle\Entity\Major
     */
    public function getMajor()
    {
        return $this->major;
    }
}
