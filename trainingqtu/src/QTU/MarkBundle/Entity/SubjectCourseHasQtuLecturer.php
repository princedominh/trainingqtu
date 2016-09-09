<?php

namespace QTU\MarkBundle\Entity;

/**
 * SubjectCourseHasQtuLecturer
 */
class SubjectCourseHasQtuLecturer
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \QTU\MarkBundle\Entity\SubjectCourse
     */
    private $subjectCourse;

    /**
     * @var \QTU\MarkBundle\Entity\Lecturer
     */
    private $lecturer;


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
     * Set subjectCourse
     *
     * @param \QTU\MarkBundle\Entity\SubjectCourse $subjectCourse
     *
     * @return SubjectCourseHasQtuLecturer
     */
    public function setSubjectCourse(\QTU\MarkBundle\Entity\SubjectCourse $subjectCourse = null)
    {
        $this->subjectCourse = $subjectCourse;

        return $this;
    }

    /**
     * Get subjectCourse
     *
     * @return \QTU\MarkBundle\Entity\SubjectCourse
     */
    public function getSubjectCourse()
    {
        return $this->subjectCourse;
    }

    /**
     * Set lecturer
     *
     * @param \QTU\MarkBundle\Entity\Lecturer $lecturer
     *
     * @return SubjectCourseHasQtuLecturer
     */
    public function setLecturer(\QTU\MarkBundle\Entity\Lecturer $lecturer = null)
    {
        $this->lecturer = $lecturer;

        return $this;
    }

    /**
     * Get lecturer
     *
     * @return \QTU\MarkBundle\Entity\Lecturer
     */
    public function getLecturer()
    {
        return $this->lecturer;
    }
}
