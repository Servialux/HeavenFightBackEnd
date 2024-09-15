<?php

namespace App\Core\Action;

use App\Core\Domain\Enums\TilesType;
use App\Core\Domain\Models\Map;
use App\Core\Domain\Models\Tiles;
use Exception;

class GenerateMap{
    /**
     * @return Array<Tiles>|Exception
     */
    public function __invoke(int $tilesX, int $tilesY): Array|Exception
    {
        try{
            $map = new Map($tilesX, $tilesY, TilesType::DEFAULT);
        }catch(Exception $e){
            return new Exception("Error during map generation: ". $e->getMessage(), 500);
        }
        return $map->genMapArray();
    }
}
