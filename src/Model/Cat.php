<?php

namespace App\Model;

use App\Interface\IdentifiableInterface;

class Cat extends Animal implements IdentifiableInterface
{
    public function makeSound(): string
    {
        return "Meow";

    }

    public function getIdentifier(): string
    {
        return "Cat";
    }
}

