<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\Bookkie;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Symfony\Component\Serializer\Encoder\EncoderInterface;

class BookieController extends AbstractController
{
    /**
     * @Route ("/", name="home")
     */
    public function home()
    {
        return $this->redirectToRoute("bookie");
    }

    /**
     * @Route("/bookie", name="bookie")
     */
    public function index(): Response
    {
        $dummy = "Fourty Two";
        $betNumber = random_int(1, 100000000);

        $user = new User();
        $user->setUsername("benr242");

        return $this->render('bookie/index.html.twig', [
            'controller_name' => 'BookieController',
            'title' => $dummy,
            'user' => $user,
            'betNumber' => $betNumber,
        ]);
    }

    /**
     * @Route ("/moneyline", name="moneyline")
     */
    public function moneyline(LoggerInterface $logger, Bookkie $bookkie)
    {
        $logger->info('just called moneyline');

        $favLine = 150;
        $dogLine = 130;

        $fImplOdds = $favLine/($favLine + 100) * 100;
        $dImplOdds = 100/($dogLine + 100) * 100;

        $fOdds = $fImplOdds / ($fImplOdds + $dImplOdds);
        $dOdds = $dImplOdds / ($dImplOdds + $fImplOdds);

        $payout = $bookkie->americanPayout(-150, 5000);

        return $this->render('moneyline/index.html.twig', [
            'controller_name' => 'MoneylineController',
            'title' => 'moneyline',
            'fImplOdds' => $fImplOdds,
            'dImplOdds' => $dImplOdds,
            'fOdds' => $fOdds,
            'dOdds' => $dOdds,
            'payout' => $payout,
        ]);
    }

    /**
     * @Route ("/dummyBet", name="dummyBet")
     */
    public function dummyBet(int $myLine = -125, int $otherLine = 105)
    {
        //picked favorite
        if ($myLine > $otherLine) {

        } else {

        }
        return $this->render("moneyline/dummyBet.html.twig");
    }

    /**
     * @Route("/bookietest", name="bookieTest")
     */
    public function bookieTest()
    {
        $theUser = new User();
        $theUser->setUsername("benr242");

        return $this->render('bookie/index.html.twig', [
            'controller_name' => 'BookieController',
            'myuser' => $theUser,
        ]);
    }

    /**
     * @Route("/bookie/addDummyUser", name="addDummyUser")
     */
    public function addDummyUser(EntityManagerInterface $em)
    {
        $theUser = new User();
        $theUser->setUsername("benr666");

        //$em->persist($theUser);
        //$em->flush();

        return $this->redirectToRoute('bookieTest');
    }

    /*

    public function addUser($username, $password, EncoderInterface $factory)
    {
        $factory = $this->get('security.encoder_factory');

        $user = new User();

        $encoder = $factory->
    }
    */
}
