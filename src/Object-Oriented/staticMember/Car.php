<?php
require_once 'Vehicle.php';
class Car extends Vehicle{

}
$car1 = new Car('Honda', 'Civic', 'Red', 4, '23CJ4567');
$car2 = new Car('Toyota', 'Allion', 'White', 4, '24CJ4568');
echo "Available cars are " . Car::$counter . PHP_EOL;