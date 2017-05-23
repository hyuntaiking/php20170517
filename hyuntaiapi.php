<?php
// f(x) = 2x + 3
function fx($x) {
    $result = 2 * $x + 3;
    return $result;
}
function sayYa($name) {
    echo "Ya! {$name}<br>";
}
function say($name, $pre = 'Hello') {
    echo "{$pre}! {$name}<br>";
}
function sayHello() {
    $name = func_get_args();
    foreach ($name as $value) {
        echo "Hello !{$value}<br>";
    }
}
function createLottery() {
    $ball = array();
    $ball = range(0,49);
    shuffle($ball);
    for ($i=0; $i<6; $i++) {
        $result[] = $ball[$i];
    }
    sort($result);

    return $result;
}