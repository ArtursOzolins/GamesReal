<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

//todo calculate an average value of the numbers

$sumNumbers = array_sum($numbers);
$averageNumbers = $sumNumbers / count($numbers);
echo $averageNumbers;
