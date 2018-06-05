<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Product;
use App\Form\ProductType;

class ProductController extends Controller
{
  /**
  * @Route("/products", name="products_list")
  */
  public function showAllProducts(Request $request)
  {
    $product = new Product();
    $form = $this->createForm(ProductType::class, $product, array(
      'is_admin' => $this->isGranted('ROLE_ADMIN'),
    ));

    $repository = $this->getDoctrine()->getRepository(Product::class);
    $products = $repository->findAll();

    // handle the submit (will only happen on POST)
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $directory = $this->get('kernel')->getRootDir().'/../public/media/img/products-thumbnails/';

        $file = $form['thumbnail']->getData();
        $extension = $file->guessExtension();
        $filename = 'thumb'.rand(1, 99999).'.'.$extension;
        $file->move($directory, $filename);
        $product->setThumbnail($filename);

        // save the User
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return $this->redirectToRoute('products_list');
    }

    return $this->render('products_list.html.twig',  array(
      'products' => $products,
      'form' => $form->createView(),
    ));
  }

  /**
  * @Route("/products/delete/{id}", name="delete_product")
  */
  public function deleteProduct($id)
  {
    $em = $this->getDoctrine()->getManager();
    $product = $em->getRepository(Product::class)->find($id);

    $em->remove($product);
    $em->flush();

    return $this->redirectToRoute('products_list');
  }
}
