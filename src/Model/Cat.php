<?php

namespace App\Model;

use App\Interface\IdentifiableInterface;

class Cat extends Animal implements IdentifiableInterface
{
    private string $shipNumber;

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
}

