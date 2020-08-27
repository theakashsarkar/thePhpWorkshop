<?php
require_once 'Vehicle.php';
class Motorcycle extends Vehicle{

}
$m1 = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2,'53WVC14598');
$m2 = new Motorcycle('Suzuki', 'Gixxer SF', 'Blue', 2,'53WVC14599');
echo "Available motorcycle are ".Motorcycle::$counter.PHP_EOL;