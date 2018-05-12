<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Manufacturer;
use App\Form\ManufacturerType;

class ManufacturerController extends Controller
{
    /**
     * @Route("/manufacturers", name="manufacturers")
     */
    public function index(Request $request)
    {
      $manufacturer = new Manufacturer();
      $form = $this->createForm(ManufacturerType::class, $manufacturer, array(
        'is_admin' => $this->isGranted('ROLE_ADMIN'),
      ));

      $repository = $this->getDoctrine()->getRepository(Manufacturer::class);
      $manufacturers = $repository->findAll();

      // handle the submit (will only happen on POST)
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
          // save the User
          $em = $this->getDoctrine()->getManager();
          $em->persist($manufacturer);
          $em->flush();

          return $this->redirectToRoute('manufacturers');
      }


      return $this->render('manufacturers.html.twig',  array(
        'manufacturers' => $manufacturers,
        'form' => $form->createView(),
      ));
    }
}
