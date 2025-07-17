<?php

namespace App\Model;


class Dog extends Animal
{
    public function makeSound(): string
    {
        return "Woof";
    }

}
