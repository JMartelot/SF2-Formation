<?php

namespace BYS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membership
 *
 * @ORM\Table(name="membership")
 * @ORM\Entity(repositoryClass="BYS\CoreBundle\Repository\MembershipRepository")
 */
class Membership
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
     * @ORM\Column(name="groupName", type="string", length=255)
     */
    private $groupName;

    /**
     * @var UserGroup
     *
     * @ORM\ManyToOne(targetEntity="UserGroup", inversedBy="members")
     * @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     */
    private $group;

    /**
     * @var Person
     *
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="groups")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $person;


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
     * Set groupName
     *
     * @param string $groupName
     *
     * @return Membership
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set group
     *
     * @param \BYS\CoreBundle\Entity\UserGroup $group
     *
     * @return Membership
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
     * Set person
     *
     * @param \BYS\CoreBundle\Entity\Person $person
     *
     * @return Membership
     */
    public function setPerson(\BYS\CoreBundle\Entity\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \BYS\CoreBundle\Entity\Person
     */
    public function getPerson()
    {
        return $this->person;
    }
}
