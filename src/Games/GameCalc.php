<?php

namespace Brain\Games\Games\GameCalc;

use function Brain\Games\Engine\startEngine;

use const Brain\Games\Constants\ROUNDS_COUNT;

function solving($x, $y, $operator)
{
    switch ($operator) {
        case '*':
            return $x * $y;
        case '-':
            return $x - $y;
        case '+':
            return $x + $y;
        default:
            throw new Error("Unknown operator: '{$operator}'!");
    }
}
  
function playGame()
{
    $thepoint = 'What is the result of the expression?';

    $operators = ['*', '-', '+'];
    $questions_answers = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $x = rand(-30, 30);
        $y = rand(-30, 30);
        $randKey = array_rand($operators);
        $operator = $operators[$randKey];
        $question = "{$x} {$operator} {$y}";
        $rightAnswer = (string) solving($x, $y, $operator);
        $questions_answers[$i] = [$question, $rightAnswer];
    }

    startEngine($thepoint, $questions_answers);
}
