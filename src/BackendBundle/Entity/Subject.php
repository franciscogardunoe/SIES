<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table(name="subject", indexes={@ORM\Index(name="fk_Subject_TypeSubject1_idx", columns={"type"})})
 * @ORM\Entity
 */
class Subject
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
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="keySubject", type="string", length=15, nullable=false)
     */
    private $keysubject;

    /**
     * @var integer
     *
     * @ORM\Column(name="credits", type="integer", nullable=false)
     */
    private $credits;

    /**
     * @var integer
     *
     * @ORM\Column(name="semester", type="integer", nullable=false)
     */
    private $semester;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '1';

    /**
     * @var \Typesubject
     *
     * @ORM\ManyToOne(targetEntity="Typesubject")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type", referencedColumnName="id")
     * })
     */
    private $type;



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
     * Set subject
     *
     * @param string $subject
     *
     * @return Subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set keysubject
     *
     * @param string $keysubject
     *
     * @return Subject
     */
    public function setKeysubject($keysubject)
    {
        $this->keysubject = $keysubject;

        return $this;
    }

    /**
     * Get keysubject
     *
     * @return string
     */
    public function getKeysubject()
    {
        return $this->keysubject;
    }

    /**
     * Set credits
     *
     * @param integer $credits
     *
     * @return Subject
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;

        return $this;
    }

    /**
     * Get credits
     *
     * @return integer
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set semester
     *
     * @param integer $semester
     *
     * @return Subject
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;

        return $this;
    }

    /**
     * Get semester
     *
     * @return integer
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Subject
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
     * Set type
     *
     * @param \BackendBundle\Entity\Typesubject $type
     *
     * @return Subject
     */
    public function setType(\BackendBundle\Entity\Typesubject $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \BackendBundle\Entity\Typesubject
     */
    public function getType()
    {
        return $this->type;
    }
}
