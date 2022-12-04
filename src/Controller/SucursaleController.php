<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SucursaleController extends AbstractController
{
    #[Route('/sucursale', name: 'app_sucursale')]
    public function index(): Response
    {
        return $this->render('sucursale/index.html.twig', [
            'controller_name' => 'SucursaleController',
        ]);
    }
}
