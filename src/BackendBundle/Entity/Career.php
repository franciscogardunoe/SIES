<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Career
 *
 * @ORM\Table(name="career", indexes={@ORM\Index(name="fk_Career_Area_idx", columns={"area"})})
 * @ORM\Entity
 */
class Career
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="career", type="string", length=100, nullable=false)
     */
    private $career;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '1';

    /**
     * @var \Area
     *
     * @ORM\ManyToOne(targetEntity="Area")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area", referencedColumnName="id")
     * })
     */
    private $area;



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
     * Set career
     *
     * @param string $career
     *
     * @return Career
     */
    public function setCareer($career)
    {
        $this->career = $career;

        return $this;
    }

    /**
     * Get career
     *
     * @return string
     */
    public function getCareer()
    {
        return $this->career;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Career
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
     * Set status
     *
     * @param integer $status
     *
     * @return Career
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
     * Set area
     *
     * @param \BackendBundle\Entity\Area $area
     *
     * @return Career
     */
    public function setArea(\BackendBundle\Entity\Area $area = null)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return \BackendBundle\Entity\Area
     */
    public function getArea()
    {
        return $this->area;
    }
}
