<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\User;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CalendarEventsRepository")
 */
class CalendarEvents
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $name;

  /**
   * @ORM\Column(type="boolean", nullable=true)
   */
  private $all_day;

  /**
  * @ORM\Column(type="datetime")
  */
  private $start;

  /**
  * @ORM\Column(type="datetime")
  */
  private $end;

  /**
   * Many Events have Many Users.
   * @ORM\ManyToMany(targetEntity="User", mappedBy="calendar_events")
   */
  private $owners;

  /**
   * @ORM\Column(type="integer")
   */
  private $creator;

  // GETTERS

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getAllDay()
  {
    return $this->all_day;
  }

  public function getStart()
  {
    return $this->start;
  }

  public function getEnd()
  {
    return $this->end;
  }

  public function getOwners()
  {
    return $this->owner;
  }

  public function getCreator()
  {
    return $this->creator;
  }

  // SETTERS

  public function setId($id)
  {
     $this->id = $id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setAllDay($ans)
  {
    $this->all_day = $ans;
  }

  public function setStart($date)
  {
    $this->start = $date;
  }

  public function setEnd($date)
  {
     $this->end = $date;
  }

  public function setOwners($owner)
  {
     $this->owner = $owner;
  }

  public function setCreator($creator)
  {
     $this->creator = $creator;
  }

  // FUNCTIONS

  public function __construct()
  {
    $this->owners = new \Doctrine\Common\Collections\ArrayCollection();
  }

}
