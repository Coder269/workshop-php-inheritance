<?php

namespace App\Model;

final class Adopter
{
    private string $name;
    private array $adoptedAnimals = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function adoptAnimal(Animal $animal): void
    {
        if ($animal->isAdopted())
            return;
        $this->adoptedAnimals[] = $animal;
        $animal->setIsAdopted(true);
    }

    public function getAdoptedAnimals(): array
    {
        return $this->adoptedAnimals;
    }


}