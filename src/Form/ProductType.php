<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
        ->add('description', TextType::class, array(
          'label' => false,
          'attr' => array(
            'placeholder' => 'Description'
        )))
        ->add('price', MoneyType::class, array(
          'currency' => 'EUR',
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
            'is_admin' => false
        ));
    }
}
