<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                "required" => true,
                'constraints' => [
                    new Assert\Length(['min' => 10, 'minMessage' => "le contenu ne doit pas faire moins de 10 caractères", "max" => 10, "maxMessage" => "le contenu ne doit pas faire plus de 10 caractères"]),
                    new Assert\NotBlank(["message" => "Le contenu ne doit pas être vide"])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}
