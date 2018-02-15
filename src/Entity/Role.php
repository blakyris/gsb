<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoleRepository")
 */
class Role
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", unique=true)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $type;

    // GETTERS

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    // SETTERS

    public function setType($type): void
    {
        $this->type = $type;
    }
}
