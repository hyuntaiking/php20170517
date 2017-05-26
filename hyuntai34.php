<?php
include 'hyuntaiapi.php';
$id = 'A123456789';
if (TWID::chkId($id)) {
    $twid1 = new TWID($id);
    echo $twid1->get_area() . '<br>';
    $twid1 = new TWID($id);
    $twid2 = new TWID($id);
    $twid3 = new TWID($id);
    $twid4 = new TWID($id);
    echo 'count:' . TWID::$count . '<br>';
} else {
    echo "XX <br>";
}


