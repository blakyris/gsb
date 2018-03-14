<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
          if ($options['is_admin'] || $options['is_fresh_install'])
          {
            $builder
               ->add('roles', ChoiceType::class, array (
                   'multiple' => true,
                   'expanded' => false,
                   'choices' => array(
                     'Rôles privilegiés' => array(
                       'Administrateur' => 'ROLE_ADMIN',
                       'Direction' => 'ROLE_MANAGER',
                       'Comptabilite' => 'ROLE_ACCOUNTING'
                     ),
                     'Rôles standards' => array(
                       'Commercial' => 'ROLE_MARKETING',
                       'Docteur' => 'ROLE_DOCTOR',
                       'Client' => 'ROLE_CLIENT'
                    ),
                ),
                'label' => false,
            ));
        }

        $builder
            ->add('firstname', TextType::class, array(
              'label' => false,
              'attr' => array(
                'placeholder' => 'Prenom'
            )))
            ->add('lastname', TextType::class, array(
              'label' => false,
              'attr' => array(
                'placeholder' => 'Nom de famille'
            )))
            ->add('birthdate', BirthdayType::class, array(
              'label' => false,
              'attr' => array(
                'placeholder' => '-'
              )))
            ->add('email', EmailType::class, array(
              'label' => false,
              'attr' => array(
                'placeholder' => 'Adresse email'
            )))
            ->add('username', TextType::class, array(
              'label' => false,
              'attr' => array(
                'placeholder' => 'Nom d\'utilisateur'
            )))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array(
                  'label' => false,
                  'attr' => array(
                    'placeholder' => 'Mot de passe'
                  )),
                'second_options' => array(
                  'label' => false,
                  'attr' => array(
                    'placeholder' => 'Retapez le mot de passe'
                  )
                ),
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
            'is_fresh_install' => false,
            'is_admin' => false
        ));
    }
}
