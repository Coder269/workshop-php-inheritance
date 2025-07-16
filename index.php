<?php

//simpler auto-loader
spl_autoload_register(function ($class) {
    require "src/Model/" . $class . '.php';
});


$catty = new Cat("Catty", 2, 3);
$doggy = new Dog("Doggy", 4, 15);
$birdy = new Bird("Birdy", 1, 0.1);

$refuge = new refuge();

$refuge->addAnimal($catty);
$refuge->addAnimal($doggy);
$refuge->addAnimal($birdy);

echo "The total number of instantiated animals is " . Animal::getAnimalsTotalNumber() . PHP_EOL; //static methods are used widely

echo "The number of animals inside the refuge is " . $refuge->getAnimalsNumber() . PHP_EOL;

$refuge->makeAllSounds();
echo $catty->getAge();




