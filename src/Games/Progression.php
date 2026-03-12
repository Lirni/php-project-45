<?php

namespace BrainGames\Games\Games\Progression;

use function BrainGames\Engine\run;

const DESCRIPTION = 'What number is missing in the progression?';

function runGame()
{
    $rounds = [];

    for ($i = 0; $i < \BrainGames\Engine\ROUNDS_COUNT; $i++) {
        $start = rand(1, 20);
        $step = rand(1, 10);
        $length = rand(5, 10);
        $hiddenIndex = rand(0, $length - 1);

        $progression = [];
        for ($j = 0; $j < $length; $j++) {
            $progression[] = $start + $j * $step;
        }

        $correctAnswer = (string) $progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';

        $question = implode(' ', $progression);
        $rounds[] = [$question, $correctAnswer];
    }

    run(DESCRIPTION, $rounds);
}
