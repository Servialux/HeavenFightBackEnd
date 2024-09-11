<?php

namespace App\Core\Domain\Models;

use App\Core\Domain\Enums\TilesType;

class Map {
    private int $tilesX;
    private int $tilesY;
    private TilesType $tilesType;
    public function __construct(int $tilesX, int $tilesY, TilesType $tilesType)
    {
        $this->tilesX = $tilesX;
        $this->tilesY = $tilesY;
        $this->tilesType = $tilesType;
    }

    public function genMapArray(){
        $tilesXMax = $this->tilesX/2;
        $tilesXMin = -($this->tilesX/2);
        $tilesYMax = $this->tilesY/2;
        $tilesYMin = -($this->tilesY/2);

        $tiles = [];
        for ($x=$tilesXMin; $x = $tilesXMax ; $x++) {
            $tile = new Tiles(TilesType::DEFAULT, $tilesXMax+$x, 0);
            array_push($tiles,$tile);
        }

        foreach ($tiles as $tile) {
            $tile->setPosY($y)
        }
    }

}
