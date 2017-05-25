<?php
$fp = fopen('./hyuntai.txt', 'r') or exit('Open File Failure');
if ($fp) {
    echo 'OK'.'<br>';
} else {
    echo 'XX'.'<br>';
}
while ($line = fgets($fp)) {
    echo "{$line}<br>";
}
fclose($fp);
