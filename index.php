<?php

require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);

echo $bicycle->forward();

var_dump($bicycle);


require_once 'Car.php';

var_dump(Car::ALLOWED_ENERGIES);

$car = new Car('green', 4, 'electric');

echo $car->forward();

var_dump($car);


require_once 'Truck.php';

$camion = new Truck('blue', 2, 'fuel', 90);

var_dump($camion);

echo $camion->isStorageFull();