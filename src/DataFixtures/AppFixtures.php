<?php

namespace App\DataFixtures;

use App\Entity\League;
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

        //$this->loadATeam($manager);
        //$this->loadFixtureTeams($manager);
        $this->loadTeams($manager);
    }

    protected function loadTeams(ObjectManager $manager)
    {
        $league = new League();
        $league->setSlug("NFL");
        $league->setName("Nationol Football League");
        $manager->persist($league);

        $team = new Team();
        $team->setSlug("NO");
        $team->setLocation("New Orleans");
        $team->setName("Saints");
        $team->setLeague($league);
        $manager->persist($team);
        $team = new Team();
        $team->setSlug("TB");
        $team->setLocation("Tampa Bay");
        $team->setName("Buccaneers");
        $team->setLeague($league);
        $manager->persist($team);$team = new Team();
        $team->setSlug("CAR");
        $team->setLocation("Carolina");
        $team->setName("Panthers");
        $team->setLeague($league);
        $manager->persist($team);$team = new Team();
        $team->setSlug("ATL");
        $team->setLocation("Atlanta");
        $team->setName("Falcons");
        $team->setLeague($league);
        $manager->persist($team);
        $manager->flush();
    }

    private function loadFixtureTeams(ObjectManager $manager)
    {
        $conference = new Conference();
        $conference->getName("ANC");
        $manager->persist($conference);

        $manager->flush();
    }
}
