<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="mail_UNIQUE", columns={"email"}), @ORM\UniqueConstraint(name="curp_UNIQUE", columns={"curp"}), @ORM\UniqueConstraint(name="imss_UNIQUE", columns={"imss"})}, indexes={@ORM\Index(name="fk_User_Role1_idx", columns={"role"}), @ORM\Index(name="fk_User_CivilStatus1_idx", columns={"civil"})})
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="secondSurname", type="string", length=50, nullable=true)
     */
    private $secondsurname;

    /**
     * @var integer
     *
     * @ORM\Column(name="gender", type="integer", nullable=false)
     */
    private $gender;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdayDate", type="date", nullable=false)
     */
    private $birthdaydate;

    /**
     * @var string
     *
     * @ORM\Column(name="curp", type="string", length=20, nullable=false)
     */
    private $curp;

    /**
     * @var string
     *
     * @ORM\Column(name="imss", type="string", length=18, nullable=false)
     */
    private $imss;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=90, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=150, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=45, nullable=false)
     */
    private $photo = 'photo_male.png';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \Civilstatus
     *
     * @ORM\ManyToOne(targetEntity="Civilstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="civil", referencedColumnName="id")
     * })
     */
    private $civil;

    /**
     * @var \Role
     *
     * @ORM\ManyToOne(targetEntity="Role")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role", referencedColumnName="id")
     * })
     */
    private $role;



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
     *
     * @return User
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
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set secondsurname
     *
     * @param string $secondsurname
     *
     * @return User
     */
    public function setSecondsurname($secondsurname)
    {
        $this->secondsurname = $secondsurname;

        return $this;
    }

    /**
     * Get secondsurname
     *
     * @return string
     */
    public function getSecondsurname()
    {
        return $this->secondsurname;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     *
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthdaydate
     *
     * @param \DateTime $birthdaydate
     *
     * @return User
     */
    public function setBirthdaydate($birthdaydate)
    {
        $this->birthdaydate = $birthdaydate;

        return $this;
    }

    /**
     * Get birthdaydate
     *
     * @return \DateTime
     */
    public function getBirthdaydate()
    {
        return $this->birthdaydate;
    }

    /**
     * Set curp
     *
     * @param string $curp
     *
     * @return User
     */
    public function setCurp($curp)
    {
        $this->curp = $curp;

        return $this;
    }

    /**
     * Get curp
     *
     * @return string
     */
    public function getCurp()
    {
        return $this->curp;
    }

    /**
     * Set imss
     *
     * @param string $imss
     *
     * @return User
     */
    public function setImss($imss)
    {
        $this->imss = $imss;

        return $this;
    }

    /**
     * Get imss
     *
     * @return string
     */
    public function getImss()
    {
        return $this->imss;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return User
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return User
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
     * Set civil
     *
     * @param \BackendBundle\Entity\Civilstatus $civil
     *
     * @return User
     */
    public function setCivil(\BackendBundle\Entity\Civilstatus $civil = null)
    {
        $this->civil = $civil;

        return $this;
    }

    /**
     * Get civil
     *
     * @return \BackendBundle\Entity\Civilstatus
     */
    public function getCivil()
    {
        return $this->civil;
    }

    /**
     * Set role
     *
     * @param \BackendBundle\Entity\Role $role
     *
     * @return User
     */
    public function setRole(\BackendBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \BackendBundle\Entity\Role
     */
    public function getRole()
    {
        return $this->role;
    }
}
