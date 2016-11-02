<?php

namespace BYS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Tests\Fixtures\User;

/**
 * Proposal
 *
 * @ORM\Table(name="proposal")
 * @ORM\Entity(repositoryClass="BYS\CoreBundle\Repository\ProposalRepository")
 */
class Proposal
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var bool
     *
     * @ORM\Column(name="choosed", type="boolean")
     */
    private $choosed;

    /**
     * @var Restaurant
     *
     * @ORM\ManyToOne(targetEntity="Restaurant")
     * @ORM\JoinColumn(name="restaurant_id", referencedColumnName="id")
     */
    private $restaurant;

    /**
     * @var UserGroup
     *
     * @ORM\ManyToOne(targetEntity="UserGroup", inversedBy="proposals")
     * @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     */
    private $group;

    /**
     * @var Person
     *
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="proposals")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $owner;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Reply", mappedBy="proposal")
     */
    private $replies;

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
     * @return Proposal
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
     * Set choosed
     *
     * @param boolean $choosed
     *
     * @return Proposal
     */
    public function setChoosed($choosed)
    {
        $this->choosed = $choosed;

        return $this;
    }

    /**
     * Get choosed
     *
     * @return bool
     */
    public function getChoosed()
    {
        return $this->choosed;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->replies = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set restaurant
     *
     * @param \BYS\CoreBundle\Entity\Restaurant $restaurant
     *
     * @return Proposal
     */
    public function setRestaurant(\BYS\CoreBundle\Entity\Restaurant $restaurant = null)
    {
        $this->restaurant = $restaurant;

        return $this;
    }

    /**
     * Get restaurant
     *
     * @return \BYS\CoreBundle\Entity\Restaurant
     */
    public function getRestaurant()
    {
        return $this->restaurant;
    }

    /**
     * Set group
     *
     * @param \BYS\CoreBundle\Entity\UserGroup $group
     *
     * @return Proposal
     */
    public function setGroup(\BYS\CoreBundle\Entity\UserGroup $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \BYS\CoreBundle\Entity\UserGroup
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set owner
     *
     * @param \BYS\CoreBundle\Entity\Person $owner
     *
     * @return Proposal
     */
    public function setOwner(\BYS\CoreBundle\Entity\Person $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return \BYS\CoreBundle\Entity\Person
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Add reply
     *
     * @param \BYS\CoreBundle\Entity\Reply $reply
     *
     * @return Proposal
     */
    public function addReply(\BYS\CoreBundle\Entity\Reply $reply)
    {
        $this->replies[] = $reply;

        return $this;
    }

    /**
     * Remove reply
     *
     * @param \BYS\CoreBundle\Entity\Reply $reply
     */
    public function removeReply(\BYS\CoreBundle\Entity\Reply $reply)
    {
        $this->replies->removeElement($reply);
    }

    /**
     * Get replies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReplies()
    {
        return $this->replies;
    }
}
