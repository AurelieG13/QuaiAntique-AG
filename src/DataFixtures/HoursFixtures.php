<?php

namespace App\DataFixtures;

use App\Entity\OpeningHours;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class HoursFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $lundi = new OpeningHours();
        $lundi->setDayOfWeek('Lundi');
        $lundi->setOpenedLunchHour(new \DateTime('12:00:00'));
        $lundi->setClosedLunchHour(new \DateTime('14:30:00'));
        $lundi->setOpenedDinnerHour(new \DateTime('19:00:00'));
        $lundi->setClosedDinnerHour(new \DateTime('22:30:00'));
        $lundi->setSortWeek(1);
        $manager->persist($lundi);

        $mardi = new OpeningHours();
        $mardi->setDayOfWeek('Mardi');
        $mardi->setOpenedLunchHour(new \DateTime('12:00:00'));
        $mardi->setClosedLunchHour(new \DateTime('14:30:00'));
        $mardi->setOpenedDinnerHour(new \DateTime('19:00:00'));
        $mardi->setClosedDinnerHour(new \DateTime('22:30:00'));
        $mardi->setSortWeek(2);
        $manager->persist($mardi);

        $mercredi = new OpeningHours();
        $mercredi->setDayOfWeek('Mercredi');
        $mercredi->setOpenedLunchHour(new \DateTime('00:00:00'));
        $mercredi->setClosedLunchHour(new \DateTime('00:00:00'));
        $mercredi->setOpenedDinnerHour(new \DateTime('00:00:00'));
        $mercredi->setClosedDinnerHour(new \DateTime('00:00:00'));
        $mercredi->setSortWeek(3);
        $manager->persist($mercredi);

        $jeudi = new OpeningHours();
        $jeudi->setDayOfWeek('Jeudi');
        $jeudi->setOpenedLunchHour(new \DateTime('12:00:00'));
        $jeudi->setClosedLunchHour(new \DateTime('14:30:00'));
        $jeudi->setOpenedDinnerHour(new \DateTime('19:00:00'));
        $jeudi->setClosedDinnerHour(new \DateTime('22:30:00'));
        $jeudi->setSortWeek(4);
        $manager->persist($jeudi);

        $vendredi = new OpeningHours();
        $vendredi->setDayOfWeek('Vendredi');
        $vendredi->setOpenedLunchHour(new \DateTime('12:00:00'));
        $vendredi->setClosedLunchHour(new \DateTime('14:30:00'));
        $vendredi->setOpenedDinnerHour(new \DateTime('19:00:00'));
        $vendredi->setClosedDinnerHour(new \DateTime('22:30:00'));
        $vendredi->setSortWeek(5);
        $manager->persist($vendredi);

        $samedi = new OpeningHours();
        $samedi->setDayOfWeek('Samedi');
        $samedi->setOpenedLunchHour(new \DateTime('12:00:00'));
        $samedi->setClosedLunchHour(new \DateTime('14:30:00'));
        $samedi->setOpenedDinnerHour(new \DateTime('19:00:00'));
        $samedi->setClosedDinnerHour(new \DateTime('23:30:00'));
        $samedi->setSortWeek(6);
        $manager->persist($samedi);

        $dimanche = new OpeningHours();
        $dimanche->setDayOfWeek('Dimanche');
        $dimanche->setOpenedLunchHour(new \DateTime('12:00:00'));
        $dimanche->setClosedLunchHour(new \DateTime('14:30:00'));
        $dimanche->setOpenedDinnerHour(new \DateTime('19:00:00'));
        $dimanche->setClosedDinnerHour(new \DateTime('23:30:00'));
        $dimanche->setSortWeek(7);
        $manager->persist($dimanche);

        $manager->flush();
    }
}
