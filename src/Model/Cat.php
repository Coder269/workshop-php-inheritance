<?php

namespace App\Model;

class Cat extends Animal
{
    public function makeSound(): string
    {
        return "Meow";

    }
}
