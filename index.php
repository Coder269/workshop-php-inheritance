<?php

require_once 'autoloader.php';

use App\Model\{Animal, Cat, Dog, Bird, Refuge, Adopter};
use App\Utils\AnimalFormatter;


$catty = new Cat("Catty", 2, 3);
$doggy = new Dog("Doggy", 4, 15);
$birdy = new Bird("Birdy", 1, 0.1);
$catty2 = new Cat("Catty 2", 1, 5);


$refuge = new Refuge();

$refuge->addAnimal($catty);
$refuge->addAnimal($doggy);
$refuge->addAnimal($birdy);
$refuge->addAnimal($catty2);

echo "The total number of instantiated animals is: " . Animal::getAnimalsTotalNumber() . PHP_EOL; //static methods are used widely

echo "The number of animals inside the refuge is " . $refuge->getAnimalsNumber() . PHP_EOL;

echo PHP_EOL;

echo "Making all animals in the refuge make sounds:" . PHP_EOL;
$refuge->makeAllSounds();

echo PHP_EOL;

echo "Listing identifiable animals in the refuge (cats and dogs mainly):" . PHP_EOL;
$refuge->listIdentifiableAnimals();

echo PHP_EOL;

$Zaher = new Adopter("Zaher");
$Zaher->adoptAnimal($catty);
$Zaher->adoptAnimal($doggy);
$Zaher->adoptAnimal($catty); //will not be adopted two times because the class Animal has a protected property isAdopted

echo "Zaher's adopted animals are:" . PHP_EOL;
print_r($Zaher->getAdoptedAnimals());
echo PHP_EOL;

echo "Describing a specific animal using a static method:" . PHP_EOL;
AnimalFormatter::describeAnimal($catty);



