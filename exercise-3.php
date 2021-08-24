<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

//echo "Enter the value to search for: ";

//todo check if an array contains a value user entered

$findThis = (int) readline ("Enter the value to search for: ");

if (array_search($findThis, $numbers) > 0) {
    echo "Array contains number {$findThis}" . PHP_EOL;
} else {
    echo "Array does not contain number {$findThis}" . PHP_EOL;
}
