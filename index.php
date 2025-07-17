<?php

spl_autoload_register(function ($className) {
    $path = str_replace('App', 'src', $className);
    $path = str_replace('\\', '/', $path);
    require_once $path . '.php';
});

use App\Model\{Animal, Cat, Dog, Bird, Refuge, Adopter};


$catty = new Cat("Catty", 2, 3);
$doggy = new Dog("Doggy", 4, 15);
$birdy = new Bird("Birdy", 1, 0.1);

$refuge = new Refuge();

$refuge->addAnimal($catty);
$refuge->addAnimal($doggy);
$refuge->addAnimal($birdy);

echo "The total number of instantiated animals is " . Animal::getAnimalsTotalNumber() . PHP_EOL; //static methods are used widely

echo "The number of animals inside the refuge is " . $refuge->getAnimalsNumber() . PHP_EOL;

$refuge->makeAllSounds();

$Zaher = new Adopter("Zaher");
$Zaher->adoptAnimal($catty);
$Zaher->adoptAnimal($doggy);
$Zaher->adoptAnimal($catty);

print_r($Zaher->getAdoptedAnimals());




