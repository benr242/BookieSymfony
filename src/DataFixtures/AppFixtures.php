<?php

namespace App\DataFixtures;

use App\Entity\League;
use App\Entity\Team;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Role\RoleHierarchy;

class AppFixtures extends Fixture
{
    //public function load(ObjectManager $manager)
    public function load(ObjectManager  $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        //$this->loadATeam($manager);
        //$this->loadFixtureTeams($manager);

        $this->loadUsers($manager);
        $this->loadTeams($manager);
    }

    protected function loadUsers(ObjectManager $manager)
    {
        $roles[] = 'ROLE_USER';

        $user = new User();
        $user->setUsername("benr242");
        $user->setRoles($roles);
        $user->setPassword("dummy");
        $user->setStash(10000);
        $user->setFirstName("Ben");
        $user->setLastName("Rose");
        $user->setEmail("dummy@gmail.com");
        $manager->persist($user);

        $user = new User();
        $user->setUsername("jp");
        $user->setRoles($roles);
        $user->setPassword("dummy");
        $user->setStash(10000);
        $user->setFirstName("John");
        $user->setLastName("Posey");
        $user->setEmail("dummy@gmail.com");
        $manager->persist($user);

        $user = new User();
        $user->setUsername("rz");
        $user->setRoles($roles);
        $user->setPassword("dummy");
        $user->setStash(10000);
        $user->setFirstName("Raj");
        $user->setLastName("Zacharia");
        $user->setEmail("dummy@gmail.com");
        $manager->persist($user);

        $user = new User();
        $user->setUsername("nc");
        $user->setRoles($roles);
        $user->setPassword("dummy");
        $user->setStash(10000);
        $user->setFirstName("Nate");
        $user->setLastName("Connelly");
        $user->setEmail("dummy@gmail.com");
        $manager->persist($user);

        $user = new User();
        $user->setUsername("nl");
        $user->setRoles($roles);
        $user->setPassword("dummy");
        $user->setStash(10000);
        $user->setFirstName("Nick");
        $user->setLastName("Lermitte");
        $user->setEmail("dummy@gmail.com");
        $manager->persist($user);

        $manager->flush();
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
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("CAR");
        $team->setLocation("Carolina");
        $team->setName("Panthers");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("ATL");
        $team->setLocation("Atlanta");
        $team->setName("Falcons");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("PHI");
        $team->setLocation("Philadelphia");
        $team->setName("Eagles");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("WAS");
        $team->setLocation("Washington");
        $team->setName("Football Team");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("NYG");
        $team->setLocation("New York");
        $team->setName("Giants");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("DAL");
        $team->setLocation("Dallas");
        $team->setName("Cowboys");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("GB");
        $team->setLocation("Green Bay");
        $team->setName("Packers");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("MIN");
        $team->setLocation("Minnesota");
        $team->setName("Vikings");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("CHI");
        $team->setLocation("Chicago");
        $team->setName("Bears");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("DET");
        $team->setLocation("Detroit");
        $team->setName("Lions");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("ARZ");
        $team->setLocation("Arizona");
        $team->setName("Cardinals");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("LAR");
        $team->setLocation("Los Angeles");
        $team->setName("Rams");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("SF");
        $team->setLocation("San Fransisco");
        $team->setName("49ers");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("SEA");
        $team->setLocation("Seattle");
        $team->setName("Seahawks");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("BUF");
        $team->setLocation("Buffalo");
        $team->setName("Bills");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("NE");
        $team->setLocation("New England");
        $team->setName("Patriots");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("NYJ");
        $team->setLocation("New York");
        $team->setName("Jets");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("MIA");
        $team->setLocation("Miami");
        $team->setName("Dolphins");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("CIN");
        $team->setLocation("Cincinati");
        $team->setName("Bengals");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("BAL");
        $team->setLocation("Baltimore");
        $team->setName("Ravens");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("CLE");
        $team->setLocation("Cleveland");
        $team->setName("Browns");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("PIT");
        $team->setLocation("Pittsburg");
        $team->setName("Steelers");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("TEN");
        $team->setLocation("Tennessee");
        $team->setName("Titans");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("IND");
        $team->setLocation("Indianapolis");
        $team->setName("Colts");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("JAX");
        $team->setLocation("Jacksonville");
        $team->setName("Jaguars");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("HST");
        $team->setLocation("Houston");
        $team->setName("Texans");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("LVR");
        $team->setLocation("Las Vegas");
        $team->setName("Raiders");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("LAC");
        $team->setLocation("Las Angeles");
        $team->setName("Chargers");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("KC");
        $team->setLocation("Kansas City");
        $team->setName("Chiefs");
        $team->setLeague($league);
        $manager->persist($team);

        $team = new Team();
        $team->setSlug("DEN");
        $team->setLocation("Denver");
        $team->setName("Broncos");
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
