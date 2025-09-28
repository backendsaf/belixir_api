<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class TestController extends AbstractController {

    #[Route('/test', name: 'test_index', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return new JsonResponse("Hellow World!", Response::HTTP_OK);
    }
}