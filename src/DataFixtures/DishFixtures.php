<?php

namespace App\DataFixtures;

use App\Entity\Dish;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DishFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($dsh = 0; $dsh < 50; $dsh++) {
        $dish = new Dish();
        $dish->setName('Nom du plat '.$dsh);
        $dish->setDescription('Description du plat et de ses ingrédients principaux '.$dsh);
        $dish->setPrice(mt_rand(5, 60));
        $dish->setActiveHome(false);

        //cat reference - random
        $category = $this->getReference('cat-'. rand(1, 4));
        $dish->setCategorie($category);

        //ref dish
        $this->setReference('dish-'.$dsh, $dish);

        $manager->persist($dish);
        }

        $manager->flush();
    }
}
