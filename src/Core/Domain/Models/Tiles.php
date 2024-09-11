<?php

namespace App\Core\Domain\Models;

use App\Core\Domain\Enums\TilesType;

class Tiles {
    private int $id;
    private TilesType $type;
    private int $posX;
    private int $posY;

    public function __construct(Int $id, TilesType $type, Int $posX, Int $posY)
    {
        $this->id = $id;
        $this->type = $type;
        $this->posX = $posX;
        $this->posY = $posY;
    }
    public function setId(int $id): void{
        $this->id = $id;
    }

    public function getId(): int{
        return $this->id;
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
