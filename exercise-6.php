<?php

$words = [
    'socks',
    'chair',
    'table',
    'mirror',
    'lamp',
    'computer',
    'painting',
    'books',
    'walls'
];

$lettersOfWord = str_split($words[rand(0, count($words) - 1)], 1);
$lettersEmpty = [];
$lives = 10;
for ($i = 0; $i < count($lettersOfWord); $i++) {
    array_push($lettersEmpty, '_');
}

$missedLetters = [];


$wrongGuessCount = 0;
while ($wrongGuessCount < $lives) {
    echo '-=-=-=-=-=-=-=-=-=-=-=-=-=-' . PHP_EOL;
    echo PHP_EOL;
    echo 'Word: ' . implode(' ', $lettersEmpty) . PHP_EOL;
    echo PHP_EOL;
    echo 'Misses: ' . implode(' ', $missedLetters) . PHP_EOL;
    echo PHP_EOL;
    echo 'Lives: ' . str_repeat('♥ ', 10 - $wrongGuessCount) . PHP_EOL;
    echo PHP_EOL;
    $guessLetter = readline('Guess: ');
    echo PHP_EOL;
    echo '-=-=-=-=-=-=-=-=-=-=-=-=-=-' . PHP_EOL;
    if (!in_array($guessLetter, $lettersOfWord)) {
        array_push($missedLetters, $guessLetter);
        $wrongGuessCount++;
    } else {
        $lettersEmpty[array_search($guessLetter, $lettersOfWord)] = $guessLetter;
        $lettersOfWord[array_search($guessLetter, $lettersOfWord)] = '_';
    }
    if (!in_array('_', $lettersEmpty)) {
        echo PHP_EOL;
        echo 'You have WON!' . PHP_EOL;
        echo PHP_EOL;
        exit;
    }
}
if ($wrongGuessCount = $lives) {
    echo PHP_EOL;
    echo 'You have LOST!';
    echo PHP_EOL;
}
