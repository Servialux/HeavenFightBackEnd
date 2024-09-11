<?php

namespace App\Core\Domain\Models;

use App\Core\Domain\Enums\TilesType;

class Tiles {
    private TilesType $type;
    private int $posX;
    private int $posY;

    public function __construct(TilesType $type, Int $posX, Int $posY)
    {
        $this->type = $type;
        $this->posX = $posX;
        $this->posY = $posY;
    }

    public function setType(TilesType $type): void{
        $this->type = $type;
    }

    public function getType(): TilesType{
        return $this->type;
    }

    public function setPosX(Int $pos):void {
        $this->posX = $pos;
    }

    public function setPosY(Int $pos):void {
        $this->posY = $pos;
    }

    public function getPosX():int {
        return $this->posX;
    }

    public function getPosY():int {
       return $this->posY;
    }
    /**
    * Return Tiles Position
    *
    * @return array<int,int>
    *
    */
    public function getPosXY(): array {
        return  [$this->posX, $this->posY];
    }
}
