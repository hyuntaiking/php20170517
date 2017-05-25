<?php
//$imgSrc = imagecreatefromgif ("./imgw400.gif" );
$imgSrc = imagecreatefromjpeg("./imgh400.jpg" );
$imgDst = imagecreate(200, 200);
$imgSW = imagesx($imgSrc);
$imgSH = imagesy($imgSrc);
if ($imgSW>$imgSH){
    $imgDW = 200;
    $imgDH = $imgSH * 200 / $imgSW;
    $imgX = 0;
    $imgY = 200/2 - $imgDH/2;
}else{
    $imgDH = 200;
    $imgDW = $imgSW * 200 / $imgSH;
    $imgX = 200/2 - $imgDW/2;
    $imgY = 0;
}
imagecopyresized (
    $imgDst , $imgSrc,
    0 , 0,
    $imgX, $imgY,
    $imgDW , $imgDH ,
    $imgSW , $imgSH );
// 3
header('Content-Type: image/jpeg');
imagejpeg($imgDst);
// 4
imagedestroy ( $imgSrc );
imagedestroy ( $imgDst );