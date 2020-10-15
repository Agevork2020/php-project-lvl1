<?php

namespace Brain\Games\Games\GameCalc;

use function Brain\Games\Engine\startEngine;
function playGame()
{
    $thepoint = 'What is the result of the expression?';
    
    function solving ($x, $y, $operator) {
        if ($operator === '*') {
            return $x * $y;
        } elseif ($operator === '-') {
            return $x - $y;
        } elseif ($operator === '+') {
            return $x + $y;
        }

    }

    $result = [];
    for ($i = 0; $i < 3; $i++) {

        $rand1 = rand(-30, 30);
        $rand2 = rand(-30, 30);
        $operators = array('*', '-', '+');
        $rand_key = array_rand($operators);
        $rand_value = $operators[$rand_key];
        $question = "{$rand1} {$rand_value} {$rand2}";
        $rightAnswer0 = solving($rand1, $rand2, $rand_value);
        $rightAnswer = "{$rightAnswer0}";
        $result[$i] = [$question, $rightAnswer];
    }

    startEngine($thepoint, $result);
}
