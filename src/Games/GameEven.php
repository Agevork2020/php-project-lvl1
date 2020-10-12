<?php

namespace Brain\Games\Games\GameEven;

use function Brain\Games\Engine\startEngine;

function playGame()
{
    $thepoint = 'Answer "yes" if the number is even, otherwise answer "no".';

    
    $result = [];
    for($i = 0; $i < 3; $i++) {
        $question = rand(-100, 100);
        $rightAnswer = $question % 2 === 0 ? 'yes' : 'no';
        $result[$i] = [$question, $rightAnswer];
    }

    startEngine($thepoint, $result);
}

