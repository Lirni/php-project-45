<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\run;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function runGame()
{
    $rounds = [];
    for ($i = 0; $i < \BrainGames\Engine\ROUNDS_COUNT; $i++) {
        $question = rand(1, 100);
        $correctAnswer = ($question % 2 === 0) ? 'yes' : 'no';
        $rounds[] = [(string) $question, $correctAnswer];
    }

    run(DESCRIPTION, $rounds);
}
