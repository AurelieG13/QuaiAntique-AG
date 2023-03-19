<?php

namespace App\Form;

use App\Entity\OpeningHours;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class HoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dayOfWeek', TextType::class, [
                'label' => 'Jour de la semaine',
                'attr' => [
                    'placeholder' => 'Lundi ....Dimanche'
                ],
                'constraints' => [
                    new Assert\NotBlank(["message" => "Le contenu ne doit pas être vide"])
                ],
                "required" => true,
            ])
            ->add('sortWeek', IntegerType::class, [
                'label' => 'Placement dans la semaine',
                'attr' => [
                    'placeholder' => 'Lundi = 1....Dimanche = 7'
                ],
                'constraints' => [
                    new Assert\NotBlank(["message" => "Le contenu ne doit pas être vide"])
                ],
                "required" => true,
            ])
            ->add('openedLunchHour', TimeType::class, [
                'widget' => 'choice',
                'label' => 'Midi début',
                "required" => true,
                'constraints' => [
                    new Assert\NotBlank(["message" => "Le contenu ne doit pas être vide"])
                ],
            ])
            ->add('closedLunchHour', TimeType::class, [
                'widget' => 'choice',
                'label' => 'Midi fin',
                "required" => true,
                'constraints' => [
                    new Assert\NotBlank(["message" => "Le contenu ne doit pas être vide"])
                ],
            ])
            ->add('openedDinnerHour', TimeType::class, [
                'widget' => 'choice',
                'label' => 'Soir début',
                "required" => true,
                'constraints' => [
                    new Assert\NotBlank(["message" => "Le contenu ne doit pas être vide"])
                ],
            ])
            ->add('closedDinnerHour', TimeType::class, [
                'widget' => 'choice',
                'label' => 'Soir fin',
                "required" => true,
                'constraints' => [
                    new Assert\NotBlank(["message" => "Le contenu ne doit pas être vide"])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OpeningHours::class,
        ]);
    }
}
