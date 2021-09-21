<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    /**
     * @Route("/testtest", name="testTest")
     */
    public function bookieTest()
    {
        $theUser = new User();
        $theUser->setUsername("benr242");

        return $this->render('' , [
            'controller_name' => 'BookieController',
            'myuser' => $theUser,
        ]);
    }
}
