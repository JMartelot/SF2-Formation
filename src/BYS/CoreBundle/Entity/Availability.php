<?php

namespace BYS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Availability
 *
 * @ORM\Table(name="availability")
 * @ORM\Entity(repositoryClass="BYS\CoreBundle\Repository\AvailabilityRepository")
 */
class Availability
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="Membership", inversedBy="availability")
     * @ORM\JoinColumn(name="membership_id", referencedColumnName="id")
     */
    private $membership;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="free_from", type="string", length=11)
     */
    private $freeFrom;

    /**
     * @var bool
     *
     * @ORM\Column(name="isPresent", type="boolean")
     */
    private $isPresent;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Availability
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set freeFrom
     *
     * @param string $freeFrom
     *
     * @return Availability
     */
    public function setFreeFrom($freeFrom)
    {
        $this->freeFrom = $freeFrom;

        return $this;
    }

    /**
     * Get freeFrom
     *
     * @return string
     */
    public function getFreeFrom()
    {
        return $this->freeFrom;
    }

    /**
     * Set isPresent
     *
     * @param boolean $isPresent
     *
     * @return Availability
     */
    public function setIsPresent($isPresent)
    {
        $this->isPresent = $isPresent;

        return $this;
    }

    /**
     * Get isPresent
     *
     * @return bool
     */
    public function getIsPresent()
    {
        return $this->isPresent;
    }

    /**
     * Set membership
     *
     * @param \BYS\CoreBundle\Entity\membership $membership
     *
     * @return Availability
     */
    public function setMembership(\BYS\CoreBundle\Entity\membership $membership = null)
    {
        $this->membership = $membership;

        return $this;
    }

    /**
     * Get membership
     *
     * @return \BYS\CoreBundle\Entity\membership
     */
    public function getMembership()
    {
        return $this->membership;
    }
}
