<?php

namespace App\DataFixtures;

use App\Entity\Restaurant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RestaurantFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $restaurant = new Restaurant();
        $restaurant->setName('Le Quai Antique');
        $restaurant->setGuestMax(200);
        $restaurant->setAddress('Rue du Lavoir - 73000 CHAMBERY');
        $restaurant->setPhoneNumber('04.42.16.41.26');
        $manager->persist($restaurant);

        $manager->flush();
    }
}
