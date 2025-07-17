<?php

namespace App\Model;

class Bird extends Animal
{
    public function makeSound(): string
    {
        return "Chirp";
    }
}
