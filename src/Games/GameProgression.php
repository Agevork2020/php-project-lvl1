<?php

namespace Brain\Games\Games\GameProgression;

use function Brain\Games\Engine\startEngine;

function playGame() 
{
$thepoint = 'What number is missing in the progression?';

function makeQuestion($randLength, $randHidden, $randFirst, $randStep) {
    $result1 = '';
    for ($i = 0; $i < $randHidden; $i++) {
        $x = $randFirst + $randStep * $i;
        $result1 = "{$result1} {$x}";
    }
    $result2 = '';
    for ($i = $randHidden + 1; $i < $randLength; $i++) {
        $y = $randFirst + $randStep * $i;
        $result2 = "{$result2} {$y}";
    }
    return "{$result1} ... {$result2}";

}

$result = [];
for($i = 0; $i < 3; $i++) {

    $randLength = rand(5, 15);
    $randHidden = rand(0, $randLength - 1);
    $randFirst = rand(0, 30);
    $randStep = rand(2, 10);
    $question = makeQuestion($randLength, $randHidden, $randFirst, $randStep);
    $rightAnswer0 = $randFirst + $randStep * $randHidden;
    $rightAnswer = "{$rightAnswer0}";
    $result[$i] = [$question, $rightAnswer];
}

    startEngine($thepoint, $result);
}