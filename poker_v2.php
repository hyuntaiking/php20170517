<?php
$poker = array();
$check = array();
for ($i=1; $i<=51; $i++) {
    $check[$i] = false;
}
for ($i=0; $i<=51; $i++) {
    do {
        $temp = rand(0,51);
        $isDuplicate = false;
        if ($check[$temp]) {
            $isDuplicate = true;
        } else {
            $poker[$i] = $temp;
            $check[$temp] = true;
        }
    }while($isDuplicate);

    echo "$poker[$i]<br>";
}