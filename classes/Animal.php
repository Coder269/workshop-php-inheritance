<?php

class Animal
{
    private string $name;
    private int $age;
    private float $weight;
    private static int $animalsTotalNumber = 0;

    public function __construct(string $name, int $age, float $weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
        self::$animalsTotalNumber++;
    }

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


}
