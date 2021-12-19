<?php

// src/Controller/helloController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController {
    #[Route('/hello', methods: ['GET'], name: 'hello_world')]
    public function hello(): Response {
        return $this->render(
            'hello/world.html.twig'
        );
    }
}