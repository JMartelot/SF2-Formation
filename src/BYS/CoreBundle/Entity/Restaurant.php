<?php

namespace BYS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restaurant
 *
 * @ORM\Table(name="restaurant")
 * @ORM\Entity(repositoryClass="BYS\CoreBundle\Repository\RestaurantRepository")
 */
class Restaurant
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var UserGroup
     *
     * @ORM\ManyToOne(targetEntity="UserGroup", inversedBy="restaurants")
     * @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     */
    private $group;


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
     * @return Restaurant
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
     * Set group
     *
     * @param \BYS\CoreBundle\Entity\UserGroup $group
     *
     * @return Restaurant
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
}
