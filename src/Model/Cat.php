<?php

namespace App\Model;

use App\Interface\AdoptabtableInterface;
use App\Interface\IdentifiableInterface;

class Cat extends Animal implements IdentifiableInterface, AdoptabtableInterface
{
    private string $shipNumber;
    private const int MAXIMUM_ADOPTION_AGE = 15;

    public function __construct(string $name, int $age, float $weight, string $shipNumber)
    {
        parent::__construct($name, $age, $weight);
        $this->shipNumber = $shipNumber;
    }

    public function makeSound(): string
    {
        return "Meow";

    }

    public function getIdentifier(): string
    {
        return $this->shipNumber;
    }

    public function canBeAdopted(): bool
    {
        return $this->getAge() < self::MAXIMUM_ADOPTION_AGE;
    }
}

