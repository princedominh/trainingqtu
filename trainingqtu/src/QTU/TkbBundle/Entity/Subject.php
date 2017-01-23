<?php

namespace QTU\TkbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table(name="tkb_subject")
 * @ORM\Entity
 */
class Subject
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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=7, unique=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="credit", type="integer")
     */
    private $credit;

    /**
     * @var integer
     *
     * @ORM\Column(name="class_credit", type="integer")
     */
    private $classCredit;

    /**
     * @var integer
     *
     * @ORM\Column(name="lab_credit", type="integer")
     */
    private $labCredit;

    /**
     * @var integer
     *
     * @ORM\Column(name="project_credit", type="integer")
     */
    private $projectCredit;

    /**
     * @var string
     *
     * @ORM\Column(name="metadata", type="text", nullable=true)
     */
    private $metadata;

    /**
     * @ORM\ManyToOne(targetEntity="Faculty", inversedBy="subjects")
     * @ORM\JoinColumn(name="faculty_id", referencedColumnName="id")
     */
    protected $faculty;

    public function __toString() {
        return $this->code . " - " .$this->name;
    }
    
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
     * @return Subject
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
     * @return Subject
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
     * Set credit
     *
     * @param integer $credit
     * @return Subject
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return integer 
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set classCredit
     *
     * @param integer $classCredit
     * @return Subject
     */
    public function setClassCredit($classCredit)
    {
        $this->classCredit = $classCredit;

        return $this;
    }

    /**
     * Get classCredit
     *
     * @return integer 
     */
    public function getClassCredit()
    {
        return $this->classCredit;
    }

    /**
     * Set labCredit
     *
     * @param integer $labCredit
     * @return Subject
     */
    public function setLabCredit($labCredit)
    {
        $this->labCredit = $labCredit;

        return $this;
    }

    /**
     * Get labCredit
     *
     * @return integer 
     */
    public function getLabCredit()
    {
        return $this->labCredit;
    }

    /**
     * Set projectCredit
     *
     * @param integer $projectCredit
     * @return Subject
     */
    public function setProjectCredit($projectCredit)
    {
        $this->projectCredit = $projectCredit;

        return $this;
    }

    /**
     * Get projectCredit
     *
     * @return integer 
     */
    public function getProjectCredit()
    {
        return $this->projectCredit;
    }

    /**
     * Set metadata
     *
     * @param string $metadata
     * @return Subject
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Get metadata
     *
     * @return string 
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
    
    
    /**
     * Set faculty
     *
     * @param Faculty $faculty
     * @return Subject
     */
    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;

        return $this;
    }

    /**
     * Get faculty
     *
     * @return Faculty 
     */
    public function getFaculty()
    {
        return $this->faculty;
    }
    
}
