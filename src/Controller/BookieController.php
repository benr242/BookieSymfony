<?php

namespace App\Controller;

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
        return $this->render('bookie/bookietest.html.twig', [
            'controller_name' => 'BookieController',
        ]);
    }
}
