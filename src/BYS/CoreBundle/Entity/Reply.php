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

