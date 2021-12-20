<?php

// src/Controller/helloController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HesterController extends AbstractController {
    #[Route('/hester', methods: ['GET'], name: 'hester_index')]
    public function index(): Response {
        return $this->render(
            'hester/index.html.twig'
        );
    }
}