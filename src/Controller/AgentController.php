<?php

namespace App\Controller;

use App\Entity\Agent;
use App\Repository\AgentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Json;

class AgentController extends AbstractController
{
    #[Route('/agent', name: 'agent_show')]
    public function display(AgentRepository $doctrine): Response
    {
        $agents = $doctrine->findAll();
        if (!$agents) {
    throw $this->createNotFoundException('No agents found');
    }
    $response = new Response();
$response->setContent(json_encode($agents));
$response->headers->set('Content-Type', 'application/json');
      return $response;

    // or render a template
    // in the template, print things with {{ product.name}}
    // return $this->render('agent/index.html.twig', ['agents' => $agents]);
}
#[Route('/agent/{id}', name: 'agent_by_id')]

public function number(AgentRepository $doctrine, int $id): Response
    {
        $agent = $doctrine->find($id);
        if (!$agent) {
    throw $this->createNotFoundException('No agent found');
    }
    $response = new Response();
$response->setContent(json_encode($agent));
$response->headers->set('Content-Type', 'application/json');
      return $response;
    }
}