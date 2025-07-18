<?php

namespace App\Model;

use App\Exception\AnimalNotInTheRefuge;
use App\Exception\CanNotBeAdopted;
use App\Interface\AdoptabtableInterface;
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
            echo "{$animal->getName()} de type " . $animal::class . " makes sound {$animal->makeSound()}" . PHP_EOL;
    }

    public function getAnimalsNumber(): int
    {
        return count($this->animals);
    }

    public function listIdentifiableAnimals(): void
    {
        foreach ($this->animals as $animal)
            if ($animal instanceof IdentifiableInterface)
                echo "{$animal->getName()} has identifier: {$animal->getIdentifier()}" . PHP_EOL;
    }

    public function adopt(Adopter $adopter, Animal $animalToAdopt): void
    {
        if (in_array($animalToAdopt, $this->animals)) {
            if ($animalToAdopt instanceof AdoptabtableInterface && $animalToAdopt->canBeAdopted()) {
                $adopter->adoptAnimal($animalToAdopt);
            } else
                throw new CanNotBeAdopted("Error: This animal can not be adopted!");
        } else
            throw new AnimalNotInTheRefuge("Error: This animal is not in the refuge!");
    }
}