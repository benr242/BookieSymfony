<?php

namespace App\DataFixtures;

use App\Entity\Conference;
use App\Entity\Division;
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

        $this->loadATeam($manager);
    }

    private function loadATeam(ObjectManager $manager)
    {
        $myteam = new Team();
        $manager->persist($myteam);

        $mydivision = new Division();
        $mydivision->setName("East");
        $myconference = new Conference();
        $myconference->setName("National");
        $manager->persist($myconference);
        $manager->persist($mydivision);

        $myteam->setCity("New Orleans");
        $myteam->setName("Saints");
        $myteam->setDivision($mydivision);
        $myteam->setConference($myconference);

        $manager->flush();
    }
}
