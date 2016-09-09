<?php

namespace QTU\CurriculumBundle\Entity;

/**
 * Subject
 */
class Subject
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
    private $name;

    /**
     * @var boolean
     */
    private $credit;

    /**
     * @var boolean
     */
    private $ntheory = '0';

    /**
     * @var boolean
     */
    private $npractice = '0';

    /**
     * @var boolean
     */
    private $nproject = '0';

    /**
     * @var string
     */
    private $condition;


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
     *
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
     * @param boolean $credit
     *
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
     * @return boolean
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set ntheory
     *
     * @param boolean $ntheory
     *
     * @return Subject
     */
    public function setNtheory($ntheory)
    {
        $this->ntheory = $ntheory;

        return $this;
    }

    /**
     * Get ntheory
     *
     * @return boolean
     */
    public function getNtheory()
    {
        return $this->ntheory;
    }

    /**
     * Set npractice
     *
     * @param boolean $npractice
     *
     * @return Subject
     */
    public function setNpractice($npractice)
    {
        $this->npractice = $npractice;

        return $this;
    }

    /**
     * Get npractice
     *
     * @return boolean
     */
    public function getNpractice()
    {
        return $this->npractice;
    }

    /**
     * Set nproject
     *
     * @param boolean $nproject
     *
     * @return Subject
     */
    public function setNproject($nproject)
    {
        $this->nproject = $nproject;

        return $this;
    }

    /**
     * Get nproject
     *
     * @return boolean
     */
    public function getNproject()
    {
        return $this->nproject;
    }

    /**
     * Set condition
     *
     * @param string $condition
     *
     * @return Subject
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }
}
