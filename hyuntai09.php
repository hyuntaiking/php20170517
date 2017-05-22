<?php
for ($i; $i<= 100; $i++) {
    $num = rand(1, 6);
    switch($num) {
        case 1: $num1++; break;
        case 2: $num2++; break;
        case 3: $num3++; break;
        case 4: $num4++; break;
        case 5: $num5++; break;
        case 6: $num6++; break;
     }
}
echo "num1: {$num1}<br>";
echo "num2: {$num2}<br>";
echo "num3: {$num3}<br>";
echo "num4: {$num4}<br>";
echo "num5: {$num5}<br>";
echo "num6: {$num6}<br>";

$p = array(1=>0,0,0,0,0,0);
for ($i=1; $i<=100; $i++){
    $p[rand(1, 6)]++;
}
for ($i=1; $i<=6; $i++){
    echo "p{$i}: {$p[$i]}<br>";
}
