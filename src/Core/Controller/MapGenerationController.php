<?php

namespace App\Core\Controller;

use App\Core\Domain\Enums\TilesType;
use App\Core\Domain\Models\Map;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class MapGenerationController extends AbstractController
{
    private const MAP_TILES_X = 10;
    private const MAP_TILES_Y = 10;

    #[Route('/map/generation', name: 'app_map_generation', methods:['GET'])]
    public function __invoke(): JsonResponse
    {
        $map = new Map(self::MAP_TILES_X, self::MAP_TILES_Y, TilesType::DEFAULT);
        return $this->json($map->genMapArray(), 200);
    }
}
