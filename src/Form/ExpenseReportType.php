<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\ExpenseReport;

class ExpenseReportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
      ->add('totalPrice', MoneyType::class, array(
          'currency' => 'EUR',
          'label' => false,
          'attr' => array(
            'placeholder' => 'Prix'
        )))
        ->add('attachement', FileType::class, array(
          'label' => false,
          'attr' => array(
            'placeholder' => 'Telecharger la preuve (format PDF, JPG ou PNG)'
        )));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ExpenseReport::class,
            'is_admin' => false
        ));
    }
}
