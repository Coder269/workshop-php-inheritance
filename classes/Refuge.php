<?php

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
            $animal->makeSound();
    }

    public function getAnimalsNumber(): int
    {
        return count($this->animals);
    }
}