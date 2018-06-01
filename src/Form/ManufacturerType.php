<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Manufacturer;

class ManufacturerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
        ->add('name', TextType::class, array(
          'label' => false,
          'attr' => array(
            'placeholder' => 'Nom du laboratoire'
        )))
        ->add('address', TextType::class, array(
          'label' => false,
          'attr' => array(
            'placeholder' => 'Adresse'
        )))
        ->add('zip', TextType::class, array(
          'label' => false,
          'attr' => array(
            'placeholder' => 'Code Postal'
        )))
        ->add('city', TextType::class, array(
          'label' => false,
          'attr' => array(
            'placeholder' => 'Ville'
        )))
        ->add('country', TextType::class, array(
          'label' => false,
          'attr' => array(
            'placeholder' => 'Pays'
        )))
        ->add('phone', TextType::class, array(
          'label' => false,
          'required' => false,
          'attr' => array(
            'placeholder' => 'Telephone'
        )))
        ->add('email', TextType::class, array(
          'label' => false,
          'required' => false,
          'attr' => array(
            'placeholder' => 'Adresse electronique'
        )));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Manufacturer::class,
            'is_admin' => false
        ));
    }
}
