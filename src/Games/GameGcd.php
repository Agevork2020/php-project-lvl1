<?php

namespace Brain\Games\Games\GameGcd;

use function Brain\Games\Engine\startEngine;

use const Brain\Games\Constants\ROUNDS_COUNT;

function gcd($x, $y)
{
    if ($y) {
        return gcd($y, $x % $y);
    }
    return $x;
}

function playGame()
{
    $thepoint = 'Find the greatest common divisor of given numbers.';
    
    $questionsAnswers = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $rand1 = rand(0, 50);
        $rand2 = rand(0, 50);
        $question = "{$rand1} {$rand2}";
        $rightAnswer = (string) gcd($rand1, $rand2);
        $questionsAnswers[$i] = [$question, $rightAnswer];
    }
    startEngine($thepoint, $questionsAnswers);
}
