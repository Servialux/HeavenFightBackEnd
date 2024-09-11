<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class MapGenerationController extends AbstractController
{
    const MAP_TILES_X = (int) 10;
    const MAP_TILES_Y = (int) 10;

    #[Route('/map/generation', name: 'app_map_generation')]
    public function __invoke(): JsonResponse
    {
        $map = [];

        






        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MapGenerationController.php',
        ]);
    }
}
