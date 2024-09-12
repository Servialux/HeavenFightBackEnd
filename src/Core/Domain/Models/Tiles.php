<?php

namespace App\Core\Domain\Models;

use App\Core\Domain\Enums\TilesItem;
use App\Core\Domain\Enums\TilesState;
use App\Core\Domain\Enums\TilesType;

class Tiles {

    public function __construct(
       private Int $id,
       private TilesType $type,
       private Int $posX,
       private Int $posY,
       private TilesState $state = TilesState::DEFAULT,
       private ?TilesItem $item = TilesItem::NULL
    ){}

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

    public function setState(TilesState $newState): void {
        $this->state = $newState;
    }

    public function getState(): ?TilesState {
        return $this->state;
    }

    public function addItem(TilesItem $item): void {
        $this->item ??= $item;
    }

    public function getItem(): ?TilesItem {
        return $this->item;
    }
}
