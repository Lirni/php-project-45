<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\run;

const DESCRIPTION = 'What is the result of the expression?';

function runGame()
{
    $rounds = [];
    $operators = ['+', '-', '*'];

    for ($i = 0; $i < \BrainGames\Engine\ROUNDS_COUNT; $i++) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $operator = $operators[array_rand($operators)];

        $question = "{$num1} {$operator} {$num2}";
        $correctAnswer = 0;

        switch ($operator) {
            case '+':
                $correctAnswer = $num1 + $num2;
                break;
            case '-':
                $correctAnswer = $num1 - $num2;
                break;
            case '*':
                $correctAnswer = $num1 * $num2;
                break;
            default:
                rerurn 0;
        }

        $rounds[] = [$question, (string) $correctAnswer];
    }

    run(DESCRIPTION, $rounds);
}
