<?php

namespace BYS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
}

