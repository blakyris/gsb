<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Product;
use App\Entity\ProductCategory;
use App\Entity\Manufacturer;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
        ->add('name', TextType::class, array(
          'label' => false,
          'attr' => array(
            'placeholder' => 'Nom du produit'
        )))
        ->add('manufacturer', EntityType::class, array(
          'class' => Manufacturer::class,
          'choice_label' => 'name',
          'label' => false,
          'placeholder' => 'Fabricant',
          'attr' => array(
            'class' => 'form-choice'
        )))
        ->add('category', EntityType::class, array(
          'class' => ProductCategory::class,
          'choice_label' => 'category',
          'label' => false,
          'placeholder' => 'Categorie',
          'attr' => array(
            'class' => 'form-choice'
        )))
        ->add('description', TextType::class, array(
          'required' => false,
          'label' => false,
          'attr' => array(
            'placeholder' => 'Description'
        )))
        ->add('dose', NumberType::class, array(
          'required' => false,
          'label' => false,
          'attr' => array(
            'placeholder' => 'Dose (en mg)'
        )))
        ->add('price', MoneyType::class, array(
          'currency' => '',
          'label' => false,
          'attr' => array(
            'placeholder' => 'Prix'
        )))
        ->add('thumbnail', FileType::class, array(
          'label' => false,
          'attr' => array(
            'placeholder' => 'Image'
        )));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Product::class,
            'is_admin' => false,
        ));
    }
}
