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

    /**
     * @return array<Tiles>
     */
    public function genMapArray(): array{
        $tilesXMax = $this->tilesX/2;
        $tilesXMin = -($this->tilesX/2);
        $tilesYMax = $this->tilesY/2;
        $tilesYMin = -($this->tilesY/2);
        $totalTiles = ($this->tilesX) * ($this->tilesY);

        $tiles = [];
        for ($i = 0; $i < $totalTiles; $i++) {
            $x = $tilesXMin + ($i % $this->tilesX); // Reste de la division pour le cycle X
            $y = $tilesYMin + floor($i / $this->tilesX); // Division entière pour incrémenter Y après chaque ligne

            $tile = new Tiles($i, TilesType::DEFAULT, 0, 0);
            $tile->setPosX($x);
            $tile->setPosY((int)$y);

            $tiles[] = $tile;
        }

        return $tiles;
    }

}
