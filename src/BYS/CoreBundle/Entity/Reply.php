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

    /**
     * Set person
     *
     * @param \BYS\CoreBundle\Entity\Person $person
     *
     * @return Reply
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

    /**
     * Set proposal
     *
     * @param \BYS\CoreBundle\Entity\Proposal $proposal
     *
     * @return Reply
     */
    public function setProposal(\BYS\CoreBundle\Entity\Proposal $proposal = null)
    {
        $this->proposal = $proposal;

        return $this;
    }

    /**
     * Get proposal
     *
     * @return \BYS\CoreBundle\Entity\Proposal
     */
    public function getProposal()
    {
        return $this->proposal;
    }

    /**
     * Set rating
     *
     * @param \BYS\CoreBundle\Entity\Rating $rating
     *
     * @return Reply
     */
    public function setRating(\BYS\CoreBundle\Entity\Rating $rating = null)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return \BYS\CoreBundle\Entity\Rating
     */
    public function getRating()
    {
        return $this->rating;
    }
}
