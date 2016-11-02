<?php

namespace BYS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="BYS\CoreBundle\Repository\PersonRepository")
 */
class Person
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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password_digest", type="string", length=255)
     */
    private $passwordDigest;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255)
     */
    private $alias;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Proposal", mappedBy="owner")
     */
    private $proposals;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Reply", mappedBy="person")
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
     * Set email
     *
     * @param string $email
     *
     * @return Person
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
     * Set passwordDigest
     *
     * @param string $passwordDigest
     *
     * @return Person
     */
    public function setPasswordDigest($passwordDigest)
    {
        $this->passwordDigest = $passwordDigest;

        return $this;
    }

    /**
     * Get passwordDigest
     *
     * @return string
     */
    public function getPasswordDigest()
    {
        return $this->passwordDigest;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Person
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Person
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
     * Set alias
     *
     * @param string $alias
     *
     * @return Person
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->proposals = new \Doctrine\Common\Collections\ArrayCollection();
        $this->replies = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add proposal
     *
     * @param \BYS\CoreBundle\Entity\Proposal $proposal
     *
     * @return Person
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
     * Add reply
     *
     * @param \BYS\CoreBundle\Entity\Reply $reply
     *
     * @return Person
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
