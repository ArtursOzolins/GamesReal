<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

function sorterAsc($array) {
    sort($array);
    return $array;
}

//todo
echo "Original numeric array: ";
var_dump($numbers);

//todo
echo "Sorted numeric array: ";
var_dump(sorterAsc($numbers));

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: ";
var_dump($words);

//todo
echo "Sorted string array: ";
var_dump(sorterAsc($words));