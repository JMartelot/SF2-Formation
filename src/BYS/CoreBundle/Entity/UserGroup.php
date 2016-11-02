<?php

namespace BYS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserGroup
 *
 * @ORM\Table(name="user_group")
 * @ORM\Entity(repositoryClass="BYS\CoreBundle\Repository\UserGroupRepository")
 */
class UserGroup
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Restaurant", mappedBy="group")
     */
    private $restaurants;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Proposal", mappedBy="group")
     */
    private $proposals;

    /**
     * @var
     * @Orm\OneToMany(targetEntity="Membership", mappedBy="group")
     */
    private $members;

    /**
     * @var Person
     *
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $owner;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->restaurants = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     *
     * @return UserGroup
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
     * Add restaurant
     *
     * @param \BYS\CoreBundle\Entity\Restaurant $restaurant
     *
     * @return UserGroup
     */
    public function addRestaurant(\BYS\CoreBundle\Entity\Restaurant $restaurant)
    {
        $this->restaurants[] = $restaurant;

        return $this;
    }

    /**
     * Remove restaurant
     *
     * @param \BYS\CoreBundle\Entity\Restaurant $restaurant
     */
    public function removeRestaurant(\BYS\CoreBundle\Entity\Restaurant $restaurant)
    {
        $this->restaurants->removeElement($restaurant);
    }

    /**
     * Get restaurants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRestaurants()
    {
        return $this->restaurants;
    }

    /**
     * Add proposal
     *
     * @param \BYS\CoreBundle\Entity\Proposal $proposal
     *
     * @return UserGroup
     */
    public function addProposal(\BYS\CoreBundle\Entity\Proposal $proposal)
    {
        $this->proposals[] = $proposal;

        return $this;
    }

    /**
     * Remove proposal
     *
     * @param \BYS\CoreBundle\Entity\Proposal $proposal
     */
    public function removeProposal(\BYS\CoreBundle\Entity\Proposal $proposal)
    {
        $this->proposals->removeElement($proposal);
    }

    /**
     * Get proposals
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProposals()
    {
        return $this->proposals;
    }

    /**
     * Add member
     *
     * @param \BYS\CoreBundle\Entity\Membership $member
     *
     * @return UserGroup
     */
    public function addMember(\BYS\CoreBundle\Entity\Membership $member)
    {
        $this->members[] = $member;

        return $this;
    }

    /**
     * Remove member
     *
     * @param \BYS\CoreBundle\Entity\Membership $member
     */
    public function removeMember(\BYS\CoreBundle\Entity\Membership $member)
    {
        $this->members->removeElement($member);
    }

    /**
     * Get members
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set owner
     *
     * @param \BYS\CoreBundle\Entity\Person $owner
     *
     * @return UserGroup
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
}
