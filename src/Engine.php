<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function startEngine($thepoint, $result)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($thepoint);
    $i = 0;
    while ($i < 3) {
        line("Question: {$result[$i][0]}");
        $playerAnswer = prompt('Your answer');
        if ($result[$i][1] === $playerAnswer) {
            print_r("Correct\n");
            $i++;
        } else {
            print_r("'{$playerAnswer}' is wrong answer ;(. Correct answer was '{$result[$i][1]}'. 
Let's try again, {$name}!\n");
            break;
        }
        print_r("Congratulations, {$name}!\n");
    }
}
