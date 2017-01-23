<?php

namespace QTU\TkbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Sonata\UserBundle\Entity\User as User;

/**
 * StudentDetail
 *
 * @ORM\Table(name="tkb_student_detail")
 * @ORM\Entity
 */
class StudentDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * số cmnd
     * @var string
     *
     * @ORM\Column(name="identificationNumber", type="string", length=10)
     */
    private $identificationNumber;

    /**
     * Ngày cấp
     * @var \DateTime
     *
     * @ORM\Column(name="issued_at", type="date")
     */
    private $issuedAt;

    /**
     * Nơi cấp
     * @var string
     *
     * @ORM\Column(name="issued_on", type="string", length=255)
     */
    private $issuedOn;

    /**
     * @var string
     *
     * @ORM\Column(name="placeOfBirth", type="string", length=255)
     */
    private $placeOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="nationality", type="string", length=255)
     */
    private $nationality;

    /**
     * dân tộc
     * @var string
     *
     * @ORM\Column(name="ethnic", type="string", length=50)
     */
    private $ethnic;


    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


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
     * Set identificationNumber
     *
     * @param string $identificationNumber
     * @return StudentDetail
     */
    public function setIdentificationNumber($identificationNumber)
    {
        $this->identificationNumber = $identificationNumber;

        return $this;
    }

    /**
     * Get identificationNumber
     *
     * @return string 
     */
    public function getIdentificationNumber()
    {
        return $this->identificationNumber;
    }

    /**
     * Set issuedAt
     *
     * @param \DateTime $issuedAt
     * @return StudentDetail
     */
    public function setIssuedAt($issuedAt)
    {
        $this->issuedAt = $issuedAt;

        return $this;
    }

    /**
     * Get issuedAt
     *
     * @return \DateTime 
     */
    public function getIssuedAt()
    {
        return $this->issuedAt;
    }

    /**
     * Set issuedOn
     *
     * @param string $issuedOn
     * @return StudentDetail
     */
    public function setIssuedOn($issuedOn)
    {
        $this->issuedOn = $issuedOn;

        return $this;
    }

    /**
     * Get issuedOn
     *
     * @return string 
     */
    public function getIssuedOn()
    {
        return $this->issuedOn;
    }

    /**
     * Set placeOfBirth
     *
     * @param string $placeOfBirth
     * @return StudentDetail
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->placeOfBirth = $placeOfBirth;

        return $this;
    }

    /**
     * Get placeOfBirth
     *
     * @return string 
     */
    public function getPlaceOfBirth()
    {
        return $this->placeOfBirth;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     * @return StudentDetail
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set ethnic
     *
     * @param string $ethnic
     * @return StudentDetail
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
     * Set User
     *
     * @param Application\Sonata\UserBundle\Entity\User $user
     * @return StudentDetail
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return Application\Sonata\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }    
}
