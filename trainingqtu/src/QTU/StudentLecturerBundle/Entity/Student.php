<?php

namespace QTU\StudentLecturerBundle\Entity;

/**
 * Student
 */
class Student
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
    private $nativeLand;

    /**
     * @var integer
     */
    private $admissionYear = '0';

    /**
     * @var integer
     */
    private $graduationYear;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $ethnic;

    /**
     * @var string
     */
    private $religion;

    /**
     * @var string
     */
    private $permanentAddress;

    /**
     * @var string
     */
    private $identityCard;

    /**
     * @var \DateTime
     */
    private $identityCardAt;

    /**
     * @var string
     */
    private $identityCardLocation;

    /**
     * @var \QTU\StudentLecturerBundle\Entity\StudentStatus
     */
    private $studentStatus;


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
     * @return Student
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
     * Set nativeLand
     *
     * @param string $nativeLand
     *
     * @return Student
     */
    public function setNativeLand($nativeLand)
    {
        $this->nativeLand = $nativeLand;

        return $this;
    }

    /**
     * Get nativeLand
     *
     * @return string
     */
    public function getNativeLand()
    {
        return $this->nativeLand;
    }

    /**
     * Set admissionYear
     *
     * @param integer $admissionYear
     *
     * @return Student
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
     * @return Student
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
     * Set note
     *
     * @param string $note
     *
     * @return Student
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
     * Set ethnic
     *
     * @param string $ethnic
     *
     * @return Student
     */
    public function setEthnic($ethnic)
    {
        $this->ethnic = $ethnic;

        return $this;
    }

    /**
     * Get ethnic
     *
     * @return string
     */
    public function getEthnic()
    {
        return $this->ethnic;
    }

    /**
     * Set religion
     *
     * @param string $religion
     *
     * @return Student
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;

        return $this;
    }

    /**
     * Get religion
     *
     * @return string
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * Set permanentAddress
     *
     * @param string $permanentAddress
     *
     * @return Student
     */
    public function setPermanentAddress($permanentAddress)
    {
        $this->permanentAddress = $permanentAddress;

        return $this;
    }

    /**
     * Get permanentAddress
     *
     * @return string
     */
    public function getPermanentAddress()
    {
        return $this->permanentAddress;
    }

    /**
     * Set identityCard
     *
     * @param string $identityCard
     *
     * @return Student
     */
    public function setIdentityCard($identityCard)
    {
        $this->identityCard = $identityCard;

        return $this;
    }

    /**
     * Get identityCard
     *
     * @return string
     */
    public function getIdentityCard()
    {
        return $this->identityCard;
    }

    /**
     * Set identityCardAt
     *
     * @param \DateTime $identityCardAt
     *
     * @return Student
     */
    public function setIdentityCardAt($identityCardAt)
    {
        $this->identityCardAt = $identityCardAt;

        return $this;
    }

    /**
     * Get identityCardAt
     *
     * @return \DateTime
     */
    public function getIdentityCardAt()
    {
        return $this->identityCardAt;
    }

    /**
     * Set identityCardLocation
     *
     * @param string $identityCardLocation
     *
     * @return Student
     */
    public function setIdentityCardLocation($identityCardLocation)
    {
        $this->identityCardLocation = $identityCardLocation;

        return $this;
    }

    /**
     * Get identityCardLocation
     *
     * @return string
     */
    public function getIdentityCardLocation()
    {
        return $this->identityCardLocation;
    }

    /**
     * Set studentStatus
     *
     * @param \QTU\StudentLecturerBundle\Entity\StudentStatus $studentStatus
     *
     * @return Student
     */
    public function setStudentStatus(\QTU\StudentLecturerBundle\Entity\StudentStatus $studentStatus = null)
    {
        $this->studentStatus = $studentStatus;

        return $this;
    }

    /**
     * Get studentStatus
     *
     * @return \QTU\StudentLecturerBundle\Entity\StudentStatus
     */
    public function getStudentStatus()
    {
        return $this->studentStatus;
    }
}
