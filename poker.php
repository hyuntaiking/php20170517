<?php
$poker = array();
for ($i=0; $i<52; $i++) {
    $temp = rand(0,51);
    $isDuplicate = false;
    for ($j=0; $j<$i; $j++) {
        if ($temp == $poker[$j]) {
            $isDuplicate = true;
        }
    }
    if ($isDuplicate) {
        $i--;
        continue;
    } else {
        $poker[$i] = $temp;
    }
    echo "$poker[$i]<br>";
}