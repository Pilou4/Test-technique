<?php

namespace App\Form;

use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Validator\Constraints as Assert;

class PersonneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add(
            'firstname',
            TextType::class,
            [
                'label' => "Prénom",
                'attr' => [
                    'placeholder' => 'Prénom',
                ]
            ]
        )
        ->add(
            'lastname',
            TextType::class,
            [
                'label' => "Nom",
                'attr' => [
                    'placeholder' => 'Nom',
                ]
            ]
        )
        ->add(
            'birthday',
            BirthdayType::class,
            [
                'label' => 'Date de naissance',
                'placeholder' => [  
                    'day' => 'jour',
                    'month' => 'mois',
                    'year' => 'année',
                ],
                'format' => 'dd MM yyyy',
                'required' => false
            ]
        )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Personne::class,
        ]);
    }
}
