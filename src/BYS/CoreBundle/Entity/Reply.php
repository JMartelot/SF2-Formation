<?php

namespace BYS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reply
 *
 * @ORM\Table(name="reply")
 * @ORM\Entity(repositoryClass="BYS\CoreBundle\Repository\ReplyRepository")
 */
class Reply
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
     * @var bool
     *
     * @ORM\Column(name="reallyPresent", type="boolean")
     */
    private $reallyPresent;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="replies")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $person;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Proposal", inversedBy="replies")
     * @ORM\JoinColumn(name="proposal_id", referencedColumnName="id")
     */
    private $proposal;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Rating", inversedBy="replies")
     * @ORM\JoinColumn(name="rating_id", referencedColumnName="id")
     */
    private $rating;


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
     * Set reallyPresent
     *
     * @param boolean $reallyPresent
     *
     * @return Reply
     */
    public function setReallyPresent($reallyPresent)
    {
        $this->reallyPresent = $reallyPresent;

        return $this;
    }

    /**
     * Get reallyPresent
     *
     * @return bool
     */
    public function getReallyPresent()
    {
        return $this->reallyPresent;
    }
}

