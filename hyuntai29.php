<?php
if (!isset($_GET['rate'])) exit('Please input rate');
$rate = $_GET['rate'];
// 1
$img = imagecreate(400,40);
// 2
$yellow = imagecolorallocate($img, 255, 255, 0);
imagefilledrectangle($img,0,0,400,40,$yellow);
$red = imagecolorallocate($img, 255, 0, 0);
imagefilledrectangle($img,0,0,intval($rate/100*400),40,$red);

// 3
header('Content-Type: image/jpeg');
imagejpeg($img);
// 4
imagedestroy($img);