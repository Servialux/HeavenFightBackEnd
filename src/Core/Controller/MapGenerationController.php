<?php

namespace App\Core\Controller;

use App\Core\Action\GenerateMap;
use App\Core\Domain\Models\LaunchModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/launch', name: 'app_launch_game', methods:['GET', 'POST'])]
class MapGenerationController extends AbstractController
{

    public function __construct(
        private GenerateMap $generateMap,
        private SerializerInterface $serializerInterface
    ){}

    public function __invoke(Request $request): JsonResponse
    {
        $post = $this->serializerInterface->deserialize($request->getContent(), LaunchModel::class ,"json");

        /** @var LaunchModel $post */
        $map = ($this->generateMap)($post->getX(), $post->getY());
        return $this->json($map, 200);
    }
}
