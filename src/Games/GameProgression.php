<?php

namespace Brain\Games\Games\GameProgression;

use function Brain\Games\Engine\startEngine;

use const Brain\Games\Constants\ROUNDS_COUNT;


function makeProgression($randLength, $randFirst, $randStep)
{
    $result = [];
    for ($i = 0; $i < $randLength; $i++) {
        $result[] = $randFirst + $randStep * $i;
    }
    return $result;
}


function playGame()
{
    $thepoint = 'What number is missing in the progression?';

    $questionsAnswers = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randLength = rand(5, 15);
        $randFirst = rand(0, 30);
        $randStep = rand(2, 10);
        $questionProgression = makeProgression($randLength, $randFirst, $randStep);
        $randomIndex = array_rand($questionProgression);
        $rightAnswer = $questionProgression[$randomIndex];
        $questionProgression[$randomIndex] = '...';
        $question = implode(' ', $questionProgression);
        $questionsAnswers[$i] = [$question, (string) $rightAnswer];
    }
    startEngine($thepoint, $questionsAnswers);
}
