<?php

namespace App\DataFixtures;

use App\Entity\Formule;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FormuleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $formule1 = new Formule();
        $formule1->setName('Formule Déjeuner');
        $formule1->setSubtitle('Du Lundi au Vendredi - uniquement le midi');
        $formule1->setDescription('Entrée + Plat ou Plat + Dessert');
        $formule1->setPrice(mt_rand(20, 50));
        $manager->persist($formule1);

        $formule2 = new Formule();
        $formule2->setName('Formule Du Marché');
        $formule2->setSubtitle('Du Lundi au Vendredi - uniquement le midi');
        $formule2->setDescription('Entrée + Plat + Dessert');
        $formule2->setPrice(mt_rand(20, 50));
        $manager->persist($formule2);

        $formule3 = new Formule();
        $formule3->setName('Formule Diner');
        $formule3->setSubtitle('Du Lundi au Dimanche soir');
        $formule3->setDescription('Entrée + Plat + Dessert');
        $formule3->setPrice(mt_rand(20, 50));
        $manager->persist($formule3);

        $formule4 = new Formule();
        $formule4->setName('Formule Enfant');
        $formule4->setSubtitle('Tous les jours');
        $formule4->setDescription('Entrée + Plat + Dessert');
        $formule4->setPrice(mt_rand(20, 50));
        $manager->persist($formule4);
        
        $formule5 = new Formule();
        $formule5->setName('Formule Plaisir');
        $formule5->setSubtitle('Tous les jours');
        $formule5->setDescription('Entrée + Plat + Dessert');
        $formule5->setPrice(mt_rand(20, 50));
        $manager->persist($formule5);

        $manager->flush();
    }
    

}
