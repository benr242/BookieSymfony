<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Symfony\Component\Serializer\Encoder\EncoderInterface;

class BookieController extends AbstractController
{
    /**
     * @Route("/bookie", name="bookie")
     */
    public function index(): Response
    {
        $dummy = "Fourty Two";

        return $this->render('bookie/index.html.twig', [
            'controller_name' => 'BookieController',
            'title' => $dummy,
        ]);
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
