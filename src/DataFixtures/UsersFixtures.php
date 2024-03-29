<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker;

class UsersFixtures extends Fixture
{

    public function __construct(
        private UserPasswordHasherInterface $passwordEncoder,
        )
    {}


    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($usr = 1; $usr <= 50; $usr++) {
            $user = new User();
            $user->setEmail($faker->email);
            $user->setName($faker->name);
            $user->setFirstname($faker->firstname);
            $user->setPhoneNumber('0624729319');
            $user->setGuestBooking((mt_rand(0, 6)));
            $user->setIsVerified(1);
            $user->setPassword(
                $this->passwordEncoder->hashPassword($user, 'secret')
            );
            $user->setRoles(['ROLE_USER']);

            //allergy reference - random
            $allergy = $this->getReference('all-'. rand(1, 9));
            $user->addAllergy($allergy);


            $manager->persist($user);
        }


        $manager->flush($user);
    }
}
