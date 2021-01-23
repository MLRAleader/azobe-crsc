<?php

namespace App\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeFrontController extends AbstractController
{
    /**
     * @Route("/", name="home_front")
     */
    public function index(): Response
    {
        return $this->render('home_front/index.html.twig', [
            'controller_name' => 'HomeFrontController',
        ]);
    }
}
