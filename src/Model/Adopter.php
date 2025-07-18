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
        $this->adoptedAnimals[] = $animal;
        $animal->setIsAdopted(true);
    }

    public function getAdoptedAnimals(): array
    {
        return $this->adoptedAnimals;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


}