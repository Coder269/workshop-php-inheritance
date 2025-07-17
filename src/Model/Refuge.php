<?php

namespace App\Model;

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
}