<?php

namespace Ageuk\UtilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Event
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="Ageuk\UtilBundle\Repository\EventRepository")
 *
 * @ExclusionPolicy("all")
 */
class Event
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Expose
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     *
     * @Expose
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Course", inversedBy="events")
     */
    private $course;

    /**
     * @ORM\ManyToMany(targetEntity="DelegateUser", inversedBy="events")
     * @ORM\JoinTable(name="events_delegates")
     */
    private $delegates;

    public function __construct()
    {
        $this->delegates = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Event
     */
    public function setDate(\DateTime $date = null)
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
     * Set course
     *
     * @param \Ageuk\UtilBundle\Entity\Course $course
     * @return Event
     */
    public function setCourse(\Ageuk\UtilBundle\Entity\Course $course = null)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \Ageuk\UtilBundle\Entity\Course 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Add delegates
     *
     * @param \Ageuk\UtilBundle\Entity\DelegateUser $delegates
     * @return Event
     */
    public function addDelegate(\Ageuk\UtilBundle\Entity\DelegateUser $delegates)
    {
        $this->delegates[] = $delegates;

        return $this;
    }

    /**
     * Remove delegates
     *
     * @param \Ageuk\UtilBundle\Entity\DelegateUser $delegates
     */
    public function removeDelegate(\Ageuk\UtilBundle\Entity\DelegateUser $delegates)
    {
        $this->delegates->removeElement($delegates);
    }

    /**
     * Get delegates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDelegates()
    {
        return $this->delegates;
    }
}
