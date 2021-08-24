<?php

function arrayCreator() {
    $arr = [];
    $arraySize = 10;
    for ($i = 1; $i <= $arraySize; $i++) {
        array_push($arr, rand(1,100));
    }
    return $arr;
}

$array1 = arrayCreator();
$array2 = $array1;
$replacement = array(10 => -7);

$array1 = array_replace($array1, $replacement);

var_dump($array1);
var_dump($array2);
