<?php

namespace App\Form;

use App\Entity\Formule;
use App\Entity\Menu;
use App\Repository\FormuleRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('formules', EntityType::class, [
                'class' => Formule::class,
                'multiple' =>true,
                'expanded' => true,
                'choice_label' => 'name',
                'query_builder' => function(FormuleRepository $er) {
                    return $er->createQueryBuilder('f')
                        ->orderBy('f.name', 'ASC');
                },
                'label' => 'Formules',
            ])
            
            ->add('Valider', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Menu::class,
        ]);
    }
}
