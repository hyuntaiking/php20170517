<?php
// f(x) = 2x + 3
function fx($x) {
    $result = 2 * $x + 3;
    return $result;
}
function sayYa($name) {
    echo "Ya! {$name}<br>";
}
function say($name, $pre = 'Hello') {
    echo "{$pre}! {$name}<br>";
}
function sayHello() {
    $name = func_get_args();
    foreach ($name as $value) {
        echo "Hello !{$value}<br>";
    }
}
function createLottery() {
    $ball = array();
    $ball = range(0,49);
    shuffle($ball);
    for ($i=0; $i<6; $i++) {
        $result[] = $ball[$i];
    }
    sort($result);

    return $result;
}
class Bike {
    protected $speed;
    function __construct() {
        echo 'Bike construct'.'<br>';
    }

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
class Scooter extends Bike {
    function __construct() {
        parent::__construct(5);
        echo 'Scooter construct'.'<br>';
    }

    function upSpeed($gear = 1)
    {
        parent::upSpeed($gear);
        $this->speed*=2;
    }
}
class TWID {
    static $count = 0;
    var $id;
    function __construct($id) {
        $this->id = $id;
        self::$count++;
    }
    function get_area() {
        return '台中市';
    }
    function get_gender() {
        return 'Male';
    }
    static function chkId($twid) {
        $result = false;
        if (preg_match('/^[A-Z][12][0-9]{8}$/',$twid) > 0) {
            $n12s = substr($twid, 0, 1);
            $id = 'ABCDEFGHJKLMNPQRSTUVXYZWIO';
            $n12 = strpos($id, $n12s) + 10;
            $n[1] = intval($n12/10);
            $n[] = $n12 % 10;
            $n[] = $twid[1];
            $n[] = $twid[2];
            $n[] = $twid[3];
            $n[] = $twid[4];
            $n[] = $twid[5];
            $n[] = $twid[6];
            $n[] = $twid[7];
            $n[] = $twid[8];
            $n[] = $twid[9];
            $num = $n[1] * 1 + $n[2] * 9 + $n[3] * 8 + $n[4] * 7 + $n[5] * 6 +
                $n[6] * 5 + $n[7] * 4 + $n[8] * 3 + $n[9] * 2 + $n[10] * 1 +
                $n[11] * 1;
            if ($num % 10 == 0) {
                $result = true;
            } else {
                $result = false;
            }
        }
        return $result;
    }
}