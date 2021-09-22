<?php

namespace App\Controller;

use App\Entity\User;
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
    public function testTest()
    {
        $theUser = new User();
        $theUser->setUsername("benr242");

        return $this->redirectToRoute('bookie');
        //return $this->render('test/dummy.html.twig');
    }
}
