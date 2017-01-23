<?php

namespace QTU\TkbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ClassP
 *
 * @ORM\Table(name="tkb_class_p")
 * @ORM\Entity
 */
class ClassP
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
     * @ORM\Column(name="email", length=128, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_attendant", type="integer", nullable=true)
     */
    private $numAttendant;

    /**
     * @ORM\ManyToOne(targetEntity="Faculty", inversedBy="classPs")
     * @ORM\JoinColumn(name="faculty_id", referencedColumnName="id")
     */
    protected $faculty;

    /**
     * @ORM\ManyToOne(targetEntity="Term", inversedBy="classPs")
     * @ORM\JoinColumn(name="term_id", referencedColumnName="id")
     */
    protected $currentTerm;

    /**
     * @ORM\ManyToMany(targetEntity="Course", mappedBy="classes")
     **/
    protected $courses;

    /**
     * @ORM\ManyToMany(targetEntity="Application\Sonata\UserBundle\Entity\User", inversedBy="classps")
     * @ORM\JoinTable(name="tkb_classp_instructors")
     **/
    protected $instructors;

    /**
     * @var boolean
     *
     * @ORM\Column(name="still_study", type="boolean", nullable=true)
     */
    private $stillStudy = true;

    public function __construct() {
        $this->courses = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return ClassP
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
     * @return ClassP
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
     * Set email
     *
     * @param string $email
     * @return ClassP
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
     * Set numAttendant
     *
     * @param integer $numAttendant
     * @return ClassP
     */
    public function setNumAttendant($numAttendant)
    {
        $this->numAttendant = $numAttendant;

        return $this;
    }

    /**
     * Get numAttendant
     *
     * @return integer 
     */
    public function getNumAttendant()
    {
        return $this->numAttendant;
    }
    
    /**
     * Set faculty
     *
     * @param Faculty $faculty
     * @return Instructor
     */
    public function setFaculty(Faculty $faculty)
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
    
    /**
     * Set currentTerm
     *
     * @param Term $term
     * @return Instructor
     */
    public function setCurrentTerm(Term $term)
    {
        $this->currentTerm = $term;

        return $this;
    }

    /**
     * Get currentTerm
     *
     * @return Term
     */
    public function getCurrentTerm()
    {
        return $this->currentTerm;
    }

    /**
     * Set stillStudy
     *
     * @param boolean $stillStudy
     * @return ClassP
     */
    public function setStillStudy($stillStudy)
    {
        $this->stillStudy = $stillStudy;

        return $this;
    }

    /**
     * Get stillStudy
     *
     * @return boolean 
     */
    public function getStillStudy()
    {
        return $this->stillStudy;
    }
}
