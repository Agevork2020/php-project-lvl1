<?php

namespace Brain\Games\Games\GameProgression;

use function Brain\Games\Engine\startEngine;
use const Brain\Games\Constants\ROUNDS_COUNT;


function makeQuestion($randLength, $randHidden, $randFirst, $randStep)
{
    $result1 = '';
    for ($i = 1; $i < $randLength; $i++) {
        $x = $randFirst + $randStep * $i;
        if($i === $randHidden) {
            $x = "...";
        }    
        $result1 .= " $x";    
    }
    return "{$randFirst}{$result1}";
}

function playGame()
{
    $thepoint = 'What number is missing in the progression?';

    $questions_answers = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randLength = rand(5, 15);
        $randHidden = rand(1, $randLength - 1);
        $randFirst = rand(0, 30);
        $randStep = rand(2, 10);
        $question = makeQuestion($randLength, $randHidden, $randFirst, $randStep);
        $rightAnswer = (string) ($randFirst + $randStep * $randHidden);
        $questions_answers[$i] = [$question, $rightAnswer];
    }
    startEngine($thepoint, $questions_answers);
}
