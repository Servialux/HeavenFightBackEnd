<?php

namespace App\Core\Domain\Traits;

use App\Core\Domain\Enums\ControlsEnum;

trait ControlsTrait {
    private int $posX;
    private int $posY;

    /**
     *
     * @return array<int,int>
     */
    private function getPos(): array {
        return [$this->posX, $this->posY];
    }

    /**
     * @TODO: Need to add more control
     *
     * @param ControlsEnum $key Send pressed control
     * @param int $caseNumber Number of case to up
     *
     * @return array<int,int>
    */
    public function move(ControlsEnum $key, int $caseNumber): array{
        match ($key) {
            ControlsEnum::UP => $this->posY = $this->posY + $caseNumber,
            ControlsEnum::DOWN => $this->posY = $this->posY - $caseNumber,
            ControlsEnum::LEFT => $this->posX = $this->posX - $caseNumber,
            ControlsEnum::RIGHT => $this->posY = $this->posX + $caseNumber
        };
        return $this->getPos();
    }
}
