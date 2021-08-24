<?php

$player1 = 'O';
$player2 = 'X';

$_1 = " ";
$_2 = " ";
$_3 = " ";
$_4 = " ";
$_5 = " ";
$_6 = " ";
$_7 = " ";
$_8 = " ";
$_9 = " ";

$player1arr = [];
$player2arr = [];
$combos = [
    [$_1,$_2,$_3],
    [$_4,$_5,$_6],
    [$_7,$_8,$_9],
    [$_1,$_4,$_7],
    [$_2,$_5,$_8],
    [$_3,$_6,$_9],
    [$_1,$_5,$_9],
    [$_3,$_5,$_7]
];

function display_board($_1, $_2, $_3, $_4, $_5, $_6, $_7, $_8, $_9) {

    echo " {$_1} | {$_2} | {$_3} \n";
    echo "---+---+---\n";
    echo " {$_4} | {$_5} | {$_6} \n";
    echo "---+---+---\n";
    echo " {$_7} | {$_8} | {$_9} \n";
}


for ($i = 1; $i <= 10; $i++) {
    display_board($_1, $_2, $_3, $_4, $_5, $_6, $_7, $_8, $_9);

    if ($i === 10) {
        echo 'The game is a tie.' . PHP_EOL;
    } else if ($_1 === $_2 && $_2 === $_3 && $_1 !== ' ') {
        echo "{$_1} won" . PHP_EOL;
        break;
    } else if ($_1 === $_5 && $_5 === $_9 && $_1 !== ' ') {
        echo "{$_1} won" . PHP_EOL;
        break;
    } else if ($_3 === $_5 && $_5 === $_7 && $_3 !== ' ') {
        echo "{$_3} won" . PHP_EOL;
        break;
    } else if ($_4 === $_5 && $_5 === $_6 && $_4 !== ' ') {
        echo "{$_4} won" . PHP_EOL;
        break;
    } else if ($_7 === $_8 && $_8 === $_9 && $_7 !== ' ') {
        echo "{$_7} won" . PHP_EOL;
        break;
    } else if ($_1 === $_4 && $_4 === $_7 && $_1 !== ' ') {
        echo "{$_1} won" . PHP_EOL;
        break;
    } else if ($_2 === $_5 && $_5 === $_8 && $_2 !== ' ') {
        echo "{$_2} won" . PHP_EOL;
        break;
    } else if ($_3 === $_6 && $_6 === $_9 && $_3 !== ' ') {
        echo "{$_3} won" . PHP_EOL;
        break;
    } else if ($i % 2 === 0) {
         $chosenRow = (int) readline ("'{$player2}', choose your row: ");
         $chosenColumn = (int) readline ("'{$player2}', choose your column: ");
    } else if ($i % 2 !== 0) {
         $chosenRow = (int) readline ("'{$player1}', choose your row: ");
         $chosenColumn = (int) readline ("'{$player1}', choose your column: ");
    }


    if ($chosenRow === 1 && $chosenColumn === 1) {
        if ($i % 2 === 0) {
            $_1 = $player2;
        } else {
            $_1 = $player1;
        }
    }
    if ($chosenRow === 1 && $chosenColumn === 2) {
        if ($i % 2 === 0) {
            $_2 = $player2;
        } else {
            $_2 = $player1;
        }
    }
    if ($chosenRow === 1 && $chosenColumn === 3) {
        if ($i % 2 === 0) {
            $_3 = $player2;
        } else {
            $_3 = $player1;
        }
    }
    if ($chosenRow === 2 && $chosenColumn === 1) {
        if ($i % 2 === 0) {
            $_4 = $player2;
        } else {
            $_4 = $player1;
        }
    }
    if ($chosenRow === 2 && $chosenColumn === 2) {
        if ($i % 2 === 0) {
            $_5 = $player2;
        } else {
            $_5 = $player1;
        }
    }
    if ($chosenRow === 2 && $chosenColumn === 3) {
        if ($i % 2 === 0) {
            $_6 = $player2;
        } else {
            $_6 = $player1;
        }
    }
    if ($chosenRow === 3 && $chosenColumn === 1) {
        if ($i % 2 === 0) {
            $_7 = $player2;
        } else {
            $_7 = $player1;
        }
    }
    if ($chosenRow === 3 && $chosenColumn === 2) {
        if ($i % 2 === 0) {
            $_8 = $player2;
        } else {
            $_8 = $player1;
        }
    }
    if ($chosenRow === 3 && $chosenColumn === 3) {
        if ($i % 2 === 0) {
            $_9 = $player2;
        } else {
            $_9 = $player1;
        }
    }
}
