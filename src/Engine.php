<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function startEngine($thepoint, $questionsAnswers)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($thepoint);
    foreach ($questionsAnswers as $qA) {
        line("Question: {$qA[0]}");
        $playerAnswer = prompt('Your answer');
        if ($qA[1] !== $playerAnswer) {
            line("'{$playerAnswer}' is wrong answer ;(. Correct answer was '{$qA[1]}'. 
Let's try again, {$name}!");
            return false;
        }
        line("Correct!");
    }
    line("Congratulations, {$name}!");
    return true;
}
