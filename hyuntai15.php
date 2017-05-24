<?php
foreach ($nameg as $value) {
    echo "{$value}<br>";
}
$account = $_REQUEST['account'];
$passwd = $_REQUEST['passwd'];
$birthday = $_REQUEST['birthday'];
$area = $_REQUEST['area'];
$like = $_REQUEST['like'];
echo "{$account}<br>";
echo "{$passwd}<br>";
echo "{$birthday}<br>";
echo "{$area}<br>";
foreach ($like as $value) {
    echo "{$value}<br>";
}



