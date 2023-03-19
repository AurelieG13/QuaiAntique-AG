<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Dish;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints as Assert;

class DishType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlenght' => '2',
                    'maxlenght' => '50',
                ],
                'label' => 'Nom',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
                "required" => true,
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => "le contenu ne doit pas faire moins de 2 caractères", "max" => 50, "maxMessage" => "le contenu ne doit pas faire plus de 50 caractères"]),
                    new Assert\NotBlank(["message" => "Le contenu ne doit pas être vide"])
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                "required" => true,
                'constraints' => [
                    new Assert\NotBlank(["message" => "Le contenu ne doit pas être vide"])
                ],
            ])
            ->add('price', MoneyType::class, [
                'label' => 'Prix',
                "required" => true,
                'constraints' => [
                    new Assert\NotBlank(["message" => "Le contenu ne doit pas être vide"])
                ],
            ])
            ->add('categorie', EntityType::class, [
                'class' => Category::class,
                'multiple' =>false,
                'expanded' => true,
                'choice_label' => 'name',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.name', 'ASC');
                },
                'label' => 'Catégories',
                "required" => true,
                'constraints' => [
                    new Assert\NotBlank(["message" => "Le contenu ne doit pas être vide"])
                ],
                // 'by_reference' =>false
            ])
            ->add('images', FileType::class, [
                'label' => 'Ajouter une image',
                'multiple' => true,
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new All(
                        new Image([
                            'maxWidth' => 2048,
                            'maxWidthMessage' => 'L\'image doit faire {{ max_width }} pixels de large au maximum'
                        ])
                    )
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dish::class,
        ]);
    }
}
