<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;

class ProductController extends Controller
{
  /**
  * @Route("/products", name="products_list")
  */
  public function showAllProducts()
  {
    $repository = $this->getDoctrine()->getRepository(Product::class);
    $products = $repository->findAll();

    return $this->render('products_list.html.twig',  array('products' => $products));
  }

  /**
  * @Route("/products/details/{id}", name="product_detail")
  */
  public function showProductDetails($id)
  {
    $repository = $this->getDoctrine()->getRepository(Product::class);
    $product = $repository->find($id);

    return $this->render('single_product_detail.html.twig', array('product' => $product));
  }
}
