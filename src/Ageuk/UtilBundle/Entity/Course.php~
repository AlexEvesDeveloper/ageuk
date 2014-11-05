<?php

namespace Ageuk\UtilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Course
 *
 * @ORM\Table(name="courses")
 * @ORM\Entity(repositoryClass="Ageuk\UtilBundle\Repository\CourseRepository")
 *
 * @ExclusionPolicy("all")
 */
class Course
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     *
     * @Expose
     */
    private $title;

    /**
     * @ORM\OneToMany(targetEntity="Event", mappedBy="course")
     */
    private $events;
    
    /**
     * @ORM\ManyToMany(targetEntity="DelegateUser", inversedBy="subscribedCourses")
     * @ORM\JoinTable(name="courses_delegates")
     */
    private $subscribedDelegates;

    public function __construct()
    {
        $this->events = new ArrayCollection();
        $this->subscribedDelegates = new ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Course
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Add events
     *
     * @param \Ageuk\UtilBundle\Entity\Event $events
     * @return Course
     */
    public function addEvent(\Ageuk\UtilBundle\Entity\Event $events)
    {
        $this->events[] = $events;

        return $this;
    }

    /**
     * Remove events
     *
     * @param \Ageuk\UtilBundle\Entity\Event $events
     */
    public function removeEvent(\Ageuk\UtilBundle\Entity\Event $events)
    {
        $this->events->removeElement($events);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Add subscribedDelegates
     *
     * @param \Ageuk\UtilBundle\Entity\DelegateUser $subscribedDelegates
     * @return Course
     */
    public function addSubscribedDelegate(\Ageuk\UtilBundle\Entity\DelegateUser $subscribedDelegates)
    {
        $this->subscribedDelegates[] = $subscribedDelegates;

        return $this;
    }

    /**
     * Remove subscribedDelegates
     *
     * @param \Ageuk\UtilBundle\Entity\DelegateUser $subscribedDelegates
     */
    public function removeSubscribedDelegate(\Ageuk\UtilBundle\Entity\DelegateUser $subscribedDelegates)
    {
        $this->subscribedDelegates->removeElement($subscribedDelegates);
    }

    /**
     * Get subscribedDelegates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubscribedDelegates()
    {
        return $this->subscribedDelegates;
    }
}
