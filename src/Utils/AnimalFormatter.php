<?php

namespace App\Utils;

use App\Model\Animal;

class AnimalFormatter
{

    public static function describeAnimal(Animal $animal): void
    {
        echo "This animal is named {$animal->getName()}" . PHP_EOL;
        echo "and its weight is {$animal->getWeight()}kg" . PHP_EOL;
        echo "and its age is {$animal->getAge()} years" . PHP_EOL;
    }
}