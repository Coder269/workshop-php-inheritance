<?php

namespace App\Model;


use App\Interface\IdentifiableInterface;

class Dog extends Animal implements IdentifiableInterface
{
    public function makeSound(): string
    {
        return "Woof";
    }

    public function getIdentifier(): string
    {
        return "Dog";
    }

}
