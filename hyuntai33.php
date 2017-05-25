<?php
class Bike {
    private $speed;
    function upSpeed($gear=1) {
        $this->speed = $this->speed<1?1:$this->speed*(1+$gear*0.2);
    }
    function downSpeed() {
        $this->speed = $this->speed<1?0:$this->speed*0.7;
    }
    function getSpeed() {
        return $this->speed;
    }
}
$myBike = new Bike();
$urBike = new Bike();
$myBike->upSpeed(5);$myBike->upSpeed(5);$myBike->upSpeed(5);$myBike->upSpeed();
$urBike = new Bike();
$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();
$mySpeed = $myBike->getSpeed();
echo $mySpeed;
