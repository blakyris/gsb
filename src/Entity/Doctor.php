<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DoctorRepository")
 */
class Doctor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
    * @ORM\Column(type="integer")
    */
    private $clinic_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $speciality;

    // GETTERS

    public function getId()
    {
        return $this->id;
    }

    public function getClinicId()
    {
        return $this->clinic_id;
    }

    public function getSpeciality()
    {
        return $this->speciality;
    }

    // SETTERS

    public function setClinicId($clinic_id)
    {
        $this->clinic_id = $clinic_id;
    }

    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;
    }
}
