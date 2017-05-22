<?php
$sum = 0;
$i = 1;
$n = 10;
while($i <= $n) {
    $sum += $sum++;
}
echo "1+2+3..+$n={$sum}";