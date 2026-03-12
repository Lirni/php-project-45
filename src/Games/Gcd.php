<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\run;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function getGcd(int $a, int $b): int
{
    return ($a % $b) ? getGcd($b, $a % $b) : $b;
}

function runGame()
{
    $rounds = [];

    for ($i = 0; $i < \BrainGames\Engine\ROUNDS_COUNT; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);

        $question = "{$num1} {$num2}";
        $correctAnswer = (string) getGcd($num1, $num2);

        $rounds[] = [$question, $correctAnswer];
    }

    run(DESCRIPTION, $rounds);
}
