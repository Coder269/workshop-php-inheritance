<?php

namespace App\Model;

//we added abstract to the class because it contains an abstract method "makeSound",
// this method is empty here but must be declared in all child classes
//abstract class also means it can not be instantiated (no objects) but only inherited.
abstract class Animal
{
    protected string $name;
    protected int $age;
    protected float $weight;
    protected bool $isAdopted = false;
    
    private static int $animalsTotalNumber = 0;


    public function __construct(string $name, int $age, float $weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
        self::$animalsTotalNumber++;
    }

    public abstract function makeSound(): string;


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight(float $weight): void
    {
        if ($weight > 0)
            $this->weight = $weight;
        else
            echo "The weight must be greater than 0";
    }

    public static function getAnimalsTotalNumber(): int
    {
        return self::$animalsTotalNumber;
    }

    public function setIsAdopted(bool $isAdopted): void
    {
        $this->isAdopted = $isAdopted;
    }

    public function isAdopted(): bool
    {
        return $this->isAdopted;
    }


}
