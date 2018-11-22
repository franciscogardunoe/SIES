<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assignmentstudent
 *
 * @ORM\Table(name="assignmentstudent", indexes={@ORM\Index(name="fk_AssignmentStudent_User1_idx", columns={"student"}), @ORM\Index(name="fk_AssignmentStudent_Group1_idx", columns={"group"})})
 * @ORM\Entity
 */
class Assignmentstudent
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
     * @var \Group
     *
     * @ORM\ManyToOne(targetEntity="Group")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group", referencedColumnName="id")
     * })
     */
    private $group;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="student", referencedColumnName="id")
     * })
     */
    private $student;



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
     * @param \BackendBundle\Entity\Group $group
     *
     * @return Assignmentstudent
     */
    public function setGroup(\BackendBundle\Entity\Group $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \BackendBundle\Entity\Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set student
     *
     * @param \BackendBundle\Entity\User $student
     *
     * @return Assignmentstudent
     */
    public function setStudent(\BackendBundle\Entity\User $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \BackendBundle\Entity\User
     */
    public function getStudent()
    {
        return $this->student;
    }
}
