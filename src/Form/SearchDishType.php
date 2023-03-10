<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchDishType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('words', SearchType::class, [
                'label' => false,
                'attr' =>[
                    'class' =>'form-control',
                    'placeholder' =>'Entrez un mot'
                ],
                'required' => false
            ])
            ->add('categorie', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
                'label' => false, 
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'expanded' => true,
                'multiple' => false
            ])
            ->add('Rechercher', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
