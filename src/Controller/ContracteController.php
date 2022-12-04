<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContracteController extends AbstractController
{
    #[Route('/contracte', name: 'app_contracte')]
    public function index(): Response
    {
        return $this->render('contracte/index.html.twig', [
            'controller_name' => 'ContracteController',
        ]);
    }
}
