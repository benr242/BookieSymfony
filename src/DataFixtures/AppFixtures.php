<?php

namespace App\DataFixtures;

use App\Entity\Team;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    //public function load(ObjectManager $manager)
    public function load(ObjectManager  $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $myteam = new Team();
        $manager->persist($myteam);

        $myteam->setCity("New Orleans");
        $myteam->setName("Saints");

        $manager->flush();
    }
}
