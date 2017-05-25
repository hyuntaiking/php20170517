<?php
// 1
$img = imagecreatefromjpeg('./upload/s1.jpg');
// 2
$yellow = imagecolorallocate($img, 255, 255, 0);
imagefttext ($img,96,0,0,300,$yellow,'fireflysung.ttf','Hello!World');
// 3
header('Content-Type: image/jpeg');
imagejpeg($img);
// 4
imagedestroy($img);