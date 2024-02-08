<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Manga;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $manga = new Manga();
            $manga->setNom($faker->name());
            $manga->setAnnee($faker->name());
            $manager->persist($manga);
            $manager->flush();
        }
    }
}
