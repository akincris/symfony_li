<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TipAsigurareController extends AbstractController
{
    #[Route('/tip/asigurare', name: 'app_tip_asigurare')]
    public function index(): Response
    {
        return $this->render('tip_asigurare/index.html.twig', [
            'controller_name' => 'TipAsigurareController',
        ]);
    }
}
