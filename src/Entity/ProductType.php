<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductTypeRepository")
 */
class ProductType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
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

    public function setType($type)
    {
        $this->type = $type;
    }
}
