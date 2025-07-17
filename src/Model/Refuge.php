<?php

namespace App\Model;

use App\Interface\IdentifiableInterface;

class Refuge
{
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function makeAllSounds(): void
    {
        foreach ($this->animals as $animal)
            echo "{$animal->getName()} makes sound {$animal->makeSound()}" . PHP_EOL;
    }

    public function getAnimalsNumber(): int
    {
        return count($this->animals);
    }

    public function listIdentifiableAnimals(): void
    {
        foreach ($this->animals as $animal)
            if ($animal instanceof IdentifiableInterface)
                echo "{$animal->getName()} is a {$animal->getIdentifier()}" . PHP_EOL;
    }
}