<?php
$poker = array();
for ($i=0; $i<=51; $i++) {
    do {
        $temp = rand(0,51);
        $isDuplicate = false;
        for ($j=0; $j<$i; $j++) {
            if ($temp == $poker[$j]) {
                $isDuplicate = true;
            }
        }
    }while($isDuplicate);
    $poker[$i] = $temp;
    echo "$poker[$i]<br>";
}