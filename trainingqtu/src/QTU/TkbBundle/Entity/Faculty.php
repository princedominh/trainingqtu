<?php

namespace QTU\TkbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

class Faculty
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(name="slug", length=128, unique=true)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_student_management", type="boolean", nullable=true)
     */
    private $isStudentManagement = true;

    /**
     * @ORM\OneToMany(targetEntity="Application\Sonata\UserBundle\Entity\User", mappedBy="faculty")
     */
    protected $instructors;
    
    /**
     * @ORM\OneToMany(targetEntity="ClassP", mappedBy="faculty")
     */
    protected $classPs;
    
    public function __construct() {
        $this->instructors = new ArrayCollection();
    }

    public function __toString() {
        return $this->name;
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
     * Set name
     *
     * @param string $name
     * @return Khoa
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
     * Set slug
     *
     * @param string $slug
     * @return Faculty
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Khoa
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Khoa
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Set isStudentManagement
     *
     * @param boolean $isManageStudent
     * @return Faculty
     */
    public function setIsStudentManagement($isStudentManagement)
    {
        $this->isStudentManagement = $isStudentManagement;

        return $this;
    }

    /**
     * Get isStudentManagement
     *
     * @return boolean 
     */
    public function getIsStudentManagement()
    {
        return $this->isStudentManagement;
    }

    /**
     * 
     * @return ArrayCollection
     */
    public function getInstructors() {
        return $this->instructors;
    }

    public function setInstructors($instructors) {
        $this->instructors = $instructors;
    }
    
    public function addInstructor(\Application\Sonata\UserBundle\Entity\User $instructor = null) {
        $instructor->setFaculty($this);
        $this->instructors->add($instructor);
    }


}
