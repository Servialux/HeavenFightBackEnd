<?php

namespace App\Core\Domain\Models;

use App\Core\Domain\Enums\TilesItem;
use App\Core\Domain\Enums\TilesState;
use App\Core\Domain\Enums\TilesType;

class Map {
    public function __construct(
        private int $tilesX,
        private int $tilesY,
        private TilesType $tilesType
    ){}

    /**
     * @return array<Tiles>
     */
    public function genMapArray(): array{
        $tilesXMin = -($this->tilesX/2);
        $tilesYMin = -($this->tilesY/2);
        $totalTiles = ($this->tilesX) * ($this->tilesY);
        $tiles = [];
        for ($i = 0; $i < $totalTiles; $i++) {
            $x = $tilesXMin + ($i % $this->tilesX); // Reste de la division pour le cycle X
            $y = $tilesYMin + floor($i / $this->tilesX); // Division entière pour incrémenter Y après chaque ligne

            $tile = new Tiles($i, $this->tilesType, 0, 0, TilesState::DEFAULT, TilesItem::NULL);
            $tile->setPosX($x);
            $tile->setPosY((int)$y);

            $tiles[] = $tile;
        }
        return $tiles;
    }

}
