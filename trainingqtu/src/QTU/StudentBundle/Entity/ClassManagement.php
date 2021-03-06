<?php

namespace QTU\StudentBundle\Entity;

/**
 * ClassManagement
 */
class ClassManagement
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
     * @var integer
     */
    private $admissionYear;

    /**
     * @var integer
     */
    private $graduationYear;

    /**
     * @var integer
     */
    private $maxDurationYear;

    /**
     * @var \QTU\StudentBundle\Entity\MajorDetails
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
     * Set shortname
     *
     * @param string $shortname
     *
     * @return ClassManagement
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
     * @return ClassManagement
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
     * Set admissionYear
     *
     * @param integer $admissionYear
     *
     * @return ClassManagement
     */
    public function setAdmissionYear($admissionYear)
    {
        $this->admissionYear = $admissionYear;

        return $this;
    }

    /**
     * Get admissionYear
     *
     * @return integer
     */
    public function getAdmissionYear()
    {
        return $this->admissionYear;
    }

    /**
     * Set graduationYear
     *
     * @param integer $graduationYear
     *
     * @return ClassManagement
     */
    public function setGraduationYear($graduationYear)
    {
        $this->graduationYear = $graduationYear;

        return $this;
    }

    /**
     * Get graduationYear
     *
     * @return integer
     */
    public function getGraduationYear()
    {
        return $this->graduationYear;
    }

    /**
     * Set maxDurationYear
     *
     * @param integer $maxDurationYear
     *
     * @return ClassManagement
     */
    public function setMaxDurationYear($maxDurationYear)
    {
        $this->maxDurationYear = $maxDurationYear;

        return $this;
    }

    /**
     * Get maxDurationYear
     *
     * @return integer
     */
    public function getMaxDurationYear()
    {
        return $this->maxDurationYear;
    }

    /**
     * Set majorDetails
     *
     * @param \QTU\StudentBundle\Entity\MajorDetails $majorDetails
     *
     * @return ClassManagement
     */
    public function setMajorDetails(\QTU\StudentBundle\Entity\MajorDetails $majorDetails = null)
    {
        $this->majorDetails = $majorDetails;

        return $this;
    }

    /**
     * Get majorDetails
     *
     * @return \QTU\StudentBundle\Entity\MajorDetails
     */
    public function getMajorDetails()
    {
        return $this->majorDetails;
    }
}
