<?php

namespace App\Form;

use App\Entity\CalendarEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class CalendarEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
        ->add('name', TextType::class, array(
          'label' => false,
          'attr' => array(
              'placeholder' => 'Titre'
        )))
        ->add('start', DateTimeType::class, array(
          'with_seconds' => false,
          'label' => false,
          'placeholder' => array(
              'year' => 'Annee', 'month' => 'Mois', 'day' => 'Jour',
              'hour' => 'Heure', 'minute' => 'Minute',),
          'data' => new \DateTime()
        ))
        ->add('end', DateTimeType::class, array(
          'with_seconds' => false,
          'label' => false,
          'placeholder' => array(
            'year' => 'Annee', 'month' => 'Mois', 'day' => 'Jour',
            'hour' => 'Heure', 'minute' => 'Minute',),
          'data' => new \DateTime()
          ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => CalendarEvents::class,
            'is_admin' => false
        ));
    }
}
