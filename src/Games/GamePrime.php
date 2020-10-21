<?php

namespace Brain\Games\Games\GamePrime;

use function Brain\Games\Engine\startEngine;

use const Brain\Games\Constants\ROUNDS_COUNT;

function isPrime($x)
{
    if ($x < 2) {
        return false;
    }
    for ($i = 2; $i < ($x / 2); $i++) {
        if ($x % $i == 0) {
            return false;
        }
    }
    return true;
}

function playGame()
{
    $thepoint = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $questionsAnswers = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(0, 100);
        $rightAnswer = isPrime($question) ? 'yes' : 'no';
        $questionsAnswers[$i] = [$question, $rightAnswer];
    }

    startEngine($thepoint, $questionsAnswers);
}
