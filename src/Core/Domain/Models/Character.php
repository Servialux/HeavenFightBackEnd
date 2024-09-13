<?php

namespace App\Core\Domain\Models;

use App\Core\Domain\Enums\CharactersType;
use App\Core\Domain\Enums\ItemsEffects;
use App\Core\Domain\Traits\ControlsTrait;

class Character{

    use ControlsTrait;

    public function __construct(
        private int $id,
        private string $name,
        private CharactersType $type,
        private float $speed,
        private ?ItemsEffects $effect,
    ){}

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getType(): CharactersType
    {
        return $this->type;
    }

    public function setType(CharactersType $type): void
    {
        $this->type = $type;
    }

    public function getSpeed(): float
    {
        return $this->speed;
    }

    public function setSpeed(float $speed): void
    {
        $this->speed = $speed;
    }

    public function getPosX(): int
    {
        return $this->posX;
    }

    public function setPosX(int $posX): void
    {
        $this->posX = $posX;
    }

    public function getPosY(): int
    {
        return $this->posY;
    }

    public function setPosY(int $posY): void
    {
        $this->posY = $posY;
    }

    public function getEffect(): ?ItemsEffects
    {
        return $this->effect;
    }

    public function setEffect(?ItemsEffects $effect): void
    {
        $this->effect ??= $effect;
    }

    public function getCharacter(): self {
        return $this;
    }
}
