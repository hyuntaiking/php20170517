<?php
$i = 0;
for (firstPageHeader() ;$i<10; onEveryRow()) {
    echo $i++ . ':' . '<br>';
}
function firstPageHeader() {
    echo '<h2>Title</h2> <br>';
}
function onEveryRow() {
    echo '----------------------------------<br>';
}