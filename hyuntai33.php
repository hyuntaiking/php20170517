<?php
include 'hyuntaiapi.php';
$myBike = new Bike();
$urBike = new Bike();
$myBike->upSpeed(5);$myBike->upSpeed(5);$myBike->upSpeed(5);$myBike->upSpeed();
$urBike = new Bike();
$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();
echo $myBike->getSpeed() . '<br>';
echo '<hr>';
$myScooter = new Scooter();
$myScooter->upSpeed(5);$myScooter->upSpeed(5);$myScooter->upSpeed(5);
echo $myScooter->getSpeed() . '<br>';