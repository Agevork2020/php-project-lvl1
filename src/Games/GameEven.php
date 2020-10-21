<?php

namespace Brain\Games\Games\GameEven;

use function Brain\Games\Engine\startEngine;

use const Brain\Games\Constants\ROUNDS_COUNT;

function playGame()
{
    $thepoint = 'Answer "yes" if the number is even, otherwise answer "no".';
    
    $questionsAnswers = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(-100, 100);
        $rightAnswer = $question % 2 === 0 ? 'yes' : 'no';
        $questionsAnswers[$i] = [$question, $rightAnswer];
    }

    startEngine($thepoint, $questionsAnswers);
}
