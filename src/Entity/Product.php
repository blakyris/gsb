<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $manufacturerId;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $productTypeId;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $price;

    // GETTERS

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getProductTypeId()
    {
        return $this->productTypeId;
    }

    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    public function getPrice()
    {
        return $this->price;
    }

    // SETTERS

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setProductTypeId($productTypeId)
    {
        $this->productTypeId = $productTypeId;
    }
}
