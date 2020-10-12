<?php

namespace Brain\Games\Games\GamePrime;

use function Brain\Games\Engine\startEngine;

function playGame() 
{
$thepoint = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($x) {
    for ($i = 2; $i < ($x / 2); $i++) {
        if ($x % $i == 0) {
        return 'no';
        }
    }
return 'yes';
}

$result = [];
    for($i = 0; $i < 3; $i++) {
        $question = rand(0, 100);
        $rightAnswer = isPrime($question);
        $result[$i] = [$question, $rightAnswer];
    }

    startEngine($thepoint, $result);
}

