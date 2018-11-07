<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group
 *
 * @ORM\Table(name="group", indexes={@ORM\Index(name="fk_Group_Career1_idx", columns={"career"}), @ORM\Index(name="fk_Group_User1_idx", columns={"tutor"})})
 * @ORM\Entity
 */
class Group
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="group", type="string", length=3, nullable=false)
     */
    private $group;

    /**
     * @var integer
     *
     * @ORM\Column(name="generation", type="integer", nullable=false)
     */
    private $generation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateStart", type="date", nullable=false)
     */
    private $datestart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnd", type="date", nullable=false)
     */
    private $dateend;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '1';

    /**
     * @var \Career
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Career")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="career", referencedColumnName="id")
     * })
     */
    private $career;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tutor", referencedColumnName="id")
     * })
     */
    private $tutor;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Group
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set group
     *
     * @param string $group
     *
     * @return Group
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set generation
     *
     * @param integer $generation
     *
     * @return Group
     */
    public function setGeneration($generation)
    {
        $this->generation = $generation;

        return $this;
    }

    /**
     * Get generation
     *
     * @return integer
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * Set datestart
     *
     * @param \DateTime $datestart
     *
     * @return Group
     */
    public function setDatestart($datestart)
    {
        $this->datestart = $datestart;

        return $this;
    }

    /**
     * Get datestart
     *
     * @return \DateTime
     */
    public function getDatestart()
    {
        return $this->datestart;
    }

    /**
     * Set dateend
     *
     * @param \DateTime $dateend
     *
     * @return Group
     */
    public function setDateend($dateend)
    {
        $this->dateend = $dateend;

        return $this;
    }

    /**
     * Get dateend
     *
     * @return \DateTime
     */
    public function getDateend()
    {
        return $this->dateend;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Group
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set career
     *
     * @param \BackendBundle\Entity\Career $career
     *
     * @return Group
     */
    public function setCareer(\BackendBundle\Entity\Career $career)
    {
        $this->career = $career;

        return $this;
    }

    /**
     * Get career
     *
     * @return \BackendBundle\Entity\Career
     */
    public function getCareer()
    {
        return $this->career;
    }

    /**
     * Set tutor
     *
     * @param \BackendBundle\Entity\User $tutor
     *
     * @return Group
     */
    public function setTutor(\BackendBundle\Entity\User $tutor)
    {
        $this->tutor = $tutor;

        return $this;
    }

    /**
     * Get tutor
     *
     * @return \BackendBundle\Entity\User
     */
    public function getTutor()
    {
        return $this->tutor;
    }
}
