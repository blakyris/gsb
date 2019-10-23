<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use App\Entity\Manufacturer;
use App\Entity\User;
use App\Entity\Product;
use App\Entity\ProductCategory;

use App\Form\ManufacturerType;
use App\Form\ProductType;


/**
* @IsGranted("ROLE_USER")
*/
class ManufacturerController extends Controller
{
    // Private Methods

    /**
     * Initialize a Form for each Manufacturer to add a product
     */
    private function initManufacturerProductForm($manufacturer, $data)
    {   
        $form = $this
           ->createFormBuilder($data)
           ->add('values', CollectionType::class, [
               'entry_type'    => EntityType::class,
               'entry_options' => [
                   'label' => 'Value',
                   'class' => Product::class,
               ],
               'label'        => '',
               'allow_add'    => true,
               'allow_delete' => true,
               'prototype'    => true,
               'required'     => false,
               'mapped' => false,
               'attr'         => [
                   'class' => 'collectionSelector-' . $manufacturer->getId(),
               ],
           ])
           ->add('submit', SubmitType::class)
           ->getForm();

           return ($form);
    }

     /**
     * Initialize a Form for each Manufacturer to add a Member
     */
    private function initManufacturerMemberForm($usersRepo)
    {      
      $form = $this->createFormBuilder()
          ->add('user', EntityType::class, array(
            'class' => User::class,
            'choice_label' => 'username',
            'label' => false,
            'placeholder' => 'Selectionnez un utilisateur',
            'attr' => array(
                'class' => 'form-choice'
            )))
            ->getForm();

      return ($form);
    }

    /**
     * Initialize a Form for each Manufacturer to add a product
     */
    private function saveManufacturerProduct($form)
    {
        $product = new Product();

        $product->setName($form['formData']->get('name')->getData());
        $product->setCategory($form['formData']->get('category')->getData());
        $product->setDescription($form['formData']->get('description')->getData());
        $product->setDose($form['formData']->get('dose')->getData());
        $product->setPrice($form['formData']->get('price')->getData());

        $directory = $this->get('kernel')->getRootDir() . '/../public/media/img/products-thumbnails/';
        $file = $form['formData']->get('thumbnail')->getData();
        $extension = $file->guessExtension();
        $filename = 'thumb' . time() . '.' . $extension;
        $file->move($directory, $filename);

        $product->setThumbnail($filename);

        $manufacturer = $this->getDoctrine()->getRepository(Manufacturer::class)->find($form['manufacturerId']);
        $product->setManufacturer($manufacturer);
    
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return ($product);
    }

    /**
     * Initialize a Form for each Manufacturer to add a product
     */
    private function saveManufacturerMember($form)
    {
        dump($form);

        $em = $this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getRepository(User::class)->find($form['formData']->get('user')->getData()->getId());
        $manufacturer = $this->getDoctrine()->getRepository(Manufacturer::class)->find($form['manufacturerId']);
        
        $user->setManufacturer($manufacturer);

        $em->flush();

        return ($user);
    }

    // Public Methods


    /**
    * @Route("/manufacturers", name="manufacturers")
    */
    public function index(Request $request)
    {
        $manufacturer = new Manufacturer();
        $form = $this->createForm(ManufacturerType::class, $manufacturer, array(
                  'is_admin' => $this->isGranted('ROLE_ADMIN'),
                ));

        $manufacturersRepo = $this->getDoctrine()->getRepository(Manufacturer::class);
        $manufacturers = $manufacturersRepo->findAll();

        $usersRepo = $this->getDoctrine()->getRepository(User::class);

        $i = 0;
        $productForms = array();
        foreach ($manufacturers as $manufacturer) {
            $data = ['values' => ['a', 'b', 'c']];
            $formData = $this->initManufacturerProductForm($manufacturer, $data);
            $formView = $formData->createView();
            $productForms[$i++] = array(
                'formId' => $i,
                'manufacturerId' => $manufacturer->getID(),
                'collectionData' => $data,
                'formData' => $formData,
                'formView' => $formView,
            );
        }

        $i = 0;
        $memberForms = array();
        foreach ($manufacturers as $manufacturer) {
            $formData = $this->initManufacturerMemberForm($usersRepo);
            $formView = $formData->createView();
            $memberForms[$i++] = array(
                'formId' => $i,
                'manufacturerId' => $manufacturer->getID(),
                'formData' => $formData,
                'formView' => $formView
            );
        }

        // Handle Request to create a Manufacturer
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($manufacturer);
            $em->flush();

            return $this->redirectToRoute('manufacturers');
        }

        return $this->render('manufacturers.html.twig', array(
            'manufacturers' => $manufacturers,
            'form' => $form->createView(),
            'productforms' => $productForms,
            'memberforms' => $memberForms,
        ));
    }
}
