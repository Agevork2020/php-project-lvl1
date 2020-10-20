<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function startEngine($thepoint, $questions_answers)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($thepoint);
    $i = 0;
    while ($i < count($questions_answers)) {
        line("Question: {$questions_answers[$i][0]}");
        $playerAnswer = prompt('Your answer');
        if ($questions_answers[$i][1] !== $playerAnswer) {
            line("'{$playerAnswer}' is wrong answer ;(. Correct answer was '{$questions_answers[$i][1]}'. 
Let's try again, {$name}!");
            return false;
        } 
        line("Correct!");
        $i++;
    } 
    line("Congratulations, {$name}!");
}


