<?php

namespace Brain\Games\Games\GameGcd;

use function Brain\Games\Engine\startEngine;

function playGame() 
{
$thepoint = 'Find the greatest common divisor of given numbers.';

function gcd ($x, $y) {
    if ($x === $y) {
        return $x;
    } elseif ($x % $y === 0) {
        return $y;
    } elseif ($y % $x === 0) {
        return $x;
    } else {
        return gcd($y, $x % $y);
    }
}
    $result = [];
    for ($i = 0; $i < 3; $i++) {
        $rand1 = rand(0, 50);
        $rand2 = rand(0, 50);
        $question = "{$rand1} {$rand2}";
        $rightAnswer0 = gcd($rand1, $rand2);
        $rightAnswer = "{$rightAnswer0}";
        $result[$i] = [$question, $rightAnswer];
    }
    startEngine($thepoint, $result);
}
