<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Manufacturer;
use App\Entity\CalendarEvents;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username already taken")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", unique=true)
     */
    private $id;

    /**
    * @ORM\Column(type="string", length=255)
    */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="date")
     */
    private $birthdate;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Manufacturer", inversedBy="members")
     * @ORM\JoinColumn(name="memberOf", referencedColumnName="id", nullable=true)
     */
    private $memberOf;

    /**
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * Many Users have Many Events.
     * @ORM\ManyToMany(targetEntity="CalendarEvents", inversedBy="owners")
     */
    private $calendar_events;

    /**
    * @ORM\OneToMany(targetEntity="App\Entity\ExpenseReport", mappedBy="owner")
    */
    private $expense_reports;

    // GETTERS

    public function getId()
    {
        return $this->id;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getFullName()
    {
      return $this->firstname . ' ' . $this->lastname;
    }

    public function getBirthdate()
    {
        return $this->birthdate;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getRoleId()
    {
        return $this->roleId;
    }

    public function getRoles(): array
    {
        return array_unique(array_merge(['ROLE_USER'], $this->roles));
    }

    public function getMemberOf(): Manufacturer
    {
        return $this->memberOf;
    }

    public function getUsername()
    {
      return $this->username;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function getPassword()
    {
      return $this->password;
    }

    public function getSalt()
    {
     return null;
    }

    public function getCalendarEvents()
    {
     return $this->calendar_events;
    }

    public function getExpenseReports()
    {
      return $this->expense_reports;
    }

    // SETTERS

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }

    public function setMemberOf(Manufacturer $manufacturer)
    {
        $this->memberOf = $manufacturer;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setCalendarEvents(CalendarEvents $event)
    {
        $this->calendar_events = $event;
    }

    public function setExpenseReport(ExpenseReport $report)
    {
        $this->expense_reports = $report;
    }

    // FUNCTIONS

    public function __construct() {
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
        $this->expense_reports = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function resetRoles()
    {
        $this->roles = [];
    }

    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
        ) = unserialize($serialized);
    }

    public function eraseCredentials()
    {

    }
}
