<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userteacher
 *
 * @ORM\Table(name="userteacher", indexes={@ORM\Index(name="fk_UserTeacher_User1_idx", columns={"user"}), @ORM\Index(name="fk_UserTeacher_TypeTeacher1_idx", columns={"type"}), @ORM\Index(name="fk_UserTeacher_Profession1_idx", columns={"profession"})})
 * @ORM\Entity
 */
class Userteacher
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
     * @var \Profession
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Profession")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profession", referencedColumnName="id")
     * })
     */
    private $profession;

    /**
     * @var \Typeteacher
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Typeteacher")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type", referencedColumnName="id")
     * })
     */
    private $type;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Userteacher
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
     * Set profession
     *
     * @param \BackendBundle\Entity\Profession $profession
     *
     * @return Userteacher
     */
    public function setProfession(\BackendBundle\Entity\Profession $profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return \BackendBundle\Entity\Profession
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set type
     *
     * @param \BackendBundle\Entity\Typeteacher $type
     *
     * @return Userteacher
     */
    public function setType(\BackendBundle\Entity\Typeteacher $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \BackendBundle\Entity\Typeteacher
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set user
     *
     * @param \BackendBundle\Entity\User $user
     *
     * @return Userteacher
     */
    public function setUser(\BackendBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BackendBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
