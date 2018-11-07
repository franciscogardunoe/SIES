<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Civilstatus
 *
 * @ORM\Table(name="civilstatus")
 * @ORM\Entity
 */
class Civilstatus
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
     * @ORM\Column(name="civil", type="string", length=45, nullable=false)
     */
    private $civil;



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
     * Set civil
     *
     * @param string $civil
     *
     * @return Civilstatus
     */
    public function setCivil($civil)
    {
        $this->civil = $civil;

        return $this;
    }

    /**
     * Get civil
     *
     * @return string
     */
    public function getCivil()
    {
        return $this->civil;
    }
}
