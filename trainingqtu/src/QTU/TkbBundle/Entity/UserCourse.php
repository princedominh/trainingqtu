<?php

namespace QTU\TkbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserCourse
 *
 * @ORM\Table(name="tkb_user_course")
 * @ORM\Entity
 */
class UserCourse
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
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Course", inversedBy="user_courses")
     * @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     */
    protected $course;

    /**
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User", inversedBy="user_courses")
     * @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     */
    protected $learner;

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
     * Set description
     *
     * @param string $description
     * @return UserCourse
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Set course
     *
     * @param Course $course
     * @return UserCourse
     */
    public function setCourse(Course $course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return Course
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set Learner
     *
     * @param Application\Sonata\UserBundle\Entity\User $learner
     * @return UserCourse
     */
    public function setLearner(Application\Sonata\UserBundle\Entity\User $learner)
    {
        $this->learner = $learner;

        return $this;
    }

    /**
     * Get Learner
     *
     * @return Application\Sonata\UserBundle\Entity\User
     */
    public function getLearner()
    {
        return $this->learner;
    }

}
