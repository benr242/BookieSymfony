<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookieController extends AbstractController
{
    /**
     * @Route("/bookie", name="bookie")
     */
    public function index(): Response
    {
        return $this->render('bookie/index.html.twig', [
            'controller_name' => 'BookieController',
        ]);
    }

    /**
     * @Route("/bookietest", name="bookieTest")
     */
    public function bookieTest()
    {
        $theUser = new User();
        $theUser->setUsername("benr242");

        return $this->render('bookie/bookietest.html.twig', [
            'controller_name' => 'BookieController',
            'myuser' => $theUser,
        ]);
    }
}
