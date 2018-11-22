<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assignmentsubject
 *
 * @ORM\Table(name="assignmentsubject", indexes={@ORM\Index(name="fk_Assignment_Subject1_idx", columns={"subject"}), @ORM\Index(name="fk_Assignment_User1_idx", columns={"teacher"})})
 * @ORM\Entity
 */
class Assignmentsubject
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateStart", type="date", nullable=false)
     */
    private $datestart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnd", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dateend;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '1';

    /**
     * @var \Subject
     *
     * @ORM\ManyToOne(targetEntity="Subject")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subject", referencedColumnName="id")
     * })
     */
    private $subject;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="teacher", referencedColumnName="id")
     * })
     */
    private $teacher;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Assignmentsubject
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
     * Set datestart
     *
     * @param \DateTime $datestart
     *
     * @return Assignmentsubject
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
     * @return Assignmentsubject
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
     * @return Assignmentsubject
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
     * Set subject
     *
     * @param \BackendBundle\Entity\Subject $subject
     *
     * @return Assignmentsubject
     */
    public function setSubject(\BackendBundle\Entity\Subject $subject = null)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return \BackendBundle\Entity\Subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set teacher
     *
     * @param \BackendBundle\Entity\User $teacher
     *
     * @return Assignmentsubject
     */
    public function setTeacher(\BackendBundle\Entity\User $teacher = null)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return \BackendBundle\Entity\User
     */
    public function getTeacher()
    {
        return $this->teacher;
    }
}
