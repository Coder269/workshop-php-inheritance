<?php

require_once 'autoloader.php';

use App\Model\{Animal, Cat, Dog, Bird, Refuge, Adopter};
use App\Exception\AlreadyAdoptedException;
use App\Exception\AnimalNotInTheRefuge;
use App\Exception\CanNotBeAdopted;
use App\Utils\AnimalFormatter;
use App\Utils\errorHandler;

errorHandler::register();

$catty = new Cat("Catty", 2, 3, "012025");
$doggy = new Dog("Doggy", 4, 15, "022025");
$birdy = new Bird("Birdy", 1, 0.1);
$catty2 = new Cat("Catty 2", 1, 5, "022025");


$refuge = new Refuge();

$refuge->addAnimal($catty);
$refuge->addAnimal($doggy);
$refuge->addAnimal($birdy);

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


try {
    $refuge->adopt($Zaher, $birdy);
} catch (AnimalNotInTheRefuge $exception) {
    echo $exception->getMessage() . PHP_EOL;
} catch (AlreadyAdoptedException $exception2) {
    echo $exception2->getMessage() . PHP_EOL;
} catch (CanNotBeAdopted $exception3) {
    echo $exception3->getMessage() . PHP_EOL;
}

try {
    $refuge->adopt($Zaher, $catty);
} catch (AnimalNotInTheRefuge $exception) {
    echo $exception->getMessage() . PHP_EOL;
} catch (AlreadyAdoptedException $exception2) {
    echo $exception2->getMessage() . PHP_EOL;
}

try {
    $refuge->adopt($Zaher, $catty2);
} catch (AnimalNotInTheRefuge $exception) {
    echo $exception->getMessage() . PHP_EOL;
} catch (AlreadyAdoptedException $exception2) {
    echo $exception2->getMessage() . PHP_EOL;
}

// $refuge->adopt($Zaher, $catty2); //if activated this line will lead to exception handler error and stops the program
//because the exception was not caught using try/catch so it was caught instead using the errorHandler


echo PHP_EOL;

echo "Zaher's adopted animals are:" . PHP_EOL;
print_r($Zaher->getAdoptedAnimals());
echo PHP_EOL;

echo "Describing a specific animal using a static method:" . PHP_EOL;
AnimalFormatter::describeAnimal($catty);

echo PHP_EOL;

echo "The identifier of " . $catty->getName() . " is " . $catty->getIdentifier();



