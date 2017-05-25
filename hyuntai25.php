<?php
$fp = fopen('./hyuntai.txt', 'r+');
fwrite($fp,'Hello! Hyuntai');
fclose($fp);