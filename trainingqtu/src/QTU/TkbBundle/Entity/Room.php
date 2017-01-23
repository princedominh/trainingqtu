<?php

namespace QTU\TkbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Room
 *
 * @ORM\Table(name="tkb_room")
 * @ORM\Entity
 */
class Room
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
     * @ORM\Column(name="name", type="string", length=10)
     */
    private $name;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(name="slug", length=128, unique=true)
     */
    private $slug;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_table", type="integer")
     */
    private $numTable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_projector", type="boolean", nullable=true)
     */
    private $hasProjector = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_micro", type="boolean", nullable=true)
     */
    private $hasMicro = false;

    /**
     * @var string
     *
     * @ORM\Column(name="type_room", type="string", length=100)
     */
    private $typeRoom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="ScheduleDetail", mappedBy="room")
     */
    protected $scheduleDetails;

    public function __construct($id = 0) {
        if($id!=0) {
            $this->id = $id;
        }
        $this->scheduleDetails = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Room
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
     * @return Room
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
     * Set numTable
     *
     * @param integer $numTable
     * @return Room
     */
    public function setNumTable($numTable)
    {
        $this->numTable = $numTable;

        return $this;
    }

    /**
     * Get numTable
     *
     * @return integer 
     */
    public function getNumTable()
    {
        return $this->numTable;
    }

    /**
     * Set hasProjector
     *
     * @param boolean $hasProjector
     * @return Room
     */
    public function setHasProjector($hasProjector)
    {
        $this->hasProjector = $hasProjector;

        return $this;
    }

    /**
     * Get hasProjector
     *
     * @return boolean 
     */
    public function getHasProjector()
    {
        return $this->hasProjector;
    }

    /**
     * Set hasMicro
     *
     * @param boolean $hasMicro
     * @return Room
     */
    public function setHasMicro($hasMicro)
    {
        $this->hasMicro = $hasMicro;

        return $this;
    }

    /**
     * Get hasMicro
     *
     * @return boolean 
     */
    public function getHasMicro()
    {
        return $this->hasMicro;
    }

    /**
     * Set typeRoom
     *
     * @param string $typeRoom
     * @return Room
     */
    public function setTypeRoom($typeRoom)
    {
        $this->typeRoom = $typeRoom;

        return $this;
    }

    /**
     * Get typeRoom
     *
     * @return string 
     */
    public function getTypeRoom()
    {
        return $this->typeRoom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Room
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
     * Set Classes
     *
     * @param ScheduleDetail $scheduleDetails
     * @return Room
     */
    public function setScheduleDetails($scheduleDetails)
    {
        $this->scheduleDetails = $scheduleDetails;

        return $this;
    }

    /**
     * Get scheduleDetails
     *
     * @return ScheduleDetails 
     */
    public function getScheduleDetails()
    {
        return $this->scheduleDetails;
    }

    public function addScheduleDetail(ScheduleDetail $scheduledetail)
    {
        $this->scheduleDetails[] = $scheduledetail;
    }
}
