<?php

namespace App\Model;

use App\Exception\AlreadyAdoptedException;

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
        if ($animal->isAdopted()) {
            throw new AlreadyAdoptedException("Error: This animal is already adopted!");
        }
        $this->adoptedAnimals[] = $animal;
        $animal->setIsAdopted(true);
    }

    public function getAdoptedAnimals(): array
    {
        return $this->adoptedAnimals;
    }


}