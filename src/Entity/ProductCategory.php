<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Product;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductCategoryRepository")
 */
class ProductCategory
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
    private $category;

    /**
    * @ORM\OneToMany(targetEntity="App\Entity\Product", mappedBy="category")
    */
    private $products;

    // GETTERS

    public function getId()
    {
        return $this->id;
    }

    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return Collection|Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    // SETTERS

    public function setCategory($category)
    {
        $this->category = $category;
    }

    // FUNCTIONS

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

}
