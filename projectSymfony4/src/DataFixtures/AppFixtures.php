<?php

namespace App\DataFixtures;

use App\Entity\Actuality;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker=Factory::create('fr_FR');
        for ($i = 0; $i < 40; $i++) {
            $actuality = new Actuality();
            $actuality->setId($i);
            $actuality->setTitle($faker->words(3,true));
            $actuality->setDescription($faker->sentences(3,true));
            $actuality->setImage($faker->imageUrl($width = 640, $height = 480));
            //$actuality->setPrice(mt_rand(10, 100));
            $manager->persist($actuality);
        }

        $manager->flush();

        $manager->flush();
    }
}
