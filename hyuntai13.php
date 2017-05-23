<?php
include 'hyuntaiapi.php';
$num = fx(4);
echo $num;
sayHello('hyntai');
sayHello('Taylor Swift');
say('huntai','Good morning');
say('Sam');
sayHello('Sam','Huuntai');
$Lottery = createLottery();
foreach ($Lottery as $value) {
    echo "{$value}<br>";
}


