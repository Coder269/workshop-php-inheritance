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
        foreach ($this->adoptedAnimals as $adoptedAnimal) {
            if ($animal === $adoptedAnimal) {
                echo "This animal is already adopted" . PHP_EOL;
                return;
            }
        }
        $this->adoptedAnimals[] = $animal;
    }

    public function getAdoptedAnimals(): array
    {
        return $this->adoptedAnimals;
    }


}