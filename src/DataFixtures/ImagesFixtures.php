<?php

namespace App\DataFixtures;

use App\Entity\Images;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class ImagesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for($img = 1; $img <= 100; $img++){
            $image = new Images();
            $image->setName($faker->image(null, 640, 480));

            //dishes images - random
            $dishes = $this->getReference('dish-'.rand(1, 49));
            $image->setDishes($dishes);

            $manager->persist($image);
        }

        $manager->flush();
    }
}
